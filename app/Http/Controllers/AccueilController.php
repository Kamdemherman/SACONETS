<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\About;
use App\Models\Telecom;
use App\Models\Produit_turaya;
use App\Models\News;
use App\Models\Arivage;
use App\Models\Shop;
use App\Models\Slider;

class AccueilController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ab=About::find(1);
        $cat=Telecom::all();
        $slider=Slider::all();
        $solde=Arivage::with('produit')->take(2)->get();
        $shops=Shop::with('categorie')->get();
        $news=News::orderBy('created_at','desc')->get();

        $meta_image="";
        $meta_titre="";
        return view('homePage')->with('about',$ab)->with('services',$cat)->with('shops',$shops)
        ->with('news',$news)->with('sliders',$slider)->with('soldes',$solde)
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
