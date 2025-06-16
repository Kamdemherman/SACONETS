<?php

namespace App\Http\Controllers;

use App\Models\Produit_TC;
use App\Models\Produit_MC;
use App\Models\Produit_turaya;
use App\Models\Produit_AA;
use App\Models\Produit_AI;

use App\Models\Produit_AVC;
use App\Models\Produit_PF;
use App\Models\ThurayaDocument;
use App\Models\ThurayaAccessoire;
use App\Models\CategorieShop;
use Illuminate\Http\Request;

class ProduitController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($slug)
    {   
        $produit=Produit_turaya::with('categorie')->where('cat_name',$slug)->orderBy('created_at','desc')->paginate(12);
        $categorie=CategorieShop::where('slug',$slug)->first();

        $meta_image="";
        $meta_titre="Produit-".$categorie->libelle;
        return view('front.produit.index')->with('produits',$produit)->with('categorie',$categorie)
                                            ->with('meta_titre',$meta_titre)->with('meta_image',$meta_image);
    }

    public function indexSous($slug)
    {   
        $produit=Produit_turaya::with('categorie')->where('sous_name',$slug)->orderBy('created_at','desc')->paginate(12);
        $categorie=CategorieShop::where('slug',$slug)->first();
        return view('front.produit.index')->with('produits',$produit)->with('categorie',$categorie);
    }
   

    
    public function indexPT()
    {
        $cat=Produit_turaya::with('categorie')->orderBy('created_at','desc')->paginate(9);
        return view('front.produit.pt')->with('produits',$cat);
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
        $produit=Produit_turaya::with('categorie')->where('libelle','like','%' .$request->titre. '%')->orwhere('libelle_en','like','%' .$request->titre. '%')->paginate(12);
        $categorie=$request->titre;

        $meta_image="";
        $meta_titre="Produit-search";
        return view('front.produit.search')->with('produits',$produit)->with('categorie',$categorie)
                                            ->with('meta_titre',$meta_titre)->with('meta_image',$meta_image);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Produit_TC  $produit_TC
     * @return \Illuminate\Http\Response
     */
    public function show(Produit_TC $produit_TC)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Produit_TC  $produit_TC
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tc=Produit_TC::with('categorie')->find($id);
        return view('front.produit.produitDetailId')->with('produit',$tc);
    }

    
    

    public function editPThuraya($titre)
    {
        $tc=Produit_turaya::with('categorie')->where('libelle',$titre)->orwhere('libelle_en',$titre)->get();
        $document=ThurayaDocument::where('prod_id',$tc[0]->id)->first();
        $accessoire=ThurayaAccessoire::where('prod_id',$tc[0]->id)->get();
        $meta_image=$tc[0]->image;
        $meta_titre=$tc[0]->libelle_en;
        return view('front.produit.produitDetail')->with('produits',$tc)->with('document',$document)->with('accessoires',$accessoire)
                                                   ->with('meta_titre',$meta_titre)->with('meta_image',$meta_image);
    }

    public function editProduit($slug)
    {
        $produit=Produit_turaya::with('categorie')->where('slug',$slug)->first();
        $document=ThurayaDocument::where('prod_id',$produit->id)->get();
        $video=ThurayaDocument::where('prod_id',$produit->id)->first();
        $accessoire=ThurayaAccessoire::where('prod_id',$produit->id)->get();
        //dd($accessoire);
        $meta_image=$produit->image;
        $meta_titre=$produit->libelle_en;
        return view('front.produit.produitDetail')->with('produit',$produit)->with('documents',$document)->with('accessoires',$accessoire)
                                                   ->with('meta_titre',$meta_titre)->with('meta_image',$meta_image)->with('video',$video);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Produit_TC  $produit_TC
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Produit_TC $produit_TC)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Produit_TC  $produit_TC
     * @return \Illuminate\Http\Response
     */
    public function destroy(Produit_TC $produit_TC)
    {
        //
    }
}
