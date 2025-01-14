@extends('layouts.landing_base_layout')
@section('title', 'Beranda')
@section('home', 'color')
@section('content')
    <form action="" method="get">

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
										<p class="d-none d-sm-block font-primary" data-animate="fadeIn" data-delay="400">Who Needs a Boyfriend if there Pizza And WiFi are both available.</p>
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
										<h2 class="font-secondary ls0 font-weight-normal nott" data-animate="fadeIn" data-delay="400">Make your Chocolate.</h2>
										<p class="d-none d-sm-block font-primary" data-animate="fadeIn" data-delay="800">You'll be surprised to see the Final Results of your<br>Creation &amp; would crave for more.</p>
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
										<h2 class="font-secondary ls0 font-weight-normal nott" data-animate="fadeIn">Hello &amp; Welcome.</h2>
										<p class="d-none d-sm-block font-primary" data-animate="fadeIn" data-delay="400">Coffee drinkers make better Lovers. Everything starts with a great Coffee.</p>
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

			<div style="position: absolute; top: 0; left: 0; width: 100%; z-index: 3; background: url('../landing/demos/restaurant/images/sketch.png') repeat center bottom; background-size: auto 100%; height: 40px; margin-top: -40px;"></div>

			<div class="content-wrap" style="overflow: visible;">
                
                <!-- Tampilan 1 setelah slider -->

				<div class="section m-0 clearfix" style="padding: 40px 0; background: url('../landing/demos/restaurant/images/sections/4.jpg') center center no-repeat; background-size: 100% auto">
					<div class="container">

                        <div class="heading-block border-bottom-0 bottommargin-sm">
                            <input type="text" class="font-secondary color nott" name="title1" style="font-size: 52px;" value="Bagaimana Kami Bekerja">
                            <button class="btn btn-light bi bi-pencil-square btn-sm" type="submit"></button> 
						</div>


						<div class="row col-mb-50">
							<div class="col-lg-3">
								<div class="feature-box media-box" style="max-width: 400px;">
									<div class="fbox-media" style="width: 70px; height: auto;">
										<img src="{{asset('landing/demos/restaurant/images/icons/bowl.svg')}}" alt="Image">
                                        <input type="file" name="gambar1_t1" id="selectedFile" style="display: none;" />
                                        <button type="button" class="btn btn-light bi bi-image btn-sm" onclick="document.getElementById('selectedFile').click();"></button>
									</div>

									<div class="fbox-content px-0">
										<h3>
                                            <input type="text" name="judul1_t1" value="Makanan tersaji Panas">
                                        </h3>
										<p>
                                            <textarea name="content1_t1" id="content1_t1" cols="26">Sangat penting bagi pelanggan untuk memperhatikan hal ini.</textarea>
                                        </p>
                                        <button class="btn btn-light bi bi-pencil-square btn-sm" type="submit"></button>
									</div>
								</div>
							</div>

							<div class="col-lg-3">
								<div class="feature-box media-box" style="max-width: 400px;">
									<div class="fbox-media" style="width: 70px; height: auto;">
										<img src="{{asset('landing/demos/restaurant/images/icons/spoon.svg')}}" alt="Image">
                                        <input type="file" name="gambar2_t1" id="selectedFile" style="display: none;" />
                                        <button type="button" class="btn btn-light bi bi-image btn-sm" onclick="document.getElementById('selectedFile').click();"></button>
									</div>

                                    <div class="fbox-content px-0">
										<h3>
                                            <input type="text" name="judul1_t1" value="Menu yang Beragam">
                                        </h3>
										<p>
                                            <textarea name="content1_t1" id="content1_t1" cols="26">Datang kesini tidak akan membuat andab bosan, dikarenakan restoran ini menyediakan banyak menu.</textarea>
                                        </p>
                                        <button class="btn btn-light bi bi-pencil-square btn-sm" type="submit"></button>
									</div>
								</div>
							</div>

							<div class="col-lg-3">
								<div class="feature-box media-box" style="max-width: 400px;">
									<div class="fbox-media" style="width: 70px; height: auto;">
										<img src="{{asset('landing/demos/restaurant/images/icons/glass.svg')}}" alt="Image">
                                        <input type="file" name="gambar3_t1" id="selectedFile" style="display: none;" />
                                        <button type="button" class="btn btn-light bi bi-image btn-sm" onclick="document.getElementById('selectedFile').click();"></button>
									</div>

                                    <div class="fbox-content px-0">
										<h3>
                                            <input type="text" name="judul1_t1" value="In-House Brewery">
                                        </h3>
										<p>
                                            <textarea name="content1_t1" id="content1_t1" cols="26">Velit id facilis odit aliquid laudantium. Tempore, sequi. Harum nesciunt, magni aperiam est?</textarea>
                                        </p>
                                        <button class="btn btn-light bi bi-pencil-square btn-sm" type="submit"></button>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

                <!-- Tampilan 2 Setelah Slider -->

				<div class="section mb-0" style="background: #FFF url('../landing/demos/restaurant/images/sections/5.jpg') no-repeat top left / cover; padding: 60px 0; border-top: 1px solid #EEE;">
					<div class="container clearfix">
						<div class="heading-block center mb-0 border-bottom-0">
                            <span class="font-primary" style="font-size: 16px; color: #888">
                                <input class="text-center" type="text" name="title2" id="title2" value="Sehat &amp; Lezat">
                            </span>
							<span>
                                <input class="nott font-secondary ls0" style="font-size: 60px; width:43%" type="text" name="subtitle2" id="subtitle2" value="Our Food Menu">
                            </span>
                            <button class="btn btn-light bi bi-pencil-square btn-sm" type="submit"></button> 
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
										<a href="demos/restaurant/reservation.html" ><img style="border-radius: 2px;" src="{{asset('landing/demos/restaurant/images/featured/1.jpg')}}" alt="Why choose Us?"></a>
									</div>
									<div class="fbox-content px-0">
										<h3>Lokasi yang Strategis.
											<!-- <span class="subtitle ls1" style="color:#BBB">Food Tastes Better when you are in Good Location.</span> -->
											<span class="subtitle ls1" style="color:#BBB">Makanan terasa lezat apabila disertai dengan Pemandangan yang Indah.</span>
										</h3>
										<!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi rem, facilis nobis voluptatum est voluptatem accusamus eaque perspiciatis mollitia.</p> -->
										<p>Restoran mana lagi yang memiliki pemandangan indah seperti Restoran Kami? Tunggu apalagi</p>
									</div>
								</div>
							</div>

							<div class="col-sm-6 col-lg-4">
								<div class="feature-box media-box">
									<div class="fbox-media">
										<a href="demos/restaurant/gallery.html" ><img style="border-radius: 2px;" src="{{asset('landing/demos/restaurant/images/featured/2.jpg')}}" alt="Effective Planning"></a>
									</div>
									<div class="fbox-content px-0">
										<h3>Aneka Rasa Nikmat.<span class="subtitle ls1" style="color:#BBB">Makanan yang lezat membuat suasana yang ramai.</span></h3>
										<p>Porro repellat vero sapiente amet vitae quibusdam necessitatibus consectetur, labore totam. Accusamus perspiciatis asperiores labore esse.</p>
									</div>
								</div>
							</div>

							<div class="col-sm-6 col-lg-4">
								<div class="feature-box media-box">
									<div class="fbox-media">
										<a href="demos/restaurant/about-us.html" ><img style="border-radius: 2px;" src="{{asset('landing/demos/restaurant/images/featured/3.jpg')}}" alt="Why choose Us?"></a>
									</div>
									<div class="fbox-content px-0">
										<h3>Dessert yang Lezat.<span class="subtitle ls1" style="color:#BBB">Hal terindah didalam hidup adalah makanan manis.</span></h3>
										<p>Quos, non, esse eligendi ab accusantium voluptatem. Maxime eligendi beatae, atque tempora ullam. Vitae delectus quia, consequuntur rerum quo. , labore totam. Accusamus perspiciatis asperiores.</p>
									</div>
								</div>
							</div>
						</div>

					</div>
				</div>

                <!-- Dessert Menu -->

				<!-- <div class="section mb-0" style="background: #fee749 url('../landing/demos/restaurant/images/sections/4.jpg') no-repeat center right; background-size: cover; padding: 60px 0;">
					<div class="heading-block center mb-0 border-bottom-0">
						<span class="font-primary ls1" style="font-size: 14px; color: #AAA">Sweet &amp; Sexy</span>
						<h3 class="nott font-secondary ls0" style="font-size: 60px;line-height: 1.3;">Our Dessert Menu</h3>
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
				</div> -->

				<!-- <div class="clear"></div>

				<div class="section bg-transparent">
					<div class="d-none d-lg-block" style="background: #FFF url('../landing/demos/restaurant/images/sections/3.jpg') no-repeat center center / cover; height: 100%;position: absolute; top: 0; left: 0; width: 100%"></div>
					<div class="container clearfix">

						<div class="heading-block border-bottom-0">
							<span class="font-primary ls1" style="font-size: 14px; color: #AAA">Services</span>
							<h3 class="nott font-secondary ls0" style="font-size: 60px; line-height: 1.3;">What We Do</h3>
						</div>
						<div class="row clearfix">
							<div class="col-lg-6 col-md-6 col-12"><img src="{{asset('landing/demos/restaurant/images/sections/1.jpg')}}" alt="Image"></div>
							<div class="col-lg-4 col-md-6 col-12">
								<a href="demos/restaurant/about-us.html" class="button button-border button-large button-black button-dark button-rounded nott ls0 font-primary service-button">Our Service</a>
								<img src="{{asset('landing/demos/restaurant/images/sections/2.jpg')}}" alt="Image" class="d-none d-md-block" style="margin: 0 0 0 -80px;">
							</div>
						</div>

					</div>
				</div>

				<div class="section mb-0" style="padding: 80px 0; background: #F5F5F5 url('../landing/demos/restaurant/images/food-pattern.png') repeat center center;">
					<div class="container clearfix">

						<div class="heading-block center border-bottom-0">
							<span class="font-primary ls1" style="font-size: 14px; color: #AAA">Expert &amp; Skillful</span>
							<h3 class="nott font-secondary ls0" style="font-size: 60px; line-height: 1.3;">Our Chefs</h3>
						</div>

						<div class="row clearfix">

							<div class="col-lg-3 col-md-6">
								<div class="team">
									<div class="team-image imagescalein">
										<a href="demos/restaurant/about-us.html"><img src="{{asset('landing/demos/restaurant/images/chefs/1.jpg')}}" alt="John Doe"></a>
									</div>
									<div class="team-desc">
										<div class="team-title">
											<h4 class="font-primary font-weight-normal ls2">Fig Nelson</h4>
											<span>Chef</span>
										</div>
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rerum dolor sequi quaerat, deleniti beatae ratione.</p>
									</div>
								</div>
							</div>

							<div class="col-lg-3 col-md-6">
								<div class="team">
									<div class="team-image imagescalein">
										<a href="demos/restaurant/about-us.html"><img src="{{asset('landing/demos/restaurant/images/chefs/2.jpg')}}" alt="Josh Clark"></a>
									</div>
									<div class="team-desc">
										<div class="team-title">
											<h4 class="font-primary font-weight-normal ls2">Josh Clark</h4>
											<span>Chef</span>
										</div>
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore eveniet magnam nam, atqu.</p>
									</div>
								</div>
							</div>

							<div class="col-lg-3 col-md-6">
								<div class="team">
									<div class="team-image imagescalein">
										<a href="demos/restaurant/about-us.html"><img src="{{asset('landing/demos/restaurant/images/chefs/3.jpg')}}" alt="Mary Jane"></a>
									</div>
									<div class="team-desc">
										<div class="team-title">
											<h4 class="font-primary font-weight-normal ls2">Mary Jane</h4>
											<span>Manager</span>
										</div>
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perspiciatis cum minima mollitia, velit.</p>
									</div>
								</div>
							</div>

							<div class="col-lg-3 col-md-6">
								<div class="team">
									<div class="team-image imagescalein">
										<a href="demos/restaurant/about-us.html"><img src="{{asset('landing/demos/restaurant/images/chefs/4.jpg')}}" alt="Nix Maxwell"></a>
									</div>
									<div class="team-desc">
										<div class="team-title">
											<h4 class="font-primary font-weight-normal ls2">Nix Maxwell</h4>
											<span>Staff</span>
										</div>
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere dolore ipsam nemo, similique.</p>
									</div>
								</div>
							</div>

						</div>
					</div>
				</div> -->

				<div class="clear"></div>

				<div style="background: #FFF url('../landing/demos/restaurant/images/sections/7.jpg') no-repeat top right; background-size: 100% auto; padding-top: 50px">
					<div class="container clearfix">

						<div class="heading-block center border-bottom-0">
							<span class="font-primary ls1" style="font-size: 14px; color: #AAA">Our Latest News</span>
							<h3 class="nott font-secondary ls0" style="font-size: 60px; line-height: 1.2;">News Feed</h3>
						</div>

						<div class="row posts-md col-mb-30 mb-0">

							<div class="col-lg-4 col-md-6">
								<div class="entry">
									<div class="entry-image mb-0">
										<a href="demos/restaurant/images/blogs/1.jpg" data-lightbox="image"><img src="{{asset('landing/demos/restaurant/images/blogs/1.jpg')}}" alt="Image 1"></a>
									</div>
									<div class="entry-title mt-0 p-4 title-xs nott">
										<div class="entry-meta mt-0 mb-2">
											<ul>
												<li><a href="#">08th Apr 2021</a></li>
												<li><a href="#">Video</a></li>
											</ul>
										</div>

										<h2 class="mb-0"><a href="demos/restaurant/blog.html">Make Ahead Super Green Vegan Quinoa Sandwich.</a></h2>
									</div>
								</div>
							</div>

							<div class="col-lg-4 col-md-6">
								<div class="entry">
									<div class="entry-image mb-0">
										<a href="demos/restaurant/images/blogs/2.jpg" data-lightbox="image"><img src="{{asset('landing/demos/restaurant/images/blogs/2.jpg')}}" alt="Image 2"></a>
									</div>
									<div class="entry-title mt-0 p-4 title-xs nott">
										<div class="entry-meta mt-0 mb-2">
											<ul>
												<li><a href="#">21th Mar 2021</a></li>
												<li><a href="#">Book</a></li>
											</ul>
										</div>

										<h2 class="mb-0"><a href="demos/restaurant/blog.html">We Delivered Heart Shape Cornbread Waffles.</a></h2>
									</div>
								</div>
							</div>

							<div class="col-lg-4 col-md-6">
								<div class="entry">
									<div class="entry-image mb-0">
										<a href="demos/restaurant/images/blogs/3.jpg" data-lightbox="image"><img src="{{asset('landing/demos/restaurant/images/blogs/3.jpg')}}" alt="Image 3"></a>
									</div>
									<div class="entry-title mt-0 p-4 title-xs nott">
										<div class="entry-meta mt-0 mb-2">
											<ul>
												<li><a href="#">10th Feb 2021</a></li>
												<li><a href="#">Recipe</a></li>
											</ul>
										</div>

										<h2 class="mb-0"><a href="demos/restaurant/blog.html">Top Delicious Recipes from world's Best Chefs.</a></h2>
									</div>
								</div>
							</div>

						</div>

					</div>
				</div>

				<div class="line clear"></div>

				<div class="container section-contact topmargin-lg clearfix">
					<div class="row clearfix">

						<div class="col-lg-3 col-md-6 bottommargin-sm center">
							<i class="i-plain i-xlarge mx-auto mb-0 icon-et-map"></i>
							<h3 class="text-uppercase font-body" style="font-size: 22px; font-weight: 700;margin-top: 20px">Contact</h3>
							<span class="font-primary">795 Folsom Ave, Suite 600<br>San Francisco, CA 94107</span>
						</div>

						<div class="col-lg-3 col-md-6 bottommargin-sm center">
							<i class="i-plain i-xlarge mx-auto mb-0 icon-et-clock"></i>
							<h3 class="text-uppercase font-body" style="font-size: 22px; font-weight: 700;margin-top: 20px">Opening Time</h3>
							<span class="font-primary">Sun - Thu | 07:00 - 23:00 Hours<br>
							Fri - Sat | 08:00 - 01:00 Hours</span>
						</div>

						<div class="col-lg-3 col-md-6 bottommargin-sm center">
							<i class="i-plain i-xlarge mx-auto mb-0 icon-et-clipboard"></i>
							<h3 class="text-uppercase font-body" style="font-size: 22px; font-weight: 700;margin-top: 20px">Reservation</h3>
							<span class="font-primary"><strong>Mobile: </strong>+62-111-222-333<br>
							<strong>Fax: </strong>(+62)-11-4752-1433</span>
						</div>

						<div class="col-lg-3 col-md-6 bottommargin-sm center">
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

			<div style="position: absolute; bottom: 0; left: 0; width: 100%; z-index: 3; background: url('../landing/demos/restaurant/images/sketch-header.png') repeat center bottom; background-size: auto 100%; height: 40px; margin-bottom: -10px;"></div>
		</section><!-- #content end -->
    </form>
@endsection