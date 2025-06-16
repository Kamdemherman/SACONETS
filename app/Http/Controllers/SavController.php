<?php

namespace App\Http\Controllers;

use App\Models\Sav;
use App\Models\Faq;
use App\Models\Equipe;
use App\Models\Technicien;
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
        $sav=Sav::first();
        $faq=Faq::orderBy('created_at','desc')->paginate(20);
        $equipe=Technicien::orderBy('created_at','desc')->get();

        $meta_image="";
        $meta_titre="SAV";
        return view('front.sav')->with('faqs',$faq)->with('sav',$sav)->with('equipes',$equipe)
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
    public function edit(Sav $sav)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Sav  $sav
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Sav $sav)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Sav  $sav
     * @return \Illuminate\Http\Response
     */
    public function destroy(Sav $sav)
    {
        //
    }
}
