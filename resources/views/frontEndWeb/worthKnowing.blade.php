@extends('layouts.app')

@section('content')
    @include('frontEndWeb.slideHomes')



    <div class="untree_co-section product-section before-footer-section">
        <div class="container">
            <div class="row justify-content-center">
                <!-- เนื้อหาหลักของผลิตภัณฑ์ -->
                <div class="col-lg-9">
                    <div class="row">
                        <h2 class="section-title">น่ารู้ก่อนซื้อ</h2>

                        @foreach ($data as $da)
                            {!! $da->description !!}
                        @endforeach
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
