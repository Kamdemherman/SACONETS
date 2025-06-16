<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Sav;
use Illuminate\Http\Request;

class SavController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cat=Sav::all();
        return view('admin.page.sav.index')->with('sav',$cat);
    }

    public function Add()
    {
        return view('admin.page.sav.add');
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
        $cat=new Sav();
        $cat->titre=$request->titre;
        $cat->titre_en=$request->titre_en;
        $cat->libelle=$request->libelle;
        $cat->libelle_en=$request->libelle_en;
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
     * @param  \App\Models\Sav  $sav
     * @return \Illuminate\Http\Response
     */
    public function show(Sav $sav)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Sav  $sav
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cat=Sav::find($id);
        return view('admin.page.sav.update')->with('sav',$cat);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Sav  $sav
     * @return \Illuminate\Http\Response
     */
    public function update($id)
    {
        $cat=Sav::find($id);
        $cat->titre=request('titre');
        $cat->titre_en=request('titre_en');
        $cat->libelle=request('libelle');
        $cat->libelle_en=request('libelle_en');
        $cat->save();

        if ($cat) {
            return redirect()->route('administration.sav')->with('success','Modifier avec succès!');
        }else{
            return redirect()->back()->with('error','Une erreur s\'est produite!');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Sav  $sav
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cat=Sav::find($id);
        $cat->delete();
        if ($cat){
            return redirect()->back()->with('success','Supprimer avec succès!');
        }else{
            return redirect()->back()->with('error','Une erreur s\'est produite!');
        }
    }
}
