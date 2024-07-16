@extends('layouts.app')

@section('content')
    <div class="why-choose-section">
        <div class="container">
            <div class="row justify-content-between align-items-center">
                <div class="col-lg-5 ms-md-mb-3">
                    <div class="img-wrap">
                        <img src="{{ URL::asset('/assets/images/why-choose-us-img.jpg') }}" alt="Image" class="img-fluid">
                    </div>
                </div>
                <div class="col-lg-6">
                    <h2 class="section-title-name">{{ $data[0]->product_name }}</h2>

                    <strong class="product-price">
                        {{-- status_sale --}}

                        @if ($data[0]->status_sale == 'on')
                            <span class="price price-size">
                                ${{ number_format($data[0]->price_sale) }}
                            </span>
                            <span class="sale-price price-size">
                                ${{ number_format($data[0]->price) }}
                            </span>
                        @else
                            <span class="price price-size">
                                ${{ number_format($data[0]->price) }}
                            </span>
                        @endif

                    </strong>


                    <div class="row my-5">
                        <div class="col-1 col-md-1">
                            <div class="feature">
                                <div>
                                    <a href="https://line.me/ti/p/~@projectorsiam" target="_blank">
                                        <img src="https://mallika.co.th/wp-content/uploads/2020/05/line-at-logo-png-8.png"
                                            alt="LINE Logo" width="35">
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-1 col-md-1">
                            <div class="feature">
                                <div>
                                    <a href="https://line.me/R/ti/p/@evd5610u" target="_blank">
                                        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/4/41/LINE_logo.svg/1200px-LINE_logo.svg.png"
                                            alt="LINE Logo" width="35">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>



            </div>
        </div>
    </div>



    <div class="col-lg-7 mx-auto text-center">
        <h2 class="section-title">สินค้าที่เกี่ยวข้อง</h2>
    </div>
    <div class="carousel-slide-box">

        <div id="carouselExample" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                @php
                    $chunks = $dataSlid->chunk(3); // ใช้ chunk() เพื่อแบ่ง Collection เป็นกลุ่มของ 3 รายการต่อสไลด์
                @endphp
                @foreach ($chunks as $index => $chunk)
                    <div class="carousel-item {{ $index === 0 ? 'active' : '' }}">
                        <div class="row">
                            @foreach ($chunk as $sild)
                                @php
                                    $images = json_decode($sild->image);
                                    $firstImage = isset($images[0]) ? $images[0] : null;
                                @endphp
                                <div class="col-md-4">
                                    <a
                                        href="{{ route('particulars', ['name' => $sild->product_name, 'id' => $sild->id]) }}">
                                        <img src="{{ URL::asset($firstImage) }}" width="200px" height="150px"
                                            alt="...">
                                    </a>


                                </div>
                            @endforeach
                        </div>
                    </div>
                @endforeach
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true">
                    <span class="fa fa-chevron-left"></span>
                </span>
                {{--  <span class="visually-hidden">Previous</span> --}}
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true">
                    <span class="fa fa-chevron-right"></span>
                </span>
                {{--    <span class="visually-hidden">Next</span> --}}
            </button>
        </div>
    </div>
@endsection