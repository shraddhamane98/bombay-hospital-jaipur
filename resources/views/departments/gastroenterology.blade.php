@php($title = "Gastroenterology ")
@section('meta_desc') @endsection

@extends('layouts.default')
@section('content')

<!--==============================
    Breadcumb
============================== -->
<section class="page-title">
    <div class="auto-container">
        <h2>Gastroenterology</h2>
        <ul class="bread-crumb clearfix">
            <li><a href="{{ route('home')}}">Home</a></li>
            <li>Gastroenterology</li>
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
                            <h1 class="department-title">Gastroenterology at Bombay Hospital, Jaipur</h1>
                            <div class="image department-img">
                               <img src="{{ asset('/resources/assets/departments-imgs/gastroenterology-dept.jpg') }}" alt="" />
                            </div>

                            <p>Gastroenterology is the branch of medicine dedicated to the diagnosis and treatment of disorders affecting the digestive system, including the gastrointestinal tract and associated organs. The Gastroenterology Department at Bombay Hospital, Jaipur, provides comprehensive services using advanced technology combined with compassionate care.</p>

                            <h3>Medical Gastroenterology and Hepatology</h3>
                            <ul class="doctor-detail_list-two">
                                <li><strong>Inflammatory Bowel Disease (IBD), Irritable Bowel Syndrome (IBS), and more.</strong></li>
                                <li><strong>Gastrointestinal Bleeding, Chronic Diarrhea, and Constipation.</strong></li>
                                <li><strong>Liver Diseases, Biliary, and Pancreatic Disorders.</strong></li>
                                <li><strong>Gastrointestinal and Hepatobiliary Cancers.</strong></li>
                            </ul>

                            <h3>Interventional Gastroenterology</h3>
                            <ul class="doctor-detail_list-two">
                                <li><strong>Upper GI Endoscopy, Colonoscopy, and ERCP.</strong></li>
                                <li><strong>Specialized procedures like liver biopsies and HVPG monitoring.</strong></li>
                            </ul>

                            <h3>Academic Excellence</h3>
                            <p>Bombay Hospital, Jaipur, supports postgraduate education with its DNB Gastroenterology program. The department continues to deliver excellent patient care while training future gastroenterologists.</p>

                            <p>Choose Bombay Hospital, Jaipur, for comprehensive and compassionate gastroenterology care.</p>
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
                            <h5><a href="{{ route('dr-vaibhav-trivedi')}}">Dr. Sebastian Marker</a></h5>
                            <div class="designation">Medical Gastroenterology </div>
                            <!-- check profile-->
                            <div class="specialist-one_button">
                                <a href="{{ route('dr-vaibhav-trivedi')}}" class="theme-btn btn-style-one">
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