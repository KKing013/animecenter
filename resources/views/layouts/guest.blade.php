<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'AnimeCenter') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
    </head>
    <body onload="hideSuccess()">
        <div class="font-sans text-gray-900 antialiased">
            {{ $slot }}
        </div>


        <script src="/js/custom.js"></script>
        @if (session()->has('success'))
        <div style="display:block" id="success" class="fixed bg-red-500 text-white py-2 px-4 rounded-xl bottom-3 left-3 text-sm">
            <p> {{ session('success') }} </p>
        </div>

        @endif


    </body>
</html>
