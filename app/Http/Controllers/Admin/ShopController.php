<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Shop;
use App\Models\CategorieShop;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Date;
use Illuminate\Support\Str;

class ShopController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $shop=Shop::paginate(20);
        return view('admin.page.shop.shop')->with('shops',$shop);
    }

    public function Add()
    {
        $cat=CategorieShop::all();
        return view('admin.page.shop.add')->with('categories',$cat);
    }

    public function Search(Request $request)
    {
        $shop=Shop::search(request(key:'name'))->paginate(20);
        return view('admin.page.shop.shop')->with('shops',$shop);
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
        $shop=new Shop();
        $shop->titre=$request->titre;
        $shop->titre_en=$request->titre_en;
        $shop->description=$request->description;
        $shop->description_en=$request->description_en;
        $shop->prix=$request->prix;
        $shop->ancien_prix=$request->ancien_prix;
        $shop->qte_min=$request->qte_min;
        
        
        $shop->dates=$date;
        $shop->cat_id=$request->cat_id;
        if (request()->file('image')!=null) {
            $img=request()->file('image');
            $imageName=$img->getClientOriginalName();
            $imageName=time().'_'.$imageName;
            $path=request()->file('image')->storeAs('public/imgs',$imageName);
            $shop->image=$imageName;
        }else {
            $shop->image=null;
        }

        if (request()->file('image2')!=null) {
            $img2=request()->file('image2');
            $imageName2=$img2->getClientOriginalName();
            $imageName2=time().'_'.$imageName2;
            $path=request()->file('image2')->storeAs('public/imgs',$imageName2);
            $shop->image2=$imageName2;
        }else {
            $shop->image2=null;
        }
        if (request()->file('image3')!=null) {
            $img3=request()->file('image3');
            $imageName3=$img3->getClientOriginalName();
            $imageName3=time().'_'.$imageName3;
            $path=request()->file('image3')->storeAs('public/imgs',$imageName3);
            $shop->image3=$imageName3;
        }else {
            $shop->image3=null;
        }

        $shop->slug=$slug;
        $shop->save();

        if ($shop) {
            return redirect()->back()->with('success','Enregistrer avec succès!');
        }else{
            return redirect()->back()->with('error','Une erreur s\'est produite!');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Shop  $shop
     * @return \Illuminate\Http\Response
     */
    public function show(Shop $shop)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Shop  $shop
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $shop=Shop::find($id);
        $cat=CategorieShop::all();
        return view('admin.page.shop.update')->with('shop',$shop)->with('categories',$cat);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Shop  $shop
     * @return \Illuminate\Http\Response
     */
    public function update($id)
    {
        $slug=Str::slug(request('titre'));
        $shop=Shop::find($id);
        $shop->titre=request('titre');
        $shop->titre_en=request('titre_en');
        $shop->description=request('description');
        $shop->description_en=request('description_en');
        $shop->prix=request('prix');
        $shop->ancien_prix=request('ancien_prix');
        $shop->ancien_prix=request('ancien_prix');
        $shop->qte_min=request('qte_min');
        if (request('new') !=null) {
            $shop->stock=$shop->stock +request('new');
        }else{
            $shop->stock=request('stock');
        }
        $shop->dates=$shop->dates;
        $shop->cat_id=request('cat_id');
        if (request()->file('image')!=null) {
            if ($shop->image != null) {
                Storage::delete('public/imgs/' .$shop->image);
            }
            $img=request()->file('image');
            $imageName=$img->getClientOriginalName();
            $imageName=time().'_'.$imageName;
            $path=request()->file('image')->storeAs('public/imgs',$imageName);
            $shop->image=$imageName;
        }else {
            $shop->image=$shop->image;
        }
        if (request()->file('image2')!=null) {
            if ($shop->image2 != null) {
                Storage::delete('public/imgs/' .$shop->image2);
            }
            $img2=request()->file('image2');
            $imageName2=$img2->getClientOriginalName();
            $imageName2=time().'_'.$imageName2;
            $path=request()->file('image2')->storeAs('public/imgs',$imageName2);
            $shop->image2=$imageName2;
        }else {
            $shop->image2=$shop->image2;
        }

        if (request()->file('image3')!=null) {
            if ($shop->image3 != null) {
                Storage::delete('public/imgs/' .$shop->image3);
            }
            $img3=request()->file('image3');
            $imageName3=$img3->getClientOriginalName();
            $imageName3=time().'_'.$imageName3;
            $path=request()->file('image3')->storeAs('public/imgs',$imageName3);
            $shop->image3=$imageName3;
        }else {
            $shop->image3=$shop->image3;
        }
        $shop->slug=$slug;
        $shop->save();

        if ($shop) {
            return redirect()->route('administration.shop')->with('success','Modifier avec succès!');
        }else{
            return redirect()->back()->with('error','Une erreur s\'est produite!');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Shop  $shop
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $shop=Shop::find($id);
        if ($shop->image != null) {
            Storage::delete('public/imgs/' .$shop->image);
        }
        if ($shop->image2 != null) {
            Storage::delete('public/imgs/' .$shop->image2);
        }
        if ($shop->image3 != null) {
            Storage::delete('public/imgs/' .$shop->image3);
        }
        $shop->delete();
        if ($shop){
            return redirect()->back()->with('success','Supprimer avec succès!');
        }else{
            return redirect()->back()->with('error','Une erreur s\'est produite!');
        }
    }
}
