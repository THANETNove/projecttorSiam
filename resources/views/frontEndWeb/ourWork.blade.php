@extends('layouts.app')

@section('content')
    @include('frontEndWeb.slideHomes')



    <div class="untree_co-section product-section before-footer-section">
        <div class="container">
            <div class="row justify-content-cente">
                <!-- เนื้อหาหลักของผลิตภัณฑ์ -->
                <div class="col-lg-9">
                    <div class="row">
                        <h2 class="section-title">ผลงานของเรา</h2>
                        @foreach ($data as $da)
                            {!! $da->description !!}
                        @endforeach
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
