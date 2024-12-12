@php($title = "Video ")
@section('meta_desc') @endsection

@extends('layouts.default')
@section('content')

<!--==============================
    Breadcumb
============================== -->
<section class="page-title">
    <div class="auto-container">
        <h2>Video Slider</h2>
        <ul class="bread-crumb clearfix">
            <li><a href="{{ route('home')}}">Home</a></li>
            <li>Video Slider</li>
        </ul>
    </div>
</section>



<!-- Video Slider Section -->
<section class="video-slider">
    <div class="auto-container">

        <div class="sec-title text-center">
            <h2 class="sec-title_heading">Video Slider</h2>
        </div>
        <!-- Swiper Container -->
        <div class="swiper-container video-slider-container">
            <div class="swiper-wrapper">
                <!-- Slide 1 -->
                <div class="swiper-slide">
                    <div class="image">
                        <img src="{{ asset('/resources/assets/backgrounds/Dialysis Department.png') }}" alt="Video 1" />
                        <a href="https://www.youtube.com/watch?v=kxPCFljwJws" class="lightbox-video video-play fa fa-play">
                            <i class="ripple"></i>
                        </a>
                    </div>
                </div>
                <!-- Slide 2 -->
                <div class="swiper-slide">
                    <div class="image">
                        <img src="{{ asset('/resources/assets/backgrounds/Dialysis1.png') }}" alt="Video 2" />
                        <a href="https://www.youtube.com/watch?v=ICKdsdVbB0c" class="lightbox-video video-play fa fa-play">
                            <i class="ripple"></i>
                        </a>
                    </div>
                </div>
                <!-- Slide 3 -->
                <div class="swiper-slide">
                    <div class="image">
                        <img src="{{ asset('/resources/assets/backgrounds/Dialysis Department.png') }}" alt="Video 3" />
                        <a href="https://www.youtube.com/watch?v=def456uvw" class="lightbox-video video-play fa fa-play">
                            <i class="ripple"></i>
                        </a>
                    </div>
                </div>
            </div>
            <!-- Add Pagination -->
            <div class="swiper-pagination"></div>
            <!-- Add Navigation -->
            <!-- <div class="swiper-button-next"></div>
					<div class="swiper-button-prev"></div> -->
        </div>
    </div>
</section>
<!-- End Video Slider Section -->







@stop