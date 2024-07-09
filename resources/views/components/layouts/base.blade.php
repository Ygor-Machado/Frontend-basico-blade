<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    {{--    @vite('resources/css/app.css')--}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

    <title>Laravel</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="min-h-screen w-full flex items-center">

    <div class="flex flex-col space-y-4" x-data="{visible: false}">
        <div x-show="visible" class="w-[180px] h-[80px] bg-blue-base shadow-hard"></div>
        <button @click="visible = !visible" class="w-[180px] h-[80px] bg-blue-100 shadow-regular">
            Vai corinthians
        </button>
        <div class="w-[180px] h-[80px] bg-blue-200 shadow-medium"></div>
        <div class="w-[180px] h-[80px] bg-blue-300 shadow-big"></div>
        <div class="w-[180px] h-[80px] bg-blue-400 shadow-card"></div>
        <div class="w-[180px] h-[80px] bg-blue-500 shadow-badge"></div>
    </div>

</body>
</html>
