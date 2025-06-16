<?php

namespace App\Http\Controllers;

use App\Models\Shop;
use App\Models\Order;
use App\Mail\OrderMail;
use Illuminate\Http\Request;
use Nexmo\Laravel\Facade\Nexmo;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Date;
use Illuminate\Support\Facades\Mail;
use Gloudemans\Shoppingcart\Facades\Cart;

class OrderController extends Controller
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $meta_image="";
        $meta_titre="Commandes";
        return view('front.ordering')->with('meta_titre',$meta_titre)->with('meta_image',$meta_image);
    }

    public function SendOrder(Request $request)
    {
        $recommandation=$request->recommandation;
        Mail::to('contact@saconets.uahj.org')->send(new OrderMail($recommandation));
        //$this->SendSMS();
        $this->store();
        return back()->with('success','Votre commande à bien été enregistrée: votre panier est vide');
        
        
    }

    private function updateStock()
    {
        foreach (Cart::content() as $item) {
            $shop=Shop::find($item->model->id);
            $shop->update(['stock' => $shop->stock-$item->qty]);
        }
    }

    public function SendSMS()
    {
        Nexmo::message()->send([
            'to'   => '237655795370',
            'from' => '237655795370',
            'text' => 'Bonjour Mr vous venez de passer une commande de '. getPrix(Cart::total()).'chez Saconets SA'
        ]);
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
    public function store()
    {
        $order=new Order();
        $order->user_name=Auth::user()->name ;
        $order->montant=Cart::total();
        $order->tva=Cart::tax();
        $order->order_date=Date::now();
        $products=[];
        $i=0;
        foreach (Cart::content() as $product) {
            $products['product_' .$i][] = $product->model->titre;
            $products['product_' .$i][] = $product->model->prix;
            $products['product_' .$i][] = $product->qty;
            $i++;

        }
        $order->produits=serialize($products);
        $order->user_id=Auth::user()->id;
        $order->etat='Non reglee';
        $order->save();
        if ($order) {
            $this->updateStock();
            Cart::destroy();
            return back()->with('success','Votre commande à bien été enregistrée: votre panier est vide');
        } else {
            return back()->with('error','une erreur s\'est produite lors de l\'enregistrement de votre commande');
        }
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $order= Order::find($id);
        $order->update(['etat' => 'Annulee']);
        if ($order) {
            return back()->with('success','Votre commande à bien été annulée');
        } else {
            return back()->with('error','une erreur s\'est produite lors de l\'annulation de votre commande');
        }
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function edit(Order $order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Order $order)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function destroy(Order $order)
    {
        //
    }
}
