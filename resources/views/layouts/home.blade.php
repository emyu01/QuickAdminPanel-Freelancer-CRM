@extends('layouts.web')
@section('content')
<!-- Start Main Banner Area -->
<div class="main-banner">
    <div class="banner-curve"></div>
    <div class="d-table">
        <div class="d-table-cell">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-12">
                        <div class="main-banner-content">
                            <h1>Innovating with a <span style="color:#ED194E;">Digital Mindset</span></h1>
                            <p>We provide end-to-end maintenance services to help clients with business-critical legacy
                                systems resolve persistent issues and supercharge performance</p>

                            <div class="banner-btn">
                                <a href="https://softdevltd.com/ultraline/#" class="default-btn-one">Get Quote</a>

                                <a href="https://softdevltd.com/ultraline/#" class="default-btn-one">Contact Us</a>

                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-12">
                        <div class="banner-image">
                            <img src="{{ asset('img/arrow.png')}}" class="wow fadeInLeft" data-wow-delay="0.6s"
                                alt="arrow">
                            <img src="{{ asset('img/box1.png')}}" class="wow fadeInUp" data-wow-delay="0.6s" alt="box1">
                            <img src="{{ asset('img/boy1.png')}}" class="wow fadeInLeft" data-wow-delay="0.6s"
                                alt="boy1">
                            <img src="{{ asset('img/boy2.png')}}" class="wow zoomIn" data-wow-delay="0.6s" alt="boy2">
                            <img src="{{ asset('img/boy3.png')}}" class="wow bounceIn" data-wow-delay="0.6s" alt="boy3">
                            <img src="{{ asset('img/digital-screen.png')}}" class="wow fadeInDown" data-wow-delay="0.6s"
                                alt="digital-screen">
                            <img src="{{ asset('img/filter1.png')}}" class="wow zoomIn" data-wow-delay="0.6s"
                                alt="filter1">
                            <img src="{{ asset('img/filter2.png')}}" class="wow fadeInUp" data-wow-delay="0.6s"
                                alt="filter2">
                            <img src="{{ asset('img/filter3.png')}}" class="wow rotateIn" data-wow-delay="0.6s"
                                alt="filter3">
                            <img src="{{ asset('img/girl1.png')}}" class="wow fadeInUp" data-wow-delay="0.6s"
                                alt="girl1">
                            <img src="{{ asset('img/girl2.png')}}" class="wow zoomIn" data-wow-delay="0.6s" alt="girl2">
                            <img src="{{ asset('img/monitor.png')}}" class="wow fadeInRight" data-wow-delay="0.6s"
                                alt="monitor">
                            <img src="{{ asset('img/4.png')}}" class="wow zoomIn" data-wow-delay="0.6s" alt="4">
                            <img src="{{ asset('img/7.png')}}" class="wow zoomIn" data-wow-delay="0.6s" alt="7">

                            <img src="{{ asset('img/main-image.png')}}" class="wow zoomIn" data-wow-delay="0.6s"
                                alt="main-image.png')}}">
                        </div>
                    </div>
                </div>

                <div class="banner-bg-text">ultraline</div>
            </div>
        </div>
    </div>

    <div class="shape-img1"><img src="{{ asset('img/1.png')}}" alt="image"></div>
    <div class="shape-img2"><img src="{{ asset('img/2.png')}}" alt="image"></div>
    <div class="shape-img3"><img src="{{ asset('img/3.png')}}" alt="image"></div>
    <div class="shape-img4"><img src="{{ asset('img/4(1).png')}}" alt="image"></div>
    <div class="shape-img5"><img src="{{ asset('img/5.png')}}" alt="image"></div>
    <div class="shape-img6"><img src="{{ asset('img/6.png')}}" alt="image"></div>
    <div class="shape-img7"><img src="{{ asset('img/2.png')}}" alt="image"></div>
    <div class="shape-img8"><img src="{{ asset('img/10.png')}}" alt="image"></div>
    <div class="shape-img9"><img src="{{ asset('img/7(1).png')}}" alt="image"></div>
    <div class="shape-img10"><img src="{{ asset('img/5.png')}}" alt="image"></div>
    <div class="shape-img11"><img src="{{ asset('img/11.png')}}" alt="image"></div>
