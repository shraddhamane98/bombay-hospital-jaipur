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

        <section class="newsletter-one mb-5">
            <div class="auto-container">
                <div class="newsletter-one_inner-container" >
                    <div class="row clearfix">
                        <!-- Title Column -->
                        <div class="newsletter-one_title-column text-center col-lg-3 col-md-12 col-sm-12">
                            <h3 class="newsletter-one_title">Find Here </h3>
                        </div>
                        <!-- Form Column -->
                        <div class="newsletter-one_form-column col-lg-9 col-md-12 col-sm-12">
                            <!--  Form -->
                            <div class="subscribe-form">
                                <form method="" >
                                    <div class="form-group">
                                        <input type="text" name="searchQuery" value="" placeholder="Search Doctor or Department" required="">
                                        <button type="submit" class="theme-btn fa-solid fa-search fa-fw"></button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Sec Title -->
        <!-- <div class="sec-title text-center mt-0 ">
            <h2 class="sec-title_heading">Our Consultants</h2>
        </div> -->

        <div class="row clearfix">

            <!-- Sidebar Side -->


            <!-- Content Side -->
            <div class="content-side col-lg-12 col-md-12 col-sm-12">
                <div class="department-detail">
                    <div class="inner-box auto-container">

                        <!-- <div class="auto-container"> -->

                        <div class="row clearfix ">

                            <div class="banner-gastroenterology all-depts p-3 text-center mb-4">
                                <h4 class="mb-0">Medical Gastroenterology</h4>
                            </div>

                            <!-- Team Block -->
                            <div class="team-block-two col-lg-4 col-md-6 col-sm-12 ">
                                <div class="inner-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                                    <div class="image">
                                        <img src="{{ asset('resources/assets/all-doctors/m-doctor.png') }}" alt="" />
                                    </div>
                                    <div class="lower-content">
                                        <div class="content">
                                            <h5><a href="{{ route('dr-satyavan-sharma')}}">Dr. Sebastian Marker</a></h5>
                                            <div class="designation">MBBS, MD (Internal Medicine), DNB -Medical Gastroenterology</div>
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

                            <div class="banner-Orthopaedic all-depts p-3 text-center mb-4" id="orthopaedic">
                                <h4 class="mb-0">Orthopaedic and Joint Replacement Surgery</h4>
                            </div>

                            <!-- Team Block -->
                            <div class="team-block-two col-lg-4 col-md-6 col-sm-12">
                                <div class="inner-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                                    <div class="image">
                                        <img src="{{ asset('resources/assets/all-doctors/m-doctor.png') }}" alt="" />
                                    </div>
                                    <div class="lower-content">
                                        <div class="content">
                                            <h5><a href="{{ route('dr-satyavan-sharma')}}">Dr Lokesh Kumar Yogi </a></h5>
                                            <div class="designation">MBBS, MS, DFIFA, FIJR, FACS</div>
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


                            <div class="banner-Orthopaedic all-depts p-3 text-center mb-4">
                                <h4 class="mb-0">Urology & Andrology </h4>
                            </div>

                            <!-- Team Block -->
                            <div class="team-block-two col-lg-4 col-md-6 col-sm-12">
                                <div class="inner-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                                    <div class="image">
                                        <img src="{{ asset('resources/assets/all-doctors/m-doctor.png') }}" alt="" />
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

                            <div class="banner-Orthopaedic all-depts p-3 text-center mb-4">
                                <h4 class="mb-0">Nuclear Medicine, Molecular Imaging & Radionuclide Therapy </h4>
                            </div>

                            <!-- Team Block -->
                            <div class="team-block-two col-lg-4 col-md-6 col-sm-12">
                                <div class="inner-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                                    <div class="image">
                                        <img src="{{ asset('resources/assets/all-doctors/m-doctor.png') }}" alt="" />
                                    </div>
                                    <div class="lower-content">
                                        <div class="content">
                                            <h5><a href="{{ route('dr-satyavan-sharma')}}"> Dr. Vaibhav Trivedi</a></h5>
                                            <div class="designation">MBBS, MD, MCANM</div>
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

                            <div class="banner-Orthopaedic all-depts p-3 text-center mb-4">
                                <h4 class="mb-0">Anaesthesia</h4>
                            </div>

                            <!-- Team Block -->
                            <div class="team-block-two col-lg-4 col-md-6 col-sm-12">
                                <div class="inner-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                                    <div class="image">
                                        <img src="{{ asset('resources/assets/all-doctors/f-doctor.png') }}" alt="" />
                                    </div>
                                    <div class="lower-content">
                                        <div class="content">
                                            <h5><a href="{{ route('dr-satyavan-sharma')}}">Dr Poonam Nehra</a></h5>
                                            <div class="designation">MBBS, MD </div>
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
                                        <img src="{{ asset('resources/assets/all-doctors/f-doctor.png') }}" alt="" />
                                    </div>
                                    <div class="lower-content">
                                        <div class="content">
                                            <h5><a href="{{ route('dr-satyavan-sharma')}}">Dr Deepti yadav</a></h5>
                                            <div class="designation">MBBS, MD </div>
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
                                        <img src="{{ asset('resources/assets/all-doctors/f-doctor.png') }}" alt="" />
                                    </div>
                                    <div class="lower-content">
                                        <div class="content">
                                            <h5><a href="{{ route('dr-satyavan-sharma')}}">Dr Ritika Aggarwal </a></h5>
                                            <div class="designation">MBBS,MD, FIPM</div>
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
                                        <img src="{{ asset('resources/assets/all-doctors/m-doctor.png') }}" alt="" />
                                    </div>
                                    <div class="lower-content">
                                        <div class="content">
                                            <h5><a href="{{ route('dr-satyavan-sharma')}}">Dr Niraj Kumar Jain </a></h5>
                                            <div class="designation">MBBS, MD </div>
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

                            <div class="banner-Orthopaedic all-depts p-3 text-center mb-4">
                                <h4 class="mb-0">Neurology</h4>
                            </div>

                            <!-- Team Block -->
                            <div class="team-block-two col-lg-4 col-md-6 col-sm-12">
                                <div class="inner-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                                    <div class="image">
                                        <img src="{{ asset('resources/assets/all-doctors/m-doctor.png') }}" alt="" />
                                    </div>
                                    <div class="lower-content">
                                        <div class="content">
                                            <h5><a href="{{ route('dr-satyavan-sharma')}}">Dr. Shubham Gupta</a></h5>
                                            <div class="designation">MBBS, MD, DM </div>
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

                            <div class="banner-Orthopaedic all-depts p-3 text-center mb-4">
                                <h4 class="mb-0">Surgical oncologist</h4>
                            </div>

                            <!-- Team Block -->
                            <div class="team-block-two col-lg-4 col-md-6 col-sm-12">
                                <div class="inner-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                                    <div class="image">
                                        <img src="{{ asset('resources/assets/all-doctors/m-doctor.png') }}" alt="" />
                                    </div>
                                    <div class="lower-content">
                                        <div class="content">
                                            <h5><a href="{{ route('dr-satyavan-sharma')}}">Dr Anand Mohan </a></h5>
                                            <div class="designation">MBBS, MS, MCH, DNB </div>
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

                            <div class="banner-Orthopaedic all-depts p-3 text-center mb-4">
                                <h4 class="mb-0">Neurosurgery and Spine Surgery</h4>
                            </div>

                            <!-- Team Block -->
                            <div class="team-block-two col-lg-4 col-md-6 col-sm-12">
                                <div class="inner-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                                    <div class="image">
                                        <img src="{{ asset('resources/assets/all-doctors/m-doctor.png') }}" alt="" />
                                    </div>
                                    <div class="lower-content">
                                        <div class="content">
                                            <h5><a href="{{ route('dr-satyavan-sharma')}}">Dr Yashpal Singh Rathore</a></h5>
                                            <div class="designation">MBBS, MS, MCH, DNB </div>
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
                                        <img src="{{ asset('resources/assets/all-doctors/m-doctor.png') }}" alt="" />
                                    </div>
                                    <div class="lower-content">
                                        <div class="content">
                                            <h5><a href="{{ route('dr-satyavan-sharma')}}">Dr Pawan Jain</a></h5>
                                            <div class="designation">MBBS, MS, Mch Neurosurgery  </div>
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

                            <div class="banner-Orthopaedic all-depts p-3 text-center mb-4">
                                <h4 class="mb-0">Intensivist & Critical Care Physician </h4>
                            </div>

                            <!-- Team Block -->
                            <div class="team-block-two col-lg-4 col-md-6 col-sm-12">
                                <div class="inner-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                                    <div class="image">
                                        <img src="{{ asset('resources/assets/all-doctors/m-doctor.png') }}" alt="" />
                                    </div>
                                    <div class="lower-content">
                                        <div class="content">
                                            <h5><a href="{{ route('dr-satyavan-sharma')}}">Dr PRATEEK KOOLWAL </a></h5>
                                            <div class="designation">MBBS, MD (ANAESTHESIA) IDCCM ,FNB( Critical Care Medicine) </div>
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

                            <div class="banner-Orthopaedic all-depts p-3 text-center mb-4">
                                <h4 class="mb-0">Paediatrician & Neonatology </h4>
                            </div>

                            <!-- Team Block -->
                            <div class="team-block-two col-lg-4 col-md-6 col-sm-12">
                                <div class="inner-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                                    <div class="image">
                                        <img src="{{ asset('resources/assets/all-doctors/m-doctor.png') }}" alt="" />
                                    </div>
                                    <div class="lower-content">
                                        <div class="content">
                                            <h5><a href="{{ route('dr-satyavan-sharma')}}">Dr Yatish Singh </a></h5>
                                            <div class="designation">MBBS, MD, Fellowship IAP Neonatology, International Fellowship in Neonatology </div>
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

                            <div class="banner-Orthopaedic all-depts p-3 text-center mb-4">
                                <h4 class="mb-0">Radiodiagnosis </h4>
                            </div>

                            <!-- Team Block -->
                            <div class="team-block-two col-lg-4 col-md-6 col-sm-12">
                                <div class="inner-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                                    <div class="image">
                                        <img src="{{ asset('resources/assets/all-doctors/f-doctor.png') }}" alt="" />
                                    </div>
                                    <div class="lower-content">
                                        <div class="content">
                                            <h5><a href="{{ route('dr-satyavan-sharma')}}">Dr Neharika Kothari </a></h5>
                                            <div class="designation">MBBS, MD </div>
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

                            <div class="banner-Orthopaedic all-depts p-3 text-center mb-4">
                                <h4 class="mb-0">Critical Care Medicine </h4>
                            </div>

                            <!-- Team Block -->
                            <div class="team-block-two col-lg-4 col-md-6 col-sm-12">
                                <div class="inner-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                                    <div class="image">
                                        <img src="{{ asset('resources/assets/all-doctors/m-doctor.png') }}" alt="" />
                                    </div>
                                    <div class="lower-content">
                                        <div class="content">
                                            <h5><a href="{{ route('dr-satyavan-sharma')}}">Dr Faisal Qureshi </a></h5>
                                            <div class="designation">MD DM </div>
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

                            <div class="banner-Orthopaedic all-depts p-3 text-center mb-4">
                                <h4 class="mb-0">ENT </h4>
                            </div>

                            <!-- Team Block -->
                            <div class="team-block-two col-lg-4 col-md-6 col-sm-12">
                                <div class="inner-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                                    <div class="image">
                                        <img src="{{ asset('resources/assets/all-doctors/f-doctor.png') }}" alt="" />
                                    </div>
                                    <div class="lower-content">
                                        <div class="content">
                                            <h5><a href="{{ route('dr-satyavan-sharma')}}">Dr Manisha Sharma </a></h5>
                                            <div class="designation">MBBS, MS, DNB, Fellowship in Laryngology, Certified allergy specialist (Bangolore)</div>
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

                            <div class="banner-Orthopaedic all-depts p-3 text-center mb-4">
                                <h4 class="mb-0">Pathology </h4>
                            </div>

                            <div class="team-block-two col-lg-4 col-md-6 col-sm-12">
                                <div class="inner-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                                    <div class="image">
                                        <img src="{{ asset('resources/assets/all-doctors/f-doctor.png') }}" alt="" />
                                    </div>
                                    <div class="lower-content">
                                        <div class="content">
                                            <h5><a href="{{ route('dr-satyavan-sharma')}}">Dr Garima Sharma </a></h5>
                                            <div class="designation">MBBS, MD </div>
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

                            <div class="banner-Orthopaedic all-depts p-3 text-center mb-4">
                                <h4 class="mb-0">Clinical and Radiation Oncologist  </h4>
                            </div>

                            <div class="team-block-two col-lg-4 col-md-6 col-sm-12">
                                <div class="inner-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                                    <div class="image">
                                        <img src="{{ asset('resources/assets/all-doctors/m-doctor.png') }}" alt="" />
                                    </div>
                                    <div class="lower-content">
                                        <div class="content">
                                            <h5><a href="{{ route('dr-satyavan-sharma')}}">Dr Suyash Pandey </a></h5>
                                            <div class="designation">MD, MBBS </div>
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

                            <div class="banner-Orthopaedic all-depts p-3 text-center mb-4">
                                <h4 class="mb-0">Immunhaemtology & Transfusion   </h4>
                            </div>

                            <div class="team-block-two col-lg-4 col-md-6 col-sm-12">
                                <div class="inner-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                                    <div class="image">
                                        <img src="{{ asset('resources/assets/all-doctors/m-doctor.png') }}" alt="" />
                                    </div>
                                    <div class="lower-content">
                                        <div class="content">
                                            <h5><a href="{{ route('dr-satyavan-sharma')}}">Dr Shailendra Singh </a></h5>
                                            <div class="designation">MBBS, MD  </div>
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

                            <div class="banner-Orthopaedic all-depts p-3 text-center mb-4">
                                <h4 class="mb-0">Non Invasive Cardiology   </h4>
                            </div>

                            <div class="team-block-two col-lg-4 col-md-6 col-sm-12">
                                <div class="inner-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                                    <div class="image">
                                        <img src="{{ asset('resources/assets/all-doctors/f-doctor.png') }}" alt="" />
                                    </div>
                                    <div class="lower-content">
                                        <div class="content">
                                            <h5><a href="{{ route('dr-satyavan-sharma')}}">Dr Amita Choudhary  </a></h5>
                                            <div class="designation">MBBS, PGDCC  </div>
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


                            <div class="banner-gastroenterology all-depts p-3 text-center mb-4">
                                <h4 class="mb-0">Internal Medicine </h4>
                            </div>

                            <!-- Team Block -->
                            <div class="team-block-two col-lg-4 col-md-6 col-sm-12 ">
                                <div class="inner-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                                    <div class="image">
                                        <img src="{{ asset('resources/assets/all-doctors/m-doctor.png') }}" alt="" />
                                    </div>
                                    <div class="lower-content">
                                        <div class="content">
                                            <h5><a href="{{ route('dr-satyavan-sharma')}}">Dr Gunjan Sharma </a></h5>
                                            <div class="designation">MBBS, MD </div>
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