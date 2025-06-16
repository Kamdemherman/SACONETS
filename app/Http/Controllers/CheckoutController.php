<?php

namespace App\Http\Controllers;

use Stripe\Stripe;
use Stripe\StripeClient;
use Stripe\PaymentIntent;
use Illuminate\Support\Arr;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Support\Facades\Validator;
use App\Models\Commende;
use App\Models\Shop;
use Illuminate\Support\Facades\Date;
use Illuminate\Support\Facades\Auth;

class CheckoutController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $meta_image="";
        $meta_titre="Checkout";
        return view('front.checkout')->with('meta_titre',$meta_titre)->with('meta_image',$meta_image);
    }

    public function Choix(Request $request)
    {
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if ($request->type == 'stripe') {

            Stripe::setApiKey('sk_test_51L02GtIPKVIU8ML6vpulDNEWF4StNBPd3ScZHbduSB9ajVq3XDX2whRi8ENPvzZCfRjzlWsYMwZ5aM5E3OXzR3ow00j1fpdJBq');

            $intent=PaymentIntent::create(
            [
                'amount' => round(Cart::total()),
                'currency' => 'xaf',
                //'automatic_payment_methods' => ['enabled' => true],
            ]
            );
            $clientSecret=Arr::get($intent,'client_secret');
            return view('front.stripe',[
                'clientSecret'=>$clientSecret
            ]);
        } else if($request->type == 'paypal'){
            return redirect()->route('paypal');
        }
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function save(Request $request)
    {
        $data=$request->json()->all();
        //return $data['paymentIntent'];
        $mont=new Commende();
        $mont->payment_intent_id=$data['paymentIntent']['id'];
        $mont->montant=$data['paymentIntent']['amount'];
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
        if ($data['paymentIntent']['status'] == 'succeeded') {
            $this->updateStock();
            Cart::destroy();
            Session::flash("success","Votre commande à été traitée avec succès" );
            return $data['paymentIntent'] ;
            //return response()->json(['success' =>'payment intent succeeded']);
        } else{
            Session::flash("error","Une erreur s'est produite lors du traitement de votre commande" );
            return response()->json(['error' =>'payment intent not succeeded']);
        }
        
    }

    private function updateStock()
    {
        foreach (Cart::content() as $item) {
            $shop=Shop::find($item->model->id);
            $shop->update(['stock' => $shop->stock-$item->qty]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $meta_image="";
        $meta_titre="Panier";
        return view('front.panier')->with('meta_titre',$meta_titre)->with('meta_image',$meta_image);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
        $meta_image="";
        $meta_titre="Commandes";
        return view('front.commande')->with('meta_titre',$meta_titre)->with('meta_image',$meta_image);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $rowId)
    {
        $data=$request->json()->all();
        $validate=Validator::make($request->all(),[
            'qte' => 'required|numeric|between:1,6'
        ]);

        if ($validate->fails()) {
            Session::flash("error","La quantité du produit ne doit pas dépasser 6." );
            return response()->json(['error' => 'Cart quantity has not been updated']);
        }

        if ($data['qte'] > $data['stock']) {
            Session::flash("error","La quantité demandée n'est pas disponible pour le moment" );
            return response()->json(['error' => 'Product quantity not available']);
        }
        Cart::update($rowId,$data['qte']);
        Session::flash("success","La quantité du produit est passée à" .$data['qte'] . ".");
        return response()->json(['success' => 'Cart quantity has been updated']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
