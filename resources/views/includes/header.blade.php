    <!-- header area start -->
    <header>
        <div id="header-sticky"
            class="header__area {{ Route::currentRouteName() == 'home' ? 'header__transparent' : '' }}">
            <div class="header__bottom">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-xxl-8 col-xl-9 col-lg-10 col-md-6 col-6">
                            <div class="header__bottom-left d-flex align-items-center">
                                <div class="logo">
                                    <a href="#">
                                        <img src="{{ asset('assets/img/logo/medex-college-logo.png') }}"
                                            alt="logo" />
                                    </a>
                                </div>
                                <div class="main-menu main-menu-2 main-menu-border ml-30 pl-30">
                                    <nav id="mobile-menu">
                                        <ul>
                                            <li>
                                                <a href="{{ route('home') }}">Home</a>
                                            </li>
                                            <li class="has-dropdown">
                                                <a href="#">Courses</a>
                                                <ul class="submenu">
                                                    @foreach ($categories as $category)
                                                        <li>
                                                            <a href="#">{{ $category->name }}</a>
                                                        </li>
                                                    @endforeach
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="{{ route('about') }}">About us</a>
                                            </li>
                                            <li>
                                                <a href="{{ route('contact') }}">Contact us</a>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-4 col-xl-3 col-lg-2 col-md-6 col-6">
                            <div class="header__bottom-right d-flex justify-content-end align-items-center pl-30">
                                <div class="header__search header__search-2 d-none d-xl-block">
                                    <form action="#">
                                        <div class="header__search-input">
                                            <input type="text" placeholder="Search..." />
                                            <button class="header__search-btn">
                                                <svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M8.11111 15.2222C12.0385 15.2222 15.2222 12.0385 15.2222 8.11111C15.2222 4.18375 12.0385 1 8.11111 1C4.18375 1 1 4.18375 1 8.11111C1 12.0385 4.18375 15.2222 8.11111 15.2222Z"
                                                        stroke="#3E8454" stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                    <path d="M17 17L13.1333 13.1333" stroke="#3E8454" stroke-width="2"
                                                        stroke-linecap="round" stroke-linejoin="round" />
                                                </svg>
                                            </button>
                                        </div>
                                    </form>
                                </div>
                                <div class="header__hamburger ml-50 d-xl-none">
                                    <button type="button" data-bs-toggle="modal" data-bs-target="#offcanvasmodal"
                                        class="hamurger-btn">
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- header area end -->
