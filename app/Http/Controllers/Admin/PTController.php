<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Produit_turaya;
use App\Models\CategorieShop;
use App\Models\SousCategorie;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

class PTController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cat=Produit_turaya::paginate(20);
        return view('admin.page.Turaya.index')->with('pts',$cat);
    }

    public function Add()
    {
        $cat=CategorieShop::all();
        $sous=SousCategorie::all();
        return view('admin.page.Turaya.add')->with('categories',$cat)->with('sous',$sous);
    }

    public function Search(Request $request)
    {
        $cat=Produit_turaya::search(request(key:'name'))->paginate(20);
        return view('admin.page.Turaya.index')->with('pts',$cat);
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
        $sous_slug="";
        $slug=Str::slug($request->libelle);
        $categorie=CategorieShop::find($request->cat_id);
        if ($request->sous_id == 0) {
            $sous_slug="";
        }else{
            $sous=SousCategorie::find($request->sous_id);
            $sous_slug=$sous->slug;
        }
        
        $cat=new Produit_turaya();
        $cat->libelle=$request->libelle;
        $cat->libelle_en=$request->libelle_en;
        $cat->short=$request->short;
        $cat->short_en=$request->short_en;
        $cat->caracteristique=$request->caracteristique;
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

        if (request()->file('image3')!=null) {
            $img=request()->file('image3');
            $imageName=$img->getClientOriginalName();
            $imageName=time().'_'.$imageName;
            $$path=request()->file('image3')->storeAs('public/imgs',$imageName);
            $cat->image3=$imageName;
        }else {
            $cat->image3=null;
        }
        $cat->slug=$slug;
        $cat->cat_id=$request->cat_id;
        $cat->cat_name=$categorie->slug;
        $cat->sous_id=$request->sous_id;
        $cat->sous_name=$sous_slug;
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
     * @param  \App\Models\Produit_turaya  $produit_turaya
     * @return \Illuminate\Http\Response
     */
    public function show(Produit_turaya $produit_turaya)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Produit_turaya  $produit_turaya
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tc=Produit_turaya::find($id);
        $cat=CategorieShop::all();
        $sous=SousCategorie::all();
        return view('admin.page.Turaya.update')->with('pt',$tc)->with('categories',$cat)->with('sous',$sous);
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
        $sous_slug="";
        $slug=Str::slug(request('libelle'));
        $categorie=CategorieShop::find(request('cat_id'));
        if (request('sous_id') == 0) {
            $sous_slug="";
        }else{
            $sous=SousCategorie::find(request('sous_id'));
            $sous_slug=$sous->slug;
        }
        
        $cat=Produit_turaya::find($id);
        $cat->libelle=request('libelle');
        $cat->libelle_en=request('libelle_en');
        $cat->short=request('short');
        $cat->short_en=request('short_en');
        $cat->caracteristique=request('caracteristique');
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

        if (request()->file('image3')!=null) {
            if ($cat->image3 != null) {
                Storage::delete('public/imgs/' .$cat->image3);
            }
            $img=request()->file('image3');
            $imageName=$img->getClientOriginalName();
            $imageName=time().'_'.$imageName;
            $path=request()->file('image3')->storeAs('public/imgs',$imageName);
            $cat->image3=$imageName;
        }else {
            $cat->image3=$cat->image3;
        }
        $cat->slug=$slug;
        $cat->cat_id=request('cat_id');
        $cat->cat_name=$categorie->slug;
        $cat->sous_id=request('sous_id');
        $cat->sous_name=$sous_slug;
        $cat->save();

        if ($cat) {
            return redirect()->route('administration.produit')->with('success','Modifier avec succès!');
        }else{
            return redirect()->back()->with('error','Une erreur s\'est produite!');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Produit_turaya  $produit_turaya
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cat=Produit_turaya::find($id);
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
