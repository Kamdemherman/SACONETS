<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\SousCategorie;
use App\Models\CategorieShop;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class SousCategorieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sousCategorie=SousCategorie::all();
        return view('admin.page.sousCategorie.index')->with('categories',$sousCategorie);
    }

    public function Add()
    {
        $categorie=CategorieShop::all();
        return view('admin.page.sousCategorie.add')->with('categories',$categorie);
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
        $sousCategorie=new SousCategorie();
        $sousCategorie->libelle=$request->libelle;
        $sousCategorie->libelle_en=$request->libelle_en;
        $sousCategorie->cat_id=$request->cat_id;
        $sousCategorie->slug=$slug;
        $sousCategorie->save();

        if ($sousCategorie) {
            return redirect()->back()->with('success','Enregistrer avec succès!');
        }else{
            return redirect()->back()->with('error','Une erreur s\'est produite!');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\SousCategorie  $sousCategorie
     * @return \Illuminate\Http\Response
     */
    public function show(SousCategorie $sousCategorie)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SousCategorie  $sousCategorie
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $categorie=CategorieShop::all();
        $sousCategorie=SousCategorie::find($id);
        return view('admin.page.sousCategorie.update')->with('categorie',$sousCategorie)->with('categories',$categorie);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\SousCategorie  $sousCategorie
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $slug=Str::slug($request->libelle);
        $sousCategorie=SousCategorie::find($id);
        $sousCategorie->libelle=$request->libelle;
        $sousCategorie->libelle_en=$request->libelle_en;
        $sousCategorie->cat_id=$request->cat_id;
        $sousCategorie->slug=$slug;
        $sousCategorie->save();

        if ($sousCategorie) {
            return redirect()->route('administration.sous-categorie')->with('success','Enregistrer avec succès!');
        }else{
            return redirect()->back()->with('error','Une erreur s\'est produite!');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SousCategorie  $sousCategorie
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $sousCategorie=SousCategorie::find($id);
        $sousCategorie->delete();
        if ($sousCategorie){
            return redirect()->back()->with('success','Supprimer avec succès!');
        }else{
            return redirect()->back()->with('error','Une erreur s\'est produite!');
        }
    }
}
