<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>

    <!-- Basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>SilenceOnTheWire - php software house</title>

    <meta name="keywords" content="php, laravel, lumen, symfony, zend3, jekyll, java, play framework" />
    <meta name="description" content="SilenceOntheWire has profound experience designing, building and deploying fault-tolerant PHP solutions for companies across a variety of industries including healthcare, finance, edutech, manufacturing, transportation and media.">

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
                            <a href="">
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
                    <h1 class="text-dark">PHP <strong>Software Development</strong></h1>
                    <span class="sub-title text-dark">Create high-performance PHP applications on time, on budget and in line with your business requirements</span>
                </div>


                <div class="col-md-4 order-1 order-md-2 align-self-center">
                    <ul class="breadcrumb d-block text-md-right">
                        <li><a href="/index">Home</a></li>
                        <li><a href="/services">Services</a> </li>
                        <li class="active">PHP Software Development</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <div class="container py-4">

        <div class="row justify-content-center pt-4 mt-5 mb-5">
            <div class="col-lg-8 text-center">
                <div class="overflow-hidden mb-3">
                    <h2 class="font-weight-bold mb-0 appear-animation" data-appear-animation="maskUp">Full-scale PHP Development Services to Give Your Company a Competitive Edge</h2>
                </div>
                <div class="overflow-hidden mb-3">
                    <p class="lead mb-0 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="200">SilenceOntheWire has profound experience designing, building and deploying fault-tolerant PHP solutions for companies across a variety of industries including healthcare, finance, edutech, manufacturing, transportation and media. Our core PHP development expertise falls into two major categories:</p>
                </div>
            </div>
        </div>

        <section class="section bg-color-grey section-height-3 border-0 mt-5 mb-0">
            <div class="container">

                <div class="row">
                    <div class="col">

                        <div class="row align-items-center pt-4 appear-animation" data-appear-animation="fadeInLeftShorter">
                            <div class="col-md-4 mb-4 mb-md-0">
                                <img class="img-fluid scale-2 pr-5 pr-md-0 my-4" src="{{ asset('porto/img/layout-styles.png') }}" alt="layout styles" />
                            </div>
                            <div class="col-md-8 pl-md-5">
                                <h2 class="font-weight-normal text-6 mb-3"><strong class="font-weight-extra-bold">Custom</strong> Web Applications</h2>
                                <p class="text-4">We implement reliable PHP development tools to create stylish online presence solutions, enterprise-grade applications enabling workflow automation and effective digital asset management and IoT dashboards supporting real-time sensor data processing and visualization. The SilenceOntheWire team also assists companies in replatforming legacy software and upgrading existing web apps to a newer version of PHP-based frameworks and content management systems.</p>
                            </div>
                        </div>

                        <hr class="solid my-5">

                        <div class="row align-items-center pt-5 pb-3 appear-animation" data-appear-animation="fadeInRightShorter">
                            <div class="col-md-8 pr-md-5 mb-5 mb-md-0">
                                <h2 class="font-weight-normal text-6 mb-3"><strong class="font-weight-extra-bold">Powerful</strong> Back-Ends</h2>
                                <p class="text-4">We devise scalable back-ends for mobile applications with elaborate business logic, cloud-based infrastructure solutions supporting effective IoT implementation and custom APIs which facilitate seamless system and data integration. Besides full-scale back-end development, we offer Infrastructure audit and optimization services to create a cohesive cloud migration strategy and enhance web application performance through code review, load balancing and caching.</p>
                            </div>
                            <div class="col-md-4 px-5 px-md-3">
                                <img class="img-fluid scale-2 my-4" src="{{ asset('porto/img/style-switcher.png') }}" alt="style switcher" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </div>

    <div class="container-fluid">
        <div class="row featured-boxes-full featured-boxes-full-scale">
            <div class="col-lg-3 featured-box-full featured-box-full-primary">
                <i class="far fa-life-ring"></i>
                <h4>SOCIAL NETWORKING</h4>
                <p class="font-weight-light">SilenceOntheWire creates online communities, collaboration platforms, streaming services, contributor-driven portals and knowledge networks with social features including rankings, instant messaging, chat rooms and file sharing. Based on project requirements, our expert team will recommend appropriate back- and front-end development tools and architecture pattern (monolithic, decoupled, microservices) to amplify your content strategy, enhance user management and minimize security risks.</p>
            </div>
            <div class="col-lg-3 featured-box-full featured-box-full-primary">
                <i class="fas fa-film"></i>
                <h4>E-COMMERCE</h4>
                <p class="font-weight-light">We utilize top-grade CMS plugins and extensions (Drupal Commerce, Ubercart, WooCommerce) to build small- and medium-sized online stores with high-converting product pages and baked-in e-commerce automation and customer engagement tools. Furthermore, our e-commerce expertise covers the development and optimization of price comparison websites, online marketplaces and crowdfunding platforms based on versatile PHP frameworks including Symfony, Laravel and Zend 2, 3.</p>
            </div>
            <div class="col-lg-3 featured-box-full featured-box-full-primary">
                <i class="far fa-star"></i>
                <h4>ONLINE PRESENCE</h4>
                <p class="font-weight-light">Our PHP development expertise encompasses brand management solutions, promotional websites and enterprise portals which provide a single point of access to business data, simplify content production and editing, boast rich BI capabilities, ensure consistent cross-platform user experience and help our customers gain global exposure. Besides writing quality PHP code, we take the business-driven approach to web development to meet your company’s current and future needs.</p>
            </div>
            <div class="col-lg-3 featured-box-full featured-box-full-primary">
                <i class="far fa-edit"></i>
                <h4>DIGITAL HEALTH</h4>
                <p class="font-weight-light">From m-Health apps’ back-end logic to infrastructure solutions for HIPAA- and FDA-compliant healthcare IoT systems, we craft top-notch Digital Health software designed to facilitate healthcare delivery, improve patient education and facilitate continuous data flow between EHRs, mobile applications and connected monitoring devices. Tap into our medical software development expertise to reach your Digital Transformation objectives and boost practice efficiency!</p>
            </div>
        </div>
    </div>


    <section class="section section-primary border-top-0 mb-0">
        <div class="container">
            <div class="row counters counters-sm counters-text-light">
                <div class="col-sm-6 col-lg-3 mb-5 mb-lg-0">
                    <div class="counter">
                        <strong data-to="45" data-append="+">0</strong>
                        <label class="opacity-5 text-4 mt-1">Happy Clients</label>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3 mb-5 mb-lg-0">
                    <div class="counter">
                        <strong data-to="2973" data-append="+">0</strong>
                        <label class="opacity-5 text-4 mt-1">Answered Tickets</label>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3 mb-5 mb-sm-0">
                    <div class="counter">
                        <strong data-to="25">0</strong>
                        <label class="opacity-5 text-4 mt-1">Pre-made Demos</label>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="counter">
                        <strong data-to="30000" data-append="+">0</strong>
                        <label class="opacity-5 text-4 mt-1">Development Hours</label>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section bg-color-grey section-height-3 border-0 mt-5 mb-0">
        <div class="container">

            <div class="row">
                <div class="col">

                    <div class="row align-items-center pt-4 appear-animation" data-appear-animation="fadeInLeftShorter">
                        <div class="col-md-4 mb-4 mb-md-0">
                            <img class="img-fluid scale-2 pr-5 pr-md-0 my-4" src="{{ asset('porto/img/symfony.png') }}" alt="layout styles" />
                        </div>
                        <div class="col-md-8 pl-md-5">
                            <h2 class="font-weight-normal text-6 mb-3"><strong class="font-weight-extra-bold">Symfony</strong> Software Development Company</h2>
                            <p class="text-4">Symfony is a set of reusable PHP components, also available as a bundled-up framework, which has become very popular in the last years. Since it has a great focus on generic components and functions, with Symfony the developer can focus on the application of higher-level business features, without sacrifices in speed, reliability and successful delivery.</p>
                        </div>
                    </div>

                    <hr class="solid my-5">

                    <div class="row align-items-center pt-5 pb-3 appear-animation" data-appear-animation="fadeInRightShorter">
                        <div class="col-md-8 pr-md-5 mb-5 mb-md-0">
                            <h2 class="font-weight-normal text-6 mb-3"><strong class="font-weight-extra-bold">Laravel</strong> Software Development Company</h2>
                            <p class="text-4">Laravel advertises itself as “The PHP Framework for Web Artisans”. With a focus on useful functions and elegant reusability, Laravel makes for a great PHP framework for Rapid Application Development (RAD). It is perfect for both small-scale and larger projects, due to its powerful syntax, migration and schema building abstractions.</p>
                        </div>
                        <div class="col-md-4 px-5 px-md-3">
                            <img class="img-fluid scale-2 my-4" src="{{ asset('porto/img/laravel.png') }}" alt="style switcher" />
                        </div>
                    </div>
                    <div class="row align-items-center pt-4 appear-animation" data-appear-animation="fadeInLeftShorter">
                        <div class="col-md-4 mb-4 mb-md-0">
                            <img class="img-fluid scale-2 pr-5 pr-md-0 my-4" src="{{ asset('porto/img/zend.png') }}" alt="layout styles" />
                        </div>
                        <div class="col-md-8 pl-md-5">
                            <h2 class="font-weight-normal text-6 mb-3"><strong class="font-weight-extra-bold">Zend</strong> Software Development Company</h2>
                            <p class="text-4">The Zend framework consists of professional PHP packages with an impressive popularity: more than 88 million of installations. Its history is solid, with Zend Framework 3 being the latest addition to the family and focusing on full object-orientation, database and vendor support, as well as REST services.</p>
                        </div>
                    </div>

                    <hr class="solid my-5">

                    <div class="row align-items-center pt-5 pb-3 appear-animation" data-appear-animation="fadeInRightShorter">
                        <div class="col-md-8 pr-md-5 mb-5 mb-md-0">
                            <h2 class="font-weight-normal text-6 mb-3"><strong class="font-weight-extra-bold">Slim</strong> Software Development Company</h2>
                            <p class="text-4">Slim is a great choice for developers in need of a simple and quick solution to writing web applications and APIs. It is a true micro-framework (to the likes of Python's Flask or Javascript's ExpressJS), with lightweight routing management and support for Dependency Injection and middleware integration.</p>
                        </div>
                        <div class="col-md-4 px-5 px-md-3">
                            <img class="img-fluid scale-2 my-4" src="{{ asset('porto/img/slim.png') }}" alt="style switcher" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

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
