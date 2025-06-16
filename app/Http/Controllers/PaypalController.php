<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Omnipay\Omnipay;
use Gloudemans\Shoppingcart\Facades\Cart;
use App\Models\Commende;
use App\Models\Shop;
use Illuminate\Support\Facades\Date;
use Illuminate\Support\Facades\Auth;

class PaypalController extends Controller
{
    private $gateway;

    public function __construct() {
        $this->gateway=Omnipay::create('PayPal_Rest');
        $this->gateway->setClientId(env('PAYPAL_CLIENT_ID'));
        $this->gateway->setSecret(env('PAYPAL_CLIENT_SECRET'));
        $this->gateway->setTestMode(true);
    }

    public function pay(Request $request)
    {
        try {
            $response=$this->gateway->purchase(array(
                'amount'=>round(Cart::total()/10000),
                'currency' => env('PAYPAL_CURRENCY'),
                'returnUrl'=> url('success'),
                'cancelUrl'=> url('error'),
            ))->send();

            if ($response->isRedirect()) {
                $response->redirect();
            }else{
                return $response->getMessage();
            }

        } catch (\Throwable $th) {
            return $th->getMessage();
        }
    }

    public function success(Request $request)
    {
        if ($request->input('paymentId') && $request->input('PayerID')) {
            $transaction=$this->gateway->completePurchase(array(
                'payer_id'=>$request->input('PayerID'),
                'transactionReference'=>$request->input('paymentId')
            ));

            $response=$transaction->send();

            if ($response->isSuccessful()) {
                $arr=$response->getData();

                $mont=new Commende();
                $mont->payment_intent_id=$arr['id'];
                $mont->montant=$arr['transactions'][0]['amount']['total'] * 10000;
                $mont->payment_created_at=Date::now();
                $products=[];
                $i=0;
                foreach (Cart::content() as $product) {
                    $products['product_' .$i][] = $product->model->titre;
                    $products['product_' .$i][] = $product->model->prix;
                    $products['product_' .$i][] = $product->qty;
                    $i++;

                }
                $mont->produits=serialize($products);
                $mont->user_id=Auth::user()->id;
                
                $mont->save();
                if ($mont) {
                    $this->updateStock();
                    Cart::destroy();
                    Session::flash("success","Votre commande à été traitée avec succès" );
                    return redirect()->route('cart');
                    //return response()->json(['success' =>'payment intent succeeded']);
                } else{
                    Session::flash("error","Une erreur s'est produite lors du traitement de votre commande" );
                    return redirect()->route('cart');
                }
            }else{
                return $response->getMessage();
            }

        } else {
            return 'Payment declined!';
        }
        
    }

    private function updateStock()
    {
        foreach (Cart::content() as $item) {
            $shop=Shop::find($item->model->id);
            $shop->update(['stock' => $shop->stock-$item->qty]);
        }
    }

    public function error()
    {
        return 'User declined the payment! ';
    }

}
