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
