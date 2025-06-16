<?php

namespace App\Http\Controllers;

use App\Models\Shop;
use App\Models\CategorieShop;
use Illuminate\Http\Request;
use App\Models\Arivage;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Support\Facades\Validator;


class BoutiqueController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cat=CategorieShop::all();
        $shop=Shop::with('categorie')->orderBy('created_at','desc')->paginate(9);
        $solde=Arivage::with('produit')->take(2)->get();

        $meta_image="";
        $meta_titre="Boutique";
        return view('front.shop')->with('shops',$shop)->with('categories',$cat)->with('soldes',$solde)
                ->with('meta_titre',$meta_titre)->with('meta_image',$meta_image);
    }

    public function like($id)
    {
        
        $shop=Shop::find($id);
        //dd($shop->nb_like);
        $shop->nb_like=$shop->nb_like + 1;
        $shop->save();
        if ($shop) {
            return redirect()->back()->with('success','Merci d\'avoir aimer l\'article');  ;
        }
    }

    public function search(Request $request)
    {
        $request->validate([
            'title' => 'required|min:5'
        ]);

        $cat=CategorieShop::all();
        $val=$request->title;
        $shop=Shop::where('titre','like','%' .$val. '%')
                    ->orwhere('titre_en','like','%' .$val. '%')
                    ->paginate(9);
        return view('front.shop')->with('shops',$shop)->with('categories',$cat);            

    }

    public function searchTitre($titre)
    {
        $cat=CategorieShop::all();
        $solde=Arivage::with('produit')->take(2)->get();
        $shop=Shop::where('titre','like','%' .$titre. '%')
                    ->orwhere('titre_en','like','%' .$titre. '%')
                    ->paginate(9);
        if (count($shop) >0) {
            return view('front.shop')->with('shops',$shop)->with('categories',$cat)->with('soldes',$solde);  
        } else {
            return back()->with('retour','This product is not yet available in stores. Please place a quote');
        }
                    
                  

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
        $duplicata=Cart::search(function ($cartItem, $rowId) use ($request) {
            return $cartItem->id == $request->produit_id;
        });
        if ($duplicata->isNotEmpty()) {
            return redirect()->route('shop')->with('success','Le produit à déjà été ajouté');   
        } 
        $shop=Shop::find($request->produit_id);
        //dd($request->produit_id);
        Cart::add($shop->id,$shop->titre,1,$shop->prix)
            ->associate('App\Models\Shop');
        return redirect()->route('shop')->with('success','Le produit à bien été ajouté à votre panier');    
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Shop  $shop
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        return view('front.panier');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Shop  $shop
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $shop=Shop::find($id);
        $shops=Shop::with('categorie')->orderBy('created_at','desc')->take(20)->get();
        $meta_image=$shop->image;
        $meta_titre=$shop->titre_en;
        return view('front.shopDetail')->with('shop',$shop)->with('shops',$shops)
                                        ->with('meta_titre',$meta_titre)->with('meta_image',$meta_image);
    }

    public function editSlug($slug)
    {
        $shop=Shop::where('slug',$slug)->first();
        $shops=Shop::with('categorie')->orderBy('created_at','desc')->take(20)->get();
        $meta_image=$shop->image;
        $meta_titre=$shop->titre_en;
        return view('front.shopDetail')->with('shop',$shop)->with('shops',$shops)
                                        ->with('meta_titre',$meta_titre)->with('meta_image',$meta_image);
    }

    public function FindByCategorie($id)
    {
        $cat=CategorieShop::all();
        $solde=Arivage::with('produit')->take(2)->get();;
        $shops=Shop::with('categorie')->where('cat_id',$id)->orderBy('created_at','desc')->paginate(9);
        $categorie=CategorieShop::where('id',$id)->first();
        $meta_image="";
        $meta_titre="Boutique-".$categorie->libelle;
        return view('front.shop')->with('shops',$shops)->with('categories',$cat)->with('soldes',$solde)
            ->with('meta_titre',$meta_titre)->with('meta_image',$meta_image);   
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Shop  $shop
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Shop $shop)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Shop  $shop
     * @return \Illuminate\Http\Response
     */
    public function destroy($rowId)
    {
        Cart::remove($rowId);
        return back()->with('success','Le produit à été supprimé');
    }
}
