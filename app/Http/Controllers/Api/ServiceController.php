<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Telecom;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Telecom::all();
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
        return $telecom;
    }

   

    public function edit($id)
    {
        return Telecom::where('id',$id)->first();
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
