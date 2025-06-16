<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\News;
use Illuminate\Support\Facades\Date;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cat=News::paginate(20);
        return view('admin.page.news.index')->with('news',$cat);
    }

    public function Add()
    {
        return view('admin.page.news.add');
    }
    
    public function Search(Request $request)
    {
        $cat=News::search(request(key:'name'))->paginate(20);
        return view('admin.page.news.index')->with('news',$cat);
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
        $date = Date::now();
        $slug=Str::slug($request->libelle);
        $cat=new News();
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
            $path=request()->file('image')->storeAs('public/imgs',$imageName);
            $cat->image=$imageName;
        }else {
            $cat->image=null;
        }
        $cat->auteur=$request->auteur;
        $cat->dates=$date;
        $cat->slug=$slug;
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
     * @param  \App\Models\News  $news
     * @return \Illuminate\Http\Response
     */
    public function show(News $news)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\News  $news
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tc=News::find($id);
        return view('admin.page.news.update')->with('new',$tc);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\News  $news
     * @return \Illuminate\Http\Response
     */
    public function update($id)
    {
        $date = Date::now();
        $slug=Str::slug(request('libelle'));
        $cat=News::find($id);
        //dd(request()->file('image'));
        $cat->libelle=request('libelle');
        $cat->libelle_en=request('libelle_en');
        $cat->short=request('short');
        $cat->short_en=request('short_en');
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
        $cat->auteur=request('auteur');
        $cat->dates=$date;
        $cat->slug=$slug;
        $cat->save();

        if ($cat) {
            return redirect()->route('administration.news')->with('success','Modifier avec succès!');
        }else{
            return redirect()->back()->with('error','Une erreur s\'est produite!');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\News  $news
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cat=News::find($id);
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
