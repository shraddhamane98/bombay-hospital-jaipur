@php($title = "Bombay Hospital")
@section('meta_desc') @endsection

@extends('layouts.default')
@section('content')
<div class="hidden-bar-wrapper">

	<div class="page-wrapper">


		<!-- swiper slider start -->
		<div class="myslidere only-desk">
			<div class="swiper-container mySwiper">
				<div class="swiper-wrapper">
					<div class="swiper-slide homeslider">
						<img src="{{ asset('resources/assets/gallery/banner-2.jpg') }}" alt="">
					</div>
					<div class="swiper-slide homeslider">
						<img src="{{ asset('resources/assets/gallery/banner-1.jpg') }}" alt="">
					</div>
					<div class="swiper-slide homeslider">
						<img src="{{ asset('resources/assets/gallery/bombay-hospital-jaipur-opening-soon-banner.png') }}"
							alt="">
					</div>
					<!-- <div class="swiper-slide">
						<iframe class="youtube-video" width="560" height="315"
							src="https://www.youtube.com/embed/zdP-b_LJqwg?si=sqA5H1bPG6-sXTou&enablejsapi=1&controls=0&rel=0"
							title="YouTube video player" frameborder="0"
							allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
							referrerpolicy="strict-origin-when-cross-origin" allowfullscreen>
						</iframe>
					</div> -->
				</div>
				<div class="swiper-button-next"></div>
				<div class="swiper-button-prev"></div>
				<!-- <div class="swiper-pagination"></div> -->
			</div>
		</div>

		<!-- mobile slider -->
		<div class="myslidere only-mob">
			<div class="swiper-container mySwiper">
				<div class="swiper-wrapper">
					<div class="swiper-slide homeslider">
						<img src="{{ asset('resources/assets/gallery/banner-2-mob.jpg') }}" alt="">
					</div>
					<div class="swiper-slide homeslider">
						<img src="{{ asset('resources/assets/gallery/banner-1-mob.jpg') }}" alt="">
					</div>
					<div class="swiper-slide homeslider">
						<img src="{{ asset('resources/assets/gallery/banner-2-1-mob.jpg') }}" alt="">
					</div>
					<div class="swiper-slide homeslider">
						<img src="{{ asset('resources/assets/gallery/jaipur-opening-soon-mob.png') }}" alt="">
					</div>
				</div>
				<div class="swiper-button-next"></div>
				<div class="swiper-button-prev"></div>
			</div>
		</div>
		<!-- swiper slider start -->

		<!-- Services Three -->
		<section class="services-three bg-color1">
			<div class="auto-container ">
				<div class="row clearfix my-index">

					<!-- Service Block Three -->
					<div class="service-block_three col-xl-3 col-lg-6 col-md-6 col-sm-12">
						<div class="service-block_three-inner">
							<div class="service-block_three-icon-box">
								<!-- <span class="service-block_three-icon flaticon-doctor"></span> -->
								<i class="fas fa-calendar-alt hos-icon"></i>
								<h4 class="service-block_three-heading"><a href="">Book Appointment</a></h4>
							</div>
						</div>
					</div>

					<!-- Service Block Three -->
					<div class="service-block_three col-xl-3 col-lg-6 col-md-6 col-sm-12">
						<div class="service-block_three-inner">
							<div class="service-block_three-icon-box">
								<!-- <span class="service-block_three-icon flaticon-tooth-whitening"></span> -->
								<!-- <i class='fas fa-notes-medical hos-icon'></i> -->
								<i class='fas fa-file-prescription hos-icon'></i>
								<h4 class="service-block_three-heading"><a href="">Book Health Packages</a></h4>
							</div>
						</div>
					</div>

					<!-- Service Block Three -->
					<div class="service-block_three col-xl-3 col-lg-6 col-md-6 col-sm-12">
						<div class="service-block_three-inner">
							<div class="service-block_three-icon-box">
								<i class="fas fa-heartbeat hos-icon"></i>

								<h4 class="service-block_three-heading"><a href="#">Diagnostic Services</a></h4>
							</div>
						</div>
					</div>

					<!-- Service Block Three -->
					<div class="service-block_three col-xl-3 col-lg-6 col-md-6 col-sm-12">
						<div class="service-block_three-inner">
							<div class="service-block_three-icon-box">
								<i class="fa fa-user-md hos-icon"></i>
								<h4 class="service-block_three-heading"><a href="">Search for a Doctor</a></h4>
							</div>
						</div>
					</div>

				</div>
			</div>
		</section>
		<!-- End Services Three -->

		<!-- Specialist One -->
		<section class="specialist-one">
			<div class="specialist-one_pattern" style="background-image:url(assets/images/background/pattern-13.png)">
			</div>
			<div class="auto-container">

				<!-- Sec Title -->
				<div class="sec-title text-center">
					<div class="sec-title_title"> <img src="{{ asset('/resources/assets/gallery/heading-top.png') }}"
							alt="" /></div>
					<h2 class="sec-title_heading">Super Speciality Services</h2>
				</div>

				<!-- Specialist Info Tabs -->
				<div class="specialist-info-tabs">
					<!-- Specialist Tabs -->
					<div class="specialist-tabs tabs-box">

						<!-- Tab Btns -->
						<ul class="tab-btns tab-buttons clearfix">
							<li data-tab="#cardiology" class="tab-btn active-btn"><img
									src="{{ asset('/resources/assets/gallery/cardiology.png') }}" alt="" />Cardiology
							</li>
							<li data-tab="#gastroentrology" class="tab-btn"><img
									src="{{ asset('/resources/assets/gallery/gastrology.png') }}"
									alt="" />Gastroentrology</li>
							<li data-tab="#neurology" class="tab-btn"><img
									src="{{ asset('/resources/assets/gallery/neurology.png') }}" alt="" />Neurology</li>
							<li data-tab="#plastic" class="tab-btn"><img
									src="{{ asset('/resources/assets/gallery/plastic-surgey.png') }}" alt="" />Plastic
								Surgery</li>
						</ul>

						<!-- Tabs Container -->
						<div class="tabs-content">

							<!-- Tab / Active Tab -->
							<div class="tab active-tab" id="cardiology">
								<div class="content">
									<div class="row clearfix">
										<!-- Image Column -->
										<div class="image-column col-lg-6 col-md-12 col-sm-12">
											<div class="inner-column specialist-images">
												<div class="specialist-one_image">
													<img src="{{ asset('/resources/assets/gallery/gastrology-imgs.png') }}"
														alt="" />
												</div>
											</div>
										</div>
										<!-- Content Column -->
										<div class="content-column col-lg-6 col-md-12 col-sm-12">
											<div class="inner-column">
												<h3 class="specialist-one_title">Cardiology</h3>
												<div class="specialist-one_text">The Cardiology Department at Bombay
													Hospital, established in 1950, is a leader in advanced
													cardiac care, offering cutting-edge treatments and procedures.</div>
												<div class="blog-detail">
													<ul class="list-two">
														<li>First open heart surgery in a non-government hospital in
															1962.</li>
														<li>Over 60,000 angiographies and 15,000 angioplasties
															performed.</li>
														<li>11 leading Interventional Cardiologists, including renowned
															experts.</li>
														<li>State-of-the-art non-invasive cardiology investigations</li>
														<li>Advanced Nuclear Medicine with Thallium Stress Test and PET
															Scan services.</li>
													</ul>
												</div>

												<h6 class="team-block_two-title text-start pb-2">List of Consultants
												</h6>

												<div class="row clearfix">
													<div class="column col-lg-6 col-md-6 col-sm-12">
														<ul class="specialist-one_list">
															<li>Dr. Satyavan Sharma</li>
															<li>Dr. Anil Sharma</li>
														</ul>
													</div>
													<div class="column col-lg-6 col-md-6 col-sm-12">
														<ul class="specialist-one_list">
															<li>Dr. Nagesh Waghmare</li>
															<li>Dr. A.C. Pereira</li>
														</ul>
													</div>
												</div>

												<div class="specialist-one_button">
													<a href="" class="theme-btn btn-style-one">
														<span class="btn-wrap">
															<span class="text-one">More Detail</span>
															<span class="text-two">More Detail</span>
														</span>
													</a>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>

							<!-- Tab -->
							<div class="tab" id="gastroentrology">
								<div class="content">
									<div class="row clearfix">
										<!-- Image Column -->
										<div class="image-column col-lg-6 col-md-12 col-sm-12">
											<div class="inner-column  specialist-images">
												<div class="specialist-one_image">
													<img src="{{ asset('/resources/assets/gallery/gastrology-imgs.png') }}"
														alt="" />
												</div>
											</div>
										</div>
										<!-- Content Column -->
										<div class="content-column col-lg-6 col-md-12 col-sm-12">
											<div class="inner-column">
												<h3 class="specialist-one_title">Gastroentrology</h3>
												<div class="specialist-one_text">The gastroenterology department offers
													advanced care with skilled consultants,
													specializing in medical and interventional gastroenterology,
													hepatology, and cutting-edge treatments.</div>
												<div class="blog-detail">
													<ul class="list-two">
														<li>Diagnosis and management of gastrointestinal, liver, and
															pancreatic disorders.</li>
														<li>Interventional procedures like UGI endoscopy, colonoscopy,
															and ERCP.</li>
														<li>Treatment of inflammatory bowel disease, irritable bowel
															syndrome, liver diseases, and more.</li>
														<li>Specialized procedures like liver biopsies, HVPG monitoring,
															and TIPSS placement.</li>
													</ul>
												</div>

												<h6 class="team-block_two-title text-start pb-2">List of Consultants
												</h6>

												<div class="row clearfix">
													<div class="column col-lg-6 col-md-6 col-sm-12">
														<ul class="specialist-one_list">
															<li>Dr. Vaibhav Somani</li>
															<li>Dr. Gajanan Rodge</li>
														</ul>
													</div>
													<div class="column col-lg-6 col-md-6 col-sm-12">
														<ul class="specialist-one_list">
															<li>Dr. Pravin Rathi</li>
															<li>Dr. Nitin Aherrao</li>
														</ul>
													</div>
												</div>

												<div class="specialist-one_button">
													<a href="" class="theme-btn btn-style-one">
														<span class="btn-wrap">
															<span class="text-one">More Detail</span>
															<span class="text-two">More Detail</span>
														</span>
													</a>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>

							<!-- Tab -->
							<div class="tab" id="neurology">
								<div class="content">
									<div class="row clearfix">
										<!-- Image Column -->
										<div class="image-column col-lg-6 col-md-12 col-sm-12">
											<div class="inner-column  specialist-images">
												<div class="specialist-one_image">
													<img src="{{ asset('/resources/assets/gallery/gastrology-imgs.png') }}"
														alt="" />
												</div>
											</div>
										</div>
										<!-- Content Column -->
										<div class="content-column col-lg-6 col-md-12 col-sm-12">
											<div class="inner-column">
												<h3 class="specialist-one_title">Neurology</h3>
												<div class="specialist-one_text">Bombay Hospital's Neurology department
													offers world-class
													care with expert specialists, cutting-edge treatments, and unmatched
													clinical outcomes.</div>
												<div class="blog-detail">
													<ul class="list-two">
														<li>Ranked among the best in India by Outlook Health 2022.</li>
														<li>Expertise in stroke, brain tumors, spinal injuries, and
															more.</li>
														<li>Specialized Neurointerventional team for acute stroke care.
														</li>
														<li>Seamless collaboration across multiple neurological
															specialties.</li>
													</ul>
												</div>

												<h6 class="team-block_two-title text-start pb-2">List of Consultants
												</h6>

												<div class="row clearfix">
													<div class="column col-lg-6 col-md-6 col-sm-12">
														<ul class="specialist-one_list">
															<li>Dr. B.S. Singhal</li>
															<li>Dr. N.E. Bharucha</li>
														</ul>
													</div>
													<div class="column col-lg-6 col-md-6 col-sm-12">
														<ul class="specialist-one_list">
															<li>Dr. Vibhor Pardasani</li>
															<li>Dr. Rakesh Singh</li>
														</ul>
													</div>
												</div>

												<div class="specialist-one_button">
													<a href="" class="theme-btn btn-style-one">
														<span class="btn-wrap">
															<span class="text-one">More Detail</span>
															<span class="text-two">More Detail</span>
														</span>
													</a>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>

							<!-- Tab -->
							<div class="tab" id="plastic">
								<div class="content">
									<div class="row clearfix">
										<!-- Image Column -->
										<div class="image-column col-lg-6 col-md-12 col-sm-12">
											<div class="inner-column  specialist-images">
												<div class="specialist-one_image">
													<img src="{{ asset('/resources/assets/gallery/gastrology-imgs.png') }}"
														alt="" />
												</div>
											</div>
										</div>
										<!-- Content Column -->
										<div class="content-column col-lg-6 col-md-12 col-sm-12">
											<div class="inner-column">
												<h3 class="specialist-one_title">Plastic Surgery</h3>
												<div class="specialist-one_text">The department offers comprehensive
													care in Plastic Surgery,
													including aesthetic, reconstructive, and microsurgical procedures.
												</div>
												<div class="blog-detail">
													<ul class="list-two">
														<li>Expert consultants in Aesthetic Surgery, Craniofacial
															Surgery, Hand Surgery, and more.</li>
														<li>Specializes in improving form, function, and emotional
															well-being.</li>
														<li>Focus on both reconstructive and cosmetic procedures.</li>
														<li>DNB course in Plastic Surgery offered for advanced training.
														</li>
													</ul>
												</div>

												<h6 class="team-block_two-title text-start pb-2">List of Consultants
												</h6>

												<div class="row clearfix">
													<div class="column col-lg-6 col-md-6 col-sm-12">
														<ul class="specialist-one_list">
															<li>Dr. Ashok Gupta</li>
															<li>Dr. Mukund Thatte</li>

														</ul>
													</div>
													<div class="column col-lg-6 col-md-6 col-sm-12">
														<ul class="specialist-one_list">
															<li>Dr. Anshuman Manaswi</li>
															<li>Dr. Akshay Deshpande</li>

														</ul>
													</div>
												</div>

												<div class="specialist-one_button">
													<a href="" class="theme-btn btn-style-one">
														<span class="btn-wrap">
															<span class="text-one">More Detail</span>
															<span class="text-two">More Detail</span>
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
				</div>

			</div>
		</section>

		<!--======== End Specialist One============ -->

		<!-- ======== vision mission=========== -->
		<section class="counter-two pt-3 bg-light">
			<div class="auto-container">
				<!-- Sec Title -->
				<div class="sec-title text-center">
					<div class="sec-title_title"> <img src="{{ asset('/resources/assets/gallery/heading-top-2.png') }}"
							alt="" /></div>
					<h2 class="sec-title_heading">Foundation of Our Journey</h2>
				</div>
				<div class="row clearfix">

					<!-- Counter Column -->
					<div class="counter-two_block col-lg-4 col-md-6 col-sm-6">
						<div class="counter-two_inner myvision">

							<h4 class="">Vision</h4>
							<div class="counter-two_text pt-4 ">"To be a leading healthcare provider known for
								excellence, innovation,
								and compassionate care, ensuring accessible, quality medical services for all, fostering
								a healthier,
								inclusive, and patient-centered society"</div>
						</div>
					</div>

					<!-- Counter Column -->
					<div class="counter-two_block col-lg-4 col-md-6 col-sm-6">
						<div class="counter-two_inner myvision">
							<h4 class="">Mission</h4>
							<div class="counter-two_text pt-4">"Bombay Hospital shall provide the best possible medical
								treatment,
								delivered most efficiently, in the shortest possible time, at minimum cost, to all
								sections of the
								society, irrespective of caste, creed or religion."</div>
						</div>
					</div>

					<!-- Counter Column -->
					<div class="counter-two_block col-lg-4 col-md-12 col-sm-6">
						<div class="counter-two_inner myvision">
							<h4 class="">Motto</h4>
							<div class="counter-two_text pt-4">"A Patient is the most important person in our hospital.
								He is not an interruption to our work. He is the purpose of it. He is not an outsider in
								our hospital,
								he is part of it. We are not doing him a favour by serving him, he is doing us a favour
								by giving us
								an opportunity to do so."</div>
						</div>
					</div>

				</div>
			</div>
		</section>
		<!-- ========End Vision mission ======== -->


		<!-- About Two -->
		<section class="about-two pt-40">
			<div class="about-two_pattern"></div>
			<div class="auto-container">

				<div class="row clearfix">

					<!-- About Two Content Column -->
					<div class="about-two_content-column col-lg-7 col-md-12 col-sm-12 ">
						<div class="about-two_content-inner">
							<!-- Sec Title -->
							<div class="sec-title text-center">
								<div class="sec-title_title"> <img
										src="{{ asset('/resources/assets/gallery/heading-top-2.png') }}" alt="" /></div>
								<h2 class="sec-title_heading">Bombay Hospital and Medical Research Centre Jaipur</h2>

								<h5>A New Era in Quality Healthcare</h5>
							</div>
							<p class="about-two_text">We are excited to announce the opening of <b> Bombay Hospital
									Jaipur</b>,
								a fully NABH-accredited facility dedicated to top-quality medical care.</p>

							<p class="about-two_text">Located in the heart of Jaipur, this new hospital aims to serve
								as a leading healthcare hub for North India, continuing the legacy of excellence
								established
								over seven decades ago by <b>Shri Rameshwardas Birla</b>, Founder Chairman of the Bombay
								Hospital Trust.
								True to the Bombay Hospital mission, we are committed to providing high-quality care to
								all,
								regardless of financial background, with advanced facilities and a team of dedicated
								specialists.</p>

							<div class="d-flex align-items-center flex-wrap">
								<!-- Button Box -->
								<a href="" class="theme-btn btn-style-one">
									<span class="btn-wrap">
										<span class="text-one">Know More</span>
										<span class="text-two">Know More</span>
									</span>
								</a>
							</div>
						</div>
					</div>

					<!-- About Two Images Column -->
					<div class="col-lg-5 col-md-12 col-sm-12">
						<div class="about-two_video jaipur-hos">
							<a href="https://www.youtube.com/watch?v=zdP-b_LJqwg" target="_blank"
								class="text-center v-2">
								<img src="{{ asset('resources/assets/gallery/jaipur-hospital-v1.png') }}"
									class="w-100 jai-img" alt="" />
							</a>
						</div>
					</div>

					<!-- About Two Images Column -->
					<!-- <div class="about-two_images-column col-lg-6 col-md-12 col-sm-12">
						<div class="about-two_images-inner margin-up">
							<div class="about-two_video jaipur-hos">
								<a href="https://www.youtube.com/watch?v=zdP-b_LJqwg"
								class="text-center v-2">
								<img src="{{ asset('resources/assets/gallery/jaipur-hospital-v1.png') }}" alt="" />
								</a>
								<a href="https://www.youtube.com/watch?v=zdP-b_LJqwg"
									class="lightbox-video about-two_video-box fa fa-play"><i class="ripple"></i></a>
							</div>
						</div>
					</div> -->

				</div>
			</div>
		</section>
		<!-- End About Two -->


		<!--==============================
          Departments Area desktop
            ==============================-->
		<section class="space-bottom team-layout4 bg-light only-desk1">
			<!-- <span class="about-shape4 ani-moving-y d-none d-xl-block">
				<img src="assets/img/team/team-shep3.svg" alt="">
			</span> -->
			<div class="container wow fadeInUp" data-wow-delay="0.2s">
				<div class="row justify-content-center text-center">
					<div class="col-xl-6">
						<!-- Sec Title -->
						<div class="sec-title text-center">
							<div class="sec-title_title"> <img
									src="{{ asset('/resources/assets/gallery/heading-top-2.png') }}" alt="" /></div>
							<h2 class="sec-title_heading">Departments</h2>
						</div>
					</div>
				</div>
				<div class="row g-5 ">
					<div class="col-lg-3 ">
						<div class="team-style4 active" data-tab-target="#one">
							<div class="team-content py-2">
								<h3 class="team-title">Super Speciality</h3>
							</div>
						</div>
						<div class="team-style4" data-tab-target="#two">
							<div class="team-content  py-2">
								<h3 class="team-title text-center">Broad Speciality</h3>
							</div>
						</div>
						<div class="team-style4" data-tab-target="#three">
							<div class="team-content  py-2">
								<h3 class="team-title">Diagnostics</h3>
							</div>
						</div>
						<div class="team-style4" data-tab-target="#four">
							<div class="team-content  py-2">
								<h3 class="team-title">Therapeutic</h3>
							</div>
						</div>
					</div>

					<div class="col-lg-9 mob1">
						<div id="one" class="team-box active" data-tab-content>
							<div class="row">
								<div class="col-lg-12">
									<div class="team-body">
										<div class="team-content">
											<h3 class="team-title text-center"><a class="text-inherit" href="">Super
													Speciality</a></h3>
											<div class="row pt-5">
												<div class="col-lg-4">
													<div class="contact-email">
														<p class="info"><img
																src="{{ asset('/resources/assets/icons/Cardiology.png') }}"
																alt=""><a href="">Cardiology</a></p>
													</div>
													<div class="contact-email ">
														<p
															class="info  d-flex  align-items-center justify-content-center">
															<img src="{{ asset('/resources/assets/icons/Cardiovascular Thoracic.png') }}"
																alt=""><a href="">Cardiovascular Thoracic Surgery</a>
														</p>
													</div>
													<div class="contact-email">
														<p class="info"><img
																src="{{ asset('/resources/assets/icons/Endocrinology.png') }}"
																alt=""><a href="">Endocrinology</a></p>
													</div>
													<div class="contact-email">
														<p class="info"><img
																src="{{ asset('/resources/assets/icons/Gastroentrology.png') }}"
																alt=""><a href="">Gastroentrology</a></p>
													</div>
													<div class="contact-email">
														<p class="info"><img
																src="{{ asset('/resources/assets/icons/Nephrology.png') }}"
																alt=""><a href="">Nephrology</a></p>
													</div>
													<div class="contact-email">
														<p class="info"><img
																src="{{ asset('/resources/assets/icons/Neurology.png') }}"
																alt=""><a href="">Neurology</a></p>
													</div>
												</div>

												<div class="col-lg-4">
													<div class="contact-email">
														<p class="info"><img
																src="{{ asset('/resources/assets/icons/Neurosurgery.png') }}"
																alt=""><a href="">Neurosurgery</a></p>
													</div>
													<div class="contact-email">
														<p class="info"><img
																src="{{ asset('/resources/assets/icons/Paediatric.png') }}"
																alt=""><a href="">Paediatric Surgery</a></p>
													</div>
													<div class="contact-email">
														<p class="info"><img
																src="{{ asset('/resources/assets/icons/Plastic Surgery.png') }}"
																alt=""><a href="">Plastic Surgery</a></p>
													</div>
													<div class="contact-email">
														<p class="info"><img
																src="{{ asset('/resources/assets/icons/Pulmonary Medicine.png') }}"
																alt=""><a href="">Pulmonary Medicine</a></p>
													</div>
													<div class="contact-email">
														<p class="info"><img
																src="{{ asset('/resources/assets/icons/Rheumatology.png') }}"
																alt=""><a href="">Rheumatology</a></p>
													</div>
													<div class="contact-email">
														<p class="info"><img
																src="{{ asset('/resources/assets/icons/Urology.png') }}"
																alt=""><a href="">Urology</a></p>
													</div>
												</div>

												<div class="col-lg-4">
													<div class="contact-email">
														<p class="info p-2 text-center"><a href=""><b>Oncology</b> </a>
														</p>
													</div>
													<div class="contact-email">
														<p class="info"><img
																src="{{ asset('/resources/assets/icons/Medical Oncology.png') }}"
																alt=""><a href="">Medical Oncology</a></p>
													</div>
													<div class="contact-email">
														<p class="info"><img
																src="{{ asset('/resources/assets/icons/Surgical Oncology.png') }}"
																alt=""><a href="">Surgical Oncology</a></p>
													</div>
													<div class="contact-email">
														<p class="info"><img
																src="{{ asset('/resources/assets/icons/Haemato-Oncology.png') }}"
																alt=""><a href="">Haemato-Oncology</a></p>
													</div>
													<div class="contact-email">
														<p class="info"><img
																src="{{ asset('/resources/assets/icons/Paediatric-Oncology.png') }}"
																alt=""><a href="">Paediatric-Oncology</a></p>
													</div>
													<div class="contact-email">
														<p class="info"><img
																src="{{ asset('/resources/assets/icons/Radiation Oncology.png') }}"
																alt=""><a href="">Radiation Oncology</a></p>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>

						<div id="two" class="team-box" data-tab-content>
							<div class="row">
								<div class="col-lg-12">
									<div class="team-body">
										<div class="team-content">
											<h3 class="team-title  text-center"><a class="text-inherit" href="">Broad
													Speciality</a></h3>
											<div class="row pt-5">
												<div class="col-lg-4">
													<div class="contact-email">
														<p class="info"><img
																src="{{ asset('/resources/assets/icons/Dermatology.png') }}"
																alt=""><a href="">Dermatology</a></p>
													</div>
													<div class="contact-email">
														<p class="info"><img
																src="{{ asset('/resources/assets/icons/Diabetology.png') }}"
																alt=""><a href="">Diabetology</a></p>
													</div>
													<div class="contact-email">
														<p class="info"><img
																src="{{ asset('/resources/assets/icons/Ophthamalogy.png') }}"
																alt=""><a href="">Ophthamalogy</a></p>
													</div>
													<div class="contact-email">
														<p class="info"><img
																src="{{ asset('/resources/assets/icons/General Surgery.png') }}"
																alt=""><a href="">General Surgery</a></p>
													</div>
												</div>

												<div class="col-lg-4">
													<div class="contact-email">
														<p class="info"><img
																src="{{ asset('/resources/assets/icons/Orthopaedics.png') }}"
																alt=""><a href="">Orthopaedics</a></p>
													</div>
													<div class="contact-email">
														<p class="info"><img
																src="{{ asset('/resources/assets/icons/Paediatrics.png') }}"
																alt=""><a href="">Paediatrics</a></p>
													</div>
													<div class="contact-email">
														<p class="info"><img
																src="{{ asset('/resources/assets/icons/Pyschiatry.png') }}"
																alt=""><a href="">Pyschiatry</a></p>
													</div>
													<div class="contact-email">
														<p class="info"><img
																src="{{ asset('/resources/assets/icons/Spine Surgery.png') }}"
																alt=""><a href="">Spine Surgery</a></p>
													</div>
												</div>

												<div class="col-lg-4">
													<div class="contact-email">
														<p class="info"><img
																src="{{ asset('/resources/assets/icons/Critical Care.png') }}"
																alt=""><a href="">Critical Care Medicine</a></p>
													</div>
													<div class="contact-email">
														<p class="info"><img
																src="{{ asset('/resources/assets/icons/ENT.png') }}"
																alt=""><a href="">ENT & Laryngology</a></p>
													</div>
													<div class="contact-email">
														<p class="info d-flex justify-content-center"><img
																src="{{ asset('/resources/assets/icons/Gynaecology & Obstetrics.png') }}"
																alt=""><a href="">Gynaecology & Obstetrics</a></p>
													</div>
													<div class="contact-email">
														<p
															class="info d-flex  align-items-center justify-content-center">
															<img src="{{ asset('/resources/assets/icons/General Medicine.png') }}"
																alt=""><a href="">General Medicine & Infectious
																Disease</a>
														</p>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>

						<div id="three" class="team-box" data-tab-content>
							<div class="row">
								<div class="col-lg-12">
									<div class="team-body">
										<div class="team-content">
											<h3 class="team-title  text-center"><a class="text-inherit"
													href="">Diagnostics</a></h3>
											<div class="row pt-5">
												<div class="col-lg-4">
													<div class="contact-email">
														<p class="info p-1 text-center"><a href=""><b>Radiology and
																	Imaging Services</b></a></p>
													</div>
													<div class="contact-email">
														<p class="info"><img
																src="{{ asset('/resources/assets/icons/PET CT.png') }}"
																alt=""><a href="">PET CT</a></p>
													</div>
													<div class="contact-email">
														<p class="info"><img
																src="{{ asset('/resources/assets/icons/MRI_CT Scan.png') }}"
																alt=""><a href="">MRI / CT Scan</a></p>
													</div>
													<div class="contact-email">
														<p class="info"><img
																src="{{ asset('/resources/assets/icons/USG.png') }}"
																alt=""><a href="">USG</a></p>
													</div>
													<div class="contact-email">
														<p class="info"><img
																src="{{ asset('/resources/assets/icons/DSA.png') }}"
																alt=""><a href="">DSA</a></p>
													</div>
													<!--  -->
													<div class="contact-email">
														<p class="info p-1 text-center"><a href=""><b>Non-Invasive
																	Cardiology</b></a></p>
													</div>
													<div class="contact-email">
														<p class="info"><img
																src="{{ asset('/resources/assets/icons/ECG.png') }}"
																alt=""><a href="">ECG</a></p>
													</div>
													<div class="contact-email">
														<p class="info"><img
																src="{{ asset('/resources/assets/icons/Mammography.png') }}"
																alt=""><a href="">Xray & Mammography</a></p>
													</div>
													<div class="contact-email">
														<p
															class="info  d-flex  align-items-center justify-content-center">
															<img src="{{ asset('/resources/assets/icons/2D Echo.png') }}"
																alt=""><a href="">2D Echo/ Stress Test/ Holter
																Monitor</a>
														</p>
													</div>
												</div>

												<div class="col-lg-4">
													<div class="contact-email">
														<p class="info  p-1 text-center"><a href=""><b>Pathology</b></a>
														</p>
													</div>
													<div class="contact-email">
														<p class="info"><img
																src="{{ asset('/resources/assets/icons/Biochemistry.png') }}"
																alt=""><a href="">Biochemistry</a></p>
													</div>
													<div class="contact-email">
														<p class="info"><img
																src="{{ asset('/resources/assets/icons/Haematology.png') }}"
																alt=""><a href="">Haematology</a></p>
													</div>
													<div class="contact-email">
														<p class="info"><img
																src="{{ asset('/resources/assets/icons/Microbiology.png') }}"
																alt=""><a href="">Microbiology</a></p>
													</div>
													<div class="contact-email">
														<p class="info"><img
																src="{{ asset('/resources/assets/icons/Histopathology.png') }}"
																alt=""><a href="">Histopathology</a></p>
													</div>
													<div class="contact-email">
														<p class="info"><img
																src="{{ asset('/resources/assets/icons/Molecular.png') }}"
																alt=""><a href="">Molecular Lab</a></p>
													</div>
													<div class="contact-email">
														<p class="info"><img
																src="{{ asset('/resources/assets/icons/Transfusion.png') }}"
																alt=""><a href="">Transfusion Services</a></p>
													</div>
													<div class="contact-email">
														<p class="info"><img
																src="{{ asset('/resources/assets/icons/Pathology.png') }}"
																alt=""><a href="">Clinical Pathology</a></p>
													</div>
												</div>

												<div class="col-lg-4">
													<div class="contact-email">
														<p class="info text-center p-1"><a href=""><b>Other
																	Services</b></a></p>
													</div>
													<div class="contact-email">
														<p class="info"><img
																src="{{ asset('/resources/assets/icons/EEG.png') }}"
																alt=""><a href="">EEG</a></p>
													</div>
													<div class="contact-email">
														<p class="info"><img
																src="{{ asset('/resources/assets/icons/EMG.png') }}"
																alt=""><a href="">EMG</a></p>
													</div>
													<div class="contact-email">
														<p class="info"><img
																src="{{ asset('/resources/assets/icons/PFT.png') }}"
																alt=""><a href="">PFT</a></p>
													</div>
													<div class="contact-email">
														<p class="info"><img
																src="{{ asset('/resources/assets/icons/Urodynamic.png') }}"
																alt=""><a href="">Urodynamic Lab</a></p>
													</div>
													<div class="contact-email">
														<p
															class="info  d-flex  align-items-center justify-content-center">
															<img src="{{ asset('/resources/assets/icons/Voice Clinic.png') }}"
																alt=""><a href="">Voice Clinic & Swallowing Centre</a>
														</p>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>

						<div id="four" class="team-box" data-tab-content>
							<div class="row">
								<div class="col-lg-12">
									<div class="team-body">
										<div class="team-content">
											<h3 class="team-title  text-center"><a class="text-inherit"
													href="">Therapeutic</a></h3>
											<div class="row pt-5">
												<div class="col-lg-4">
													<div class="contact-email">
														<p
															class="info  d-flex  align-items-center justify-content-center">
															<img src="{{ asset('/resources/assets/icons/Artifical Kidney.png') }}"
																alt=""><a href="">Artifical Kidney Unit Dialysis</a>
														</p>
													</div>
													<div class="contact-email">
														<p class="info"><img
																src="{{ asset('/resources/assets/icons/Audiology.png') }}"
																alt=""><a href="">Audiology</a></p>
													</div>
													<div class="contact-email">
														<p class="info"><img
																src="{{ asset('/resources/assets/icons/Dental.png') }}"
																alt=""><a href="">Dental Speciality</a></p>
													</div>
													<div class="contact-email">
														<p class="info"><img
																src="{{ asset('/resources/assets/icons/Lithotripsy.png') }}"
																alt=""><a href="">Lithotripsy</a></p>
													</div>
												</div>

												<div class="col-lg-4">
													<div class="contact-email">
														<p class="info"><img
																src="{{ asset('/resources/assets/icons/Nutrition.png') }}"
																alt=""><a href="">Nutrition Clinic</a></p>
													</div>
													<div class="contact-email">
														<p class="info"><img
																src="{{ asset('/resources/assets/icons/Ozone.png') }}"
																alt=""><a href="">Ozone Therapy</a></p>
													</div>
													<div class="contact-email">
														<p class="info"><img
																src="{{ asset('/resources/assets/icons/Physiotherapy.png') }}"
																alt=""><a href="">Physiotherapy</a></p>
													</div>
													<div class="contact-email">
														<p class="info"><img
																src="{{ asset('/resources/assets/icons/Radiation-t.png') }}"
																alt=""><a href="">Radiation Therapy</a></p>
													</div>
												</div>

												<div class="col-lg-4">
													<div class="contact-email">
														<p
															class="info  d-flex  align-items-center justify-content-center">
															<img src="{{ asset('/resources/assets/icons/Health Check-up.png') }}"
																alt=""><a href="">Preventive Health Check-up (EHS)</a>
														</p>
													</div>
													<div class="contact-email">
														<p
															class="info align-items-center d-flex justify-content-center">
															<img src="{{ asset('/resources/assets/icons/TIO.png') }}"
																alt=""><a href="">Taparia Institute of Ophthalmology
																(TIO)</a>
														</p>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- <span class="team-shape2 ani-moving-x d-none d-xl-block">
				<img src="assets/img/team/team-shep2.svg" alt="shep">
			</span> -->
		</section>
		<!--============  Departments Area=============-->

		<!-- Departments Area mobile -->
		<section class="faq-one faq-mob only-mob1" style="background-image:url(assets/images/background/2.jpg)">
			<div class="faq-one_pattern" data-parallax='{"y" : 50}'></div>
			<div class="container">
				<div class="row clearfix">
					<!-- Accordion Column -->
					<div class="faq-one_accordion-column col-lg-12 col-md-12 col-sm-12">
						<div class="faq-one_accordion-inner">
							<!-- Sec Title -->
							<div class="sec-title text-center">
								<div class="sec-title_title"> <img
										src="{{ asset('/resources/assets/gallery/heading-top-2.png') }}" alt="" /></div>
								<h2 class="sec-title_heading">Departments</h2>
							</div>

							<!-- Accordion Box -->
							<ul class="accordion-box">

								<!-- Block -->
								<li class="accordion block">
									<div class="acc-btn active">
										<div class="icon-outer"><span class="icon fa-solid fa-angle-right fa-fw"></span>
										</div>Super Speciality
									</div>
									<div class="acc-content current ">
										<div class="content  dept-content">
											<div class="row">
												<div class="col-lg-12">
													<div class="team-body">
														<div class="team-content">
															<div class="row pt-5">
																<div class="col-lg-4">
																	<div class="contact-email">
																		<p class="info mob-view"><img
																				src="{{ asset('/resources/assets/icons/Cardiology.png') }}"
																				alt=""><a href="">Cardiology</a></p>
																	</div>
																	<div class="contact-email ">
																		<p
																			class="info mob-view">
																			<img src="{{ asset('/resources/assets/icons/Cardiovascular Thoracic.png') }}"
																				alt=""><a href="">Cardiovascular
																				Thoracic Surgery</a>
																		</p>
																	</div>
																	<div class="contact-email">
																		<p class="info"><img
																				src="{{ asset('/resources/assets/icons/Endocrinology.png') }}"
																				alt=""><a href="">Endocrinology</a></p>
																	</div>
																	<div class="contact-email">
																		<p class="info"><img
																				src="{{ asset('/resources/assets/icons/Gastroentrology.png') }}"
																				alt=""><a href="">Gastroentrology</a>
																		</p>
																	</div>
																	<div class="contact-email">
																		<p class="info"><img
																				src="{{ asset('/resources/assets/icons/Nephrology.png') }}"
																				alt=""><a href="">Nephrology</a></p>
																	</div>
																	<div class="contact-email">
																		<p class="info"><img
																				src="{{ asset('/resources/assets/icons/Neurology.png') }}"
																				alt=""><a href="">Neurology</a></p>
																	</div>

																</div>

																<div class="col-lg-4">
																	<div class="contact-email">
																		<p class="info"><img
																				src="{{ asset('/resources/assets/icons/Neurosurgery.png') }}"
																				alt=""><a href="">Neurosurgery</a></p>
																	</div>
																	<div class="contact-email">
																		<p class="info"><img
																				src="{{ asset('/resources/assets/icons/Paediatric.png') }}"
																				alt=""><a href="">Paediatric Surgery</a>
																		</p>
																	</div>
																	<div class="contact-email">
																		<p class="info"><img
																				src="{{ asset('/resources/assets/icons/Plastic Surgery.png') }}"
																				alt=""><a href="">Plastic Surgery</a>
																		</p>
																	</div>
																	<div class="contact-email">
																		<p class="info"><img
																				src="{{ asset('/resources/assets/icons/Pulmonary Medicine.png') }}"
																				alt=""><a href="">Pulmonary Medicine</a>
																		</p>
																	</div>
																	<div class="contact-email">
																		<p class="info"><img
																				src="{{ asset('/resources/assets/icons/Rheumatology.png') }}"
																				alt=""><a href="">Rheumatology</a></p>
																	</div>
																	<div class="contact-email">
																		<p class="info"><img
																				src="{{ asset('/resources/assets/icons/Urology.png') }}"
																				alt=""><a href="">Urology</a></p>
																	</div>
																</div>

																<div class="col-lg-4">
																	<div class="contact-email">
																		<p class="info p-2 text-center"><a
																				href=""><b>Oncology</b> </a>
																		</p>
																	</div>
																	<div class="contact-email">
																		<p class="info"><img
																				src="{{ asset('/resources/assets/icons/Medical Oncology.png') }}"
																				alt=""><a href="">Medical Oncology</a>
																		</p>
																	</div>
																	<div class="contact-email">
																		<p class="info"><img
																				src="{{ asset('/resources/assets/icons/Surgical Oncology.png') }}"
																				alt=""><a href="">Surgical Oncology</a>
																		</p>
																	</div>
																	<div class="contact-email">
																		<p class="info"><img
																				src="{{ asset('/resources/assets/icons/Haemato-Oncology.png') }}"
																				alt=""><a href="">Haemato-Oncology</a>
																		</p>
																	</div>
																	<div class="contact-email">
																		<p class="info"><img
																				src="{{ asset('/resources/assets/icons/Paediatric-Oncology.png') }}"
																				alt=""><a
																				href="">Paediatric-Oncology</a></p>
																	</div>
																	<div class="contact-email">
																		<p class="info"><img
																				src="{{ asset('/resources/assets/icons/Radiation Oncology.png') }}"
																				alt=""><a href="">Radiation Oncology</a>
																		</p>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</li>

								<!-- Block -->
								<li class="accordion block">
									<div class="acc-btn">
										<div class="icon-outer"><span class="icon fa-solid fa-angle-right fa-fw"></span>
										</div>Broad Speciality
									</div>
									<div class="acc-content">
										<div class="content dept-content">
											<div class="row">
												<div class="col-lg-12">
													<div class="team-body">
														<div class="team-content">
															<div class="row pt-5">
																<div class="col-lg-4">
																	<div class="contact-email">
																		<p class="info"><img
																				src="{{ asset('/resources/assets/icons/Dermatology.png') }}"
																				alt=""><a href="">Dermatology</a></p>
																	</div>
																	<div class="contact-email">
																		<p class="info"><img
																				src="{{ asset('/resources/assets/icons/Diabetology.png') }}"
																				alt=""><a href="">Diabetology</a></p>
																	</div>
																	<div class="contact-email">
																		<p class="info"><img
																				src="{{ asset('/resources/assets/icons/Ophthamalogy.png') }}"
																				alt=""><a href="">Ophthamalogy</a></p>
																	</div>
																	<div class="contact-email">
																		<p class="info"><img
																				src="{{ asset('/resources/assets/icons/General Surgery.png') }}"
																				alt=""><a href="">General Surgery</a></p>
																	</div>
																</div>
				
																<div class="col-lg-4">
																	<div class="contact-email">
																		<p class="info"><img
																				src="{{ asset('/resources/assets/icons/Orthopaedics.png') }}"
																				alt=""><a href="">Orthopaedics</a></p>
																	</div>
																	<div class="contact-email">
																		<p class="info"><img
																				src="{{ asset('/resources/assets/icons/Paediatrics.png') }}"
																				alt=""><a href="">Paediatrics</a></p>
																	</div>
																	<div class="contact-email">
																		<p class="info"><img
																				src="{{ asset('/resources/assets/icons/Pyschiatry.png') }}"
																				alt=""><a href="">Pyschiatry</a></p>
																	</div>
																	<div class="contact-email">
																		<p class="info"><img
																				src="{{ asset('/resources/assets/icons/Spine Surgery.png') }}"
																				alt=""><a href="">Spine Surgery</a></p>
																	</div>
																</div>
				
																<div class="col-lg-4">
																	<div class="contact-email">
																		<p class="info"><img
																				src="{{ asset('/resources/assets/icons/Critical Care.png') }}"
																				alt=""><a href="">Critical Care Medicine</a></p>
																	</div>
																	<div class="contact-email">
																		<p class="info"><img
																				src="{{ asset('/resources/assets/icons/ENT.png') }}"
																				alt=""><a href="">ENT & Laryngology</a></p>
																	</div>
																	<div class="contact-email">
																		<p class="info mob-view"><img
																				src="{{ asset('/resources/assets/icons/Gynaecology & Obstetrics.png') }}"
																				alt=""><a href="">Gynaecology & Obstetrics</a></p>
																	</div>
																	<div class="contact-email">
																		<p
																			class="info mob-view">
																			<img src="{{ asset('/resources/assets/icons/General Medicine.png') }}"
																				alt=""><a href="">General Medicine & Infectious
																				Disease</a>
																		</p>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</li>

								<!-- Block -->
								<li class="accordion block">
									<div class="acc-btn">
										<div class="icon-outer"><span class="icon fa-solid fa-angle-right fa-fw"></span>
										</div>Diagnostics
									</div>
									<div class="acc-content">
										<div class="content dept-content">
											<div class="row">
												<div class="col-lg-12">
													<div class="team-body">
														<div class="team-content">
															<div class="row pt-5">
																<div class="col-lg-4">
																	<div class="contact-email">
																		<p class="info p-1 text-center"><a href=""><b>Radiology and
																					Imaging Services</b></a></p>
																	</div>
																	<div class="contact-email">
																		<p class="info"><img
																				src="{{ asset('/resources/assets/icons/PET CT.png') }}"
																				alt=""><a href="">PET CT</a></p>
																	</div>
																	<div class="contact-email">
																		<p class="info"><img
																				src="{{ asset('/resources/assets/icons/MRI_CT Scan.png') }}"
																				alt=""><a href="">MRI / CT Scan</a></p>
																	</div>
																	<div class="contact-email">
																		<p class="info"><img
																				src="{{ asset('/resources/assets/icons/USG.png') }}"
																				alt=""><a href="">USG</a></p>
																	</div>
																	<div class="contact-email">
																		<p class="info"><img
																				src="{{ asset('/resources/assets/icons/DSA.png') }}"
																				alt=""><a href="">DSA</a></p>
																	</div>
																	<!--  -->
																	<div class="contact-email">
																		<p class="info p-1 text-center"><a href=""><b>Non-Invasive
																					Cardiology</b></a></p>
																	</div>
																	<div class="contact-email">
																		<p class="info"><img
																				src="{{ asset('/resources/assets/icons/ECG.png') }}"
																				alt=""><a href="">ECG</a></p>
																	</div>
																	<div class="contact-email">
																		<p class="info"><img
																				src="{{ asset('/resources/assets/icons/Mammography.png') }}"
																				alt=""><a href="">Xray & Mammography</a></p>
																	</div>
																	<div class="contact-email">
																		<p
																			class="info mob-view">
																			<img src="{{ asset('/resources/assets/icons/2D Echo.png') }}"
																				alt=""><a href="">2D Echo/ Stress Test/ Holter
																				Monitor</a>
																		</p>
																	</div>
																</div>
				
																<div class="col-lg-4">
																	<div class="contact-email">
																		<p class="info  p-1 text-center"><a href=""><b>Pathology</b></a>
																		</p>
																	</div>
																	<div class="contact-email">
																		<p class="info"><img
																				src="{{ asset('/resources/assets/icons/Biochemistry.png') }}"
																				alt=""><a href="">Biochemistry</a></p>
																	</div>
																	<div class="contact-email">
																		<p class="info"><img
																				src="{{ asset('/resources/assets/icons/Haematology.png') }}"
																				alt=""><a href="">Haematology</a></p>
																	</div>
																	<div class="contact-email">
																		<p class="info"><img
																				src="{{ asset('/resources/assets/icons/Microbiology.png') }}"
																				alt=""><a href="">Microbiology</a></p>
																	</div>
																	<div class="contact-email">
																		<p class="info"><img
																				src="{{ asset('/resources/assets/icons/Histopathology.png') }}"
																				alt=""><a href="">Histopathology</a></p>
																	</div>
																	<div class="contact-email">
																		<p class="info"><img
																				src="{{ asset('/resources/assets/icons/Molecular.png') }}"
																				alt=""><a href="">Molecular Lab</a></p>
																	</div>
																	<div class="contact-email">
																		<p class="info"><img
																				src="{{ asset('/resources/assets/icons/Transfusion.png') }}"
																				alt=""><a href="">Transfusion Services</a></p>
																	</div>
																	<div class="contact-email">
																		<p class="info"><img
																				src="{{ asset('/resources/assets/icons/Pathology.png') }}"
																				alt=""><a href="">Clinical Pathology</a></p>
																	</div>
																</div>
				
																<div class="col-lg-4">
																	<div class="contact-email">
																		<p class="info text-center p-1"><a href=""><b>Other
																					Services</b></a></p>
																	</div>
																	<div class="contact-email">
																		<p class="info"><img
																				src="{{ asset('/resources/assets/icons/EEG.png') }}"
																				alt=""><a href="">EEG</a></p>
																	</div>
																	<div class="contact-email">
																		<p class="info"><img
																				src="{{ asset('/resources/assets/icons/EMG.png') }}"
																				alt=""><a href="">EMG</a></p>
																	</div>
																	<div class="contact-email">
																		<p class="info"><img
																				src="{{ asset('/resources/assets/icons/PFT.png') }}"
																				alt=""><a href="">PFT</a></p>
																	</div>
																	<div class="contact-email">
																		<p class="info"><img
																				src="{{ asset('/resources/assets/icons/Urodynamic.png') }}"
																				alt=""><a href="">Urodynamic Lab</a></p>
																	</div>
																	<div class="contact-email">
																		<p
																			class="info  mob-view">
																			<img src="{{ asset('/resources/assets/icons/Voice Clinic.png') }}"
																				alt=""><a href="">Voice Clinic & Swallowing Centre</a>
																		</p>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</li>

								<!-- Block -->
								<li class="accordion block">
									<div class="acc-btn">
										<div class="icon-outer"><span class="icon fa-solid fa-angle-right fa-fw"></span>
										</div>Therapeutic
									</div>
									<div class="acc-content">
										<div class="content dept-content">
											<div class="row">
												<div class="col-lg-12">
													<div class="team-body">
														<div class="team-content">
															<div class="row pt-5">
																<div class="col-lg-4">
																	<div class="contact-email">
																		<p
																			class="info ">
																			<img src="{{ asset('/resources/assets/icons/Artifical Kidney.png') }}"
																				alt=""><a href="">Artifical Kidney Unit Dialysis</a>
																		</p>
																	</div>
																	<div class="contact-email">
																		<p class="info"><img
																				src="{{ asset('/resources/assets/icons/Audiology.png') }}"
																				alt=""><a href="">Audiology</a></p>
																	</div>
																	<div class="contact-email">
																		<p class="info"><img
																				src="{{ asset('/resources/assets/icons/Dental.png') }}"
																				alt=""><a href="">Dental Speciality</a></p>
																	</div>
																	<div class="contact-email">
																		<p class="info"><img
																				src="{{ asset('/resources/assets/icons/Lithotripsy.png') }}"
																				alt=""><a href="">Lithotripsy</a></p>
																	</div>
																</div>
				
																<div class="col-lg-4">
																	<div class="contact-email">
																		<p class="info"><img
																				src="{{ asset('/resources/assets/icons/Nutrition.png') }}"
																				alt=""><a href="">Nutrition Clinic</a></p>
																	</div>
																	<div class="contact-email">
																		<p class="info"><img
																				src="{{ asset('/resources/assets/icons/Ozone.png') }}"
																				alt=""><a href="">Ozone Therapy</a></p>
																	</div>
																	<div class="contact-email">
																		<p class="info"><img
																				src="{{ asset('/resources/assets/icons/Physiotherapy.png') }}"
																				alt=""><a href="">Physiotherapy</a></p>
																	</div>
																	<div class="contact-email">
																		<p class="info"><img
																				src="{{ asset('/resources/assets/icons/Radiation-t.png') }}"
																				alt=""><a href="">Radiation Therapy</a></p>
																	</div>
																</div>
				
																<div class="col-lg-4">
																	<div class="contact-email">
																		<p
																			class="info mob-view">
																			<img src="{{ asset('/resources/assets/icons/Health Check-up.png') }}"
																				alt=""><a href="">Preventive Health Check-up (EHS)</a>
																		</p>
																	</div>
																	<div class="contact-email">
																		<p
																			class="info mob-view">
																			<img src="{{ asset('/resources/assets/icons/TIO.png') }}"
																				alt=""><a href="">Taparia Institute of Ophthalmology
																				(TIO)</a>
																		</p>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</li>

							</ul>

						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End Departments Area mobile -->

		<!-- ========= Chairman's Message ======================= -->
		<section class="health-one">
			<div class="testimonial-three_pattern"
				style="background-image:url({{ asset('/resources/assets/gallery/pattern-25-2.png)') }}"></div>

			<div class="container d-flex align-items-center">
				<div class="row">
					<div class="col-lg-6 col-md-12 col-sm-12 d-flex align-items-center justify-content-center">
						<a href="https://www.youtube.com/watch?v=ICKdsdVbB0c" class="pt-4">
							<img src="{{ asset('/resources/assets/gallery/chairman-message-2.png') }}"
								class=" chairman-message" alt="" />
						</a>
					</div>
					<!-- <div class="col-lg-6 col-md-12 col-sm-12">
						<div class="left-column clearfix">
							<div class="inner-column">
								<div class="image chairman-img">
									<img src="{{ asset('/resources/assets/gallery/chairman.png') }}" alt="" />
									<a href="https://www.youtube.com/watch?v=ICKdsdVbB0c"
										class="lightbox-video testimonial-three_video fa fa-play"><i
											class="ripple"></i></a>
								</div>
							</div>
						</div>
					</div> -->

					<div class="col-lg-6 col-md-12 col-sm-12 mt-50">
						<!-- Right Column -->
						<div class="right-column clearfix">
							<div class="inner-column px-4 mt-50">
								<!-- Sec Title -->
								<div class="sec-title ">
									<div class="sec-title_title "> <img
											src="{{ asset('/resources/assets/gallery/heading-top.png') }}" alt="" />
									</div>
									<h2 class="sec-title_heading">Chairman's Message</h2>
								</div>

								<div class="about-two_content-column ">
									<!-- <div class="about-two_content-inner"> -->
									<p class="about-two_text">Charity and the pursuit of excellence are the two
										fundamental
										ideals
										that provide us impetus to focus on the well being of the patient who is our
										primary
										responsibility. We have an obligation to provide the best possible treatment,
										delivered
										most efficiently, in the shortest possible time span and at minimum cost.</p>

									<p class="about-two_text">On this bedrock of charity we are relentlessly building
										the
										bedrock of excellence in the hospital by continuously refurbishing its spaces,
										installing the most modern medical equipments and injecting professionalism and
										dedication in our management team, so that our world class doctors can discharge
										their duties and responsibilities in an academically stimulating and hassle-free
										environment.</p>
									<!-- </div> -->
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End Chairman's Message -->


		<!-- Modern One -->
		<section class="modern-one">
			<div class="modern-one_pattern" style="background-image:url(assets/images/background/pattern-2.png)"></div>
			<div class="auto-container">

				<div class="row clearfix">
					<!-- Content Column -->
					<div class="modern-one_content-column col-lg-6 col-md-12 col-sm-12">
						<div class="modern-one_content-inner">
							<div class="sec-title text-center">
								<div class="sec-title_title "> <img
										src="{{ asset('/resources/assets/gallery/heading-top.png') }}" alt="" />
								</div>
								<h2 class="sec-title_heading">Why Choose Us</h2>
							</div>

							<div class="sec-title">
								<div class="sec-title_text">At Bombay Hospital Jaipur, we’re dedicated to providing
									top-notch medical care. Here’s what makes us unique:</div>
							</div>

							<ul class="doctor-detail_list-two">
								<li><strong>Comprehensive Care, All Under One Roof : </strong>We offer a full range of
									medical services in one place,
									meeting international standards to make healthcare easy and accessible.</li>
								<li><strong>Expert Doctors Available 24/7 : </strong>Our team includes some of the best,
									internationally-trained
									specialists who are always available to provide expert care when you need it.</li>
								<li><strong>Cutting-Edge Technology : </strong>With 500 beds, 76 critical care beds, 9
									advanced operating theatres,
									and the latest diagnostic tools, we’re equipped to deliver the highest quality care.
								</li>
								<li><strong>Impressive Facilities : </strong>Our 18-story building spans 7,00,000 sq.
									ft., making us one of the
									largest hospitals in Rajasthan with a modern, welcoming space for all our patients.
								</li>
							</ul>

						</div>
					</div>
					<!-- Image Column -->
					<div class="modern-one_image-column col-lg-6 col-md-12 col-sm-12">
						<div class="modern-one_image-inner">
							<div class="modern-one_image">
								<img src="{{ asset('/resources/assets/gallery/why-choose-us.jpg') }}" class="jai-img"
									alt="" />
							</div>

							<div class="counter-one"
								style="background-image:url(assets/images/background/pattern-5.png)">
								<div class="row clearfix">

									<!-- Counter Column -->
									<div class="counter-one_block col-lg-4 col-md-4 col-sm-12">
										<div class="counter-one_inner">
											<span class="counter-one_icon flaticon-doctor"></span>
											<div class="counter-one_counter d-flex">+<span class="odometer"
													data-count="200"></span></div>
											<div class="counter-one_text">Skilled Doctors</div>
										</div>
									</div>

									<!-- Counter Column -->
									<div class="counter-one_block col-lg-4 col-md-4 col-sm-12">
										<div class="counter-one_inner">
											<span class="counter-one_icon flaticon-surgery-room"></span>
											<div class="counter-one_counter d-flex"><span class="odometer"
													data-count="9"></span></div>
											<div class="counter-one_text">Operation Theatres</div>
										</div>
									</div>

									<!-- Counter Column -->
									<div class="counter-one_block col-lg-4 col-md-4 col-sm-12">
										<div class="counter-one_inner">
											<span class="counter-one_icon"><i class="fas fa-bed"></i></span>
											<div class="counter-one_counter d-flex"> +<span class="odometer"
													data-count="500"></span></div>
											<div class="counter-one_text">hospital Beds</div>
										</div>
									</div>

								</div>
							</div>

						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End Modern One -->

		<!-- ========= Our Locations ========== -->

		<section class="our-locations ">
			<div class="container">
				<div class="row">
					<div class="col-lg-4">
						<div class="sec-title pt-lg-5">
							<div class="sec-title_title text-center"> <img
									src="{{ asset('/resources/assets/gallery/heading-top.png') }}" alt="" />
							</div>
							<div class="text-center">
								<h2 class="sec-title_heading">Our Locations</h2>
							</div>
							<p class="pt-2">With hospitals in Mumbai, Indore, and the upcoming Jaipur, Bombay Hospital
								is dedicated to providing world-class healthcare across India. </p>
							<p>Each location follows our tradition of delivering exceptional medical care with advanced
								facilities and a patient-centric approach.</p>
						</div>
					</div>

					<div class="col-lg-8">
						<br><br>
						<div class="overflowHidden_onmobile">
							<div class="locations">
								<!-- India map image -->
								<img src="{{ asset('/resources/assets/gallery/try.png') }}" class="w-100"
									alt="India Map">


								<!-- Mumbai location dot with info -->
								<div class="location_dot dot_mumbai">
									<div class="location_info">
										<img src="{{ asset('/resources/assets/gallery/mumbai-icon1.png') }}"
											alt="Mumbai Icon">
										<p>Mumbai</p>
									</div>
								</div>

								<!-- Jaipur location dot with info -->
								<div class="location_dot dot_jaipur">
									<div class="location_info">
										<img src="{{ asset('/resources/assets/gallery/jaipur-icon1.png') }}"
											alt="Jaipur Icon">
										<p>Jaipur</p>
									</div>
								</div>

								<!-- Indore location dot with info -->
								<div class="location_dot dot_indore">
									<div class="location_info">
										<img src="{{ asset('/resources/assets/gallery/indore-icon1.png') }}"
											alt="Indore Icon">
										<p>Indore</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

			</div>
		</section>

		<!-- ========End Our Locations ======== -->


		<!--==============================
    In-Patient Guide Area
    ==============================-->
		<section class="content-inner-1 right-side bg-light overflow-hidden">
			<div class="container">
				<div class="row g-0 align-items-center">
					<div class="col-xl-3">
						<div class="sec-title ">
							<div class="sec-title_title "> <img
									src="{{ asset('/resources/assets/gallery/heading-top.png') }}" alt="" />
							</div>
							<h2 class="sec-title_heading mb-3">In-Patient Guide</h2>
							<p class="wow fadeInUp" data-wow-delay="0.4s" data-wow-duration="0.8s">Our In-Patient Guide
								offers
								detailed information to help you navigate your hospital stay, covering everything from
								admission
								to discharge.</p>
						</div>
					</div>
					<div class="col-xl-9">
						<div class="swiper awards-swiper wow fadeInUp" data-wow-delay="0.4s" data-wow-duration="0.8s">
							<div class="swiper-wrapper">
								<div class="swiper-slide">
									<div class="dz-img-box style-1 box-lg grid-bx text-center">
										<div class="dz-media">
											<img src="{{ asset('/resources/assets/gallery/international-patients.png') }}"
												alt="">
										</div>
										<div class="dz-content">
											<h3 class="title"><a href="">International Patients</a></h3>
										</div>
									</div>
								</div>
								<div class="swiper-slide">
									<div class="dz-img-box style-1 box-lg grid-bx text-center">
										<div class="dz-media">
											<img src="{{ asset('/resources/assets/gallery/walk-Through.png') }}" alt="">
										</div>
										<div class="dz-content">
											<h3 class="title"><a href="">Walk Through</a></h3>
										</div>
									</div>
								</div>
								<div class="swiper-slide">
									<div class="dz-img-box style-1 box-lg grid-bx text-center">
										<div class="dz-media">
											<img src="{{ asset('/resources/assets/gallery/award-symbol.png') }}" alt="">
										</div>
										<div class="dz-content">
											<h3 class="title"><a href="">Awards</a></h3>
										</div>
									</div>
								</div>
								<div class="swiper-slide">
									<div class="dz-img-box style-1 box-lg grid-bx text-center">
										<div class="dz-media">
											<img src="{{ asset('/resources/assets/gallery/career.png') }}" alt="">
										</div>
										<div class="dz-content">
											<h3 class="title"><a href="">Careers</a></h3>
										</div>
									</div>
								</div>
								<div class="swiper-slide">
									<div class="dz-img-box style-1 box-lg grid-bx text-center">
										<div class="dz-media">
											<img src="{{ asset('/resources/assets/gallery/downloads.png') }}" alt="">
										</div>
										<div class="dz-content">
											<h3 class="title"><a href="">Downloads</a></h3>
										</div>
									</div>
								</div>
								<div class="swiper-slide">
									<div class="dz-img-box style-1 box-lg grid-bx text-center">
										<div class="dz-media">
											<img src="{{ asset('/resources/assets/gallery/executive-health-scheme.png') }}"
												alt="">
										</div>
										<div class="dz-content">
											<h3 class="title"><a href="">Executive Health Scheme</a></h3>
										</div>
									</div>
								</div>
								<!-- <div class="swiper-slide">
								<div class="dz-img-box style-1 box-lg grid-bx text-center">
									<div class="dz-media">
										<img src="{{ asset('/resources/assets/gallery/college-nursing.png') }}"
											alt="">
									</div>
									<div class="dz-content">
										<h3 class="title"><a href="">College Of Nursing</a></h3>
									</div>
								</div>
							</div> -->
								<div class="swiper-slide">
									<div class="dz-img-box style-1 box-lg grid-bx text-center">
										<div class="dz-media">
											<img src="{{ asset('/resources/assets/gallery/insurance-Patients.png') }}"
												alt="">
										</div>
										<div class="dz-content">
											<h3 class="title"><a href="">TPA/Insurance Patients</a></h3>
										</div>
									</div>
								</div>
								<div class="swiper-slide">
									<div class="dz-img-box style-1 box-lg grid-bx text-center">
										<div class="dz-media">
											<img src="{{ asset('/resources/assets/gallery/corporate-Patients.png') }}"
												alt="">
										</div>
										<div class="dz-content">
											<h3 class="title"><a href="">Corporate Patients</a></h3>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- ========= -->




	</div>
</div>







@stop