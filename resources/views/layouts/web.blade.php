<!DOCTYPE html>
<!-- saved from url=(0033)https://softdevltd.com/ultraline/ -->
<html lang="en">

    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

        <!-- Required meta tags -->
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- Bootstrap Min CSS -->
        <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
        <!-- Animate Min CSS -->
        <link rel="stylesheet" href="{{asset('css/animate.min.css')}}">
        <!-- FlatIcon CSS -->
        <link rel="stylesheet" href="{{asset('css/flaticon.css')}}">
        <!-- Odometer Min CSS -->
        <link rel="stylesheet" href="{{asset('css/odometer.min.css')}}">
        <!-- Nice Select CSS -->
        <link rel="stylesheet" href="{{asset('css/nice-select.css')}}">
        <!-- MeanMenu CSS -->
        <link rel="stylesheet" href="{{asset('css/meanmenu.css')}}">
        <!-- Owl Carousel Min CSS -->
        <link rel="stylesheet" href="{{asset('css/owl.carousel.min.css')}}">
        <!-- Font Awesome Min CSS -->
        <link rel="stylesheet" href="{{asset('css/fontawesome.min.css')}}">
        <!-- google fonts -->
        <link href="{{asset('css/css.css')}}" rel="stylesheet">
        <link href="{{asset('css/css(1).css')}}" rel="stylesheet">

        <!-- page style -->
        <link rel="stylesheet" type="text/css" href="{{asset('css/iziToast.min.css')}}">
        <!-- Style CSS -->
        <link rel="stylesheet" href="{{asset('css/style.css')}}">
        <!-- Responsive CSS -->
        <link rel="stylesheet" href="{{asset('css/responsive.css')}}">

        <!-- Dynamic Style -->

        <style>
            .default-btn-one,
            .features-content-area .features-btn .features-btn-one,
            .testimonial-slides.owl-theme .owl-dots .owl-dot.active span,
            .single-services-box:hover,
            .go-top,
            .defaultbg,
            .subscribe-section .subscribe-content .newsletter-form button,
            #contactForm .send-btn .send-btn-one,
            .choose-content-area .choose-text:hover i,
            .contact-box:hover .icon {
                background-color: #2bc778
            }

            .default-btn-one,
            .features-content-area .features-btn .features-btn-one,
            #contactForm .send-btn .send-btn-one,
            .contact-box:hover .icon,
            .contact-box .icon {
                border-color: #2bc778
            }

            .main-banner-content h1 span,
            .about-area-content span,
            .section-title span,
            .testimonial-content-area span,
            .features-area .features-title span,
            .single-fun-facts h3 .sign-icon,
            .team-item-area .team-content h3,
            .codepopular-nav .navbar .navbar-nav .nav-item a.active,
            .codepopular-nav .navbar .navbar-nav .nav-item a:focus,
            .codepopular-nav .navbar .navbar-nav .nav-item a:hover,
            #contactForm .send-btn .send-btn-one:hover,
            .default-btn-one:hover,
            .single-features-item:hover,
            .choose-content-area span {
                color: #2bc778 !important;
            }
        </style>

        <!--Title-->
        <title>Home - Ultraline</title>
        <meta name="description"
            content="Ultraline is a unique Software development company who since its very beginnings in 2016 has fulfilled a niche in the rapidly growing IT industry.">
        <meta name="keywords" content="Text">

        <!-- Open graph meta tag -->
        <meta property="og:title"
            content="Ultraline is a unique Software development company who since its very beginnings in 2016 has fulfilled a niche in the rapidly growing IT industry.">
        <meta property="og:site_name" content="CodePopular">
        <meta property="og:url" content="http://codepopular.com">
        <meta property="og:description"
            content="Ultraline is a unique Software development company who since its very beginnings in 2016 has fulfilled a niche in the rapidly growing IT industry.">
        <meta property="og:type" content="article">
        <meta property="og:image"
            content="https://softdevltd.com/ultraline/local/public/contents/frontend/assets/img/og.png">
        <!-- Open graph meta tag end -->
        <link rel="icon" type="image/png"
            href="https://softdevltd.com/ultraline/local/public/contents/frontend/assets/img/favicon.png">
    </head>

    <body data-new-gr-c-s-check-loaded="14.1011.0" data-gr-ext-installed="">
        <!-- Preloader -->
        <div class="preloader" style="display: none;"></div>
        <!-- End Preloader -->

        <!-- Start Navbar Area -->
        <div class="navbar-area">
            <div class="codepopular-responsive-nav">
                <div class="container">
                    <div class="codepopular-responsive-menu">
                        <div class="logo">
                            <a href="https://softdevltd.com/ultraline">
                                <img src="{{asset('img/logo_1608219121.png')}}" alt="logo">
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="codepopular-nav bg-white">
                <div class="container">
                    <nav class="navbar navbar-expand-md navbar-light">
                        <a class="navbar-brand" href="https://softdevltd.com/ultraline">
                            <img src="{{asset('img/logo_1608219121.png')}}" alt="logo">
                        </a>

                        <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent"
                            style="display: block;">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a href="https://softdevltd.com/ultraline" class="nav-link">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a href="https://softdevltd.com/ultraline/about-us" class="nav-link">About Us</a>
                                </li>
                                <li class="nav-item">
                                    <a href="https://softdevltd.com/ultraline/service" class="nav-link">Services</a>
                                </li>
                                <li class="nav-item">
                                    <a href="https://softdevltd.com/ultraline/project" class="nav-link">Project</a>
                                </li>
                                <li class="nav-item">
                                    <a href="https://softdevltd.com/ultraline/contact" class="nav-link">Contact</a>
                                </li>
                            </ul>

                            <div class="others-options">
                                <div class="option-item"><a class="default-btn-one"
                                        href="https://softdevltd.com/ultraline/quote">Get Quote</a>

                                </div>


                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
        <!-- End Navbar Area -->

        @yield('content')

        <!-- Start Footer Section -->
        <section class="footer-section ptb-100">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="footer-area">
                            <div class="footer-heading">
                                <h3>About Us</h3>
                            </div>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                                has been
                                the industry's standard dummy text ever since the 1500s, when an unknown printer took a
                                galley
                                of type and scrambled it to make a type specimen book</p>
                            <ul class="footer-social">
                                <li>
                                    <a href="https://softdevltd.com/ultraline/#" class="bg-3955bc">
                                        <i class="fab fa-facebook-f"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://softdevltd.com/ultraline/#" class="bg-1da1f2">
                                        <i class="fab fa-twitter"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://softdevltd.com/ultraline/#" class="bg-004dff">
                                        <i class="fab fa-pinterest"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://softdevltd.com/ultraline/#" class="bg-0273af">
                                        <i class="fab fa-linkedin-in"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://softdevltd.com/ultraline/#" class="bg-0273af">
                                        <i class="fab fa-youtube"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://softdevltd.com/ultraline/#" class="bg-0273af">
                                        <i class="fab fa-dribbble"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-2 col-md-6 col-sm-6">
                        <div class="footer-item-area">
                            <div class="footer-heading">
                                <h3>Important Links</h3>
                            </div>

                            <ul class="footer-quick-links">
                                <li>
                                    <a href="https://demo.softdevltd.com/ultraline-laravel/service">About Us</a>
                                </li>
                                <li>
                                    <a href="https://www.codepopular.com/ultraline/service">Project</a>
                                </li>
                                <li>
                                    <a href="https://www.codepopular.com/ultraline/service">Services</a>
                                </li>

                                <li>
                                    <a href="https://www.codepopular.com/ultraline/service">Contact</a>
                                </li>
                                <li>
                                    <a href="https://www.codepopular.com/ultraline/service">Get Quote</a>
                                </li>

                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-2 col-md-6 col-sm-6">
                        <div class="footer-item-area">
                            <div class="footer-heading">
                                <h3>Featured Service</h3>
                            </div>

                            <ul class="footer-quick-links">

                                <li><a href="https://www.codepopular.com/ultraline/service">Mobile App Development</a>
                                </li>


                                <li><a href="https://www.codepopular.com/ultraline/service">Web Development</a></li>

                                <li><a href="https://www.codepopular.com/ultraline/service">UI/UX Design</a></li>


                                <li><a href="https://www.codepopular.com/ultraline/service">Mobile Games</a></li>

                                <li><a href="https://www.codepopular.com/ultraline/service">Software Testing And QA</a>
                                </li>

                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="footer-heading">
                            <h3>Contact</h3>
                        </div>

                        <div class="footer-info-contact">
                            <i class="flaticon-call-answer"></i>
                            <span>+1-202-555-0183</span>
                        </div>

                        <div class="footer-info-contact">
                            <i class="flaticon-envelope"></i>
                            <span><a href="mailto:info@youwebsite.com">info@youwebsite.com</a></span>
                        </div>

                        <div class="footer-info-contact">
                            <i class="flaticon-placeholder-filled-point"></i>
                            <span>383/a, katasur Mohammodpur, Dhaka, Bangladesh</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="default-animation">
                <div class="shape-img1"><img src="{{asset('img/12.svg')}}" alt="image"></div>
                <div class="shape-img2"><img src="{{asset('img/13.svg')}}" alt="image"></div>
                <div class="shape-img3"><img src="{{asset('img/14.png')}}" alt="image"></div>
                <div class="shape-img4"><img src="{{asset('img/15.png')}}" alt="image"></div>
                <div class="shape-img5"><img src="{{asset('img/2.png')}}" alt="image"></div>
            </div>
        </section>
        <!-- End Footer Section -->

        <!-- Start Copy Right Section -->
        <div class="copyright-area">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-6">
                        <p>
                            <i class="far fa-copyright"></i>
                            2020 Ultraline Solutions. All Rights Reserved
                        </p>
                    </div>

                    <div class="col-lg-6 col-md-6">
                        <ul>
                            <li>
                                <a href="https://softdevltd.com/ultraline/privacy-policy">Privacy Policy</a>
                            </li>


                            <li>
                                <a href="https://softdevltd.com/ultraline/terms-and-conditions">Terms and Conditions</a>
                            </li>




                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Copy Right Section -->

        <!-- Start Go Top Section -->
        <div class="go-top">
            <i class="fas fa-chevron-up"></i>
            <i class="fas fa-chevron-up"></i>
        </div>
        <!-- End Go Top Section -->

        <!-- jQuery Min JS -->
        <script src="{{asset('js/jquery.min.js')}}"></script>
        <!-- Popper Min JS -->
        <script src="{{asset('js/popper.min.js')}}"></script>
        <!-- Bootstrap Min JS -->
        <script src="{{asset('js/bootstrap.min.js')}}"></script>
        <!-- MeanMenu JS  -->
        <script src="{{asset('js/jquery.meanmenu.js')}}"></script>
        <!-- Appear Min JS -->
        <script src="{{asset('js/jquery.appear.min.js')}}"></script>
        <!-- Odometer Min JS -->
        <script src="{{asset('js/odometer.min.js')}}"></script>
        <!-- Owl Carousel Min JS -->
        <script src="{{asset('js/owl.carousel.min.js')}}"></script>
        <!-- Mixitup Min JS -->
        <script src="{{asset('js/jquery.mixitup.min.js')}}"></script>
        <!-- WOW Min JS -->
        <script src="{{asset('js/wow.min.js')}}"></script>
        <!-- Parallax Min JS -->
        <script src="{{asset('js/parallax.min.js')}}"></script>
        <!-- Main JS -->
        <script src="{{asset('js/main.js')}}"></script>

    </body>

</html>
