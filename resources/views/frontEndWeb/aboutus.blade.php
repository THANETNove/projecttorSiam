@extends('layouts.app')

@section('content')
    <div class="hero">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-lg-5">
                    <div class="intro-excerpt">
                        <h1>About Us</h1>
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
                        บริษัท สยาม เอ็มพี เทคโนโลยี จำกัด
                        <br>
                        Siam MP Technology Co.,Ltd.
                        <br>
                        92/48 ถนนจตุโชติ แขวงออเงิน เขตสายไหม กรุงเทพมหานคร 10220
                        <br>
                        92/48 Chatuchot Road, O Ngoen, Sai Mai,
                        <br>
                        ศูนย์จำหน่ายเครื่องโปรเจคเตอร์ จอรับภาพ projector LED Displays ระบบภาพและเสียง
                        และมีบริการติดตั้งงานระบบ ด้วยช่างคุณภาพ ราคาพิเศษ และถูกกว่าแน่นอน
                        <br>
                        <a href="mailto:siammp@hotmail.co.th">Email:: siammp@hotmail.co.th</a>
                        <br>
                        <span class="telColor">
                            Tel
                        </span>
                        <a href="tel:+6621587588">02-158-7588</a>
                        <br>
                        <span class="telColor">
                            Fax
                        </span>
                        <a href="fax:+6621587589">02-158-7589</a>
                        <br>
                        :::::Hotline:::::
                        <br>
                        <i class="fa fa-phone mr-3" aria-hidden="true"></i>
                        <a href="tel:+66930280088">093-028-0088</a>
                        <br>
                        <i class="fa fa-phone mr-3" aria-hidden="true"></i>
                        <a href="tel:+66930280066">093-028-0066</a>
                        <br>
                        <i class="fa fa-phone mr-3" aria-hidden="true"></i>
                        <a href="tel:+66930280044">093-028-0044</a>
                    </p>


                    {{--  <li><a href="https://line.me/ti/p/~@projectorsiam" target="_blank">
                        <img src="https://mallika.co.th/wp-content/uploads/2020/05/line-at-logo-png-8.png"
                            alt="LINE Logo" width="25">
                    </a></li> --}}
                    {{--     <li><a href="https://line.me/R/ti/p/@evd5610u" target="_blank">
                        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/4/41/LINE_logo.svg/1200px-LINE_logo.svg.png"
                            alt="LINE Logo" width="25">
                    </a></li> --}}
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
