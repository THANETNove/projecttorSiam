<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    @include('layouts.head')


    <!-- Fonts and icons -->
    <script src="{{ URL::asset('/assetsAdmin/js/plugin/webfont/webfont.min.js') }}"></script>
    <script src="https://cdn.ckeditor.com/4.16.2/standard/ckeditor.js"></script>
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
                urls: ["{{ URL::asset('/assetsAdmin/css/fonts.min.css') }}"]
            },
            active: function() {
                sessionStorage.fonts = true;
            },
        });
    </script>

    <!-- CSS Files -->
    <link rel="stylesheet" href="{{ URL::asset('/assetsAdmin/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ URL::asset('/assetsAdmin/css/plugins.min.css') }}" />
    <link rel="stylesheet" href="{{ URL::asset('/assetsAdmin/css/kaiadmin.css') }}" />

    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link rel="stylesheet" href="{{ URL::asset('/assetsAdmin/css/demo.css') }}" />
    <!-- Lightbox CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/css/lightbox.min.css" rel="stylesheet">
    <!-- Lightbox JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/js/lightbox.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>





</head>

<body>


    <div class="wrapper">
        @include('layouts.sidebarAdmin')

        <div class="main-panel">

            @include('layouts.navbarAdmin')

            @yield('content')
            @include('layouts.footerAdmin')
        </div>
    </div>

    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    ...
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>


    <!-- HTML ของภาพใน Modal -->
    <div class="modal fade" id="imageModal" tabindex="-1" role="dialog" aria-labelledby="imageModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-body text-center">
                    <img src="" class="modal-image img-fluid">
                </div>
            </div>
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
    <script src="{{ URL::asset('/assetsAdmin/js/kaiadmin.js') }}"></script>

    <!-- javascript JS -->
    <script src="{{ URL::asset('/assetsAdmin/js/javascript.js') }}"></script>




</body>

</html>
