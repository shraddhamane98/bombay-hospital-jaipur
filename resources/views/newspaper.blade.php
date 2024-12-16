@php($title = "Newspaper ")
@section('meta_desc') @endsection

@extends('layouts.default')
@section('content')

<!--==============================
    Breadcumb
============================== -->
<section class="page-title">
    <div class="auto-container">
        <h2>Newspaper</h2>
        <ul class="bread-crumb clearfix">
            <li><a href="{{ route('home')}}">Home</a></li>
            <li>Newspaper</li>
        </ul>
    </div>
</section>


	<!-- Gallery One -->
	<section class="gallery-one">
		<div class="auto-container">
			<!-- MixitUp Galery -->
            <div class="mixitup-gallery">
                
                <div class="filter-list row clearfix">
					
					<!-- Project Block -->
					<div class="project-block mix all clinic laboratory col-lg-4 col-md-6 col-sm-12">
						<div class="inner-box">
							<div class="image">
								<img src="{{ asset('/resources/assets/gallery/news-1.jpg') }}" alt="" />
								<!-- Overlay Box -->
								<div class="overlay-box">
									<div class="overlay-inner">
										<div class="overlay-content">
											<div class="icon-box">
												<span class="icon icon-heart1"></span>
											</div>
											<a class="plus lightbox-image" href="{{ asset('/resources/assets/gallery/news-1.jpg') }}" data-fancybox="gallery-1" data-caption=""><span class="flaticon-plus"></span></a>
										</div>
									</div>
								</div>	
								
							</div>
						</div>
					</div>
					
					
				</div>
			
			
			</div>
		</div>
	</section>
	<!-- End Gallery One -->










@stop