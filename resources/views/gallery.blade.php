@extends('layouts.landing_base_layout')
@section('title', 'Gallery')
@section('gallery', 'color')
@section('content')
    <!-- Slider
		============================================= -->
		<section id="slider" class="slider-element gallery-images dark min-vh-60 min-vh-md-100 include-header" style="background-image: url('landing/demos/restaurant/images/sections/food-menu.jpg'); background-size: cover">
			<div class="slider-inner">

				<div class="vertical-middle">
					<div class="container py-5">
						<div class="heading-block center border-bottom-0">
							<span class="font-primary ls1">Gallery</span>
							<h3 class="nott font-secondary ls0" style="font-size: 68px; line-height: 1.3;">See what I do</h3>
						</div>
						<div class="row justify-content-center align-items-center clearfix">

							<div class="col-sm-5 col-7 center align-self-center" data-lightbox="gallery">
								<a href="{{asset('landing/demos/restaurant/images/gallery/restaurant/1.jpg')}}" data-lightbox="gallery-item" >
									<img src="{{asset('landing/demos/restaurant/images/gallery/restaurant.jpg')}}" alt="img" width="350" class="rounded" style="border: 3px solid rgba(255,255,255,0.8);">
								</a>
								<a href="{{asset('landing/demos/restaurant/images/gallery/restaurant/2.jpg')}}" class="d-none" data-lightbox="gallery-item" ></a>
								<a href="{{asset('landing/demos/restaurant/images/gallery/restaurant/3.jpg')}}" class="d-none" data-lightbox="gallery-item" ></a>
								<a href="{{asset('landing/demos/restaurant/images/gallery/restaurant/4.jpg')}}" class="d-none" data-lightbox="gallery-item" ></a>
								<h3 class="mt-3 mb-0">Our Restaurant</h3>
							</div>

							<div class="col-sm-5 col-7 mt-5 mt-sm-0 center align-self-center" data-lightbox="gallery">
								<a href="{{asset('landing/demos/restaurant/images/gallery/food/1.jpg')}}" data-lightbox="gallery-item" >
									<img src="{{asset('landing/demos/restaurant/images/gallery/food.jpg')}}" alt="img" width="350" class="rounded" style="border: 3px solid rgba(255,255,255,0.8);">
								</a>
								<a href="{{asset('landing/demos/restaurant/images/gallery/food/2.jpg')}}" class="d-none" data-lightbox="gallery-item" ></a>
								<a href="{{asset('landing/demos/restaurant/images/gallery/food/3.jpg')}}" class="d-none" data-lightbox="gallery-item" ></a>
								<a href="{{asset('landing/demos/restaurant/images/gallery/food/4.jpg')}}" class="d-none" data-lightbox="gallery-item" ></a>
								<h3 class="mt-3 mb-0">Our Food</h3>
							</div>
						</div>
					</div>
				</div>

				<div class="video-wrap" style="position: absolute; height: 100%; z-index: 1;">
					<div class="video-overlay" style="background: rgba(0,0,0,0.3);"></div>
				</div>

			</div>
		</section>

		<!-- Content
		============================================= -->
		<section id="content">
@endsection