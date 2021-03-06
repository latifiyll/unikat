<!-- HEADER MOBILE-->
<header class="header-mobile d-block d-lg-none">
    <div class="header-mobile__bar">
        <div class="container-fluid">
            <div class="header-mobile-inner">
                <a class="logo" href="index.html">
                    <img src="images/icon/logo.png" alt="CoolAdmin" />
                </a>
                <button class="hamburger hamburger--slider" type="button">
                    <span class="hamburger-box">
                        <span class="hamburger-inner"></span>
                    </span>
                </button>
            </div>
        </div>
    </div>
    <nav class="navbar-mobile">
        <div class="container-fluid">
            <ul class="navbar-mobile__list list-unstyled">
                <li class="has-sub">
                    <a class="js-arrow" href="#">
                        <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                    <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                        <li>
                            <a href="index.html">Dashboard 1</a>
                        </li>
                        <li>
                            <a href="index2.html">Dashboard 2</a>
                        </li>
                        <li>
                            <a href="index3.html">Dashboard 3</a>
                        </li>
                        <li>
                            <a href="index4.html">Dashboard 4</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="chart.html">
                        <i class="fas fa-chart-bar"></i>Charts</a>
                </li>
                <li>
                    <a href="table.html">
                        <i class="fas fa-table"></i>Tables</a>
                </li>
                <li>
                    <a href="form.html">
                        <i class="far fa-check-square"></i>Forms</a>
                </li>
                <li>
                    <a href="calendar.html">
                        <i class="fas fa-calendar-alt"></i>Calendar</a>
                </li>
                <li>
                    <a href="map.html">
                        <i class="fas fa-map-marker-alt"></i>Maps</a>
                </li>
                <li class="has-sub">
                    <a class="js-arrow" href="#">
                        <i class="fas fa-copy"></i>Pages</a>
                    <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                        <li>
                            <a href="login.html">Login</a>
                        </li>
                        <li>
                            <a href="register.html">Register</a>
                        </li>
                        <li>
                            <a href="forget-pass.html">Forget Password</a>
                        </li>
                    </ul>
                </li>
                <li class="has-sub">
                    <a class="js-arrow" href="#">
                        <i class="fas fa-desktop"></i>UI Elements</a>
                    <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                        <li>
                            <a href="button.html">Button</a>
                        </li>
                        <li>
                            <a href="badge.html">Badges</a>
                        </li>
                        <li>
                            <a href="tab.html">Tabs</a>
                        </li>
                        <li>
                            <a href="card.html">Cards</a>
                        </li>
                        <li>
                            <a href="alert.html">Alerts</a>
                        </li>
                        <li>
                            <a href="progress-bar.html">Progress Bars</a>
                        </li>
                        <li>
                            <a href="modal.html">Modals</a>
                        </li>
                        <li>
                            <a href="switch.html">Switchs</a>
                        </li>
                        <li>
                            <a href="grid.html">Grids</a>
                        </li>
                        <li>
                            <a href="fontawesome.html">Fontawesome Icon</a>
                        </li>
                        <li>
                            <a href="typo.html">Typography</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>
