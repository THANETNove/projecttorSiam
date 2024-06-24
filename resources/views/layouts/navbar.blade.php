<nav class="custom-navbar navbar navbar navbar-expand-md navbar-dark bg-dark" arial-label="Furni navigation bar">

    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">projecttorSiam<span>.</span></a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsFurni"
            aria-controls="navbarsFurni" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarsFurni">
            <ul class="custom-navbar-nav navbar-nav ms-auto mb-2 mb-md-0">
                <li class="nav-item @if (Request::is('/')) active @endif">
                    <a class="nav-link" href="{{ url('/') }}">Home</a>
                </li>
                <li class="nav-item @if (Request::is('shop')) active @endif">
                    <a class="nav-link" href="{{ url('shop') }}">Shop</a>
                </li>
                <li class="nav-item @if (Request::is('aboutus')) active @endif">
                    <a class="nav-link" href="{{ url('aboutus') }}">About us</a>
                </li>
                <li class="nav-item @if (Request::is('services')) active @endif">
                    <a class="nav-link" href="{{ url('services') }}">Services</a>
                </li>
                <li class="nav-item @if (Request::is('policy')) active @endif">
                    <a class="nav-link" href="{{ url('policy') }}">Policy</a>
                </li>
                <li class="nav-item @if (Request::is('contact')) active @endif">
                    {{-- <a class="nav-link" href="contact.html">Contact us</a> --}}
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item @if (Request::is('login')) active @endif">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item  @if (Request::is('register')) active @endif">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->fname }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </li>
            </ul>

            <ul class="custom-navbar-cta navbar-nav mb-2 mb-md-0 ms-5">
                <li><a class="nav-link" href="cart.html"><img src="{{ URL::asset('/assets/images/cart.svg') }}">
                        <span class="cartUser">5</span>
                    </a>

                </li>
            </ul>
        </div>
    </div>

</nav>
