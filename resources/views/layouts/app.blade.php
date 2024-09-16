<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>@yield('titulos','Gestión Documental')</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.googleapis.com/css2?family=Jura:wght@300;400;500;600;700&display=swap" rel="stylesheet">
        <style>
            body {
                font-family: 'Jura', sans-serif;
                background: linear-gradient(rgb(118, 171, 174, 0.6), rgb(118, 171, 174, 0.6)),
                    url('/images/login/gestidoc.jpg') no-repeat center center;
                background-size: cover;
                background-position: center;
            }
        </style>

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <!-- Styles -->
        @livewireStyles
    </head>
    <body class="font-sans antialiased">
        <x-banner />

        <div class="min-h-screen bg-gray-100">
            @livewire('navigation-menu')


            <!-- Page Content -->
            <main>
                @yield('contenido')
            </main>
        </div>

        @stack('modals')

        @livewireScripts
    </body>
</html>
