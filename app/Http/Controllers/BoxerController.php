<?php

namespace App\Http\Controllers;

use App\Models\Boxer;
use Illuminate\Http\Request;

class BoxerController extends Controller

{
    const BOXERS_ON_MAIN_PAGE = 30;

    public function index()
    {
        $boxers = Boxer::query() -> orderByDesc('wins') -> paginate(self::BOXERS_ON_MAIN_PAGE);
       return view ('boxers.index',['boxers' => $boxers]);
    }
    public function create()
    {
        return view ('boxers.create');
    }

    public function store(Request $request)
    {
       request () -> validate([
           'name' => 'required|min:2|max:32',
           'division' => 'required|min:2|max:32',
           'country' => 'required|min:2|max:32',
           'wins' => 'numeric|min:0|max:32',
           'losses' => 'numeric|min:0|max:32',
           'draws' => 'numeric|min:0|max:32',
       ]);

       $attributes = $request -> all(
           'name',
                'division',
                'country',
                'wins','losses','draws',
                'notes');

       $boxer = Boxer::create($attributes);

       return redirect($boxer ->path);
    }


    public function show(Boxer $boxer)
    {
        return view ('boxers.show', compact('boxer'));
    }


    public function edit(Boxer $boxer)
    {
        return view('boxers.edit',compact('boxer'));
    }

    public function update(Request $request, Boxer $boxer){
          $attributes =  request () -> validate([
                'name' => 'required|min:2|max:32',
                'division' => 'required|min:2|max:32',
                'country' => 'required|min:2|max:32',
                'wins' => 'numeric|min:0|max:32',
                'losses' => 'numeric|min:0|max:32',
                'draws' => 'numeric|min:0|max:32',
            ]);

          $boxer -> update($attributes);

            return redirect() -> route('index');
        }

    public function destroy(Boxer $boxer){
        $boxer -> delete();
        return redirect() -> route('index');
    }
}
