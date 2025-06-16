<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Emploi;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Date;
use Illuminate\Http\Request;

class EmploiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $emploi=Emploi::orderBy('created_at','desc')->paginate(20);
        return view('admin.page.emploi.index')->with('emplois',$emploi);
    }
    
    public function Add()
    {
        return view('admin.page.emploi.add');
    }

    public function Search(Request $request)
    {
        $emploi=Emploi::search(request(key:'name'))->paginate(20);
        return view('admin.page.emploi.index')->with('emplois',$emploi);
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
        $slug=Str::slug($request->titre);
        $date = Date::now();
        $emploi=new Emploi();
        $emploi->titre=$request->titre;
        $emploi->titre_en=$request->titre_en;
        $emploi->type=$request->type;
        $emploi->lieu=$request->lieu;
        $emploi->description=$request->description;
        $emploi->description_en=$request->description_en;
        $emploi->slug=$slug;
        $emploi->expire_date=$request->$expire_date;
        if (request()->file('image')!=null) {
            $img=request()->file('image');
            $imageName=$img->getClientOriginalName();
            $imageName=time().'_'.$imageName;
            $img->move(public_path('/images'),$imageName);
            $emploi->image='/images/'.$imageName;
        }else {
            $emploi->image=null;
        }
        $emploi->dates=$date;
        $emploi->save();

        if ($emploi) {
            return redirect()->back()->with('success','Enregistrer avec succès!');
        }else{
            return redirect()->back()->with('error','Une erreur s\'est produite!');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Emploi  $emploi
     * @return \Illuminate\Http\Response
     */
    public function show(Emploi $emploi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Emploi  $emploi
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $emploi=Emploi::find($id);
        return view('admin.page.emploi.update')->with('emploi',$emploi);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Emploi  $emploi
     * @return \Illuminate\Http\Response
     */
    public function update($id)
    {
        $slug=Str::slug(request('titre'));
        $date = Date::now();
        $emploi=Emploi::find($id);
        //dd(request()->file('image'));
        $emploi->titre=request('titre');
        $emploi->titre_en=request('titre_en');
        $emploi->type=request('type');
        $emploi->lieu=request('lieu');
        $emploi->description=request('description');
        $emploi->description_en=request('description_en');
        $emploi->slug=$slug;
        $emploi->expire_date=request('expire_date');
        if (request()->file('image')!=null) {
            $img=request()->file('image');
            $imageName=$img->getClientOriginalName();
            $imageName=time().'_'.$imageName;
            $img->move(public_path('/images'),$imageName);
            $emploi->image='/images/'.$imageName;
        }else {
            $emploi->image=$emploi->image;
        }
        $emploi->dates=$date;
        $emploi->save();

        if ($emploi) {
            return redirect()->route('administration.emploi')->with('success','Modifier avec succès!');
        }else{
            return redirect()->back()->with('error','Une erreur s\'est produite!');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Emploi  $emploi
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $emploi=Emploi::find($id);
        $emploi->delete();
        if ($emploi){
            return redirect()->back()->with('success','Supprimer avec succès!');
        }else{
            return redirect()->back()->with('error','Une erreur s\'est produite!');
        }
    }
}
