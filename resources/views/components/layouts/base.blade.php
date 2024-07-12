<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    {{--    @vite('resources/css/app.css')--}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <title>Laravel</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="min-h-screen w-full flex items-start">
    <div class="flex flex-col items-center w-full">
        <x-header
            logo="logo.png"
        />

        {{ $slot }}
    </div>




</body>
</html>
