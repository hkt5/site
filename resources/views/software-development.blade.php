<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>

    <!-- Basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>SilenceOnTheWire - software house</title>

    <meta name="keywords" content="php, laravel, lumen, symfony, zend3, jekyll, java, play framework" />
    <meta name="description" content="We are a digital agency combining software house services with the best marketing and design solutions. Offering web development, graphic designing and digital marketing, we will help you in gaining a competitive edge in your field.">

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('porto/img/favicon.ico') }}" type="image/x-icon" />
    <link rel="apple-touch-icon" href="{{ asset('porto/img/apple-touch-icon.png') }}">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, shrink-to-fit=no">

    <!-- Web Fonts  -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800%7CShadows+Into+Light%7CPlayfair+Display:400" rel="stylesheet" type="text/css">

    <!-- Vendor CSS -->
    <link rel="stylesheet" href="{{ asset('porto/vendor/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('porto/vendor/fontawesome-free/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('porto/vendor/animate/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('porto/vendor/simple-line-icons/css/simple-line-icons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('porto/vendor/owl.carousel/assets/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('porto/vendor/owl.carousel/assets/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('porto/vendor/magnific-popup/magnific-popup.min.css') }}">

    <!-- Theme CSS -->
    <link rel="stylesheet" href="{{ asset('porto/css/theme.css') }}">
    <link rel="stylesheet" href="{{ asset('porto/css/theme-elements.css') }}">
    <link rel="stylesheet" href="{{ asset('porto/css/theme-blog.css') }}">
    <link rel="stylesheet" href="{{ asset('porto/css/theme-shop.css') }}">

    <!-- Current Page CSS -->
    <link rel="stylesheet" href="{{ asset('porto/vendor/rs-plugin/css/settings.css') }}">
    <link rel="stylesheet" href="{{ asset('porto/vendor/rs-plugin/css/layers.css') }}">
    <link rel="stylesheet" href="{{ asset('porto/vendor/rs-plugin/css/navigation.css') }}">
    <link rel="stylesheet" href="{{ asset('porto/vendor/circle-flip-slideshow/css/component.css') }}">

    <!-- Demo CSS -->


    <!-- Skin CSS -->
    <link rel="stylesheet" href="{{ asset('porto/css/skins/default.css') }}">

    <!-- Theme Custom CSS -->
    <link rel="stylesheet" href="{{ asset('porto/css/custom.css') }}">

    <!-- Head Libs -->
    <script src="{{ asset('porto/vendor/modernizr/modernizr.min.js') }}"></script>

</head>

<body class="loading-overlay-showing" data-plugin-page-transition data-loading-overlay data-plugin-options="{'hideDelay': 500}">
<div class="loading-overlay">
    <div class="bounce-loader">
        <div class="bounce1"></div>
        <div class="bounce2"></div>
        <div class="bounce3"></div>
    </div>
</div>

