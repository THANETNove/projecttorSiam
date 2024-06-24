<footer class="footer-section">
    <div class="container relative">

        <div class="sofa-img">
            <img src="{{ URL::asset('/assets/images/cover/EpsonEF-11_EF12-8.jpg') }}" alt="Image" class="img-fluid">
        </div>

        <div class="row">
            <div class="col-lg-8">
                <div class="subscription-form">
                    <h3 class="d-flex align-items-center"><span class="me-1"><img
                                src="{{ URL::asset('/assets/images/envelope-outline.svg') }}" alt="Image"
                                class="img-fluid"></span><span>Subscribe to Newsletter</span></h3>

                    <form action="#" class="row g-3">
                        <div class="col-auto">
                            <input type="text" class="form-control" placeholder="Enter your name">
                        </div>
                        <div class="col-auto">
                            <input type="email" class="form-control" placeholder="Enter your email">
                        </div>
                        <div class="col-auto">
                            <button class="btn btn-primary">
                                <span class="fa fa-paper-plane"></span>
                            </button>
                        </div>
                    </form>

                </div>
            </div>
        </div>

        <div class="row g-5 mb-5">
            <div class="col-lg-4">
                <div class="mb-4 footer-logo-wrap"><a href="#"
                        class="footer-logo">projecttorSiam<span>.</span></a>
                </div>
                <p class="mb-4 ">บริษัท สยาม เอ็มพี เทคโนโลยี จำกัด
                    <br>
                    Siam MP Technology Co.,Ltd.
                    <br>
                    92/48 ถนนจตุโชติ แขวงออเงิน เขตสายไหม กรุงเทพมหานคร 10220
                    <br>
                    92/48 Chatuchot Road, O Ngoen, Sai Mai,
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

                <ul class="list-unstyled custom-social">
                    <li><a href="https://line.me/ti/p/~@projectorsiam" target="_blank">
                            <img src="https://mallika.co.th/wp-content/uploads/2020/05/line-at-logo-png-8.png"
                                alt="LINE Logo" width="25">
                        </a></li>
                    <li><a href="https://line.me/R/ti/p/@evd5610u" target="_blank">
                            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/4/41/LINE_logo.svg/1200px-LINE_logo.svg.png"
                                alt="LINE Logo" width="25">
                        </a></li>
                </ul>


            </div>

            <div class="col-lg-8">
                <div class="row links-wrap">
                    <div class="col-6 col-sm-6 col-md-3">
                        <ul class="list-unstyled">
                            <li><a href="{{ url('aboutus') }}">About us</a></li>
                            <li><a href="{{ url('services') }}">วิธีการจัดส่งสินค้า</a></li>

                        </ul>
                    </div>

                    <div class="col-6 col-sm-6 col-md-3">
                        <ul class="list-unstyled">
                            <li><a href="{{ url('services') }}">วิธีการชำระเงิน</a></li>
                            <li><a href="{{ url('policy') }}">นโยบายการรับประกันสินค้า</a></li>

                        </ul>
                    </div>

                    <div class="col-6 col-sm-6 col-md-3">
                        <ul class="list-unstyled">
                            <li><a href="#">My Account</a></li>
                            <li><a href="#">Order History</a></li>

                        </ul>
                    </div>

                    <div class="col-6 col-sm-6 col-md-3">
                        <ul class="list-unstyled">
                            <li><a href="#">Wish List</a></li>
                            <li><a href="#">Newsletter</a></li>
                        </ul>
                    </div>
                </div>
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3101.470878086788!2d100.68140281463615!3d13.90333699029777!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMTPCsDU0JzIzLjgiTiAxMDHCsDU1JzA1LjAiRQ!5e0!3m2!1sth!2sth!4v1624422111246!5m2!1sth!2sth"
                    width="100%" height="300" style="border:0;mt-3" allowfullscreen="" loading="lazy"></iframe>
            </div>

        </div>

        <div class="border-top copyright">
            <div class="row pt-4">
                <div class="col-lg-6">
                    <p class="mb-2 text-center text-lg-start">Copyright &copy;
                        <script>
                            document.write(new Date().getFullYear());
                        </script>. All Rights Reserved. &mdash; Power By
                        Projectorsiam.com
                        <!-- License information: https://untree.co/license/ -->
                    </p>
                </div>

                <div class="col-lg-6 text-center text-lg-end">
                    <ul class="list-unstyled d-inline-flex ms-auto">
                        {{--    <li class="me-4"><a href="#">Terms &amp; Conditions</a></li> --}}
                        <li><a href="{{ url('policy') }}"> Terms &amp; Conditions &amp; Privacy Policy</a></li>

                    </ul>
                    <ul class="list-unstyled custom-social">
                        <li>
                            <img src="https://projectorsiam.com/image/catalog/payment.png" alt="LINE Logo"
                                width="250">
                        </li>

                    </ul>
                </div>

            </div>
        </div>

    </div>
</footer>
