@php($title = "Doctor Profile ")
@section('meta_desc') @endsection

@extends('layouts.default')
@section('content')

<!--==============================
    Breadcumb
============================== -->
<section class="page-title">
    <div class="auto-container">
        <h2>Dr. Vaibhav Trivedi</h2>
        <ul class="bread-crumb clearfix">
            <li><a href="{{ route('home')}}">Home</a> </li>
            <li><a> Nuclear Medicine, Molecular Imaging & Radionuclide Therapy</a> </li>
            <li>Dr. Vaibhav Trivedi</li>
        </ul>
    </div>
</section>


<!-- Doctor Single Section -->
<section class="doctor-detail-section">
    <div class="auto-container">
        <div class="row clearfix">

            <!-- Image Column -->
            <div class="image-column col-lg-5 col-md-12 col-sm-12">
                <div class="inner-column doctor-profile">
                    <div class="image doctor-img">
                        <img src="{{ asset('resources/assets/all-doctors/m-doctor.png') }}" alt="" />
                        <div class="number-box">
                            <!-- <a href="https://www.youtube.com/watch?v=Fvae8nxzVz4" class="play-button" data-fancybox="" data-caption=""><i class="ripple"></i><i class="icon fa-solid fa-play fa-fw"></i>
                        </a> -->
                        Nuclear Medicine, Molecular Imaging & Radionuclide Therapy
                        </div>

                        <h3 class="mt-4 text-center">Dr. Vaibhav Trivedi</h3>

                        <!-- Book Appointment-->
                       
                        <div class="specialist-one_button text-center">
                            <button type="button" class="btn btn-primary theme-btn btn-style-one" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@getbootstrap">
                                <span class="btn-wrap">
                                    <span class="text-one font-b">Book Appointment</span>
                                    <span class="text-two font-b">Book Appointment</span>
                                </span>
                            </button>
                        </div>

                    </div>
                </div>
            </div>

            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-xl modal-dialog-scrollable">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Book Appointment</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <!-- <form>
                                <div class="mb-3">
                                    <label for="recipient-name" class="col-form-label">Recipient:</label>
                                    <input type="text" class="form-control" id="recipient-name">
                                </div>
                                <div class="mb-3">
                                    <label for="message-text" class="col-form-label">Message:</label>
                                    <textarea class="form-control" id="message-text"></textarea>
                                </div>
                            </form> -->
                            <div class="appointment-form">

                                <!-- Appointment Form -->
                                <form method="post" action="">
                                    <div class="row clearfix">

                                        <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                            <input type="text" name="username" placeholder="Patient Name" required="">
                                        </div>

                                        <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                            <input type="text" name="phone" placeholder="Phone Number" required="">
                                        </div>

                                        <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                            <input type="email" name="email" placeholder="Email Address" required="">
                                        </div>

                                        <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                            <!-- <label for="dropdown" class="col-form-label">Select Department</label> -->
                                            <select class="form-control " id="dropdown">
                                                <option value="option1">Department 01</option>
                                                <option value="option2">Department 02</option>
                                                <option value="option3">Department 03</option>
                                            </select>
                                            <!-- <select class="custom-select-box">
                                                <option>Department</option>
                                                <option>Department 01</option>
                                                <option>Department 02</option>
                                                <option>Department 03</option>
                                                <option>Department 04</option>
                                            </select> -->
                                        </div>

                                        <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                            <input type="text" name="location" placeholder="Location" required="">
                                        </div>

                                        <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                            <input type="text" class="datepicker" name="date" placeholder="Booking Date" required="">
                                            <span class="icon far fa-calendar-check"></span>
                                        </div>

                                        <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                            <textarea class="" name="message" placeholder="Shortly describe the disease"></textarea>
                                        </div>

                                        <div class="col-lg-12 col-md-12 col-sm-12 form-group text-center">
                                            <button type="submit" class="theme-btn btn-style-one">
                                                <span class="btn-wrap">
                                                    <span class="text-one">Book Appointment</span>
                                                    <span class="text-two">Book Appointment</span>
                                                </span>
                                            </button>
                                        </div>

                                    </div>
                                </form>

                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <!-- form -->



            <!-- Content Column -->
            <div class="content-column col-lg-7 col-md-12 col-sm-12">
                <div class="inner-column">
                    <!-- TimeTable Section -->
                    <section class="timetable-one pt-0" id="schedule">
                        <div class="auto-container">

                            <div class="table-outer">
                                <!-- Doctors Time Table -->
                                <table class="doctors-time-table">


                                    <tbody>
                                        <tr>
                                            <th>Speciality</th>
                                            <td><strong>Nuclear Medicine, Molecular Imaging & Radionuclide Therapy</strong></td>
                                        </tr>
                                        <tr>
                                            <th>Qualifications</th>
                                            <td><strong>MBBS, MD, MCANM</strong></td>
                                        </tr>
                                        <tr>
                                            <th>Passing Insitute </th>
                                            <td><strong>MBBS & MD from AIIMS, New Delhi, MCANM (Canada)</strong></td>
                                        </tr>
                                        <tr>
                                            <th>Expertiese</th>
                                            <td><strong>Well experienced nuclear medicine physician expertise in various PET imaging, SPECT imaging, Nuclear cardiology, Radionuclide Therapy like radioiodine therapy, Lutetium Therapy, actenium therapy, alpha therapy, Beta therapy, Prostate PSMA, neuroendocrine tumors PRRT, Radiation synovectomy, Hyperthyroidism, thyroid cancers, bone pain palliation, FAPI imaging and therapy, DOTA imaging and therapy</strong></td>
                                        </tr>
                                        <tr>
                                            <th>Award & Certificates</th>
                                            <td><strong>NA</strong></td>
                                        </tr>
                                       
                                     <!--    <tr>
                                            <th>Articles</th>
                                            <td><strong>90 International</strong></td>
                                        </tr>
                                        <tr>
                                            <th>Research & Publications</th>
                                            <td><strong>120 National, Chapters In Book</strong></td>
                                        </tr>
                                        <tr>
                                            <th>Experience</th>
                                            <td><strong>38 Yrs</strong></td>
                                        </tr>
                                        <tr>
                                            <th rowspan="2">Contact Details</th>
                                            <td>
                                                <strong>E-Mail: <a href="mailto:drsatyavan@hotmail.com">drsatyavan@hotmail.com</a> </strong>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <strong>Contact No.: <a href="tel:022-22054532">022-22054532</a> / <a href="tel:9820122010">9820122010</a></strong>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>Consulting Days & Timings</th>
                                            <td>
                                                <strong> Mon, Wed, Fri:</strong> <span class="timing"> 3.30 pm to 7 pm</span><br>
                                                <strong> Tue, Thu:</strong> <span class="timing"> 5 pm to 7 pm</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>Consulting Room</th>
                                            <td><strong>104 (1st Flr. New Wing)</strong></td>
                                        </tr> -->

                                    </tbody>
                                </table>
                            </div>

                        </div>
                    </section>
                    <!-- End TimeTable Section -->

                </div>
            </div>

        </div>
    </div>
</section>
<!-- End Doctors Page Section -->




@stop