@extends('layouts.app')

@section('content')
    <div class="hero">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-lg-5">
                    <div class="intro-excerpt">
                        <h1>Modern Interior <span clsas="d-block">Design Studio</span></h1>
                        <p class="mb-4">Donec vitae odio quis nisl dapibus malesuada. Nullam ac aliquet velit. Aliquam
                            vulputate velit imperdiet dolor tempor tristique.</p>
                        <p><a href="" class="btn btn-secondary me-2">Shop Now</a><a href="#"
                                class="btn btn-white-outline">Explore</a></p>
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

    <div class="untree_co-section product-section before-footer-section">
        <div class="container">
            <div class="row">
                @if ($data->count() > 0)
                    @foreach ($data as $da)
                        @php
                            $img = json_decode($da->image);
                            /*   dd($img[0]); */
                        @endphp
                        <div class="col-12 col-md-4 col-lg-3 mb-5">
                            <a class="product-item" href="#">
                                <img src="{{ URL::asset($img[0]) }}" class="img-fluid product-thumbnail">
                                <h3 class="product-title">{{ $da->product_name }}</h3>
                                <strong class="product-price">
                                    {{-- status_sale --}}

                                    @if ($da->status_sale == 'on')
                                        <span class="price">
                                            {{ number_format($da->price_sale) }}
                                        </span>
                                        <span class="sale-price">
                                            ${{ number_format($da->price) }}
                                        </span>
                                    @else
                                        <span class="price">
                                            ${{ number_format($da->price) }}
                                        </span>
                                    @endif

                                </strong>

                                <span class="icon-cross">
                                    <img src="{{ URL::asset('/assets/images/cross.svg') }}" class="img-fluid">
                                </span>
                            </a>
                        </div>
                    @endforeach
                @else
                    {{--  @include('404') --}}
                    <div id="no-results" class="no-results">
                        No results found.
                    </div>
                @endif


                <!-- Start Column 1 -->

                <!-- End Column 1 -->

                {{--   <!-- Start Column 2 -->
                <div class="col-12 col-md-4 col-lg-3 mb-5">
                    <a class="product-item" href="#">
                        <img src="{{ URL::asset('/assets/images/product-1.png') }}" class="img-fluid product-thumbnail">
                        <h3 class="product-title">Nordic Chair</h3>
                        <strong class="product-price">$50.00</strong>

                        <span class="icon-cross">
                            <img src="{{ URL::asset('/assets/images/cross.svg') }}" class="img-fluid">
                        </span>
                    </a>
                </div>
                <!-- End Column 2 -->

                <!-- Start Column 3 -->
                <div class="col-12 col-md-4 col-lg-3 mb-5">
                    <a class="product-item" href="#">
                        <img src="{{ URL::asset('/assets/images/product-2.png') }}" class="img-fluid product-thumbnail">
                        <h3 class="product-title">Kruzo Aero Chair</h3>
                        <strong class="product-price">$78.00</strong>

                        <span class="icon-cross">
                            <img src="{{ URL::asset('/assets/images/cross.svg') }}" class="img-fluid">
                        </span>
                    </a>
                </div>
                <!-- End Column 3 -->

                <!-- Start Column 4 -->
                <div class="col-12 col-md-4 col-lg-3 mb-5">
                    <a class="product-item" href="#">
                        <img src="{{ URL::asset('/assets/images/product-3.png') }}" class="img-fluid product-thumbnail">
                        <h3 class="product-title">Ergonomic Chair</h3>
                        <strong class="product-price">$43.00</strong>

                        <span class="icon-cross">
                            <img src="{{ URL::asset('/assets/images/cross.svg') }}" class="img-fluid">
                        </span>
                    </a>
                </div>
                <!-- End Column 4 -->


                <!-- Start Column 1 -->
                <div class="col-12 col-md-4 col-lg-3 mb-5">
                    <a class="product-item" href="#">
                        <img src="{{ URL::asset('/assets/images/product-3.png') }}" class="img-fluid product-thumbnail">
                        <h3 class="product-title">Nordic Chair</h3>
                        <strong class="product-price">$50.00</strong>

                        <span class="icon-cross">
                            <img src="{{ URL::asset('/assets/images/cross.svg') }}" class="img-fluid">
                        </span>
                    </a>
                </div>
                <!-- End Column 1 -->

                <!-- Start Column 2 -->
                <div class="col-12 col-md-4 col-lg-3 mb-5">
                    <a class="product-item" href="#">
                        <img src="{{ URL::asset('/assets/images/product-1.png') }}" class="img-fluid product-thumbnail">
                        <h3 class="product-title">Nordic Chair</h3>
                        <strong class="product-price">$50.00</strong>

                        <span class="icon-cross">
                            <img src="{{ URL::asset('/assets/images/cross.svg') }}" class="img-fluid">
                        </span>
                    </a>
                </div>
                <!-- End Column 2 -->

                <!-- Start Column 3 -->
                <div class="col-12 col-md-4 col-lg-3 mb-5">
                    <a class="product-item" href="#">
                        <img src="{{ URL::asset('/assets/images/product-2.png') }}" class="img-fluid product-thumbnail">
                        <h3 class="product-title">Kruzo Aero Chair</h3>
                        <strong class="product-price">$78.00</strong>

                        <span class="icon-cross">
                            <img src="{{ URL::asset('/assets/images/cross.svg') }}" class="img-fluid">
                        </span>
                    </a>
                </div>
                <!-- End Column 3 -->

                <!-- Start Column 4 -->
                <div class="col-12 col-md-4 col-lg-3 mb-5">
                    <a class="product-item" href="#">
                        <img src="{{ URL::asset('/assets/images/product-3.png') }}" class="img-fluid product-thumbnail">
                        <h3 class="product-title">Ergonomic Chair</h3>
                        <strong class="product-price">$43.00</strong>

                        <span class="icon-cross">
                            <img src="{{ URL::asset('/assets/images/cross.svg') }}" class="img-fluid">
                        </span>
                    </a>
                </div> --}}
                <!-- End Column 4 -->

            </div>
        </div>
    </div>
@endsection
