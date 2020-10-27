@extends ('layouts.app')


@section ('content')

    <div class="text-4xl mb-8">
        <h1>Update details for the following boxer: {{$boxer -> name}}</h1>
    </div>

    <form method="post" action="{{$boxer->path}}">

        @method('PATCH')
        @csrf

        <div class="flex flex-wrap">
            <div class="w-full">
                <label class="block" for="name">
                    Name of Boxer:
                </label>

                <input class="block w-2/5 @error ('name') border border-red-500 @enderror"
                       type="text" name="name" data-lpignore="true" autocomplete="off" value="{{$boxer -> name}}" />

                @error ('name')
                <div class="alert-message">
                    {{ $message }}
                </div>
                @enderror

            </div>
        </div>

        <div class="flex flex-wrap">
            <div class="w-1/2">
                <label class="block" for="division">Division</label>
                <input class="block w-4/5 @error ('division') border border-red-500 @enderror"
                       type="text" name="division" data-lpignore="true"
                       autocomplete="off" value="{{$boxer -> division}}" />

                @error ('division')
                <div class="alert-message">
                    {{ $message }}
                </div>
                @enderror

            </div>

            <div class="w-1/2">
                <label class="block" for="owner">
                    Country
                </label>
                <input class="block w-4/5 @error ('country') border border-red-500 @enderror"
                       type="text" name="country" data-lpignore="true"
                       autocomplete="off" value="{{$boxer -> country}}" />

                @error ('country')
                <div class="alert-message">
                    {{ $message }}
                </div>
                @enderror

            </div>
        </div>

        <div class="flex flex-wrap">
            <div class="w-full">
                <label class="block" for="wins">
                    Wins:
                </label>

                <input class="block w-2/5 @error ('wins') border border-red-500 @enderror"
                       type="number" name="wins" data-lpignore="true" autocomplete="off" value="{{$boxer -> wins}}" />

                @error ('wins')
                <div class="alert-message">
                    {{ $message }}
                </div>
                @enderror

            </div>
        </div>

        <div class="flex flex-wrap">
            <div class="w-full">
                <label class="block" for="draws">
                    Draws:
                </label>

                <input class="block w-2/5 @error ('draws') border border-red-500 @enderror"
                       type="number" name="draws" data-lpignore="true" autocomplete="off" value="{{$boxer -> draws}}" />

                @error ('draws')
                <div class="alert-message">
                    {{ $message }}
                </div>
                @enderror

            </div>
        </div>

        <div class="flex flex-wrap">
            <div class="w-full">
                <label class="block" for="losses">
                    Losses:
                </label>

                <input class="block w-2/5 @error ('losses') border border-red-500 @enderror"
                       type="number" name="losses" data-lpignore="true" autocomplete="off" value="{{$boxer -> losses}}" />

                @error ('losses')
                <div class="alert-message">
                    {{ $message }}
                </div>
                @enderror

            </div>
        </div>



        <div class="flex flex-wrap">
            <div class="w-full">
                <label class="block" for="notes">Details</label>
                <textarea class="block w-8/12" rows="5"
                          name="notes" placeholder="Insert information"></textarea>
            </div>
        </div>

        <div class="flex flex-wrap mt-8">
            <div class="w-full">
                <button class="nav-button" type="submit"><i class="fas fa-paw mr-2"></i>Update Boxer</button>
                <a href="/boxers">
                    <button class="nav-button" type="button"><i class="fas fa-paw mr-2"></i>Cancel</button>
                </a>
            </div>
        </div>
    </form>
@endsection
