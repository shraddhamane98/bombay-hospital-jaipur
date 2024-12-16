@php($title = "Cardiology ")
@section('meta_desc') @endsection

@extends('layouts.default')
@section('content')

<!--==============================
    Breadcumb
============================== -->
<section class="page-title">
    <div class="auto-container">
        <h2>Cardiology</h2>
        <ul class="bread-crumb clearfix">
            <li><a href="{{ route('home')}}">Home</a></li>
            <li>Cardiology</li>
        </ul>
    </div>
</section>


<!-- Sidebar Page Container -->
<div class="sidebar-page-container left-sidebar">
    <div class="auto-container">

        <div class="row clearfix">
            <!-- Content Side -->
            <div class="content-side col-lg-12 col-md-12 col-sm-12">
                <div class="department-detail">
                    <div class="inner-box auto-container">

                        <div class="row clearfix">
                            <h1 class="department-title">Cardiology Department at Bombay Hospital, Jaipur</h1>
                            <div class="image department-img">
                              <img src="{{ asset('/resources/assets/departments-imgs/cardiology-dept.jpg') }}" alt="" />
                            </div>

                            <p>The Cardiology Department at Bombay Hospital, Jaipur, is renowned for providing advanced cardiac care with compassion and precision.</p>

                            <h3>Pioneering Cardiac Interventions</h3>
                            <ul class="doctor-detail_list-two">
                                <li><strong>Life-saving procedures, including angiographies and angioplasties.</strong></li>
                                <li><strong>Advanced diagnostic tools such as Doppler, echocardiography, and PET scans.</strong></li>
                            </ul>

                            <h3>Training the Next Generation</h3>
                            <p>The department supports postgraduate training for young cardiologists, preparing them to excel in the field.</p>

                            <p>Choose Bombay Hospital, Jaipur, for comprehensive, cutting-edge heart care.</p>
                        </div>

                    </div>
                </div>
            </div>
        </div>


        <div class="row clearfix ">

            <div class="banner-gastroenterology all-depts p-3 text-center mb-4">
                <h4 class="mb-0">List of Consultants</h4>
            </div>

            <!-- Team Block -->
            <div class="team-block-two col-lg-4 col-md-6 col-sm-12 ">
                <div class="inner-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                    <div class="image">
                        <img src="{{ asset('resources/assets/all-doctors/m-doctor.png') }}" alt="" />
                    </div>
                    <div class="lower-content">
                        <div class="content">
                            <h5><a href="{{ route('dr-satyavan-sharma')}}">Dr Amita Choudhary </a></h5>
                            <div class="designation">Non Invasive Cardiology </div>
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


    </div>
</div>

<!-- Sidebar Page Container -->


@stop