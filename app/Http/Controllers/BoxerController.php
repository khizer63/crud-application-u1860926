<?php

namespace App\Http\Controllers;

use App\Models\Boxer;
use Illuminate\Http\Request;

class BoxerController extends Controller
{

    public function index()
    {
       return view ('boxers.index',['boxers' => Boxer::all()]);
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


    public function show(Boxer $boxer)
    {
        return view ('boxers.show', compact('boxer'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Boxer  $boxer
     * @return \Illuminate\Http\Response
     */
    public function edit(Boxer $boxer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Boxer  $boxer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Boxer $boxer)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Boxer  $boxer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Boxer $boxer)
    {
        //
    }
}
