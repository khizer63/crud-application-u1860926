@extends('layouts.app')

@section('header')
    <div class="text-4xl mb-8">
    </div>
@endsection



@section('content')
    <main class="sm:container sm:mx-auto sm:mt-10">
        <div class="w-full sm:px-6">
            <h1>CRUD Application based on boxers by Khizar Hafiz (U1860926)</h1>

            <div class="flex flex-wrap mt-8">
                <div class="bg-blue-100 mb-4 px-4 py-4 border rounded border-gray-500">
                    <a href="/create"><button class="nav-button" type="button">
                            Add a new boxer</button>
                    </a>
                </div>
            </div>


            <ul>
                @foreach($boxers as $b)
                    <li>
                        <div class="bg-blue-100 mb-4 px-4 py-4 border rounded border-gray-500">
                             <p> - {{$b -> name}}</p>
                                    <p> Current Division: {{$b -> division}}</p>
                                        <p> <strong><a href="{{$b -> path}}">Further Details</a></strong></p>
                        </div>
                    </li>
                @endforeach
            </ul>
        </div>
@endsection
