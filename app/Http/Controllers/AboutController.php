<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Nous;
use App\Models\Histoire;
use App\Models\Equipe;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $nous=Nous::first();
        $histoire=Histoire::first();
        $equipe=Equipe::all();
        $meta_image="";
        $meta_titre=$nous->libelle;
        return view('front.about.nous')->with('nous',$nous)->with('histoire',$histoire)->with('equipes',$equipe)
                ->with('meta_titre',$meta_titre)->with('meta_image',$meta_image);
    }
    public function index1()
    {
        return view('front.about.histoire');
    }
    public function index2()
    {
        return view('front.about.partenaireList');
    }
    public function index3()
    {
        return view('front.about.partenaire');
    }
    public function index4()
    {
        return view('front.about.honneur');
    }
    public function index5()
    {
        return view('front.about.emploi');
    }
    public function index6()
    {
        return view('front.about.candidature');
    }
    public function index7()
    {
        return view('front.about.faq');
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
     * @param  \App\Models\About  $about
     * @return \Illuminate\Http\Response
     */
    public function show(About $about)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\About  $about
     * @return \Illuminate\Http\Response
     */
    public function edit(About $about)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\About  $about
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, About $about)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\About  $about
     * @return \Illuminate\Http\Response
     */
    public function destroy(About $about)
    {
        //
    }
}
