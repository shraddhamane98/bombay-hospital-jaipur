@php($title = "Spine Surgery ")
@section('meta_desc') @endsection

@extends('layouts.default')
@section('content')

<!--==============================
    Breadcumb
============================== -->
<section class="page-title">
    <div class="auto-container">
        <h2>Spine Surgery</h2>
        <ul class="bread-crumb clearfix">
            <li><a href="{{ route('home')}}">Home</a></li>
            <li>Spine Surgery</li>
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
                            <h1 class="department-title">Spine Surgery at Bombay Hospital, Jaipur</h1>
                            <div class="image department-img">
                               <img src="{{ asset('/resources/assets/departments-imgs/spine-surgery-dept.jpg') }}" alt="" />
                            </div>

                            <p>The Spine Surgery Department at Bombay Hospital, Jaipur, provides a wide range of treatments, from routine to highly complex procedures. The team uses advanced techniques to deliver precise, effective, and minimally invasive care.</p>

                            <h3>Common Procedures</h3>
                            <ul class="doctor-detail_list-two">
                                <li><strong>Lumbar and Cervical Discectomies</strong></li>
                                <li><strong>Complex Spinal Fixation and Spinal Tumor Surgery</strong></li>
                            </ul>

                            <h3>Advanced Monitoring for Better Outcomes</h3>
                            <p>Neurophysiological monitoring ensures the safety of spinal cord and nerves during intricate procedures, improving surgical outcomes.</p>

                            <p>Bombay Hospital, Jaipur, combines years of experience with cutting-edge technology to provide world-class spine care.</p>
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
                            <div class="designation">Spine Surgery and Neurosurgery  </div>
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