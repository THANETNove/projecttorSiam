@extends('layouts.app')

@section('content')
    {{--  <div class="hero2">

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
                        <div class="tns-nav" aria-label="Carousel Pagination"><button data-nav="0" aria-controls="tns1"
                                style="" aria-label="Carousel Page 1 (Current Slide)"
                                class="tns-nav-active"></button><button data-nav="1" aria-controls="tns1" style=""
                                aria-label="Carousel Page 2" class="" tabindex="-1"></button><button data-nav="2"
                                aria-controls="tns1" style="" aria-label="Carousel Page 3" class=""
                                tabindex="-1"></button></div>
                        <div class="tns-liveregion tns-visually-hidden" aria-live="polite" aria-atomic="true">slide
                            <span class="current">5</span> of 3
                        </div>
                        <div id="tns1-mw" class="tns-ovh">
                            <div class="tns-inner" id="tns1-iw">
                                <div class="testimonial-slider  tns-slider tns-carousel tns-subpixel tns-calc tns-horizontal"
                                    id="tns1" style="transform: translate3d(-80%, 0px, 0px);">

                                    @foreach ($imgSlide as $sildImg)
                                        <div class="item tns-item" aria-hidden="true" tabindex="-1">
                                            <div class="row justify-content-center">
                                                <div class="col-lg-12 mx-auto">

                                                    <img src="{{ URL::asset($da->slide_image) }}" class="bannerImage"
                                                        alt="Maria Jones">
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach

                                    <!-- item tns-ite  end -->
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>

    </div> --}}
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

    <!-- End Hero Section -->

    <!-- Start Product Section -->
    <div class="product-section">
        <div class="container">
            <div class="row">

                @php
                    $currentCategory = ''; // เก็บหมวดหมู่ปัจจุบัน
                @endphp

                @foreach ($products as $product)
                    @php
                        $img = json_decode($product->image);
                    @endphp

                    {{-- ตรวจสอบหมวดหมู่ปัจจุบัน --}}
                    @if ($currentCategory !== $product->category)
                        @if ($currentCategory !== '')
                            {{-- ปิดหมวดหมู่ก่อนหน้า --}}
            </div> {{-- ปิดคอนเทนเนอร์ของหมวดหมู่ก่อนหน้า --}}
            @endif

            {{-- แสดงหัวข้อหมวดหมู่ใหม่ --}}
            <div class="category-section">
                <h5 class="category-title">{{ $product->category }}</h5>
                <div class="row mb-5"> {{-- เปิดคอนเทนเนอร์ใหม่สำหรับหมวดหมู่ --}}
                    @php
                        $currentCategory = $product->category; // ตั้งค่าหมวดหมู่ปัจจุบัน
                    @endphp
                    @endif

                    <div class="col-12 col-md-4 col-lg-3 mb-4 mb-md-4">
                        <a class="product-item"
                            href="{{ route('particulars', ['name' => $product->product_name, 'id' => $product->id]) }}">
                            <div class="product-image">
                                <img src="{{ URL::asset($img[0]) }}" class="img-fluid" alt="{{ $product->product_name }}">
                            </div>
                            <div class="product-details">
                                <h3 class="product-title">{{ $product->product_name }}</h3>

                                @if ($product->status_sale == 'on')
                                    <div class="price-wrapper">
                                        <span class="price2 ">
                                            ${{ number_format($product->price_sale) }}
                                        </span>
                                        <span class="price2 original-price">
                                            ${{ number_format($product->price) }}
                                        </span>
                                    </div>
                                @else
                                    <span class="price2">
                                        ${{ number_format($product->price) }}
                                    </span>
                                @endif

                                <span class="icon-cross">
                                    <img src="{{ URL::asset('/assets/images/cross.svg') }}" class="img-fluid"
                                        alt="Remove">
                                </span>
                            </div>
                        </a>
                    </div>
                    @endforeach

                    {{-- ปิดคอนเทนเนอร์ของหมวดหมู่สุดท้าย --}}
                    @if ($currentCategory !== '')
                </div>
                @endif
            </div>
        </div>
    </div>



    <!-- Start Popular Product -->
    <div style="background-color: #ffffff">
        <div class="why-choose-section">
            <div class="container">


                <div class="row my-5">
                    <div class="col-6 col-md-6 col-lg-6 mb-6">
                        <div class="feature">
                            <div class="icon">
                                <img src="{{ URL::asset('/assets/images/truck.svg') }}" alt="Image" class="imf-fluid">
                            </div>
                            <h3>วิธีการจัดส่งสินค้า</h3>
                            <p> ProjectorSiam.com / บริษัท สยาม เอ็มพี เทคโนโลยี จำกัด ดำเนินการจัดส่งสินค้าให้ลูกค้า ฟรี
                                ทุกกรณี
                                <br>
                                <br>
                                - ระยะเวลาในการขนส่งสินค้าประมาณ 1-3 วันทำการ
                                หลังจากบริษัทได้รับหลักฐานยืนยันการชำระเงินแล้ว
                                ไม่รวมวันเสาร์-อาทิตย์ วันหยุดราชการ และวันขัตฤกษ์ (หากยังไม่ได้รับสินค้าให้ภายใน 7 วัน
                                กรุณาติดต่อกลับมาทางบริษัท)
                                <br>
                                <br>
                                - รบกวนลูกค้ารับโทรศัพท์ เนื่องจากทางบริษัทขนส่งจะติดต่อเพื่อส่งสินค้า
                                ระยะเวลาอาจคลาดเคลือนได้หากลูกค้าไม่รับโทรศัพท์หรือไม่สามารถติดต่อได้ หรือเกิดเหตุสุดวิสัย
                                เช่น
                                น้ำท่วม เกิดประท้วง รวมถึงเทศกาลต่าง ๆ
                                <br>
                                <br>
                                - การจัดส่งสินค้า มี 2 กรณี
                                <br>
                                กรณีที่ 1 จัดส่งโดยรถยนต์ของทาง บริษัท สยาม เอ็มพี เทคโนโลยี จำกัด สำหรับ กรุงเทพมหานคร
                                และปริมณฑล
                                กรณีที่ 2 จัดส่งโดยบริษัทขนส่งเอกชน เช่น Kerry NTC เชาวลิน กิตติวัตร ไอทีทรานสปอร์ต HWL DHL
                                และไปรษณีย์ไทย
                                สำหรับ กรุงเทพมหานคร ปริมณฑล และต่างจังหวัด
                            </p>
                        </div>
                    </div>

                    <div class="col-6 col-md-6 col-lg-6 mb-6">
                        <div class="feature">
                            <div class="icon">
                                <img src="{{ URL::asset('/assets/images/bag.svg') }}" alt="Image" class="imf-fluid">
                            </div>
                            <h3>วิธีการชำระเงิน</h3>
                            <table class="table">
                                <tbody>
                                    @foreach ($data as $da)
                                        <tr>
                                            <th>
                                                {{--     <img src="{{ URL::asset('/assets/images/bag.svg') }}" alt="Image"
                                                    class="imf-fluid"> --}}
                                                <img src="{{ URL::asset($da->bank_image) }}" alt="Bank Image"
                                                    style="width: 50px; height: auto;" class="imf-fluid">
                                            </th>
                                            <td>{{ $da->bank_name }}</td>
                                            <td>{{ $da->account_name }}</td>
                                            <td>{{ $da->account_number }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>



                </div>

            </div>
        </div>
    </div>
@endsection
