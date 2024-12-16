@php($title = "Philosophy ")
@section('meta_desc') @endsection

@extends('layouts.default')
@section('content')

<!--==============================
    Breadcumb
============================== -->
<section class="page-title">
    <div class="auto-container">
        <h2>Philosophy</h2>
        <ul class="bread-crumb clearfix">
            <li><a href="{{ route('home')}}">Home</a></li>
            <li>Philosophy</li>
        </ul>
    </div>
</section>



<!-- Help Section Two / Style Two -->
<section class="help-section-two style-two">
    <div class="auto-container">

        <!-- Sec Title -->
        <div class="sec-title centered">
            <h2 class="sec-title_heading">Our Philosophy</h2>
        </div>

        <div class="row">
            <div class="col-lg-5 col-md-12  col-sm-12 d-flex align-items-center">
                <div class="image department-img ">
                    <img src="{{ asset('/resources/assets/gallery/1.png') }}" alt="" />
                </div>
            </div>

            <div class="col-lg-7  col-md-12 col-sm-12">
                <div class="blog-detail">
                    <blockquote>Charity and the pursuit of excellence are the two fundamental ideals that provide us impetus to focus on the well being of the patient who is our primary responsibility. We have an obligation to provide the best possible treatment, delivered most efficiently, in the shortest possible time span and at minimum cost.</blockquote>
                </div>

                <p>The Bombay Hospital has 725 beds, of which 300 beds are free and another 150 beds are heavily subsidised. About 60% of the operations performed by our surgeons are free or against very nominal charges. Every year, about 100,000 patients take advantage of our free OPD.</p>

                <p>On this bedrock of charity we are relentlessly building the bedrock of excellence in the Hospital by continuously refurbishing its spaces, installing the most modern medical equipment and injecting professionalism and dedication in our management team, so that our world class doctors can discharge their duties and responsibilities in an academically stimulating and hassle-free environment.</p>
            </div>
        </div>

    </div>
</section>
<!-- Help Section Two / Style Two -->



@stop