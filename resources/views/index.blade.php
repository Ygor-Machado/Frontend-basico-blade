{{--@extends('layout.base')--}}

{{--@section('title', 'Home')--}}

{{--@section('content')--}}
{{--    <div class="container mx-auto">--}}
{{--        <h1 class="text-4xl font-bold">Home</h1>--}}
{{--        <p class="text-lg">This is the home page</p>--}}
{{--    </div>--}}

{{--    <div class="flex flex-col">--}}
{{--        @each('layout.user', $users, 'user')--}}
{{--    </div>--}}
    <!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="min-h-screen">
    <div class="min-h-screen flex flex-col items-center justify-center">
        <div class="px-32">
            <main>
                <x-alert
                    type="warning"
                    title="Titulo da mensagem"
                    message="Mensagem burro"
                />
            </main>
        </div>
    </div>
</body>
</html>



{{--@endsection--}}
