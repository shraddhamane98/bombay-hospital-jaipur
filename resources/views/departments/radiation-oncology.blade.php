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

                        <div class="row clearfix ">
                            <h1 class="department-title">Radiation Oncology at Bombay Hospital, Jaipur</h1>
                            <div class="image department-img">
                                <img src="{{ asset('/resources/assets/departments-imgs/Radiation-Oncology-dept.png') }}" alt="" />
                            </div>

                            <p>Radiation therapy, also known as radiotherapy or RT, is a specialized cancer treatment that uses ionizing radiation to eliminate or manage malignant cells. At Bombay Hospital Jaipur, we take pride in offering advanced radiation therapy with cutting-edge technology to deliver precise and effective cancer care. </p>

                            <p>To enhance the quality of treatment, Bombay Hospital, Jaipur, introduces the state-of-the-art VERSA HD Linear Accelerator, capable of delivering High-Definition Dynamic Radiosurgeries. This technology sets a new standard in precision radiation therapy. As the first installation in Rajasthan and among the few in India, our advanced system ensures accurate radiation dose delivery with minimal side effects, thereby improving patients' quality of life.</p>

                            <p>Our Radiation Oncology Department boasts a team of highly skilled Radiation Oncologists, Medical Physicists, Radiation Therapists, oncology-trained nurses, and other specialists, all working collaboratively to provide <b>personalized cancer treatment</b>.</p>

                            <h3>Advanced Technology and Personalized Care</h3>
                            <p>We leverage sophisticated imaging and motion management tools, including 4D PET-CT for tumor localization, an active breathing control system, and integrated robotic 6D positioning. Combined with a Monte Carlo dose calculator, HDRS MLC for dose shaping, and integrated image guidance, our technologies ensure precision and accuracy, placing us at the forefront of personalized radiation therapy. </p>


                            <h3>Techniques and Services Offered</h3>
                            <p>We specialize in a range of advanced radiation therapy techniques, including:</p>
                            <ul class="doctor-detail_list-two">
                                <li><strong>3D CRT, IMRT, IGRT, and VMAT techniques </strong> for various cancers</li>

                                <li><strong>Radiosurgery (SRS/SRT/SBRT) : </strong> Brain, Lung, Liver, Pancreas, Spine, Prostate</li>

                                <li><strong>Total Body Irradiation (TBI) </strong></li>

                                <li><strong>Six-Dimension Radiation Treatment (6D RT) : </strong>Advanced robotic positioning system for sub-millimeter accuracy, enabling precise correction of translational and rotational errors for optimal dose delivery </li>

                                <li><strong>Active Breathing Control Device (ABC) : </strong> A respiratory motion management system to protect healthy tissues during treatment of organs affected by breathing motion</li>

                                <li><strong>4D CT/PET-CT Simulation : </strong> Captures tumor and organ movements during respiratory cycles, crucial for treating cancers in dynamic organs like the lungs, breast, and pancreas</li>

                                <li><strong>IMRT/VMAT : </strong> High-precision radiation delivery that spares healthy tissues while targeting the tumor</li>

                                <li><strong>Adaptive Radiation Therapy (ART) : </strong> Enables treatment customization through functional and metabolic imaging</li>


                                <li><strong>Image-Guided Radiation Therapy (IGRT) : </strong> Advanced imaging tools for real-time tumor visualization and positioning adjustments during treatment</li>
                            </ul>


                            <p>At Bombay Hospital Jaipur, our mission is to provide personalized, patient-centered care by combining cutting-edge technology with compassionate expertise. With innovations like advanced image guidance, precise motion management, and adaptive radiation techniques, we aim to achieve superior treatment outcomes and improve the overall quality of life for our patients.</p>

                            <p>Choose Bombay Hospital Jaipur, for radiation oncology care that is precise, personalized, and transformative.</p>

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
                            <h5><a href="{{ route('dr-satyavan-sharma')}}">Dr Suyash Pandey</a></h5>
                            <div class="designation">Clinical and Radiation Oncologist </div>
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