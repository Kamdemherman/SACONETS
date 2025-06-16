<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\About;
use Illuminate\Support\Facades\Storage;
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
        $cat=About::all();
        return view('admin.page.about.aboutSaconet')->with('abouts',$cat);
    }

    public function Add()
    {
        return view('admin.page.about.add');
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
        $cat=new About();
        $cat->short=$request->short;
        $cat->short_en=$request->short_en;
        $cat->libelle=$request->libelle;
        $cat->libelle_en=$request->libelle_en;
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
    public function edit($id)
    {
        $cat=About::find($id);
        return view('admin.page.about.update')->with('about',$cat);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\About  $about
     * @return \Illuminate\Http\Response
     */
    public function update($id)
    {
        $cat=About::find($id);
        $cat->short=request('short');
        $cat->short_en=request('short_en');
        $cat->libelle=request('libelle');
        $cat->libelle_en=request('libelle_en');
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
            return redirect()->route('administration.about')->with('success','Modifier avec succès!');
        }else{
            return redirect()->back()->with('error','Une erreur s\'est produite!');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\About  $about
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cat=About::find($id);
        if ($cat->image != null) {
            Storage::delete('public/imgs/' .$cat->image);
        }
        if ($cat->image2 != null) {
            Storage::delete('public/imgs/' .$cat->image2);
        }
        $cat->delete();
        if ($cat){
            return redirect()->back()->with('success','Supprimer avec succès!');
        }else{
            return redirect()->back()->with('error','Une erreur s\'est produite!');
        }
    }
}
