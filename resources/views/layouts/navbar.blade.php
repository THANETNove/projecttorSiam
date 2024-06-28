<nav class="custom-navbar navbar navbar navbar-expand-md navbar-dark bg-dark" arial-label="Furni navigation bar">

    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">
            <img src="{{ URL::asset('/assets/images/cover/1.jpg') }}" class="imageLogo">
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsFurni"
            aria-controls="navbarsFurni" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarsFurni">
            <ul class="custom-navbar-nav navbar-nav ms-auto mb-2 mb-md-0">
                <li class="nav-item @if (Request::is('/')) active @endif">
                    <a class="nav-link" href="{{ url('/') }}">Home</a>
                </li>
                {{--    <li class="nav-item @if (Request::is('shop')) active @endif">
                    <a class="nav-link" href="{{ url('shop') }}">Shop</a>
                </li> --}}
                <li class="nav-item dropdown @if (Request::is('shop/*')) active @endif">
                    <a class="nav-link dropdown-toggle" href="#" id="policyDropdown" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        Projector
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="policyDropdown">
                        <!-- เริ่มต้น row -->
                        <div class="row">
                            <!-- คอลัมน์แรก -->
                            <div class="col-4">
                                <li><a class="nav-link" href="{{ url('shop/privacy') }}">Privacy Policy</a></li>
                                <li><a class="nav-link" href="{{ url('shop/terms') }}">Terms of Service</a></li>
                                <li><a class="nav-link" href="{{ url('shop/cookie') }}">Cookie Policy</a></li>
                                <li><a class="nav-link" href="{{ url('shop/security') }}">Security Policy</a></li>
                                <li><a class="nav-link" href="{{ url('shop/accessibility') }}">Accessibility</a>
                                </li>
                            </div>
                            <!-- คอลัมน์ที่สอง -->
                            <div class="col-4">
                                <li><a class="nav-link" href="{{ url('shop/returns') }}">Returns Policy</a></li>
                                <li><a class="nav-link" href="{{ url('shop/shipping') }}">Shipping Policy</a></li>
                                <li><a class="nav-link" href="{{ url('shop/support') }}">Support</a></li>
                                <li><a class="nav-link" href="{{ url('shop/contact') }}">Contact Us</a></li>
                                <li><a class="nav-link" href="{{ url('shop/faq') }}">FAQ</a></li>
                            </div>
                            <!-- คอลัมน์ที่สอง -->
                            <div class="col-4">
                                <li><a class="nav-link" href="{{ url('shop/returns') }}">Returns Policy</a></li>
                                <li><a class="nav-link" href="{{ url('shop/shipping') }}">Shipping Policy</a></li>
                                <li><a class="nav-link" href="{{ url('shop/support') }}">Support</a></li>
                                <li><a class="nav-link" href="{{ url('shop/contact') }}">Contact Us</a></li>
                                <li><a class="nav-link" href="{{ url('shop/faq') }}">FAQ</a></li>
                            </div>
                        </div>
                    </ul>
                </li>
                <li class="nav-item dropdown @if (Request::is('shop/*')) active @endif">
                    <a class="nav-link dropdown-toggle" href="#" id="policyDropdown" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        screen
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="policyDropdown">
                        <!-- เริ่มต้น row -->
                        <div class="row">
                            <!-- คอลัมน์แรก -->
                            <div class="col-4">
                                <li><a class="nav-link" href="{{ url('shop/privacy') }}">Privacy Policy</a></li>
                                <li><a class="nav-link" href="{{ url('shop/terms') }}">Terms of Service</a></li>
                                <li><a class="nav-link" href="{{ url('shop/cookie') }}">Cookie Policy</a></li>
                                <li><a class="nav-link" href="{{ url('shop/security') }}">Security Policy</a></li>
                                <li><a class="nav-link" href="{{ url('shop/accessibility') }}">Accessibility</a>
                                </li>
                            </div>
                            <!-- คอลัมน์ที่สอง -->
                            <div class="col-4">
                                <li><a class="nav-link" href="{{ url('shop/returns') }}">Returns Policy</a></li>
                                <li><a class="nav-link" href="{{ url('shop/shipping') }}">Shipping Policy</a></li>
                                <li><a class="nav-link" href="{{ url('shop/support') }}">Support</a></li>
                                <li><a class="nav-link" href="{{ url('shop/contact') }}">Contact Us</a></li>
                                <li><a class="nav-link" href="{{ url('shop/faq') }}">FAQ</a></li>
                            </div>
                            <!-- คอลัมน์ที่สอง -->
                            <div class="col-4">
                                <li><a class="nav-link" href="{{ url('shop/returns') }}">Returns Policy</a></li>
                                <li><a class="nav-link" href="{{ url('shop/shipping') }}">Shipping Policy</a></li>
                                <li><a class="nav-link" href="{{ url('shop/support') }}">Support</a></li>
                                <li><a class="nav-link" href="{{ url('shop/contact') }}">Contact Us</a></li>
                                <li><a class="nav-link" href="{{ url('shop/faq') }}">FAQ</a></li>
                            </div>
                        </div>
                    </ul>
                </li>
                <li class="nav-item dropdown @if (Request::is('displays/*')) active @endif">
                    <a class="nav-link dropdown-toggle" href="#" id="policyDropdown" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        Displays
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="displaysDropdown">
                        <li><a class="nav-link" href="{{ url('displays/privacy') }}">Privacy Policy</a></li>
                        <li><a class="nav-link" href="{{ url('displays/terms') }}">Terms of Service</a></li>
                        <li><a class="nav-link" href="{{ url('displays/cookie') }}">Cookie Policy</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown @if (Request::is('pages/*')) active @endif">
                    <a class="nav-link dropdown-toggle" href="#" id="policyDropdown" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        PAGES
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="pagesDropdown">
                        <li><a class="nav-link" href="{{ url('pages/privacy') }}">Privacy Policy</a></li>
                        <li><a class="nav-link" href="{{ url('pages/terms') }}">Terms of Service</a></li>
                        <li><a class="nav-link" href="{{ url('pages/cookie') }}">Cookie Policy</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown @if (Request::is('services/*')) active @endif">
                    <a class="nav-link dropdown-toggle" href="#" id="policyDropdown" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        Services
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="servicesDropdown">
                        <li><a class="nav-link" href="{{ url('services/aboutus') }}">About us</a></li>
                        <li><a class="nav-link" href="{{ url('services/services') }}">Services</a></li>

                    </ul>
                </li>

            </ul>

            <ul class="custom-navbar-nav navbar-nav">
                <li class="nav-item dropdown @if (Request::is('user/*')) active @endif">
                    <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        <img src="{{ URL::asset('/assets/images/user.svg') }}" alt="User Icon">
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="userDropdown">
                        @if (auth()->check() && auth()->user())
                            <li><a class="nav-link" href="#"> {{ Auth::user()->fname }}</a></li>
                        @else
                            <li> <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a></li>
                            <li> <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a></li>
                        @endif



                        @if (auth()->check() && auth()->user())
                            <li>
                                <a class="nav-link" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                    class="d-none">
                                    @csrf
                                </form>
                            </li>
                        @endif
                    </ul>
                </li>

                {{-- 
                <li><a class="nav-link" href="#"><img src="{{ URL::asset('/assets/images/cart.svg') }}">
                        <span class="cartUser">5</span>
                    </a>

                </li> --}}
            </ul>
        </div>
    </div>

</nav>
