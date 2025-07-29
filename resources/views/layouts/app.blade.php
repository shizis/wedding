<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ isset($title) ? "$title - " . config('app.name') : config('app.name') }}</title>

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <style>
            [x-cloak] {
                display: none !important;
            }
        </style>

        <!-- Styles -->
        @livewireStyles()

    </head>

    <body class="min-h-screen antialiased">
        <!-- Page Content -->
        <main class="">
            {{ $slot }}
        </main>
    </body>

</html>
