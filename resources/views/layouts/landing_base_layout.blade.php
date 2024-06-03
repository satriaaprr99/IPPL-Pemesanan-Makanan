<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>

	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="author" content="SemiColonWeb" />

	<!-- Stylesheets
	============================================= -->
	<link href="https://fonts.googleapis.com/css?family=Cookie|Open+Sans:400,600,700,800,900|Poppins:300,400,500,600,700|Playfair+Display:400,400i,700,700i,900&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="{{asset('landing/css/bootstrap.css')}}" type="text/css" />
	<link rel="stylesheet" href="{{asset('landing/css/style.css')}}" type="text/css" />
	<link rel="stylesheet" href="{{asset('landing/css/dark.css')}}" type="text/css" />
	<link rel="stylesheet" href="{{asset('landing/css/font-icons.css')}}" type="text/css" />
	<link rel="stylesheet" href="{{asset('landing/css/animate.css')}}" type="text/css" />
	<link rel="stylesheet" href="{{asset('landing/css/magnific-popup.css')}}" type="text/css" />
	<link rel="stylesheet" href="{{asset('landing/css/swiper.css')}}" type="text/css" />

	<link rel="stylesheet" href="{{asset('landing/css/et-line.css')}}" type="text/css" />

	<!-- restaurant Demo Specific Stylesheet -->
	<link rel="stylesheet" href="{{asset('landing/demos/restaurant/restaurant.css')}}" type="text/css" />
	<link rel="stylesheet" href="{{asset('landing/demos/restaurant/css/fonts.css')}}" type="text/css" />
	<!-- / -->

	<link rel="stylesheet" href="{{asset('landing/css/custom.css')}}" type="text/css" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />

	<link rel="stylesheet" href="{{asset('landing/css/colors.php?color=e7272d')}}" type="text/css" />
	<link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css"
    />
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
	<!-- Document Title
	============================================= -->
	<title>E- Resto | @yield('title')</title>
	@stack('css')
</head>

<body class="stretched sticky-footer" data-loader-html="<span class='pizza'> <span class='slice'></span> <span class='slice'></span> <span class='slice'></span> <span class='slice'></span> <span class='slice'></span> <span class='slice'></span> <span class='slice'></span> <span class='slice'></span> <span class='slice'></span> <span class='slice'></span> <span class='slice'></span> <span class='slice'></span> <span class='slice'></span> </span>">
	@if (session()->has('success'))
    <script>
        Swal.fire(
        'Berhasil',
        "{!!Session::get('success')!!}",
        'success'
        )
    </script>
    @endif
    @if (session()->has('error'))
        <script>
            Swal.fire(
            'Oopss',
            "{!!Session::get('error')!!}",
            'error'
            )
        </script>
    @endif
    @if (session()->has('warning'))
        <script>
            Swal.fire(
            'Maaf',
            "{!!Session::get('warning')!!}",
            'warning'
            )
        </script>
    @endif
	<!-- Document Wrapper
	============================================= -->
	<div id="wrapper" class="clearfix">

		<!-- Header
		============================================= -->
		<header id="header" class="transparent-header" data-sticky-shrink="false">
			<div id="header-wrap">
				<div class="container">
					<div class="header-row justify-content-lg-between">

						<!-- Logo
						============================================= -->
						<div id="logo" class="col-auto mr-lg-0 order-lg-2">
							<a href="#" class="standard-logo"><img src="{{asset('img/logo.png')}}" alt="E-Resto Logo"></a>
							<a href="#" class="retina-logo"><img src="{{asset('img/logo@2x.png')}}" alt="E-Resto Logo"></a>
						</div><!-- #logo end -->

						<div id="primary-menu-trigger">
							<svg class="svg-trigger" viewBox="0 0 100 100"><path d="m 30,33 h 40 c 3.722839,0 7.5,3.126468 7.5,8.578427 0,5.451959 -2.727029,8.421573 -7.5,8.421573 h -20"></path><path d="m 30,50 h 40"></path><path d="m 70,67 h -40 c 0,0 -7.5,-0.802118 -7.5,-8.365747 0,-7.563629 7.5,-8.634253 7.5,-8.634253 h 20"></path></svg>
						</div>

						<!-- Primary Navigation
						============================================= -->
						<nav class="primary-menu col-lg-4 order-lg-1">

							<ul class="menu-container">
								<li class="menu-item"><a class="menu-link @yield('home')" href="{{url('/')}}"><div>Home</div></a></li>
								<!-- <li class="menu-item"><a class="menu-link @yield('gallery')" href="{{url('gallery')}}"><div>Gallery</div></a></li> -->
								<li class="menu-item"><a class="menu-link @yield('menu')" href="{{url('menu')}}"><div>Menu</div></a></li>
							</ul>
							
						</nav>
						
						<nav class="primary-menu col-lg-4 order-lg-3">
							
							<ul class="menu-container justify-content-lg-end">
								<li class="menu-item"><a class="menu-link @yield('about')" href="{{url('contact')}}"><div>Kontak</div></a></li>
								<!-- <li class="menu-item"><a class="menu-link @yield('blog')" href="{{url('blog')}}"><div>Blog</div></a></li> -->
								<li class="menu-item"><a class="menu-link @yield('reservation')" href="{{url('pesanan')}}"><div>Keranjang</div></a></li>
							</ul>

						</nav><!-- #primary-menu end -->

					</div>
				</div>
			</div>
			<div class="header-wrap-clone"></div>
		</header><!-- #header end -->

		@yield('content')

		<!-- Footer
		============================================= -->
		<footer id="footer" class="dark" style="background: url('landing/demos/restaurant/images/footer-bg.jpg')  repeat center center / cover; background-size: auto 100%;; padding: 20px 0 22px">
			<!-- Copyrights
			============================================= -->
			<div id="copyrights" class="bg-transparent pb-4">
				<div class="container clearfix">

					<div class="row justify-content-between col-mb-30">
						<div class="col-12 col-md-auto text-center text-md-left">
							<span class="font-primary">&copy; Canvas Inc. 2021. All Rights Reserved.</span>
						</div>

						<div class="col-12 col-md-auto text-center text-md-right">
							<div class="copyrights-menu copyright-links clearfix">
								<a href="#">Home</a>/<a href="#">Menu</a>/<a href="#">Contact</a>/<a href="#">Email</a>
							</div>
						</div>
					</div>

				</div>
			</div><!-- #copyrights end -->
		</footer><!-- #footer end -->

	</div><!-- #wrapper end -->

	<!-- Go To Top
	============================================= -->
	<div id="gotoTop" class="icon-line-arrow-up"></div>

	<!-- JavaScripts
	============================================= -->
	<script src="{{asset('landing/js/jquery.js')}}"></script>
	<script src="{{asset('landing/js/plugins.min.js')}}"></script>
	
	<!-- Footer Scripts
	============================================= -->
	<script src="{{asset('landing/js/functions.js')}}"></script>
	@stack('js')
</body>
</html>