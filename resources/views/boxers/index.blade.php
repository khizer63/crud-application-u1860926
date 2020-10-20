@extends('layouts.app')

@section('header')
    <div class="flex justify-between">
        <div class="text-4xl mb-8">
        </div>





@endsection



@section('content')
    <main class="sm:container sm:mx-auto sm:mt-10">
        <div class="w-full sm:px-6">
            <h1>Boxers - U1860926</h1>

            <div class="flex flex-wrap mt-8">
                <div class="w-full">
                    <a href="/create">
                        <button class="nav-button" type="button"><i class="fas fa-paw mr-2"></i>Add Boxer</button>
                    </a>
                </div>
            </div>


            <ul>
                @foreach($boxers as $b)
                    <li>
                        {{$b -> name}} - {{$b -> division}} : <a href={{$b -> path}}">Boxer Details</a>
                    </li>
                @endforeach

            </ul>
                </div>
            </section>
        </div>
    </main>
@endsection
