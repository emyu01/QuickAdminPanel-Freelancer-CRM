@extends('layouts.web')
@section('content')
<!-- Start Page Title Area -->
<div class="page-title-area defaultbg"
    style="background-image:url(https://softdevltd.com/ultraline/local/public/uploads/page/);">
    <div class="d-table">
        <div class="d-table-cell">
            <div class="container">
                <div class="page-title-content">
                    <h2> Services </h2>
                    <ul>
                        <li><a href="https://softdevltd.com/ultraline">Home</a></li>
                        <li> Services </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Page Title Area -->


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
                        <img class="service-icon" src="./Services - Ultraline_files/icon_1578287956.svg" alt="icon">
                        <img class="hover-img" src="./Services - Ultraline_files/hover_icon_1578287956.svg" alt="icon">
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
                        <img class="service-icon" src="./Services - Ultraline_files/icon_1578288552.svg" alt="icon">
                        <img class="hover-img" src="./Services - Ultraline_files/hover_icon_1578288552.svg" alt="icon">
                    </div>
                    <h3><a href="https://softdevltd.com/ultraline/service/web-development">Web Development</a></h3>
                    <p>We’ve built mobile backend systems as well as web applications across numerous industry
                        verticals. Whether it’s PHP.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="single-services-box">
                    <div class="icon" style="background:#C5EBF9">
                        <img class="service-icon" src="./Services - Ultraline_files/icon_1578288703.svg" alt="icon">
                        <img class="hover-img" src="./Services - Ultraline_files/hover_icon_1578288703.svg" alt="icon">
                    </div>
                    <h3><a href="https://softdevltd.com/ultraline/service/uiux-design">UI/UX Design</a></h3>
                    <p>Design is always a fundamental contributor to the experience of digital products. Even when you
                        don’t have one.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="single-services-box">
                    <div class="icon" style="background:#DDD5FB">
                        <img class="service-icon" src="./Services - Ultraline_files/icon_1578288792.svg" alt="icon">
                        <img class="hover-img" src="./Services - Ultraline_files/hover_icon_1578288792.svg" alt="icon">
                    </div>
                    <h3><a href="https://softdevltd.com/ultraline/service/mobile-games">Mobile Games</a></h3>
                    <p>The gaming industry is at rise like never before and it’s not surprising why app ecosystems have
                        dedicated their focus</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="single-services-box">
                    <div class="icon" style="background:#F8FBD5">
                        <img class="service-icon" src="./Services - Ultraline_files/icon_1578288901.svg" alt="icon">
                        <img class="hover-img" src="./Services - Ultraline_files/hover_icon_1578288901.svg" alt="icon">
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
                        <img class="service-icon" src="./Services - Ultraline_files/icon_1578288963.svg" alt="icon">
                        <img class="hover-img" src="./Services - Ultraline_files/hover_icon_1578288963.svg" alt="icon">
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
        <div class="shape-img1"><img src="./Services - Ultraline_files/12.svg" alt="image"></div>
        <div class="shape-img2"><img src="./Services - Ultraline_files/13.svg" alt="image"></div>
        <div class="shape-img3"><img src="./Services - Ultraline_files/14.png" alt="image"></div>
        <div class="shape-img4"><img src="./Services - Ultraline_files/15.png" alt="image"></div>
        <div class="shape-img5"><img src="./Services - Ultraline_files/2.png" alt="image"></div>
    </div>
</section>
<!-- End Services Section -->
@include('partials.subscriber')
@endsection
