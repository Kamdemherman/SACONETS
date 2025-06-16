<?php

namespace App\Http\Controllers;

use App\Models\Partenaire;
use Illuminate\Http\Request;

class PartenaireController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $partenaire=Partenaire::all();
        $video=Partenaire::where('type','Videosurveillances')->get();
        $telephone=Partenaire::where('type','Telephonie mobile par satellite')->get();
        $securite=Partenaire::where('type','Solutions de securite')->get();
        $reseau=Partenaire::where('type','Materiel reseau informatiques')->get();
        $interconnection=Partenaire::where('type','Solution d’interconnexion Point a Point')->get();
        $monetique=Partenaire::where('type','Solution Monetique')->get();
        $supervision=Partenaire::where('type','Solution de supervision')->get();

        $meta_image="";
        $meta_titre="Partenaires";
        return view('front.partenaire.partenaireList')->with('partenaires',$partenaire)->with('videos',$video)
        ->with('telephones',$telephone)->with('securites',$securite)->with('reseaus',$reseau)
        ->with('interconnections',$interconnection)->with('monetiques',$monetique)->with('supervisions',$supervision)
        ->with('meta_titre',$meta_titre)->with('meta_image',$meta_image);
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
     * @param  \App\Models\Partenaire  $partenaire
     * @return \Illuminate\Http\Response
     */
    public function show(Partenaire $partenaire)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Partenaire  $partenaire
     * @return \Illuminate\Http\Response
     */
    public function edit(Partenaire $partenaire)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Partenaire  $partenaire
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Partenaire $partenaire)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Partenaire  $partenaire
     * @return \Illuminate\Http\Response
     */
    public function destroy(Partenaire $partenaire)
    {
        //
    }
}
