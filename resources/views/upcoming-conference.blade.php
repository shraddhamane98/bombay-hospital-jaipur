@php($title = "Upcoming Conferences ")
@section('meta_desc') @endsection

@extends('layouts.default')
@section('content')

<!--==============================
    Breadcumb
============================== -->
<section class="page-title">
    <div class="auto-container">
        <h2>Upcoming Conferences</h2>
        <ul class="bread-crumb clearfix">
            <li><a href="{{ route('home')}}">Home</a></li>
            <li>Upcoming Conferences</li>
        </ul>
    </div>
</section>


<!-- News Section -->
<section class="news-section style-three">
		<div class="auto-container">
			<div class="row clearfix">
				
				<!-- Title Column -->
				<div class="blocks-column col-lg-4 col-md-12 col-sm-12">
					<div class="inner-column">
						<!-- News Block -->
						<div class="news-block">
							<div class="inner-box">
								<div class="image">
									<a href=""><img src="{{ asset('/resources/assets/gallery/upcoming-conferences.jpg') }}" alt="" /></a>
								</div>
								<div class="lower-content">
									<h3><a href="">Coming Soon!</a></h3>
								
								</div>
							</div>
						</div>
					</div>
				</div>
				
				
				
			</div>
		</div>
	</section>
	<!-- End News Section -->







@stop