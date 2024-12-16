@php($title = "Neurology ")
@section('meta_desc') @endsection

@extends('layouts.default')
@section('content')

<!--==============================
    Breadcumb
============================== -->
<section class="page-title">
    <div class="auto-container">
        <h2>Neurology</h2>
        <ul class="bread-crumb clearfix">
            <li><a href="{{ route('home')}}">Home</a></li>
            <li>Neurology</li>
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
                            <h1 class="department-title">Neurology at Bombay Hospital, Jaipur</h1>
                            <div class="image department-img">
                               <img src="{{ asset('/resources/assets/departments-imgs/neurology-dept.jpg') }}" alt="" />
                            </div>

                            <p>Neurology is a specialized branch of medicine focused on diagnosing and treating disorders affecting the brain, spinal cord, and peripheral nerves. The Neurology Department at Bombay Hospital, Jaipur, is recognized for its expert care and cutting-edge technology in managing neurological conditions.</p>

                            <h3>Comprehensive Multidisciplinary Approach</h3>
                            <p>The Neurology Department collaborates with:</p>
                            <ul class="doctor-detail_list-two">
                                <li><strong>Neurosurgery</strong></li>
                                <li><strong>Critical Care</strong></li>
                                <li><strong>Neurointerventional Radiology</strong></li>
                            </ul>

                            <h3>Specialized Neurological Care</h3>
                            <ul class="doctor-detail_list-two">
                                <li><strong>Stroke, Seizure Disorders, and Brain Tumors</strong></li>
                                <li><strong>Parkinson’s Disease, Neuromuscular Disorders, and Pediatric Neurology</strong></li>
                            </ul>

                            <h3>Teaching and Training</h3>
                            <p>We offer postgraduate training programs, advancing the careers of future neurologists while continuing to deliver high-quality patient care.</p>

                            <p>Choose Bombay Hospital, Jaipur, for advanced neurological care provided by a dedicated team of specialists.</p>
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
                            <h5><a href="{{ route('dr-satyavan-sharma')}}">Dr. Shubham Gupta</a></h5>
                            <div class="designation">Neurology </div>
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