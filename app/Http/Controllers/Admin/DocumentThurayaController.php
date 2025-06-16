<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ThurayaDocument;
use App\Models\Produit_turaya;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

class DocumentThurayaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $thurayaDocument=ThurayaDocument::paginate(20);
        return view('admin.page.Turaya.indexDoc')->with('ptDocs',$thurayaDocument);
    }

    public function Add()
    {
        $cat=Produit_turaya::all();
        return view('admin.page.Turaya.addDoc')->with('produits',$cat);
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
        $thurayaDocument=new ThurayaDocument();
        
        $thurayaDocument->video=$request->video;
        $thurayaDocument->titre=$request->titre;
        $thurayaDocument->titre_en=$request->titre_en;
        if (request()->file('document')!=null) {
            $document=request()->file('document');
            $documentName=$document->getClientOriginalName();
            $documentName=time().'_'.$documentName;
            $path=request()->file('document')->storeAs('public/pdf',$documentName);
            $thurayaDocument->document=$documentName;
        }else {
            $thurayaDocument->document=null;
        }
        if (request()->file('document_en')!=null) {
            $document=request()->file('document_en');
            $documentName=$document->getClientOriginalName();
            $documentName=time().'_'.$documentName;
            $path=request()->file('document_en')->storeAs('public/pdf',$documentName);
            $thurayaDocument->document_en=$documentName;
        }else {
            $thurayaDocument->document_en=null;
        }
    
        $thurayaDocument->prod_id=$request->prod_id;
        $thurayaDocument->save();

        if ($thurayaDocument) {
            return redirect()->back()->with('success','Enregistrer avec succès!');
        }else{
            return redirect()->back()->with('error','Une erreur s\'est produite!');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ThurayaDocument  $thurayaDocument
     * @return \Illuminate\Http\Response
     */
    public function show(ThurayaDocument $thurayaDocument)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ThurayaDocument  $thurayaDocument
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $thurayaDocument=ThurayaDocument::find($id);
        $cat=Produit_turaya::all();
        return view('admin.page.Turaya.updateDoc')->with('ptDoc',$thurayaDocument)->with('produits',$cat);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ThurayaDocument  $thurayaDocument
     * @return \Illuminate\Http\Response
     */
    public function update($id)
    {
        $thurayaDocument=ThurayaDocument::find($id);
        $thurayaDocument->video=request('video');
        $thurayaDocument->titre=request('titre');
        $thurayaDocument->titre_en=request('titre_en');
        
        if (request()->file('document')!=null) {
            if ($thurayaDocument->document != null) {
                Storage::delete('public/pdf/' .$thurayaDocument->document);
            }
            $document=request()->file('document');
            $documentName=$document->getClientOriginalName();
            $documentName=time().'_'.$documentName;
            $path=request()->file('document')->storeAs('public/pdf',$documentName);
            $thurayaDocument->document=$documentName;
        }else {
            $thurayaDocument->document=$thurayaDocument->document;
        }
        if (request()->file('document_en')!=null) {
            if ($thurayaDocument->document_en != null) {
                Storage::delete('public/pdf/' .$thurayaDocument->document_en);
            }
            $document=request()->file('document_en');
            $documentName=$document->getClientOriginalName();
            $documentName=time().'_'.$documentName;
            $path=request()->file('document_en')->storeAs('public/pdf',$documentName);
            $thurayaDocument->document_en=$documentName;
        }else {
            $thurayaDocument->document_en=$thurayaDocument->document_en;
        }
        
        $thurayaDocument->prod_id=request('prod_id');
        $thurayaDocument->save();

        if ($thurayaDocument) {
            return redirect()->route('administration.produit_Doc')->with('success','Modifier avec succès!');
        }else{
            return redirect()->back()->with('error','Une erreur s\'est produite!');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ThurayaDocument  $thurayaDocument
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $thurayaDocument=ThurayaDocument::find($id);
        if ($thurayaDocument->document != null) {
            Storage::delete('public/pdf/' .$thurayaDocument->document);
        }
        if ($thurayaDocument->document_en != null) {
            Storage::delete('public/pdf/' .$thurayaDocument->document_en);
        }
        
        $thurayaDocument->delete();
        if ($thurayaDocument){
            return redirect()->back()->with('success','Supprimer avec succès!');
        }else{
            return redirect()->back()->with('error','Une erreur s\'est produite!');
        }
    }
}
