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
                <button>Enviar</button>
            </div>
        </div>
    </form>
</div>


@endsection
