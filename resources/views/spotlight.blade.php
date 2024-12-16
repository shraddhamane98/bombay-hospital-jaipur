@php($title = "Departments Spotlight ")
@section('meta_desc') @endsection

@extends('layouts.default')
@section('content')

<!--==============================
    Breadcumb
============================== -->
<section class="page-title">
    <div class="auto-container">
        <h2>Departments Spotlight</h2>
        <ul class="bread-crumb clearfix">
            <li><a href="{{ route('home')}}">Home</a></li>
            <li>Departments Spotlight</li>
        </ul>
    </div>
</section>


<!-- Video One -->
<section class="video-one">
    <div class="auto-container">

        <div class="row">
            <div class="col-lg-6">
                <div class="image">
                    <img src="{{ asset('/resources/assets/gallery/bg-jaipur-hospital1.jpg') }}" alt="" />
                    <a href="https://www.youtube.com/watch?v=pDGFcFZUqGE" class="lightbox-video video-one_play fa fa-play"><i class="ripple"></i></a> 
                </div>
            </div>


        </div>

    </div>
</section>
<!-- End Video One -->








@stop