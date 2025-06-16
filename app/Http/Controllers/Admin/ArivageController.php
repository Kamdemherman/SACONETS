<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Arivage;
use App\Models\Shop;
use Illuminate\Http\Request;

class ArivageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $arivage=Arivage::with('produit')->get();
        return view('admin.page.arivage.index')->with('arivages',$arivage);
    }

    public function Add()
    {
        $produit=Shop::orderBy('created_at','desc')->get();
        return view('admin.page.arivage.add')->with('produits',$produit);
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
        $arivage=new Arivage();
        $arivage->prix=$request->prix;
        $arivage->prod_id=$request->prod_id;
        $arivage->save();

        if ($arivage) {
            return redirect()->back()->with('success','Enregistrer avec succès!');
        }else{
            return redirect()->back()->with('error','Une erreur s\'est produite!');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Arivage  $arivage
     * @return \Illuminate\Http\Response
     */
    public function show(Arivage $arivage)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Arivage  $arivage
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $produit=Shop::orderBy('created_at','desc')->get();
        $arivage=Arivage::with('produit')->find($id);
        return view('admin.page.arivage.update')->with('produits',$produit)->with('arivage',$arivage);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Arivage  $arivage
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $arivage=Arivage::with('produit')->find($id);
        $arivage->prix=$request->prix;
        $arivage->prod_id=$request->prod_id;
        $arivage->save();

        if ($arivage) {
            return redirect()->route('administration.arivage')->with('success','Enregistrer avec succès!');
        }else{
            return redirect()->back()->with('error','Une erreur s\'est produite!');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Arivage  $arivage
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $arivage=Arivage::find($id);
        $arivage->delete();
        if ($arivage){
            return redirect()->back()->with('success','Supprimer avec succès!');
        }else{
            return redirect()->back()->with('error','Une erreur s\'est produite!');
        }
    }
}
