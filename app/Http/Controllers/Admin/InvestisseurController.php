<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Investisseur;
use Illuminate\Http\Request;

class InvestisseurController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $investisseur=Investisseur::orderBy('created_at','desc')->paginate(20);
        return view('admin.page.partenaire.investisseur')->with('investisseurs',$investisseur);
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Investisseur  $investisseur
     * @return \Illuminate\Http\Response
     */
    public function show(Investisseur $investisseur)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Investisseur  $investisseur
     * @return \Illuminate\Http\Response
     */
    public function edit(Investisseur $investisseur)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Investisseur  $investisseur
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Investisseur $investisseur)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Investisseur  $investisseur
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $investisseur=Investisseur::find($id);
        $investisseur->delete();
        if ($investisseur){
            return redirect()->back()->with('success','Supprimer avec succès!');
        }else{
            return redirect()->back()->with('error','Une erreur s\'est produite!');
        }
    }
}
