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
                <li class="nav-item dropdown @if (Request::is('projector*')) active @endif">
                    <a class="nav-link dropdown-toggle" href="#" id="policyDropdown" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        Projector
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="policyDropdown">
                        <!-- เริ่มต้น row -->
                        <div class="row">
                            <!-- คอลัมน์แรก -->
                            <div class="col-4">
                                <li><a class="nav-link textHead" href="#">By Use</a></li>
                                <li><a class="nav-link" href="{{ url('projector/homeCinemaProjectors') }}">Home Cinema
                                        Projectors</a></li>
                                <li><a class="nav-link" href="{{ url('projector/officeProjectors') }}">Office Projectors
                                    </a></li>
                                <li><a class="nav-link" href="{{ url('projector/largeVenueProjectors') }}">Large Venue
                                        Projectors</a></li>
                                <li><a class="nav-link" href="{{ url('projector/golfSimulationProjectors') }}">Golf
                                        Simulation Projectors</a>
                                </li>
                                <li><a class="nav-link" href="{{ url('projector/gamingProjectors') }}">Gaming
                                        Projectors</a>
                                </li>
                                <li><a class="nav-link" href="{{ url('projector/outdoorProjectors') }}">Outdoor
                                        Projectors</a>
                                </li>
                                <li><a class="nav-link" href="{{ url('projector/pubandBarProjectors') }}">Pub and Bar
                                        Projectors</a>
                                </li>
                                <li><a class="nav-link" href="{{ url('projector/placeofWorshipProjectors') }}">GPlace
                                        of Worship Projectors</a>
                                </li>
                                <li><a class="nav-link" href="{{ url('projector/cameraClubProjectors') }}">Camera
                                        Club Projectors</a>
                                </li>
                            </div>
                            <!-- คอลัมน์ที่สอง -->
                            <div class="col-4">
                                <li><a class="nav-link textHead" href="#">By Feature</a></li>
                                <li><a class="nav-link" href="{{ url('projector/4KProjectors') }}">4K Projectors</a>
                                </li>
                                <li><a class="nav-link" href="{{ url('projector/1080pProjectors') }}">1080p
                                        Projectors</a></li>
                                <li><a class="nav-link" href="{{ url('projector/shortThrow') }}">Short Throw</a></li>
                                <li><a class="nav-link" href="{{ url('projector/ultraShortThrow') }}">Ultra Short
                                        Throw</a></li>
                                <li><a class="nav-link" href="{{ url('projector/laserProjectors') }}">Laser
                                        Projectors</a></li>
                                <li><a class="nav-link" href="{{ url('projector/LEDProjectors') }}">LED Projectors</a>
                                </li>
                                <li><a class="nav-link" href="{{ url('projector/DLPProjectors') }}">DLP Projectors</a>
                                </li>
                            </div>
                            <!-- คอลัมน์ที่สอง -->
                            <div class="col-4">
                                <li><a class="nav-link textHead" href="#">By Resolution</a>
                                </li>
                                <li><a class="nav-link" href="{{ url('projector/43XGA1024x768') }}">4:3 XGA
                                        (1024x768)
                                    </a></li>
                                <li><a class="nav-link" href="{{ url('projector/1610WXGA1280x800') }}">16:10 WXGA
                                        (1280x800)</a></li>
                                <li><a class="nav-link" href="{{ url('projector/1610WUXGA1920x1200') }}">16:10 WUXGA
                                        (1920x1200)</a></li>
                                <li><a class="nav-link" href="{{ url('projector/1691080P1920x1080') }}">16:9 1080P
                                        (1920x1080)</a></li>
                                <li><a class="nav-link" href="{{ url('projector/1694KUHD3840x2160') }}">16:9 4K UHD
                                        (3840x2160)</a></li>
                                <li><a class="nav-link" href="{{ url('projector/1694KSXRD4096x2160') }}">16:9 4K SXRD
                                        (4096x2160)</a></li>
                            </div>
                        </div>
                    </ul>
                </li>
                <li class="nav-item dropdown @if (Request::is('screen*')) active @endif">
                    <a class="nav-link dropdown-toggle" href="#" id="policyDropdown" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        screen
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="policyDropdown">
                        <!-- เริ่มต้น row -->
                        <div class="row">
                            <!-- คอลัมน์แรก -->
                            <div class="col-4">
                                <li><a class="nav-link" href="{{ url('screen/privacy') }}">By Type</a></li>
                                <li><a class="nav-link" href="{{ url('screen/terms') }}">Terms of Service</a></li>
                                <li><a class="nav-link" href="{{ url('screen/cookie') }}">Cookie Policy</a></li>
                                <li><a class="nav-link" href="{{ url('screen/security') }}">Security Policy</a></li>
                                <li><a class="nav-link" href="{{ url('screen/accessibility') }}">Accessibility</a>
                                </li>
                            </div>
                            <!-- คอลัมน์ที่สอง -->
                            <div class="col-4">
                                <li><a class="nav-link" href="{{ url('screen/returns') }}">Returns Policy</a></li>
                                <li><a class="nav-link" href="{{ url('screen/shipping') }}">Shipping Policy</a></li>
                                <li><a class="nav-link" href="{{ url('screen/support') }}">Support</a></li>
                                <li><a class="nav-link" href="{{ url('screen/contact') }}">Contact Us</a></li>
                                <li><a class="nav-link" href="{{ url('screen/faq') }}">FAQ</a></li>
                            </div>
                            <!-- คอลัมน์ที่สอง -->
                            <div class="col-4">
                                <li><a class="nav-link" href="{{ url('screen/returns') }}">Returns Policy</a></li>
                                <li><a class="nav-link" href="{{ url('screen/shipping') }}">Shipping Policy</a></li>
                                <li><a class="nav-link" href="{{ url('screen/support') }}">Support</a></li>
                                <li><a class="nav-link" href="{{ url('screen/contact') }}">Contact Us</a></li>
                                <li><a class="nav-link" href="{{ url('screen/faq') }}">FAQ</a></li>
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
