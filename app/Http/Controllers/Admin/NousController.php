<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Nous;
use Illuminate\Support\Facades\Storage;

class NousController extends Controller
{
    public function index()
    {
        $cat=Nous::all();
        return view('admin.page.nous.index')->with('nous',$cat);
    }

    public function Add()
    {
        return view('admin.page.nous.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $cat=new Nous();
        $cat->libelle=$request->libelle;
        $cat->libelle_en=$request->libelle_en;
        $cat->description=$request->description;
        $cat->description_en=$request->description_en;
        if (request()->file('image')!=null) {
            $img=request()->file('image');
            $imageName=$img->getClientOriginalName();
            $imageName=time().'_'.$imageName;
            $path=request()->file('image')->storeAs('public/imgs',$imageName);
            $cat->image=$imageName;
        }else {
            $cat->image=null;
        }

        if (request()->file('image2')!=null) {
            $img=request()->file('image2');
            $imageName=$img->getClientOriginalName();
            $imageName=time().'_'.$imageName;
            $path=request()->file('image2')->storeAs('public/imgs',$imageName);
            $cat->image2=$imageName;
        }else {
            $cat->image2=null;
        }
        $cat->save();

        if ($cat) {
            return redirect()->back()->with('success','Enregistrer avec succès!');
        }else{
            return redirect()->back()->with('error','Une erreur s\'est produite!');
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Produit_turaya  $produit_turaya
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tc=Nous::find($id);
        return view('admin.page.nous.update')->with('nous',$tc);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Produit_turaya  $produit_turaya
     * @return \Illuminate\Http\Response
     */
    public function update($id)
    {
        $cat=Nous::find($id);
        $cat->libelle=request('libelle');
        $cat->libelle_en=request('libelle_en');
        $cat->description=request('description');
        $cat->description_en=request('description_en');
        if (request()->file('image')!=null) {
            if ($cat->image != null) {
                Storage::delete('public/imgs/' .$cat->image);
            }
            $img=request()->file('image');
            $imageName=$img->getClientOriginalName();
            $imageName=time().'_'.$imageName;
            $path=request()->file('image')->storeAs('public/imgs',$imageName);
            $cat->image=$imageName;
        }else {
            $cat->image=$cat->image;
        }

        if (request()->file('image2')!=null) {
            if ($cat->image2 != null) {
                Storage::delete('public/imgs/' .$cat->image2);
            }
            $img=request()->file('image2');
            $imageName=$img->getClientOriginalName();
            $imageName=time().'_'.$imageName;
            $path=request()->file('image2')->storeAs('public/imgs',$imageName);
            $cat->image2=$imageName;
        }else {
            $cat->image2=$cat->image2;
        }
        $cat->save();

        if ($cat) {
            return redirect()->route('administration.nous')->with('success','Modifier avec succès!');
        }else{
            return redirect()->back()->with('error','Une erreur s\'est produite!');
        }
    }

    public function destroy($id)
    {
        $cat=Nous::find($id);
        if ($cat->image != null) {
            Storage::delete('public/imgs/' .$cat->image);
        }
        if ($cat->image2 != null) {
            Storage::delete('public/imgs/' .$cat->image2);
        }
        if ($cat->image3 != null) {
            Storage::delete('public/imgs/' .$cat->image3);
        }
        $cat->delete();
        if ($cat){
            return redirect()->back()->with('success','Supprimer avec succès!');
        }else{
            return redirect()->back()->with('error','Une erreur s\'est produite!');
        }
    }

}
