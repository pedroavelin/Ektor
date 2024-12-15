@extends('layouts.main_layout')
@section('content')
    <div class="page-wrapper">

        <!-- Preloader -->
        <div class="preloader">
            <div class="icon"></div>
        </div>

        <!-- Main Header -->
        <header class="main-header header-style-one">

            <!-- Header Upper -->
            <div class="header-upper">
                <div class="inner-container clearfix">
                    <!--Logo-->
                    <div class="logo-box">
                        <div class="logo"><a href="{{ route('home')}}" title="Logo EKTON"><img
                                    src="{{ asset('assets/images/logo.png') }}" id="thm-logo" alt="LOGO EKTON"
                                    ></a></div>
                    </div>
                    <div class="nav-outer clearfix">
                        <!--Mobile Navigation Toggler-->
                        <div class="mobile-nav-toggler"><span class="icon flaticon-menu-2"></span><span
                                class="txt">Menu</span></div>

                        <!-- Main Menu -->
                        <nav class="main-menu navbar-expand-md navbar-light">
                            <div class="collapse navbar-collapse show clearfix" id="navbarSupportedContent">
                                <ul class="navigation clearfix">
                                    <li class="dropdown megamenu megamenu-clickable_x megamenu-clickable--toggler_x"><a
                                            href="{{ route('home')}}">Home</a>
                                    </li>
                                    <li class="dropdown">
                                        <a href="about.html">About Us</a>
                                        <ul>
                                            <li><a href="about-2.html">About Two </a></li>
                                            <li><a href="about-me.html">About Me </a></li>
                                            <li><a href="mission.html">Our Mission </a></li>
                                            <li><a href="history.html">Our History </a></li>
                                            <li class="dropdown">
                                                <a href="team.html">Our Team </a>
                                                <ul>
                                                    <li><a href="team.html">Team 01</a></li>
                                                    <li><a href="team-2.html">Team 02</a></li>
                                                    <li><a href="team-3.html">Team 03</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="process.html">Our Process </a></li>
                                            <li><a href="partners.html">Our Partner</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown"><a href="services.html">Services</a>
                                        <ul>
                                            <li><a href="services.html">All Services</a></li>
                                            <li><a href="services-2.html">Services Two</a></li>
                                            <li><a href="web-development.html">Website Development</a></li>
                                            <li><a href="graphic-designing.html">Graphic Designing</a></li>
                                            <li><a href="digital-marketing.html">Digital Marketing</a></li>
                                            <li><a href="seo.html">SEO & Content Writting</a></li>
                                            <li><a href="app-development.html">App Development</a></li>
                                            <li><a href="ui-designing.html">UI/UX Designing</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown"><a href="portfolio.html">Portfolio</a>
                                        <ul>
                                            <li><a href="portfolio.html">Portfolio</a></li>
                                            <li><a href="portfolio-2-columns.html">Portfolio 2 Col <span>new</span></a>
                                            </li>
                                            <li><a href="portfolio-4-columns.html">Portfolio 4 Col <span>new</span></a>
                                            </li>
                                            <li><a href="portfolio-masonary.html">Portfolio Masonary
                                                    <span>new</span></a></li>
                                            <li><a href="portfolio-single.html">Portfolio Single 01</a></li>
                                            <li><a href="portfolio-single-2.html">Portfolio Single 02</a></li>
                                            <li><a href="portfolio-single-3.html">Portfolio Single 03
                                                </a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown"><a href="blog-grid.html">Blog</a>
                                        <ul>
                                            <li><a href="blog.html">Blog Right Sidebar</a></li>
                                            <li><a href="blog-left.html">Blog Left Sidebar <span>new</span></a></li>
                                            <li><a href="blog-grid.html">Blog Grid View</a></li>
                                            <li><a href="blog-single.html">Blog Single</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown">
                                        <a href="contact.html">Contact</a>
                                        <ul>
                                            <li><a href="contact.html">Contact 01</a></li>
                                            <li><a href="contact-2.html">Contact 02 <span>New</span></a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </nav>
                    </div>

                    <div class="other-links clearfix">
                        <!--Search Btn-->
                        <div class="search-btn">
                            <button type="button" class="theme-btn search-toggler"><span
                                    class="flaticon-loupe"></span></button>
                        </div>
                        <div class="link-box">
                            <div class="call-us">
                                <a class="link" href="tel:6668880000">
                                    <span class="icon"></span>
                                    <span class="sub-text">Call Anytime</span>
                                    <span class="number">+1 (832)-302-8721</span>
                                </a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <!--End Header Upper-->

        </header>
        <!-- End Main Header -->

        <!--Mobile Menu-->
        <div class="side-menu__block">


            <div class="side-menu__block-overlay custom-cursor__overlay">
                <div class="cursor"></div>
                <div class="cursor-follower"></div>
            </div><!-- /.side-menu__block-overlay -->
            <div class="side-menu__block-inner ">
                <div class="side-menu__top justify-content-end">

                    <a href="#" class="side-menu__toggler side-menu__close-btn"><img
                            src="{{ asset('assets/images/icons/close-1-1.png')}} " alt=""></a>
                </div><!-- /.side-menu__top -->


                <nav class="mobile-nav__container">
                    <!-- content is loading via js -->
                </nav>
                <div class="side-menu__sep"></div><!-- /.side-menu__sep -->
                <div class="side-menu__content">
                    <p>Linoor is a premium Template for Digital Agencies, Start Ups, Small Business and a wide range of
                        other agencies.</p>
                    <p><a href="mailto:needhelp@linoor.com">needhelp@linoor.com</a> <br> <a href="tel:888-999-0000">888
                            999 0000</a></p>
                    <div class="side-menu__social">
                        <a href="#"><i class="fab fa-facebook-square"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-pinterest-p"></i></a>
                    </div>
                </div><!-- /.side-menu__content -->
            </div><!-- /.side-menu__block-inner -->
        </div><!-- /.side-menu__block -->

        <!--Search Popup-->
        <div class="search-popup">
            <div class="search-popup__overlay custom-cursor__overlay">
                <div class="cursor"></div>
                <div class="cursor-follower"></div>
            </div><!-- /.search-popup__overlay -->
            <div class="search-popup__inner">
                <form action="#" class="search-popup__form">
                    <input type="text" name="search" placeholder="Type here to Search....">
                    <button type="submit"><i class="fa fa-search"></i></button>
                </form>
            </div><!-- /.search-popup__inner -->
        </div><!-- /.search-popup -->


        <!-- Banner Section -->
        <section class="banner-section banner-one">

            <div class="left-based-text">
                <div class="base-inner">
                    <div class="hours">
                        <ul class="clearfix">
                            <li><span>mon - fri</span></li>
                            <li><span>9am - 7pm</span></li>
                        </ul>
                    </div>
                    <div class="social-links">
                        <ul class="clearfix">
                            <li><a href="#"><span>Twitter</span></a></li>
                            <li><a href="#"><span>Facebook</span></a></li>
                            <li><a href="#"><span>Youtube</span></a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="banner-carousel owl-theme owl-carousel">
                <!-- Slide Item -->
                <div class="slide-item">
                    <div class="image-layer" style="background-image: url({{ asset('assets/images/main-slider/bg_2.jpeg') }});"></div>
                    <div class="left-top-line"></div>
                    <div class="right-bottom-curve"></div>
                    <div class="right-top-curve"></div>
                    <div class="auto-container">
                        <div class="content-box">
                            <div class="content">
                                <div class="inner">
                                    <div class="sub-title">Ekton Project Analytics</div>
                                    <h1>Training and Coaching in Project Management, Project Planning</h1>
                                    <div class="link-box">
                                        <a class="theme-btn btn-style-one" href="about.html">
                                            <i class="btn-curve"></i>
                                            <span class="btn-title">Discover More</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Slide Item -->
                <div class="slide-item">
                    <div class="image-layer" style="background-image: url({{ asset('assets/images/main-slider/bg_3.jpeg') }});"></div>
                    <div class="left-top-line"></div>
                    <div class="right-bottom-curve"></div>
                    <div class="right-top-curve"></div>
                    <div class="auto-container">
                        <div class="content-box">
                            <div class="content">
                                <div class="inner">
                                    <div class="sub-title">Ekton Project Analytics</div>
                                    <h1>Control, Risk-based EVM, Last Planner System, and BI</h1>
                                    <div class="link-box">
                                        <a class="theme-btn btn-style-one" href="about.html">
                                            <i class="btn-curve"></i>
                                            <span class="btn-title">Discover More</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section>
        <!--End Banner Section -->

        <!--Services Section-->
        <section class="services-section">
            <div class="auto-container">
                <div class="row clearfix">
                    <!--Title Block-->
                    <div class="title-block col-xl-6 col-lg-12 col-md-12 col-sm-12">
                        <div class="inner">
                            <div class="sec-title">
                                <h2>Our Services<span class="dot">.</span></h2>
                                <div class="lower-text">Develop your project management and software skills with our tailored training programs.</div>
                            </div>
                        </div>
                    </div>

                    <!--Service Block-->
                    <div class="service-block col-xl-3 col-lg-6 col-md-6 col-sm-12 wow fadeInLeft" data-wow-delay="0ms"
                        data-wow-duration="1500ms">
                        <div class="inner-box">
                            <div class="bottom-curve"></div>
                            <div class="icon-box"><span class="flaticon-responsive"></span></div>
                            <h6><a href="web-development.html">Project Planning and <br> Control (PP&C)</a></h6>
                        </div>
                    </div>

                    <!--Service Block-->
                    <div class="service-block col-xl-3 col-lg-6 col-md-6 col-sm-12 wow fadeInLeft" data-wow-delay="300ms"
                        data-wow-duration="1500ms">
                        <div class="inner-box">
                            <div class="bottom-curve"></div>
                            <div class="icon-box"><span class="flaticon-computer"></span></div>
                            <h6><a href="graphic-designing.html">Integrated Cost and <br>Schedule Management (ICSM) </a></h6>
                        </div>
                    </div>

                    <!--Service Block-->
                    <div class="service-block col-xl-3 col-lg-6 col-md-6 col-sm-12 wow fadeInLeft" data-wow-delay="0ms"
                        data-wow-duration="1500ms">
                        <div class="inner-box">
                            <div class="bottom-curve"></div>
                            <div class="icon-box"><span class="flaticon-digital-marketing"></span></div>
                            <h6><a href="digital-marketing.html">Integrated Cost-Schedule  <br>Risk Analysis (ICSRA)</a></h6>
                        </div>
                    </div>

                    <!--Service Block-->
                    <div class="service-block col-xl-3 col-lg-6 col-md-6 col-sm-12 wow fadeInLeft" data-wow-delay="300ms"
                        data-wow-duration="1500ms">
                        <div class="inner-box">
                            <div class="bottom-curve"></div>
                            <div class="icon-box"><span class="flaticon-development"></span></div>
                            <h6><a href="seo.html">Earned Value Management (EVM) <br>integrated with risk management (EVM+RM)</a></h6>
                        </div>
                    </div>

                    <!--Service Block-->
                    <div class="service-block col-xl-3 col-lg-6 col-md-6 col-sm-12 wow fadeInLeft" data-wow-delay="600ms"
                        data-wow-duration="1500ms">
                        <div class="inner-box">
                            <div class="bottom-curve"></div>
                            <div class="icon-box"><span class="flaticon-app-development"></span></div>
                            <h6><a href="app-development.html">AI & Power BI Enhanced Business  <br>Intelligence for Project Analytics</a></h6>
                        </div>
                    </div>
                    <!--Service Block-->

                    <div class="service-block col-xl-3 col-lg-6 col-md-6 col-sm-12 wow fadeInLeft" data-wow-delay="900ms"
                        data-wow-duration="1500ms">
                        <div class="inner-box">
                            <div class="bottom-curve"></div>
                            <div class="icon-box"><span class="flaticon-ui"></span></div>
                            <h6><a href="ui-designing.html">Specialized Workforce <br>for Oil & Gas Projects</a></h6>
                        </div>
                    </div>
                </div>
            </div>
        </section>

 <!--We DO Section-->
        <section class="we-do-section">
            <div class="auto-container">
                <div class="row clearfix">
                    <!--Left Column-->
                    <div class="left-col col-lg-6 col-md-12 col-sm-12">
                        <div class="inner">
                            <div class="sec-title">
                                <h2>Commitment to  <br> Results and Excellence<span class="dot">.</span></h2>
                            </div>
                            <div class="featured-block clearfix">
                                <div class="image"><img src="{{ asset('assets/images/resource/featured-image-4.png') }}" alt=""></div>
                                <div class="text">Connect, learn and innovate with certified leaders and cutting-edge project management solutions.</div>
                            </div>
                            <div class="progress-box" style="display:none">
                                <div class="bar-title">WWWWWWWWWWWWW</div>
                                <div class="bar">
                                    <div class="bar-inner count-bar" data-percent="70%">
                                        <div class="count-box">
                                            <span class="count-text" data-stop="70" data-speed="1500">0</span>%
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Right Column-->
                    <div class="right-col col-lg-6 col-md-12 col-sm-12">
                        <div class="inner">
                            <div class="faq-box">
                                <ul class="accordion-box clearfix">
                                    <!--Block-->
                                    <li class="accordion block active-block">
                                        <div class="acc-btn active"><span class="count">1.</span> Join Our Global Professional Network </div>
                                        <div class="acc-content current">
                                            <div class="content">
                                                <div class="text">Engage with our dynamic community on LinkedIn to stay updated on our latest findings and achievements in the realm of project management.</div>
                                            </div>
                                        </div>
                                    </li>

                                    <!--Block-->
                                    <li class="accordion block">
                                        <div class="acc-btn"><span class="count">2.</span>
                                        Highly Recommended by Industry Experts                
                                        </div>
                                        <div class="acc-content">
                                            <div class="content">
                                                <div class="text">Ekton Project Analytics is endorsed by the Project Management Institute (PMI) Angola chapter for our exceptional services, both for their own ventures and those of their affiliates.</div>
                                            </div>
                                        </div>
                                    </li>

                                    <!--Block-->
                                    <li class="accordion block">
                                        <div class="acc-btn"><span class="count">3.</span> AI-Driven Project Planning and Control for Oil & Gas</div>
                                        <div class="acc-content">
                                            <div class="content">
                                                <div class="text">Our certified project management professionals leverage AACE standards to develop innovative AI solutions, prioritizing exceptional results and client satisfaction.</div>
                                            </div>
                                        </div>
                                    </li>

                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--About Section-->
        <section class="about-section">
            <div class="auto-container">
                <div class="row clearfix">
                    <!--Image Column-->
                    <div class="image-column col-xl-6 col-lg-12 col-md-12 col-sm-12">
                        <div class="inner">
                            <div class="image-block wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms"><img
                                    src="{{ asset('assets/images/resource/featured-image-1.jpg') }}" alt=""></div>
                            <div class="image-block wow fadeInUp" data-wow-delay="300ms" data-wow-duration="1500ms"><img
                                    src="{{ asset('assets/images/resource/featured-image-2.jpg') }}" alt=""></div>
                        </div>
                    </div>
                    <!--Text Column-->
                    <div class="text-column col-xl-6 col-lg-12 col-md-12 col-sm-12">
                        <div class="inner">
                            <div class="sec-title">
                                <h2>Project dashboards<span class="dot">.</span></h2>
                                <div class="lower-text">Learn how to generate powerful visual data on your projects with Microsoft Power BI.</div>
                            </div>
                            <div class="text clearfix">
                                <ul>
                                    <li>Track projects in real time with live data.</li>
                                    <li> Monitor tasks, costs and teams with easy-to-read graphs.</li>
                                    <li>Spot issues and keep projects on schedule.</li>
                                </ul>
                                <div class="since"><span class="txt">Since <br>200x</span></div>
                            </div>
                            <div class="link-box">
                                <a class="theme-btn btn-style-one" href="about.html">
                                    <i class="btn-curve"></i>
                                    <span class="btn-title">Make the first step</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--Live Section-->
        <section class="live-section">
            <div class="auto-container">
                <div class="sec-title centered">
                    <h2>VIDEO PRESENTATION<span class="dot">.</span></h2>
                </div>
                <div class="main-image-box">
                    <div class="image-layer" style="background-image: url({{ asset('assets/images/resource/featured-image-3.webp') }});"></div>
                    <div class="inner clearfix">
                        <div class="round-box wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                            <div class="round-inner">
                                <div class="vid-link">
                                    <a href="https://www.youtube.com/watch?v=EV9b-LZ-kT4&embeds_referring_euri=https%3A%2F%2Fekton.us%2F&source_ve_path=MjM4NTE" class="lightbox-image">
                                        <div class="icon"><span class="flaticon-play-button-1"></span><i
                                                class="ripple"></i></div>
                                    </a>
                                </div>
                                <div class="title">
                                    <h4>Watch our video <br>presentation today!</h4>
                                </div>
                                <div class="more-link"><a href="about.html">Read More</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


       
        <!-- Gallery Section -->
        <section class="gallery-section">
            <div class="auto-container">
                <!--MixitUp Galery-->
                <div class="mixitup-gallery">
                    <div class="upper-row clearfix">
                        <div class="sec-title">
                            <h2>work showcase<span class="dot">.</span></h2>
                        </div>
                        <!--Filter-->
                        <div class="filters clearfix">
                            <ul class="filter-tabs filter-btns clearfix">
                                <li class="active filter" data-role="button" data-filter="all">All<sup>[6]</sup></li>
                                <li class="filter" data-role="button" data-filter=".branding">Branding<sup>[3]</sup>
                                </li>
                                <li class="filter" data-role="button" data-filter=".illustration">
                                    illustration<sup>[3]</sup></li>
                                <li class="filter" data-role="button" data-filter=".photography">
                                    Photography<sup>[3]</sup></li>
                                <li class="filter" data-role="button" data-filter=".web-design">Web Design<sup>[4]</sup>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="filter-list row">
                        <!-- Gallery Item -->
                        <div class="gallery-item mix all web-design col-lg-4 col-md-6 col-sm-12">
                            <div class="inner-box">
                                <figure class="image"><img src="{{ asset('assets/images/gallery/1.jpg') }}" alt=""></figure>
                                <a href="{{ asset('assets/images/gallery/1.jpg')}}" class="lightbox-image overlay-box"
                                    data-fancybox="gallery"></a>
                                <div class="cap-box">
                                    <div class="cap-inner">
                                        <div class="cat"><span>Graphic</span></div>
                                        <div class="title">
                                            <h5><a href="portfolio-single.html">Fimlor Experience</a></h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Gallery Item -->
                        <div class="gallery-item mix all photography web-design col-lg-4 col-md-6 col-sm-12">
                            <div class="inner-box">
                                <figure class="image"><img src="{asset('assets/images/gallery/2.jpg') }}" alt=""></figure>
                                <a href="{{ asset('assets/images/gallery/2.jpg') }}" class="lightbox-image overlay-box" data-fancybox="gallery"></a>
                                <div class="cap-box">
                                    <div class="cap-inner">
                                        <div class="cat"><span>Graphic</span></div>
                                        <div class="title">
                                            <h5><a href="portfolio-single.html">Fimlor Experience</a></h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Gallery Item -->
                        <div class="gallery-item mix all branding web-design col-lg-4 col-md-6 col-sm-12">
                            <div class="inner-box">
                                <figure class="image"><img src="{{ asset('assets/images/gallery/3.jpg') }}" alt=""></figure>
                                <a href="{{ asset('assets/images/gallery/3.jpg') }}" class="lightbox-image overlay-box"
                                    data-fancybox="gallery"></a>
                                <div class="cap-box">
                                    <div class="cap-inner">
                                        <div class="cat"><span>Graphic</span></div>
                                        <div class="title">
                                            <h5><a href="portfolio-single.html">Fimlor Experience</a></h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Gallery Item -->
                        <div class="gallery-item mix all branding illustration col-lg-4 col-md-6 col-sm-12">
                            <div class="inner-box">
                                <figure class="image"><img src="{{ asset('assets/images/gallery/4.jpg') }}" alt=""></figure>
                                <a href="{{ asset('assets/images/gallery/4.jpg') }}" class="lightbox-image overlay-box"
                                    data-fancybox="gallery"></a>
                                <div class="cap-box">
                                    <div class="cap-inner">
                                        <div class="cat"><span>Graphic</span></div>
                                        <div class="title">
                                            <h5><a href="portfolio-single.html">Fimlor Experience</a></h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Gallery Item -->
                        <div
                            class="gallery-item mix all branding illustration photography web-design col-lg-4 col-md-6 col-sm-12">
                            <div class="inner-box">
                                <figure class="image"><img src="{{ asset('assets/images/gallery/5.jpg') }}" alt=""></figure>
                                <a href="{{ asset('assets/images/gallery/5.jpg') }}" class="lightbox-image overlay-box"
                                    data-fancybox="gallery"></a>
                                <div class="cap-box">
                                    <div class="cap-inner">
                                        <div class="cat"><span>Graphic</span></div>
                                        <div class="title">
                                            <h5><a href="portfolio-single.html">Fimlor Experience</a></h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Gallery Item -->
                        <div class="gallery-item mix all illustration photography col-lg-4 col-md-6 col-sm-12">
                            <div class="inner-box">
                                <figure class="image"><img src="{{ asset('assets/images/gallery/6.jpg') }}" alt=""></figure>
                                <a href="{{ asset('assets/images/gallery/6.jpg') }}" class="lightbox-image overlay-box"
                                    data-fancybox="gallery"></a>
                                <div class="cap-box">
                                    <div class="cap-inner">
                                        <div class="cat"><span>Graphic</span></div>
                                        <div class="title">
                                            <h5><a href="portfolio-single.html">Fimlor Experience</a></h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>

            </div>
        </section>

        <!-- Funfacts Section -->
        <section class="facts-section jarallax" data-jarallax="" data-speed="0.3" data-imgposition="50% 80%">
            <!-- <div class="image-layer" style="background-image: url({{ asset('assets/images/background/image-1.jpg') }});"></div> -->
            <img src="{{ asset('assets/images/background/image-1.jpg') }}" alt="" class="jarallax-img">
            <div class="auto-container">
                <div class="inner-container">

                    <!-- Fact Counter -->
                    <div class="fact-counter">
                        <div class="row clearfix">

                            <!--Column-->
                            <div class="column counter-column col-lg-3 col-md-6 col-sm-12">
                                <div class="inner">
                                    <div class="content">
                                        <div class="count-outer count-box">
                                            <span class="count-text" data-speed="4000" data-stop="8705">0</span>
                                        </div>
                                        <div class="counter-title">Projects Completed</div>
                                    </div>
                                </div>
                            </div>

                            <!--Column-->
                            <div class="column counter-column col-lg-3 col-md-6 col-sm-12">
                                <div class="inner">
                                    <div class="content">
                                        <div class="count-outer count-box alternate">
                                            <span class="count-text" data-speed="3000" data-stop="480">0</span>
                                        </div>
                                        <div class="counter-title">Active clients</div>
                                    </div>
                                </div>
                            </div>

                            <!--Column-->
                            <div class="column counter-column col-lg-3 col-md-6 col-sm-12">
                                <div class="inner">
                                    <div class="content">
                                        <div class="count-outer count-box">
                                            <span class="count-text" data-speed="3000" data-stop="626">0</span>
                                        </div>
                                        <div class="counter-title">cups of coffee</div>
                                    </div>
                                </div>
                            </div>

                            <!--Column-->
                            <div class="column counter-column col-lg-3 col-md-6 col-sm-12">
                                <div class="inner">
                                    <div class="content">
                                        <div class="count-outer count-box">
                                            <span class="count-text" data-speed="4000" data-stop="9704">0</span>
                                        </div>
                                        <div class="counter-title">happy clients</div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </section>
        <!-- End Funfacts Section -->

        <!-- Trusted Section -->
        <section class="trusted-section">
            <div class="auto-container">
                <div class="outer-container">
                    <div class="row clearfix">
                        <div class="left-col col-xl-5 col-lg-6 col-md-12 col-sm-12">
                            <div class="inner">
                                <div class="col-header">
                                    <div class="header-inner">
                                        <span>We’re Committed To Deliver High Quality Projects .</span>
                                    </div>
                                </div>
                                <div class="features">
                                    <div class="feature">
                                        <div class="count"><span>01</span></div>
                                        <h5>TOTAL DESIGN FREEDOM FOR EVERYONE</h5>
                                        <div class="sub-text">core features</div>
                                    </div>
                                    <div class="feature">
                                        <div class="count"><span>02</span></div>
                                        <h5>BASIC RULES OF RUNNING WEB AGENCY</h5>
                                        <div class="sub-text">core features</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="right-col col-xl-7 col-lg-6 col-md-12 col-sm-12">
                            <div class="inner">
                                <div class="sec-title">
                                    <h2>We’re trusted by more <br>than 6260 clients<span class="dot">.</span></h2>
                                    <div class="lower-text">There are many variations of passages of Lorem Ipsum
                                        available, but the majority have suffered alteration in some form, simply free
                                        text by injected humour, or randomised.</div>
                                </div>
                                <div class="featured-block-two clearfix">
                                    <div class="image"><img src="{{ asset('assets/images/resource/featured-image-5.jpg') }}" alt="">
                                    </div>
                                    <div class="text">
                                        <ul>
                                            <li> Suspe ndisse sagittis leo.</li>
                                            <li>Entum estibulum is posuere.</li>
                                            <li>If you are going to use passage.</li>
                                            <li>Lorem Ipsum on the tend to repeat.</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>

        <!-- Team Section -->
        <section class="team-section no-padd-top">
            <div class="auto-container">
                <div class="sec-title centered">
                    <h2>Meet the expert team<span class="dot">.</span></h2>
                </div>
            </div>
            <div class="carousel-box">
                <div class="team-carousel owl-theme owl-carousel">
                    <!--Team-->
                    <div class="team-block">
                        <div class="inner-box">
                            <div class="image-box">
                                <a href="about.html"><img src="{{ asset('assets/images/resource/team-1.jpg') }}" alt=""></a>
                                <ul class="social-links clearfix">
                                    <li><a href="#"><span class="fab fa-facebook-square"></span></a></li>
                                    <li><a href="#"><span class="fab fa-twitter"></span></a></li>
                                    <li><a href="#"><span class="fab fa-instagram"></span></a></li>
                                    <li><a href="#"><span class="fab fa-pinterest-p"></span></a></li>
                                </ul>
                            </div>
                            <div class="lower-box">
                                <h5><a href="#">Kevin martin</a></h5>
                                <div class="designation">Designer</div>
                            </div>
                        </div>
                    </div>

                    <!--Team-->
                    <div class="team-block">
                        <div class="inner-box">
                            <div class="image-box">
                                <a href="about.html"><img src="{{ asset('assets/images/resource/team-2.jpg') }}" alt=""></a>
                                <ul class="social-links clearfix">
                                    <li><a href="#"><span class="fab fa-facebook-square"></span></a></li>
                                    <li><a href="#"><span class="fab fa-twitter"></span></a></li>
                                    <li><a href="#"><span class="fab fa-instagram"></span></a></li>
                                    <li><a href="#"><span class="fab fa-pinterest-p"></span></a></li>
                                </ul>
                            </div>
                            <div class="lower-box">
                                <h5><a href="#">Jessica Brown</a></h5>
                                <div class="designation">Designer</div>
                            </div>
                        </div>
                    </div>

                    <!--Team-->
                    <div class="team-block">
                        <div class="inner-box">
                            <div class="image-box">
                                <a href="about.html"><img src="{{ asset('assets/images/resource/team-3.jpg') }}" alt=""></a>
                                <ul class="social-links clearfix">
                                    <li><a href="#"><span class="fab fa-facebook-square"></span></a></li>
                                    <li><a href="#"><span class="fab fa-twitter"></span></a></li>
                                    <li><a href="#"><span class="fab fa-instagram"></span></a></li>
                                    <li><a href="#"><span class="fab fa-pinterest-p"></span></a></li>
                                </ul>
                            </div>
                            <div class="lower-box">
                                <h5><a href="#">John Albert</a></h5>
                                <div class="designation">Designer</div>
                            </div>
                        </div>
                    </div>

                    <!--Team-->
                    <div class="team-block">
                        <div class="inner-box">
                            <div class="image-box">
                                <a href="about.html"><img src="{{ asset('assets/images/resource/team-4.jpg') }}" alt=""></a>
                                <ul class="social-links clearfix">
                                    <li><a href="#"><span class="fab fa-facebook-square"></span></a></li>
                                    <li><a href="#"><span class="fab fa-twitter"></span></a></li>
                                    <li><a href="#"><span class="fab fa-instagram"></span></a></li>
                                    <li><a href="#"><span class="fab fa-pinterest-p"></span></a></li>
                                </ul>
                            </div>
                            <div class="lower-box">
                                <h5><a href="#">Rose ford</a></h5>
                                <div class="designation">Designer</div>
                            </div>
                        </div>
                    </div>

                    <!--Team-->
                    <div class="team-block">
                        <div class="inner-box">
                            <div class="image-box">
                                <a href="about.html"><img src="{{ asset('assets/images/resource/team-5.jpg') }}" alt=""></a>
                                <ul class="social-links clearfix">
                                    <li><a href="#"><span class="fab fa-facebook-square"></span></a></li>
                                    <li><a href="#"><span class="fab fa-twitter"></span></a></li>
                                    <li><a href="#"><span class="fab fa-instagram"></span></a></li>
                                    <li><a href="#"><span class="fab fa-pinterest-p"></span></a></li>
                                </ul>
                            </div>
                            <div class="lower-box">
                                <h5><a href="#">Mike Hardson</a></h5>
                                <div class="designation">Designer</div>
                            </div>
                        </div>
                    </div>
                    <!--Team-->
                    <div class="team-block">
                        <div class="inner-box">
                            <div class="image-box">
                                <a href="about.html"><img src="{{ asset('assets/images/resource/team-1.jpg') }}" alt=""></a>
                                <ul class="social-links clearfix">
                                    <li><a href="#"><span class="fab fa-facebook-square"></span></a></li>
                                    <li><a href="#"><span class="fab fa-twitter"></span></a></li>
                                    <li><a href="#"><span class="fab fa-instagram"></span></a></li>
                                    <li><a href="#"><span class="fab fa-pinterest-p"></span></a></li>
                                </ul>
                            </div>
                            <div class="lower-box">
                                <h5><a href="#">Kevin martin</a></h5>
                                <div class="designation">Designer</div>
                            </div>
                        </div>
                    </div>

                    <!--Team-->
                    <div class="team-block">
                        <div class="inner-box">
                            <div class="image-box">
                                <a href="about.html"><img src="{{ asset('assets/images/resource/team-2.jpg') }}" alt=""></a>
                                <ul class="social-links clearfix">
                                    <li><a href="#"><span class="fab fa-facebook-square"></span></a></li>
                                    <li><a href="#"><span class="fab fa-twitter"></span></a></li>
                                    <li><a href="#"><span class="fab fa-instagram"></span></a></li>
                                    <li><a href="#"><span class="fab fa-pinterest-p"></span></a></li>
                                </ul>
                            </div>
                            <div class="lower-box">
                                <h5><a href="#">Jessica Brown</a></h5>
                                <div class="designation">Designer</div>
                            </div>
                        </div>
                    </div>

                    <!--Team-->
                    <div class="team-block">
                        <div class="inner-box">
                            <div class="image-box">
                                <a href="about.html"><img src="{{ asset('assets/images/resource/team-3.jpg') }}" alt=""></a>
                                <ul class="social-links clearfix">
                                    <li><a href="#"><span class="fab fa-facebook-square"></span></a></li>
                                    <li><a href="#"><span class="fab fa-twitter"></span></a></li>
                                    <li><a href="#"><span class="fab fa-instagram"></span></a></li>
                                    <li><a href="#"><span class="fab fa-pinterest-p"></span></a></li>
                                </ul>
                            </div>
                            <div class="lower-box">
                                <h5><a href="#">John Albert</a></h5>
                                <div class="designation">Designer</div>
                            </div>
                        </div>
                    </div>

                    <!--Team-->
                    <div class="team-block">
                        <div class="inner-box">
                            <div class="image-box">
                                <a href="about.html"><img src="{{ asset('assets/images/resource/team-4.jpg') }}" alt=""></a>
                                <ul class="social-links clearfix">
                                    <li><a href="#"><span class="fab fa-facebook-square"></span></a></li>
                                    <li><a href="#"><span class="fab fa-twitter"></span></a></li>
                                    <li><a href="#"><span class="fab fa-instagram"></span></a></li>
                                    <li><a href="#"><span class="fab fa-pinterest-p"></span></a></li>
                                </ul>
                            </div>
                            <div class="lower-box">
                                <h5><a href="#">Rose ford</a></h5>
                                <div class="designation">Designer</div>
                            </div>
                        </div>
                    </div>

                    <!--Team-->
                    <div class="team-block">
                        <div class="inner-box">
                            <div class="image-box">
                                <a href="about.html"><img src="{{ asset('assets/images/resource/team-5.jpg') }}" alt=""></a>
                                <ul class="social-links clearfix">
                                    <li><a href="#"><span class="fab fa-facebook-square"></span></a></li>
                                    <li><a href="#"><span class="fab fa-twitter"></span></a></li>
                                    <li><a href="#"><span class="fab fa-instagram"></span></a></li>
                                    <li><a href="#"><span class="fab fa-pinterest-p"></span></a></li>
                                </ul>
                            </div>
                            <div class="lower-box">
                                <h5><a href="#">Mike Hardson</a></h5>
                                <div class="designation">Designer</div>
                            </div>
                        </div>
                    </div>

                    <!--Team-->
                    <div class="team-block">
                        <div class="inner-box">
                            <div class="image-box">
                                <a href="about.html"><img src="{{ asset('assets/images/resource/team-1.jpg') }}" alt=""></a>
                                <ul class="social-links clearfix">
                                    <li><a href="#"><span class="fab fa-facebook-square"></span></a></li>
                                    <li><a href="#"><span class="fab fa-twitter"></span></a></li>
                                    <li><a href="#"><span class="fab fa-instagram"></span></a></li>
                                    <li><a href="#"><span class="fab fa-pinterest-p"></span></a></li>
                                </ul>
                            </div>
                            <div class="lower-box">
                                <h5><a href="#">Kevin martin</a></h5>
                                <div class="designation">Designer</div>
                            </div>
                        </div>
                    </div>

                    <!--Team-->
                    <div class="team-block">
                        <div class="inner-box">
                            <div class="image-box">
                                <a href="about.html"><img src="{{ asset('assets/images/resource/team-2.jpg') }}" alt=""></a>
                                <ul class="social-links clearfix">
                                    <li><a href="#"><span class="fab fa-facebook-square"></span></a></li>
                                    <li><a href="#"><span class="fab fa-twitter"></span></a></li>
                                    <li><a href="#"><span class="fab fa-instagram"></span></a></li>
                                    <li><a href="#"><span class="fab fa-pinterest-p"></span></a></li>
                                </ul>
                            </div>
                            <div class="lower-box">
                                <h5><a href="#">Jessica Brown</a></h5>
                                <div class="designation">Designer</div>
                            </div>
                        </div>
                    </div>

                    <!--Team-->
                    <div class="team-block">
                        <div class="inner-box">
                            <div class="image-box">
                                <a href="about.html"><img src="{{ asset('assets/images/resource/team-3.jpg') }}" alt=""></a>
                                <ul class="social-links clearfix">
                                    <li><a href="#"><span class="fab fa-facebook-square"></span></a></li>
                                    <li><a href="#"><span class="fab fa-twitter"></span></a></li>
                                    <li><a href="#"><span class="fab fa-instagram"></span></a></li>
                                    <li><a href="#"><span class="fab fa-pinterest-p"></span></a></li>
                                </ul>
                            </div>
                            <div class="lower-box">
                                <h5><a href="#">John Albert</a></h5>
                                <div class="designation">Designer</div>
                            </div>
                        </div>
                    </div>

                    <!--Team-->
                    <div class="team-block">
                        <div class="inner-box">
                            <div class="image-box">
                                <a href="about.html"><img src="{{ asset('assets/images/resource/team-4.jpg') }}" alt=""></a>
                                <ul class="social-links clearfix">
                                    <li><a href="#"><span class="fab fa-facebook-square"></span></a></li>
                                    <li><a href="#"><span class="fab fa-twitter"></span></a></li>
                                    <li><a href="#"><span class="fab fa-instagram"></span></a></li>
                                    <li><a href="#"><span class="fab fa-pinterest-p"></span></a></li>
                                </ul>
                            </div>
                            <div class="lower-box">
                                <h5><a href="#">Rose ford</a></h5>
                                <div class="designation">Designer</div>
                            </div>
                        </div>
                    </div>

                    <!--Team-->
                    <div class="team-block">
                        <div class="inner-box">
                            <div class="image-box">
                                <a href="about.html"><img src="{{ asset('assets/images/resource/team-5.jpg') }}" alt=""></a>
                                <ul class="social-links clearfix">
                                    <li><a href="#"><span class="fab fa-facebook-square"></span></a></li>
                                    <li><a href="#"><span class="fab fa-twitter"></span></a></li>
                                    <li><a href="#"><span class="fab fa-instagram"></span></a></li>
                                    <li><a href="#"><span class="fab fa-pinterest-p"></span></a></li>
                                </ul>
                            </div>
                            <div class="lower-box">
                                <h5><a href="#">Mike Hardson</a></h5>
                                <div class="designation">Designer</div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <!-- Parallax Section -->
        <section class="parallax-section jarallax" data-jarallax="" data-speed="0.3" data-imgposition="50% 80%">
            <!-- <div class="image-layer" style="background-image: url({{ asset('assets/images/background/image-2.jpg') }})"></div> -->
            <img src="{{ asset('assets/images/background/image-2.jpg') }}" alt="" class="jarallax-img">
            <div class="auto-container">
                <div class="content-box">
                    <div class="icon-box"><span class="flaticon-app-development"></span></div>
                    <h2>Great things in business are never done by one person. <span>They’re done by a team of
                            people.</span></h2>
                </div>
            </div>
        </section>
        <!-- End Funfacts Section -->

        <!--Sponsors Section-->
        <section class="sponsors-section">
            <div class="sponsors-outer">
                <!--Sponsors-->
                <div class="auto-container">
                    <!--Sponsors Carousel-->
                    <div class="sponsors-carousel owl-theme owl-carousel">
                        <div class="slide-item">
                            <figure class="image-box"><a href="#"><img src="{{ asset('assets/images/clients/1.png') }}" alt=""></a></figure>
                        </div>
                        <div class="slide-item">
                            <figure class="image-box"><a href="#"><img src="{{ asset('assets/images/clients/2.png') }}" alt=""></a></figure>
                        </div>
                        <div class="slide-item">
                            <figure class="image-box"><a href="#"><img src="{{ asset('assets/images/clients/3.png') }}" alt=""></a></figure>
                        </div>
                        <div class="slide-item">
                            <figure class="image-box"><a href="#"><img src="{{ asset('assets/images/clients/4.png') }}" alt=""></a></figure>
                        </div>
                        <div class="slide-item">
                            <figure class="image-box"><a href="#"><img src="{{ asset('assets/images/clients/5.png') }}" alt=""></a></figure>
                        </div>
                        <div class="slide-item">
                            <figure class="image-box"><a href="#"><img src="{{ asset('assets/images/clients/1.png') }}" alt=""></a></figure>
                        </div>
                        <div class="slide-item">
                            <figure class="image-box"><a href="#"><img src="{{ asset('assets/images/clients/2.png') }}" alt=""></a></figure>
                        </div>
                        <div class="slide-item">
                            <figure class="image-box"><a href="#"><img src="{{ asset('assets/images/clients/3.png') }}" alt=""></a></figure>
                        </div>
                        <div class="slide-item">
                            <figure class="image-box"><a href="#"><img src="{{ asset('assets/images/clients/4.png') }}" alt=""></a></figure>
                        </div>
                        <div class="slide-item">
                            <figure class="image-box"><a href="#"><img src="{{ asset('assets/images/clients/5.png') }}" alt=""></a></figure>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--Agency Section-->
        <section class="agency-section">
            <div class="auto-container">
                <div class="row clearfix">
                    <!--Left Column-->
                    <div class="left-col col-xl-6 col-lg-12 col-md-12 col-sm-12">
                        <div class="inner">
                            <div class="sec-title">
                                <h2>Best design Agency <br>solutions<span class="dot">.</span></h2>
                            </div>

                            <!--Default Tabs-->
                            <div class="default-tabs tabs-box">

                                <!--Tab Btns-->
                                <ul class="tab-btns tab-buttons clearfix">
                                    <li data-tab="#tab-1" class="tab-btn active-btn"><span>Our Mission</span></li>
                                    <li data-tab="#tab-2" class="tab-btn"><span>Our Vision</span></li>
                                    <li data-tab="#tab-3" class="tab-btn"><span>Our History</span></li>
                                </ul>

                                <!--Tabs Container-->
                                <div class="tabs-content">

                                    <!--Tab-->
                                    <div class="tab active-tab" id="tab-1">
                                        <div class="content">
                                            <div class="text">There are many variations of passages of avaialable but
                                                the majority have in some form, by injected humou or words which don't
                                                look even slightly believable. There are many variations of but the
                                                majority have suffered.</div>
                                        </div>
                                    </div>

                                    <!--Tab-->
                                    <div class="tab" id="tab-2">
                                        <div class="content">
                                            <div class="text">There are many variations of passages of avaialable but
                                                the majority have in some form, by injected humou or words which don't
                                                look even slightly believable. There are many variations of but the
                                                majority have suffered.</div>
                                        </div>
                                    </div>

                                    <!--Tab-->
                                    <div class="tab" id="tab-3">
                                        <div class="content">
                                            <div class="text">There are many variations of passages of avaialable but
                                                the majority have in some form, by injected humou or words which don't
                                                look even slightly believable. There are many variations of but the
                                                majority have suffered.</div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Right Column-->
                    <div class="right-col col-xl-6 col-lg-12 col-md-12 col-sm-12">
                        <div class="inner">
                            <div class="text">There are many variations of passages of available but the majority have
                                suffered alteration in some form, by injected humou or randomised words which don't look
                                even slightly believable.</div>
                            <div class="featured-block-two clearfix">
                                <div class="image"><img src="{{ asset('assets/images/resource/featured-image-6.jpg') }}" alt="">
                                </div>
                                <div class="text">
                                    <ul>
                                        <li>Nsectetur cing elit.</li>
                                        <li>Suspe ndisse suscipit sagittis leo.</li>
                                        <li>Entum estibulum dignissim posuere.</li>
                                        <li>If you are going to use a passage.</li>
                                        <li>Lorem Ipsum on the tend to repeat.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- News Section -->
        <section class="news-section">
            <div class="auto-container">
                <div class="sec-title centered">
                    <h2>Latest news & articles<span class="dot">.</span></h2>
                </div>

                <div class="row clearfix">
                    <!--News Block-->
                    <div class="news-block col-lg-4 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="0ms"
                        data-wow-duration="1500ms">
                        <div class="inner-box">
                            <div class="image-box">
                                <a href="blog-single.html"><img src="{{ asset('assets/images/resource/news-1.jpg') }}" alt=""></a>
                            </div>
                            <div class="lower-box">
                                <div class="post-meta">
                                    <ul class="clearfix">
                                        <li><span class="far fa-clock"></span> 20 Mar</li>
                                        <li><span class="far fa-user-circle"></span> Admin</li>
                                        <li><span class="far fa-comments"></span> 2 Comments</li>
                                    </ul>
                                </div>
                                <h5><a href="blog-single.html">basic rules of running web agency business</a></h5>
                                <div class="text">Lorem ipsum is simply free text used by copytyping refreshing.</div>
                                <div class="link-box"><a class="theme-btn" href="blog-single.html"><span
                                            class="flaticon-next-1"></span></a></div>
                            </div>
                        </div>
                    </div>
                    <!--News Block-->
                    <div class="news-block col-lg-4 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="300ms"
                        data-wow-duration="1500ms">
                        <div class="inner-box">
                            <div class="image-box">
                                <a href="blog-single.html"><img src="{{ asset('assets/images/resource/news-2.jpg') }}" alt=""></a>
                            </div>
                            <div class="lower-box">
                                <div class="post-meta">
                                    <ul class="clearfix">
                                        <li><span class="far fa-clock"></span> 20 Mar</li>
                                        <li><span class="far fa-user-circle"></span> Admin</li>
                                        <li><span class="far fa-comments"></span> 2 Comments</li>
                                    </ul>
                                </div>
                                <h5><a href="blog-single.html">Delivering the best digital marketing</a></h5>
                                <div class="text">Lorem ipsum is simply free text used by copytyping refreshing.</div>
                                <div class="link-box"><a class="theme-btn" href="blog-single.html"><span
                                            class="flaticon-next-1"></span></a></div>
                            </div>
                        </div>
                    </div>
                    <!--News Block-->
                    <div class="news-block col-lg-4 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="600ms"
                        data-wow-duration="1500ms">
                        <div class="inner-box">
                            <div class="image-box">
                                <a href="blog-single.html"><img src="{{ asset('assets/images/resource/news-3.jpg') }}" alt=""></a>
                            </div>
                            <div class="lower-box">
                                <div class="post-meta">
                                    <ul class="clearfix">
                                        <li><span class="far fa-clock"></span> 20 Mar</li>
                                        <li><span class="far fa-user-circle"></span> Admin</li>
                                        <li><span class="far fa-comments"></span> 2 Comments</li>
                                    </ul>
                                </div>
                                <h5><a href="blog-single.html">Introducing the latest linoor features</a></h5>
                                <div class="text">Lorem ipsum is simply free text used by copytyping refreshing.</div>
                                <div class="link-box"><a class="theme-btn" href="blog-single.html"><span
                                            class="flaticon-next-1"></span></a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Call To Section -->
        <section class="call-to-section">
            <div class="auto-container">
                <div class="inner clearfix">
                    <div class="shape-1 wow slideInRight" data-wow-delay="0ms" data-wow-duration="1500ms"></div>
                    <div class="shape-2 wow fadeInDown" data-wow-delay="0ms" data-wow-duration="1500ms"></div>
                    <h2>Let's Get Your Project <br>Started!</h2>
                    <div class="link-box">
                        <a class="theme-btn btn-style-two" href="about.html">
                            <i class="btn-curve"></i>
                            <span class="btn-title">Contact with us</span>
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <!-- Main Footer -->
        <footer class="main-footer">
            <div class="auto-container">
                <!--Widgets Section-->
                <div class="widgets-section">
                    <div class="row clearfix">

                        <!--Column-->
                        <div class="column col-xl-3 col-lg-6 col-md-6 col-sm-12">
                            <div class="footer-widget logo-widget">
                                <div class="widget-content">
                                    <div class="logo">
                                        <a href="index.html"><img id="fLogo" src="{{ asset('assets/images/footer-logo.png')}}"
                                                alt=""></a>
                                    </div>
                                    <div class="text">Welcome to our web design agency. Lorem ipsum simply free text
                                        dolor sited amet cons cing elit.</div>
                                    <ul class="social-links clearfix">
                                        <li><a href="#"><span class="fab fa-facebook-square"></span></a></li>
                                        <li><a href="#"><span class="fab fa-twitter"></span></a></li>
                                        <li><a href="#"><span class="fab fa-instagram"></span></a></li>
                                        <li><a href="#"><span class="fab fa-pinterest-p"></span></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <!--Column-->
                        <div class="column col-xl-3 col-lg-6 col-md-6 col-sm-12">
                            <div class="footer-widget links-widget">
                                <div class="widget-content">
                                    <h6>Explore</h6>
                                    <div class="row clearfix">
                                        <div class="col-md-6 col-sm-12">
                                            <ul>
                                                <li><a href="#">About</a></li>
                                                <li><a href="#">Meet Our Team</a></li>
                                                <li><a href="#">Our Portfolio</a></li>
                                                <li><a href="#">Latest News</a></li>
                                                <li><a href="#">Contact</a></li>
                                            </ul>
                                        </div>
                                        <div class="col-md-6 col-sm-12">
                                            <ul>
                                                <li><a href="#">Support</a></li>
                                                <li><a href="#">Privacy Policy</a></li>
                                                <li><a href="#">Terms of Use</a></li>
                                                <li><a href="#">Help</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!--Column-->
                        <div class="column col-xl-3 col-lg-6 col-md-6 col-sm-12">
                            <div class="footer-widget info-widget">
                                <div class="widget-content">
                                    <h6>Contact</h6>
                                    <ul class="contact-info">
                                        <li class="address"><span class="icon flaticon-pin-1"></span> 66 Broklyn Street,
                                            New York <br>United States of America</li>
                                        <li><span class="icon flaticon-call"></span><a href="tel:+1 (832)-302-8721">+1 (832)-302-8721</a></li>
                                        <li><span class="icon flaticon-email-2"></span><a
                                                href="mailto:project-analytics@ekton.us">project-analytics@ekton.us</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <!--Column-->
                        <div class="column col-xl-3 col-lg-6 col-md-6 col-sm-12">
                            <div class="footer-widget newsletter-widget">
                                <div class="widget-content">
                                    <h6>Newsletter</h6>
                                    <div class="newsletter-form">
                                        <form method="post" action="contact.html">
                                            <div class="form-group clearfix">
                                                <input type="email" name="email" value=""
                                                    placeholder="Email Address" required="">
                                                <button type="submit" class="theme-btn"><span
                                                        class="fa fa-envelope"></span></button>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="text">Sign up for our latest news & articles. We won’t give you spam
                                        mails.</div>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
            </div>

            <!-- Footer Bottom -->
            <div class="footer-bottom">
                <div class="auto-container">
                    <div class="inner clearfix">
                        <div class="copyright">&copy; Copyright 2022 by Layerdrops.com</div>
                    </div>
                </div>
            </div>

        </footer>

    </div>
@endsection
