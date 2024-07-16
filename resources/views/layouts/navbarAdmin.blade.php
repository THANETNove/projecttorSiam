<div class="main-header">

    <div class="main-header-logo">
        <!-- Logo Header -->
        <div class="logo-header" data-background-color="dark">
            <a href="index.html" class="logo">
                <img src="assets/img/kaiadmin/logo_light.svg" alt="navbar brand" class="navbar-brand" height="20" />
            </a>
            <div class="nav-toggle">
                <button class="btn btn-toggle toggle-sidebar">
                    <i class="gg-menu-right"></i>
                </button>
                <button class="btn btn-toggle sidenav-toggler">
                    <i class="gg-menu-left"></i>
                </button>
            </div>
            <button class="topbar-toggler more">
                <i class="gg-more-vertical-alt"></i>
            </button>
        </div>
        <!-- End Logo Header -->
    </div>
    <!-- Navbar Header -->
    <nav class="navbar navbar-header navbar-header-transparent navbar-expand-lg border-bottom">
        <div class="container-fluid">
            @php
                $paths = ['product/product_all', 'product/search', 'components/manuBar', 'components/manuBar/search'];
            @endphp
            @php
                $formAction = '';
                if (Request::is('product/product_all')) {
                    $formAction = route('product/search');
                } elseif (Request::is('components/manuBar')) {
                    $formAction = route('components/manuBar/search'); // สมมติว่ามี route ที่ชื่อว่า product_search
                }
            @endphp



            <nav class="navbar navbar-header-left navbar-expand-lg navbar-form nav-search p-0 d-none d-lg-flex">
                @if (collect($paths)->contains(fn($path) => Request::is($path)))
                    <form method="POST" action="{{ $formAction }}">
                        @csrf

                        <div class="input-group">
                            <input type="text" placeholder="Search ..." name="search"
                                value="{{ request('search') }}" class="form-control" />
                            <div class="input-group-prepend">
                                <button type="submit" class="btn" style="background-color: #1a2035 ">
                                    <i class="fa fa-search search-icon" style="color: #ffffff"></i>
                                </button>
                            </div>

                        </div>
                    </form>
                @endif
            </nav>

            <ul class="navbar-nav topbar-nav ms-md-auto align-items-center ">
                <li class="nav-item topbar-icon dropdown hidden-caret d-flex d-lg-none">
                    @if (collect($paths)->contains(fn($path) => Request::is($path)))
                        <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button"
                            aria-expanded="false" aria-haspopup="true">
                            <i class="fa fa-search"></i>
                        </a>
                        <ul class="dropdown-menu dropdown-search animated fadeIn" style="padding-left: 8px ;">
                            <form action="">
                                <div class="row">
                                    <div class="col-9">
                                        <input type="text" placeholder="Search ..." class="form-control" />
                                    </div>
                                    <div class="col-3">
                                        <button type="submit" class="btn" style="background-color: #1a2035">
                                            <i class="fa fa-search search-icon" style="color: #ffffff"></i>
                                        </button>
                                    </div>
                                </div>

                            </form>
                        </ul>
                    @endif
                </li>




                @if (session('message'))
                    <p class="message-text text-center mt-4"> {{ session('message') }}</p>
                @endif



                <li class="nav-item topbar-user dropdown hidden-caret">
                    <a class="dropdown-toggle profile-pic" data-bs-toggle="dropdown" href="#"
                        aria-expanded="false">
                        <div class="avatar-sm">
                            <img src="{{ URL::asset('/assetsAdmin/img/profile.jpg') }}" alt="..."
                                class="avatar-img rounded-circle" />
                        </div>
                        <span class="profile-username">
                            <span class="fw-bold">{{ Auth::user()->fname }}</span>
                        </span>
                    </a>
                    <ul class="dropdown-menu dropdown-user animated fadeIn">
                        <div class="dropdown-user-scroll scrollbar-outer">
                            <li>
                                <div class="user-box">
                                    <div class="avatar-lg')}}">
                                        <img src="{{ URL::asset('/assetsAdmin/img/profile.jpg') }}" alt="image profile"
                                            class="avatar-img rounded" style="width: 50px" />
                                    </div>
                                    <div class="u-text">
                                        <h4> {{ Auth::user()->fname }}</h4>
                                        <p class="text-muted"> {{ Auth::user()->email }}</p>

                                    </div>
                                </div>
                            </li>
                            <li>

                                <div class="dropdown-divider"></div>

                                <a class="dropdown-item" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                           document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </li>
                        </div>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>
    <!-- End Navbar -->
</div>
