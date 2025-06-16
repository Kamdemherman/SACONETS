<?php

namespace App\Http\Controllers;

use App\Models\Devis;
use Illuminate\Http\Request;
use App\Rules\ReCaptcha;
use Illuminate\Support\Facades\Mail;
use App\Mail\DevisMail;
use Illuminate\Support\Facades\Date;

class DevisController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
            'name' => 'required|min:5',
            'email' => 'required|email',
            'ville' => 'required',
            'company' => 'required',
            'object' => 'required',
            'phone' => 'required',
            'g-recaptcha-response' => ['required', new ReCaptcha]
        ]);
         $date = Date::now();
        $devis=new Devis();
        $devis->name=$request->name;
        $devis->email=$request->email;
        $devis->ville=$request->ville;
        $devis->company=$request->company;
        $devis->object=$request->object;
        $devis->phone=$request->phone;
        $devis->dates=$date;
        $devis->save();
        if ($devis) {
            $nom=$request->name;
            $email=$request->email;
            $objet=$request->object;
            $tel=$request->phone;
            $ville=$request->ville;
            $entreprise=$request->company;
            $this->Mail($nom,$email,$objet,$tel,$ville,$entreprise);
            return back()->with('success','Message has been sent');
        }else{
            return redirect()->back()->with('error','Une erreur s\'est produite!');
        } 
    }

    public function Mail($nom,$email,$objet,$tel,$ville,$entreprise)
    {
        $email=$email;
        $nom=$nom;
        $message=$objet;
        $tel=$tel;
        $ville=$ville;
        $entreprise=$entreprise;
        Mail::to('contact@saconets.uahj.org')->send(new DevisMail($nom,$email,$message,$tel,$ville,$entreprise));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Devis  $devis
     * @return \Illuminate\Http\Response
     */
    public function show(Devis $devis)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Devis  $devis
     * @return \Illuminate\Http\Response
     */
    public function edit(Devis $devis)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Devis  $devis
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Devis $devis)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Devis  $devis
     * @return \Illuminate\Http\Response
     */
    public function destroy(Devis $devis)
    {
        //
    }
}
