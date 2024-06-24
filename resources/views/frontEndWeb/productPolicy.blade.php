@extends('layouts.app')

@section('content')
    <div class="hero">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-lg-5">
                    <div class="intro-excerpt">
                        <h1>นโยบายการรับประกันสินค้า</h1>
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
            <div class="row justify-content-between align-items-center">
                <div class="col-lg-6">
                    <h2 class="section-title">projecttorSiam</h2>
                    <p>
                        <span class="colorTextBold"> เมื่อท่านได้รับสินค้าที่สั่งซื้อไปแล้ว
                            กรุณารักษาสภาพสินค้าให้อยู่ในสภาพเดิมมากที่สุด
                            ทั้งตัวสินค้าและแพ็คเกจในช่วงระยะของการเปลี่ยนคืนตัวใหม่</span>

                        <br>

                        <span class="colorTextBold"> ทางบริษัทฯ</span>
                        เป็นเพียงตัวแทนจัดจำหน่ายสินค้า
                        มิใช่ผู้ผลิตสินค้าโดยตรง
                        จำเป็นต้องดำเนินการรับฝากเคลมและส่งคืนสินค้าภายใต้เงื่อนไขที่ผู้ผลิตกำหนดมาอย่างเคร่งครัด
                        จึงใคร่ขอความร่วมมือกับลูกค้าทุกท่านโปรดศึกษาเงื่อนไขการรับประกันให้ชัดเจนก่อนการตัดสินใจและโปรดปฎิบัติตามเงื่อนไข
                        เพื่อผลประโยชน์ของท่านเอง
                        ทางจะบริษัทฯไม่ขอรับผิดชอบใดๆอันเกิดจากการผิดเงื่อนไขการรับประกันที่เกิดจากลูกค้าในทุกกรณี
                        และหากมีการเปลี่ยนแปลงข้อมูล/เพิ่มเติม เงื่อนไขการรับประกันที่ผู้ผลิตได้แจ้งมาในภายหลัง ทางบริษัทฯ
                        ขอดำเนินงานให้เป็นไปตามเงื่อนไขโดยไม่ต้องแจ้งให้ทราบล่วงหน้า
                        <br>
                        <span class="colorTextBold"> ทางบริษัทฯ</span>
                        ไม่รับเปลี่ยนหรือรับคืนสินค้าที่สั่งซื้อไปแล้วอันเนื่องจากการความผิดพลาดในการสั่งซื้อของลูกค้าทุกกรณีหรือเกิดจากความไม่พึงพอใจในสินค้า
                        หรือสินค้าไม่มีอาการเสีย/มีความผิดปกติใดๆที่มาจากการผลิต ตามเงื่อนไขการรับประกันที่ระบุไว้
                        รวมถึงไม่รับคืน/เปลี่ยนสินค้าที่ไม่อยู่ในระยะเวลารับประกัน
                        <br>

                        <span class="colorTextBold"> ทางบริษัทฯ</span>
                        จะไม่รับเปลี่ยนหรือคืนสินค้า หากเกิดสภาพผิดปกติ เช่น
                        เกิดรอยขีดเขียนเปรอะเปื้อน
                        ที่ไม่อาจลบได้ หรือ รอยขีดข่วน, ถลอก, แตกหัก, บิ่น, ร้าว, ยุบ และความผิดปกติใดๆที่ไม่ได้ระบุไว้นี้
                        แต่ถือเป็นความผิดปกติตามเงื่อนไขที่ผู้ผลิตกำหนด หรือสินค้าประเภทสิ้นเปลืองถูกแกะใช้
                        (ทั้งที่ตัวสินค้าและแพ็คเกจสินค้า) อุปกรณ์เสริมเสีย เช่น สาย USB , สายชาร์ท ,หูฟัง
                        และอุปกรณ์อื่นๆที่ไม่ได้ระบุ เป็นต้น (กรุณาสอบสอบถามเจ้าหน้าที่ก่อนหากไม่แน่ใจ) บริษัทฯ
                        รับประกันเปลี่ยนอุปกรณ์ให้ใหม่กรณีอยู่ในระยะเวลา 15 วัน (รวมระยะเวลาจัดส่งไป-ส่งกลับมา
                        นับจากวันที่ที่ระบุในบิลใบสร็จการสั่งซื้อเป็นวันแรก) โดยท่านต้องส่งคืนพร้อมสินค้า กล่อง
                        และอุปกรณ์อื่นๆ ครบชุด และอยู่ในสภาพพร้อมขาย หากหลังจาก 15 วันไปแล้ว ไม่รับประกันเปลี่ยนทุกกรณี
                        <br>


                        <span class="colorTextBold">การรับประกันแบ่งเป็น 2 กรณี ดังนี้</span>
                        <br>
                        <span class="colorTextBold">กรณีเคลมเปลี่ยนตัวใหม่</span>
                        <br>


                        ต้องเป็นสินค้าที่สั่งซื้อไปไม่เกิน 15 วัน (รวมระยะเวลาจัดส่งไป-ส่งกลับมา
                        เริ่มนับจากวันที่ที่ระบุในบิลใบเสร็จการสั่งซื้อเป็นวันแรก)
                        และต้องเป็นสินค้าที่ไม่ผิดเงื่อนไขการรับประกัน ทางบริษัทฯ ยินดีเปลี่ยนตัวใหม่ให้ทันที
                        ใช้ระยะเวลาดำเนินการเปลี่ยนส่งคืนภายใน 7-10 วันทำการ **ยกเว้นอุปกรณ์ต่อพ่วง
                        <br>
                        <span class="colorTextBold">กรณีเคลมปกติ</span>

                        <br>


                        ได้แก่สินค้าที่สั่งซื้อไปเกิน15วันแล้ว (รวมระยะเวลาจัดส่งไป-ส่งกลับมา
                        นับจากวันที่ในใบเสร็จการสั่งซื้อเป็นวันแรก)
                        ทางบริษัทฯจะต้องนำสินค้าส่งไปที่ผู้ผลิตเพื่อตรวจสอบปัญหาของสินค้าและดำเนินการรับเคลม
                        ในการเคลมซ่อมหรือเปลี่ยนส่งคืนลูกค้าจะขึ้นอยู่กับดุลยพินิจของผู้ผลิต ทางบริษัทฯ
                        เป็นเพียงตัวแทนในการฝากส่งเคลมไปยังศูนย์บริการเท่านั้น มิได้เป็นผู้ดำเนินการซ่อมหรือเปลี่ยนเองใดๆ
                        ใช้ระยะเวลาการดำเนินการเคลมประมาณ 20-45 วันทำการ

                        <br>


                        กรณีสินค้าภายใน 15 วัน (รวมระยะเวลาจัดส่ง เริ่มนับระยะประกันจากวันที่ออกใบเสร็จ)
                        <br>

                        ท่านสามารถส่งสินค้ากลับมาให้บริษัท ได้ที่
                        <br>

                        บริษัท สยาม เอ็มพี เทคโนโลยี จำกัด
                        <br>

                        92/48 ถนนจตุโชติ แขวงออเงิน เขตสายไหม กรุงเทพมหานคร 10220
                        <br>

                        โทร. <a href="tel:+6621587588">02-158-7588</a> โทรสาร. <a href="fax:+6621587589">02-158-7589</a>


                    </p>
                </div>

                <div class="col-lg-5">
                    <div class="img-wrap">
                        <img src="{{ URL::asset('/assets/images/why-choose-us-img.jpg') }}" alt="Image"
                            class="img-fluid">
                    </div>
                </div>

            </div>
        </div>
    </div>




    <div class="testimonial-section before-footer-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 mx-auto text-center">
                    <h2 class="section-title">Testimonials</h2>
                </div>
            </div>

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
                            <div class="tns-nav" aria-label="Carousel Pagination"><button data-nav="0"
                                    aria-controls="tns1" style="" aria-label="Carousel Page 1 (Current Slide)"
                                    class="tns-nav-active"></button><button data-nav="1" aria-controls="tns1"
                                    style="" aria-label="Carousel Page 2" class=""
                                    tabindex="-1"></button><button data-nav="2" aria-controls="tns1" style=""
                                    aria-label="Carousel Page 3" class="" tabindex="-1"></button></div>
                            <div class="tns-liveregion tns-visually-hidden" aria-live="polite" aria-atomic="true">slide
                                <span class="current">5</span> of 3
                            </div>
                            <div id="tns1-mw" class="tns-ovh">
                                <div class="tns-inner" id="tns1-iw">
                                    <div class="testimonial-slider  tns-slider tns-carousel tns-subpixel tns-calc tns-horizontal"
                                        id="tns1" style="transform: translate3d(-80%, 0px, 0px);">
                                        <div class="item tns-item" aria-hidden="true" tabindex="-1">
                                            <div class="row justify-content-center">
                                                <div class="col-lg-8 mx-auto">

                                                    <div class="testimonial-block text-center">
                                                        <blockquote class="mb-5">
                                                            <p>“Donec facilisis quam ut purus rutrum lobortis. Donec vitae
                                                                odio quis nisl dapibus malesuada. Nullam ac aliquet velit.
                                                                Aliquam vulputate velit imperdiet dolor tempor tristique.
                                                                Pellentesque habitant morbi tristique senectus et netus et
                                                                malesuada fames ac turpis egestas. Integer convallis
                                                                volutpat dui quis scelerisque.”</p>
                                                        </blockquote>

                                                        <div class="author-info">
                                                            <div class="author-pic">
                                                                <img src="{{ URL::asset('/assets/images/person-1.png') }}"
                                                                    alt="Maria Jones" class="img-fluid">
                                                            </div>
                                                            <h3 class="font-weight-bold">Maria Jones</h3>
                                                            <span class="position d-block mb-3">CEO, Co-Founder, XYZ
                                                                Inc.</span>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>

                                        <div class="item tns-item" id="tns1-item0" aria-hidden="true" tabindex="-1">
                                            <div class="row justify-content-center">
                                                <div class="col-lg-8 mx-auto">

                                                    <div class="testimonial-block text-center">
                                                        <blockquote class="mb-5">
                                                            <p>“Donec facilisis quam ut purus rutrum lobortis. Donec vitae
                                                                odio quis nisl dapibus malesuada. Nullam ac aliquet velit.
                                                                Aliquam vulputate velit imperdiet dolor tempor tristique.
                                                                Pellentesque habitant morbi tristique senectus et netus et
                                                                malesuada fames ac turpis egestas. Integer convallis
                                                                volutpat dui quis scelerisque.”</p>
                                                        </blockquote>

                                                        <div class="author-info">
                                                            <div class="author-pic">
                                                                <img src="{{ URL::asset('/assets/images/person-1.png') }}"
                                                                    alt="Maria Jones" class="img-fluid">
                                                            </div>
                                                            <h3 class="font-weight-bold">Maria Jones</h3>
                                                            <span class="position d-block mb-3">CEO, Co-Founder, XYZ
                                                                Inc.</span>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                        <!-- END item -->

                                        <div class="item tns-item" id="tns1-item1" aria-hidden="true" tabindex="-1">
                                            <div class="row justify-content-center">
                                                <div class="col-lg-8 mx-auto">

                                                    <div class="testimonial-block text-center">
                                                        <blockquote class="mb-5">
                                                            <p>“Donec facilisis quam ut purus rutrum lobortis. Donec vitae
                                                                odio quis nisl dapibus malesuada. Nullam ac aliquet velit.
                                                                Aliquam vulputate velit imperdiet dolor tempor tristique.
                                                                Pellentesque habitant morbi tristique senectus et netus et
                                                                malesuada fames ac turpis egestas. Integer convallis
                                                                volutpat dui quis scelerisque.”</p>
                                                        </blockquote>

                                                        <div class="author-info">
                                                            <div class="author-pic">
                                                                <img src="{{ URL::asset('/assets/images/person-1.png') }}"
                                                                    alt="Maria Jones" class="img-fluid">
                                                            </div>
                                                            <h3 class="font-weight-bold">Maria Jones</h3>
                                                            <span class="position d-block mb-3">CEO, Co-Founder, XYZ
                                                                Inc.</span>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                        <!-- END item -->

                                        <div class="item tns-item" id="tns1-item2" aria-hidden="true" tabindex="-1">
                                            <div class="row justify-content-center">
                                                <div class="col-lg-8 mx-auto">

                                                    <div class="testimonial-block text-center">
                                                        <blockquote class="mb-5">
                                                            <p>“Donec facilisis quam ut purus rutrum lobortis. Donec vitae
                                                                odio quis nisl dapibus malesuada. Nullam ac aliquet velit.
                                                                Aliquam vulputate velit imperdiet dolor tempor tristique.
                                                                Pellentesque habitant morbi tristique senectus et netus et
                                                                malesuada fames ac turpis egestas. Integer convallis
                                                                volutpat dui quis scelerisque.”</p>
                                                        </blockquote>

                                                        <div class="author-info">
                                                            <div class="author-pic">
                                                                <img src="{{ URL::asset('/assets/images/person-1.png') }}"
                                                                    alt="Maria Jones" class="img-fluid">
                                                            </div>
                                                            <h3 class="font-weight-bold">Maria Jones</h3>
                                                            <span class="position d-block mb-3">CEO, Co-Founder, XYZ
                                                                Inc.</span>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                        <!-- END item -->

                                        <div class="item tns-item tns-slide-active">
                                            <div class="row justify-content-center">
                                                <div class="col-lg-8 mx-auto">

                                                    <div class="testimonial-block text-center">
                                                        <blockquote class="mb-5">
                                                            <p>“Donec facilisis quam ut purus rutrum lobortis. Donec vitae
                                                                odio quis nisl dapibus malesuada. Nullam ac aliquet velit.
                                                                Aliquam vulputate velit imperdiet dolor tempor tristique.
                                                                Pellentesque habitant morbi tristique senectus et netus et
                                                                malesuada fames ac turpis egestas. Integer convallis
                                                                volutpat dui quis scelerisque.”</p>
                                                        </blockquote>

                                                        <div class="author-info">
                                                            <div class="author-pic">
                                                                <img src="{{ URL::asset('/assets/images/person-1.png') }}"
                                                                    alt="Maria Jones" class="img-fluid">
                                                            </div>
                                                            <h3 class="font-weight-bold">Maria Jones</h3>
                                                            <span class="position d-block mb-3">CEO, Co-Founder, XYZ
                                                                Inc.</span>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
