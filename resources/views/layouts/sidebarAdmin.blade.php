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
                    <a data-bs-toggle="collapse" href="#home" class="collapsed" aria-expanded="false">
                        <i class="fas fa-home"></i>
                        <p>Dashboard</p>
                        <span class="caret"></span>
                    </a>
                    <div class="collapse {{ Request::is('home*') ? 'show' : '' }}" id="home">
                        <ul class="nav nav-collapse">
                            <li class="{{ Request::is('home/demo1') ? 'active' : '' }}">
                                <a href="{{ url('home/demo1') }}">
                                    <span class="sub-item">Dashboard 1</span>
                                </a>
                            </li>
                        </ul>
                    </div>
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
                            <li class="{{ Request::is('components/avatars') ? 'active' : '' }}">
                                <a href="{{ url('components/avatars') }}">
                                    <span class="sub-item">Avatars</span>
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
                            <li class="{{ Request::is('components/panels') ? 'active' : '' }}">
                                <a href="{{ url('components/panels') }}">
                                    <span class="sub-item">Panels</span>
                                </a>
                            </li>
                            <li class="{{ Request::is('components/notifications') ? 'active' : '' }}">
                                <a href="{{ url('components/notifications') }}">
                                    <span class="sub-item">Notifications</span>
                                </a>
                            </li>
                            <li class="{{ Request::is('components/sweetalert') ? 'active' : '' }}">
                                <a href="{{ url('components/sweetalert') }}">
                                    <span class="sub-item">Sweet Alert</span>
                                </a>
                            </li>
                            <li class="{{ Request::is('components/font-awesome-icons') ? 'active' : '' }}">
                                <a href="{{ url('components/font-awesome-icons') }}">
                                    <span class="sub-item">Font Awesome Icons</span>
                                </a>
                            </li>
                            <li class="{{ Request::is('components/simple-line-icons') ? 'active' : '' }}">
                                <a href="{{ url('components/simple-line-icons') }}">
                                    <span class="sub-item">Simple Line Icons</span>
                                </a>
                            </li>
                            <li class="{{ Request::is('components/typography') ? 'active' : '' }}">
                                <a href="{{ url('components/typography') }}">
                                    <span class="sub-item">Typography</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>

                <!-- Sidebar Layouts -->
                <li class="nav-item {{ Request::is('sidebar-style-2') || Request::is('icon-menu') ? 'active' : '' }}">
                    <a data-bs-toggle="collapse" href="#sidebarLayouts"
                        class="{{ Request::is('sidebar-style-2') || Request::is('icon-menu') ? '' : 'collapsed' }}">
                        <i class="fas fa-th-list"></i>
                        <p>Sidebar Layouts</p>
                        <span class="caret"></span>
                    </a>
                    <div class="collapse {{ Request::is('sidebar-style-2') || Request::is('icon-menu') ? 'show' : '' }}"
                        id="sidebarLayouts">
                        <ul class="nav nav-collapse">
                            <li class="{{ Request::is('sidebar-style-2') ? 'active' : '' }}">
                                <a href="{{ url('sidebar-style-2') }}">
                                    <span class="sub-item">Sidebar Style 2</span>
                                </a>
                            </li>
                            <li class="{{ Request::is('icon-menu') ? 'active' : '' }}">
                                <a href="{{ url('icon-menu') }}">
                                    <span class="sub-item">Icon Menu</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>

                <!-- Forms -->
                <li class="nav-item {{ Request::is('forms/*') ? 'active' : '' }}">
                    <a data-bs-toggle="collapse" href="#forms"
                        class="{{ Request::is('forms/*') ? '' : 'collapsed' }}">
                        <i class="fas fa-pen-square"></i>
                        <p>Forms</p>
                        <span class="caret"></span>
                    </a>
                    <div class="collapse {{ Request::is('forms/*') ? 'show' : '' }}" id="forms">
                        <ul class="nav nav-collapse">
                            <li class="{{ Request::is('forms/forms') ? 'active' : '' }}">
                                <a href="{{ url('forms/forms') }}">
                                    <span class="sub-item">Basic Form</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>

                <!-- Tables -->
                <li class="nav-item {{ Request::is('tables/*') ? 'active' : '' }}">
                    <a data-bs-toggle="collapse" href="#tables"
                        class="{{ Request::is('tables/*') ? '' : 'collapsed' }}">
                        <i class="fas fa-table"></i>
                        <p>Tables</p>
                        <span class="caret"></span>
                    </a>
                    <div class="collapse {{ Request::is('tables/*') ? 'show' : '' }}" id="tables">
                        <ul class="nav nav-collapse">
                            <li class="{{ Request::is('tables/tables') ? 'active' : '' }}">
                                <a href="{{ url('tables/tables') }}">
                                    <span class="sub-item">Basic Table</span>
                                </a>
                            </li>
                            <li class="{{ Request::is('tables/datatables') ? 'active' : '' }}">
                                <a href="{{ url('tables/datatables') }}">
                                    <span class="sub-item">Datatables</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>

                <!-- Maps -->
                <li class="nav-item {{ Request::is('maps/*') ? 'active' : '' }}">
                    <a data-bs-toggle="collapse" href="#maps"
                        class="{{ Request::is('maps/*') ? '' : 'collapsed' }}">
                        <i class="fas fa-map-marker-alt"></i>
                        <p>Maps</p>
                        <span class="caret"></span>
                    </a>
                    <div class="collapse {{ Request::is('maps/*') ? 'show' : '' }}" id="maps">
                        <ul class="nav nav-collapse">
                            <li class="{{ Request::is('maps/googlemaps') ? 'active' : '' }}">
                                <a href="{{ url('maps/googlemaps') }}">
                                    <span class="sub-item">Google Maps</span>
                                </a>
                            </li>
                            <li class="{{ Request::is('maps/jsvectormap') ? 'active' : '' }}">
                                <a href="{{ url('maps/jsvectormap') }}">
                                    <span class="sub-item">Jsvectormap</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>

                <!-- Charts -->
                <li class="nav-item {{ Request::is('charts/*') ? 'active' : '' }}">
                    <a data-bs-toggle="collapse" href="#charts"
                        class="{{ Request::is('charts/*') ? '' : 'collapsed' }}">
                        <i class="far fa-chart-bar"></i>
                        <p>Charts</p>
                        <span class="caret"></span>
                    </a>
                    <div class="collapse {{ Request::is('charts/*') ? 'show' : '' }}" id="charts">
                        <ul class="nav nav-collapse">
                            <li class="{{ Request::is('charts/charts') ? 'active' : '' }}">
                                <a href="{{ url('charts/charts') }}">
                                    <span class="sub-item">Chart Js</span>
                                </a>
                            </li>
                            <li class="{{ Request::is('charts/sparkline') ? 'active' : '' }}">
                                <a href="{{ url('charts/sparkline') }}">
                                    <span class="sub-item">Sparkline</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>

                <!-- Widgets -->
                <li class="nav-item {{ Request::is('widgets') ? 'active' : '' }}">
                    <a href="{{ url('widgets') }}">
                        <i class="fas fa-desktop"></i>
                        <p>Widgets</p>
                        <span class="badge badge-success">4</span>
                    </a>
                </li>

                <!-- Menu Levels -->
                <li class="nav-item {{ Request::is('submenu*') ? 'active' : '' }}">
                    <a data-bs-toggle="collapse" href="#submenu"
                        class="{{ Request::is('submenu*') ? '' : 'collapsed' }}">
                        <i class="fas fa-bars"></i>
                        <p>Menu Levels</p>
                        <span class="caret"></span>
                    </a>
                    <div class="collapse {{ Request::is('submenu*') ? 'show' : '' }}" id="submenu">
                        <ul class="nav nav-collapse">
                            <li class="{{ Request::is('submenu/subnav1*') ? 'active' : '' }}">
                                <a data-bs-toggle="collapse" href="#subnav1"
                                    class="{{ Request::is('submenu/subnav1*') ? '' : 'collapsed' }}">
                                    <span class="sub-item">Level 1</span>
                                    <span class="caret"></span>
                                </a>
                                <div class="collapse {{ Request::is('submenu/subnav1*') ? 'show' : '' }}"
                                    id="subnav1">
                                    <ul class="nav nav-collapse subnav">
                                        <li class="{{ Request::is('submenu/subnav1/level2-1') ? 'active' : '' }}">
                                            <a href="{{ url('submenu/subnav1/level2-1') }}">
                                                <span class="sub-item">Level 2</span>
                                            </a>
                                        </li>
                                        <li class="{{ Request::is('submenu/subnav1/level2-2') ? 'active' : '' }}">
                                            <a href="{{ url('submenu/subnav1/level2-2') }}">
                                                <span class="sub-item">Level 2</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="{{ Request::is('submenu/subnav2*') ? 'active' : '' }}">
                                <a data-bs-toggle="collapse" href="#subnav2"
                                    class="{{ Request::is('submenu/subnav2*') ? '' : 'collapsed' }}">
                                    <span class="sub-item">Level 1</span>
                                    <span class="caret"></span>
                                </a>
                                <div class="collapse {{ Request::is('submenu/subnav2*') ? 'show' : '' }}"
                                    id="subnav2">
                                    <ul class="nav nav-collapse subnav">
                                        <li class="{{ Request::is('submenu/subnav2/level2-1') ? 'active' : '' }}">
                                            <a href="{{ url('submenu/subnav2/level2-1') }}">
                                                <span class="sub-item">Level 2</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="{{ Request::is('submenu/level1') ? 'active' : '' }}">
                                <a href="{{ url('submenu/level1') }}">
                                    <span class="sub-item">Level 1</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</div>
