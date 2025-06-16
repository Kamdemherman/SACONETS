<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\CategorieShop;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class ShopCategorieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cat=CategorieShop::all();
        return view('admin.page.ShopCategorie.shopCategorie')->with('categories',$cat);
    }

    public function Add()
    {
        return view('admin.page.ShopCategorie.add');
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
        $slug=Str::slug($request->libelle);
        $cat=new CategorieShop();
        $cat->libelle=$request->libelle;
        $cat->libelle_en=$request->libelle_en;
        $cat->slug=$slug;
        $cat->save();

        if ($cat) {
            return redirect()->back()->with('success','Enregistrer avec succès!');
        }else{
            return redirect()->back()->with('error','Une erreur s\'est produite!');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CategorieShop  $categorieShop
     * @return \Illuminate\Http\Response
     */
    public function show(CategorieShop $categorieShop)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CategorieShop  $categorieShop
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cat=CategorieShop::find($id);
        return view('admin.page.ShopCategorie.update')->with('categorie',$cat);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\CategorieShop  $categorieShop
     * @return \Illuminate\Http\Response
     */
    public function update($id)
    {
        $slug=Str::slug(request('libelle'));
        $cat=CategorieShop::find($id);

        $cat->libelle=request('libelle');
        $cat->libelle_en=request('libelle_en');
        $cat->slug=$slug;
        $cat->save();

        if ($cat) {
            return redirect()->route('administration.shop_categorie')->with('success','Modifier avec succès!');
        }else{
            return redirect()->back()->with('error','Une erreur s\'est produite!');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CategorieShop  $categorieShop
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cat=CategorieShop::find($id);
        $cat->delete();
        if ($cat){
            return redirect()->back()->with('success','Supprimer avec succès!');
        }else{
            return redirect()->back()->with('error','Une erreur s\'est produite!');
        }
    }
}
