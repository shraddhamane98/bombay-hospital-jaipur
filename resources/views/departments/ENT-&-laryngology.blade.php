@php($title = "ENT & Laryngology ")
@section('meta_desc') @endsection

@extends('layouts.default')
@section('content')

<!--==============================
    Breadcumb
============================== -->
<section class="page-title">
    <div class="auto-container">
        <h2>ENT & Laryngology </h2>
        <ul class="bread-crumb clearfix">
            <li><a href="{{ route('home')}}">Home</a></li>
            <li>ENT & Laryngology </li>
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
                                            <h1 class="department-title">ENT & Laryngology at Bombay Hospital, Jaipur</h1>
                                            <div class="image department-img">
                                                <img src="{{ asset('/resources/assets/departments-imgs/ent-laryngology-dept.jpg') }}" alt="" />
                                            </div>

                                            <p>Otorhinolaryngology, commonly referred to as ENT, is a specialized medical field focusing on the diagnosis, medical management, and surgical treatment of conditions affecting the ear, nose, throat, head, and neck. The ENT Department at Bombay Hospital, Jaipur, is recognized for its excellence in patient care, advanced diagnostic capabilities, and surgical expertise.</p>

                                            <h3>Specialized Services</h3>
                                            <p>The ENT department at Bombay Hospital, Jaipur, offers comprehensive care for a wide range of conditions, utilizing state-of-the-art technology and modern techniques. Our specialized services include:</p>
                                            <ul class="doctor-detail_list-two">
                                                <li><strong>Otology:</strong> Ear microsurgery, cochlear implant surgery, and laser stapedotomy</li>
                                                <li><strong>Neuro-Otology and Vertigo Care:</strong> Expert management of balance disorders and inner ear conditions</li>
                                                <li><strong>Rhinology:</strong> Advanced sinus and nasal procedures such as endoscopic sinus surgery and balloon sinuplasty</li>
                                                <li><strong>Skull Base Surgery:</strong> Minimally invasive endoscopic surgeries for complex skull-base conditions</li>
                                                <li><strong>Phonosurgery:</strong> Treatments for voice disorders, including microflap surgery, puberphonia surgery, and injection laryngoplasty</li>
                                                <li><strong>Airway Surgery:</strong> Balloon dilation for airway management and laryngeal laser surgeries</li>
                                                <li><strong>Swallowing Disorders:</strong> Functional evaluation and treatment of swallowing difficulties</li>
                                                <li><strong>Sleep Apnea:</strong> Diagnosis and surgical management of obstructive sleep apnea</li>
                                                <li><strong>Head and Neck Surgeries:</strong> Comprehensive care for both benign and malignant conditions</li>
                                            </ul>

                                            <h3>Training and Academic Excellence</h3>
                                            <p>Bombay Hospital, Jaipur, is committed to advancing medical education and surgical skills in ENT. We conduct academic workshops on phonosurgery, laser surgery, and endoscopic skull base surgery. Additionally, we offer:</p>
                                            <ul class="doctor-detail_list-two">
                                                <li>Fellowship in Rhinology and Skull Base Surgery</li>
                                                <li>Fellowship in Phonosurgery and Laser Techniques</li>
                                            </ul>

                                            <h3>Advanced Technology and Facilities</h3>
                                            <p><strong>Transoral Laser Surgery:</strong> Our department regularly performs minimally invasive laser surgeries for benign and malignant laryngeal conditions using cutting-edge technology.</p>
                                            <p><strong>Endoscopy Services:</strong> Comprehensive facilities for nasal endoscopy, laryngoscopy, and functional endoscopic evaluation of swallowing.</p>
                                            <p><strong>Specialized Clinics:</strong> Dedicated voice and swallowing OPD twice a week and a general ENT OPD available Monday to Saturday.</p>

                                            <p>At Bombay Hospital, Jaipur, we blend medical expertise with advanced technology to provide patient-centric care for ENT conditions. Our specialized services and focus on academic excellence set us apart as a leader in ENT and laryngology care.</p>

                                            <p>Experience advanced ENT care at Bombay Hospital, Jaipur, where precision, innovation, and compassionate care come together to enhance patient outcomes.</p>
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
            <div class="team-block-two col-lg-4 col-md-6 col-sm-12">
                <div class="inner-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                    <div class="image">
                        <img src="{{ asset('resources/assets/all-doctors/f-doctor.png') }}" alt="" />
                    </div>
                    <div class="lower-content">
                        <div class="content">
                            <h5><a href="{{ route('dr-vaibhav-trivedi')}}">Dr Manisha Sharma </a></h5>
                            <div class="designation">MBBS, MS, DNB, Fellowship in Laryngology, Certified allergy specialist (Bangolore)</div>
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