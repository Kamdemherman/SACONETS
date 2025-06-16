<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Telecom;
use Illuminate\Http\Request;

class TelecomController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cat=Telecom::all();
        return view('admin.page.telecom.index')->with('telecoms',$cat);
    }
    public function Add()
    {
        return view('admin.page.telecom.add');
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
        $cat=new Telecom();
        //dd($request->libelle);
        $cat->libelle=$request->libelle;
        $cat->libelle_en=$request->libelle_en;
        $cat->short=$request->short;
        $cat->short_en=$request->short_en;
        $cat->description=$request->description;
        $cat->description_en=$request->description_en;
        $cat->lien=$request->lien;
        if (request()->file('image')!=null) {
            $img=request()->file('image');
            $imageName=$img->getClientOriginalName();
            $imageName=time().'_'.$imageName;
            $path=request()->file('image')->storeAs('public/imgs',$imageName);
            //$img->move(public_path('/images'),$imageName);
            $cat->image=$imageName;
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
    public function edit($id)
    {
        $cat=Telecom::find($id);
        return view('admin.page.telecom.update')->with('telecom',$cat);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Telecom  $telecom
     * @return \Illuminate\Http\Response
     */
    public function update($id)
    {
        $cat=Telecom::find($id);
        //dd(request()->file('image'));
        $cat->libelle=request('libelle');
        $cat->libelle_en=request('libelle_en');
        $cat->short=request('short');
        $cat->short_en=request('short_en');
        $cat->description=request('description');
        $cat->description_en=request('description_en');
        $cat->lien=request('lien');
        if (request()->file('image')!=null) {
            $img=request()->file('image');
            $imageName=$img->getClientOriginalName();
            $imageName=time().'_'.$imageName;
            $path=request()->file('image')->storeAs('public/imgs',$imageName);
            //$img->move(public_path('/images'),$imageName);
            $cat->image=$imageName;
        }else {
            $cat->image=$cat->image;
        }
        $cat->save();

        if ($cat) {
            return redirect()->route('administration.telecom')->with('success','Modifier avec succès!');
        }else{
            return redirect()->back()->with('error','Une erreur s\'est produite!');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Telecom  $telecom
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cat=Telecom::find($id);
        $cat->delete();
        if ($cat){
            return redirect()->back()->with('success','Supprimer avec succès!');
        }else{
            return redirect()->back()->with('error','Une erreur s\'est produite!');
        }
    }
}
