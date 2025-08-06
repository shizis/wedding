<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="language" content="en-US" />
        <meta name="robots" content="index,follow" />
        <meta http-equiv="Cache-Control" content="cache" />
        <meta http-equiv="x-dns-prefetch-control" content="off" />
        <meta name="robots" content="noindex,nofollow" />
        <meta name="googlebot-news" content="noindex" />
        <meta name="google" content="notranslate">
        <link rel="canonical" href="{{ url('/ziqfa-silvi') }}" />

        <title>{{ isset($title) ? "$title - " . config('app.name') : config('app.name') }}</title>

        <meta name="title" content="The Wedding of Ziqfa &amp; Silvi">
        <meta name="description" content="Minggu - Senin, 10 - 11 Agustus 2025" />
        <meta name="url" content="{{ url('/ziqfa-silvi') }}" />
        <meta name="identifier-URL" content="{{ url('/') }}" />
        <meta name="keywords" content="wedding website, ziqfa silvi," />

        <meta name="og:title" content="The Wedding of Angga &amp; Laras" />
        <meta name="og:type" content="website" />
        <meta name="og:url" content="{{ url('/ziqfa-silvi') }}" />
        <meta name="og:image" content="{{ url('images/2.jpg') }}" />
        <meta name="og:site_name" content="ziqfa &amp; silvi" />
        <meta name="og:description" content="Minggu - Senin, 10 - 11 Agustus 2025" />
        <!-- apple meta tags -->
        <meta name="apple-mobile-web-app-title" content="Wedding Ziqfa &amp; Silvi" />
        <!-- New in iOS6 -->
        <meta name="mobile-web-app-capable" content="yes">
        <meta name="apple-touch-fullscreen" content="no" />
        <meta name="apple-mobile-web-app-status-bar-style" content="black" />
        <meta name="format-detection" content="telephone=no" />

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link
            href="https://fonts.googleapis.com/css2?family=Amiri:ital,wght@0,400;0,700;1,400;1,700&family=Italianno&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
            rel="stylesheet">
        <!-- Scripts -->
        <style>
            [x-cloak] {
                display: none !important;
            }
        </style>
        @vite(['resources/css/app.css'])
        @fluxAppearance
    </head>

    <body class="font-poppins bg-white antialiased">
        <!-- Page Content -->
        <main class="">
            {{ $slot }}
        </main>
        @fluxScripts
        @vite(['resources/js/app.js'])
    </body>

</html>
