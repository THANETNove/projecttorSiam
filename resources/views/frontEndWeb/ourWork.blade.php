@extends('layouts.app')

@section('content')
    {{--     @include('frontEndWeb.slideHomes') --}}

    <div class="hero">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-lg-5">
                    <div class="intro-excerpt">
                        <h2>ผลงานของเรา</h2>
                        {{--     <p class="mb-4">Donec vitae odio quis nisl dapibus malesuada. Nullam ac aliquet velit. Aliquam
                            vulputate velit imperdiet dolor tempor tristique.</p>
                        <p><a href="" class="btn btn-secondary me-2">Shop Now</a><a href="#"
                                class="btn btn-white-outline">Explore</a></p> --}}
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="hero-img-wrap">
                        <img src="{{ URL::asset('/assets/images/cover/EpsonEF-11_EF12-5.jpg') }}" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br>

    <div class="untree_co-section product-section before-footer-section">
        <div class="container">
            <div class="row justify-content-cente">
                <!-- เนื้อหาหลักของผลิตภัณฑ์ -->
                <div class="col-lg-9">
                    <div class="row">

                        @foreach ($data as $da)
                            {!! $da->description !!}
                        @endforeach
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