<div class="body">
    <header id="header" class="header-transparent header-semi-transparent header-semi-transparent-dark" data-plugin-options="{'stickyEnabled': true, 'stickyEnableOnBoxed': true, 'stickyEnableOnMobile': true, 'stickyChangeLogo': false, 'stickyStartAt': 53, 'stickySetTop': '-53px'}">
        <div class="header-body border-top-0 bg-dark box-shadow-none">
            <div class="header-top header-top-borders header-top-light-2-borders">
                <div class="container container-lg h-100">
                    <div class="header-row h-100">
                        <div class="header-column justify-content-start">
                            <div class="header-row">
                                <nav class="header-nav-top">
                                    <ul class="nav nav-pills">
                                        <li class="nav-item nav-item-borders py-2">
                                            <a href="tel:+48517075702"><i class="fab fa-whatsapp text-4 text-color-primary" style="top: 0;"></i> +48517075702</a>
                                        </li>
                                        <li class="nav-item nav-item-borders py-2 d-none d-md-inline-flex">
                                            <a href="mailto:adrian.stolarski@gmail.cim"><i class="far fa-envelope text-4 text-color-primary" style="top: 1px;"></i>adrian.stolarski@gmail.com</a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="header-container header-container-height-sm container container-lg">
                <div class="header-row">
                    <div class="header-column">
                        <div class="header-row">
                            <div class="header-logo">
                                <a href="/">
                                    <img alt="SilenceOntheWire" width="200" height="96" data-sticky-width="164" data-sticky-height="80" src="{{ asset('porto/img/logo-ciemne.png') }}">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="header-column justify-content-end">
                        <div class="header-row">
                            <div class="header-nav header-nav-links header-nav-dropdowns-dark header-nav-light-text order-2 order-lg-1">
                                <div class="header-nav-main header-nav-main-mobile-dark header-nav-main-square header-nav-main-dropdown-no-borders header-nav-main-effect-2 header-nav-main-sub-effect-1">
                                    <nav class="collapse">
                                        @include('site.menu')
                                    </nav>
                                </div>
                                <button class="btn header-btn-collapse-nav" data-toggle="collapse" data-target=".header-nav-main nav">
                                    <i class="fas fa-bars"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <div role="main" class="main">

        <div class="slider-container rev_slider_wrapper" style="height: 100vh;">
            <div id="revolutionSlider" class="slider rev_slider" data-version="5.4.8" data-plugin-revolution-slider data-plugin-options="{'addOnTypewriter': { 'enable': true }, 'sliderLayout': 'fullscreen', 'delay': 9000, 'gridwidth': [1410,1110,930,690], 'gridheight': 700, 'disableProgressBar': 'on', 'responsiveLevels': [4096,1422,1182,974], 'navigation' : {'arrows': { 'enable': true, 'style': 'arrows-style-1 arrows-primary' }, 'bullets': {'enable': true, 'style': 'bullets-style-1', 'h_align': 'center', 'v_align': 'bottom', 'space': 7, 'v_offset': 70, 'h_offset': 0}}}">
                <ul>
                    <li class="slide-overlay slide-overlay-level-8" data-transition="fade">
                        <img src="{{ asset('porto/img/slides/slide-corporate-14-1.jpg') }}"
                             alt=""
                             data-bgposition="center center"
                             data-bgfit="cover"
                             data-bgrepeat="no-repeat"
                             class="rev-slidebg">

                        <h1 class="tp-caption font-weight-extra-bold text-color-light"
                            data-frames='[{"delay":1000,"speed":500,"frame":"0","from":"opacity:0;x:50%;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
                            data-x="['left','left','left','center']"
                            data-y="center" data-voffset="['-85','-85','-85','-85']"
                            data-fontsize="['48','48','48','48']"
                            data-lineheight="['55','55','55','55']"
                            data-letterspacing="-1">We are the best</h1>

                        <div class="tp-caption font-weight-extra-bold text-color-light"
                             data-frames='[{"delay":500,"speed":2500,"from":"y:50px;sX:1;sY:1;opacity:0;","to":"o:1;","ease":"Power4.easeOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"}]'
                             data-type="text"
                             data-typewriter='{"lines":"and%20we%20build%20brands.,and%20we%20make%20apps.,and%20we%20are%20awesome.","enabled":"on","speed":"60","delays":"1%7C100","looped":"on","cursorType":"one","blinking":"on","word_delay":"off","sequenced":"on","hide_cursor":"off","start_delay":"1500","newline_delay":"1000","deletion_speed":"20","deletion_delay":"1000","blinking_speed":"500","linebreak_delay":"60","cursor_type":"two","background":"off"}'
                             data-x="['left','left','left','center']"
                             data-y="center" data-voffset="['-33','-33','-33','-33']"
                             data-responsive_offset="on"
                             data-width="['750','750','750','750']"
                             data-fontsize="['48','48','48','48']"
                             data-lineheight="['55','55','55','55']"
                             data-textAlign="['left','left','left','center']">and we create websites.</div>

                        <div class="tp-caption font-weight-light text-color-light ws-normal"
                             data-frames='[{"from":"opacity:0;","speed":300,"to":"o:1;","delay":2300,"split":"chars","splitdelay":0.05,"ease":"Power2.easeInOut"},{"delay":"wait","speed":1000,"to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]'
                             data-x="['left','left','left','center']"
                             data-y="center" data-voffset="['33','33','33','33']"
                             data-width="['900','900','900','900']"
                             data-fontsize="['18','18','18','22']"
                             data-lineheight="['26','26','26','26']"
                             data-textAlign="['left','left','left','center']">We guarantee you great success.</div>

                        <a class="tp-caption btn btn-primary font-weight-bold rounded"
                           href="/services"
                           data-frames='[{"delay":3000,"speed":2000,"frame":"0","from":"y:50%;opacity:0;","to":"y:0;o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
                           data-x="['left','left','left','center']"
                           data-y="center" data-voffset="['103','103','103','140']"
                           data-paddingtop="['16','16','16','24']"
                           data-paddingbottom="['16','16','16','24']"
                           data-paddingleft="['40','40','40','45']"
                           data-paddingright="['40','40','40','45']"
                           data-fontsize="['14','14','14','18']"
                           data-lineheight="['20','20','20','22']">How we can help you? <i class="fas fa-arrow-right ml-1"></i></a>

                    </li>
                </ul>
            </div>
        </div>

        <div class="container container-lg py-5 my-5">
            <div class="row justify-content-center">
                <div class="col-xl-9 text-center">
                    <h2 class="font-weight-bold text-11 appear-animation" data-appear-animation="fadeInUpShorter">We are SilenceOntheWire, we are Awesome</h2>
                    <p class="line-height-9 text-4 opacity-9 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200">We are a digital agency combining software house services with the best marketing and design solutions. Offering web development, graphic designing and digital marketing, we will help you in gaining a competitive edge in your field.</p>
                    <p class="line-height-9 text-4 opacity-9 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200">Tell us your story. Tell us your vision. Tell us about your projects and ideas. And let’s boost your business together.</p>
                </div>
            </div>
            <div class="row featured-boxes featured-boxes-style-4">
                <div class="col-sm-6 col-lg-3 appear-animation" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="400">
                    <div class="featured-box mb-lg-0">
                        <div class="box-content px-lg-1 px-xl-5">
                            <i class="icon-featured icons icon-bubbles text-color-primary text-11"></i>
                            <h4 class="font-weight-bold text-5 mb-3">Strategy</h4>
                            <p>We identify the best method for quick entry into the market.</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3 appear-animation" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="200">
                    <div class="featured-box mb-lg-0">
                        <div class="box-content px-lg-1 px-xl-5">
                            <i class="icon-featured icons icon-organization text-color-primary text-11"></i>
                            <h4 class="font-weight-bold text-5 mb-3">Plan Everything</h4>
                            <p>Together with the client, we define the plan for the construction of the application and write out the sprints.</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="200">
                    <div class="featured-box mb-sm-0">
                        <div class="box-content px-lg-1 px-xl-5">
                            <i class="icon-featured icons icon-cup text-color-primary text-11"></i>
                            <h4 class="font-weight-bold text-5 mb-3">Work Hard</h4>
                            <p>We deliver amazing products in a short time. The customer is always part of our team.</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="400">
                    <div class="featured-box mb-0">
                        <div class="box-content px-lg-1 px-xl-5">
                            <i class="icon-featured icons icon-heart text-color-primary text-11"></i>
                            <h4 class="font-weight-bold text-5 mb-3">Deliver Quality</h4>
                            <p>Our software is of high quality and is covered by automated tests.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <section class="section section-parallax bg-color-grey-scale-1 border-0 m-0 appear-animation" data-appear-animation="fadeIn" data-plugin-parallax data-plugin-options="{'speed': 1.5, 'parallaxHeight': '116%'}" data-image-src="">
            <div class="container container-lg">
                <div class="row justify-content-between align-items-center">
                    <div class="col-md-7 order-2 order-md-1 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="200">
                        <span class="font-weight-bold text-color-dark opacity-8 text-4">JAVA DEVELOPMENT</span>
                        <h2 class="font-weight-bold text-9 mb-4">Spring, Play, Lagom, Micronaut</h2>
                        <ul class="list list-icons pb-2 mb-4">
                            <li><i class="fas fa-caret-right top-6"></i> <span class="text-4">We create an application in the most popular frameworks.</span></li>
                            <li><i class="fas fa-caret-right top-6"></i> <span class="text-4">All applications are asynchronous and reactive.</span></li>
                            <li><i class="fas fa-caret-right top-6"></i> <span class="text-4">Everything we do contains automated test kits.</span></li>
                        </ul>
                    </div>
                    <div class="col-md-4 text-center text-md-left order-1 order-md-2 mb-5 mb-md-0 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="400">
                        <img src="{{ asset('porto/img/java.png') }}" class="img-fluid" alt="Java Software Development" />
                    </div>
                </div>
            </div>
        </section>

        <section class="section section-height-3 section-parallax bg-color-light border-0 m-0" data-plugin-parallax data-plugin-options="{'speed': 1.5, 'parallaxHeight': '100%', 'offset': 70}" data-image-src="">
            <div class="container container-lg">
                <div class="row align-items-center">
                    <div class="col-md-6 col-lg-5 col-xl-6 text-center pr-5 mb-5 mb-md-0 appear-animation" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="400">
                        <img src="{{ asset('porto/img/php.png') }}" class="img-fluid" alt="PHP SOFWARE DEVELOPMENT" />
                    </div>
                    <div class="col-md-6 col-lg-7 col-xl-6 appear-animation" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="200">
                        <span class="font-weight-bold text-color-dark opacity-8 text-4">PHP DEVELOPMENT</span>
                        <h2 class="font-weight-bold text-9 mb-4">Symfony, Zend Framework, Laravel</h2>
                        <ul class="list list-icons pb-2 mb-4">
                            <li><i class="fas fa-caret-right top-6"></i> <span class="text-4">We use Zend Framework, Symfony and Laravel.</span></li>
                            <li><i class="fas fa-caret-right top-6"></i> <span class="text-4">We create both whole applications and microservices.</span></li>
                            <li><i class="fas fa-caret-right top-6"></i> <span class="text-4">All our applications contain automated tests.</span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <section class="section section-height-3 section-parallax bg-color-grey-scale-1 border-0 m-0 appear-animation" data-appear-animation="fadeIn" data-plugin-parallax data-plugin-options="{'speed': 1.5, 'parallaxHeight': '100%', 'offset': 70}" data-image-src="">
            <div class="container container-lg">
                <div class="row justify-content-between align-items-center">
                    <div class="col-md-7 order-2 order-md-1 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="200">
                        <span class="font-weight-bold text-color-dark opacity-8 text-4">QUALITY ASSURANCE</span>
                        <h2 class="font-weight-bold text-9 mb-4">Testing and performance</h2>
                        <ul class="list list-icons pb-2 mb-4">
                            <li><i class="fas fa-caret-right top-6"></i> <span class="text-4">We create both manual and automatic test sets.</span></li>
                            <li><i class="fas fa-caret-right top-6"></i> <span class="text-4">We write performance tests, among others using JMeter.</span></li>
                            <li><i class="fas fa-caret-right top-6"></i> <span class="text-4">We place the greatest emphasis on safety.</span></li>
                        </ul>
                    </div>
                    <div class="col-md-4 text-center text-md-left order-1 order-md-2 mb-5 mb-md-0 mr-lg-5 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="400">
                        <img src="{{ asset('porto/img/quality-assurance.png') }}" class="img-fluid" alt="QUALITY ASSURANCE" />
                    </div>
                </div>
            </div>
        </section>

        <section class="section section-height-5 section-background overlay overlay-show overlay-op-9 border-0 m-0 appear-animation" data-appear-animation="fadeIn" style="background-image: url('{{ asset("porto/img/bg-corporate-14-1.jpg" ) }}'); background-size: cover; background-position: center;">
            <div class="container container-lg my-5">
                <div class="row justify-content-center">
                    <div class="col-md-10 col-xl-9 text-center">
                        <h2 class="font-weight-bold text-color-light text-11 mb-4 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200">Get in touch and learn how we can help</h2>
                        <p class="font-weight-light text-color-light line-height-9 text-4 opacity-7 mb-5 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="400">We've worked with the largest companies on the market, delivering amazing software. Today, we can do it for you.</p>
                        <a href="/services" class="d-inline-flex align-items-center btn btn-primary font-weight-semibold px-5 btn-py-3 text-3 rounded appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="550">HOW WE CAN HELP YOU? <i class="fa fa-arrow-right ml-2 pl-1 text-5"></i></a>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>