</div>
<!-- End Main Banner Area -->



<!-- Start Features Section -->
<section class="features-section">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-5 col-md-12">
                <div class="features-content-area">
                    <span>How We Works</span>
                    <h3>Solve Business Challenges With Us</h3>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                        the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley
                        of type and scrambled it to make a type specimen book. It has survived not only five centuries,
                        but also the leap into electronic typesetting, remaining essentially unchanged.</p>

                    <div class="features-btn">
                        <a href="https://softdevltd.com/ultraline/about-us" class="features-btn-one">More Details</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-7 col-md-12">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="single-features-item bg-f1eff8">
                            <div class="icon agile-icon">
                                <img class="" src="{{ asset('img/agile.svg')}}" alt="icon">
                            </div>

                            <h3>Agile Software Development</h3>
                            <p>All of our teams follow Scrum methodology, which has proven to give great results and
                                keep all the project stakeholders in sync.</p>
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="single-features-item bg-fbe6d4">
                            <div class="icon home-support-icon">
                                <img src="{{ asset('img/support.svg')}}" alt="icon">

                            </div>

                            <h3>Regular calls and meetings</h3>
                            <p>One of our top priorities is quick reaction time and accessibility. Our team is always a
                                phone call, skype call or email away.</p>
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="single-features-item bg-f0fffc">
                            <div class="icon d-process-icon">
                                <img class="" src="{{ asset('img/process.svg')}}" alt="icon">

                            </div>

                            <h3>Best Development Practices</h3>
                            <p>With us, you can rely on a stable demo environment, adept QA and testing, always
                                accessible and secure code, and fast deploying.</p>
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="single-features-item bg-f8e1eb">
                            <div class="icon personal-involvment">
                                <img class="" src="{{ asset('img/personal.svg')}}" alt="icon">

                            </div>

                            <h3>High Personal Involvement</h3>
                            <p>From leadership to teams on the ground, we’re all genuinely passionate about what we do
                                and are always striving to be leaders in our field, instead of just keeping up. For us,
                                the client’s success is our success.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="features-animation">
        <div class="shape-img1"><img src="{{ asset('img/8.png')}}" alt="image"></div>
        <div class="shape-img2"><img src="{{ asset('img/5.png')}}" alt="image"></div>
    </div>
</section>
<!-- End Features Section -->

