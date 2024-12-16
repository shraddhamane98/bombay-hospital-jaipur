@php($title = "Pediatrics ")
@section('meta_desc') @endsection

@extends('layouts.default')
@section('content')

<!--==============================
    Breadcumb
============================== -->
<section class="page-title">
    <div class="auto-container">
        <h2>Pediatrics</h2>
        <ul class="bread-crumb clearfix">
            <li><a href="{{ route('home')}}">Home</a></li>
            <li>Pediatrics</li>
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
                            <h1 class="department-title">Pediatrics Department at Bombay Hospital, Jaipur</h1>
                            <div class="image department-img">
                                <img src="{{ asset('/resources/assets/departments-imgs/paediatrics-dept.jpg') }}" alt="" />
                            </div>

                            <p>The Pediatrics Department at Bombay Hospital, Jaipur, offers comprehensive care across a wide range of pediatric specialties, from basic care to highly advanced treatments for complex pediatric conditions.</p>

                            <h3>Evolution of Pediatric Services</h3>
                            <p>The department provides a full spectrum of services, including Neonatology, Pediatric Medicine, and Pediatric Intensive Care (PICU), ensuring the highest standard of care for children.</p>

                            <h3>Specialized Pediatric Services</h3>
                            <ul class="doctor-detail_list-two">
                                <li><strong>Neonatal Surgery and Hematology & Oncology for Children</strong></li>
                                <li><strong>Pediatric Endocrinology, Ophthalmology, and Physical Therapy</strong></li>
                            </ul>

                            <h3>Comprehensive Care for Children</h3>
                            <p>Bombay Hospital, Jaipur, offers a multi-disciplinary approach to pediatric care, ensuring the well-being of young patients at every stage of their growth.</p>

                            <p>Choose Bombay Hospital, Jaipur, for specialized pediatric care, delivered by a dedicated team of pediatricians and allied health professionals.</p>
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
                            <h5><a href="{{ route('dr-satyavan-sharma')}}">Dr Yatish Singh</a></h5>
                            <div class="designation">Paediatrician & Neonatology </div>
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