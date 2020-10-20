<?php

namespace App\Http\Controllers;

use App\Models\Boxer;
use Illuminate\Http\Request;

class BoxerController extends Controller

{
    const BOXERS_ON_MAIN_PAGE = 6;

    public function index()
    {
        $boxers = Boxer::query() -> orderByDesc('wins') -> paginate(self::BOXERS_ON_MAIN_PAGE);
       return view ('boxers.index',['boxers' => $boxers]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('boxers.create');
    }

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

    public function destroy(Boxer $boxer)
    {
    }
}
