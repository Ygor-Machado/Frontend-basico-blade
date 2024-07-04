@extends('layout.base')

@section('title', 'Home')

@section('content')
{{--    <div class="container mx-auto">--}}
{{--        <h1 class="text-4xl font-bold">Home</h1>--}}
{{--        <p class="text-lg">This is the home page</p>--}}
{{--    </div>--}}

{{--    <div class="flex flex-col">--}}
{{--        @each('layout.user', $users, 'user')--}}
{{--    </div>--}}
<div class="px-10 flex flex-col gap-4">

    @if(Session::has('success'))
        <div class="p-4 mb-4 text-sm text-green-800 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400" role="alert">
            <span class="font-medium">Success alert!</span> Change a few things up and try submitting again.
        </div>
    @endif

    @datetime(now())

    @odd(4)
        O palmeiras não tem mundial par
    @endodd

    <form action="{{route('send.store')}}" method="POST">
        @csrf
        <div class="flex flex-col gap-4">
            <div>
                <label for="email" class="block text-sm font-medium text-gray-700"></label>
                <div class="mt-1">
                    <input
                        type="text"
                        name="email"
                        id="email"
                        placeholder="digite seu email amigo"
                        @class([
                            'border-red-500' => $errors->has('email'),
                            'border-gray-300' => !$errors->has('email')
                        ])
                        value="{{old('email')}}"
                    >
                </div>

                @error('email')
                    <p class="mt-2 text-sm text-red-600" id="email-error">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label for="name" class="block text-sm font-medium text-gray-700"></label>
                <div class="mt-1">
                    <input
                        type="text"
                        name="name"
                        id="name"
                        placeholder="digite seu nome amigo"
                        @class([
                            'border-red-500' => $errors->has('name'),
                            'border-gray-300' => !$errors->has('name')
                        ])
                        value="{{old('name')}}"
                    >
                </div>

                @error('name')
                    <p class="mt-2 text-sm text-red-600" id="email-error">{{ $message }}</p>
                @enderror

                <button>Enviar</button>
            </div>
        </div>
    </form>
</div>


@endsection