</header>
        <!-- END HEADER MOBILE-->

        <!-- MENU SIDEBAR-->
        <aside class="menu-sidebar d-none d-lg-block">
            <div class="logo">
                <a href="#">
                    <img src="{{url('images/icon/complogo.png')}}" alt="Cool Admin" />
                </a>
            </div>
            <div class="menu-sidebar__content js-scrollbar1">
                <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list">
                        <li class="{{ (request()->is('/')) ? 'active' : '' }}">
                        <a class="js-arrow" href="{{url('/')}}">
                                <i class="fas fa-tachometer-alt"></i>Home</a>
                        </li>
                        <li class="{{ (request()->is('products*')) ? 'active' : '' }}"> <!-- "*" makes every route that starts with products ative -->
                            <a href="{{url('/products')}}">
                                <i class="fas fa-shopping-cart"></i>Produktet</a>
                        </li>
                        <li class="{{ (request()->is('suppliers*')) ? 'active' : '' }}">
                            <a href="{{url('suppliers')}}">
                                <i class="fas fa-arrow-circle-right"></i>Furnizuesit</a>
                        </li>
                        <li  class="{{ (request()->is('buyers*')) ? 'active' : '' }}">
                            <a href="{{url('buyers')}}">
                                <i class="fas fa-arrow-circle-left"></i>Bleresit</a>
                        </li>
                        <li class="{{ (request()->is('accounting*')) ? 'active' : '' }}">
                            <a href="{{url('accounting')}}">
                                <i class="fas fa-calendar-alt"></i>Kartela Analitike</a>
                        </li>
                        <li class="{{ (request()->is('sales*')) ? 'active' : '' }}">
                        <a href="{{url('sales')}}">
                                <i class="fas fa-truck"></i>Shitjet</a>
                        </li>
                        <li class="{{ (request()->is('users*')) ? 'active' : '' }}">
                            <a href="{{url('users')}}">
                                <i class="fas fa-user"></i>Përdoruesit</a>
                        </li>
                        <li class="has-sub {{ (request()->is('settings*')) ? 'active' : '' }}">
                            <a class="js-arrow " href="#">
                                <i class="fas fa-cogs"></i>Konfigurime</a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li class="{{ (request()->is('settings/categories*')) ? 'active' : '' }}">
                                    <a href="{{url('settings/categories')}}"><i class="fas fa-list-ul"></i> Kategoritë</a>
                                </li>
                                <li class="{{ (request()->is('settings/types*')) ? 'active' : '' }}">
                                    <a href="{{url('settings/types')}}"><i class="fas fa-list-ul"></i>Tipet</a>
                                </li>
                                <li class="{{ (request()->is('settings/general*')) ? 'active' : '' }}">
                                    <a href="{{url('settings/general')}}"><i class="fas fa-list-ul"></i>Të dhëna Gjenerale</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </nav>
            </div>
        </aside>
        <!-- END MENU SIDEBAR-->
                <!-- PAGE CONTAINER-->
                <div class="page-container">
                    <!-- HEADER DESKTOP-->
                    <header class="header-desktop">
                        <div class="section__content section__content--p30">
                            <div class="container-fluid">
                                <div class="header-wrap">
                                    <form class="form-header" action="" method="POST">
                                    </form>
                                    <div class="header-button">
                                        <div class="noti-wrap">
                                            <div class="noti__item js-item-menu">
                                                <i class="zmdi zmdi-comment-more"></i>
                                                <span class="quantity">1</span>
                                                <div class="mess-dropdown js-dropdown">
                                                    <div class="mess__title">
                                                        <p>You have 2 news message</p>
                                                    </div>
                                                    <div class="mess__item">
                                                        <div class="image img-cir img-40">
                                                            <img src="{{url('images/icon/avatar-06.jpg')}}" alt="Michelle Moreno" />
                                                        </div>
                                                        <div class="content">
                                                            <h6>Michelle Moreno</h6>
                                                            <p>Have sent a photo</p>
                                                            <span class="time">3 min ago</span>
                                                        </div>
                                                    </div>
                                                    <div class="mess__item">
                                                        <div class="image img-cir img-40">
                                                            <img src="{{url('images/icon/avatar-04.jpg')}}" alt="Diane Myers" />
                                                        </div>
                                                        <div class="content">
                                                            <h6>Diane Myers</h6>
                                                            <p>You are now connected on message</p>
                                                            <span class="time">Yesterday</span>
                                                        </div>
                                                    </div>
                                                    <div class="mess__footer">
                                                        <a href="#">View all messages</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="noti__item js-item-menu">
                                                <i class="zmdi zmdi-email"></i>
                                                <span class="quantity">1</span>
                                                <div class="email-dropdown js-dropdown">
                                                    <div class="email__title">
                                                        <p>You have 3 New Emails</p>
                                                    </div>
                                                    <div class="email__item">
                                                        <div class="image img-cir img-40">
                                                            <img src="{{url('images/icon/avatar-06.jpg')}}" alt="Cynthia Harvey" />
                                                        </div>
                                                        <div class="content">
                                                            <p>Meeting about new dashboard...</p>
                                                            <span>Cynthia Harvey, 3 min ago</span>
                                                        </div>
                                                    </div>
                                                    <div class="email__item">
                                                        <div class="image img-cir img-40">
                                                            <img src="{{url('images/icon/avatar-05.jpg')}}" alt="Cynthia Harvey" />
                                                        </div>
                                                        <div class="content">
                                                            <p>Meeting about new dashboard...</p>
                                                            <span>Cynthia Harvey, Yesterday</span>
                                                        </div>
                                                    </div>
                                                    <div class="email__item">
                                                        <div class="image img-cir img-40">
                                                            <img src="{{url('images/icon/avatar-04.jpg')}}" alt="Cynthia Harvey" />
                                                        </div>
                                                        <div class="content">
                                                            <p>Meeting about new dashboard...</p>
                                                            <span>Cynthia Harvey, April 12,,2018</span>
                                                        </div>
                                                    </div>
                                                    <div class="email__footer">
                                                        <a href="#">See all emails</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="noti__item js-item-menu">
                                                <i class="zmdi zmdi-notifications"></i>
                                                <span class="quantity">3</span>
                                                <div class="notifi-dropdown js-dropdown">
                                                    <div class="notifi__title">
                                                        <p>You have 3 Notifications</p>
                                                    </div>
                                                    <div class="notifi__item">
                                                        <div class="bg-c1 img-cir img-40">
                                                            <i class="zmdi zmdi-email-open"></i>
                                                        </div>
                                                        <div class="content">
                                                            <p>You got a email notification</p>
                                                            <span class="date">April 12, 2018 06:50</span>
                                                        </div>
                                                    </div>
                                                    <div class="notifi__item">
                                                        <div class="bg-c2 img-cir img-40">
                                                            <i class="zmdi zmdi-account-box"></i>
                                                        </div>
                                                        <div class="content">
                                                            <p>Your account has been blocked</p>
                                                            <span class="date">April 12, 2018 06:50</span>
                                                        </div>
                                                    </div>
                                                    <div class="notifi__item">
                                                        <div class="bg-c3 img-cir img-40">
                                                            <i class="zmdi zmdi-file-text"></i>
                                                        </div>
                                                        <div class="content">
                                                            <p>You got a new file</p>
                                                            <span class="date">April 12, 2018 06:50</span>
                                                        </div>
                                                    </div>
                                                    <div class="notifi__footer">
                                                        <a href="#">All notifications</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="account-wrap">
                                            <div class="account-item clearfix js-item-menu">
                                                <div class="image">
                                                    <img src="{{url('images/icon/avatar-01.jpg')}}" alt="John Doe" />
                                                </div>
                                                <div class="content">
                                                <a class="js-acc-btn" href="#">{{Auth::user()->name}}</a>
                                                </div>
                                                <div class="account-dropdown js-dropdown">
                                                    <div class="info clearfix">
                                                        <div class="image">
                                                            <a href="#">
                                                                <img src="{{url('images/icon/avatar-01.jpg')}}" alt="John Doe" />
                                                            </a>
                                                        </div>
                                                        <div class="content">
                                                            <h5 class="name">
                                                                <a href="#">john doe</a>
                                                            </h5>
                                                            <span class="email">johndoe@example.com</span>
                                                        </div>
                                                    </div>
                                                    <div class="account-dropdown__body">
                                                        <div class="account-dropdown__item">
                                                            <a href="#">
                                                                <i class="zmdi zmdi-account"></i>Account</a>
                                                        </div>
                                                        <div class="account-dropdown__item">
                                                            <a href="#">
                                                                <i class="zmdi zmdi-settings"></i>Setting</a>
                                                        </div>
                                                        <div class="account-dropdown__item">
                                                            <a href="#">
                                                                <i class="zmdi zmdi-money-box"></i>Billing</a>
                                                        </div>
                                                    </div>
                                                    <div class="account-dropdown__footer">
                                                        <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                                        document.getElementById('logout-form').submit();">
                                                            <i class="zmdi zmdi-power"></i>{{__('Logout')}}</a>
                                                        <form id="logout-form" action="{{ route('logout') }}" method="POST">
                                                            @csrf
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </header>
                    <!-- HEADER DESKTOP-->

