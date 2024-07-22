@extends('layouts.app')

@section('content')
    @php
        $imgSlide = DB::table('slide_homes')->get();
    @endphp
    <div class="hero2">
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="testimonial-slider-wrap text-center">

                    <div id="testimonial-nav" aria-label="Carousel Navigation" tabindex="0">
                        <span class="prev" data-controls="prev" aria-controls="tns1" tabindex="-1"><span
                                class="fa fa-chevron-left"></span></span>
                        <span class="next" data-controls="next" aria-controls="tns1" tabindex="-1"><span
                                class="fa fa-chevron-right"></span></span>
                    </div>

                    <div class="tns-outer" id="tns1-ow">

                        <div id="tns1-mw" class="tns-ovh">
                            <div class="tns-inner" id="tns1-iw">
                                <div class="testimonial-slider  tns-slider tns-carousel tns-subpixel tns-calc tns-horizontal"
                                    id="tns1" style="transform: translate3d(-80%, 0px, 0px);">

                                    @foreach ($imgSlide as $slide)
                                        <div class="item tns-item" aria-hidden="true" tabindex="-1">
                                            <div class="row justify-content-center">
                                                <div class="col-lg-12 mx-auto">
                                                    <img src="{{ URL::asset($slide->slide_image) }}" class="bannerImage"
                                                        alt="Slide Image">
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach

                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>



    <div class="untree_co-section product-section before-footer-section">
        <div class="container">
            <div class="row">

                <!-- แถบเลือกแบรนด์ด้านซ้าย -->
                <div class="col-lg-3 mb-4 mb-lg-0">
                    <div class="brand-selector">
                        <h3 class="brand-title">เลือกแบรนด์</h3>
                        <ul class="brand-list">
                            @foreach ($brands as $bra)
                                <li><a href="{{ route('filterByBrand', ['name' => $bra->brand]) }}">{{ $bra->brand }}</a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>

                <!-- เนื้อหาหลักของผลิตภัณฑ์ -->
                <div class="col-lg-9">
                    <div class="row">
                        @if ($data->count() > 0)
                            @foreach ($data as $da)
                                @php
                                    $img = json_decode($da->image);
                                @endphp
                                <div class="col-12 col-md-4 col-lg-3 mb-5">
                                    <a class="product-item"
                                        href="{{ route('particulars', ['name' => $da->product_name, 'id' => $da->id]) }}">
                                        <img src="{{ URL::asset($img[0]) }}" class="img-fluid product-thumbnail">
                                        <h3 class="product-title">{{ $da->product_name }}</h3>
                                        <strong class="product-price">
                                            @if ($da->status_sale == 'on')
                                                <span class="price">
                                                    ${{ number_format($da->price_sale) }}
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

                            <div class="mt-5 ml-3">
                                {!! $data->links() !!}
                            </div>
                        @else
                            <div id="no-results" class="no-results">
                                No results found.
                            </div>
                        @endif
                    </div>
                </div>

            </div>
        </div>
    </div>

@endsection
