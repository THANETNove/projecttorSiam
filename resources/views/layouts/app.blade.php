<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    @include('layouts.head')

    <!-- Bootstrap CSS -->
    <link href="{{ URL::asset('/assets/css/bootstrap.css') }}" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link href="{{ URL::asset('/assets/css/tiny-slider.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('/assets/css/style.css') }}" rel="stylesheet">


</head>

<body>
    <div id="app">
        <!-- Start Header/Navigation -->
        @include('layouts.navbar')

        <main>
            @yield('content')
        </main>
        @include('layouts.footer')

    </div>


    <script src="{{ URL::asset('/assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ URL::asset('/assets/js/tiny-slider.js') }}"></script>
    <script src="{{ URL::asset('/assets/js/custom.js') }}"></script>
</body>

</html>
