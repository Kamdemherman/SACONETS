<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cat=News::orderBy('created_at','desc')->paginate(9);
        return view('front.news.index')->with('news',$cat);
    }

    public function Search(Request $request)
    {
        $news=News::where('libelle','like','%' .$request->titre. '%')->paginate(1);
        $meta_image='';
        $meta_titre="News search";
        return view('front.news.item')->with('news',$news)->with('titre',$request->titre)
                                            ->with('meta_titre',$meta_titre)->with('meta_image',$meta_image);
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
        //
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
        return view('front.news.newsDetailId')->with('new',$tc);
    }

    public function editNews($slug)
    {
        $tc=News::where('slug',$slug)->first();
        $autres=News::where('id','<>',$tc->id)->orderBy('created_at','desc')->take(10)->get();
        $meta_image=$tc->image;
        $meta_titre=$tc->libelle;
        return view('front.news.newsDetail')->with('news',$tc)->with('autres',$autres)
                                            ->with('meta_titre',$meta_titre)->with('meta_image',$meta_image);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\News  $news
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, News $news)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\News  $news
     * @return \Illuminate\Http\Response
     */
    public function destroy(News $news)
    {
        //
    }
}
