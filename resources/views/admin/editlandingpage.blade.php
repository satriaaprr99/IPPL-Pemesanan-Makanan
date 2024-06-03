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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" />

    <!-- Document Title
	============================================= -->
    <title>Social Media | Edit</title>

</head>

<body class="stretched sticky-footer" data-loader-html="<span class='pizza'> <span class='slice'></span> <span class='slice'></span> <span class='slice'></span> <span class='slice'></span> <span class='slice'></span> <span class='slice'></span> <span class='slice'></span> <span class='slice'></span> <span class='slice'></span> <span class='slice'></span> <span class='slice'></span> <span class='slice'></span> <span class='slice'></span> </span>">

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
                            <svg class="svg-trigger" viewBox="0 0 100 100">
                                <path d="m 30,33 h 40 c 3.722839,0 7.5,3.126468 7.5,8.578427 0,5.451959 -2.727029,8.421573 -7.5,8.421573 h -20"></path>
                                <path d="m 30,50 h 40"></path>
                                <path d="m 70,67 h -40 c 0,0 -7.5,-0.802118 -7.5,-8.365747 0,-7.563629 7.5,-8.634253 7.5,-8.634253 h 20"></path>
                            </svg>
                        </div>

                        <!-- Primary Navigation
						============================================= -->
                        <nav class="primary-menu col-lg-4 order-lg-1">

                            <ul class="menu-container">
                                <li class="menu-item"><a class="menu-link color" href="#">
                                        <div>Home</div>
                                    </a></li>
                            </ul>

                        </nav>

                        <nav class="primary-menu col-lg-4 order-lg-3">

                            <ul class="menu-container justify-content-lg-end">
                                <li class="menu-item"><a onclick="$('#edit-landing').submit()" class="menu-link @yield('about')">
                                        <div>Simpan</div>
                                    </a></li>
                                <li class="menu-item"><a class="menu-link @yield('reservation')" href="{{route('pengelola.dashboard')}}">
                                        <div>Kembali</div>
                                    </a></li>
                            </ul>

                        </nav><!-- #primary-menu end -->

                    </div>
                </div>
            </div>
            <div class="header-wrap-clone"></div>
        </header><!-- #header end -->

        <!-- Isi -->

        <form action="{{route('pengelola.cms.editLanding.storeUpdate')}}" id="edit-landing" method="post" enctype="multipart/form-data">
            @csrf
            <input type="hidden" value="{{@$data->id}}" name="id">
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
                                            <h2 class="font-secondary ls0 font-weight-normal nott" data-animate="fadeIn">
                                                Gurih asal Bandung.
                                            </h2>
                                            <!-- <p class="d-none d-sm-block font-primary" data-animate="fadeIn" data-delay="400">Who Needs a Boyfriend if there Pizza And WiFi are both available.</p> -->
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
                                <div class="swiper-slide-bg" id="img_slide_1" style="background-image: url('../landing/demos/restaurant/images/slider/1.jpg');"></div>
                            </div>

                            <div class="swiper-slide">
                                <div class="container dark">
                                    <div class="slider-caption slider-caption-center" style="margin-top: -30px;">
                                        <div>
                                            <img data-animate="fadeIn" src="{{asset('landing/demos/restaurant/images/slider-logo.png')}}" alt="Image" style="width: 120px; margin-bottom: 10px;">
                                            <h2 class="font-secondary ls0 font-weight-normal nott text-center" data-animate="fadeIn" data-delay="400">
                                            Aneka Ragam Coklat
                                            </h2>
                                            <p class="d-none d-sm-block font-primary" data-animate="fadeIn" data-delay="800">
                                            Kamu akan terkejut dengan rasa coklat yang ada disini
                                            </p>
                                            <div class="static-content" style="position: relative; display: flex; justify-content: center; flex-direction: row; margin-top: 30px" data-animate="fadeIn" data-delay="1000">
                                                <img src="{{asset('landing/demos/restaurant/images/icons/bowl-white.svg')}}" width="42" height="42" alt="Image">
                                                <img class="leftmargin-sm" src="{{asset('landing/demos/restaurant/images/icons/spoon-white.svg')}}" width="42" height="42" alt="Image">
                                                <img class="leftmargin-sm" src="{{asset('landing/demos/restaurant/images/icons/glass-white.svg')}}" width="42" height="42" alt="Image">
                                            </div>
                                        </div>  
                                    </div>
                                </div>
                                <div class="swiper-slide-bg" id="img_slide_2" style="background-image: url('../landing/demos/restaurant/images/slider/3.jpg');"></div>
                            </div>

                            <div class="swiper-slide">
                                <div class="container dark">
                                    <div class="slider-caption slider-caption-right">
                                        <div>
                                            <h2 class="font-secondary ls0 font-weight-normal nott" data-animate="fadeIn">
                                            Hello & Welcome.
                                            </h2>
                                            <p class="d-none d-sm-block font-primary" data-animate="fadeIn" data-delay="400">
                                            Selamat datang bagi pelanggan kami yang berbahagia.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide-bg" id="img_slide_3" style="background-image: url('../landing/demos/restaurant/images/slider/2.jpg'); background-position: center bottom;"></div>
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

                    <div class="section m-0 clearfix" id="section_1" style="padding: 40px 0; background: url('..{{Storage::url(@$data->bg_section_1)}}') center center no-repeat; background-size: 100% auto">
                        <div class="d-flex">
                            <button type="button" onclick="$('#bg_section_1').click()" class="btn btn-info btn-sm mx-auto my-3">
                                change background
                            </button>
                            <input type="file" name="bg_section_1" id="bg_section_1" class="d-none" onchange="replaceBg('#section_1', this)">
                        </div>
                        <div class="container">
                            <div class="heading-block border-bottom-0 bottommargin-sm">
                                <input type="text" class="font-secondary color nott w-50" name="title1" id="title1_edit" style="font-size: 52px;" value="{{@$data->title1}}">
                            </div>
                            <div class="row col-mb-50">
                                <div class="col-lg-3">
                                    <div class="feature-box media-box" style="max-width: 400px;">
                                        <div class="fbox-media" style="width: 70px; height: auto;">
                                            <img src="{{Storage::url(@$data->gambar1_t1)}}" alt="Image" id="img_section_1_1">
                                            <input type="file" onchange="changeImgPrev(this, '#img_section_1_1')" name="gambar1_t1" id="gambar1_t1_edit" style="display: none;" />
                                            <button type="button" class="btn btn-light bi bi-image btn-sm" onclick="document.getElementById('gambar1_t1_edit').click();"></button>
                                        </div>

                                        <div class="fbox-content px-0">
                                            <h3>
                                                <input type="text" name="judul1_t1" id="judul1_t1_edit" value="{{@$data->judul1_t1}}">
                                            </h3>
                                            <p>
                                                <textarea name="content1_t1" id="content1_t1_edit" cols="26">{{@$data->content1_t1}}</textarea>
                                            </p>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-3">
                                    <div class="feature-box media-box" style="max-width: 400px;">
                                        <div class="fbox-media" style="width: 70px; height: auto;">
                                            <img src="{{Storage::url(@$data->gambar2_t1)}}" alt="Image" id="img_section_1_2">
                                            <input type="file" onchange="changeImgPrev(this, '#img_section_1_2')" name="gambar2_t1" id="gambar2_t1_edit" style="display: none;" />
                                            <button type="button" class="btn btn-light bi bi-image btn-sm" onclick="document.getElementById('gambar2_t1_edit').click();"></button>
                                        </div>

                                        <div class="fbox-content px-0">
                                            <h3>
                                                <input type="text" name="judul2_t1" id="judul2_t1_edit" value="{{@$data->judul2_t1}}">
                                            </h3>
                                            <p>
                                                <textarea name="content2_t1" id="content2_t1_edit" cols="26">{{@$data->content2_t1}}</textarea>
                                            </p>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-3">
                                    <div class="feature-box media-box" style="max-width: 400px;">
                                        <div class="fbox-media" style="width: 70px; height: auto;">
                                            <img src="{{Storage::url(@$data->gambar3_t1)}}" alt="Image" id="img_section_1_3">
                                            <input type="file" onchange="changeImgPrev(this, '#img_section_1_3')" name="gambar3_t1" id="gambar3_t1_edit" style="display: none;" />
                                            <button type="button" class="btn btn-light bi bi-image btn-sm" onclick="document.getElementById('gambar3_t1_edit').click();"></button>
                                        </div>

                                        <div class="fbox-content px-0">
                                            <h3>
                                                <input type="text" name="judul3_t1" id="judul3_t1_edit" value="{{@$data->judul3_t1}}">
                                            </h3>
                                            <p>
                                                <textarea name="content3_t1" id="content3_t1_edit" cols="26">{{@$data->content3_t1}}</textarea>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Tampilan 2 Setelah Slider -->

                    <div class="section mb-0" id="section_2" style="background: #FFF url('..{{Storage::url(@$data->bg_section_2)}}') no-repeat top left / cover; padding: 60px 0; border-top: 1px solid #EEE;">
                        <div class="d-flex">
                            <button type="button" onclick="$('#bg_section_2').click()" class="btn btn-info btn-sm mx-auto my-3">
                                change background
                            </button>
                            <input type="file" name="bg_section_2" id="bg_section_2" class="d-none" onchange="replaceBg('#section_2', this)">
                        </div>
                        <div class="container clearfix">
                            <div class="heading-block center mb-0 border-bottom-0">
                                <span class="font-primary" style="font-size: 16px; color: #888">
                                    <input class="text-center" type="text" name="title2" id="title2_edit" value="{{@$data->title2}}">
                                </span>
                                <span>
                                    <input class="nott font-secondary ls0" style="font-size: 60px; width:43%" type="text" name="subtitle2" id="subtitle2_edit" value="{{@$data->subtitle2}}">
                                </span>
                            </div>
                        </div>
                    </div>

                    <div class="section food-menu mt-0 p-0">
                        <div class="container-fluid">
                            <div class="row align-items-stretch clearfix">
                                <div class="col-lg-7 clearfix">
                                    <div class="vertical-middle">
                                        <div class="col-padding clearfix">
                                            <div>
                                                <div id="item-thumb" class="item-thumb"></div>
                                            </div>
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
                                                <a href="#" class="more-link">See More Details <i class="icon-line-arrow-right"></i></a>
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
                                                <a href="#" class="more-link">See More Details <i class="icon-line-arrow-right"></i></a>
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
                                                <a href="#" class="more-link">See More Details <i class="icon-line-arrow-right"></i></a>
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
                                                <a href="#" class="more-link">See More Details <i class="icon-line-arrow-right"></i></a>
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
                                                <a href="#" class="more-link">See More Details <i class="icon-line-arrow-right"></i></a>
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
                                                <a href="#" class="more-link">See More Details <i class="icon-line-arrow-right"></i></a>
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
                                                <a href="#" class="more-link">See More Details <i class="icon-line-arrow-right"></i></a>
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
                                                <a href="#" class="more-link">See More Details <i class="icon-line-arrow-right"></i></a>
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
                                                <a href="#" class="more-link">See More Details <i class="icon-line-arrow-right"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Tampilan ke - 3 setelah slider -->

                    <div class="section mb-0 bg-transparent">
                        <div class="container">

                            <div class="row col-mb-50">
                                <div class="col-sm-6 col-lg-4">
                                    <div class="feature-box media-box">
                                        <div class="fbox-media">
                                            <a href="demos/restaurant/reservation.html"><img style="border-radius: 2px;" src="{{Storage::url(@$data->gambar1_t3)}}" alt="Why choose Us?" id="img_section_3_1"></a>
                                            <input type="file" onchange="changeImgPrev(this, '#img_section_3_1')" name="gambar1_t3" id="gambar1_t3_edit" style="display: none;" />
                                            <button type="button" class="btn btn-light bi bi-image btn-sm" onclick="document.getElementById('gambar1_t3_edit').click();"></button>
                                        </div>
                                        <div class="fbox-content px-0">
                                            <h3>
                                                <input type="text" name="judul1_t3" id="judul1_t3_edit" value="{{@$data->judul1_t3}}">
                                                <textarea class="subtitle ls1" name="subtitle1_t3" id="subtitle1_t3_edit" cols="41">{{@$data->subtitle1_t3}}</textarea>
                                            </h3>
                                            <p>
                                                <textarea name="caption1_t3" id="caption1_t3_edit" cols="41">{{@$data->caption1_t3}}</textarea>
                                            </p>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-6 col-lg-4">
                                    <div class="feature-box media-box">
                                        <div class="fbox-media">
                                            <a href="demos/restaurant/gallery.html"><img style="border-radius: 2px;" src="{{Storage::url(@$data->gambar2_t3)}}" alt="Effective Planning" id="img_section_3_2"></a>
                                            <input type="file" onchange="changeImgPrev(this, '#img_section_3_2')" name="gambar2_t3" id="gambar2_t3_edit" style="display: none;" />
                                            <button type="button" class="btn btn-light bi bi-image btn-sm" onclick="document.getElementById('gambar2_t3_edit').click();"></button>
                                        </div>
                                        <div class="fbox-content px-0">
                                            <h3>
                                                <input type="text" name="judul2_t3" id="judul2_t3_edit" value="{{@$data->judul2_t3}}">
                                                <textarea class="subtitle ls1" name="subtitle2_t3" id="subtitle2_t3_edit" cols="41">{{@$data->subtitle2_t3}}</textarea>
                                            </h3>
                                            <p>
                                                <textarea name="caption2_t3" id="caption2_t3_edit" cols="41">{{@$data->caption2_t3}}</textarea>
                                            </p>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-6 col-lg-4">
                                    <div class="feature-box media-box">
                                        <div class="fbox-media">
                                            <a href="demos/restaurant/about-us.html"><img style="border-radius: 2px;" src="{{Storage::url(@$data->gambar3_t3)}}" alt="Why choose Us?" id="img_section_3_3"></a>
                                            <input type="file" onchange="changeImgPrev(this, '#img_section_3_3')" name="gambar3_t3" id="gambar3_t3_edit" style="display: none;" />
                                            <button type="button" class="btn btn-light bi bi-image btn-sm" onclick="document.getElementById('gambar3_t3_edit').click();"></button>
                                        </div>
                                        <div class="fbox-content px-0">
                                            <h3>
                                                <input type="text" name="judul3_t3" id="judul3_t3_edit" value="{{@$data->judul3_t3}}">
                                                <textarea class="subtitle ls1" name="subtitle3_t3" id="subtitle3_t3_edit" cols="41">{{@$data->subtitle3_t3}}</textarea>
                                            </h3>
                                            <p>
                                                <textarea name="caption3_t3" id="caption3_t3_edit" cols="41">{{@$data->caption3_t3}}</textarea>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                    <!-- Tampilan ke - 4 setelah slider -->

                    <!-- Dessert Menu -->

                    <div class="section mb-0" id="section_4" style="background: #fee749 url('..{{Storage::url(@$data->bg_section_4)}}') no-repeat center right; background-size: cover; padding: 60px 0;">
                        <div class="d-flex">
                            <button type="button" onclick="$('#bg_section_4').click()" class="btn btn-info btn-sm mx-auto my-3">
                                change background
                            </button>
                            <input type="file" name="bg_section_4" id="bg_section_4" class="d-none" onchange="replaceBg('#section_4', this)">
                        </div>
                        <div class="heading-block center mb-0 border-bottom-0">
                            <span class="font-primary ls1" style="font-size: 14px; color: #AAA">
                                <input class="text-center" type="text" name="title4" id="title4_edit" value="{{@$data->title4}}">
                            </span>
                            <span>
                                <input class="nott font-secondary ls0" style="font-size: 60px; line-height: 1.3; width:48%" type="text" name="subtitle4" id="subtitle4_edit" value="{{@$data->subtitle4}}">
                            </span>
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
                                                <a href="#" class="more-link">See More Details <i class="icon-line-arrow-right"></i></a>
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
                                                <a href="#" class="more-link">See More Details <i class="icon-line-arrow-right"></i></a>
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
                                                <a href="#" class="more-link">See More Details <i class="icon-line-arrow-right"></i></a>
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
                                                <a href="#" class="more-link">See More Details <i class="icon-line-arrow-right"></i></a>
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
                                                <a href="#" class="more-link">See More Details <i class="icon-line-arrow-right"></i></a>
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
                                                <a href="#" class="more-link">See More Details <i class="icon-line-arrow-right"></i></a>
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
                                                <a href="#" class="more-link">See More Details <i class="icon-line-arrow-right"></i></a>
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
                                                <a href="#" class="more-link">See More Details <i class="icon-line-arrow-right"></i></a>
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
                                                <a href="#" class="more-link">See More Details <i class="icon-line-arrow-right"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-7 clearfix">
                                    <div class="vertical-middle">
                                        <div class="col-padding clearfix">
                                            <div>
                                                <div id="item-thumb1" class="item-thumb"></div>
                                            </div>
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
                                <span class="font-primary">
                                    <input type="text" name="caption_f_1" id="caption_f_1" value="{{@$data->caption_f_1}}">
                                </span>
                                <span class="font-primary">
                                    <input type="text" name="caption_f_2" id="caption_f_2" value="{{@$data->caption_f_2}}">
                                </span> 
                            </div>

                            <div class="col-lg-4 col-md-6 bottommargin-sm center">
                                <i class="i-plain i-xlarge mx-auto mb-0 icon-et-clock"></i>
                                <h3 class="text-uppercase font-body" style="font-size: 22px; font-weight: 700;margin-top: 20px">Opening Time</h3>
                                <span class="font-primary">
                                    <input type="text" name="caption_f_3" id="caption_f_3" value="{{@$data->caption_f_3}}">
                                </span>
                                <span class="font-primary">
                                    <input type="text" name="caption_f_4" id="caption_f_4" value="{{@$data->caption_f_4}}">
                                </span>
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

                <div style="position: absolute; bottom: 0; left: 0; width: 100%; z-index: 3; background: url('../landing/demos/restaurant/images/sketch-header.png') repeat center bottom; background-size: auto 100%; height: 40px; margin-bottom: -10px;"></div>
            </section><!-- #content end -->
        </form>

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
                                <a href="#">Home</a>/<a href="#">About Us</a>/<a href="#">Team</a>/<a href="#">Clients</a>/<a href="#">Contact</a>
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

    </button>

    <!-- JavaScripts
	============================================= -->
    <script src="{{asset('landing/js/jquery.js')}}"></script>
    <script src="{{asset('landing/js/plugins.min.js')}}"></script>

    <!-- Footer Scripts
	============================================= -->
    <script src="{{asset('landing/js/functions.js')}}"></script>

    <!-- Custom Carousel JS File -->
    <script>
        var carouselRTL = false;

        if ($('body').hasClass('rtl')) {
            carouselRTL = true;
        }

        $(window).on('pluginCarouselReady', function() {
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
    <script>
        function replaceBg(target, element) {
            var file = element.files[0];
            var reader = new FileReader();
            reader.onloadend = function() {
                $(target).css('background', 'url("' + reader.result + '") center center no-repeat')
                $(target).css('background-size', '100% auto');
            }
            if (file) {
                reader.readAsDataURL(file);
            } else {

            }
        }

        function changeImgPrev(input, imgtarget) {
            const [file] = input.files
            if (file) {
                $(imgtarget).attr('src', URL.createObjectURL(file))
            }
        }
    </script>
</body>

</html>