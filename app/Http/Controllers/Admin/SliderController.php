<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Slider;
use Illuminate\Http\Request;

class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cat=Slider::all();
        return view('admin.page.slider.index')->with('sliders',$cat);
    }

    public function Add()
    {
        return view('admin.page.slider.add');
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
        $request->validate([
            'image' => 'required',
        ]);
        $cat=new Slider();
        //dd($request->libelle);
        $cat->titre=$request->titre;
        $cat->titre_en=$request->titre_en;
        $cat->paragraphe=$request->paragraphe;
        $cat->paragraphe_en=$request->paragraphe_en;
        $cat->lien=$request->lien;
        if (request()->file('image')!=null) {
            $img=request()->file('image');
            $imageName=$img->getClientOriginalName();
            $imageName=time().'_'.$imageName;
            $path=request()->file('image')->storeAs('public/imgs',$imageName);
            $cat->image=$imageName;
        }

        if (request()->file('video')!=null) {
            $video=request()->file('video');
            $videoName=$video->getClientOriginalName();
            $videoName=time().'_'.$videoName;
            $path=request()->file('video')->storeAs('public/media',$videoName);
            $cat->video=$videoName;
        }else {
            $cat->video=null;
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
     * @param  \App\Models\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function show(Slider $slider)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tc=Slider::find($id);
        return view('admin.page.slider.update')->with('slider',$tc);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function update($id)
    {
        $cat=Slider::find($id);
        $cat->titre=request('titre');
        $cat->titre_en=request('titre_en');
        $cat->paragraphe=request('paragraphe');
        $cat->paragraphe_en=request('paragraphe_en');
        $cat->lien=request('lien');
        if (request()->file('image')!=null) {
            $img=request()->file('image');
            $imageName=$img->getClientOriginalName();
            $imageName=time().'_'.$imageName;
            $path=request()->file('image')->storeAs('public/imgs',$imageName);
            $cat->image=$imageName;
        }else {
            $cat->image=$cat->image;
        }
        if (request()->file('video')!=null) {
            $video=request()->file('video');
            $videoName=$video->getClientOriginalName();
            $videoName=time().'_'.$videoName;
            $path=request()->file('video')->storeAs('public/media',$videoName);
            $cat->video=$videoName;
        }else {
            $cat->video=$cat->video;
        }
        $cat->save();

        if ($cat) {
            return redirect()->route('administration.slider')->with('success','Modifier avec succès!');
        }else{
            return redirect()->back()->with('error','Une erreur s\'est produite!');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cat=Slider::find($id);
        $cat->delete();
        if ($cat){
            return redirect()->back()->with('success','Supprimer avec succès!');
        }else{
            return redirect()->back()->with('error','Une erreur s\'est produite!');
        }
    }
}
