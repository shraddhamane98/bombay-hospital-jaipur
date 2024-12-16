@php($title = "Radiation Oncology ")
@section('meta_desc') @endsection

@extends('layouts.default')
@section('content')

<!--==============================
    Breadcumb
============================== -->
<section class="page-title">
    <div class="auto-container">
        <h2>Radiation Oncology</h2>
        <ul class="bread-crumb clearfix">
            <li><a href="{{ route('home')}}">Home</a></li>
            <li>Radiation Oncology</li>
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
                            <h1 class="department-title">Neurosurgery at Bombay Hospital, Jaipur</h1>
                            <div class="image department-img">
                                <img src="{{ asset('/resources/assets/departments-imgs/neurosurgery-dept.jpg') }}" alt="" />
                            </div>

                            <p>Neurosurgery focuses on the surgical treatment of disorders affecting the brain, spinal cord, and peripheral nerves. The Department of Neurosurgery at Bombay Hospital, Jaipur, is recognized for its cutting-edge techniques and comprehensive care.</p>

                            <h3>Advanced Surgical Techniques</h3>
                            <ul class="doctor-detail_list-two">
                                <li><strong>Minimally Invasive Neurosurgery</strong></li>
                                <li><strong>Neurovascular Surgery and Neuroendoscopy</strong></li>
                                <li><strong>Spinal Surgery, including Tumor Removal</strong></li>
                            </ul>

                            <h3>Comprehensive Postoperative Care</h3>
                            <p>Our Neurosurgical ICU/HDU ensures optimal care and recovery for all patients. We focus on rehabilitation for patients with neurological impairments.</p>

                            <h3>Education and Training</h3>
                            <p>The department offers specialized training and fellowships for future neurosurgeons to ensure the continued excellence of our services.</p>

                            <p>Choose Bombay Hospital, Jaipur, for world-class neurosurgical care.</p>
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
                            <h5><a href="{{ route('dr-satyavan-sharma')}}">Dr Yashpal Singh Rathore</a></h5>
                            <div class="designation">Neurosurgery and Spine Surgery </div>
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
             <div class="team-block-two col-lg-4 col-md-6 col-sm-12 ">
                <div class="inner-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                    <div class="image">
                        <img src="{{ asset('resources/assets/all-doctors/m-doctor.png') }}" alt="" />
                    </div>
                    <div class="lower-content">
                        <div class="content">
                            <h5><a href="{{ route('dr-satyavan-sharma')}}">Dr Pawan Jain</a></h5>
                            <div class="designation">Neurosurgery</div>
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