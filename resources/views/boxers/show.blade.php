@extends('layouts.app')

@section('content')
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

                <p>
                    <a href="{{$boxer->id}}/edit">EDIT</a>
                </p>
            </form>
        </div>

    </main>
@endsection

