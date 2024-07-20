@extends('layouts.app')

@section('content')
    <div class="why-choose-section">
        <div class="container">
            <div class="row justify-content-between ">

                @php
                    $img = json_decode($data[0]->image);
                @endphp
                <div class="col-lg-5 ms-md-mb-3">
                    <div class="img-wrap">
                        <img src="{{ URL::asset($img[0]) }}" alt="Image" class="img-fluid" id="product-image">
                    </div>

                    @if ($data[0]->image)
                        <div style="margin-top: 24px; margin-bottom: 24px">
                            @foreach ($img as $imageUrl)
                                <img src="{{ URL::asset($imageUrl) }}" alt="Product Image"
                                    class="cursor-pointer img-cursor product-image-sm" style="width: 100px; height: auto;">
                            @endforeach
                        </div>
                    @endif

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
                    <p>Inc. Tax :
                        @if ($data[0]->status_sale == 'on')
                            <span class="price">
                                ${{ number_format($data[0]->price_sale) }}
                            </span>
                        @else
                            <span class="price">
                                ${{ number_format($data[0]->price) }}
                            </span>
                        @endif
                    </p>
                    <p>Availability: {{ $data[0]->availability }}</p>
                    <p>Brand: <a href="#" class="price">{{ $data[0]->brand }}</a> </p>
                    <p>Product Code: {{ $data[0]->product_code }}</p>
                    @if ($data[0]->catalog)
                        <?php
                        $path = $data[0]->catalog;
                        $filename = basename($path);
                        ?>
                        <p>Download Catalog:
                            <a href="{{ URL::asset($path) }}" target="_blank" class="color-link">{{ $filename }}</a>
                        </p>
                    @endif
                    <br>
                    @if ($data[0]->link_lazada)
                        <p>Lazada Link: <a href="{{ URL::asset($data[0]->link_lazada) }}" target="_blank"
                                class="color-link">Lazada</a> </p>
                    @endif
                    @if ($data[0]->link_shopee)
                        <p>Shopee Link: <a href="{{ URL::asset($data[0]->link_shopee) }}" target="_blank"
                                class="color-link">Shopee</a></p>
                    @endif
                    @if ($data[0]->other_links)
                        <p>Other Links: <a href="{{ URL::asset($data[0]->other_links) }}" target="_blank"
                                class="color-link">Other</a></p>
                    @endif
                    <div class="form-group mb-3">

                        <div style="display: none">
                            @php

                                if ($data[0]->status_sale == 'on') {
                                    $price = $data[0]->price_sale;
                                } else {
                                    $price = $data[0]->price;
                                }
                            @endphp
                            <input type="text" id="cart-product-name" name="name" class="form-control"
                                value="{{ $data[0]->product_name }}" step="1" required>
                            <input type="text" id="cart-img" name="img" class="form-control"
                                value="{{ URL::asset($img[0]) }}" required>
                            <input type="text" id="cart-price" name="price" class="form-control"
                                value="{{ $price }}" step="1" required>
                            <input type="text" id="cart-brand" name="brand" class="form-control"
                                value="{{ $data[0]->brand }}" step="1" required>
                            <input type="text" id="cart-ratio_screen" name="ratio_screen" class="form-control"
                                value="{{ $data[0]->ratio_screen }}" step="1" required>
                        </div>
                        <label for="quantity">Quantity:</label>
                        <input type="number" id="quantity" name="quantity" class="form-control" value="1"
                            step="1" required>
                    </div>
                    <a class="btn btn-cart mb-3" onclick="addToCart(event,'add')">Add Cart</a>
                    <a class="btn btn-cart mb-3" onclick="addToCart(event,'buy')">Buy Now</a>

                </div>

            </div>


            <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link " id="home-tab" data-bs-toggle="tab" data-bs-target="#home-tab-pane"
                        type="button" role="tab" aria-controls="home-tab-pane"
                        aria-selected="true">DESCRIPTION</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile-tab-pane"
                        type="button" role="tab" aria-controls="profile-tab-pane"
                        aria-selected="false">SPECIFICATION</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="contact-tab" data-bs-toggle="tab"
                        data-bs-target="#contact-tab-pane" type="button" role="tab"
                        aria-controls="contact-tab-pane" aria-selected="false">SCREEN SIZE
                        CALCULATOR</button>
                </li>
            </ul>
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade " id="home-tab-pane" role="tabpanel" aria-labelledby="home-tab"
                    tabindex="0">
                    {!! $data[0]->description !!}</div>
                <div class="tab-pane fade" id="profile-tab-pane" role="tabpanel" aria-labelledby="profile-tab"
                    tabindex="0"> {!! $data[0]->specification !!}</div>
                <div class="tab-pane fade show active" id="contact-tab-pane" role="tabpanel"
                    aria-labelledby="contact-tab" tabindex="0">

                    <div class="container">
                        <div class="row">
                            <div class="col-12 col-md-4 mb-4" style="justify-content: left">
                                <p class="nav-link-p">Screen Size Width</p>
                                <p class="nav-link-p"> ขนาดภาพซ้าย-ขวา</p>


                                <input type="number" class="form-control mt-3" id="exampleFormControlInput1"
                                    min="0" oninput="calculateDistance()" placeholder="ขนาด ซ้าย-ขวา m">

                            </div>
                            <div class="col-12 col-md-4 mb-4">
                                <p class="nav-link-screen">Ratio screen <span
                                        id="ratio-screen">{{ $data[0]->ratio_screen }}</span></p>
                                <hr>
                                <p class="nav-link-screen">throw ratio min <span
                                        id="ratio-min">{{ $data[0]->throw_ratio_min }}</span>
                                </p>
                                <hr>
                                <p class="nav-link-screen">throw ratio max <span
                                        id="ratio-max">{{ $data[0]->throw_ratio_max }}</span>
                                </p>
                                <hr>
                                <p class="nav-link-screen">ระยะห่างจากเครื่องถึงจอ </p>
                                <p class="nav-link-screen" id="distance-16-9">
                                </p>
                            </div>
                            <div class="col-12 col-md-4">
                                <div class="box-screen">
                                    <p class="screen-text-center" id="screen-text-center"></p>
                                    <p class="screen-text-right" id="screen-text-right"></p>
                                    <p class="screen-text-bottom" id="screen-text-bottom"></p>
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
