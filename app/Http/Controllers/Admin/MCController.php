<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Produit_MC;
use App\Models\CategorieShop;
use Illuminate\Http\Request;

class MCController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cat=Produit_MC::all();
        return view('admin.page.mc.index')->with('mcs',$cat);
    }

    public function Add()
    {
        $cat=CategorieShop::all();
        return view('admin.page.mc.add')->with('categories',$cat);
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
        $cat=new Produit_MC();
        //dd($request->libelle);
        $cat->libelle=$request->libelle;
        $cat->libelle_en=$request->libelle_en;
        $cat->short=$request->short;
        $cat->short_en=$request->short_en;
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

        if (request()->file('image2')!=null) {
            $img=request()->file('image2');
            $imageName=$img->getClientOriginalName();
            $imageName=time().'_'.$imageName;
            $img->move(public_path('/images'),$imageName);
            $cat->image2='/images/'.$imageName;
        }else {
            $cat->image2=null;
        }

        if (request()->file('image3')!=null) {
            $img=request()->file('image3');
            $imageName=$img->getClientOriginalName();
            $imageName=time().'_'.$imageName;
            $img->move(public_path('/images'),$imageName);
            $cat->image3='/images/'.$imageName;
        }else {
            $cat->image3=null;
        }
        $cat->cat_id=$request->cat_id;
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
     * @param  \App\Models\Produit_MC  $produit_MC
     * @return \Illuminate\Http\Response
     */
    public function show(Produit_MC $produit_MC)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Produit_MC  $produit_MC
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tc=Produit_MC::find($id);
        $cat=CategorieShop::all();
        return view('admin.page.mc.update')->with('mc',$tc)->with('categories',$cat);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Produit_MC  $produit_MC
     * @return \Illuminate\Http\Response
     */
    public function update($id)
    {
        $cat=Produit_MC::find($id);
        //dd(request()->file('image'));
        $cat->libelle=request('libelle');
        $cat->libelle_en=request('libelle_en');
        $cat->short=request('short');
        $cat->short_en=request('short_en');
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

        if (request()->file('image2')!=null) {
            $img=request()->file('image2');
            $imageName=$img->getClientOriginalName();
            $imageName=time().'_'.$imageName;
            $img->move(public_path('/images'),$imageName);
            $cat->image2='/images/'.$imageName;
        }else {
            $cat->image2=$cat->image2;
        }

        if (request()->file('image3')!=null) {
            $img=request()->file('image3');
            $imageName=$img->getClientOriginalName();
            $imageName=time().'_'.$imageName;
            $img->move(public_path('/images'),$imageName);
            $cat->image3='/images/'.$imageName;
        }else {
            $cat->image3=$cat->image3;
        }
        $cat->cat_id=request('cat_id');
        $cat->save();

        if ($cat) {
            return redirect()->route('administration.produit_MC')->with('success','Modifier avec succès!');
        }else{
            return redirect()->back()->with('error','Une erreur s\'est produite!');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Produit_MC  $produit_MC
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cat=Produit_MC::find($id);
        $cat->delete();
        if ($cat){
            return redirect()->back()->with('success','Supprimer avec succès!');
        }else{
            return redirect()->back()->with('error','Une erreur s\'est produite!');
        }
    }
}
