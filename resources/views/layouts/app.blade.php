<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Custom App</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Vite Assets (If you're using Vite) -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- If not using Vite, use this instead -->
    <!-- <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <script src="{{ asset('js/script.js') }}" defer></script> -->
</head>
<body class="font-sans bg-neutral-100 text-neutral-900 dark:bg-neutral-900 dark:text-neutral-100">
    <div class="min-h-screen flex flex-col">
        
        {{-- Optional Navigation --}}
        @includeIf('layouts.navigation')

        {{-- Page Header --}}
        @hasSection('header')
            <header class="bg-white dark:bg-neutral-800 shadow">
                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                    @yield('header')
                </div>
            </header>
        @endif

        {{-- Page Content --}}
        <main class="flex-grow">
            @yield('content')
        </main>

        {{-- Optional Footer --}}
        @includeIf('layouts.footer')
    </div>
</body>
</html>