<!-- Start About Section -->
<section class="about-section">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-12">
                <div class="about-image">
                    <img src="{{ asset('img/about-image.png')}}" alt="image">
                </div>
            </div>

            <div class="col-lg-6 col-md-12">
                <div class="about-area-content">
                    <span>About Us</span>
                    <h3>We are a boutique digital transformation consultancy and software development company</h3>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                        the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley
                        of type and scrambled it to make a type specimen book. It has survived not only five centuries,
                        but also the leap into electronic typesetting, remaining essentially unchanged. It was
                        popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages,
                        and more recently with desktop publishing software like Aldus PageMaker including versions of
                        Lorem Ipsum.</p>
                </div>

                <div class="row">
                    <div class="col-lg-6 col-6 col--6">
                        <div class="single-fun-facts">
                            <h3><span class="odometer odometer-auto-theme" data-count="400">
                                    <div class="odometer-inside"><span class="odometer-digit"><span
                                                class="odometer-digit-spacer">8</span><span
                                                class="odometer-digit-inner"><span class="odometer-ribbon"><span
                                                        class="odometer-ribbon-inner"><span
                                                            class="odometer-value">4</span></span></span></span></span><span
                                            class="odometer-digit"><span class="odometer-digit-spacer">8</span><span
                                                class="odometer-digit-inner"><span class="odometer-ribbon"><span
                                                        class="odometer-ribbon-inner"><span
                                                            class="odometer-value">0</span></span></span></span></span><span
                                            class="odometer-digit"><span class="odometer-digit-spacer">8</span><span
                                                class="odometer-digit-inner"><span class="odometer-ribbon"><span
                                                        class="odometer-ribbon-inner"><span
                                                            class="odometer-value">0</span></span></span></span></span>
                                    </div>
                                </span><span class="sign-icon">+</span></h3>
                            <p>Project Completed</p>
                        </div>
                    </div>

                    <div class="col-lg-6 col-6 col-6">
                        <div class="single-fun-facts">
                            <h3><span class="odometer odometer-auto-theme" data-count="160">
                                    <div class="odometer-inside"><span class="odometer-digit"><span
                                                class="odometer-digit-spacer">8</span><span
                                                class="odometer-digit-inner"><span class="odometer-ribbon"><span
                                                        class="odometer-ribbon-inner"><span
                                                            class="odometer-value">1</span></span></span></span></span><span
                                            class="odometer-digit"><span class="odometer-digit-spacer">8</span><span
                                                class="odometer-digit-inner"><span class="odometer-ribbon"><span
                                                        class="odometer-ribbon-inner"><span
                                                            class="odometer-value">6</span></span></span></span></span><span
                                            class="odometer-digit"><span class="odometer-digit-spacer">8</span><span
                                                class="odometer-digit-inner"><span class="odometer-ribbon"><span
                                                        class="odometer-ribbon-inner"><span
                                                            class="odometer-value">0</span></span></span></span></span>
                                    </div>
                                </span><span class="sign-icon">+</span></h3>
                            <p>Satisfied Clients</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End About Section -->


<!-- Start Services Section -->
<section class="services-section">
    <div class="container">
        <div class="section-title">
            <span>Services</span>
            <h3>How We Can Help?</h3>
        </div>

        <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="single-services-box">
                    <div class="icon" style="background:">
                        <img class="service-icon" src="{{ asset('img/icon_1578287956.svg')}}" alt="icon">
                        <img class="hover-img" src="{{ asset('img/hover_icon_1578287956.svg')}}" alt="icon">
                    </div>
                    <h3><a href="https://softdevltd.com/ultraline/service/mobile-app-development">Mobile App
                            Development</a></h3>
                    <p>mobile app developers have been creating iOS and Android apps for so many years that it’s not
                        just their passion&nbsp;</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="single-services-box">
                    <div class="icon" style="background:#cafbf1">
                        <img class="service-icon" src="{{ asset('img/icon_1578288552.svg')}}" alt="icon">
                        <img class="hover-img" src="{{ asset('img/hover_icon_1578288552.svg')}}" alt="icon">
                    </div>
                    <h3><a href="https://softdevltd.com/ultraline/service/web-development">Web Development</a></h3>
                    <p>We’ve built mobile backend systems as well as web applications across numerous industry
                        verticals. Whether it’s PHP.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="single-services-box">
                    <div class="icon" style="background:#C5EBF9">
                        <img class="service-icon" src="{{ asset('img/icon_1578288703.svg')}}" alt="icon">
                        <img class="hover-img" src="{{ asset('img/hover_icon_1578288703.svg')}}" alt="icon">
                    </div>
                    <h3><a href="https://softdevltd.com/ultraline/service/uiux-design">UI/UX Design</a></h3>
                    <p>Design is always a fundamental contributor to the experience of digital products. Even when you
                        don’t have one.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="single-services-box">
                    <div class="icon" style="background:#DDD5FB">
                        <img class="service-icon" src="{{ asset('img/icon_1578288792.svg')}}" alt="icon">
                        <img class="hover-img" src="{{ asset('img/hover_icon_1578288792.svg')}}" alt="icon">
                    </div>
                    <h3><a href="https://softdevltd.com/ultraline/service/mobile-games">Mobile Games</a></h3>
                    <p>The gaming industry is at rise like never before and it’s not surprising why app ecosystems have
                        dedicated their focus</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="single-services-box">
                    <div class="icon" style="background:#F8FBD5">
                        <img class="service-icon" src="{{ asset('img/icon_1578288901.svg')}}" alt="icon">
                        <img class="hover-img" src="{{ asset('img/hover_icon_1578288901.svg')}}" alt="icon">
                    </div>
                    <h3><a href="https://softdevltd.com/ultraline/service/software-testing-and-qa">Software Testing And
                            QA</a></h3>
                    <p>software testing is a crucial part of each software development project. As a software
                        outsourcing company with more than 5 years</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="single-services-box">
                    <div class="icon" style="background:#FCDEEE">
                        <img class="service-icon" src="{{ asset('img/icon_1578288963.svg')}}" alt="icon">
                        <img class="hover-img" src="{{ asset('img/hover_icon_1578288963.svg')}}" alt="icon">
                    </div>
                    <h3><a href="https://softdevltd.com/ultraline/service/managed-maintenance-services">Managed
                            Maintenance Services</a></h3>
                    <p>As mature problems-solvers, we have over a five year's of experience in tackling challenging
                        business-critical projects</p>
                </div>
            </div>

        </div>
    </div>

    <div class="default-animation">
        <div class="shape-img1"><img src="{{ asset('img/12.svg')}}" alt="image"></div>
        <div class="shape-img2"><img src="{{ asset('img/13.svg')}}" alt="image"></div>
        <div class="shape-img3"><img src="{{ asset('img/14.png')}}" alt="image"></div>
        <div class="shape-img4"><img src="{{ asset('img/15.png')}}" alt="image"></div>
        <div class="shape-img5"><img src="{{ asset('img/2.png')}}" alt="image"></div>
    </div>
