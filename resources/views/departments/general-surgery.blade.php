@php($title = "General Surgery") 
@section('meta_desc') @endsection

@extends('layouts.default')
@section('content')

<!--==============================
    Breadcumb
============================== -->
<section class="page-title">
    <div class="auto-container">
        <h2>General Surgery</h2>
        <ul class="bread-crumb clearfix">
            <li><a href="{{ route('home')}}">Home</a></li>
            <li>General Surgery</li>
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
                            <h1 class="department-title">General Surgery Department at Bombay Hospital, Jaipur</h1>
                            <div class="image department-img">
                              <img src="{{ asset('/resources/assets/departments-imgs/general-surgery-dept.jpg') }}" alt="" />
                            </div>

                            <p>General surgery is a medical specialty that focuses on surgical procedures related to the alimentary canal and abdominal organs, including the esophagus, stomach, small intestine, large intestine, liver, pancreas, gallbladder, appendix, bile ducts, and sometimes the thyroid gland.</p>

                            <p>The General Surgery Department at Bombay Hospital, Jaipur provides comprehensive care for a wide variety of surgical conditions. Our expert surgeons utilize the most advanced techniques to treat patients, emphasizing non-invasive and minimally invasive procedures, such as <strong>Laparoscopic Surgery</strong>. These techniques are preferred for many conditions due to their shorter recovery times, reduced risks, and better overall outcomes. When non-invasive methods are not suitable, we apply traditional open surgical approaches to ensure the best possible care for our patients.</p>

                           <p>The department is staffed by a team of highly skilled surgeons, each specializing in various subspecialties within general surgery. At Bombay Hospital, Jaipur, our General Surgery team is committed to providing the highest level of care, utilizing the latest medical advancements to ensure the best results for every patient.
                           </p>



                          

                        </div>

                    </div>
                </div>
            </div>

        </div>

       

    </div>
</div>

<!-- Sidebar Page Container -->

@stop
