<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>

    <!-- Basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>SilenceOnTheWire - fastdata software house</title>

    <meta name="keywords" content="php, laravel, lumen, symfony, zend3, jekyll, java, play framework" />
    <meta name="description" content="We create great solutions adapted to your needs in the fields of web and mobile development, creative designing and strong marketing. We create brands and content, we build products and websites, we strategize and brainstorm over your business.">

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

<header id="header" data-plugin-options="{'stickyEnabled': true, 'stickyEnableOnBoxed': true, 'stickyEnableOnMobile': true, 'stickyStartAt': 45, 'stickySetTop': '-45px', 'stickyChangeLogo': true}">
    <div class="header-body">
        <div class="header-container container">
            <div class="header-row">
                <div class="header-column">
                    <div class="header-row">
                        <div class="header-logo">
                            <a href="/">
                                <img alt="SilenceOntheWire" width="200" height="96" data-sticky-width="164" data-sticky-height="80" src="{{ asset('porto/img/logo-jasne.png') }}">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="header-column justify-content-end">
                    <div class="header-row pt-3">
                        <nav class="header-nav-top">
                            <ul class="nav nav-pills">
                                <li class="nav-item nav-item-anim-icon d-none d-md-block">
                                    <a class="nav-link" href=""><i class="fas fa-angle-right"></i> Contact Us</a>
                                </li>
                                <li class="nav-item nav-item-left-border nav-item-left-border-remove nav-item-left-border-md-show">
                                    <span class="ws-nowrap"><i class="fas fa-phone"></i> </span>
                                </li>
                            </ul>
                        </nav>
                    </div>
                    <div class="header-row">
                        <div class="header-nav pt-1">
                            <div class="header-nav-main header-nav-main-effect-1 header-nav-main-sub-effect-1">
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
    <section class="page-header page-header-modern bg-color-light-scale-1 page-header-md">
        <div class="container">
            <div class="row">


                <div class="col-md-8 order-2 order-md-1 align-self-center p-static">
                    <h1 class="text-dark">Our <strong>Services</strong></h1>
                    <span class="sub-title text-dark">We Are Here To Help You</span>
                </div>


                <div class="col-md-4 order-1 order-md-2 align-self-center">
                    <ul class="breadcrumb d-block text-md-right">
                        <li><a href="/">Home</a></li>
                        <li class="active">Services</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <div class="container py-4">

        <div class="row justify-content-center pt-4 mt-5 mb-5">
            <div class="col-lg-8 text-center">
                <div class="overflow-hidden mb-3">
                    <h2 class="font-weight-bold mb-0 appear-animation" data-appear-animation="maskUp">Your ideas start to live thanks to us!</h2>
                </div>
                <div class="overflow-hidden mb-3">
                    <p class="lead mb-0 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="200">We create great solutions adapted to your needs in the fields of web and mobile development, creative designing and strong marketing. We create brands and content, we build products and websites, we strategize and brainstorm over your business.</p>
                    <p class="lead mb-0 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="200">Whatever your vision is we can make it alive. Looking for complex services? You’re in a right place.</p>
                </div>
            </div>
        </div>

        <div class="row py-3 justify-content-center">
            <div class="col-sm-8 col-md-4 mb-4 mb-md-0 appear-animation" data-appear-animation="fadeIn">
                <article>
                    <div class="row">
                        <div class="col">
                            <a href="#" class="text-decoration-none">
                                <img src="{{ asset('porto/img/java.png') }}" class="img-fluid hover-effect-2 mb-3" alt="" />
                            </a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <h4 class="mb-0"><a href="#" class="text-2 text-uppercase font-weight-bold pt-2 d-block text-dark text-decoration-none">Java Development</a></h4>
                            <p class="mb-2 lead text-4">Spring, Play, Lagom, Micronaut</p>
                            <p class="text-2">Companies turn to Java for its stability, flexibility and cross-platform opportunities. At SilenceOntheWire, we provide Java software development services to provide our clients with high-quality and fail-safe applications. The SilenceOntheWire custom software development teams have sound experience in Java technology and use its vast knowledge to deliver a wide range of software solutions.</p>
                        </div>
                    </div>
                </article>
            </div>
            <div class="col-sm-8 col-md-4 mb-4 mb-md-0 appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="250">
                <article>
                    <div class="row">
                        <div class="col">
                            <a href="#" class="text-decoration-none">
                                <img src="{{ asset('porto/img/new-php.png') }}" class="img-fluid hover-effect-2 mb-3" alt="" width="750" height="500" />
                            </a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <h4 class="mb-0"><a href="#" class="text-2 text-uppercase font-weight-bold pt-2 d-block text-dark text-decoration-none">PHP Development</a></h4>
                            <p class="mb-2 lead text-4">Symfony 3/4, Laravel, Zend Framework 3</p>
                            <p class="text-2">SilenceOtheWire has profound experience designing, building and deploying fault-tolerant PHP solutions for companies across a variety of industries including healthcare, finance, edutech, manufacturing, transportation and media. Our core PHP development expertise falls into two major categories: custom web applications and powerful backends.</p>
                        </div>
                    </div>
                </article>
            </div>
            <div class="col-sm-8 col-md-4 appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="500">
                <article>
                    <div class="row">
                        <div class="col">
                            <a href="#" class="text-decoration-none">
                                <img src="{{ asset('porto/img/quality-assurance.png') }}" class="img-fluid hover-effect-2 mb-3" alt="" />
                            </a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <h4 class="mb-0"><a href="#" class="text-2 text-uppercase font-weight-bold pt-2 d-block text-dark text-decoration-none">Quality Assurance</a></h4>
                            <p class="mb-2 lead text-4">Quality Assurance, Performance and Security</p>
                            <p class="text-2">The SilenceOntheWire team is an independent software testing and process consultancy partner. We provide a combination between professional SilenceOntheWire consultants with a state of the art methodology and an unique strategy proving the quality of your products. Further, we serve as a best choice for cost-effectiveness assessor of your own business processes. </p>
                        </div>
                    </div>
                </article>
            </div>
        </div>

    </div>

    <section class="section bg-color-primary section-height-3 border-0 mt-4 mb-0">
        <div class="container">

            <div class="row">
                <div class="col-md-10 py-3 mx-md-auto">
                    <div class="row pt-2 clearfix">
                        <div class="col-lg-6">
                            <div class="feature-box feature-box-style-2 reverse appear-animation" data-appear-animation="fadeInRightShorter">
                                <div class="feature-box-icon">
                                    <i class="icon-screen-desktop icons text-color-light"></i>
                                </div>
                                <div class="feature-box-info">
                                    <h4 class="mb-2 text-5 text-color-light">WEB DEVELOPMENT</h4>
                                    <p class="mb-4 text-color-light opacity-6">Backend ussing Laravel, Zend Framework, Symfony and frontend using Bootstrap, Angular, VueJs, React</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="feature-box feature-box-style-2 appear-animation" data-appear-animation="fadeInLeftShorter">
                                <div class="feature-box-icon">
                                    <i class="icon-screen-smartphone icons text-color-light"></i>
                                </div>
                                <div class="feature-box-info">
                                    <h4 class="mb-2 text-5 text-color-light">MOBILE APP DEVELOPMENT</h4>
                                    <p class="mb-4 text-color-light opacity-6">Android native application, Phone, Tablet, TV, iPhone, iPad. Hybrid Android app using phonegap, Xamarin.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="feature-box feature-box-style-2 reverse appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="200">
                                <div class="feature-box-icon">
                                    <i class="icon-globe icons text-color-light"></i>
                                </div>
                                <div class="feature-box-info">
                                    <h4 class="mb-2 text-5 text-color-light">ERP AND CMS DEVELOPMENT</h4>
                                    <p class="mb-4 text-color-light opacity-6">Enterprise software development using: .Net framework, Spring framework, Play framework, Lagoom, Micronaut cloud technology.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="feature-box feature-box-style-2 appear-animation" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="200">
                                <div class="feature-box-icon">
                                    <i class="icon-screen-tablet icons text-color-light"></i>
                                </div>
                                <div class="feature-box-info">
                                    <h4 class="mb-2 text-5 text-color-light">GAME DEVELOPMENT</h4>
                                    <p class="mb-4 text-color-light opacity-6">Cocos2dx game development. 3D mobile game development using Unity3D, Unreal 4, Irrlicht, Box2d, Bullet. </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="feature-box feature-box-style-2 reverse appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="400">
                                <div class="feature-box-icon">
                                    <i class="icon-rocket icons text-color-light"></i>
                                </div>
                                <div class="feature-box-info">
                                    <h4 class="mb-2 text-5 text-color-light">SOFTWARE TESTING</h4>
                                    <p class="mb-0 text-color-light opacity-6">We have a bench team of talented Software Test Engineers available for your project with as little as one day’s notice.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="feature-box feature-box-style-2 appear-animation" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="400">
                                <div class="feature-box-icon">
                                    <i class="icon-cloud-upload icons text-color-light"></i>
                                </div>
                                <div class="feature-box-info">
                                    <h4 class="mb-2 text-5 text-color-light">IOT</h4>
                                    <p class="mb-0 text-color-light opacity-6">Big Data, Wearable Apps, WebOS Apps. Using Arduino, Rasberry Pi devices, embedded device and microcontroller.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </section>

    <div class="container">
        <div class="row justify-content-center pt-4 mt-5 mb-5">
            <div class="col-lg-8 text-center">
                <div class="overflow-hidden mb-3">
                    <h2 class="font-weight-bold mb-0 appear-animation" data-appear-animation="maskUp">Learn more about our process</h2>
                </div>
                <div class="overflow-hidden mb-3">
                    <p class="lead mb-0 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="200">We are a skilled team of professionals in the field of software development. We use our passion for development to deliver the best software applications. With the combination of technology, know-how and great communication, we are able to create complete solutions for our clients.</p>
                </div>
            </div>
        </div>
        <div class="row justify-content-center pb-5">

            <div class="col-md-7 col-lg-4 mb-5 mb-lg-0">
                <div class="circular-bar mb-lg-5 appear-animation" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="600">
                    <div class="circular-bar-chart" data-percent="35" data-plugin-options="{'barColor': '#0088cc'}">
                        <strong class="mt-2 text-color-primary">35%</strong>
                    </div>
                </div>
                <div class="col text-center appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="900">
                    <h4 class="font-weight-bold">Meetings</h4>
                </div>
            </div>

            <div class="col-md-7 col-lg-4 mb-5 mb-lg-0">
                <div class="circular-bar mb-lg-5 appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="400">
                    <div class="circular-bar-chart" data-percent="65" data-plugin-options="{'barColor': '#0088cc'}">
                        <strong class="mt-2 text-color-primary">65%</strong>
                    </div>
                </div>
                <div class="col text-center appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="900">
                    <h4 class="font-weight-bold">Execute</h4>
                </div>
            </div>

            <div class="col-md-7 col-lg-4">
                <div class="circular-bar mb-lg-5 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="600">
                    <div class="circular-bar-chart" data-percent="100" data-plugin-options="{'barColor': '#0088cc'}">
                        <strong class="mt-2 text-color-primary">100%</strong>
                    </div>
                </div>
                <div class="col text-center appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="900">
                    <h4 class="font-weight-bold">Delivery</h4>
                </div>
            </div>

        </div>

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
</html>
