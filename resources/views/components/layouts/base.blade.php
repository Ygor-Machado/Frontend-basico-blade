<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    {{--    @vite('resources/css/app.css')--}}
    <title>{{ $title ?? "MLA" }}</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
<div class="min-h-full">

    <x-layouts.navigation></x-layouts.navigation>

    <div class="py-10">
        <main>
            {{ $slot }}
        </main>
    </div>

</div>

</body>
</html>
