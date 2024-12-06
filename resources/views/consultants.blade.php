@php($title = "Consultants ")
@section('meta_desc') @endsection

@extends('layouts.default')
@section('content')

<!--==============================
    Breadcumb
============================== -->
<!-- <div class="breadcumb-wrapper ">
    <div class="parallax"></div>
    <div class="container z-index-common">
        <div class="breadcumb-content">
            <h1 class="breadcumb-title">Consultants</h1>
            <div class="breadcumb-menu-wrap">
                <i class="far fa-home-lg"></i>
                <ul class="breadcumb-menu">
                    <li><a href="{{ route('home')}}">Home</a></li>
                    <li class="active">Consultants</li>
                </ul>
            </div>
        </div>
    </div>
</div> -->

<section class="page-title">
    <div class="auto-container">
        <h2>Consultants</h2>
        <ul class="bread-crumb clearfix">
            <li><a href="{{ route('home')}}">Home</a></li>
            <li>Consultants</li>
        </ul>
    </div>
</section>


<!-- Sidebar Page Container -->
<div class="sidebar-page-container left-sidebar">
    <div class="auto-container">
        <!-- Sec Title -->
        <div class="sec-title text-center mt-0 ">
            <h2 class="sec-title_heading">Our Consultants</h2>
        </div>
        <div class="row clearfix">

            <!-- Sidebar Side -->
            <div class="sidebar-side col-lg-4 col-md-12 col-sm-12">
                @include('includes.consultant-asidebar')
            </div>

            <!-- Content Side -->
            <div class="content-side col-lg-8 col-md-12 col-sm-12">
                <div class="department-detail">
                    <div class="inner-box auto-container">

                        <!-- <div class="auto-container"> -->

                        <div class="row clearfix">

                            <!-- Team Block -->
                            <div class="team-block-two col-lg-4 col-md-6 col-sm-12">
                                <div class="inner-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                                    <div class="image">
                                        <img src="{{ asset('resources/assets/all-doctors/dr-satyavan-sharma.jpg') }}" alt="" />
                                    </div>
                                    <div class="lower-content">
                                        <div class="content">
                                            <h5><a href="{{ route('dr-satyavan-sharma')}}">Dr. Satyavan Sharma</a></h5>
                                            <div class="designation">MD, D.M (Cardiology), MNAMS</div>
                                            <!-- check profile-->
                                            <div class="specialist-one_button">
                                                <a href="{{ route('dr-satyavan-sharma')}}" class="theme-btn btn-style-one">
                                                    <span class="btn-wrap">
                                                        <span class="text-one">View Profile</span>
                                                        <span class="text-two">View Profile</span>
                                                    </span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Team Block -->
                            <div class="team-block-two col-lg-4 col-md-6 col-sm-12">
                                <div class="inner-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                                    <div class="image">
                                        <img src="{{ asset('resources/assets/all-doctors/dr-satyavan-sharma.jpg') }}" alt="" />
                                    </div>
                                    <div class="lower-content">
                                        <div class="content">
                                            <h5><a href="{{ route('dr-satyavan-sharma')}}">Dr. Satyavan Sharma</a></h5>
                                            <div class="designation">MD, D.M (Cardiology), MNAMS</div>
                                            <!-- check profile-->
                                            <div class="specialist-one_button">
                                                <a href="{{ route('dr-satyavan-sharma')}}" class="theme-btn btn-style-one">
                                                    <span class="btn-wrap">
                                                        <span class="text-one">View Profile</span>
                                                        <span class="text-two">View Profile</span>
                                                    </span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Team Block -->
                            <div class="team-block-two col-lg-4 col-md-6 col-sm-12">
                                <div class="inner-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                                    <div class="image">
                                        <img src="{{ asset('resources/assets/all-doctors/dr-satyavan-sharma.jpg') }}" alt="" />
                                    </div>
                                    <div class="lower-content">
                                        <div class="content">
                                            <h5><a href="{{ route('dr-satyavan-sharma')}}">Dr. Satyavan Sharma</a></h5>
                                            <div class="designation">MD, D.M (Cardiology), MNAMS</div>
                                            <!-- check profile-->
                                            <div class="specialist-one_button">
                                                <a href="{{ route('dr-satyavan-sharma')}}" class="theme-btn btn-style-one">
                                                    <span class="btn-wrap">
                                                        <span class="text-one">View Profile</span>
                                                        <span class="text-two">View Profile</span>
                                                    </span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>



                        </div>

                        <!-- </div> -->

                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

<!-- Sidebar Page Container -->


@stop