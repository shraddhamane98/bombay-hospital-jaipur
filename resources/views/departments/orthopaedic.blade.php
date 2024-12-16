@php($title = "Orthopaedics ")
@section('meta_desc') @endsection

@extends('layouts.default')
@section('content')

<!--==============================
    Breadcumb
============================== -->
<section class="page-title">
    <div class="auto-container">
        <h2>Orthopaedics </h2>
        <ul class="bread-crumb clearfix">
            <li><a href="{{ route('home')}}">Home</a></li>
            <li>Orthopaedics </li>
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
                            <h1 class="department-title">Orthopaedics Department at Bombay Hospital, Jaipur</h1>
                            <div class="image department-img">
                                <img src="{{ asset('/resources/assets/departments-imgs/orthopaedics-dept.jpg') }}" alt="" />
                            </div>

                            <p>Orthopaedic surgery is a specialized field of medicine focused on treating conditions related to the musculoskeletal system, including bones, joints, ligaments, tendons, and muscles.
                            </p>

                            <p>At Bombay Hospital, Jaipur, the Orthopaedics Department is renowned for providing exceptional care for a wide range of musculoskeletal issues. From congenital disorders in children to age-related conditions in the elderly, as well as injuries caused by sports or accidents, our department is equipped to handle diverse cases with expertise.</p>

                           

                            <h3>Advanced Orthopaedic Care</h3>
                            <p>As the demand for orthopaedic treatment continues to rise, the department has kept pace with rapid advancements in orthopaedic technology. Our team treats a wide spectrum of patients, from infants with birth-related musculoskeletal conditions to older adults with degenerative or traumatic injuries.</p>

                            <p>Our theatres are equipped with advanced technologies such as <b>Navigation Systems, Image Intensifiers, Operating Microscopes</b>, and Cutting-Edge Arthroscopic Equipment.</p>

                            <p>We specialize in all types of <b>Joint Replacement Surgeries, including primary</b>, complex, and revision procedures. Our team’s expertise and use of the latest technologies have contributed to exceptional outcomes for these procedures.</p>


                            <h3>Minimizing Infection and Maximizing Care</h3>
                            <ul class="doctor-detail_list-two">
                                <li>The hospital has taken extensive measures to maintain a sterile environment, ensuring a minimal infection rate that is on par with global standards. The combination of advanced infrastructure, the latest medical technology, and a skilled team of surgeons enables us to successfully perform some of the most complicated orthopaedic surgeries in the country.</li>

                                <li>Bombay Hospital, Jaipur’s Orthopaedic Department offers world-class treatment for a wide array of musculoskeletal conditions. With a combination of cutting-edge technology, skilled surgeons, and a commitment to patient care, we ensure that each patient receives the highest standard of care, no matter their age or condition.</li>

                              
                            </ul>


                           

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
                            <h5><a href="{{ route('dr-satyavan-sharma')}}">Dr Lokesh Kumar Yogi </a></h5>
                            <div class="designation">Orthopaedic and Joint Replacement Surgery  </div>
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