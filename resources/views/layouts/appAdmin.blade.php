<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    @include('layouts.head')


    <!-- Fonts and icons -->
    <script src="{{ URL::asset('/assetsAdmin/js/plugin/webfont/webfont.min.js') }}"></script>
    <script>
        WebFont.load({
            google: {
                families: ["Public Sans:300,400,500,600,700"]
            },
            custom: {
                families: [
                    "Font Awesome 5 Solid",
                    "Font Awesome 5 Regular",
                    "Font Awesome 5 Brands",
                    "simple-line-icons",
                ],
                urls: ["assetsAdmin/css/fonts.min.css"],
            },
            active: function() {
                sessionStorage.fonts = true;
            },
        });
    </script>

    <!-- CSS Files -->
    <link rel="stylesheet" href="{{ URL::asset('/assetsAdmin/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ URL::asset('/assetsAdmin/css/plugins.min.css') }}" />
    <link rel="stylesheet" href="{{ URL::asset('/assetsAdmin/css/kaiadmin.min.css') }}" />

    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link rel="stylesheet" href="{{ URL::asset('/assetsAdmin/css/demo.css') }}" />


</head>

<body>
    <div id="app">

        <div class="wrapper">
            @include('layouts.sidebarAdmin')

            @yield('content')

        </div>

    </div>


    <!--   Core JS Files   -->
    <script src="{{ URL::asset('/assetsAdmin/js/core/jquery-3.7.1.min.js') }}"></script>
    <script src="{{ URL::asset('/assetsAdmin/js/core/popper.min.js') }}"></script>
    <script src="{{ URL::asset('/assetsAdmin/js/core/bootstrap.min.js') }}"></script>

    <!-- jQuery Scrollbar -->
    <script src="{{ URL::asset('/assetsAdmin/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js') }}"></script>

    <!-- Chart JS -->
    <script src="{{ URL::asset('/assetsAdmin/js/plugin/chart.js/chart.min.js') }}"></script>

    <!-- jQuery Sparkline -->
    <script src="{{ URL::asset('/assetsAdmin/js/plugin/jquery.sparkline/jquery.sparkline.min.js') }}"></script>

    <!-- Chart Circle -->
    <script src="{{ URL::asset('/assetsAdmin/js/plugin/chart-circle/circles.min.js') }}"></script>

    <!-- Datatables -->
    <script src="{{ URL::asset('/assetsAdmin/js/plugin/datatables/datatables.min.js') }}"></script>

    <!-- Bootstrap Notify -->
    <script src="{{ URL::asset('/assetsAdmin/js/plugin/bootstrap-notify/bootstrap-notify.min.js') }}"></script>

    <!-- jQuery Vector Maps -->
    <script src="{{ URL::asset('/assetsAdmin/js/plugin/jsvectormap/jsvectormap.min.js') }}"></script>
    <script src="{{ URL::asset('/assetsAdmin/js/plugin/jsvectormap/world.js') }}"></script>

    <!-- Sweet Alert -->
    <script src="{{ URL::asset('/assetsAdmin/js/plugin/sweetalert/sweetalert.min.js') }}"></script>

    <!-- Kaiadmin JS -->
    <script src="{{ URL::asset('/assetsAdmin/js/kaiadmin.min.js') }}"></script>

    <!-- Kaiadmin DEMO methods, don't include it in your project! -->
    <script src="{{ URL::asset('/assetsAdmin/js/setting-demo.js') }}"></script>
    <script src="{{ URL::asset('/assetsAdmin/js/demo.js') }}"></script>
    <script>
        $("#lineChart").sparkline([102, 109, 120, 99, 110, 105, 115], {
            type: "line",
            height: "70",
            width: "100%",
            lineWidth: "2",
            lineColor: "#177dff",
            fillColor: "rgba(23, 125, 255, 0.14)",
        });

        $("#lineChart2").sparkline([99, 125, 122, 105, 110, 124, 115], {
            type: "line",
            height: "70",
            width: "100%",
            lineWidth: "2",
            lineColor: "#f3545d",
            fillColor: "rgba(243, 84, 93, .14)",
        });

        $("#lineChart3").sparkline([105, 103, 123, 100, 95, 105, 115], {
            type: "line",
            height: "70",
            width: "100%",
            lineWidth: "2",
            lineColor: "#ffa534",
            fillColor: "rgba(255, 165, 52, .14)",
        });
    </script>
</body>

</html>
