<!DOCTYPE html>
<html lang="en" id="html">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    @livewireStyles
    {{-- @vite('resources/js/app.js') --}}
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <title>Server_vy | @yield('title')</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
</head>

<body class="dark:bg-[#1C1D20]">
    @livewire('navbar')
    @yield('body')
    @livewire('footer')
    @livewireScripts
</body>

</html>
