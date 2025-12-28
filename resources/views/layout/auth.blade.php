<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ $title }}</title>

    <!-- Fonts -->
    <link
        rel="shortcut icon"
        href="{{ asset('img/eicon.png') }}"
        type="image/x-icon"
    />
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

    <!-- Styles / Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body
    class="dark:bg-slate-950 bg-slate-200 text-shadow-slate-950 dark:text-slate-300 bg-center bg-repeat font-bold font-sans antialiased"
    style="background-image: url({{ asset('img/dots.svg') }})"
>
<div class="container mx-auto mt-2">

    <div class="mt-10 flex justify-center">
        <x-nav-link href="{{ route('home') }}" class="font-extrabold text-2xl">
            <img
                src="{{ asset('img/erion.png') }}"
                alt="Erion Logo"
                class="h-32 w-auto"
            />
        </x-nav-link>
    </div>

    <main class="mt-6">
        {{ $slot }}
    </main>

    <x-footer/>
</div>
</body>
</html>
