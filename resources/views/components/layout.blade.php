<!doctype html>

<title>{{ config('app.name', 'AnimeCenter') }}</title>

<link href="{{ asset('css/app.css') }}" rel="stylesheet">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">

<!-- Search bar styles -->

<livewire:styles>

    <body onload="hideSuccess()" style="font-family: Open Sans, sans-serif">
        <section>

            <x-nav />

        </section>

        <section class="max-w-6xl mx-auto space-y-6 ">


            <x-banner />

        </section>

        {{ $slot }}

        <x-footer />

        <script src="/js/custom.js"></script>
        
        <livewire:scripts>

            @if (session()->has('success'))
                <div style="display:block" id="success"
                    class="fixed bg-red-500 text-white py-2 px-4 rounded-xl bottom-3 left-3 text-sm">
                    <p> {{ session('success') }} </p>
                </div>

            @endif
    </body>
