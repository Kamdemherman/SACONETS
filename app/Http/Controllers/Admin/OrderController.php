<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;
use App\Mail\Facture;
use App\Mail\SendClient;
use PDF;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $order=Order::with('user')->where('etat','Non reglee')->orderBy('created_at','desc')->paginate(20);
        return view('admin.page.order.order')->with('orders',$order);
    }

    public function indexReglee()
    {
        $order=Order::with('user')->where('etat','Reglee')->orderBy('created_at','desc')->paginate(20);
        return view('admin.page.order.index')->with('orders',$order);
    }

    public function indexAnnulee()
    {
        $order=Order::with('user')->where('etat','Annulee')->orderBy('created_at','desc')->paginate(20);
        return view('admin.page.order.annulee')->with('orders',$order);
    }

    public function RegleeJour(Request $request)
    {
        $date=$request->date;
        Session::put('date',$date);
        if ($date != null) {
            $orders=Order::with('user')->where('etat','Reglee')->where('order_date',$date)->orderBy('created_at','desc')->paginate(20);
            return view('admin.page.order.index')->with('orders',$orders);
        } else {
            
            $order=Order::with('user')->where('etat','Reglee')->orderBy('created_at','desc')->paginate(20);
            return view('admin.page.order.index')->with('orders',$order);
        }
        
        
    }

    public function RegleeClient(Request $request)
    {
        $nom=$request->name;
        Session::put('nom',$nom);
        //dd(Session::all());
        if ($nom != null) {
            $orders=Order::with('user')->where('etat','Reglee')->where('user_name','like','%' .$nom. '%')->paginate(20);
            return view('admin.page.order.index')->with('orders',$orders);
        } else {
            $order=Order::with('user')->where('etat','Reglee')->orderBy('created_at','desc')->paginate(20);
            return view('admin.page.order.index')->with('orders',$order);
        }
        
        
    }

    public function RegleeEntre(Request $request)
    {
        $debut=$request->debut;
        $fin=$request->fin;
        Session::put('debut',$debut);
        Session::put('fin',$fin);
        if ($debut !=null && $fin !=null ) {
            $orders=Order::with('user')->where('etat','Reglee')->whereBetween('order_date', [$debut, $fin])->orderBy('created_at','desc')->paginate(20);
            return view('admin.page.order.index')->with('orders',$orders);
        } else {
            $order=Order::with('user')->where('etat','Reglee')->orderBy('created_at','desc')->paginate(20);
            return view('admin.page.order.index')->with('orders',$order);
        }
        
        
    }

    public function ExportPDF(Request $request)
    {
        $orders="";
        $date=Session::get('date');
        $nom=Session::get('nom');
        $debut=Session::get('debut');
        $fin=Session::get('fin');
        if ($date != null) {
            $orders=Order::with('user')->where('etat','Reglee')->where('order_date',$date)->orderBy('created_at','desc')->get();
            Session::forget('date');
        }

        if ($nom != null) {
            $orders=Order::with('user')->where('etat','Reglee')->where('user_name','like','%' .$nom. '%')->get();
            Session::forget('nom');
        }

        if ($debut !=null && $fin !=null ) {
            $orders=Order::with('user')->where('etat','Reglee')->whereBetween('order_date', [$debut, $fin])->orderBy('created_at','desc')->get();
            Session::forget('debut');
            Session::forget('fin');
        }
        if ($date == null && $debut ==null && $fin ==null && $nom == null) {
            $orders=Order::with('user')->where('etat','Reglee')->orderBy('created_at','desc')->get();
        }
        
        $pdf=app('dompdf.wrapper');
        $context=stream_context_create([
            'ssl' => [
                'verify_peer' => FALSE,
                'verify_peer_name' => FALSE,
                'allow_self_signed' => TRUE,
            ]
        ]);  
        $pdf= PDF::setOptions(['isHTML5ParserEnabled'=> true,'isRemoteEnabled'=> true]);
        $pdf->getDomPDF()->setHttpContext($context);
        $pdf->loadView('admin.regleePDF', compact('orders'))->setOptions(['defaultFont' => 'sans-serif']);
        
        return $pdf->download('commande.pdf');
        //return view('admin.regleePDF')->with('orders',$orders);
    }



    public function NonRegleeJour(Request $request)
    {
        $date=$request->date;
        Session::put('date',$date);
        if ($date != null) {
            $orders=Order::with('user')->where('etat','Non reglee')->where('order_date',$date)->orderBy('created_at','desc')->paginate(20);
            return view('admin.page.order.order')->with('orders',$orders);
        } else {
            
            $order=Order::with('user')->where('etat','Non reglee')->orderBy('created_at','desc')->paginate(20);
            return view('admin.page.order.order')->with('orders',$order);
        }
        
        
    }

    public function NonRegleeClient(Request $request)
    {
        $nom=$request->name;
        Session::put('nom',$nom);
        if ($nom != null) {
            $orders=Order::with('user')->where('etat','Non reglee')->where('user_name','like','%' .$nom. '%')->paginate(20);
            return view('admin.page.order.order')->with('orders',$orders);
        } else {
            $order=Order::with('user')->where('etat','Non reglee')->orderBy('created_at','desc')->paginate(20);
            return view('admin.page.order.order')->with('orders',$order);
        }
        
        
    }

    public function NonRegleeEntre(Request $request)
    {
        $debut=$request->debut;
        $fin=$request->fin;
        Session::put('debut',$debut);
        Session::put('fin',$fin);
        if ($debut !=null && $fin !=null ) {
            $orders=Order::with('user')->where('etat','Non reglee')->whereBetween('order_date', [$debut, $fin])->orderBy('created_at','desc')->paginate(20);
            return view('admin.page.order.order')->with('orders',$orders);
        } else {
            $order=Order::with('user')->where('etat','Non reglee')->orderBy('created_at','desc')->paginate(20);
            return view('admin.page.order.order')->with('orders',$order);
        }
        
        
    }

    public function NonRegleeExportPDF(Request $request)
    {
        $orders="";
        $date=Session::get('date');
        $nom=Session::get('nom');
        $debut=Session::get('debut');
        $fin=Session::get('fin');
        if ($date != null) {
            $orders=Order::with('user')->where('etat','Non reglee')->where('order_date',$date)->orderBy('created_at','desc')->get();
            Session::forget('nom');
        }

        if ($nom != null) {
            $orders=Order::with('user')->where('etat','Non reglee')->where('user_name','like','%' .$nom. '%')->get();
            Session::forget('date');
        }

        if ($debut !=null && $fin !=null ) {
            $orders=Order::with('user')->where('etat','Non reglee')->whereBetween('order_date', [$debut, $fin])->orderBy('created_at','desc')->get();
            Session::forget('debut');
            Session::forget('fin');
        }
        if ($date == null && $debut ==null && $fin ==null && $nom == null) {
            $orders=Order::with('user')->where('etat','Non reglee')->orderBy('created_at','desc')->get();
        }
        
        //$pdf=app('dompdf.wrapper');
        $context=stream_context_create([
            'ssl' => [
                'verify_peer' => FALSE,
                'verify_peer_name' => FALSE,
                'allow_self_signed' => TRUE,
            ]
        ]);  
        //$pdf= PDF::setOptions(['isHTML5ParserEnabled'=> true,'isRemoteEnabled'=> true]);
        //$pdf->getDomPDF()->setHttpContext($context);
        $pdf=Pdf::loadView('admin.NonregleePDF', compact('orders'))->setOptions(['dpi' => 150,'defaultFont' => 'sans-serif']);
        
        return $pdf->download('commande.pdf');
        //return view('admin.NonregleePDF')->with('orders',$orders);
    }


    public function AnnuleeJour(Request $request)
    {
        $date=$request->date;
        Session::put('date',$date);
        if ($date != null) {
            $orders=Order::with('user')->where('etat','Annulee')->where('order_date',$date)->orderBy('created_at','desc')->paginate(20);
            return view('admin.page.order.annulee')->with('orders',$orders);
        } else {
            
            $order=Order::with('user')->where('etat','Annulee')->orderBy('created_at','desc')->paginate(20);
            return view('admin.page.order.annulee')->with('orders',$order);
        }
        
        
    }

    public function AnnuleeClient(Request $request)
    {
        $nom=$request->name;
        Session::put('nom',$nom);
        //dd(Session::all());
        if ($nom != null) {
            $orders=Order::with('user')->where('etat','Annulee')->where('user_name','like','%' .$nom. '%')->paginate(20);
            return view('admin.page.order.annulee')->with('orders',$orders);
        } else {
            $order=Order::with('user')->where('etat','Annulee')->orderBy('created_at','desc')->paginate(20);
            return view('admin.page.order.annulee')->with('orders',$order);
        }
        
        
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
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function show(Order $order)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $order=Order::with('user')->find($id);
        return view('admin.page.order.orderDetail')->with('details',$order);
    }

    public function Send($id)
    {
        $detail=Order::with('user')->find($id);
        Mail::to($detail->user->email)->send(new SendClient($detail));
        return redirect()->back()->with('success','Facture envoyée avec succès!');
        //return view('admin.facture')->with('details',$details);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function update($id)
    {
        $order=Order::with('user')->find($id);
        $order->update(['etat' => 'Reglee']);
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $order=Order::find($id);
        $order->delete();
        if ($order){
            return redirect()->back()->with('success','Supprimer avec succès!');
        }else{
            return redirect()->back()->with('error','Une erreur s\'est produite!');
        }
    }
}
