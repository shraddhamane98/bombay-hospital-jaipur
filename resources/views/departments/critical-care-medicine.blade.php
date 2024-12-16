@php($title = "Critical Care Medicine")
@section('meta_desc') @endsection

@extends('layouts.default')
@section('content')

<!--==============================
    Breadcumb
============================== -->
<section class="page-title">
    <div class="auto-container">
        <h2>Critical Care Medicine</h2>
        <ul class="bread-crumb clearfix">
            <li><a href="{{ route('home')}}">Home</a></li>
            <li>Critical Care Medicine</li>
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
                            <!-- Content Side -->
                            <div class="content-side col-lg-12 col-md-12 col-sm-12">
                                <div class="department-detail">
                                    <div class="inner-box auto-container">
                                        <div class="row clearfix ">
                                            <h1 class="department-title">Critical Care Medicine at Bombay Hospital, Jaipur</h1>
                                            <div class="image department-img">
                                                <img src="{{ asset('/resources/assets/departments-imgs/critical-care-medicine-dept.jpg') }}" alt="" />
                                            </div>

                                            <p>Critical care medicine is a specialized medical field that focuses on the treatment of patients with severe or life-threatening illnesses or injuries. At Bombay Hospital, Jaipur, we provide expert care for critically ill individuals, ensuring round-the-clock monitoring and advanced treatments to support recovery in our state-of-the-art Intensive Care Unit (ICU).</p>

                                            <p><strong>What Is Critical Care?</strong><br>
                                                Critical care involves intensive medical attention for individuals facing life-threatening conditions or recovering from major surgeries. This care is delivered in a dedicated ICU, where a highly trained team of healthcare professionals provides 24/7 support. Patients are closely monitored using advanced machines to track vital signs and maintain bodily functions while receiving specialized therapies tailored to their needs.</p>

                                            <p><strong>Who Requires Critical Care?</strong><br>
                                                Critical care is essential for patients with severe illnesses or injuries, including but not limited to:</p>
                                            <ul class="doctor-detail_list-two">
                                                <li>Severe burns</li>
                                                <li>COVID-19 complications</li>
                                                <li>Heart attacks or heart failure</li>
                                                <li>Kidney failure</li>
                                                <li>Respiratory failure</li>
                                                <li>Sepsis</li>
                                                <li>Recovery from major surgeries</li>
                                            </ul>

                                            <p><strong>What Happens in the Critical Care Unit?</strong><br>
                                                In the ICU at Bombay Hospital, Jaipur, patients are cared for by an experienced team of doctors, nurses, and support staff who specialize in critical care medicine. Each patient is connected to advanced monitoring and life-support equipment via tubes, wires, and cables.</p>

                                            <p>Our ICU is designed to provide:</p>
                                            <ul class="doctor-detail_list-two">
                                                <li>One-to-one or one-to-two nurse-to-patient care, ensuring individualized attention.</li>
                                                <li>Real-time monitoring of vital signs such as heart rate, oxygen levels, and blood pressure.</li>
                                                <li>Advanced life-support systems to assist or replace organ functions as needed.</li>
                                            </ul>

                                            <p>At Bombay Hospital, Jaipur, we are committed to delivering exceptional critical care through a multidisciplinary approach. Our ICU is equipped with cutting-edge technology and staffed by skilled healthcare professionals who work tirelessly to stabilize and support patients through their recovery journey.</p>

                                            <p>When every moment counts, trust Bombay Hospital, Jaipur, to provide compassionate, life-saving critical care.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
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
                            <h5><a href="{{ route('dr-vaibhav-trivedi')}}">Dr Prateek Koolwal</a></h5>
                            <div class="designation">Intensivist  & Critical Care  Physician </div>
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

            <!-- Team Block -->
            <div class="team-block-two col-lg-4 col-md-6 col-sm-12 ">
                <div class="inner-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                    <div class="image">
                        <img src="{{ asset('resources/assets/all-doctors/m-doctor.png') }}" alt="" />
                    </div>
                    <div class="lower-content">
                        <div class="content">
                            <h5><a href="{{ route('dr-vaibhav-trivedi')}}">Dr Faisal Qureshi </a></h5>
                            <div class="designation">Critical Care Medicine </div>
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