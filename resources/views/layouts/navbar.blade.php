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
                <li class="nav-item @if (Request::is('blog')) active @endif">
                    <a class="nav-link" href="blog.html">Blog</a>
                </li>
                <li class="nav-item @if (Request::is('contact')) active @endif">
                    <a class="nav-link" href="contact.html">Contact us</a>
                </li>
            </ul>

            <ul class="custom-navbar-cta navbar-nav mb-2 mb-md-0 ms-5">
                <li><a class="nav-link" href="#"><img src="{{ URL::asset('/assets/images/user.svg') }}"></a>
                </li>
                <li><a class="nav-link" href="cart.html"><img src="{{ URL::asset('/assets/images/cart.svg') }}"></a>
                </li>
            </ul>
        </div>
    </div>

</nav>
