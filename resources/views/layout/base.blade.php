<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    {{--    @vite('resources/css/app.css')--}}
    <title>@yield('title')</title>
    <script src="https://cdn.tailwindcss.com"></script>
    @stack('script')

</head>
<body>
<div class="min-h-full">

    @sectionMissing('navigation')
        @include('layout.navigation', ['menu' => ['dashboar', 'about', 'users']])
    @endif
    @hasSection('navigation')
        @yield('navigation')
    @endif
</div>

<div class="py-10">
    <main>
        @yield('content')
    </main>
</div>

</body>
</html>
