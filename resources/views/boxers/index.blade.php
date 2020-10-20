@extends('layouts.app')

@section('content')
    <main class="sm:container sm:mx-auto sm:mt-10">
        <div class="w-full sm:px-6">


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
