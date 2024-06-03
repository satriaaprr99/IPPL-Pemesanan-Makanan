@extends('layouts.landing_base_layout')
@section('title', 'Beranda')
@section('home', 'color')
@section('content')
		<!-- Slider
		============================================= -->
		<section id="slider" class="slider-element swiper_wrapper min-vh-60 min-vh-md-100 include-header" data-effect="fade" data-loop="true" data-autoplay="6000" data-speed="1400">
			<div class="slider-inner">

				<div class="swiper-container swiper-parent">
					<div class="swiper-wrapper">
						<div class="swiper-slide">
							<div class="container dark">
								<div class="slider-caption">
									<div>
										<h2 class="font-secondary ls0 font-weight-normal nott" data-animate="fadeIn">Gurih asal Bandung.</h2>
										<p class="d-none d-sm-block font-primary" data-animate="fadeIn" data-delay="400">Apabila tersedia Pizza dan WiFi, apa gunanya pacar?</p>
										<div class="static-content" style="position: relative; display: flex; justify-content: flex-start; flex-direction: row; margin-top: 30px" data-animate="fadeIn" data-delay="800">
											<img src="{{asset('landing/demos/restaurant/images/icons/bowl-white.svg')}}" width="42" height="42" alt="Image">
											<img class="leftmargin-sm" src="{{asset('landing/demos/restaurant/images/icons/spoon-white.svg')}}" width="42" height="42" alt="Image">
											<img class="leftmargin-sm" src="{{asset('landing/demos/restaurant/images/icons/glass-white.svg')}}" width="42" height="42" alt="Image">
											<img class="leftmargin-sm" src="{{asset('landing/demos/restaurant/images/icons/wifi-white.svg')}}" width="42" height="42" alt="Image">
										</div>
									</div>
								</div>
							</div>
							<div class="swiper-slide-bg" style="background-image: url('../landing/demos/restaurant/images/slider/1.jpg');"></div>
						</div>

						<div class="swiper-slide">
							<div class="container dark">
								<div class="slider-caption slider-caption-center" style="margin-top: -30px;">
									<div>
										<img data-animate="fadeIn" src="{{asset('landing/demos/restaurant/images/slider-logo.png')}}" alt="Image" style="width: 120px; margin-bottom: 10px;">
										<h2 class="font-secondary ls0 font-weight-normal nott" data-animate="fadeIn" data-delay="400">Aneka Ragam Kecoklatan</h2>
										<p class="d-none d-sm-block font-primary" data-animate="fadeIn" data-delay="800">Kamu akan terkejut dengan rasa coklat yang ada disini</p>
										<div class="static-content" style="position: relative; display: flex; justify-content: center; flex-direction: row; margin-top: 30px" data-animate="fadeIn" data-delay="1000">
											<img src="{{asset('landing/demos/restaurant/images/icons/bowl-white.svg')}}" width="42" height="42" alt="Image">
											<img class="leftmargin-sm" src="{{asset('landing/demos/restaurant/images/icons/spoon-white.svg')}}" width="42" height="42" alt="Image">
											<img class="leftmargin-sm" src="{{asset('landing/demos/restaurant/images/icons/glass-white.svg')}}" width="42" height="42" alt="Image">
										</div>
									</div>
								</div>
							</div>
							<div class="swiper-slide-bg" style="background-image: url('../landing/demos/restaurant/images/slider/3.jpg');"></div>
						</div>

						<div class="swiper-slide">
							<div class="container dark">
								<div class="slider-caption slider-caption-right">
									<div>
										<h2 class="font-secondary ls0 font-weight-normal nott" data-animate="fadeIn">Hello & Welcome.</h2>
										<p class="d-none d-sm-block font-primary" data-animate="fadeIn" data-delay="400">Selamat datang bagi pelanggan kami yang berbahagia.</p>
									</div>
								</div>
							</div>
							<div class="swiper-slide-bg" style="background-image: url('../landing/demos/restaurant/images/slider/2.jpg'); background-position: center bottom;"></div>
						</div>
					</div>

					<div class="slider-arrow-left"><i class="icon-angle-left"></i></div>
					<div class="slider-arrow-right"><i class="icon-angle-right"></i></div>

				</div>

			</div>
		</section>
		<!-- Content
		============================================= -->
		<section id="content">

			<div style="position: absolute; top: 0; left: 0; width: 100%; z-index: 3; background: url('landing/demos/restaurant/images/sketch.png') repeat center bottom; background-size: auto 100%; height: 40px; margin-top: -40px;"></div>

			<div class="content-wrap" style="overflow: visible;">

				<div class="section m-0 clearfix" style="padding: 40px 0; background: url('..{{Storage::url(@$data->bg_section_1)}}') center center no-repeat; background-size: 100% auto">
					<div class="container">

						<div class="heading-block border-bottom-0 bottommargin-sm">
							<h2 class="font-secondary color nott" style="font-size: 52px;">{{@$data->title1}}</h2>
						</div>

						<div class="row col-mb-50">
							<div class="col-lg-3">
								<div class="feature-box media-box" style="max-width: 400px;">
									<div class="fbox-media" style="width: 70px; height: auto;">
										<img src="{{Storage::url(@$data->gambar1_t1)}}" alt="Image">
									</div>
									<div class="fbox-content px-0">
										<h3>{{@$data->judul1_t1}}</h3>
										<!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptas omnis nam molestias minus ipsa, placeat!</p> -->
										<p>{{@$data->content1_t1}}</p>
									</div>
								</div>
							</div>

							<div class="col-lg-3">
								<div class="feature-box media-box" style="max-width: 400px;">
									<div class="fbox-media" style="width: 70px; height: auto;">
										<img src="{{Storage::url(@$data->gambar2_t1)}}" alt="Image">
									</div>
									<div class="fbox-content px-0">
										<h3>{{@$data->judul2_t1}}</h3>
										<!-- <p>Facere aliquam itaque quia recusandae, corporis fugit fugiat eaque, accusamus officiis reprehenderit.</p> -->
										<p>{{@$data->content2_t1}}</p>
									</div>
								</div>
							</div>

							<div class="col-lg-3">
								<div class="feature-box media-box" style="max-width: 400px;">
									<div class="fbox-media" style="width: 70px; height: auto;">
										<img src="{{Storage::url(@$data->gambar3_t1)}}" alt="Image">
									</div>
									<div class="fbox-content px-0">
										<h3>{{@$data->judul3_t1}}</h3>
										<p>{{@$data->content3_t1}}</p>
									</div>
								</div>
							</div>
						</div>

					</div>
				</div>

				<div class="section mb-0" style="background: #FFF url('..{{Storage::url(@$data->bg_section_2)}}') no-repeat top left / cover; padding: 60px 0; border-top: 1px solid #EEE;">
					<div class="container clearfix">
						<div class="heading-block center mb-0 border-bottom-0">
							<span class="font-primary" style="font-size: 16px; color: #888">{{@$data->title2}}</span>
							<h3 class="nott font-secondary ls0" style="font-size: 60px;">{{@$data->subtitle2}}</h3>
						</div>
					</div>
				</div>

				<div class="section food-menu mt-0 p-0">
					<div class="container-fluid">
						<div class="row align-items-stretch clearfix">
							<div class="col-lg-7 clearfix">
								<div class="vertical-middle">
									<div class="col-padding clearfix">
										<div><div id="item-thumb" class="item-thumb"></div></div>
									</div>
								</div>
							</div>
							<div class="col-lg-5" style="background-color: #FFF; padding: 0; box-shadow: -4px 1px 15px 3px rgba(0,0,0,0.07);">
								<div id="food-menu-carousel" class="menu-carousel owl-carousel image-carousel food-menu-carousel carousel-widget customjs">

									<div class="oc-item">
										<img class="topmargin-sm" src="{{asset('landing/demos/restaurant/images/items/food/1.jpg')}}" alt="Image 1">
										<div class="food-content clearfix">
											<div class="d-flex flex-column flex-sm-row justify-content-sm-between mb-4">
												<div class="heading-block border-bottom-0 mb-0">
													<h3 class="font-secondary nott">Multigrain Toast.</h3>
													<div class="food-info">Corn, Bacon, Tomato, Cheese, Onlion</div>
												</div>
												<div class="food-price color font-primary mt-3">&dollar;19.99</div>
											</div>
											<p class="mb-0">Efficiently syndicate cross functional web-readiness before business niches. Uniquely reinvent ethical testing procedures before ethical leadership skills.<br><br>Credibly maximize orthogonal e-services and technically sound communities. Seamlessly procrastinate holistic partnerships. Distinctively disseminate stand-alone process improvements after efficient total linkage. Efficiently syndicate.</p>
											<a href="demos/restaurant/menu.html" class="more-link">See More Details <i class="icon-line-arrow-right"></i></a>
										</div>
									</div>
									<div class="oc-item">
										<img class="topmargin-sm" src="{{asset('landing/demos/restaurant/images/items/food/2.jpg')}}" alt="Image 2">
										<div class="food-content clearfix">
											<div class="d-flex flex-column flex-sm-row justify-content-sm-between mb-4">
												<div class="heading-block border-bottom-0 mb-0">
													<h3 class="font-secondary nott">Prawn Mussels Plate.</h3>
													<div class="food-info">Prawn, Tomato, Noodles</div>
												</div>
												<div class="food-price color font-primary mt-3">&dollar;11.59</div>
											</div>
											<p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quisquam eveniet cum explicabo iure quasi impedit commodi nobis doloremque quas consequuntur!<br><br>Credibly maximize orthogonal e-services and technically sound communities. Seamlessly procrastinate holistic partnerships. Distinctively disseminate stand-alone process improvements after efficient total linkage. Efficiently syndicate.</p>
											<a href="demos/restaurant/menu.html" class="more-link">See More Details <i class="icon-line-arrow-right"></i></a>
										</div>
									</div>
									<div class="oc-item">
										<img class="topmargin-sm" src="{{asset('landing/demos/restaurant/images/items/food/3.jpg')}}" alt="Image 3">
										<div class="food-content clearfix">
											<div class="d-flex flex-column flex-sm-row justify-content-sm-between mb-4">
												<div class="heading-block border-bottom-0 mb-0">
													<h3 class="font-secondary nott">Black Jumbo Burger.</h3>
													<div class="food-info">Chicken Patty, Bean Bread</div>
												</div>
												<div class="food-price color font-primary mt-3">&dollar;8.99</div>
											</div>
											<p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quisquam eveniet cum explicabo iure quasi impedit commodi nobis doloremque quas consequuntur!<br><br>Credibly maximize orthogonal e-services and technically sound communities. Seamlessly procrastinate holistic partnerships. Distinctively disseminate stand-alone process improvements after efficient total linkage. Efficiently syndicate.</p>
											<a href="demos/restaurant/menu.html" class="more-link">See More Details <i class="icon-line-arrow-right"></i></a>
										</div>
									</div>
									<div class="oc-item">
										<img class="topmargin-sm" src="{{asset('landing/demos/restaurant/images/items/food/4.jpg')}}" alt="Image 4">
										<div class="food-content clearfix">
											<div class="d-flex flex-column flex-sm-row justify-content-sm-between mb-4">
												<div class="heading-block border-bottom-0 mb-0">
													<h3 class="font-secondary nott">Fried Chicken.</h3>
													<div class="food-info">Chicken, Olive Oil</div>
												</div>
												<div class="food-price color font-primary mt-3">&dollar;22.99</div>
											</div>
											<p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quisquam eveniet cum explicabo iure quasi impedit commodi nobis doloremque quas consequuntur!<br><br>Credibly maximize orthogonal e-services and technically sound communities. Seamlessly procrastinate holistic partnerships. Distinctively disseminate stand-alone process improvements after efficient total linkage. Efficiently syndicate.</p>
											<a href="demos/restaurant/menu.html" class="more-link">See More Details <i class="icon-line-arrow-right"></i></a>
										</div>
									</div>
									<div class="oc-item">
										<img class="topmargin-sm" src="{{asset('landing/demos/restaurant/images/items/food/5.jpg')}}" alt="Image 1">
										<div class="food-content clearfix">
											<div class="d-flex flex-column flex-sm-row justify-content-sm-between mb-4">
												<div class="heading-block border-bottom-0 mb-0">
													<h3 class="font-secondary nott">Smoothie Fruit Bowl.</h3>
													<div class="food-info">Raspberries, Strawberries, Granola, Banana</div>
												</div>
												<div class="food-price color font-primary mt-3">&dollar;19.99</div>
											</div>
											<p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quisquam eveniet cum explicabo iure quasi impedit commodi nobis doloremque quas consequuntur. Holistic partnerships. Distinctively disseminate stand-alone process improvements after efficient total linkage. Efficiently syndicate.</p>
											<a href="demos/restaurant/menu.html" class="more-link">See More Details <i class="icon-line-arrow-right"></i></a>
										</div>
									</div>
									<div class="oc-item">
										<img class="topmargin-sm" src="{{asset('landing/demos/restaurant/images/items/food/6.jpg')}}" alt="Image 2">
										<div class="food-content clearfix">
											<div class="d-flex flex-column flex-sm-row justify-content-sm-between mb-4">
												<div class="heading-block border-bottom-0 mb-0">
													<h3 class="font-secondary nott">Margarita Pizza.</h3>
													<div class="food-info">Wheat Flour, Cheese, Tomato, Onion</div>
												</div>
												<div class="food-price color font-primary mt-3">&dollar;14.99</div>
											</div>
											<p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quisquam eveniet cum explicabo iure quasi impedit commodi nobis doloremque quas consequuntur!<br><br>Credibly maximize orthogonal e-services and technically sound communities. Seamlessly procrastinate holistic partnerships. Distinctively disseminate stand-alone process improvements after efficient total linkage. Efficiently syndicate.</p>
											<div class="food-price color font-primary mt-3">&dollar;14.99</div>
											<a href="demos/restaurant/menu.html" class="more-link">See More Details <i class="icon-line-arrow-right"></i></a>
										</div>
									</div>
									<div class="oc-item">
										<img class="topmargin-sm" src="{{asset('landing/demos/restaurant/images/items/food/7.jpg')}}" alt="Image 3">
										<div class="food-content clearfix">
											<div class="d-flex flex-column flex-sm-row justify-content-sm-between mb-4">
												<div class="heading-block border-bottom-0 mb-0">
													<h3 class="font-secondary nott">Macaroni Pasta.</h3>
												</div>
												<div class="food-price color font-primary mt-3">&dollar;11.99</div>
											</div>
											<p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quisquam eveniet cum explicabo iure quasi impedit commodi nobis doloremque quas consequuntur!<br><br>Credibly maximize orthogonal e-services and technically sound communities. Seamlessly procrastinate holistic partnerships. Distinctively disseminate stand-alone process improvements after efficient total linkage. Efficiently syndicate.</p>
											<a href="demos/restaurant/menu.html" class="more-link">See More Details <i class="icon-line-arrow-right"></i></a>
										</div>
									</div>
									<div class="oc-item">
										<img class="topmargin-sm" src="{{asset('landing/demos/restaurant/images/items/food/8.jpg')}}" alt="Image 4">
										<div class="food-content clearfix">
											<div class="d-flex flex-column flex-sm-row justify-content-sm-between mb-4">
												<div class="heading-block border-bottom-0 mb-0">
													<h3 class="font-secondary nott">Chicken with Fries.</h3>
													<div class="food-info">Chicken, Potatoes, Broccolies</div>
												</div>
												<div class="food-price color font-primary mt-3">&dollar;33.99</div>
											</div>
											<p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quisquam eveniet cum explicabo iure quasi impedit commodi nobis doloremque quas consequuntur!<br><br>Credibly maximize orthogonal e-services and technically sound communities. Seamlessly procrastinate holistic partnerships. Distinctively disseminate stand-alone process improvements after efficient total linkage. Efficiently syndicate.</p>
											<a href="demos/restaurant/menu.html" class="more-link">See More Details <i class="icon-line-arrow-right"></i></a>
										</div>
									</div>
									<div class="oc-item">
										<img class="topmargin-sm" src="{{asset('landing/demos/restaurant/images/items/food/9.jpg')}}" alt="Image 4">
										<div class="food-content clearfix">
											<div class="d-flex flex-column flex-sm-row justify-content-sm-between mb-4">
												<div class="heading-block border-bottom-0 mb-0">
													<h3 class="font-secondary nott">Chinese Noodle.</h3>
													<div class="food-info">Noodles, Cornflower, Prawn</div>
												</div>
												<div class="food-price color font-primary mt-3">&dollar;7.99</div>
											</div>
											<p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quisquam eveniet cum explicabo iure quasi impedit commodi nobis doloremque quas consequuntur!<br><br>Credibly maximize orthogonal e-services and technically sound communities. Seamlessly procrastinate holistic partnerships. Distinctively disseminate stand-alone process improvements after efficient total linkage. Efficiently syndicate.</p>
											<a href="demos/restaurant/menu.html" class="more-link">See More Details <i class="icon-line-arrow-right"></i></a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="section mb-0 bg-transparent">
					<div class="container">

						<div class="row col-mb-50">
							<div class="col-sm-6 col-lg-4">
								<div class="feature-box media-box">
									<div class="fbox-media">
										<a href="demos/restaurant/reservation.html" ><img style="border-radius: 2px;" src="{{Storage::url(@$data->gambar1_t3)}}" alt="Why choose Us?"></a>
									</div>
									<div class="fbox-content px-0">
										<h3>{{@$data->judul1_t3}}
											<!-- <span class="subtitle ls1" style="color:#BBB">Food Tastes Better when you are in Good Location.</span> -->
											<span class="subtitle ls1" style="color:#BBB">{{@$data->subtitle1_t3}}</span>
										</h3>
										<!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi rem, facilis nobis voluptatum est voluptatem accusamus eaque perspiciatis mollitia.</p> -->
										<p>{{@$data->caption1_t3}}</p>
									</div>
								</div>
							</div>

							<div class="col-sm-6 col-lg-4">
								<div class="feature-box media-box">
									<div class="fbox-media">
										<a href="demos/restaurant/gallery.html" ><img style="border-radius: 2px;" src="{{Storage::url(@$data->gambar2_t3)}}" alt="Effective Planning"></a>
									</div>
									<div class="fbox-content px-0">
										<h3>{{@$data->judul2_t3}}<span class="subtitle ls1" style="color:#BBB">{{@$data->subtitle2_t3}}</span></h3>
										<p>{{@$data->caption2_t3}}</p>
									</div>
								</div>
							</div>

							<div class="col-sm-6 col-lg-4">
								<div class="feature-box media-box">
									<div class="fbox-media">
										<a href="demos/restaurant/about-us.html" ><img style="border-radius: 2px;" src="{{Storage::url(@$data->gambar3_t3)}}" alt="Why choose Us?"></a>
									</div>
									<div class="fbox-content px-0">
										<h3>{{@$data->judul3_t3}}<span class="subtitle ls1" style="color:#BBB">{{@$data->subtitle3_t3}}</span></h3>
										<p>{{@$data->caption3_t3}}</p>
									</div>
								</div>
							</div>
						</div>

					</div>
				</div>

				<div class="section mb-0" style="background: #fee749 url('..{{Storage::url(@$data->bg_section_4)}}') no-repeat center right; background-size: cover; padding: 60px 0;">
					<div class="heading-block center mb-0 border-bottom-0">
						<span class="font-primary ls1" style="font-size: 14px; color: #AAA">{{@$data->title4}}</span>
						<h3 class="nott font-secondary ls0" style="font-size: 60px;line-height: 1.3;">{{@$data->subtitle4}}</h3>
					</div>
				</div>

				<div class="section dessert-menu m-0 p-0">
					<div class="container-fluid">

						<div class="row align-items-stretch clearfix">
							<div class="col-lg-5" style="background-color: #FFF; padding: 0; box-shadow: -4px 1px 15px 3px rgba(0,0,0,0.07);">
								<div id="dessert-menu-carousel" class="menu-carousel owl-carousel image-carousel carousel-widget customjs">

									<div class="oc-item">
										<img class="topmargin-sm" src="{{asset('landing/demos/restaurant/images/items/desserts/1.jpg')}}" alt="Image 1">
										<div class="food-content clearfix">
											<div class="d-flex flex-column flex-sm-row justify-content-sm-between mb-4">
												<div class="heading-block border-bottom-0 mb-0">
													<h3 class="font-secondary nott">Chocolate Cupcakes.</h3>
												<div class="food-info">Chocolate, Caramel, Hazelnut, Coffee, Strawberry</div>
												</div>
												<div class="food-price color font-primary mt-3">&dollar;19.99</div>
											</div>
											<p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quisquam eveniet cum explicabo iure quasi impedit commodi nobis doloremque quas consequuntur!<br><br>Credibly maximize orthogonal e-services and technically sound communities. Seamlessly procrastinate holistic partnerships. Distinctively disseminate stand-alone process improvements after efficient total linkage. Efficiently syndicate.</p>
											<a href="demos/restaurant/menu.html" class="more-link">See More Details <i class="icon-line-arrow-right"></i></a>
										</div>
									</div>
									<div class="oc-item">
										<img class="topmargin-sm" src="{{asset('landing/demos/restaurant/images/items/desserts/2.jpg')}}" alt="Image 2">
										<div class="food-content clearfix">
											<div class="d-flex flex-column flex-sm-row justify-content-sm-between mb-4">
												<div class="heading-block border-bottom-0 mb-0">
													<h3 class="font-secondary nott">Caramel Cake.</h3>
												<div class="food-info">Egg, Caramel</div>
												</div>
												<div class="food-price color font-primary mt-3">&dollar;11.59</div>
											</div>
											<p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quisquam eveniet cum explicabo iure quasi impedit commodi nobis doloremque quas consequuntur!<br><br>Credibly maximize orthogonal e-services and technically sound communities. Seamlessly procrastinate holistic partnerships. Distinctively disseminate stand-alone process improvements after efficient total linkage. Efficiently syndicate.</p>
											<a href="demos/restaurant/menu.html" class="more-link">See More Details <i class="icon-line-arrow-right"></i></a>
										</div>
									</div>
									<div class="oc-item">
										<img class="topmargin-sm" src="{{asset('landing/demos/restaurant/images/items/desserts/3.jpg')}}" alt="Image 3">
										<div class="food-content clearfix">
											<div class="d-flex flex-column flex-sm-row justify-content-sm-between mb-4">
												<div class="heading-block border-bottom-0 mb-0">
													<h3 class="font-secondary nott">Choco Strawberry Waffle.</h3>
													<div class="food-info">Strawberry, Chocolate Syrup, Vanilla Icecream</div>
												</div>
												<div class="food-price color font-primary mt-3">&dollar;8.99</div>
											</div>
											<p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quisquam eveniet cum explicabo iure quasi impedit commodi nobis doloremque quas consequuntur!<br><br>Credibly maximize orthogonal e-services and technically sound communities. Seamlessly procrastinate holistic partnerships. Distinctively disseminate stand-alone process improvements after efficient total linkage. Efficiently syndicate.</p>
											<a href="demos/restaurant/menu.html" class="more-link">See More Details <i class="icon-line-arrow-right"></i></a>
										</div>
									</div>
									<div class="oc-item">
										<img class="topmargin-sm" src="{{asset('landing/demos/restaurant/images/items/desserts/4.jpg')}}" alt="Image 4">
										<div class="food-content clearfix">
											<div class="d-flex flex-column flex-sm-row justify-content-sm-between mb-4">
												<div class="heading-block border-bottom-0 mb-0">
													<h3 class="font-secondary nott">Tuffle Cake.</h3>
												</div>
												<div class="food-price color font-primary mt-3">&dollar;22.99</div>
											</div>
											<p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quisquam eveniet cum explicabo iure quasi impedit commodi nobis doloremque quas consequuntur!<br><br>Credibly maximize orthogonal e-services and technically sound communities. Seamlessly procrastinate holistic partnerships. Distinctively disseminate stand-alone process improvements after efficient total linkage. Efficiently syndicate.</p>
											<a href="demos/restaurant/menu.html" class="more-link">See More Details <i class="icon-line-arrow-right"></i></a>
										</div>
									</div>
									<div class="oc-item">
										<img class="topmargin-sm" src="{{asset('landing/demos/restaurant/images/items/desserts/5.jpg')}}" alt="Image 1">
										<div class="food-content clearfix">
											<div class="d-flex flex-column flex-sm-row justify-content-sm-between mb-4">
												<div class="heading-block border-bottom-0 mb-0">
													<h3 class="font-secondary nott">Chocolate Croissant.</h3>
													<div class="food-info">Chocolate Syrup</div>
												</div>
												<div class="food-price color font-primary mt-3">&dollar;19.99</div>
											</div>
											<p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quisquam eveniet cum explicabo iure quasi impedit commodi nobis doloremque quas consequuntur. Holistic partnerships. Distinctively disseminate stand-alone process improvements after efficient total linkage. Efficiently syndicate.</p>
											<a href="demos/restaurant/menu.html" class="more-link">See More Details <i class="icon-line-arrow-right"></i></a>
										</div>
									</div>
									<div class="oc-item">
										<img class="topmargin-sm" src="{{asset('landing/demos/restaurant/images/items/desserts/6.jpg')}}" alt="Image 2">
										<div class="food-content clearfix">
											<div class="d-flex flex-column flex-sm-row justify-content-sm-between mb-4">
												<div class="heading-block border-bottom-0 mb-0">
													<h3 class="font-secondary nott">Delicious Cookies.</h3>
												</div>
												<div class="food-price color font-primary mt-3">&dollar;14.99</div>
											</div>
											<p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quisquam eveniet cum explicabo iure quasi impedit commodi nobis doloremque quas consequuntur!<br><br>Credibly maximize orthogonal e-services and technically sound communities. Seamlessly procrastinate holistic partnerships. Distinctively disseminate stand-alone process improvements after efficient total linkage. Efficiently syndicate.</p>
											<a href="demos/restaurant/menu.html" class="more-link">See More Details <i class="icon-line-arrow-right"></i></a>
										</div>
									</div>
									<div class="oc-item">
										<img class="topmargin-sm" src="{{asset('landing/demos/restaurant/images/items/desserts/7.jpg')}}" alt="Image 3">
										<div class="food-content clearfix">
											<div class="d-flex flex-column flex-sm-row justify-content-sm-between mb-4">
												<div class="heading-block border-bottom-0 mb-0">
													<h3 class="font-secondary nott">Strawberry Pastry.</h3>
												</div>
												<div class="food-price color font-primary mt-3">&dollar;11.99</div>
											</div>
											<p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quisquam eveniet cum explicabo iure quasi impedit commodi nobis doloremque quas consequuntur!<br><br>Credibly maximize orthogonal e-services and technically sound communities. Seamlessly procrastinate holistic partnerships. Distinctively disseminate stand-alone process improvements after efficient total linkage. Efficiently syndicate.</p>
											<a href="demos/restaurant/menu.html" class="more-link">See More Details <i class="icon-line-arrow-right"></i></a>
										</div>
									</div>
									<div class="oc-item">
										<img class="topmargin-sm" src="{{asset('landing/demos/restaurant/images/items/desserts/8.jpg')}}" alt="Image 4">
										<div class="food-content clearfix">
											<div class="d-flex flex-column flex-sm-row justify-content-sm-between mb-4">
												<div class="heading-block border-bottom-0 mb-0">
													<h3 class="font-secondary nott">Fruity Bowl.</h3>
													<div class="food-info">Fruits, Yogurt, Strawberries, Banana, Cherries</div>
												</div>
												<div class="food-price color font-primary mt-3">&dollar;33.99</div>
											</div>
											<p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quisquam eveniet cum explicabo iure quasi impedit commodi nobis doloremque quas consequuntur!<br><br>Credibly maximize orthogonal e-services and technically sound communities. Seamlessly procrastinate holistic partnerships. Distinctively disseminate stand-alone process improvements after efficient total linkage. Efficiently syndicate.</p>
											<a href="demos/restaurant/menu.html" class="more-link">See More Details <i class="icon-line-arrow-right"></i></a>
										</div>
									</div>
									<div class="oc-item">
										<img class="topmargin-sm" src="{{asset('landing/demos/restaurant/images/items/desserts/9.jpg')}}" alt="Image 4">
										<div class="food-content clearfix">
											<div class="d-flex flex-column flex-sm-row justify-content-sm-between mb-4">
												<div class="heading-block border-bottom-0 mb-0">
													<h3 class="font-secondary nott">Jelly Cake.</h3>
												</div>
												<div class="food-price color font-primary mt-3">&dollar;7.99</div>
											</div>
											<p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quisquam eveniet cum explicabo iure quasi impedit commodi nobis doloremque quas consequuntur!<br><br>Credibly maximize orthogonal e-services and technically sound communities. Seamlessly procrastinate holistic partnerships. Distinctively disseminate stand-alone process improvements after efficient total linkage. Efficiently syndicate.</p>
											<a href="demos/restaurant/menu.html" class="more-link">See More Details <i class="icon-line-arrow-right"></i></a>
										</div>
									</div>
								</div>
							</div>

							<div class="col-lg-7 clearfix">
								<div class="vertical-middle">
									<div class="col-padding clearfix">
										<div><div id="item-thumb1" class="item-thumb"></div></div>
										<div class="center mx-auto"><a class="button button-border button-small button-black button-dark button-circle ml-0" style="margin-top: 0px;">See All Menu</a></div>
									</div>
								</div>
							</div>
						</div>

					</div>
				</div>

				<div class="line clear"></div>

				<div class="container section-contact topmargin-lg clearfix">
					<div class="row clearfix">

						<div class="col-lg-4 col-md-6 bottommargin-sm center">
							<i class="i-plain i-xlarge mx-auto mb-0 icon-et-map"></i>
							<h3 class="text-uppercase font-body" style="font-size: 22px; font-weight: 700;margin-top: 20px">Contact</h3>
							<span class="font-primary">{{@$data->caption_f_1}}<br>{{@$data->caption_f_2}}</span>
						</div>

						<div class="col-lg-4 col-md-6 bottommargin-sm center">
							<i class="i-plain i-xlarge mx-auto mb-0 icon-et-clock"></i>
							<h3 class="text-uppercase font-body" style="font-size: 22px; font-weight: 700;margin-top: 20px">Opening Time</h3>
							<span class="font-primary">{{@$data->caption_f_3}}<br>
							{{@$data->caption_f_4}}</span>
						</div>

						<div class="col-lg-4 col-md-6 bottommargin-sm center">
							<i class="i-plain i-xlarge mx-auto mb-0 icon-et-heart"></i>
							<h3 class="text-uppercase font-body" style="font-size: 22px; font-weight: 700;margin-top: 20px">Social Contact</h3>
							<div style="display: flex; justify-content: center">
								<a href="#" class="social-icon si-borderless si-facebook">
									<i class="icon-line2-social-facebook"></i>
									<i class="icon-line2-social-facebook"></i>
								</a>
								<a href="#" class="social-icon si-borderless si-twitter">
									<i class="icon-line2-social-twitter"></i>
									<i class="icon-line2-social-twitter"></i>
								</a>
								<a href="#" class="social-icon si-borderless si-youtube">
									<i class="icon-line2-social-youtube"></i>
									<i class="icon-line2-social-youtube"></i>
								</a>
								<a href="#" class="social-icon si-borderless si-email3">
									<i class="icon-line2-envelope"></i>
									<i class="icon-line2-envelope"></i>
								</a>
							</div>
						</div>

					</div>
				</div>

			</div>

			<div style="position: absolute; bottom: 0; left: 0; width: 100%; z-index: 3; background: url('landing/demos/restaurant/images/sketch-header.png') repeat center bottom; background-size: auto 100%; height: 40px; margin-bottom: -10px;"></div>
		</section><!-- #content end -->
@endsection
@push('js')
	<!-- Custom Carousel JS File -->
	<script>
		
		
		var carouselRTL = false;
		
		if( $('body').hasClass('rtl') ) { carouselRTL = true; }
		
		$(window).on( 'pluginCarouselReady', function(){
			$('#food-menu-carousel').owlCarousel({
				animateIn: 'fadeIn',
				animateOut: 'fadeOut',
				items: 1,
				mouseDrag: false,
				dotsContainer: '#item-thumb',
				rtl: carouselRTL
			});
			
			$('#dessert-menu-carousel').owlCarousel({
				animateIn: 'fadeIn',
				animateOut: 'fadeOut',
				items: 1,
				mouseDrag: false,
				dotsContainer: '#item-thumb1',
				rtl: carouselRTL
			});
		});
		
		var input = document.querySelector('input'); // get the input element
		input.addEventListener('input', resizeInput); // bind the "resizeInput" callback on "input" event
		resizeInput.call(input); // immediately call the function
		
		function resizeInput() {
		this.style.width = this.value.length + "ch";
		}
		
	</script>
@endpush