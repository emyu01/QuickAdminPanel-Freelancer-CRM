@extends('layouts.web')
@section('content')
<!-- Start Page Title Area -->
<div class="page-title-area defaultbg"
    style="background-image:url(https://softdevltd.com/ultraline/local/public/uploads/page/);">
    <div class="d-table">
        <div class="d-table-cell">
            <div class="container">
                <div class="page-title-content">
                    <h2>
                        Contact
                    </h2>
                    <ul>
                        <li><a href="https://softdevltd.com/ultraline">Home</a></li>
                        <li> Contact </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Page Title Area -->

<!-- Start Contact Area -->
<section class="contact-area ptb-100 mb-minus40">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-4 col-md-12">
                <div class="contact-box">
                    <div class="icon">
                        <i class="fa fa-phone"></i>
                    </div>

                    <div class="content">
                        <h4>Phone / Fax</h4>
                        <p><a href="https://softdevltd.com/ultraline/contact#">+1-202-555-0183</a></p>
                        <p><a href="https://softdevltd.com/ultraline/contact#">+1-202-555-0145</a></p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-12">
                <div class="contact-box">
                    <div class="icon">
                        <i class="fas fa-envelope"></i>
                    </div>

                    <div class="content">
                        <h4>E-mail</h4>
                        <p><a href="https://softdevltd.com/ultraline/contact#">info@youwebsite.com</a></p>
                        <p><a href="https://softdevltd.com/ultraline/contact#">info@youwebsite.com</a></p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-12">
                <div class="contact-box">
                    <div class="icon">
                        <i class="fa fa-map-marker"></i>
                    </div>

                    <div class="content">
                        <h4>Location</h4>
                        <p>383/a, katasur Mohammodpur, Dhaka, Bangladesh</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-6 col-md-6">
                <div class="contact-text mt-minus15">

                    <iframe src="./Contact - Ultraline_files/embed.html" width="100%" height="520" frameborder="0"
                        style="border:0;" allowfullscreen=""></iframe>
                </div>
            </div>



            <div class="col-lg-6 col-md-6">
                <form id="contactForm" action="https://softdevltd.com/ultraline/send-contact-email" method="post">
                    <input type="hidden" name="_token" value="XaTrN5XIfqEZOXanN4izp7zTfO9zdvebK38ZsyJy">
                    <h3>Get in Touch</h3>
                    <div class="row">
                        <div class="col-lg-6 col-md-12">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Name" name="name" value="">

                            </div>
                        </div>

                        <div class="col-lg-6 col-md-12">
                            <div class="form-group">
                                <input type="email" class="form-control" placeholder="Email" name="email" value="">
                            </div>
                        </div>

                        <div class="col-lg-12 col-md-12">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Subject" name="subject" value="">
                            </div>
                        </div>

                        <div class="col-lg-12 col-md-12">
                            <div class="form-group">
                                <textarea name="message" class="form-control" placeholder="Your Message"></textarea>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12">
                            <div class="form-group">
                                <label for="mathgroup">Please solve the following math function: 6 * 4</label>
                                <input class="form-control" id="mathcaptcha" type="text" name="mathcaptcha"
                                    required="required" value="">

                            </div>
                        </div>

                        <div class="col-lg-12 col-md-12">
                            <div class="send-btn">
                                <button type="submit" class="send-btn-one">Send Message</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection
