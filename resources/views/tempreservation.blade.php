@extends('layouts.landing_base_layout')
@section('title', 'Pesanan')
@section('reservation', 'color')
@section('content')
	<!-- Slider
		============================================= -->
		<section id="slider" class="slider-element include-header min-vh-100" style="background: #f5f5f5 url('landing/demos/restaurant/images/sections/about-us.jpg') right center no-repeat; background-size: auto 100%;">
			<div class="slider-inner">

				<div class="vertical-middle">
					<div class="container">
						<div class="row parallax" data-0="opacity: 1;margin-top:15px" data-800="opacity: 0.1;margin-top:100px">
							<div class="col-md-6">
								<div class="heading-block border-bottom-0 mb-0">
									<h2 class="font-secondary color nott" style="font-size: 32px">Our Restaurant</h2>
								</div>
								<h2 class="font-weight-semibold mb-2" style="font-size: 42px;">The Right Ingredients<br>for the Right Food.</h2>
								<p style="color: #AAA; line-height: 1.6">Intrinsicly incubate compelling experiences rather than cross functional catalysts for change. Collaboratively morph cross-unit functionalities.</p>
							</div>
						</div>
						<div class="d-flex align-items-center mt-3 clearfix">
							<a class="button button-circle button-large text-white mb-0 ml-0">Reserve Now</a>
							<a href="https://www.youtube.com/watch?v=P3Huse9K6Xs" data-lightbox="iframe" class="d-flex float-right more-link ml-3"><i class="icon-play-sign h3 m-0 align-self-center d-none d-sm-inline-block"></i><span class=" align-self-center ml-2"><u>See Our Story</u></span></a>
						</div>
					</div>
				</div>

				<div class="video-wrap d-block d-md-none" style="position: absolute; height: 100%; z-index: 1;">
					<div class="video-overlay" style="background: rgba(255,255,255,0.8);"></div>
				</div>

			</div>
		</section>

		<!-- Content
		============================================= -->
		<section id="content">
			<div class="content-wrap pb-0" style="overflow: visible;">
				<div class="container">

					<div class="heading-block border-bottom-0 bottommargin-sm">
						<span class="font-primary ls1 color">Processes</span>
						<h3 class="nott font-secondary ls0" style="font-size: 52px; line-height: 1.3;">How We Work</h3>
					</div>

					<div class="row clearfix">
						<div class="col-lg-3 col-sm-6 bottommargin-sm">
							<div class="feature-box media-box">
								<div class="fbox-media" style="width: 50px; height: 50px;">
									<img src="{{asset('landing/demos/restaurant/images/icons/bowl.svg')}}" alt="Image">
								</div>
								<div class="fbox-content px-0">
									<h3>Food Served Hot</h3>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptas omnis nam molestias minus ipsa!</p>
								</div>
							</div>
						</div>

						<div class="col-lg-3 col-sm-6 bottommargin-sm">
							<div class="feature-box media-box">
								<div class="fbox-media" style="width: 50px; height: 50px;">
									<img src="{{asset('landing/demos/restaurant/images/icons/spoon.svg')}}" alt="Image">
								</div>
								<div class="fbox-content px-0">
									<h3>Ample Options</h3>
									<p>Facere aliquam itaque quia recusandae, corporis fugit fugiat eaque, accusamus officiis reprehenderit.</p>
								</div>
							</div>
						</div>

						<div class="col-lg-3 col-sm-6 bottommargin-sm">
							<div class="feature-box media-box">
								<div class="fbox-media" style="width: 50px; height: 50px;">
									<img src="{{asset('landing/demos/restaurant/images/icons/glass.svg')}}" alt="Image">
								</div>
								<div class="fbox-content px-0">
									<h3>In-House Brewery</h3>
									<p>Velit id facilis odit aliquid laudantium. Tempore, sequi. Harum nesciunt, magni aperiam est?</p>
								</div>
							</div>
						</div>
						<div class="col-lg-3 col-sm-6 bottommargin-sm">
							<div class="feature-box media-box">
								<div class="fbox-media" style="width: 65px; height: 50px;">
									<img src="{{asset('landing/demos/restaurant/images/icons/delivery.svg')}}" alt="Image">
								</div>
								<div class="fbox-content px-0">
									<h3>In-House Brewery</h3>
									<p>Velit id facilis odit aliquid laudantium. Tempore, sequi. Harum nesciunt, magni aperiam est?</p>
								</div>
							</div>
						</div>
					</div>

					<div class="line mt-5"></div>
				</div>

				<div class="section m-0 bg-transparent pt-0">
					<div class="d-none d-lg-block" style="background: #FFF url('landing/demos/restaurant/images/sections/3.jpg') no-repeat center center / cover; height: 100%;position: absolute; top: 0; left: 0; width: 100%"></div>
					<div class="container clearfix">

						<div class="heading-block bottommargin-sm border-bottom-0">
							<span class="font-primary ls1 color">Top Services</span>
							<h3 class="nott font-secondary ls0" style="font-size: 52px; line-height: 1.3;">What We Do</h3>
						</div>
						<div class="row clearfix">
							<div class="col-lg-6 col-md-6 col-12 imagescalein"><img src="{{asset('landing/demos/restaurant/images/sections/1.jpg')}}" alt="Image"></div>
							<div class="col-lg-4 col-md-6 col-12">
								<a class="button button-circle button-large text-white nott ls0 font-primary service-button">Our Service</a>
								<img src="{{asset('landing/demos/restaurant/images/sections/2.jpg')}}" alt="Image" class="d-none d-md-block" style="margin: 0 0 0 -80px;">
							</div>
						</div>

					</div>
				</div>

				<div class="section topmargin-sm mb-0" style="padding: 80px 0; background: #F5F5F5 url('landing/demos/restaurant/images/food-pattern.png') repeat center center;">
					<div class="container clearfix">

						<div class="heading-block center border-bottom-0">
							<span class="font-primary ls1" style="font-size: 14px; color: #AAA">Expert &amp; Skillful</span>
							<h3 class="nott font-secondary ls0" style="font-size: 60px; line-height: 1.3;">Our Chefs</h3>
						</div>

						<div class="row clearfix">

							<div class="col-lg-3 col-md-6">
								<div class="team">
									<div class="team-image imagescalein">
										<a href="#"><img src="{{asset('landing/demos/restaurant/images/chefs/1.jpg')}}" alt="John Doe"></a>
									</div>
									<div class="team-desc text-left">
										<div class="team-title">
											<h4 class="font-primary font-weight-normal ls2"><a href="#" class="text-dark">Fig Nelson</a></h4>
											<span>Chef</span>
										</div>
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rerum dolor sequi quaerat, deleniti beatae ratione.</p>
									</div>
								</div>
							</div>

							<div class="col-lg-3 col-md-6">
								<div class="team">
									<div class="team-image imagescalein">
										<img src="{{asset('landing/demos/restaurant/images/chefs/2.jpg')}}" alt="Josh Clark">
									</div>
									<div class="team-desc text-left">
										<div class="team-title">
											<h4 class="font-primary font-weight-normal ls2"><a href="#" class="text-dark">Josh Clark</a></h4>
											<span>Chef</span>
										</div>
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore eveniet magnam nam, atqu.</p>
									</div>
								</div>
							</div>

							<div class="col-lg-3 col-md-6">
								<div class="team">
									<div class="team-image imagescalein">
										<img src="{{asset('landing/demos/restaurant/images/chefs/3.jpg')}}" alt="Mary Jane">
									</div>
									<div class="team-desc text-left">
										<div class="team-title">
											<h4 class="font-primary font-weight-normal ls2"><a href="#" class="text-dark">Mary Jane</a></h4>
											<span>Manager</span>
										</div>
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perspiciatis cum minima mollitia, velit.</p>
									</div>
								</div>
							</div>

							<div class="col-lg-3 col-md-6">
								<div class="team">
									<div class="team-image imagescalein">
										<img src="{{asset('landing/demos/restaurant/images/chefs/4.jpg')}}" alt="Nix Maxwell">
									</div>
									<div class="team-desc text-left">
										<div class="team-title">
											<h4 class="font-primary font-weight-normal ls2"><a href="#" class="text-dark">Nix Maxwell</a></h4>
											<span>Staff</span>
										</div>
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere dolore ipsam nemo, similique.</p>
									</div>
								</div>
							</div>

						</div>
					</div>
				</div>

				<div class="section m-0 dark bg-color">
					<div class="container">
						<div class="row justify-content-between align-items-center">
							<div class="col-md-10">
								<h3 class="mb-0 ls0">Do You want to Contact with us. Then Don't Hesitate!</h3>
							</div>
							<div class="col-md-2">
								<a class="button button-circle button-xlarge text-dark bg-white button-light nott ls0 font-primary ml-0 mt-3 mt-md-0 ">Contact Us Here</a>
							</div>
						</div>
					</div>
				</div>

			</div>

			<div style="position: absolute; bottom: 0; left: 0; width: 100%; z-index: 3; background: url('landing/demos/restaurant/images/sketch-header-bg.png') repeat center bottom; background-size: auto 100%; height: 40px; margin-bottom: -10px;"></div>
		</section>
		
		<!-- #content end -->
@endsection