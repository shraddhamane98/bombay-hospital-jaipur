<!--==============================
    Mobile Menu
  ============================== -->
<div class="vs-menu-wrapper">
	<div class="vs-menu-area text-center">
		<button class="vs-menu-toggle"><i class="fas fa-times-circle"></i></button>
		<div class="mobile-logo">
			<a href=""><img src="{{ asset('/resources/assets/gallery/bombay-hospital-jaipur-t.png') }}" alt=""
					class="logo mob-logo"></a>
		</div>
		<div class="vs-mobile-menu">
			<ul>
				<li>
					<a href="{{ route('home')}}">Home</a>
				</li>
				<li class="menu-item-has-children">
					<a href="#">About Us</a>
					<ul class="sub-menu">
						<!-- <li><a href="">About Hospital</a></li> -->
						<li><a href="{{ route('founders')}}">Founders</a></li>
						<li><a href="{{ route('philosophy')}}">Philosophy</a></li>
				    <!-- <li><a href="">History</a></li>
						<li><a href="">Hospital Location</a></li>
						<li><a href="">Management Board</a></li>
						<li><a href="">Gallery</a></li> -->
					</ul>
				</li>
				<li class="menu-item-has-children">
					<a href="">Super Speciality</a>
					<ul class="sub-menu">
						<li><a href="{{ route('cardiology')}}">Cardiology</a></li>
						<!-- <li><a href="">Cardiovascular Thoracic Surgery</a></li>
						<li><a href="">Endocrinology</a></li> -->
						<li><a href="{{ route('gastroenterology')}}">Gastroenterology</a></li>
						<!-- <li><a href="">Nephrology</a></li> -->
						<li><a href="{{ route('neurology')}}">Neurology</a></li>
						<!-- <li><a href="">Oncology</a></li>
						<li><a href="">Medical Oncology</a></li> -->
						<li><a href="{{ route('surgical-oncology')}}">Surgical Oncology</a></li>
						<li><a href="{{ route('haemato-oncology')}}">Haemato-Oncology</a></li>
						<!-- <li><a href="">Paediatric Oncology</a></li> -->
						<li><a href="{{ route('radiation-oncology')}}">Radiation Oncology</a></li>
					</ul>
				</li>
				<li class="menu-item-has-children">
					<a href="">Broad Speciality</a>
					<ul class="sub-menu">
						<li><a href="{{ route('critical-care-medicine')}}">Critical Care Medicine </a></li>
						<!-- <li><a href="">Dermatology</a></li>
						<li><a href="">Diabetology</a></li> -->
						<li><a href="{{ route('ENT-&-laryngology')}}">ENT & Laryngology</a></li>
						<li><a href="{{ route('general-medicine-&-infectious-diseases')}}">General Medicine & Infectious &nbsp;&nbsp;&nbsp;
								Disease</a></li>
						<li><a href="{{ route('general-surgery')}}">General Surgery</a></li>
						<!--<li><a href="">Gynaecology & Obstetrics</a></li>
						<li><a href="">Ophthalmology</a></li>
						<li><a href="">Psychiatry</a></li> -->
						<li><a href="{{ route('pediatrics')}}">Pediatrics </a></li>
						<li><a href="{{ route('orthopaedic')}}">Orthopaedics</a></li>
						<li><a href="{{ route('spine-surgery')}}">Spine Surgery</a></li>
					</ul>
				</li>
				<li class="menu-item-has-children">
					<a href="">Diagnostics Services</a>
					<ul class="sub-menu">

						<li><a href="{{ route('pathology')}}">Pathology</a></li>

						<!-- <li class="menu-item-has-children"><a href="">Radiology</a>
							<ul class="sub-menu">
								<li><a href="">PET-CT</a></li>
								<li><a href="">MRI/CT</a></li>
								<li><a href="">USG</a></li>
								<li><a href="">DSA</a></li>
							</ul>
						</li>

						<li class="menu-item-has-children"><a href="">Others</a>
							<ul class="sub-menu">
								<li><a href="">EEG</a></li>
								<li><a href="">EMG</a></li>
								<li><a href="">Voice Clinic and Swallowing Centre</a></li>
								<li><a href="">PFT</a></li>
								<li><a href="">Urodynamic Lab</a></li>
							</ul>
						</li>

						<li class="menu-item-has-children"><a href="">Pathology</a>
							<ul class="sub-menu">
								<li><a href="">Clinical Pathology</a></li>
								<li><a href="">Biochemistry</a></li>
								<li><a href="">Haematology</a></li>
								<li><a href="">Microbiology</a></li>
								<li><a href="">Histopathology</a></li>
								<li><a href="">Molecular Lab</a></li>
								<li><a href="">Transfusion Services</a></li>
							</ul>
						</li>

						<li class="menu-item-has-children"><a href="">Non-Invasive</a>
							<ul class="sub-menu">
								<li><a href="">ECG</a></li>
								<li><a href="">Xray & Mammography</a></li>
								<li><a href="">2D Echo/ Stress Test/ Holter Monitor</a></li>
							</ul>
						</li> -->
					</ul>
				</li>

				<!-- <li class="menu-item-has-children">
					<a href="">Therapeutic Services</a>
					<ul class="sub-menu">
						<li><a href="">Artificial Kidney Unit(Dialysis)</a></li>
						<li><a href="">Audiology</a></li>
						<li><a href="">Dental Speciality</a></li>
						<li><a href="">Lithotripsy</a></li>
						<li><a href="">Nutrition Clinic</a></li>
						<li><a href="">Ozone Therapy</a></li>
						<li><a href="">Physiotherapy</a></li>
						<li><a href="">Preventive Health Check-Up (EHS)</a></li>
						<li><a href="">Radiation Therapy</a></li>
						<li><a href="">Taparia Institute Of Ophthalmology (TIO)</a></li>
						<li><a href="">Pain Management</a></li>
					</ul>
				</li> -->

				<!-- <li class="menu-item-has-children">
					<a href="#none">In-Patient Guide</a>
					<ul class="sub-menu">
						<li class="menu-item-has-children"><a href="">Admission</a>
							<ul class="sub-menu">
								<li><a href="">Emergency</a></li>
								<li><a href="">Routine</a></li>
							</ul>
						</li>
						<li><a href="">Billing</a></li>
						<li><a href="">Important Tel. Numbers</a></li>
						<li class="menu-item-has-children"><a href="">Insurance / Mediclaim</a>
							<ul class="sub-menu">
								<li><a href="">Emergency</a></li>
								<li><a href="">Routine</a></li>
							</ul>
						</li>
						<li><a href="">Meals</a></li>
						<li><a href="">Registration</a></li>
						<li><a href="">Rooms</a></li>
						<li><a href="">Visiting Hours</a></li>
						<li><a href="">Foreign Nationals / NRI</a></li>
						<li><a href="">Online Payment Gateway</a></li>
					</ul>
				</li> -->
				<li class="menu-item-has-children">
					<a href="#none">Media</a>
					<ul class="sub-menu">
						<li><a href="{{ route('newspaper')}}">Newspaper</a></li>
						<!-- <li><a href="">Videos</a></li> -->
					</ul>
				</li>
				<li>
					<a href="{{ route('spotlight')}}">Dept. Spotlight</a>
				</li>
				<li>
					<a href="{{ route('consultants')}}">Consultants</a>
				</li>
				<li class="menu-item-has-children">
					<a href="">Conferences</a>
					<ul class="sub-menu">
						<li><a href="{{ route('upcoming-conference')}}">Upcoming Conference</a></li>
						<!-- <li><a href="">Past Conference</a></li> -->
					</ul>
				</li>
				<!-- <li>
					<a href="">Health Packages</a>
				</li> -->
				<li>
					<a href="{{ route('contact')}}">Contact Us</a>
				</li>
			</ul>
		</div>
	</div>
