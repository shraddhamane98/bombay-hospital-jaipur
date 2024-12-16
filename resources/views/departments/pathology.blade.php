@php($title = "Pathology ")
@section('meta_desc') @endsection

@extends('layouts.default')
@section('content')

<!--==============================
    Breadcumb
============================== -->
<section class="page-title">
    <div class="auto-container">
        <h2>Pathology </h2>
        <ul class="bread-crumb clearfix">
            <li><a href="{{ route('home')}}">Home</a></li>
            <li>Pathology </li>
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

                        <div class="row clearfix ">
                            <h1 class="department-title">Pathology Department at Bombay Hospital, Jaipur</h1>
                            <div class="image department-img">
                                <img src="{{ asset('/resources/assets/departments-imgs/pathology-dept.jpg') }}" alt="" />
                            </div>

                            <p>Pathology is a medical specialty focused on diagnosing diseases through laboratory analysis of body fluids such as blood, urine, and tissue samples. It utilizes advanced tools from fields like chemistry, microbiology, hematology, molecular pathology, and immunohematology to deliver precise diagnostic outcomes. </p>

                            <p>The <b>Pathology Department at Bombay Hospital, Jaipur</b>, is one of the most advanced and reliable diagnostic centers in the region. Renowned for its accuracy and high-quality reports, the laboratory serves as a trusted resource for both clinicians and patients. It is equipped with state-of-the-art, fully automated systems from globally reputed manufacturers such as Roche, Siemens, Abbott, Sysmex, and Becton Dickinson, minimizing human intervention and significantly reducing the risk of errors.</p>

                            <p>The lab is managed by a team of dedicated and highly skilled technical professionals who are committed to maintaining the highest standards of accuracy and efficiency. A rigorous quality control system is followed to ensure consistent reliability in all test results.</p>

                            <p>Operating round the clock, the laboratory is available 24/7, 365 days a year, ensuring patients receive timely and accurate diagnostic services without delay. This unwavering commitment to excellence makes the Pathology Department at Bombay Hospital, Jaipur, a leader in diagnostic healthcare.</p>


                           

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
                            <h5><a href="">Dr Garima Sharma  </a></h5>
                            <div class="designation">Pathology  </div>
                            <!-- check profile-->
                            <div class="specialist-one_button">
                                <a href="" class="theme-btn btn-style-one">
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