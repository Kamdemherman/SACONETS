<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ThurayaAccessoire;
use Illuminate\Http\Request;
use App\Models\Produit_turaya;
use Illuminate\Support\Facades\Storage;

class AccessoireThurayaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $thurayaAccessoire=ThurayaAccessoire::orderBy('created_at','desc')->paginate(25);
        return view('admin.page.Turaya.indexAcc')->with('ptAccs',$thurayaAccessoire);
    }

    public function Add()
    {
        $cat=Produit_turaya::all();
        return view('admin.page.Turaya.addAcc')->with('produits',$cat);
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
        $thurayaAccessoire=new ThurayaAccessoire();
        $thurayaAccessoire->titre=$request->titre;
        $thurayaAccessoire->titre_en=$request->titre_en;
        $thurayaAccessoire->paragraphe=$request->paragraphe;
        $thurayaAccessoire->paragraphe_en=$request->paragraphe_en;
        $thurayaAccessoire->prod_id=$request->prod_id;
        if (request()->file('image')!=null) {
            $img=request()->file('image');
            $imageName=$img->getClientOriginalName();
            $imageName=time().'_'.$imageName;
            $path=request()->file('image')->storeAs('public/imgs',$imageName);
            $thurayaAccessoire->image=$imageName;
        }else {
            $thurayaAccessoire->image=null;
        }
        $thurayaAccessoire->save();

        if ($thurayaAccessoire) {
            return redirect()->back()->with('success','Enregistrer avec succès!');
        }else{
            return redirect()->back()->with('error','Une erreur s\'est produite!');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ThurayaAccessoire  $thurayaAccessoire
     * @return \Illuminate\Http\Response
     */
    public function show(ThurayaAccessoire $thurayaAccessoire)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ThurayaAccessoire  $thurayaAccessoire
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $thurayaAccessoire=ThurayaAccessoire::find($id);
        $cat=Produit_turaya::all();
        return view('admin.page.Turaya.updateAcc')->with('ptAcc',$thurayaAccessoire)->with('produits',$cat);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ThurayaAccessoire  $thurayaAccessoire
     * @return \Illuminate\Http\Response
     */
    public function update($id)
    {
        $thurayaAccessoire=ThurayaAccessoire::find($id);
        $thurayaAccessoire->titre=request('titre');
        $thurayaAccessoire->titre_en=request('titre_en');
        $thurayaAccessoire->paragraphe=request('paragraphe');
        $thurayaAccessoire->paragraphe_en=request('paragraphe_en');
        $thurayaAccessoire->prod_id=request('prod_id');
        if (request()->file('image')!=null) {
            if ($thurayaAccessoire->image != null) {
                Storage::delete('public/imgs/' .$thurayaAccessoire->image);
            }
            $img=request()->file('image');
            $imageName=$img->getClientOriginalName();
            $imageName=time().'_'.$imageName;
            $path=request()->file('image')->storeAs('public/imgs',$imageName);
            $thurayaAccessoire->image=$imageName;
        }else {
            $thurayaAccessoire->image=$thurayaAccessoire->image;
        }
        $thurayaAccessoire->save();

        if ($thurayaAccessoire) {
            return redirect()->route('administration.produit_accessoire')->with('success','Modifier avec succès!');
        }else{
            return redirect()->back()->with('error','Une erreur s\'est produite!');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ThurayaAccessoire  $thurayaAccessoire
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $thurayaAccessoire=ThurayaAccessoire::find($id);
        if ($thurayaAccessoire->image != null) {
            Storage::delete('public/imgs/' .$thurayaAccessoire->image);
        }
        $thurayaAccessoire->delete();
        if ($thurayaAccessoire){
            return redirect()->back()->with('success','Supprimer avec succès!');
        }else{
            return redirect()->back()->with('error','Une erreur s\'est produite!');
        }
    }
}
