@extends('layouts.web')
@section('content')
<!-- Start Page Title Area -->
<div class="page-title-area defaultbg"
    style="background-image:url(https://softdevltd.com/ultraline/local/public/uploads/page/);">
    <div class="d-table">
        <div class="d-table-cell">
            <div class="container">
                <div class="page-title-content">
                    <h2> Quote </h2>
                    <ul>
                        <li><a href="https://softdevltd.com/ultraline">Home</a></li>
                        <li> Quote </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Page Title Area -->
<div class="container">
    <div class="row justify-content-center">

        <div class="col-lg-8 col-md-8">
            <form class="quote_form" id="contactForm" action="https://softdevltd.com/ultraline/send_quote"
                method="post">
                <input type="hidden" name="_token" value="XaTrN5XIfqEZOXanN4izp7zTfO9zdvebK38ZsyJy">
                <h3 class="text-center m-3">Get a Quote</h3>
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


                    <div class="col-lg-6 col-md-12">
                        <div class="form-group">
                            <select class="form-control" name="service_name">
                                <option value="">Select Service</option>
                                <option value="Psd To HTML">Psd To HTML</option>
                                <option value="Psd To WordPress">Psd To WordPress</option>
                                <option value="Newsportal Website">Newsportal Website</option>
                                <option value="Ecommerce Website"> Ecommerce Website</option>
                                <option value="Software Development">Software Development</option>
                                <option value="Website Redesign">Website Redesign</option>
                                <option value="Website Update">Website Update</option>
                                <option value="Domain &amp; Hosting">Domain &amp; Hosting</option>
                            </select>
                        </div>
                    </div>


                    <div class="col-lg-6 col-md-12">
                        <div class="form-group">
                            <select class="form-control" name="budget">
                                <option value="">Select Budget</option>
                                <option value="$0-$50">$0-$50</option>
                                <option value="$50-$100">$50-$100</option>
                                <option value="$100-$300">$100-$300</option>
                                <option value="$300-$500">$300-$500</option>
                                <option value="$500-$k">$500-$k</option>
                                <option value="$1k-2k">$1k-2k</option>
                                <option value="2k+">2k+</option>
                            </select>
                        </div>
                    </div>



                    <div class="col-lg-12 col-md-12">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Phone" name="phone" value="">
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
                        <div class="send-btn text-center">
                            <button type="submit" class="send-btn-one">Send Quote</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
