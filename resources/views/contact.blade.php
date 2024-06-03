@extends('layouts.landing_base_layout')
@section('title', 'About')
@section('about', 'color')
@section('content')
	<!-- Slider
	============================================= -->
	<section id="content" class="content-wrap py-0">

		<div class="rounded bg-white" style="padding: 10px 50px">
			<h3 class="font-secondary h1 color">Our Restaurants</h3>
			<div class="row mt-4 clearfix" style="font-size: 16px; line-height: 1.7;">
				<div class="col-sm-6">
					<address style="line-height: 1.7;">
						<strong>Our Location:</strong><br>
						Jl. Gegerkalong Girang No.81A, Gegerkalong<br>
					</address>
					<address style="line-height: 1.7;">
						<strong>Visit Our Social Media:</strong><br>
						<a href="https://www.instagram.com/hafznx_/">
							<button class="btn">
								<i class="i-plain mx-auto mb-0 bi bi-instagram"></i>
							</button>
						</a>
						<a href="https://twitter.com/dulduluan">
							<button class="btn">
								<i class="i-plain mx-auto mb-0 bi bi-twitter"></i>
							</button>
						</a>
					</address>
				</div>
				
				<div class="col-sm-6">
					<abbr title="Phone Number"><strong>Phone:</strong></abbr> (+62) 821 5732<br>
					<abbr title="Email Address"><strong>Email:</strong></abbr> eresto@gmail.com
				</div>
			</div>

			<form class="mb-0 row" name="" action="{{url('contact/sendMessage')}}" method="post">
				@csrf
				<div class="col-sm-12 mb-3">
					<input type="text" id="nama" name="nama" value="" required class="sm-form-control border-form-control required" placeholder="Nama" />
				</div>
				<div class="col-sm-12 mb-3">
					<input type="email" id="email" name="email" value="" required class="required email sm-form-control border-form-control" placeholder="Email" />
				</div>
				<div class="col-sm-12 mb-3">
					<textarea name="pesan" required class="form-control border-form-control" id="message" cols="30" rows="5" placeholder="Masukkan Pesan Disini"></textarea>
				</div>

				<div class="clear"></div>

				<div class="col-12 mb-0">
					<button class="button button-circle button-large text-white ml-0 mt-3" type="submit">Kirim Pesan</button>
				</div>
			</form>
		</div>

	</section>

	<!-- Content
	============================================= -->
	<section id="content">

	</section><!-- #content end -->
@endsection