</div>



<!--==============================
        Header Area
    ==============================-->
<header class="vs-header header-layout3 header-all">

	<div class="header-top">
		<div class="container top-nav-links">
			<div class="row align-items-center justify-content-between text-center text-lg-start">
				<div class="col-md-auto col-md-auto text-center text-md-start text-lg-start">
					<div class="header-links style-white">
						<ul>
							<li><a href=""> Stents Pricing</a></li>
							<li><a href=""> EHS</a></li>
							<!-- <li><a href=""> College of Nursing</a></li> -->
							<li><a href=""> BHIMS</a></li>
							<li><a href=""> Vacancies</a></li>
							<li><a href=""> What's New</a></li>
							<li><a href=""> Free OPD</a></li>
							<li><a href=""> Health Talks</a></li>
						</ul>
					</div>
				</div>
				<div class="col-auto d-none  d-lg-block d-xl-block">
					<div class="header-social ">
						<a href="#"><i class="fab fa-facebook-f"></i></a>
						<a href="#"><i class="fab fa-instagram"></i></a>
						<a href="#"><i class="fab fa-youtube"></i></a>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Main Menu Area -->
	<div class="sticky-wrapper">
		<div class="sticky-active">
			<div class="container-fluid nav-container">
				<div class="row align-items-center justify-content-between ">
					<div class="col-auto web-logo">
						<div class="header-logo">
							<a href=""><img src="{{ asset('/resources/assets/gallery/bombay-hospital-jaipur-t.png') }}"
									alt="" class="logo hos-logo"></a>
						</div>
					</div>

					<div class="col-auto web-tog">
						<nav class="main-menu menu-style3 d-none d-lg-block">
							<ul>
								<li>
									<a href="{{ route('home')}}">Home</a>
								</li>
								<li class="menu-item-has-children">
									<a href="#">About Us</a>
									<ul class="sub-menu">
										<!-- <li><a href="">About Hospital</a></li> -->
										<li><a href="{{ route('founders')}}">Founders</a></li>
										<li><a href="{{ route('philosophy')}}">Philosophy</a></li>
										<!-- <li><a href="">History</a></li>
										<li><a href="">Hospital Location</a></li>
										<li><a href="">Management Board</a></li>
										<li><a href="">Gallery</a></li> -->
									</ul>
								</li>

								<li class="menu-item-has-children mega-menu-wrap">
									<a href="#">Services</a>
									<ul class="mega-menu">
										<li class="b-right"><a href="" class="main-services ">Super Speciality</a>
											<ul class="ser-col2">
												<li><a href="{{ route('cardiology')}}">Cardiology</a></li>
												<!-- <li><a href="">Cardiovascular Thoracic Surgery</a></li>
												<li><a href="">Endocrinology</a></li> -->
												<li><a href="{{ route('gastroenterology')}}">Gastroenterology</a></li>
												<!-- <li><a href="">Nephrology</a></li> -->
												<li><a href="{{ route('neurology')}}">Neurology</a></li>
												<!--  -->
												<!-- <li><a href="">Oncology</a></li>
												<li><a href="">Medical Oncology</a></li>-->
												<li><a href="{{ route('surgical-oncology')}}">Surgical Oncology</a></li>
												<li><a href="haemato-oncology">Haemato-Oncology</a></li>
												<!-- <li><a href="">Paediatric Oncology</a></li> -->
												<li><a href="{{ route('radiation-oncology')}}">Radiation Oncology</a></li>
											</ul>
										</li>

										<li class="b-right"><a href="#" class="main-services ">Broad Speciality</a>
											<ul class="ser-col2">
												<li><a href="{{ route('critical-care-medicine')}}">Critical Care Medicine </a></li>
												<!-- <li><a href="">Dermatology</a></li>
												<li><a href="">Diabetology</a></li> -->
												<li><a href="{{ route('ENT-&-laryngology')}}">ENT & Laryngology</a></li>
												<li><a href="general-medicine-&-infectious-diseases">General Medicine & Infectious &nbsp;&nbsp;&nbsp;
														Disease</a></li>
												<li><a href="{{ route('general-surgery')}}">General Surgery</a></li>
												<!--<li><a href="">Gynaecology & Obstetrics</a></li>
												<li><a href="">Ophthalmology</a></li>
												<li><a href="">Psychiatry</a></li> -->
												<li><a href="{{ route('pediatrics')}}">Pediatrics</a></li>
												<li><a href="{{ route('orthopaedic')}}">Orthopaedics</a></li>
												<li><a href="{{ route('spine-surgery')}}">Spine Surgery</a></li>

											</ul>
										</li>

										<li class="p-0 m-0 two-one">
										<li><a href="#" class="main-services two-in-one">Diagnostics
												Services</a>

											<ul class="ser-col2">
												<li><a href="{{ route('pathology')}}">Pathology</a></li>

												<!-- <li><a href="" class="main-sub-services2 noicon">Radiology </a>
														</li>
														<li><a href="">PET-CT</a></li>
														<li><a href="">MRI/CT</a></li>
														<li><a href="">USG</a></li>
														<li><a href="">DSA</a></li>

														<li><a href="" class="main-sub-services2 noicon">Others</a>
														</li>
														<li><a href="">EEG</a></li>
														<li><a href="">EMG</a></li>
														<li><a href="">Voice Clinic & Swallowing Centre</a></li>
														<li><a href="">PFT</a></li>
														<li><a href="">Urodynamic Lab</a></li> -->
											</ul>
										</li>

										<!-- <li class="b-right"><a href="#"></a>
													<ul class="pt-4 mt-2">
														<li><a href=""
																class="main-sub-services2 noicon ">Pathology</a>
														</li>
														<li><a href="">Clinical Pathology</a></li>
														<li><a href="">Biochemistry</a></li>
														<li><a href="">Haematology</a></li>
														<li><a href="">Microbiology</a></li>
														<li><a href="">Histopathology</a></li>
														<li><a href="">Molecular Lab</a></li>
														<li><a href="">Transfusion Services</a></li>


														<li><a href="" class="main-sub-services2 noicon">Non-Invasive</a></li>
														<li><a href="">ECG</a></li>
														<li><a href="">Xray & Mammography</a></li>
														<li><a href="">2D Echo/ Stress Test/ Holter Monitor</a></li>
													</ul>
												</li> -->
								</li>

								<!-- <li><a href="#" class="main-services">Therapeutic Services</a>
											<ul>
												<li><a href="">Artificial Kidney Unit(Dialysis)</a></li>
												<li><a href="">Audiology</a></li>
												<li><a href="">Dental Speciality</a></li>
												<li><a href="">Lithotripsy</a></li>
												<li><a href="">Nutrition Clinic</a></li>
												<li><a href="">Ozone Therapy</a></li>
												<li><a href="">Physiotherapy</a></li>
												<li><a href="">Preventive Health Check-Up (EHS)</a></li>
												<li><a href="">Radiation Therapy</a></li>
												<li><a href="">Taparia Institute Of Ophthalmology (TIO)</a></li>
												<li><a href="">Pain Management</a></li>
											</ul>
										</li> -->

							</ul>
							</li>

							<!-- <li class="menu-item-has-children">
								<a href="">In-Patient Guide</a>
								<ul class="sub-menu">
									<li class="menu-item-has-children"><a href="">Admission</a>
										<ul class="sub-menu">
											<li><a href="">Emergency</a></li>
											<li><a href="">Routine</a></li>
										</ul>
									</li>
									<li><a href="">Billing</a></li>
									<li><a href="">Important Tel. Numbers</a></li>
									<li class="menu-item-has-children"><a href="">Insurance / Mediclaim</a>
										<ul class="sub-menu">
											<li><a href="">Emergency</a></li>
											<li><a href="">Routine</a></li>
										</ul>
									</li>
									<li><a href="">Meals</a></li>
									<li><a href="">Registration</a></li>
									<li><a href="">Rooms</a></li>
									<li><a href="">Visiting Hours</a></li>
									<li><a href="">Foreign Nationals / NRI</a></li>
									<li><a href="">Online Payment Gateway</a></li>
								</ul>
							</li> -->


							<li class="menu-item-has-children">
								<a href="">Media</a>
								<ul class="sub-menu">
								     <li><a href="{{ route('newspaper')}}">Newspaper</a></li>
									<!-- <li><a href="">Videos</a></li> -->
								</ul>
							</li>

							<li>
								<a href="{{ route('spotlight')}}">Dept. Spotlight</a>
							</li>
							<li>
								<a href="{{ route('consultants')}}">Consultants</a>
							</li>
							<li class="menu-item-has-children">
								<a href="">Conferences</a>
								<ul class="sub-menu">
									<li><a href="{{ route('upcoming-conference')}}">Upcoming Conference</a></li>
									<!-- <li><a href="">Past Conference</a></li> -->
								</ul>
							</li>
							<!-- <li>
								<a href="">Health Packages</a>
							</li> -->
							<li>
								<a href="{{ route('contact')}}">Contact</a>
							</li>
							</ul>
						</nav>
						<button class="vs-menu-toggle d-inline-block d-lg-none text-md-end"><i
								class="fas fa-bars"></i></button>
					</div>

					<!-- <div class="col-auto d-none d-lg-block">
						<div class="header-btns">
							<a href="#" class="vs-btn d-none d-xxl-inline-block">Contact Us<i
									class="far fa-arrow-right"></i></a>
							<button class="icon-btn style3 sideMenuToggler"><i class="fas fa-bars"></i></button>
						</div>
					</div> -->

				</div>
			</div>
		</div>
	</div>
</header>