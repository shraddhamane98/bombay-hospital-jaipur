@php($title = "Contact ")
@section('meta_desc') @endsection

@extends('layouts.default')
@section('content')

<!--==============================
    Breadcumb
============================== -->
<section class="page-title">
    <div class="auto-container">
        <h2>Contact</h2>
        <ul class="bread-crumb clearfix">
            <li><a href="{{ route('home')}}">Home</a></li>
            <li>Contact</li>
        </ul>
    </div>
</section>


<!-- Contact One -->
<section class="contact-one">
    <div class="auto-container">
        <!-- Sec Title -->
        <div class="sec-title centered">
            <div class="sec-title_title">CONTACT INFO</div>
            <h2 class="sec-title_heading">Get in touch!</h2>
        </div>
        <div class="row clearfix">

            <!-- Contact Info Block -->
            <div class="contact-info-block col-lg-5 col-md-6 col-sm-12">
                <div class="contact-info-block_inner">
                    <span class="contact-info-block_icon flaticon-placeholder"></span>
                    <h4 class="contact-info-block_heading">Hospital Address</h4>
                    <div class="contact-info-block_text"><a href="https://maps.app.goo.gl/zGR7m53fyZsggtgp9">Sitapura Industrial Area, Sitapura, Jaipur, Shri Kishanpura, Rajasthan 302022</a> </div>
                </div>
            </div>

            <!-- Contact Info Block -->
            <div class="contact-info-block col-lg-4 col-md-6 col-sm-12">
                <div class="contact-info-block_inner">
                    <span class="contact-info-block_icon flaticon-send-mail"></span>
                    <h4 class="contact-info-block_heading">Email</h4>
                    <div class="contact-info-block_text"><a href="mailto:bombayhospitalsjaipur.com">bombayhospitalsjaipur.com</a></div>
                </div>
            </div>

            <!-- Contact Info Block -->
            <div class="contact-info-block col-lg-3 col-md-6 col-sm-12">
                <div class="contact-info-block_inner">
                    <span class="contact-info-block_icon flaticon-telephone"></span>
                    <h4 class="contact-info-block_heading">Phone</h4>
                    <div class="contact-info-block_text"><a href="tel:02222067676">02222067676</a></div>
                </div>
            </div>

        </div>
    </div>
</section>
<!-- End Contact One -->


<!-- Contact Form One -->
<section class="contact-form-one" id="contact">
    <div class="auto-container">
        <div class="inner-container" style="background-image:url(assets/images/background/pattern-32.png)">

            <!-- Sec Title -->
            <div class="sec-title centered">
                <div class="sec-title_title">CONTACT US</div>
                <h2 class="sec-title_heading">Have questions? </h2>
            </div>

            <!-- Default Form -->
            <div class="default-form contact-form">
                <form method="post" action="" id="contact-form">
                    <div class="row clearfix">

                        <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                            <input type="text" name="username" placeholder="Name" required="">
                        </div>

                        <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                            <input type="text" name="email" placeholder="Email" required="">
                        </div>

                        <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                            <input type="text" name="phone" placeholder="Phone" required="">
                        </div>

                        <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                            <input type="text" name="department" placeholder="Department" required="">
                        </div>

                        <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                            <textarea class="" name="message" placeholder="how can i help you? Feel free to get in touch"></textarea>
                        </div>

                        <div class="col-lg-12 col-md-12 col-sm-12 form-group text-center">
                            <!-- Button Box -->
                            <div class="button-box">
                                <button class="theme-btn btn-style-one">
                                    <span class="btn-wrap">
                                        <span class="text-one">get in touch</span>
                                        <span class="text-two">get in touch</span>
                                    </span>
                                </button>
                            </div>
                        </div>

                    </div>
                </form>
            </div>
            <!-- End Default Form -->

        </div>
    </div>
</section>
<!-- End Contact Form One -->


<!-- Map One -->
<section class="map-one">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3561.804669505872!2d75.86027367611865!3d26.78249566567328!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x396dc9d6467b679f%3A0x4f6a0154a2bb292c!2sBombay%20Hospital%20Jaipur!5e0!3m2!1sen!2sin!4v1733985118024!5m2!1sen!2sin" allowfullscreen=""></iframe>


      
</section>
<!-- End Map One -->



@stop