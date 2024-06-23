<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="Untree.co">
    <link rel="shortcut icon" href="{{ URL::asset('/assets/images/favicon.png') }}">

    <meta name="description"
        content="Discover Furni: Your go-to solution for modern interior design and premium furniture.">
    <meta name="keywords" content="Furniture, Interior Design, Modern, Shop">
    <meta property="og:title" content="Furni - Modern Interior Design & Furniture">
    <meta property="og:description"
        content="Shop the latest in modern furniture and interior design at Furni. Quality and style guaranteed.">
    <meta property="og:image" content="{{ URL::asset('/assets/images/favicon.png') }}">
    <meta property="og:url" content="https://yourwebsite.com">

    <!-- Bootstrap CSS -->
    <link href="{{ URL::asset('/assets/css/bootstrap.css') }}" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link href="{{ URL::asset('/assets/css/tiny-slider.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('/assets/css/style.css') }}" rel="stylesheet">
    <title>projecttorSiam</title>

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
