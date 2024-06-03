@extends('layouts.landing_base_layout')
@section('title', 'Menu')
@section('menu', 'color')
@push('css')
	<style>
		.floating-btn{
			position: fixed;
			bottom: -65px;
			right: 6rem;
			z-index: 100;
		}
		@media(max-width: 800px){
			.floating-btn{
				right: 2rem;
			}
		}
	</style>
@endpush
@section('content')
    <!-- Page Title
		============================================= -->
		<section id="page-title" class="page-title-parallax page-title-dark page-title-center include-header" style="background-image: url('landing/demos/restaurant/images/sections/food-menu.jpg'); background-size: cover; padding: 120px 0 180px;" data-bottom-top="background-position:0 0px;" data-top-bottom="background-position:0px -300px;">

			<div class="container clearfix">
				<h1 class="font-secondary text-capitalize ls0" style="font-size: 74px;">Menu</h1>
				<span class="font-weight-normal">Choose Items from Our Menu</span>
			</div>

		</section><!-- #page-title end -->

		<!-- Content
		============================================= -->
		<section id="content">
			<div class="content-wrap py-0" style="overflow: visible;">
				<div class="container">

					<div class="tabs tabs-justify" id="tab-1">

						<ul class="tab-nav clearfix border-bottom-0">
							@foreach ($jenisMenu as $item)
								<li><a href="#tabs-{{$item->id}}"><img src="{{asset('landing/demos//restaurant/images/icons/spoon.svg')}}" alt="Image">{{$item->jenis_menu}}</a></li>
							@endforeach
						</ul>

						<div class="tab-container mt-4">
							@foreach ($jenisMenu as $item)
								<div class="tab-content" id="tabs-{{$item->id}}">
									<div class="row gutter-40">
										@if (count($item->menu) > 0)
											@foreach ($item->menu as $menu)
											<div class="col-lg-3 col-md-6">
												<div class="portfolio-item">
													{{-- <a href="{{url('menu/order', ["id"=>Crypt::encrypt($menu->id)])}}" class="portfolio-image"><img src="{{Storage::url($menu->foto_menu)}}" alt="1" class="rounded"></a> --}}
													<button type="button" onclick="addCart('{{Crypt::encrypt($menu->id)}}', this)" class="portfolio-image btn"><img src="{{Storage::url($menu->foto_menu)}}" alt="1" class="rounded" style="height: 260px; object-fit: cover; object-position: center"></button>
													<div class="portfolio-desc pt-2">
														<h4 class="mb-1"><a href="#">{{$menu->nama_menu}}</a></h4>
														<div class="item-price">Rp{{number_format($menu->harga, 0, ',', '.')}}</div>
													</div>
												</div>
											</div>	
											@endforeach
										@else
										<div class="col text-center">
											<h3 class="">Data belum tersedia</h3>
										</div>
										@endif
									</div>
								</div>
							@endforeach
						</div>

					</div>

				</div>

				<div class="section mb-0 mt-3" style="padding: 80px 0; background: #F5F5F5 url('landing/demos/restaurant/images/food-pattern.png') repeat center center;">
					<div class="container">
						<div class="heading-block border-bottom-0 center bottommargin-sm">
							<span class="font-primary ls1 color">Steps of Order</span>
							<h3 class="nott font-secondary ls0" style="font-size: 52px; line-height: 1.3;">How do you Get your Food</h3>
						</div>

						<div class="clear"></div>

						<div class="row mt-5 clearfix">
							<div class="col-lg-4 col-sm-6 bottommargin-sm">
								<div class="feature-box media-box">
									<div class="fbox-media" style="width: 60px; height: 60px">
										<img src="{{asset('landing/demos//restaurant/images/icons/route.svg')}}" alt="Image">
									</div>
									<div class="fbox-content px-0">
										<h3>1. Select Your Location</h3>
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptas omnis nam molestias minus ipsa!</p>
									</div>
								</div>
							</div>

							<div class="col-lg-4 col-sm-6 bottommargin-sm">
								<div class="feature-box media-box">
									<div class="fbox-media" style="width: 60px; height: 60px">
										<img src="{{asset('landing/demos//restaurant/images/icons/shop.svg')}}" alt="Image">
									</div>
									<div class="fbox-content px-0">
										<h3>2. Choose your Food</h3>
										<p>Facere aliquam itaque quia recusandae, corporis fugit fugiat eaque, accusamus officiis reprehenderit.</p>
									</div>
								</div>
							</div>

							<div class="col-lg-4 col-sm-6 bottommargin-sm">
								<div class="feature-box media-box">
									<div class="fbox-media" style="width: 75px; height: 60px">
										<img src="{{asset('landing/demos//restaurant/images/icons/delivery-bg.svg')}}" alt="Image">
									</div>
									<div class="fbox-content px-0">
										<h3>3. Your Item is on the Way</h3>
										<p>Velit id facilis odit aliquid laudantium. Tempore, sequi. Harum nesciunt, magni aperiam est?</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="section m-0 bg-transparent" style="padding: 80px 0 70px;">
					<div class="container">
						<div class="mx-auto d-flex justify-content-center center" style="max-width: 900px;">
							<h3 class="mb-0 ls0">Get $30 on Your First Order <a href="#" class="button button-circle button-xlarge button-light text-white ls0 nott mt-0 mb-1 ml-3" style="position: relative;"><span>Order Now</span> <i class="icon-line-arrow-right font-weight-semibold"></i></a></h3>
						</div>
					</div>
				</div>

			</div>

			<div style="position: absolute; bottom: 0; left: 0; width: 100%; z-index: 3; background: url('landing/demos/restaurant/images/sketch-header.png') repeat center bottom; background-size: auto 100%; height: 40px; margin-bottom: -10px;"></div>
			<a href="{{url('pesanan')}}" id="btn-pesanan" class="button button-rounded button-reveal button-dark text-right floating-btn">
				<i class="icon-angle-right"></i>
				<span class="mb-1 position-relative">
					<i class="icon-cart-plus mr-3" style="font-size: 1.3em"></i>
					<span class="badge badge-danger" style="position: absolute; margin-bottom:5px; right:1;" id="counting-cart">{{$myOrder}}</span>
				</span>
			</a>
		</section><!-- #content end -->
@endsection
@push('js')
	<script>
		$(document).ready(function(){
			if("{{$myOrder}}" > 0){
				$('#btn-pesanan').css('bottom', '1.3rem')
			}
		})
		function addCart(id, element){
			pushSessionCart(id);
		}
		function doBounce(element, times, distance, speed) {
			for(var i = 0; i < times; i++) {
				element.animate({bottom: '-='+distance}, speed)
				.animate({bottom: '+='+distance}, speed);
				
			}        
		}
		function pushSessionCart(id){
			$.ajax({
				method: 'POST',
				url: "{{url('menu/order')}}" + "/" + id,
				data: {_token: "{{csrf_token()}}"},
				success: function(res){
					$('#counting-cart').html(res.data);
					$('#btn-pesanan').css("bottom", '50px');
					doBounce($('#btn-pesanan'), 1, '1.3rem', 100);
				},
				error: function(res){
					Swal.fire(
					'Maaf',
					res.responseJSON.data,
					res.responseJSON.status
					)
				}
			})
		}
	</script>
	<script>
		// $("#btn-pesanan").click(function() {
		// 	doBounce($(this), 1, '6.2rem', 100);   
		// });


		
	</script>
@endpush