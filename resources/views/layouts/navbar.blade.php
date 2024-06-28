<nav class="custom-navbar navbar navbar navbar-expand-md navbar-dark bg-dark" arial-label="Furni navigation bar">

    <div class="container">
        <a class="navb ar-brand" href="{{ url('/') }}">
            <img src="{{ URL::asset('/assets/images/cover/1.jpg') }}" class="imageLogo">
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsFurni"
            aria-controls="navbarsFurni" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        @php
            $data = DB::table('menu_bars')->orderBy('use')->orderBy('resolution')->get();
        @endphp
        <div class="collapse navbar-collapse" id="navbarsFurni">
            <ul class="custom-navbar-nav navbar-nav ms-auto mb-2 mb-md-0">

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
                                <li><a class="nav-link textHead">By Use</a></li>

                                @foreach ($data as $da)
                                    <!-- ตรวจสอบว่า use และ resolution ตรงกับค่าที่ต้องการหรือไม่ -->
                                    @if ($da->use == 1 && $da->resolution == 1)
                                        <li><a class="nav-link"
                                                href="{{ url('projector', $da->use) }}">{{ $da->feature }}</a>
                                        </li>
                                    @endif
                                @endforeach


                            </div>
                            <!-- คอลัมน์ที่สอง -->
                            <div class="col-4">
                                <li><a class="nav-link textHead" href="#">By Feature</a></li>
                                @foreach ($data as $da)
                                    <!-- ตรวจสอบว่า use และ resolution ตรงกับค่าที่ต้องการหรือไม่ -->
                                    @if ($da->use == 1 && $da->resolution == 2)
                                        <li><a class="nav-link"
                                                href="{{ url('projector', $da->use) }}">{{ $da->feature }}</a>
                                        </li>
                                    @endif
                                @endforeach
                            </div>
                            <!-- คอลัมน์ที่สอง -->
                            <div class="col-4">
                                <li><a class="nav-link textHead" href="#">By Resolution</a>
                                </li>
                                @foreach ($data as $da)
                                    <!-- ตรวจสอบว่า use และ resolution ตรงกับค่าที่ต้องการหรือไม่ -->
                                    @if ($da->use == 1 && $da->resolution == 3)
                                        <li><a class="nav-link"
                                                href="{{ url('projector', $da->use) }}">{{ $da->feature }}</a>
                                        </li>
                                    @endif
                                @endforeach
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
                                <li><a class="nav-link textHead" href="#">By Type</a></li>
                                @foreach ($data as $da)
                                    <!-- ตรวจสอบว่า use และ resolution ตรงกับค่าที่ต้องการหรือไม่ -->
                                    @if ($da->use == 2 && $da->resolution == 1)
                                        <li><a class="nav-link"
                                                href="{{ url('screen', $da->use) }}">{{ $da->feature }}</a>
                                        </li>
                                    @endif
                                @endforeach
                            </div>
                            <!-- คอลัมน์ที่สอง -->
                            <div class="col-4">
                                <li><a class="nav-link textHead" href="#">By Format</a></li>
                                @foreach ($data as $da)
                                    <!-- ตรวจสอบว่า use และ resolution ตรงกับค่าที่ต้องการหรือไม่ -->
                                    @if ($da->use == 2 && $da->resolution == 2)
                                        <li><a class="nav-link"
                                                href="{{ url('projector', $da->use) }}">{{ $da->feature }}</a>
                                        </li>
                                    @endif
                                @endforeach
                            </div>
                            <!-- คอลัมน์ที่สอง -->
                            <div class="col-4">
                                <li><a class="nav-link textHead" href="#">By Diagonal Size</a></li>
                                @foreach ($data as $da)
                                    <!-- ตรวจสอบว่า use และ resolution ตรงกับค่าที่ต้องการหรือไม่ -->
                                    @if ($da->use == 2 && $da->resolution == 3)
                                        <li><a class="nav-link"
                                                href="{{ url('projector', $da->use) }}">{{ $da->feature }}</a>
                                        </li>
                                    @endif
                                @endforeach
                            </div>
                        </div>
                    </ul>
                </li>

                <li class="nav-item dropdown @if (Request::is('displays/*')) active @endif">
                    <a class="nav-link dropdown-toggle" href="#" id="policyDropdown" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        Displays
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="policyDropdown">
                        <!-- เริ่มต้น row -->
                        <div class="row">
                            <!-- คอลัมน์แรก -->
                            <div class="col-4">
                                <li><a class="nav-link textHead">By Feature</a></li>
                                @foreach ($data as $da)
                                    <!-- ตรวจสอบว่า use และ resolution ตรงกับค่าที่ต้องการหรือไม่ -->
                                    @if ($da->use == 3 && $da->resolution == 1)
                                        <li><a class="nav-link"
                                                href="{{ url('displays', $da->use) }}">{{ $da->feature }}</a>
                                        </li>
                                    @endif
                                @endforeach
                            </div>
                            <!-- คอลัมน์ที่สอง -->
                            <div class="col-4">
                                <li><a class="nav-link textHead">By Diagonal Size</a></li>
                                @foreach ($data as $da)
                                    <!-- ตรวจสอบว่า use และ resolution ตรงกับค่าที่ต้องการหรือไม่ -->
                                    @if ($da->use == 3 && $da->resolution == 2)
                                        <li><a class="nav-link"
                                                href="{{ url('projector', $da->use) }}">{{ $da->feature }}</a>
                                        </li>
                                    @endif
                                @endforeach
                            </div>
                            <!-- คอลัมน์ที่สอง -->
                            <div class="col-4">
                                <li><a class="nav-link textHead" href="#">By Manufacturer</a></li>
                                @foreach ($data as $da)
                                    <!-- ตรวจสอบว่า use และ resolution ตรงกับค่าที่ต้องการหรือไม่ -->
                                    @if ($da->use == 3 && $da->resolution == 3)
                                        <li><a class="nav-link"
                                                href="{{ url('projector', $da->use) }}">{{ $da->feature }}</a>
                                        </li>
                                    @endif
                                @endforeach
                            </div>
                        </div>
                    </ul>
                </li>

                <li class="nav-item dropdown @if (Request::is('pages/*')) active @endif">
                    <a class="nav-link dropdown-toggle" href="#" id="policyDropdown" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        AV Solutions
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="pagesDropdown">
                        <li><a class="nav-link textHead">Sound System</a></li>
                        @foreach ($data as $da)
                            <!-- ตรวจสอบว่า use และ resolution ตรงกับค่าที่ต้องการหรือไม่ -->
                            @if ($da->use == 3 && $da->resolution == 1)
                                <li><a class="nav-link"
                                        href="{{ url('AVSolutions', $da->use) }}">{{ $da->feature }}</a>
                                </li>
                            @endif
                        @endforeach
                    </ul>
                </li>
                <li class="nav-item dropdown @if (Request::is('pages/*')) active @endif">
                    <a class="nav-link dropdown-toggle" href="#" id="policyDropdown" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        Accessories
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="pagesDropdown">
                        <li><a class="nav-link textHead">HDMI Cable</a></li>
                        @foreach ($data as $da)
                            <!-- ตรวจสอบว่า use และ resolution ตรงกับค่าที่ต้องการหรือไม่ -->
                            @if ($da->use == 3 && $da->resolution == 1)
                                <li><a class="nav-link"
                                        href="{{ url('Accessories', $da->use) }}">{{ $da->feature }}</a>
                                </li>
                            @endif
                        @endforeach
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