@include('site.footer')

<!-- Vendor -->
<script src="{{ asset('porto/vendor/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('porto/vendor/jquery.appear/jquery.appear.min.js') }}"></script>
<script src="{{ asset('porto/vendor/jquery.easing/jquery.easing.min.js') }}"></script>
<script src="{{ asset('porto/vendor/jquery.cookie/jquery.cookie.min.js') }}"></script>
<script src="{{ asset('porto/vendor/popper/umd/popper.min.js') }}"></script>
<script src="{{ asset('porto/vendor/bootstrap/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('porto/vendor/common/common.min.js') }}"></script>
<script src="{{ asset('porto/vendor/jquery.validation/jquery.validate.min.js') }}"></script>
<script src="{{ asset('porto/vendor/jquery.easy-pie-chart/jquery.easypiechart.min.js') }}"></script>
<script src="{{ asset('porto/vendor/jquery.gmap/jquery.gmap.min.js') }}"></script>
<script src="{{ asset('porto/vendor/jquery.lazyload/jquery.lazyload.min.js') }}"></script>
<script src="{{ asset('porto/vendor/isotope/jquery.isotope.min.js') }}"></script>
<script src="{{ asset('porto/vendor/owl.carousel/owl.carousel.min.js') }}"></script>
<script src="{{ asset('porto/vendor/magnific-popup/jquery.magnific-popup.min.js') }}"></script>
<script src="{{ asset('porto/vendor/vide/jquery.vide.min.js') }}"></script>
<script src="{{ asset('porto/vendor/vivus/vivus.min.js') }}"></script>

<!-- Theme Base, Components and Settings -->
<script src="{{ asset('porto/js/theme.js') }}"></script>

<!-- Current Page Vendor and Views -->
<script src="{{ asset('porto/vendor/rs-plugin/js/jquery.themepunch.tools.min.js') }}"></script>
<script src="{{ asset('porto/vendor/rs-plugin/js/jquery.themepunch.revolution.min.js') }}"></script>
<script src="{{ asset('porto/vendor/rs-plugin/js/jquery.themepunch.tools.min.js') }}"></script>
<script src="{{ asset('porto/vendor/rs-plugin/js/jquery.themepunch.revolution.min.js') }}"></script>
<script src="{{ asset('porto/vendor/circle-flip-slideshow/js/jquery.flipshow.min.js') }}"></script>
<script src="{{ asset('porto/js/views/view.home.js') }}"></script>

<!-- Theme Custom -->
<script src="{{ asset('porto/js/custom.js') }}"></script>

<!-- Theme Initialization Files -->
<script src="{{ asset('porto/js/theme.init.js') }}"></script>
</body>
</html>