</section>
<!-- End Services Section -->

<!-- Start Choose Section -->
<section class="choose-section">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-12">
                <div class="choose-content-area">
                    <span>Why Choose Us</span>
                    <h3>Outstanding Digital Experience</h3>
                    <p>We believe that our transparency with our clients is what sets us apart from our competition.If
                        you are looking for a trusted IT partner and your company shares similar standards to our
                        company we would really like to hear from you</p>

                    <div class="choose-text">
                        <i class="flaticon-check-mark"></i>
                        <h4>CUSTOMER FOCUSED</h4>
                        <p>We simply listen to our clients. Our dedicated account management team is in constant contact
                            with our customers to ensure that we deliver in every aspect of our dealings.</p>
                    </div>

                    <div class="choose-text">
                        <i class="flaticon-check-mark"></i>
                        <h4>PROCESS ORIENTED</h4>
                        <p>We are a process oriented organization. This ensures prompt and high quality delivery from
                            simple helpdesk tasks to complex multi vendor projects with strict timeframes.</p>
                    </div>

                    <div class="choose-text">
                        <i class="flaticon-check-mark"></i>
                        <h4>CUTTING EDGE TOOLS</h4>
                        <p>We believe in investing in our “tools of the trade”. Our company has made some significant
                            investments in the most advanced tools that enable us to deliver in the most demanding
                            environments.</p>
                    </div>

                    <div class="choose-btn">
                        <a href="https://softdevltd.com/ultraline/service" class="default-btn-one">Discover More</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-6 col-md-12">
                <div class="choose-image">
                    <img src="{{ asset('img/choose-image.png')}}" alt="image">
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Choose Section -->


