@extends('layouts.app')

@section('content')
    <div class="hero">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-lg-5">
                    <div class="intro-excerpt">
                        <h1>Services</h1>
                        <p class="mb-4">Donec vitae odio quis nisl dapibus malesuada. Nullam ac aliquet velit. Aliquam
                            vulputate velit imperdiet dolor tempor tristique.</p>
                        <p><a href="" class="btn btn-secondary me-2">Shop Now</a><a href="#"
                                class="btn btn-white-outline">Explore</a></p>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="hero-img-wrap">
                        <img src="{{ URL::asset('/assets/images/couch.png') }}" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </div>

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
                            - ระยะเวลาในการขนส่งสินค้าประมาณ 1-3 วันทำการ หลังจากบริษัทได้รับหลักฐานยืนยันการชำระเงินแล้ว
                            ไม่รวมวันเสาร์-อาทิตย์ วันหยุดราชการ และวันขัตฤกษ์ (หากยังไม่ได้รับสินค้าให้ภายใน 7 วัน
                            กรุณาติดต่อกลับมาทางบริษัท)
                            <br>
                            <br>
                            - รบกวนลูกค้ารับโทรศัพท์ เนื่องจากทางบริษัทขนส่งจะติดต่อเพื่อส่งสินค้า
                            ระยะเวลาอาจคลาดเคลือนได้หากลูกค้าไม่รับโทรศัพท์หรือไม่สามารถติดต่อได้ หรือเกิดเหตุสุดวิสัย เช่น
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

    <div class="product-section pt-0">
        <div class="container">
            <div class="row">

                <!-- Start Column 1 -->
                <div class="col-md-12 col-lg-3 mb-5 mb-lg-0">
                    <h2 class="mb-4 section-title">Crafted with excellent material.</h2>
                    <p class="mb-4">Donec vitae odio quis nisl dapibus malesuada. Nullam ac aliquet velit. Aliquam
                        vulputate velit imperdiet dolor tempor tristique. </p>
                    <p><a href="#" class="btn">Explore</a></p>
                </div>
                <!-- End Column 1 -->

                <!-- Start Column 2 -->
                <div class="col-12 col-md-4 col-lg-3 mb-5 mb-md-0">
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
                <div class="col-12 col-md-4 col-lg-3 mb-5 mb-md-0">
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
                <div class="col-12 col-md-4 col-lg-3 mb-5 mb-md-0">
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

            </div>
        </div>
    </div>
@endsection
