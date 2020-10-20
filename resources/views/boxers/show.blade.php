@extends('layouts.app')

@section('content')
    <main class="sm:container sm:mx-auto sm:mt-10">
        <div class="w-full sm:px-6">

            <h1 class="text-4x1">
                {{$boxer -> name}}
            </h1>

        </div>
        </section>
        </div>
    </main>
@endsection

@section ('content')

    <div class="flex">
        <div class="w-1/2 text-xl bg-blue-100 px-4 py-4 border rounded border-gray-500">
            <h2 class="font-bold mb-4">
                Dog Details
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
                Dog Notes
            </h2>
        </div>
    </div>

@endsection
