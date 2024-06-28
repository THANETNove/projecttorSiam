<!-- Sidebar -->
<div class="sidebar" data-background-color="dark">
    <div class="sidebar-logo">
        <!-- Logo Header -->
        <div class="logo-header" data-background-color="dark">
            <a href="{{ url('/home') }}" class="logo">
                <img src="{{ asset('assetsAdmin/img/kaiadmin/logo_light.svg') }}" alt="navbar brand" class="navbar-brand"
                    height="20" />
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
    <div class="sidebar-wrapper scrollbar scrollbar-inner">
        <div class="sidebar-content">
            <ul class="nav nav-secondary">
                <!-- Dashboard -->
                <li class="nav-item {{ Request::is('home*') ? 'active' : '' }}">
                    <a href="{{ url('/') }}" class="collapsed" aria-expanded="false">
                        <i class="fas fa-home"></i>
                        <p>Dashboard</p>

                    </a>
                </li>

                <!-- Components Section Header -->
                <li class="nav-section">
                    <span class="sidebar-mini-icon">
                        <i class="fa fa-ellipsis-h"></i>
                    </span>
                    <h4 class="text-section">Components</h4>
                </li>

                <!-- Base Components -->
                <li class="nav-item {{ Request::is('components/*') ? 'active' : '' }}">
                    <a data-bs-toggle="collapse" href="#base"
                        class="{{ Request::is('components/*') ? '' : 'collapsed' }}">
                        <i class="fas fa-layer-group"></i>
                        <p>Base</p>
                        <span class="caret"></span>
                    </a>
                    <div class="collapse {{ Request::is('components/*') ? 'show' : '' }}" id="base">
                        <ul class="nav nav-collapse">
                            <li class="{{ Request::is('components/bank*') ? 'active' : '' }}">
                                <a href="{{ url('components/bank') }}">
                                    <span class="sub-item">บัญชีธนาคาร</span>
                                </a>
                            </li>
                            <li class=<li class="{{ Request::is('components/slide') ? 'active' : '' }}">
                                <a href="{{ url('components/slide') }}">
                                    <span class="sub-item">Picture Slide Home</span>
                                </a>
                            </li>
                            <li class="{{ Request::is('components/buttons') ? 'active' : '' }}">
                                <a href="{{ url('components/buttons') }}">
                                    <span class="sub-item">Buttons</span>
                                </a>
                            </li>
                            <li class="{{ Request::is('components/gridsystem') ? 'active' : '' }}">
                                <a href="{{ url('components/gridsystem') }}">
                                    <span class="sub-item">Grid System</span>
                                </a>
                            </li>

                        </ul>
                    </div>
                </li>


            </ul>
        </div>
    </div>
</div>
