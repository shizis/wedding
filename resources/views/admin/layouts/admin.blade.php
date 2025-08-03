<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ isset($title) ? "$title - " . config('app.name') : config('app.name') }}</title>

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link
            href="https://fonts.googleapis.com/css2?family=Amiri:ital,wght@0,400;0,700;1,400;1,700&family=Italianno&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
            rel="stylesheet">

        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=inter:400,500,600&display=swap" rel="stylesheet" />
        <!-- Scripts -->
        @vite(['resources/css/app.css'])
        @fluxAppearance

    </head>

    <body class="min-h-svh">
        <flux:sidebar sticky stashable
            class="border-r border-zinc-200 bg-zinc-50 rtl:border-l rtl:border-r-0 dark:border-zinc-700 dark:bg-zinc-900">
            <flux:sidebar.toggle class="lg:hidden" icon="x-mark" />
            <flux:brand href="#" name="Wedding" class="px-2" />
            <flux:navlist variant="outline">
                <flux:navlist.item icon="home" href="{{ route('admin.index') }}">Home</flux:navlist.item>
                <flux:navlist.item icon="document-text" href="{{ route('admin.guests') }}">Guests</flux:navlist.item>
            </flux:navlist>
            <flux:spacer />
            <flux:button x-data x-on:click="$flux.dark = ! $flux.dark" size="sm" variant="subtle">Dark/Light Mode
            </flux:button>
            <flux:navlist variant="outline">
                <flux:navlist.item icon="cog-6-tooth" href="#">Settings</flux:navlist.item>
                <flux:navlist.item icon="information-circle" href="#">Help</flux:navlist.item>
            </flux:navlist>
            <flux:dropdown position="top" align="start" class="max-lg:hidden">
                <flux:profile name="{{ Auth::user()->name }}" />

                <flux:menu>
                    <form action="{{ route('logout') }}" method="POST">
                        @csrf
                        <flux:button type="submit" class="w-full" variant="subtle"
                            icon="arrow-right-start-on-rectangle">
                            Log out
                        </flux:button>
                    </form>
                </flux:menu>
            </flux:dropdown>
        </flux:sidebar>

        <flux:header class="lg:hidden">
            <flux:sidebar.toggle class="lg:hidden" icon="bars-2" inset="left" />
            <flux:spacer />
            <flux:dropdown position="top" alignt="start">
                <flux:profile />

                <flux:menu>
                    <form action="{{ route('logout') }}" method="POST">
                        @csrf
                        <flux:menu.item icon="arrow-right-start-on-rectangle">
                            <flux:button type="submit">Log out</flux:button>
                        </flux:menu.item>
                    </form>
                </flux:menu>
            </flux:dropdown>
        </flux:header>

        <flux:main>
            {{ $slot }}
        </flux:main>

        @fluxScripts
        @vite(['resources/js/app.js'])
    </body>

</html>
