<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <link rel="preconnect" href="https://fonts.bunny.net">   <!-- Fonts -->
    <link rel="stylesheet" href="{{ asset ('admin-template/style.css') }}"><!-- Styles -->

    {{-- @vite(['resources/css/app.css', 'resources/js/app.js']) --}}   <!-- Scripts -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script> <!-- Icons pack -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js@3.7.0/dist/chart.min.js"></script><!-- ChartJS -->
    <script src="{{ asset ('js/app.js') }}" defer></script>    {{-- ทำให้แทรกภาษา JS ได้--}}
    <script src="{{ asset ('admin-template/dashboard.js') }}" defer> </script>{{-- หน้าแดชบอร์ด ทำ Toggle --}}
    <script src="{{ asset ('admin-template/dashboard-chart.js') }}" defer> </script> {{-- แผนภูมิJS ได้--}}





@livewireStyles  <!-- Styles -->
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
