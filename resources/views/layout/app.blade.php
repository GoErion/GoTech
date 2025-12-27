<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="shortcut icon" href="{{ asset('img/eicon.png') }}" type="image/x-icon">


        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

        <!-- Styles / Scripts -->
            @vite(['resources/css/app.css', 'resources/js/app.js'])

    </head>
    <body class="bg-slate-950 text-slate-400 flex p-6 lg:p-8 items-center lg:justify-center min-h-screen flex-col font-bold font-sans antialiased" style="background-image: url({{ asset('img/dots.svg') }})">
        <main class="">
            {{ $slot }}
        </main>
    </body>
</html>
