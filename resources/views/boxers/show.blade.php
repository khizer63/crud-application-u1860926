@extends('layouts.app')

@section('content')

    <div class="flex flex-wrap mt-8">
        <div class="w-full">
            <a href="/boxers">
                <strong>Go back</strong></button>
            </a>
        </div>

    <main class="sm:container sm:mx-auto sm:mt-10">


        <div class="w-full sm:px-6">
            <h1 class="text-4x1">
               Name: {{$boxer -> name}}
            </h1>
            <p>
            <h2 class="font-bold mb-4">
                Boxer Details:
            </h2>
            <p class="mb-2">
                Division: {{ $boxer -> division }}
            </p>
            <p class="mb-2">
                Country of origin: {{ $boxer -> country }}
            </p>
            <p class="mb-4">
                Record: {{ $boxer -> wins }} - {{ $boxer -> draws }} - {{ $boxer -> losses }}
            </p>

            <h2 class="font-bold mb-4">
                More information:
            </h2>

                {{$boxer -> notes }}

            <div class="flex flex-wrap mt-8">
                <div class="bg-blue-100 mb-4 px-4 py-4 border rounded border-gray-500">
                    <a href="{{route('boxers.edit',$boxer)}}">
                        <strong>Click here to edit</strong>
                    </a>
                </div>
            </div>
            <form class="inline" method="post" action="{{ $boxer -> path }}">
                @method ('DELETE')
                @csrf

                <button type="submit">
                    <div class="bg-blue-100 mb-4 px-4 py-4 border rounded border-gray-500">
                    <p><strong>Delete</strong></p>
                    <i class="fas fa-dumpster inline crud-button"></i>
                    </div>
                </button>
            </form>
        </div>

    </main>
@endsection