<!-- Start Testimonial Section -->
<section class="testimonial-section ptb-100">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-4">
                <div class="testimonial-content-area">
                    <span>Testimonial</span>
                    <h3>What Our Client Say</h3>
                    <p>We are very fortunate to have formed excellent partnerships with many of our clients. And we’ve
                        formed more than just working relationships with them; we have formed true friendships. Here’s
                        what they’re saying about us</p>
                </div>
            </div>

            <div class="col-lg-8">
                <div class="testimonial-slides owl-carousel owl-theme owl-loaded owl-drag">









                    <div class="owl-stage-outer">
                        <div class="owl-stage"
                            style="transform: translate3d(-1140px, 0px, 0px); transition: all 2s ease 0s; width: 2660px;">
                            <div class="owl-item cloned" style="width: 350px; margin-right: 30px;">
                                <div class="testimonial-single-item">
                                    <div class="testimonial-image">
                                        <img src="{{ asset('img/testimonial_1577949528.jpg')}}" alt="Micheal Kamey">
                                    </div>

                                    <div class="testimonial-content-text">
                                        <h3>Micheal Kamey</h3>
                                        <span>Project Manager, London, UK </span>
                                        <div class="icon">
                                            <i class="flaticon-quote"></i>
                                        </div>
                                        <p>They have been really very helpful and very patient with me as sometimes I
                                            can be really busy and not have time to speak or communicate with them.
                                            I will definitely recommend webase to everyone.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="owl-item cloned" style="width: 350px; margin-right: 30px;">
                                <div class="testimonial-single-item">
                                    <div class="testimonial-image">
                                        <img src="{{ asset('img/testimonial_1577949581.jpg')}}" alt="Thomas Linehan">
                                    </div>

                                    <div class="testimonial-content-text">
                                        <h3>Thomas Linehan</h3>
                                        <span>Realestate Broker, USA </span>
                                        <div class="icon">
                                            <i class="flaticon-quote"></i>
                                        </div>
                                        <p>An overall great experience working with ultraline. Did everything that I
                                            requested and also provided additional feedback to help with my website.
                                            Very responsive and answered all of my messages right away. Definitely will
                                            be using again for future projects!</p>
                                    </div>
                                </div>
                            </div>
                            <div class="owl-item" style="width: 350px; margin-right: 30px;">
                                <div class="testimonial-single-item">
                                    <div class="testimonial-image">
                                        <img src="{{ asset('img/testimonial_1577948525.jpg')}}" alt="Jhone Makey">
                                    </div>

                                    <div class="testimonial-content-text">
                                        <h3>Jhone Makey</h3>
                                        <span>CEO, Sri Lanka </span>
                                        <div class="icon">
                                            <i class="flaticon-quote"></i>
                                        </div>
                                        <p>Very capable and supporting team of developers. I am very happy with their
                                            work and will definitely work with them again. I can highly recommend them
                                            for anyone looking at any website related work.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="owl-item active" style="width: 350px; margin-right: 30px;">
                                <div class="testimonial-single-item">
                                    <div class="testimonial-image">
                                        <img src="{{ asset('img/testimonial_1577949528.jpg')}}" alt="Micheal Kamey">
                                    </div>

                                    <div class="testimonial-content-text">
                                        <h3>Micheal Kamey</h3>
                                        <span>Project Manager, London, UK </span>
                                        <div class="icon">
                                            <i class="flaticon-quote"></i>
                                        </div>
                                        <p>They have been really very helpful and very patient with me as sometimes I
                                            can be really busy and not have time to speak or communicate with them.
                                            I will definitely recommend webase to everyone.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="owl-item active" style="width: 350px; margin-right: 30px;">
                                <div class="testimonial-single-item">
                                    <div class="testimonial-image">
                                        <img src="{{ asset('img/testimonial_1577949581.jpg')}}" alt="Thomas Linehan">
                                    </div>

                                    <div class="testimonial-content-text">
                                        <h3>Thomas Linehan</h3>
                                        <span>Realestate Broker, USA </span>
                                        <div class="icon">
                                            <i class="flaticon-quote"></i>
                                        </div>
                                        <p>An overall great experience working with ultraline. Did everything that I
                                            requested and also provided additional feedback to help with my website.
                                            Very responsive and answered all of my messages right away. Definitely will
                                            be using again for future projects!</p>
                                    </div>
                                </div>
                            </div>
                            <div class="owl-item cloned" style="width: 350px; margin-right: 30px;">
                                <div class="testimonial-single-item">
                                    <div class="testimonial-image">
                                        <img src="{{ asset('img/testimonial_1577948525.jpg')}}" alt="Jhone Makey">
                                    </div>

                                    <div class="testimonial-content-text">
                                        <h3>Jhone Makey</h3>
                                        <span>CEO, Sri Lanka </span>
                                        <div class="icon">
                                            <i class="flaticon-quote"></i>
                                        </div>
                                        <p>Very capable and supporting team of developers. I am very happy with their
                                            work and will definitely work with them again. I can highly recommend them
                                            for anyone looking at any website related work.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="owl-item cloned" style="width: 350px; margin-right: 30px;">
                                <div class="testimonial-single-item">
                                    <div class="testimonial-image">
                                        <img src="{{ asset('img/testimonial_1577949528.jpg')}}" alt="Micheal Kamey">
                                    </div>

                                    <div class="testimonial-content-text">
                                        <h3>Micheal Kamey</h3>
                                        <span>Project Manager, London, UK </span>
                                        <div class="icon">
                                            <i class="flaticon-quote"></i>
                                        </div>
                                        <p>They have been really very helpful and very patient with me as sometimes I
                                            can be really busy and not have time to speak or communicate with them.
                                            I will definitely recommend webase to everyone.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="owl-nav"><button type="button" role="presentation" class="owl-prev"><i
                                class="flaticon-left-arrow-1"></i></button><button type="button" role="presentation"
                            class="owl-next"><i class="flaticon-right-arrow-1"></i></button></div>
                    <div class="owl-dots"><button role="button" class="owl-dot active"><span></span></button><button
                            role="button" class="owl-dot"><span></span></button></div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Testimonial Section -->
