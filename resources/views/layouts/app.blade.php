<!doctype html>

<html lang="es">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Tabler - Premium and Open Source dashboard template with responsive and high quality UI.</title>
    <!-- CSS files -->
    <link href="{{ asset('frontend/css/tabler.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('frontend/css/tabler-flags.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('frontend/css/tabler-socials.min.css') }}" rel="stylesheet" />
    <link href="./dist/css/tabler-payments.min.css?1738096685" rel="stylesheet" />
    <link href="./dist/css/tabler-vendors.min.css?1738096685" rel="stylesheet" />
    <link href="./dist/css/tabler-marketing.min.css?1738096685" rel="stylesheet" />
    <link href="./dist/css/demo.min.css?1738096685" rel="stylesheet" />
    <style>
        @import url('https://rsms.me/inter/inter.css');
    </style>
</head>

<body class=" layout-fluid">
    <script src="{{ asset('frontend/js/demo-theme.min.js') }}"></script>
    <div class="page">
        <!-- Navbar -->
        @include('layouts.partials.navbar')
        @include('layouts.partials.menu')

        <div class="page-wrapper">

            {{ $slot }}

            @include('layouts.partials.footer')
        </div>
    </div>
    <!-- Libs JS -->
    <script src="./dist/libs/apexcharts/dist/apexcharts.min.js?1738096685" defer></script>
    <script src="./dist/libs/jsvectormap/dist/jsvectormap.min.js?1738096685" defer></script>
    <script src="./dist/libs/jsvectormap/dist/maps/world.js?1738096685" defer></script>
    <script src="./dist/libs/jsvectormap/dist/maps/world-merc.js?1738096685" defer></script>
    <!-- Tabler Core -->
    <script src="{{ asset('frontend/js/tabler.min.js')}}" defer></script>
    <script src="{{ asset('frontend/js/demo.min.js') }}" defer></script>
</body>

</html>
