<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Solution;
use Illuminate\Http\Request;

class SolutionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cat=Solution::all();
        return view('admin.page.solution.index')->with('solutions',$cat);
    }

    public function Add()
    {
        return view('admin.page.solution.add');
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
        $cat=new Solution();
        //dd($request->libelle);
        $cat->libelle=$request->libelle;
        $cat->libelle_en=$request->libelle_en;
        $cat->description=$request->description;
        $cat->description_en=$request->description_en;
        if (request()->file('image')!=null) {
            $img=request()->file('image');
            $imageName=$img->getClientOriginalName();
            $imageName=time().'_'.$imageName;
            $img->move(public_path('/images'),$imageName);
            $cat->image='/images/'.$imageName;
        }else {
            $cat->image=null;
        }
        $cat->save();

        if ($cat) {
            return redirect()->back()->with('success','Enregistrer avec succès!');
        }else{
            return redirect()->back()->with('error','Une erreur s\'est produite!');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Solution  $solution
     * @return \Illuminate\Http\Response
     */
    public function show(Solution $solution)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Solution  $solution
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tc=Solution::find($id);
        return view('admin.page.solution.update')->with('solution',$tc);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Solution  $solution
     * @return \Illuminate\Http\Response
     */
    public function update($id)
    {
        $cat=Solution::find($id);
        //dd(request()->file('image'));
        $cat->libelle=request('libelle');
        $cat->libelle_en=request('libelle_en');
        $cat->description=request('description');
        $cat->description_en=request('description_en');
        if (request()->file('image')!=null) {
            $img=request()->file('image');
            $imageName=$img->getClientOriginalName();
            $imageName=time().'_'.$imageName;
            $img->move(public_path('/images'),$imageName);
            $cat->image='/images/'.$imageName;
        }else {
            $cat->image=$cat->image;
        }
        $cat->save();

        if ($cat) {
            return redirect()->route('administration.solution')->with('success','Modifier avec succès!');
        }else{
            return redirect()->back()->with('error','Une erreur s\'est produite!');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Solution  $solution
     * @return \Illuminate\Http\Response
     */
    public function destroy(Solution $solution)
    {
        $cat=Solution::find($id);
        $cat->delete();
        if ($cat){
            return redirect()->back()->with('success','Supprimer avec succès!');
        }else{
            return redirect()->back()->with('error','Une erreur s\'est produite!');
        }
    }
}
