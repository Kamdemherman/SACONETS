<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Produit_PF;
use App\Models\CategorieShop;
use Illuminate\Http\Request;

class PFController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cat=Produit_PF::all();
        return view('admin.page.pf.index')->with('pfs',$cat);
    }

    public function Add()
    {
        $cat=CategorieShop::all();
        return view('admin.page.pf.add')->with('categories',$cat);
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
        $cat=new Produit_PF();
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
     * @param  \App\Models\Produit_PF  $produit_PF
     * @return \Illuminate\Http\Response
     */
    public function show(Produit_PF $produit_PF)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Produit_PF  $produit_PF
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tc=Produit_PF::find($id);
        $cat=CategorieShop::all();
        return view('admin.page.pf.update')->with('pf',$tc)->with('categories',$cat);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Produit_PF  $produit_PF
     * @return \Illuminate\Http\Response
     */
    public function update($id)
    {
        $cat=Produit_PF::find($id);
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
        $cat->cat_id=request('cat_id');
        $cat->save();

        if ($cat) {
            return redirect()->route('administration.produit_PF')->with('success','Modifier avec succès!');
        }else{
            return redirect()->back()->with('error','Une erreur s\'est produite!');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Produit_PF  $produit_PF
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cat=Produit_PF::find($id);
        $cat->delete();
        if ($cat){
            return redirect()->back()->with('success','Supprimer avec succès!');
        }else{
            return redirect()->back()->with('error','Une erreur s\'est produite!');
        }
    }
}
