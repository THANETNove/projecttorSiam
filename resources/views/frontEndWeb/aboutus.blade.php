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
                        <img src="{{ URL::asset('/assets/images/cover/w11000h.jpg') }}" class="img-fluid">
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
@endsection
