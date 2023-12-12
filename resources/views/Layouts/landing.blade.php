<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    {{-- @vite('resources/js/app.js') --}}
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <title>Server_vy | @yield('title')</title>
</head>
<body class="dark:bg-black" >
    <header class="fixed top-0 w-full z-50 px-4" >
        <x-landing.navbar />
    </header>
    @yield('body')
</body>
</html>