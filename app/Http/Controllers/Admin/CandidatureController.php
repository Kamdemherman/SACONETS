<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Candidature;
use Illuminate\Http\Request;

class CandidatureController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $candidature=Candidature::orderBy('created_at','desc')->paginate(20);
        return view('admin.page.emploi.candidature')->with('candidatures',$candidature);
    }

    public function Search(Request $request)
    {
        $candidature=Candidature::search(request(key:'name'))->paginate(20);
        return view('admin.page.emploi.candidature')->with('candidatures',$candidature);
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
     * @param  \App\Models\Candidature  $candidature
     * @return \Illuminate\Http\Response
     */
    public function show(Candidature $candidature)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Candidature  $candidature
     * @return \Illuminate\Http\Response
     */
    public function edit(Candidature $candidature)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Candidature  $candidature
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Candidature $candidature)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Candidature  $candidature
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $candidature=Candidature::find($id);
        $candidature->delete();
        if ($candidature){
            return redirect()->back()->with('success','Supprimer avec succès!');
        }else{
            return redirect()->back()->with('error','Une erreur s\'est produite!');
        }
    }
}
