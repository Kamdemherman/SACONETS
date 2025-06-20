<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\TypeCompte;
use Illuminate\Http\Request;

class TypeCompteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $type=TypeCompte::all();
        return view('admin.page.typeCompte.typeCompteUser')->with('types',$type);
    }


    public function Add()
    {
        return view('admin.page.typeCompte.add');
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
        $type=new TypeCompte();
        $type->libelle=$request->libelle;
        $type->save();

        if ($type) {
            return redirect()->back()->with('success','Enregistrer avec succès!');
        }else{
            return redirect()->back()->with('error','Une erreur s\'est produite!');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\TypeCompte  $typeCompte
     * @return \Illuminate\Http\Response
     */
    public function show(TypeCompte $typeCompte)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TypeCompte  $typeCompte
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $type=TypeCompte::find($id);
        return view('admin.page.typeCompte.update')->with('type',$type);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\TypeCompte  $typeCompte
     * @return \Illuminate\Http\Response
     */
    public function update($id)
    {
        $type=TypeCompte::find($id);
        //dd($type);
        $type->libelle=request('libelle');
        $type->save();

        if ($type) {
            return redirect()->route('administration.type_compte_user')->with('success','Modifier avec succès!');
        }else{
            return redirect()->back()->with('error','Une erreur s\'est produite!');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TypeCompte  $typeCompte
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $type=TypeCompte::find($id);
        $type->delete();
        if ($type){
            return redirect()->back()->with('success','Supprimer avec succès!');
        }else{
            return redirect()->back()->with('error','Une erreur s\'est produite!');
        }
    }
}
