<?php

namespace App\Http\Controllers\Service;

use App\Http\Controllers\Controller;
use App\Models\Telecom;
use App\Models\Marque;
use Illuminate\Http\Request;

class PieceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cat=Telecom::find(4);
        $marque=Marque::where('service_id',4)->get();
        $meta_image=$cat->image;
        $meta_titre=$cat->libelle_en;
        return view('front.services.acces')->with('gab',$cat)->with('marques',$marque)
                                           ->with('meta_titre',$meta_titre)->with('meta_image',$meta_image);
    }
    public function Tracking()
    {
        $cat=Telecom::find(8);
        $marque=Marque::where('service_id',8)->get();
        $meta_image=$cat->image;
        $meta_titre=$cat->libelle_en;
        return view('front.services.tracking')->with('tracke',$cat)->with('marques',$marque)
                                              ->with('meta_titre',$meta_titre)->with('meta_image',$meta_image);
    }

    public function Telephone()
    {
        $cat=Telecom::find(7);
        $marque=Marque::where('service_id',7)->get();
        $meta_image=$cat->image;
        $meta_titre=$cat->libelle_en;
        return view('front.services.telephone')->with('telephone',$cat)->with('marques',$marque)
                                               ->with('meta_titre',$meta_titre)->with('meta_image',$meta_image);
        
    }
    public function Alarme()
    {
        $cat=Telecom::find(5);
        $marque=Marque::where('service_id',5)->get();
        $meta_image=$cat->image;
        $meta_titre=$cat->libelle_en;
        return view('front.services.alarm')->with('comteuse',$cat)->with('marques',$marque)
                                           ->with('meta_titre',$meta_titre)->with('meta_image',$meta_image);
    }
    public function SecuriteIncendie()
    {
        $cat=Telecom::find(6);
        $marque=Marque::where('service_id',6)->get();
        $meta_image=$cat->image;
        $meta_titre=$cat->libelle_en;
        return view('front.services.incendit')->with('chequier',$cat)->with('marques',$marque)
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
     * @param  \App\Models\Telecom  $telecom
     * @return \Illuminate\Http\Response
     */
    public function show(Telecom $telecom)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Telecom  $telecom
     * @return \Illuminate\Http\Response
     */
    public function edit(Telecom $telecom)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Telecom  $telecom
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Telecom $telecom)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Telecom  $telecom
     * @return \Illuminate\Http\Response
     */
    public function destroy(Telecom $telecom)
    {
        //
    }
}
