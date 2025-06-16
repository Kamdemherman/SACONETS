<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Marque;
use App\Models\Telecom;
use Illuminate\Http\Request;

class MarqueController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $marque=Marque::orderBy('created_at','desc')->paginate(20);
        return view('admin.page.marque.index')->with('marques',$marque);
    }

    public function Add()
    {
        $cat=Telecom::all();
        return view('admin.page.marque.add')->with('services',$cat);
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
        $marque=new Marque();
        $marque->raison_sociale=$request->raison_sociale;
        $marque->site=$request->site;
        $marque->service_id=$request->service_id;
        if (request()->file('logo')!=null) {
            $img=request()->file('logo');
            $imageName=$img->getClientOriginalName();
            $imageName=time().'_'.$imageName;
            $path=request()->file('logo')->storeAs('public/avatars',$imageName);
            //$img->move(public_path('/logos'),$imageName);
            $marque->logo=$imageName;
        }else {
            $marque->logo=null;
        }
        $marque->save();

        if ($marque) {
            return redirect()->back()->with('success','Enregistrer avec succès!');
        }else{
            return redirect()->back()->with('error','Une erreur s\'est produite!');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Marque  $marque
     * @return \Illuminate\Http\Response
     */
    public function show(Marque $marque)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Marque  $marque
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $marque=Marque::find($id);
        $cat=Telecom::all();
        return view('admin.page.marque.update')->with('marque',$marque)->with('services',$cat);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Marque  $marque
     * @return \Illuminate\Http\Response
     */
    public function update($id)
    {
        $marque=Marque::find($id);
        $marque->raison_sociale=request('raison_sociale');
        $marque->site=request('site');
        $marque->service_id=request('service_id');
        if (request()->file('logo')!=null) {
            if ($marque->logo != null) {
                Storage::delete('public/avatars/' .$partenaire->logo);
            }
            $img=request()->file('logo');
            $imageName=$img->getClientOriginalName();
            $imageName=time().'_'.$imageName;
            //$path=Storage::putFile('logo', $imageName);
            $path=request()->file('logo')->storeAs('public/avatars',$imageName);
            //$img->move(public_path('/logos'),$imageName);
            $marque->logo=$imageName;
        }else {
            $marque->logo=$marque->logo;
        }
        $marque->save();

        if ($marque) {
            return redirect()->route('administration.marque')->with('success','Modifier avec succès!');
        }else{
            return redirect()->back()->with('error','Une erreur s\'est produite!');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Marque  $marque
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $marque=Marque::find($id);
        if ($marque->logo != null) {
            Storage::delete('public/avatars/' .$marque->logo);
        }
        $marque->delete();
        if ($marque){
            return redirect()->back()->with('success','Supprimer avec succès!');
        }else{
            return redirect()->back()->with('error','Une erreur s\'est produite!');
        }
    }
}
