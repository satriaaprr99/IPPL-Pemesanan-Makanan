@extends('layouts.landing_base_layout')
@section('title', 'Blog')
@section('blog', 'color')
@section('content')
    <!-- Page Title
		============================================= -->
		<section id="page-title" class="page-title-parallax page-title-center border-bottom include-header" style="background-image: url('landing/demos/restaurant/images/sections/6.jpg'); background-size: 100% auto;" data-center="background-position:100% 100px;" data-top-bottom="background-position:100% -200px;">

			<div class="container clearfix">
				<span class="font-primary ls1 mb-2 color" style="font-size: 14px;">Top Services</span>
				<h1 class="font-secondary text-capitalize ls0" style="font-size: 62px;">Our Latest News</h1>
			</div>

		</section><!-- #page-title end -->

		<!-- Content
		============================================= -->
		<section id="content">
			<div class="content-wrap pb-0" style="overflow: visible;">
				<div class="container">

					<div class="row posts-md col-mb-30 mb-0">

						<div class="col-lg-4 col-sm-6">
							<div class="entry">
								<div class="entry-image">
									<a href="{{asset('landing/restaurant/images/blogs/1.jpg')}}" data-lightbox="image"><img src="{{asset('landing/demos/restaurant/images/blogs/1.jpg')}}" alt="Image 1"></a>
								</div>
								<div class="entry-title mt-0 p-4 title-xs nott">
									<div class="entry-meta mt-0 mb-2">
										<ul>
											<li><a href="#">08th Apr 2021</a></li>
											<li><a href="#">Video</a></li>
										</ul>
									</div>

									<h2 class="mb-0"><a href="#">Make Ahead Super Green Vegan Quinoa Sandwich.</a></h2>
								</div>
							</div>
						</div>

						<div class="col-lg-4 col-sm-6">
							<div class="entry">
								<div class="entry-image">
									<a href="{{asset('landing/restaurant/images/blogs/2.jpg')}}" data-lightbox="image"><img src="{{asset('landing/demos/restaurant/images/blogs/2.jpg')}}" alt="Image 2"></a>
								</div>
								<div class="entry-title mt-0 p-4 title-xs nott">
									<div class="entry-meta mt-0 mb-2">
										<ul>
											<li><a href="#">21th Mar 2021</a></li>
											<li><a href="#">Book</a></li>
										</ul>
									</div>

									<h2 class="mb-0"><a href="#">We Delivered Heart Shape Cornbread Waffles.</a></h2>
								</div>
							</div>
						</div>

						<div class="col-lg-4 col-sm-6">
							<div class="entry">
								<div class="entry-image">
									<a href="{{asset('landing/restaurant/images/blogs/3.jpg')}}" data-lightbox="image"><img src="{{asset('landing/demos/restaurant/images/blogs/3.jpg')}}" alt="Image 3"></a>
								</div>
								<div class="entry-title mt-0 p-4 title-xs nott">
									<div class="entry-meta mt-0 mb-2">
										<ul>
											<li><a href="#">10th Feb 2021</a></li>
											<li><a href="#">Recipe</a></li>
										</ul>
									</div>

									<h2 class="mb-0"><a href="#">Top Delicious Recipes from world's Best Chefs.</a></h2>
								</div>
							</div>
						</div>

						<div class="col-lg-4 col-sm-6">
							<div class="entry">
								<div class="entry-image">
									<a href="{{asset('landing/restaurant/images/blogs/4.jpg')}}" data-lightbox="image"><img src="{{asset('landing/demos/restaurant/images/blogs/4.jpg')}}" alt="Image 1"></a>
								</div>
								<div class="entry-title mt-0 p-4 title-xs nott">
									<div class="entry-meta mt-0 mb-2">
										<ul>
											<li><a href="#">08th Apr 2021</a></li>
											<li><a href="#">Video</a></li>
										</ul>
									</div>

									<h2 class="mb-0"><a href="#">Make Ahead Super Green Vegan Quinoa Sandwich.</a></h2>
								</div>
							</div>
						</div>

						<div class="col-lg-4 col-sm-6">
							<div class="entry">
								<div class="entry-image">
									<a href="{{asset('landing/restaurant/images/blogs/5.jpg')}}" data-lightbox="image"><img src="{{asset('landing/demos/restaurant/images/blogs/5.jpg')}}" alt="Image 2"></a>
								</div>
								<div class="entry-title mt-0 p-4 title-xs nott">
									<div class="entry-meta mt-0 mb-2">
										<ul>
											<li><a href="#">21th Mar 2021</a></li>
											<li><a href="#">Book</a></li>
										</ul>
									</div>

									<h2 class="mb-0"><a href="#">We Delivered Heart Shape Cornbread Waffles.</a></h2>
								</div>
							</div>
						</div>

						<div class="col-lg-4 col-sm-6">
							<div class="entry">
								<div class="entry-image">
									<a href="{{asset('landing/restaurant/images/blogs/6.jpg')}}" data-lightbox="image"><img src="{{asset('landing/demos/restaurant/images/blogs/6.jpg')}}" alt="Image 3"></a>
								</div>
								<div class="entry-title mt-0 p-4 title-xs nott">
									<div class="entry-meta mt-0 mb-2">
										<ul>
											<li><a href="#">10th Feb 2021</a></li>
											<li><a href="#">Recipe</a></li>
										</ul>
									</div>

									<h2 class="mb-0"><a href="#">Top Delicious Recipes from world's Best Chefs.</a></h2>
								</div>
							</div>
						</div>

					</div>
				</div>

				<div class="section mt-3 border-top bg-transparent py-5">
					<div class="container clearfix">
						<div class="row align-items-center">
							<div class="col-sm-6 mr-auto">
								<h4 class="mb-0 d-flex justify-content-center justify-content-sm-start"><small class="text-muted">Showing Page: <a href="#">1</a> of 8 Pages</small></h4>
							</div>
							<div class="col-sm-6">
								<ul class="pagination justify-content-center justify-content-sm-end mt-3 mt-sm-0 mb-0">
									<li class="page-item"><a class="page-link" href="#">&laquo;</a></li>
									<li class="page-item active"><a class="page-link" href="#">1</a></li>
									<li class="page-item"><a class="page-link" href="#">2</a></li>
									<li class="page-item"><a class="page-link" href="#">3</a></li>
									<li class="page-item"><a class="page-link" href="#">4</a></li>
									<li class="page-item"><a class="page-link" href="#">&raquo;</a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>

			</div>

			<div style="position: absolute; bottom: 0; left: 0; width: 100%; z-index: 3; background: url('landing/demos/restaurant/images/sketch-header.png') repeat center bottom; background-size: auto 100%; height: 40px; margin-bottom: -10px;"></div>
		</section><!-- #content end -->
@endsection