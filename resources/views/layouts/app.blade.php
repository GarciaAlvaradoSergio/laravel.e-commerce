<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <link href=" {{ asset('frontend/css/tabler.min.css') }}" rel="stylesheet">

</head>

<body>

    @include('layouts.partials.navbar')
    @include('layouts.partials.menu')

    <main class="container py-3">
        {{ $slot }}
    </main>

    @include('layouts.partials.footer')
    <script src="{{ asset('frontend/js/tabler.min.js') }}"></script>
</body>

</html>
