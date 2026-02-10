<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>{{ $title ?? 'Home'}} - {{ config('app.name') }}</title>

        <!-- CSS here -->
        <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('fontawsome/css/all.min.css') }}">
        <link rel="stylesheet" href="{{ asset('fontawsome/css/fontawesome.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/slick.css') }}">
        <link rel="stylesheet" href="{{ asset('css/odometer.css') }}">
        <link rel="stylesheet" href="{{ asset('css/animate.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
        <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">

        @vite(['resources/css/app.css', 'resources/js/app.js'])

        @livewireStyles
    </head>

    <body>
        <!-- Preloader -->
        {{-- <div id="preloader" wire:loading>
            <div class="spinner">
                <div class="rect1"></div>
                <div class="rect2"></div>
                <div class="rect3"></div>
                <div class="rect4"></div>
                <div class="rect5"></div>
            </div>
        </div> --}}
        <!-- Preloader -->

        <!-- header part start -->
        <div id="header-fixed-height"></div>

        <livewire:header />

        <!-- header part end -->
        {{ $slot }}


        <!-- scroll top part start -->
        <button class="scroll-to-top">
            <i class="fas fa-angle-up"></i>
        </button>
        <!-- scroll top part end -->

       <livewire:footer />

        <!-- JS here -->
        <script src="{{  asset('js/vendor/jquery-3.6.0.min.js') }}"></script>
        <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('js/jquery.odometer.min.js') }}"></script>
        <script src="{{ asset('js/jquery.appear.js') }}"></script>
        <script src="{{ asset('js/wow.min.js') }}"></script>
        <script src="{{ asset('js/slick.min.js') }}"></script>
        <script src="{{ asset('js/script.js') }}"></script>

        @livewireScripts
    </body>

</html>
