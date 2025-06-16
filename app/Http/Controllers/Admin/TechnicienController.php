<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Technicien;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TechnicienController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $technicien=Technicien::all();
        return view('admin.page.technicien.index')->with('techniciens',$technicien);
    }

    public function Add()
    {
        return view('admin.page.technicien.add');
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
        $cat=new Technicien();
        $cat->nom=$request->nom;
        $cat->role=$request->role;
        $cat->role_en=$request->role_en;
        if (request()->file('image')!=null) {
            $img=request()->file('image');
            $imageName=$img->getClientOriginalName();
            $imageName=time().'_'.$imageName;
            $path=request()->file('image')->storeAs('public/imgs',$imageName);
            $cat->image=$imageName;
        }else{
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
     * @param  \App\Models\Technicien  $technicien
     * @return \Illuminate\Http\Response
     */
    public function show(Technicien $technicien)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Technicien  $technicien
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cat=Technicien::find($id);
        return view('admin.page.technicien.update')->with('technicien',$cat);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Technicien  $technicien
     * @return \Illuminate\Http\Response
     */
    public function update($id)
    {
        $cat=Technicien::find($id);
        $cat->nom=request('nom');
        $cat->role=request('role');
        $cat->role_en=request('role_en');
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
        $cat->save();

        if ($cat) {
            return redirect()->route('administration.technicien')->with('success','Modifier avec succès!');
        }else{
            return redirect()->back()->with('error','Une erreur s\'est produite!');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Technicien  $technicien
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cat=Technicien::find($id);
        if ($cat->image != null) {
            Storage::delete('public/imgs/' .$cat->image);
        }
        $cat->delete();
        if ($cat){
            return redirect()->back()->with('success','Supprimer avec succès!');
        }else{
            return redirect()->back()->with('error','Une erreur s\'est produite!');
        }
    }
}
