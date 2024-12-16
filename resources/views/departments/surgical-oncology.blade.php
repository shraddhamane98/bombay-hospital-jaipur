@php($title = "Surgical Oncology ")
@section('meta_desc') @endsection

@extends('layouts.default')
@section('content')

<!--==============================
    Breadcumb
============================== -->
<section class="page-title">
    <div class="auto-container">
        <h2>Surgical Oncology</h2>
        <ul class="bread-crumb clearfix">
            <li><a href="{{ route('home')}}">Home</a></li>
            <li>Surgical Oncology</li>
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
                            <h1 class="department-title">Surgical Oncology Department at Bombay Hospital, Jaipur</h1>
                            <div class="image department-img">
                                <img src="{{ asset('/resources/assets/departments-imgs/surgical-oncology-dept.jpg') }}" alt="" />
                            </div>

                            <p>Surgical oncology is a specialized field focused on the surgical treatment of cancerous tumors. It plays a vital role in the management of cancer by performing tumor removal and providing a comprehensive treatment approach alongside radiotherapy and chemotherapy.
                            </p>

                            <p>Cancer is one of the most devastating diseases. With a commitment to staying updated with the latest advancements in oncology, we combine surgical expertise with cutting-edge radiotherapy and chemotherapy to ensure optimal outcomes for our patients.</p>

                            <p>At Bombay Hospital, Jaipur, we remain committed to offering the highest level of care and advanced treatments, providing our patients with renewed hope in the fight against cancer.
                            </p>


                           

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
                            <h5><a href="{{ route('dr-satyavan-sharma')}}">Dr Anand Mohan </a></h5>
                            <div class="designation">Surgical oncologist </div>
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