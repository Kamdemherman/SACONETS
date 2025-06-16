<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\CandidatureSpontanee;
use Illuminate\Http\Request;

class CandidatureSpontaneeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $candidatureSpontanee=CandidatureSpontanee::orderBy('created_at','desc')->paginate(20);
        return view('admin.page.emploi.candidatureSpontanee')->with('candidatureSpontanees',$candidatureSpontanee);
    }

    public function Search(Request $request)
    {
        $candidatureSpontanee=CandidatureSpontanee::search(request(key:'name'))->paginate(20);
        return view('admin.page.emploi.candidatureSpontanee')->with('candidatureSpontanees',$candidatureSpontanee);
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
     * @param  \App\Models\CandidatureSpontanee  $candidatureSpontanee
     * @return \Illuminate\Http\Response
     */
    public function show(CandidatureSpontanee $candidatureSpontanee)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CandidatureSpontanee  $candidatureSpontanee
     * @return \Illuminate\Http\Response
     */
    public function edit(CandidatureSpontanee $candidatureSpontanee)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\CandidatureSpontanee  $candidatureSpontanee
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CandidatureSpontanee $candidatureSpontanee)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CandidatureSpontanee  $candidatureSpontanee
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $candidatureSpontanee=CandidatureSpontanee::find($id);
        $candidatureSpontanee->delete();
        if ($candidatureSpontanee){
            return redirect()->back()->with('success','Supprimer avec succès!');
        }else{
            return redirect()->back()->with('error','Une erreur s\'est produite!');
        }
    }
}