<!-- Partner section -->
<div class="partner-section services-section">

    <div class="container">
        <div class="partner-slider owl-carousel owl-theme owl-loaded owl-drag">



















            <div class="owl-stage-outer">
                <div class="owl-stage"
                    style="transform: translate3d(-1140px, 0px, 0px); transition: all 0s ease 0s; width: 4332px;">
                    <div class="owl-item cloned" style="width: 198px; margin-right: 30px;">
                        <div class="partner-item">
                            <a href="https://softdevltd.com/ultraline/#">
                                <img src="{{ asset('img/client_1583433283.png')}}" alt="partner">
                            </a>
                        </div>
                    </div>
                    <div class="owl-item cloned" style="width: 198px; margin-right: 30px;">
                        <div class="partner-item">
                            <a href="https://softdevltd.com/ultraline/#">
                                <img src="{{ asset('img/client_1583433258.png')}}" alt="partner">
                            </a>
                        </div>
                    </div>
                    <div class="owl-item cloned" style="width: 198px; margin-right: 30px;">
                        <div class="partner-item">
                            <a href="https://softdevltd.com/ultraline/#">
                                <img src="{{ asset('img/client_1583433243.png')}}" alt="partner">
                            </a>
                        </div>
                    </div>
                    <div class="owl-item cloned" style="width: 198px; margin-right: 30px;">
                        <div class="partner-item">
                            <a href="https://softdevltd.com/ultraline/#">
                                <img src="{{ asset('img/client_1583433228.png')}}" alt="partner">
                            </a>
                        </div>
                    </div>
                    <div class="owl-item cloned" style="width: 198px; margin-right: 30px;">
                        <div class="partner-item">
                            <a href="https://softdevltd.com/ultraline/#">
                                <img src="{{ asset('img/client_1583433212.png')}}" alt="partner">
                            </a>
                        </div>
                    </div>
                    <div class="owl-item active" style="width: 198px; margin-right: 30px;">
                        <div class="partner-item">
                            <a href="https://softdevltd.com/ultraline/#">
                                <img src="{{ asset('img/client_1583433142.png')}}" alt="partner">
                            </a>
                        </div>
                    </div>
                    <div class="owl-item active" style="width: 198px; margin-right: 30px;">
                        <div class="partner-item">
                            <a href="https://softdevltd.com/ultraline/#">
                                <img src="{{ asset('img/client_1583433324.png')}}" alt="partner">
                            </a>
                        </div>
                    </div>
                    <div class="owl-item active" style="width: 198px; margin-right: 30px;">
                        <div class="partner-item">
                            <a href="https://softdevltd.com/ultraline/#">
                                <img src="{{ asset('img/client_1583433311.png')}}" alt="partner">
                            </a>
                        </div>
                    </div>
                    <div class="owl-item active" style="width: 198px; margin-right: 30px;">
                        <div class="partner-item">
                            <a href="https://softdevltd.com/ultraline/#">
                                <img src="{{ asset('img/client_1583433297.png')}}" alt="partner">
                            </a>
                        </div>
                    </div>
                    <div class="owl-item active" style="width: 198px; margin-right: 30px;">
                        <div class="partner-item">
                            <a href="https://softdevltd.com/ultraline/#">
                                <img src="{{ asset('img/client_1583433283.png')}}" alt="partner">
                            </a>
                        </div>
                    </div>
                    <div class="owl-item" style="width: 198px; margin-right: 30px;">
                        <div class="partner-item">
                            <a href="https://softdevltd.com/ultraline/#">
                                <img src="{{ asset('img/client_1583433258.png')}}" alt="partner">
                            </a>
                        </div>
                    </div>
                    <div class="owl-item" style="width: 198px; margin-right: 30px;">
                        <div class="partner-item">
                            <a href="https://softdevltd.com/ultraline/#">
                                <img src="{{ asset('img/client_1583433243.png')}}" alt="partner">
                            </a>
                        </div>
                    </div>
                    <div class="owl-item" style="width: 198px; margin-right: 30px;">
                        <div class="partner-item">
                            <a href="https://softdevltd.com/ultraline/#">
                                <img src="{{ asset('img/client_1583433228.png')}}" alt="partner">
                            </a>
                        </div>
                    </div>
                    <div class="owl-item" style="width: 198px; margin-right: 30px;">
                        <div class="partner-item">
                            <a href="https://softdevltd.com/ultraline/#">
                                <img src="{{ asset('img/client_1583433212.png')}}" alt="partner">
                            </a>
                        </div>
                    </div>
                    <div class="owl-item cloned" style="width: 198px; margin-right: 30px;">
                        <div class="partner-item">
                            <a href="https://softdevltd.com/ultraline/#">
                                <img src="{{ asset('img/client_1583433142.png')}}" alt="partner">
                            </a>
                        </div>
                    </div>
                    <div class="owl-item cloned" style="width: 198px; margin-right: 30px;">
                        <div class="partner-item">
                            <a href="https://softdevltd.com/ultraline/#">
                                <img src="{{ asset('img/client_1583433324.png')}}" alt="partner">
                            </a>
                        </div>
                    </div>
                    <div class="owl-item cloned" style="width: 198px; margin-right: 30px;">
                        <div class="partner-item">
                            <a href="https://softdevltd.com/ultraline/#">
                                <img src="{{ asset('img/client_1583433311.png')}}" alt="partner">
                            </a>
                        </div>
                    </div>
                    <div class="owl-item cloned" style="width: 198px; margin-right: 30px;">
                        <div class="partner-item">
                            <a href="https://softdevltd.com/ultraline/#">
                                <img src="{{ asset('img/client_1583433297.png')}}" alt="partner">
                            </a>
                        </div>
                    </div>
                    <div class="owl-item cloned" style="width: 198px; margin-right: 30px;">
                        <div class="partner-item">
                            <a href="https://softdevltd.com/ultraline/#">
                                <img src="{{ asset('img/client_1583433283.png')}}" alt="partner">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="owl-nav disabled"><button type="button" role="presentation" class="owl-prev"><span
                        aria-label="Previous">‹</span></button><button type="button" role="presentation"
                    class="owl-next"><span aria-label="Next">›</span></button></div>
            <div class="owl-dots disabled"></div>
        </div>
    </div>
</div>
<!-- End Partner section -->
@endsection
