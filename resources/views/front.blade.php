@extends('frontPages.layouts.app', ['phone' => $contactDetails->phone, 'address' => $contactDetails->address, 'email => $contactDetails->email', 'main_title' => $mainService->main_title])
@section('content')
    <!-- main-area -->
    <main>

        <!-- banner-area -->
        <section class="banner">
            <div class="container custom-container">
                <div class="row first_section">
                    <div class="col-lg-6 order-0 order-lg-2 first_sectionWest">
                        <div class="banner__img text-center text-xxl-end">
                            <img src="{{ asset('uploads/homeSlider/' . $showData->panner) }}" alt="">
                        </div>
                    </div>
                    <div class="col-xl-5 col-lg-12 first_sectionEast">
                        <div class="banner__content">
                            <h2 class="title wow fadeInUp" data-wow-delay=".2s">{{ $showData->title }}<span>
                                    {{ $showData->sub_title }}</span>
                                {{-- <br> --}}

                            </h2>
                            <p class="wow fadeInUp" data-wow-delay=".4s">{{ $showData->title_desc }}</p>
                            <a href="{{ url('about') }}"
                                class="btn banner__btn wow btn_first">{{ $showData->btn_text }}</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="scroll__down">
                <a href="#aboutSection" class="scroll__link">Scroll down</a>
            </div>
            <div class="banner__video">
                <a href='{{ asset("uploads/homeSlider/$showData->scetion_video") }}' class="popup-video"><i
                        class="fas fa-play"></i></a>
            </div>
        </section>
        <!-- banner-area-end -->

        <!-- about-area -->
        <section id="aboutSection" class="about">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 main_icons exterior_icons">
                        <ul class="about__icons__wrap about_icons">
                            @foreach ($Gallery as $singleGallery)
                                <li>
                                    <img class="light" src="{{ asset('uploads/icons/' . $singleGallery->icon_image) }}"
                                        alt="ABOUT ICONS">
                                    <img class="dark" src="{{ asset('uploads/icons/' . $singleGallery->icon_image) }}"
                                        alt="ABOUT ICONS">
                                </li>
                            @endforeach
                        </ul>
                    </div>
                    <div class="col-lg-6 main_icons interior_icons">
                        <div class="about__content">
                            <div class="section__title">
                                <span class="sub-title">01 - Info About</span>
                                <h2 class="title">{{ $aboutData->title }}</h2>
                            </div>
                            <div class="about__exp">
                                <div class="about__exp__icon">
                                    <img src="{{ asset('frontDesign/img/icons/about02.png') }}" alt="">
                                </div>
                                <div class="about__exp__content">
                                    <p>{{ $aboutData->about_favorite }}</p>
                                </div>
                            </div>
                            <p class="desc">{{ $aboutData->about_desc }}</p>
                            <a href="{{ asset('uploads/resume/' . $aboutData->resume) }}" class="btn"
                                download>{{ $aboutData->btn_text }}</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- about-area-end -->

        <!-- services-area -->
        <section class="services">
            <div class="container">
                <div class="services__title__wrap">
                    <div class="row align-items-center justify-content-between">
                        <div class="col-xl-7 col-lg-6 col-md-8">
                            <div class="section__title">
                                <span class="sub-title">02 - my Services</span>
                                <h2 class="title">{{ $mainService->main_title }}</h2>
                            </div>
                        </div>
                        <div class="col-xl-5 col-lg-6 col-md-4">
                            <div class="services__arrow"></div>
                        </div>
                    </div>
                </div>
                <div class="row gx-0 services__active">
                    @foreach ($serviceData as $singleSer)
                        <div class="col-xl-3">
                            <div class="services__item">
                                <div class="services__thumb">
                                    <a href="services-details.html"><img
                                            src="{{ asset('uploads/services/' . $singleSer->service_image) }}"
                                            alt="Service_Image"></a>
                                </div>
                                <div class="services__content">
                                    <div class="services__icon">
                                        <img class="light" src="{{ asset('uploads/services/' . $singleSer->icon_image) }}"
                                            alt="Service_Icon">
                                        <img class="dark" src="{{ asset('uploads/services/' . $singleSer->icon_image) }}"
                                            alt="Service_Icon">
                                    </div>
                                    <h3 class="title"><a href="services-details.html">{{ $singleSer->name }}</a></h3>
                                    <div class="services_tab">
                                        {!! $singleSer->service_tab !!}
                                        {{-- <a href="services-details.html" class="btn border-btn service_btn">Read more</a> --}}
                                    </div>
                                    <a href="{{ url('services') }}" class="btn border-btn service_btn">Read more</a>
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>
        </section>
        <!-- services-area-end -->

        <!-- work-process-area -->
        <section class="work__process">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-6 col-lg-8">
                        <div class="section__title text-center">
                            <span class="sub-title">03 - Working Process</span>
                            <h2 class="title">A clear product design process is the basis of success</h2>
                        </div>
                    </div>
                </div>
                <div class="row work__process__wrap">
                    <div class="col">
                        <div class="work__process__item">
                            <span class="work__process_step">Step - 01</span>
                            <div class="work__process__icon">
                                <img class="light" src="{{ asset('frontDesign/img/icons/wp_light_icon01.png') }}"
                                    alt="">
                                <img class="dark" src="{{ asset('frontDesign/img/icons/wp_icon01.png') }}"
                                    alt="">
                            </div>
                            <div class="work__process__content">
                                <h4 class="title">Discover</h4>
                                <p>Initial ideas or inspiration & Establishment of user needs.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="work__process__item">
                            <span class="work__process_step">Step - 02</span>
                            <div class="work__process__icon">
                                <img class="light" src="{{ asset('frontDesign/img/icons/wp_light_icon02.png') }}"
                                    alt="">
                                <img class="dark" src="{{ asset('frontDesign/img/icons/wp_icon02.png') }}"
                                    alt="">
                            </div>
                            <div class="work__process__content">
                                <h4 class="title">Define</h4>
                                <p>Interpretation & Alignment of findings to project objectives.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="work__process__item">
                            <span class="work__process_step">Step - 03</span>
                            <div class="work__process__icon">
                                <img class="light" src="{{ asset('frontDesign/img/icons/wp_light_icon03.png') }}"
                                    alt="">
                                <img class="dark" src="{{ asset('frontDesign/img/icons/wp_icon03.png') }}"
                                    alt="">
                            </div>
                            <div class="work__process__content">
                                <h4 class="title">Develop</h4>
                                <p>Design-Led concept and Proposals hearted & assessed</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="work__process__item">
                            <span class="work__process_step">Step - 04</span>
                            <div class="work__process__icon">
                                <img class="light" src="{{ asset('frontDesign/img/icons/wp_light_icon04.png') }}"
                                    alt="">
                                <img class="dark" src="{{ asset('frontDesign/img/icons/wp_icon04.png') }}"
                                    alt="">
                            </div>
                            <div class="work__process__content">
                                <h4 class="title">Deliver</h4>
                                <p>Process outcomes finalised & Implemented</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- work-process-area-end -->

        <!-- portfolio-area -->
        <section class="portfolio">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-6 col-lg-8">
                        <div class="section__title text-center">
                            <span class="sub-title">04 - Portfolio</span>
                            <h2 class="title">All creative work</h2>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-xl-10 col-lg-12">
                        <ul class="nav nav-tabs portfolio__nav" id="portfolioTab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="all-tab" data-bs-toggle="tab"
                                    data-bs-target="#all" type="button" role="tab" aria-controls="all"
                                    aria-selected="true">All</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="website-tab" data-bs-toggle="tab" data-bs-target="#website"
                                    type="button" role="tab" aria-controls="website"
                                    aria-selected="false">website</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="apps-tab" data-bs-toggle="tab" data-bs-target="#apps"
                                    type="button" role="tab" aria-controls="apps" aria-selected="false">mobile
                                    apps</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="dashboard-tab" data-bs-toggle="tab"
                                    data-bs-target="#dashboard" type="button" role="tab" aria-controls="dashboard"
                                    aria-selected="false">Dashboard</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="landing-tab" data-bs-toggle="tab" data-bs-target="#landing"
                                    type="button" role="tab" aria-controls="landing" aria-selected="false">landing
                                    page</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="branding-tab" data-bs-toggle="tab"
                                    data-bs-target="#branding" type="button" role="tab" aria-controls="branding"
                                    aria-selected="false">Branding</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="graphic-tab" data-bs-toggle="tab" data-bs-target="#graphic"
                                    type="button" role="tab" aria-controls="graphic" aria-selected="false">Graphic
                                    Design</button>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="tab-content" id="portfolioTabContent">
                <div class="tab-pane show active" id="all" role="tabpanel" aria-labelledby="all-tab">
                    <div class="container">
                        <div class="row gx-0 justify-content-center">
                            <div class="col">
                                <div class="portfolio__active">
                                    <div class="portfolio__item">
                                        <div class="portfolio__thumb">
                                            <img src="{{ asset('frontDesign/img/portfolio/portfolio_img01.jpg') }}"
                                                alt="">
                                        </div>
                                        <div class="portfolio__overlay__content">
                                            <span>Apps Design</span>
                                            <h4 class="title"><a href="portfolio-details.html">Banking Management
                                                    System</a></h4>
                                            <a href="portfolio-details.html" class="link">Case Study</a>
                                        </div>
                                    </div>
                                    <div class="portfolio__item">
                                        <div class="portfolio__thumb">
                                            <img src="{{ asset('frontDesign/img/portfolio/portfolio_img02.jpg') }}"
                                                alt="">
                                        </div>
                                        <div class="portfolio__overlay__content">
                                            <span>Web Design</span>
                                            <h4 class="title"><a href="portfolio-details.html">Banking Management
                                                    System</a></h4>
                                            <a href="portfolio-details.html" class="link">Case Study</a>
                                        </div>
                                    </div>
                                    <div class="portfolio__item">
                                        <div class="portfolio__thumb">
                                            <img src="{{ asset('frontDesign/img/portfolio/portfolio_img03.jpg') }}"
                                                alt="">
                                        </div>
                                        <div class="portfolio__overlay__content">
                                            <span>UX/UI Design</span>
                                            <h4 class="title"><a href="portfolio-details.html">Banking Management
                                                    System</a></h4>
                                            <a href="portfolio-details.html" class="link">Case Study</a>
                                        </div>
                                    </div>
                                    <div class="portfolio__item">
                                        <div class="portfolio__thumb">
                                            <img src="{{ asset('frontDesign/img/portfolio/portfolio_img04.jpg') }}"
                                                alt="">
                                        </div>
                                        <div class="portfolio__overlay__content">
                                            <span>Web Development</span>
                                            <h4 class="title"><a href="portfolio-details.html">Banking Management
                                                    System</a></h4>
                                            <a href="portfolio-details.html" class="link">Case Study</a>
                                        </div>
                                    </div>
                                    <div class="portfolio__item">
                                        <div class="portfolio__thumb">
                                            <img src="{{ asset('frontDesign/img/portfolio/portfolio_img05.jpg') }}"
                                                alt="">
                                        </div>
                                        <div class="portfolio__overlay__content">
                                            <span>Web Development</span>
                                            <h4 class="title"><a href="portfolio-details.html">Banking Management
                                                    System</a></h4>
                                            <a href="portfolio-details.html" class="link">Case Study</a>
                                        </div>
                                    </div>
                                    <div class="portfolio__item">
                                        <div class="portfolio__thumb">
                                            <img src="{{ asset('frontDesign/img/portfolio/portfolio_img06.jpg') }}"
                                                alt="">
                                        </div>
                                        <div class="portfolio__overlay__content">
                                            <span>Web Development</span>
                                            <h4 class="title"><a href="portfolio-details.html">Banking Management
                                                    System</a></h4>
                                            <a href="portfolio-details.html" class="link">Case Study</a>
                                        </div>
                                    </div>
                                    <div class="portfolio__item">
                                        <div class="portfolio__thumb">
                                            <img src="{{ asset('frontDesign/img/portfolio/portfolio_img07.jpg') }}"
                                                alt="">
                                        </div>
                                        <div class="portfolio__overlay__content">
                                            <span>Web Development</span>
                                            <h4 class="title"><a href="portfolio-details.html">Banking Management
                                                    System</a></h4>
                                            <a href="portfolio-details.html" class="link">Case Study</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane" id="website" role="tabpanel" aria-labelledby="website-tab">
                    <div class="container">
                        <div class="row gx-0 justify-content-center">
                            <div class="col">
                                <div class="portfolio__active">
                                    <div class="portfolio__item">
                                        <div class="portfolio__thumb">
                                            <img src="{{ asset('frontDesign/img/portfolio/portfolio_img07.jpg') }}"
                                                alt="">
                                        </div>
                                        <div class="portfolio__overlay__content">
                                            <span>Web Development</span>
                                            <h4 class="title"><a href="portfolio-details.html">Nature of Business
                                                    Strategy System</a></h4>
                                            <a href="portfolio-details.html" class="link">Case Study</a>
                                        </div>
                                    </div>
                                    <div class="portfolio__item">
                                        <div class="portfolio__thumb">
                                            <img src="{{ asset('frontDesign/img/portfolio/portfolio_img06.jpg') }}"
                                                alt="">
                                        </div>
                                        <div class="portfolio__overlay__content">
                                            <span>Web Development</span>
                                            <h4 class="title"><a href="portfolio-details.html">Banking Management
                                                    System</a></h4>
                                            <a href="portfolio-details.html" class="link">Case Study</a>
                                        </div>
                                    </div>
                                    <div class="portfolio__item">
                                        <div class="portfolio__thumb">
                                            <img src="{{ asset('frontDesign/img/portfolio/portfolio_img01.jpg') }}"
                                                alt="">
                                        </div>
                                        <div class="portfolio__overlay__content">
                                            <span>Apps Design</span>
                                            <h4 class="title"><a href="portfolio-details.html">Banking Management
                                                    System</a></h4>
                                            <a href="portfolio-details.html" class="link">Case Study</a>
                                        </div>
                                    </div>
                                    <div class="portfolio__item">
                                        <div class="portfolio__thumb">
                                            <img src="{{ asset('frontDesign/img/portfolio/portfolio_img02.jpg') }}"
                                                alt="">
                                        </div>
                                        <div class="portfolio__overlay__content">
                                            <span>Web Design</span>
                                            <h4 class="title"><a href="portfolio-details.html">Banking Management
                                                    System</a></h4>
                                            <a href="portfolio-details.html" class="link">Case Study</a>
                                        </div>
                                    </div>
                                    <div class="portfolio__item">
                                        <div class="portfolio__thumb">
                                            <img src="{{ asset('frontDesign/img/portfolio/portfolio_img03.jpg') }}"
                                                alt="">
                                        </div>
                                        <div class="portfolio__overlay__content">
                                            <span>UX/UI Design</span>
                                            <h4 class="title"><a href="portfolio-details.html">Banking Management
                                                    System</a></h4>
                                            <a href="portfolio-details.html" class="link">Case Study</a>
                                        </div>
                                    </div>
                                    <div class="portfolio__item">
                                        <div class="portfolio__thumb">
                                            <img src="{{ asset('frontDesign/img/portfolio/portfolio_img04.jpg') }}"
                                                alt="">
                                        </div>
                                        <div class="portfolio__overlay__content">
                                            <span>Web Development</span>
                                            <h4 class="title"><a href="portfolio-details.html">Banking Management
                                                    System</a></h4>
                                            <a href="portfolio-details.html" class="link">Case Study</a>
                                        </div>
                                    </div>
                                    <div class="portfolio__item">
                                        <div class="portfolio__thumb">
                                            <img src="{{ asset('frontDesign/img/portfolio/portfolio_img05.jpg') }}"
                                                alt="">
                                        </div>
                                        <div class="portfolio__overlay__content">
                                            <span>Web Development</span>
                                            <h4 class="title"><a href="portfolio-details.html">Banking Management
                                                    System</a></h4>
                                            <a href="portfolio-details.html" class="link">Case Study</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane" id="apps" role="tabpanel" aria-labelledby="apps-tab">
                    <div class="container">
                        <div class="row gx-0 justify-content-center">
                            <div class="col">
                                <div class="portfolio__active">
                                    <div class="portfolio__item">
                                        <div class="portfolio__thumb">
                                            <img src="{{ asset('frontDesign/img/portfolio/portfolio_img06.jpg') }}"
                                                alt="">
                                        </div>
                                        <div class="portfolio__overlay__content">
                                            <span>Web Development</span>
                                            <h4 class="title"><a href="portfolio-details.html">Product Design and
                                                    Development</a></h4>
                                            <a href="portfolio-details.html" class="link">Case Study</a>
                                        </div>
                                    </div>
                                    <div class="portfolio__item">
                                        <div class="portfolio__thumb">
                                            <img src="{{ asset('frontDesign/img/portfolio/portfolio_img01.jpg') }}"
                                                alt="">
                                        </div>
                                        <div class="portfolio__overlay__content">
                                            <span>Apps Design</span>
                                            <h4 class="title"><a href="portfolio-details.html">Banking Management
                                                    System</a></h4>
                                            <a href="portfolio-details.html" class="link">Case Study</a>
                                        </div>
                                    </div>
                                    <div class="portfolio__item">
                                        <div class="portfolio__thumb">
                                            <img src="{{ asset('frontDesign/img/portfolio/portfolio_img02.jpg') }}"
                                                alt="">
                                        </div>
                                        <div class="portfolio__overlay__content">
                                            <span>Web Design</span>
                                            <h4 class="title"><a href="portfolio-details.html">Banking Management
                                                    System</a></h4>
                                            <a href="portfolio-details.html" class="link">Case Study</a>
                                        </div>
                                    </div>
                                    <div class="portfolio__item">
                                        <div class="portfolio__thumb">
                                            <img src="{{ asset('frontDesign/img/portfolio/portfolio_img03.jpg') }}"
                                                alt="">
                                        </div>
                                        <div class="portfolio__overlay__content">
                                            <span>UX/UI Design</span>
                                            <h4 class="title"><a href="portfolio-details.html">Banking Management
                                                    System</a></h4>
                                            <a href="portfolio-details.html" class="link">Case Study</a>
                                        </div>
                                    </div>
                                    <div class="portfolio__item">
                                        <div class="portfolio__thumb">
                                            <img src="{{ asset('frontDesign/img/portfolio/portfolio_img04.jpg') }}"
                                                alt="">
                                        </div>
                                        <div class="portfolio__overlay__content">
                                            <span>Web Development</span>
                                            <h4 class="title"><a href="portfolio-details.html">Banking Management
                                                    System</a></h4>
                                            <a href="portfolio-details.html" class="link">Case Study</a>
                                        </div>
                                    </div>
                                    <div class="portfolio__item">
                                        <div class="portfolio__thumb">
                                            <img src="{{ asset('frontDesign/img/portfolio/portfolio_img05.jpg') }}"
                                                alt="">
                                        </div>
                                        <div class="portfolio__overlay__content">
                                            <span>Web Development</span>
                                            <h4 class="title"><a href="portfolio-details.html">Banking Management
                                                    System</a></h4>
                                            <a href="portfolio-details.html" class="link">Case Study</a>
                                        </div>
                                    </div>
                                    <div class="portfolio__item">
                                        <div class="portfolio__thumb">
                                            <img src="{{ asset('frontDesign/img/portfolio/portfolio_img07.jpg') }}"
                                                alt="">
                                        </div>
                                        <div class="portfolio__overlay__content">
                                            <span>Web Development</span>
                                            <h4 class="title"><a href="portfolio-details.html">Banking Management
                                                    System</a></h4>
                                            <a href="portfolio-details.html" class="link">Case Study</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane" id="dashboard" role="tabpanel" aria-labelledby="dashboard-tab">
                    <div class="container">
                        <div class="row gx-0 justify-content-center">
                            <div class="col">
                                <div class="portfolio__active">
                                    <div class="portfolio__item">
                                        <div class="portfolio__thumb">
                                            <img src="{{ asset('frontDesign/img/portfolio/portfolio_img05.jpg') }}"
                                                alt="">
                                        </div>
                                        <div class="portfolio__overlay__content">
                                            <span>Web Development</span>
                                            <h4 class="title"><a href="portfolio-details.html">Brand strategy System
                                                    Management</a></h4>
                                            <a href="portfolio-details.html" class="link">Case Study</a>
                                        </div>
                                    </div>
                                    <div class="portfolio__item">
                                        <div class="portfolio__thumb">
                                            <img src="{{ asset('frontDesign/img/portfolio/portfolio_img01.jpg') }}"
                                                alt="">
                                        </div>
                                        <div class="portfolio__overlay__content">
                                            <span>Apps Design</span>
                                            <h4 class="title"><a href="portfolio-details.html">Banking Management
                                                    System</a></h4>
                                            <a href="portfolio-details.html" class="link">Case Study</a>
                                        </div>
                                    </div>
                                    <div class="portfolio__item">
                                        <div class="portfolio__thumb">
                                            <img src="{{ asset('frontDesign/img/portfolio/portfolio_img02.jpg') }}"
                                                alt="">
                                        </div>
                                        <div class="portfolio__overlay__content">
                                            <span>Web Design</span>
                                            <h4 class="title"><a href="portfolio-details.html">Banking Management
                                                    System</a></h4>
                                            <a href="portfolio-details.html" class="link">Case Study</a>
                                        </div>
                                    </div>
                                    <div class="portfolio__item">
                                        <div class="portfolio__thumb">
                                            <img src="{{ asset('frontDesign/img/portfolio/portfolio_img03.jpg') }}"
                                                alt="">
                                        </div>
                                        <div class="portfolio__overlay__content">
                                            <span>UX/UI Design</span>
                                            <h4 class="title"><a href="portfolio-details.html">Banking Management
                                                    System</a></h4>
                                            <a href="portfolio-details.html" class="link">Case Study</a>
                                        </div>
                                    </div>
                                    <div class="portfolio__item">
                                        <div class="portfolio__thumb">
                                            <img src="{{ asset('frontDesign/img/portfolio/portfolio_img04.jpg') }}"
                                                alt="">
                                        </div>
                                        <div class="portfolio__overlay__content">
                                            <span>Web Development</span>
                                            <h4 class="title"><a href="portfolio-details.html">Banking Management
                                                    System</a></h4>
                                            <a href="portfolio-details.html" class="link">Case Study</a>
                                        </div>
                                    </div>
                                    <div class="portfolio__item">
                                        <div class="portfolio__thumb">
                                            <img src="{{ asset('frontDesign/img/portfolio/portfolio_img06.jpg') }}"
                                                alt="">
                                        </div>
                                        <div class="portfolio__overlay__content">
                                            <span>Web Development</span>
                                            <h4 class="title"><a href="portfolio-details.html">Banking Management
                                                    System</a></h4>
                                            <a href="portfolio-details.html" class="link">Case Study</a>
                                        </div>
                                    </div>
                                    <div class="portfolio__item">
                                        <div class="portfolio__thumb">
                                            <img src="{{ asset('frontDesign/img/portfolio/portfolio_img07.jpg') }}"
                                                alt="">
                                        </div>
                                        <div class="portfolio__overlay__content">
                                            <span>Web Development</span>
                                            <h4 class="title"><a href="portfolio-details.html">Banking Management
                                                    System</a></h4>
                                            <a href="portfolio-details.html" class="link">Case Study</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane" id="landing" role="tabpanel" aria-labelledby="landing-tab">
                    <div class="container">
                        <div class="row gx-0 justify-content-center">
                            <div class="col">
                                <div class="portfolio__active">
                                    <div class="portfolio__item">
                                        <div class="portfolio__thumb">
                                            <img src="{{ asset('frontDesign/img/portfolio/portfolio_img04.jpg') }}"
                                                alt="">
                                        </div>
                                        <div class="portfolio__overlay__content">
                                            <span>Web Development</span>
                                            <h4 class="title"><a href="portfolio-details.html">Visual Design System
                                                    Management</a></h4>
                                            <a href="portfolio-details.html" class="link">Case Study</a>
                                        </div>
                                    </div>
                                    <div class="portfolio__item">
                                        <div class="portfolio__thumb">
                                            <img src="{{ asset('frontDesign/img/portfolio/portfolio_img01.jpg') }}"
                                                alt="">
                                        </div>
                                        <div class="portfolio__overlay__content">
                                            <span>Apps Design</span>
                                            <h4 class="title"><a href="portfolio-details.html">Banking Management
                                                    System</a></h4>
                                            <a href="portfolio-details.html" class="link">Case Study</a>
                                        </div>
                                    </div>
                                    <div class="portfolio__item">
                                        <div class="portfolio__thumb">
                                            <img src="{{ asset('frontDesign/img/portfolio/portfolio_img02.jpg') }}"
                                                alt="">
                                        </div>
                                        <div class="portfolio__overlay__content">
                                            <span>Web Design</span>
                                            <h4 class="title"><a href="portfolio-details.html">Banking Management
                                                    System</a></h4>
                                            <a href="portfolio-details.html" class="link">Case Study</a>
                                        </div>
                                    </div>
                                    <div class="portfolio__item">
                                        <div class="portfolio__thumb">
                                            <img src="{{ asset('frontDesign/img/portfolio/portfolio_img03.jpg') }}"
                                                alt="">
                                        </div>
                                        <div class="portfolio__overlay__content">
                                            <span>UX/UI Design</span>
                                            <h4 class="title"><a href="portfolio-details.html">Banking Management
                                                    System</a></h4>
                                            <a href="portfolio-details.html" class="link">Case Study</a>
                                        </div>
                                    </div>
                                    <div class="portfolio__item">
                                        <div class="portfolio__thumb">
                                            <img src="{{ asset('frontDesign/img/portfolio/portfolio_img05.jpg') }}"
                                                alt="">
                                        </div>
                                        <div class="portfolio__overlay__content">
                                            <span>Web Development</span>
                                            <h4 class="title"><a href="portfolio-details.html">Banking Management
                                                    System</a></h4>
                                            <a href="portfolio-details.html" class="link">Case Study</a>
                                        </div>
                                    </div>
                                    <div class="portfolio__item">
                                        <div class="portfolio__thumb">
                                            <img src="{{ asset('frontDesign/img/portfolio/portfolio_img06.jpg') }}"
                                                alt="">
                                        </div>
                                        <div class="portfolio__overlay__content">
                                            <span>Web Development</span>
                                            <h4 class="title"><a href="portfolio-details.html">Banking Management
                                                    System</a></h4>
                                            <a href="portfolio-details.html" class="link">Case Study</a>
                                        </div>
                                    </div>
                                    <div class="portfolio__item">
                                        <div class="portfolio__thumb">
                                            <img src="{{ asset('frontDesign/img/portfolio/portfolio_img07.jpg') }}"
                                                alt="">
                                        </div>
                                        <div class="portfolio__overlay__content">
                                            <span>Web Development</span>
                                            <h4 class="title"><a href="portfolio-details.html">Banking Management
                                                    System</a></h4>
                                            <a href="portfolio-details.html" class="link">Case Study</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane" id="branding" role="tabpanel" aria-labelledby="branding-tab">
                    <div class="container">
                        <div class="row gx-0 justify-content-center">
                            <div class="col">
                                <div class="portfolio__active">
                                    <div class="portfolio__item">
                                        <div class="portfolio__thumb">
                                            <img src="{{ asset('frontDesign/img/portfolio/portfolio_img03.jpg') }}"
                                                alt="">
                                        </div>
                                        <div class="portfolio__overlay__content">
                                            <span>UX/UI Design</span>
                                            <h4 class="title"><a href="portfolio-details.html">Animation Management
                                                    System</a></h4>
                                            <a href="portfolio-details.html" class="link">Case Study</a>
                                        </div>
                                    </div>
                                    <div class="portfolio__item">
                                        <div class="portfolio__thumb">
                                            <img src="{{ asset('frontDesign/img/portfolio/portfolio_img01.jpg') }}"
                                                alt="">
                                        </div>
                                        <div class="portfolio__overlay__content">
                                            <span>Apps Design</span>
                                            <h4 class="title"><a href="portfolio-details.html">Banking Management
                                                    System</a></h4>
                                            <a href="portfolio-details.html" class="link">Case Study</a>
                                        </div>
                                    </div>
                                    <div class="portfolio__item">
                                        <div class="portfolio__thumb">
                                            <img src="{{ asset('frontDesign/img/portfolio/portfolio_img02.jpg') }}"
                                                alt="">
                                        </div>
                                        <div class="portfolio__overlay__content">
                                            <span>Web Design</span>
                                            <h4 class="title"><a href="portfolio-details.html">Banking Management
                                                    System</a></h4>
                                            <a href="portfolio-details.html" class="link">Case Study</a>
                                        </div>
                                    </div>
                                    <div class="portfolio__item">
                                        <div class="portfolio__thumb">
                                            <img src="{{ asset('frontDesign/img/portfolio/portfolio_img04.jpg') }}"
                                                alt="">
                                        </div>
                                        <div class="portfolio__overlay__content">
                                            <span>Web Development</span>
                                            <h4 class="title"><a href="portfolio-details.html">Banking Management
                                                    System</a></h4>
                                            <a href="portfolio-details.html" class="link">Case Study</a>
                                        </div>
                                    </div>
                                    <div class="portfolio__item">
                                        <div class="portfolio__thumb">
                                            <img src="{{ asset('frontDesign/img/portfolio/portfolio_img05.jpg') }}"
                                                alt="">
                                        </div>
                                        <div class="portfolio__overlay__content">
                                            <span>Web Development</span>
                                            <h4 class="title"><a href="portfolio-details.html">Banking Management
                                                    System</a></h4>
                                            <a href="portfolio-details.html" class="link">Case Study</a>
                                        </div>
                                    </div>
                                    <div class="portfolio__item">
                                        <div class="portfolio__thumb">
                                            <img src="{{ asset('frontDesign/img/portfolio/portfolio_img06.jpg') }}"
                                                alt="">
                                        </div>
                                        <div class="portfolio__overlay__content">
                                            <span>Web Development</span>
                                            <h4 class="title"><a href="portfolio-details.html">Banking Management
                                                    System</a></h4>
                                            <a href="portfolio-details.html" class="link">Case Study</a>
                                        </div>
                                    </div>
                                    <div class="portfolio__item">
                                        <div class="portfolio__thumb">
                                            <img src="{{ asset('frontDesign/img/portfolio/portfolio_img07.jpg') }}"
                                                alt="">
                                        </div>
                                        <div class="portfolio__overlay__content">
                                            <span>Web Development</span>
                                            <h4 class="title"><a href="portfolio-details.html">Banking Management
                                                    System</a></h4>
                                            <a href="portfolio-details.html" class="link">Case Study</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane" id="graphic" role="tabpanel" aria-labelledby="graphic-tab">
                    <div class="container">
                        <div class="row gx-0 justify-content-center">
                            <div class="col">
                                <div class="portfolio__active">
                                    <div class="portfolio__item">
                                        <div class="portfolio__thumb">
                                            <img src="{{ asset('frontDesign/img/portfolio/portfolio_img02.jpg') }}"
                                                alt="">
                                        </div>
                                        <div class="portfolio__overlay__content">
                                            <span>Web Design</span>
                                            <h4 class="title"><a href="portfolio-details.html">Graphic Design Management
                                                    System</a></h4>
                                            <a href="portfolio-details.html" class="link">Case Study</a>
                                        </div>
                                    </div>
                                    <div class="portfolio__item">
                                        <div class="portfolio__thumb">
                                            <img src="{{ asset('frontDesign/img/portfolio/portfolio_img01.jpg') }}"
                                                alt="">
                                        </div>
                                        <div class="portfolio__overlay__content">
                                            <span>Apps Design</span>
                                            <h4 class="title"><a href="portfolio-details.html">Banking Management
                                                    System</a></h4>
                                            <a href="portfolio-details.html" class="link">Case Study</a>
                                        </div>
                                    </div>
                                    <div class="portfolio__item">
                                        <div class="portfolio__thumb">
                                            <img src="{{ asset('frontDesign/img/portfolio/portfolio_img03.jpg') }}"
                                                alt="">
                                        </div>
                                        <div class="portfolio__overlay__content">
                                            <span>UX/UI Design</span>
                                            <h4 class="title"><a href="portfolio-details.html">Banking Management
                                                    System</a></h4>
                                            <a href="portfolio-details.html" class="link">Case Study</a>
                                        </div>
                                    </div>
                                    <div class="portfolio__item">
                                        <div class="portfolio__thumb">
                                            <img src="{{ asset('frontDesign/img/portfolio/portfolio_img04.jpg') }}"
                                                alt="">
                                        </div>
                                        <div class="portfolio__overlay__content">
                                            <span>Web Development</span>
                                            <h4 class="title"><a href="portfolio-details.html">Banking Management
                                                    System</a></h4>
                                            <a href="portfolio-details.html" class="link">Case Study</a>
                                        </div>
                                    </div>
                                    <div class="portfolio__item">
                                        <div class="portfolio__thumb">
                                            <img src="{{ asset('frontDesign/img/portfolio/portfolio_img05.jpg') }}"
                                                alt="">
                                        </div>
                                        <div class="portfolio__overlay__content">
                                            <span>Web Development</span>
                                            <h4 class="title"><a href="portfolio-details.html">Banking Management
                                                    System</a></h4>
                                            <a href="portfolio-details.html" class="link">Case Study</a>
                                        </div>
                                    </div>
                                    <div class="portfolio__item">
                                        <div class="portfolio__thumb">
                                            <img src="{{ asset('frontDesign/img/portfolio/portfolio_img06.jpg') }}"
                                                alt="">
                                        </div>
                                        <div class="portfolio__overlay__content">
                                            <span>Web Development</span>
                                            <h4 class="title"><a href="portfolio-details.html">Banking Management
                                                    System</a></h4>
                                            <a href="portfolio-details.html" class="link">Case Study</a>
                                        </div>
                                    </div>
                                    <div class="portfolio__item">
                                        <div class="portfolio__thumb">
                                            <img src="{{ asset('frontDesign/img/portfolio/portfolio_img07.jpg') }}"
                                                alt="">
                                        </div>
                                        <div class="portfolio__overlay__content">
                                            <span>Web Development</span>
                                            <h4 class="title"><a href="portfolio-details.html">Banking Management
                                                    System</a></h4>
                                            <a href="portfolio-details.html" class="link">Case Study</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- portfolio-area-end -->

        <!-- partner-area -->
        <section class="partner">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <ul class="partner__logo__wrap">
                            <li>
                                <img class="light" src="{{ asset('frontDesign/img/icons/partner_light01.png') }}"
                                    alt="">
                                <img class="dark" src="{{ asset('frontDesign/img/icons/partner_01.png') }}"
                                    alt="">
                            </li>
                            <li>
                                <img class="light" src="{{ asset('frontDesign/img/icons/partner_light02.png') }}"
                                    alt="">
                                <img class="dark" src="{{ asset('frontDesign/img/icons/partner_02.png') }}"
                                    alt="">
                            </li>
                            <li>
                                <img class="light" src="{{ asset('frontDesign/img/icons/partner_light03.png') }}"
                                    alt="">
                                <img class="dark" src="{{ asset('frontDesign/img/icons/partner_03.png') }}"
                                    alt="">
                            </li>
                            <li>
                                <img class="light" src="{{ asset('frontDesign/img/icons/partner_light04.png') }}"
                                    alt="">
                                <img class="dark" src="{{ asset('frontDesign/img/icons/partner_04.png') }}"
                                    alt="">
                            </li>
                            <li>
                                <img class="light" src="{{ asset('frontDesign/img/icons/partner_light05.png') }}"
                                    alt="">
                                <img class="dark" src="{{ asset('frontDesign/img/icons/partner_05.png') }}"
                                    alt="">
                            </li>
                            <li>
                                <img class="light" src="{{ asset('frontDesign/img/icons/partner_light06.png') }}"
                                    alt="">
                                <img class="dark" src="{{ asset('frontDesign/img/icons/partner_06.png') }}"
                                    alt="">
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-6">
                        <div class="partner__content">
                            <div class="section__title">
                                <span class="sub-title">05 - partners</span>
                                <h2 class="title">I proud to have collaborated with some awesome companies</h2>
                            </div>
                            <p>I'm a bit of a digital product junky. Over the years, I've used hundreds of web and mobile
                                apps in different industries and verticals. Eventually, I decided that it would be a fun
                                challenge to try designing and building my own.</p>
                            <a href="contact.html" class="btn">Start a conversation</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- partner-area-end -->

        <!-- testimonial-area -->
        <section class="testimonial">
            <div class="container">
                <div class="row align-items-center justify-content-between">
                    <div class="col-lg-6 order-0 order-lg-2">
                        <ul class="testimonial__avatar__img">
                            <li><img src="{{ asset('frontDesign/img/images/testi_img01.png') }}" alt=""></li>
                            <li><img src="{{ asset('frontDesign/img/images/testi_img02.png') }}" alt=""></li>
                            <li><img src="{{ asset('frontDesign/img/images/testi_img03.png') }}" alt=""></li>
                            <li><img src="{{ asset('frontDesign/img/images/testi_img04.png') }}" alt=""></li>
                            <li><img src="{{ asset('frontDesign/img/images/testi_img05.png') }}" alt=""></li>
                            <li><img src="{{ asset('frontDesign/img/images/testi_img06.png') }}" alt=""></li>
                            <li><img src="{{ asset('frontDesign/img/images/testi_img07.png') }}" alt=""></li>
                        </ul>
                    </div>
                    <div class="col-xl-5 col-lg-6">
                        <div class="testimonial__wrap">
                            <div class="section__title">
                                <span class="sub-title">06 - Client Feedback</span>
                                <h2 class="title">Happy clients feedback</h2>
                            </div>
                            <div class="testimonial__active">
                                <div class="testimonial__item">
                                    <div class="testimonial__icon">
                                        <i class="fas fa-quote-left"></i>
                                    </div>
                                    <div class="testimonial__content">
                                        <p>We are motivated by the satisfaction of our clients. Put your trust in us &share
                                            in our H.Spond Asset Management is made up of a team of expert, committed and
                                            experienced people with a passion for financial markets. Our goal is to achieve
                                            continuous.</p>
                                        <div class="testimonial__avatar">
                                            <span>Rasalina De Wiliamson</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="testimonial__item">
                                    <div class="testimonial__icon">
                                        <i class="fas fa-quote-left"></i>
                                    </div>
                                    <div class="testimonial__content">
                                        <p>We are motivated by the satisfaction of our clients. Put your trust in us &share
                                            in our H.Spond Asset Management is made up of a team of expert, committed and
                                            experienced people with a passion for financial markets. Our goal is to achieve
                                            continuous.</p>
                                        <div class="testimonial__avatar">
                                            <span>Rasalina De Wiliamson</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="testimonial__arrow"></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- testimonial-area-end -->

        <!-- blog-area -->
        <section class="blog">
            <div class="container">
                <div class="row gx-0 justify-content-center">
                    <div class="col-lg-4 col-md-6 col-sm-9">
                        <div class="blog__post__item">
                            <div class="blog__post__thumb">
                                <a href="blog-details.html"><img
                                        src="{{ asset('frontDesign/img/blog/blog_post_thumb01.jpg') }}"
                                        alt=""></a>
                                <div class="blog__post__tags">
                                    <a href="blog.html">Story</a>
                                </div>
                            </div>
                            <div class="blog__post__content">
                                <span class="date">13 january 2021</span>
                                <h3 class="title"><a href="blog-details.html">Facebook design is dedicated to what's new
                                        in design</a></h3>
                                <a href="blog-details.html" class="read__more">Read mORe</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-9">
                        <div class="blog__post__item">
                            <div class="blog__post__thumb">
                                <a href="blog-details.html"><img
                                        src="{{ asset('frontDesign/img/blog/blog_post_thumb02.jpg') }}"
                                        alt=""></a>
                                <div class="blog__post__tags">
                                    <a href="blog.html">Social</a>
                                </div>
                            </div>
                            <div class="blog__post__content">
                                <span class="date">13 january 2021</span>
                                <h3 class="title"><a href="blog-details.html">Make communication Fast and
                                        Effectively.</a></h3>
                                <a href="blog-details.html" class="read__more">Read mORe</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-9">
                        <div class="blog__post__item">
                            <div class="blog__post__thumb">
                                <a href="blog-details.html"><img
                                        src="{{ asset('frontDesign/img/blog/blog_post_thumb03.jpg') }}"
                                        alt=""></a>
                                <div class="blog__post__tags">
                                    <a href="blog.html">Work</a>
                                </div>
                            </div>
                            <div class="blog__post__content">
                                <span class="date">13 january 2021</span>
                                <h3 class="title"><a href="blog-details.html">How to increase your productivity at work -
                                        2021</a></h3>
                                <a href="blog-details.html" class="read__more">Read mORe</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="blog__button text-center">
                    <a href="blog.html" class="btn">more blog</a>
                </div>
            </div>
        </section>
        <!-- blog-area-end -->

        <!-- contact-area -->
        <section class="homeContact">
            <div class="container">
                <div class="homeContact__wrap">
                    @include('sweetalert::alert')
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="section__title">
                                <h2 class="title">Please Feel Free To Ask Me <br>Any questions?</h2>
                            </div>
                            <div class="homeContact__content">
                                <p>We Will Give You A Prompt Response And Answer Your Questions ASAP</p>
                                <h2 class="mail"><a
                                        href="mailto:{{ $contactDetails->email }}">{{ $contactDetails->email }}</a>
                                </h2>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="homeContact__form">
                                <form role="form" action="{{ route('front.store') }}" method="post">
                                    @csrf
                                    <input type="text" placeholder="Enter name*" name="name">
                                    @error('name')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                    <input type="email" placeholder="Enter mail*" name="email">
                                    @error('email')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                    <input type="number" placeholder="Enter Phone Number*" name="phone">
                                    @error('phone')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                    <textarea name="message" placeholder="Please Write A Question?" name="message"></textarea>
                                    @error('message')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                    <button type="submit">Send Details</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- contact-area-end -->

    </main>
    <!-- main-area-end -->
@endsection

@section('page_title', 'HomePage')

@section('page_style')
    <link rel="stylesheet" href="{{ asset('first/styles/frontHome.css') }}">
@endsection

@section('page_js')
    <script>
        /***********************************************************************************************************/
        // //**This Function  */
        const mainIcons = document.querySelectorAll(".main_icons");
        // console.log(mainIcons);
        window.addEventListener("scroll", check_animation);

        check_animation();

        function check_animation() {
            const trigger = (window.innerHeight / 6) * 4;

            mainIcons.forEach((mainIcon) => {
                const top = mainIcon.getBoundingClientRect().top;

                if (trigger > top) {
                    mainIcon.classList.add("show_content");
                } else {
                    mainIcon.classList.remove("show_content");
                }
            });
        }
    </script>

@endsection