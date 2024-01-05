<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset ('admin-template/style.css') }}">

    <!-- Scripts -->
    {{-- @vite(['resources/css/app.css', 'resources/js/app.js']) --}}

    <!-- Icons pack -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <!-- ChartJS -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js@3.7.0/dist/chart.min.js"></script>

{{--    <script src='./dist/js/dashboard.js'></script>--}}
{{--    <script src='./dist/js/dashboard-chart.js'></script>--}}

    {{-- มาจาก ??--}}
    <script src="{{ asset ('js/app.js') }}" defer></script>
    <script src="{{ asset ('admin-template/dashboard.js') }}" defer> </script>
    <script src="{{ asset ('admin-template/dashboard-chart.js') }}" defer> </script>


        <!-- Styles -->
        @livewireStyles
    </head>
    <body >

        @include('partials.sidebar'){{-- import เข้า--}}


        <main>
            @yield('content') {{-- เจาะช่องจองพื้นที่--}}
        </main>







        @stack('modals')

        @livewireScripts
    </body>
</html>
