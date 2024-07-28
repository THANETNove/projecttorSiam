@extends('layouts.app')

@section('content')
    @include('frontEndWeb.slideHomes')



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
