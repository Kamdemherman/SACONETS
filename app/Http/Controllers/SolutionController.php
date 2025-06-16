<?php

namespace App\Http\Controllers;

use App\Models\Solution;
use Illuminate\Http\Request;

class SolutionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cat=Solution::find(1);
        return view('front.solution.surveillance')->with('surveillance',$cat);
    }
    public function index2()
    {
        $cat=Solution::find(2);
        return view('front.solution.conference')->with('conference',$cat);
    }
    public function index3()
    {
        $cat=Solution::find(3);
        return view('front.solution.vpn')->with('vpn',$cat);
    }
    public function index4()
    {
        $cat=Solution::find(4);
        return view('front.solution.acces')->with('acces',$cat);
    }
    public function index5()
    {
        $cat=Solution::find(5);
        return view('front.solution.vsat')->with('vsat',$cat);
    }
    public function index6()
    {
        $cat=Solution::find(6);
        return view('front.solution.wimax')->with('wimax',$cat);
    }
    public function index7()
    {
        $cat=Solution::find(7);
        return view('front.solution.fibre&radio')->with('fibre',$cat);
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
     * @param  \App\Models\Solution  $solution
     * @return \Illuminate\Http\Response
     */
    public function show(Solution $solution)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Solution  $solution
     * @return \Illuminate\Http\Response
     */
    public function edit(Solution $solution)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Solution  $solution
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Solution $solution)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Solution  $solution
     * @return \Illuminate\Http\Response
     */
    public function destroy(Solution $solution)
    {
        //
    }
}
