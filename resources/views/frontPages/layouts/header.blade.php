<!doctype html>
<html class="no-js" lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>@yield('page_name', 'No Name')</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('frontDesign/img/favicon.png') }}">
    <!-- Place favicon.ico in the root directory -->

    <!-- CSS here -->
    <link rel="stylesheet" href="{{ asset('frontDesign/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontDesign/css/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontDesign/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('frontDesign/css/fontawesome-all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontDesign/css/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('frontDesign/css/default.css') }}">
    <link rel="stylesheet" href="{{ asset('frontDesign/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('frontDesign/css/responsive.css') }}">

    @yield('page_style')
</head>

<body>

    <!-- Scroll-top -->
    <button class="scroll-top scroll-to-target" data-target="html">
        <i class="fas fa-angle-up"></i>
    </button>
    <!-- Scroll-top-end-->

    <!-- header-area -->
    <header>
        <div id="sticky-header" class="menu__area transparent-header">
            <div class="container custom-container">
                <div class="row">
                    <div class="col-12">
                        <div class="mobile__nav__toggler"><i class="fas fa-bars"></i></div>
                        <div class="menu__wrap">
                            <nav class="menu__nav">
                                <div class="logo">
                                    <a href="index.html" class="logo__black"><img
                                            src="{{ asset('frontDesign/img/logo/myLogo02.png') }}" alt=""></a>
                                    <a href="index.html" class="logo__white"><img
                                            src="{{ asset('frontDesign/img/logo/myLogo02.png') }}" alt=""></a>
                                </div>
                                <div class="navbar__wrap main__menu d-none d-xl-flex">
                                    <ul class="navigation">
                                        <li class="active"><a class="nav_color" href="index.html">Home</a></li>
                                        <li><a class="nav_color" href="about.html">About</a></li>
                                        <li><a class="nav_color" href="services-details.html">Services</a></li>
                                        <li class="menu-item-has-children"><a class="nav_color"
                                                href="#">Portfolio</a>
                                            <ul class="sub-menu">
                                                <li><a class="nav_color" href="portfolio.html">Portfolio</a></li>
                                                <li><a href="portfolio-details.html">Portfolio Details</a></li>
                                            </ul>
                                        </li>
                                        <li class="menu-item-has-children"><a class="nav_color" href="#">Our
                                                Blog</a>
                                            <ul class="sub-menu">
                                                <li><a href="blog.html">Our News</a></li>
                                                <li><a href="blog-details.html">News Details</a></li>
                                            </ul>
                                        </li>
                                        <li><a class="nav_color" href="contact.html">contact me</a></li>
                                    </ul>
                                </div>
                                <div class="header__btn d-none d-md-block">
                                    {{-- <a href="contact.html" class="btn">Contact me</a> --}}
                                    <div class="log_links">

                                        @if (Route::has('login'))
                                            <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                                                @auth

                                                    @if (!Auth::user()->hasRole('user'))
                                                        <a class="headers_link" href="{{ url('/dashboard') }}"
                                                            class="text-sm text-gray-700 dark:text-gray-500 underline">{{ __('app.Dashboard') }}</a>
                                                    @endif
                                                    <form action="{{ route('logout') }}" method="post">
                                                        @csrf
                                                        <button class="logout_btn">{{ __('app.LOG OUT') }}</button>
                                                    </form>
                                                @else
                                                    <a class="headers_link headers_left" href="{{ route('login') }}"
                                                        class="text-sm text-gray-700 dark:text-gray-500 underline">Log
                                                        In</a>

                                                    @if (Route::has('register'))
                                                        <a class="headers_link" href="{{ route('register') }}"
                                                            class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                                                    @endif
                                                @endauth
                                            </div>
                                        @endif
                                    </div>
                                </div>
                            </nav>
                        </div>
                        <!-- Mobile Menu  -->
                        <div class="mobile__menu">
                            <nav class="menu__box">
                                <div class="close__btn"><i class="fal fa-times"></i></div>
                                <div class="nav-logo">
                                    <a href="index.html" class="logo__black"><img src="assets/img/logo/logo_black.png"
                                            alt=""></a>
                                    <a href="index.html" class="logo__white"><img src="assets/img/logo/logo_white.png"
                                            alt=""></a>
                                </div>
                                <div class="menu__outer">
                                    <!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->
                                </div>
                                <div class="social-links">
                                    <ul class="clearfix">
                                        <li><a href="#"><span class="fab fa-twitter"></span></a></li>
                                        <li><a href="#"><span class="fab fa-facebook-square"></span></a></li>
                                        <li><a href="#"><span class="fab fa-pinterest-p"></span></a></li>
                                        <li><a href="#"><span class="fab fa-instagram"></span></a></li>
                                        <li><a href="#"><span class="fab fa-youtube"></span></a></li>
                                    </ul>
                                </div>
                            </nav>
                        </div>
                        <div class="menu__backdrop"></div>
                        <!-- End Mobile Menu -->
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- header-area-end -->
