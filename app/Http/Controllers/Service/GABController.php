<?php

namespace App\Http\Controllers\Service;

use App\Http\Controllers\Controller;
use App\Models\Telecom;
use Illuminate\Http\Request;

class GABController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cat=Telecom::find(4);
        return view('front.services.gab')->with('gab',$cat);
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
