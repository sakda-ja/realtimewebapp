<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <link rel="preconnect" href="https://fonts.bunny.net">   <!-- Fonts -->
    <link rel="stylesheet" href="{{ asset ('admin-template/style.css') }}"><!-- Styles -->


    <link rel="stylesheet"  href="https://cdn.jsdelivr.net/npm/tw-elements/dist/css/tw-elements.min.css" /> <!-- tailwind Element https://tw-elements.com/docs/standard/getting-started/quick-start/-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">






    {{-- @vite(['resources/css/app.css', 'resources/js/app.js']) --}}   <!-- Scripts -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script> <!-- Icons pack -->
    {{-- <script src="https://cdn.jsdelivr.net/npm/chart.js@3.7.0/dist/chart.min.js"></script><!-- ChartJS --> --}}
    <script src="{{ asset ('js/app.js') }}" defer></script>    {{-- ทำให้แทรกภาษา JS ได้--}}
    <script src="{{ asset ('admin-template/dashboard.js') }}" defer> </script>{{-- หน้าแดชบอร์ด ทำ Toggle --}}
    {{-- <script src="{{ asset ('admin-template/dashboard-chart.js') }}" defer> </script> แผนภูมิJS ได้ --}}
    <script src="https://cdn.jsdelivr.net/npm/tw-elements/dist/js/tw-elements.umd.min.js"></script> <!-- tailwind Element https://tw-elements.com/docs/standard/getting-started/quick-start/-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

















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
