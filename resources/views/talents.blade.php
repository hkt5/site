<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>

    <!-- Basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>SilenceOnTheWire - software butik</title>

    <meta name="keywords" content="php, laravel, lumen, symfony, zend3, jekyll, java, play framework" />
    <meta name="description" content="Najlepsza firma programistyczna, tworząca niesamowite aplikacje, zapewnia niesamowite rozwiązania za pomocą PHP, MVC, Symfony, Laravel. Uzyskaj wysokiej jakości usługi po niskich kosztach.">

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

<div class="body">
    <header id="header" class="header-transparent header-effect-shrink" data-plugin-options="{'stickyEnabled': true, 'stickyEffect': 'shrink', 'stickyEnableOnBoxed': true, 'stickyEnableOnMobile': true, 'stickyChangeLogo': true, 'stickyStartAt': 30, 'stickyHeaderContainerHeight': 70}">
        <div class="header-body border-top-0 bg-dark box-shadow-none">
            <div class="header-container container">
                <div class="header-row">
                    <div class="header-column">
                        <div class="header-row">
                            <div class="header-logo">
                                <a href="/">
                                    <img alt="Porto" width="100" height="48" data-sticky-width="82" data-sticky-height="40" src="img/logo-ciemne.png">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="header-column justify-content-end">
                        <div class="header-row">
                            <div class="header-nav header-nav-links header-nav-dropdowns-dark header-nav-light-text order-2 order-lg-1">
                                <div class="header-nav-main header-nav-main-mobile-dark header-nav-main-square header-nav-main-dropdown-no-borders header-nav-main-effect-2 header-nav-main-sub-effect-1">
                                    <nav class="collapse">
                                        <ul class="nav nav-pills" id="mainNav">
                                            <li class="dropdown">
                                                <a class="dropdown-item dropdown-toggle" href="/">
                                                    Home
                                                </a>
                                            </li>
                                            <li class="dropdown">
                                                <a class="dropdown-item dropdown-toggle" href="/services">
                                                    Services
                                                </a>
                                            </li>
                                            <li class="dropdown">
                                                <a class="dropdown-item dropdown-toggle" href="/php-software-development">
                                                    PHP Software Development
                                                </a>
                                            </li>
                                            <li class="dropdown">
                                                <a class="dropdown-item dropdown-toggle" href="/talents">
                                                    Human resources
                                                </a>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                                <button class="btn header-btn-collapse-nav" data-toggle="collapse" data-target=".header-nav-main nav">
                                    <i class="fas fa-bars"></i>
                                </button>
                            </div>
                            <div class="header-nav-features header-nav-features-light header-nav-features-no-border header-nav-features-lg-show-border order-1 order-lg-2">										<div class="header-nav-feature header-nav-features-search d-inline-flex">											<a href="#" class="header-nav-features-toggle" data-focus="headerSearch"><i class="fas fa-search header-nav-top-icon"></i></a>											<div class="header-nav-features-dropdown header-nav-features-dropdown-mobile-fixed" id="headerTopSearchDropdown">												<form role="search" action="page-search-results.html" method="get">													<div class="simple-search input-group">														<input class="form-control text-1" id="headerSearch" name="q" type="search" value="" placeholder="Search...">														<span class="input-group-append">															<button class="btn" type="submit">																<i class="fa fa-search header-nav-top-icon text-color-dark"></i>															</button>														</span>													</div>												</form>											</div>										</div>									</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <div role="main" class="main">
        <section class="page-header page-header-modern page-header-background page-header-background-md overlay overlay-color-dark overlay-show overlay-op-7" style="background-image: url('{{ asset("porto/img/page-header/page-header-services.jpg") }}');">
            <div class="container">
                <div class="row mt-5">
                    <div class="col-md-12 align-self-center p-static order-2 text-center">
                        <h1 class="text-10">A Proven <strong>Recruiting</strong> Process</h1>
                        <span class="sub-title">Mathing high-quality companies with high perfomance candidates.</span>
                    </div>
                    <div class="col-md-12 align-self-center order-1">
                        <ul class="breadcrumb breadcrumb-light d-block text-center">
                            <li><a href="#">Home</a></li>
                            <li class="active">Pages</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <div class="container">
            <div class="row justify-content-center pt-8 mt-10 mb-10">
                <div class="col-lg-10 text-center">
                    <div class="overflow-hidden mb-6">
                        <h2 class="font-weight-bold mb-0 appear-animation" data-appear-animation="maskUp">We Deliver Staffing, Recruiting and Talent Management Confidence.</h2>
                    </div>
                    <div class="overflow-hidden mb-6">
                        <p class="lead mb-0 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="200">As one of the leading talent management companies in the United States, Europe, Asia and Australia, SilenceOntheWire provides staffing, recruiting, and talent management solutions to help companies and candidates grow faster and prosper.</p>
                    </div>
                    <div class="overflow-hidden mb-3">
                        <p class="lead mb-0 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="200">We deliver the highest level of confidence for high-performance companies looking for high-performance candidates and high-quality candidates seeking better career opportunities. We offer proven systems and innovative services throughout the full employee lifecycle – from talent acquisition to outplacement and everything in between.</p>
                    </div>
                </div>
            </div>

        </div>

        <div class="container py-5">

            <div class="row pb-4 mt-2">
                <div class="col-lg-3 appear-animation" data-appear-animation="fadeInRightShorter">
                    <div class="feature-box feature-box-style-2">
                        <div class="feature-box-icon">
                            <i class="icons icon-ghost text-color-primary"></i>
                        </div>
                        <div class="feature-box-info">
                            <h4 class="font-weight-bold mb-2">We’re developers who hire developers</h4>
                            <p>As software developers, we weren't happy with the current state of tech recruitment and screening. We decided it was time for a change. Our bespoke framework for hiring great software engineers and our engineering experience makes the recruitment process a breeze.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="200">
                    <div class="feature-box feature-box-style-2">
                        <div class="feature-box-icon">
                            <i class="icons icon-globe text-color-primary"></i>
                        </div>
                        <div class="feature-box-info">
                            <h4 class="font-weight-bold mb-2">We give you peace of mind</h4>
                            <p>We know how hard it can be recruiting the right candidate so we take the load off your shoulders. All we need is a detailed idea of your project and specific developer needs. Our approach is always tailored to your specific needs. </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="400">
                    <div class="feature-box feature-box-style-2">
                        <div class="feature-box-icon">
                            <i class="icons icon-clock text-color-primary"></i>
                        </div>
                        <div class="feature-box-info">
                            <h4 class="font-weight-bold mb-2">We solve the cost of hire and waste of time issue</h4>
                            <p>We carefully source our developers and evaluate their capabilities through our own screening system. Our recruitment team consists of senior software developers, that is why you can be 100% sure we know how to assess not only tech skills but also remote work abilities, and team fit.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="800">
                    <div class="feature-box feature-box-style-2">
                        <div class="feature-box-icon">
                            <i class="icons icon-doc text-color-primary"></i>
                        </div>
                        <div class="feature-box-info">
                            <h4 class="font-weight-bold mb-2">We offer a unique Interactive CV</h4>
                            <p>Get to know your next developer better using Interactive CV. Our internal tool offers in-depth data and coding results based on a real world problem that applies to your company's current project objectives. You can also get to know your next developer better thanks to an intro video recorded by them. </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container-fluid">
            <div class="row align-items-center bg-color-grey">
                <div class="col-lg-6 p-0">
                    <section class="parallax section section-parallax custom-parallax-bg-pos-left custom-sec-left h-100 m-0" data-plugin-parallax data-plugin-options="{'speed': 1.5, 'horizontalPosition': '100%'}" data-image-src="img/roadmapping.JPG" style="min-height: 315px;"></section>
                </div>
                <div class="col-lg-6 p-0">
                    <section class="section section-no-border h-100 m-0">
                        <div class="row m-0">
                            <div class="col-half-section col-half-section-left">
                                <div class="overflow-hidden">
                                    <h4 class="mb-0 appear-animation" data-appear-animation="maskUp"><a href="#" class="text-4 font-weight-bold pt-2 d-block text-dark text-decoration-none pb-1">Roadmapping Session</a></h4>
                                </div>
                                <div class="overflow-hidden mb-2">
                                    <p class="mb-0 lead text-4 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="200">Every company and every project is different. </p>
                                </div>
                                <p class="text-2 mb-0 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="400">We will talk with you about your exact environment: the technologies, the tools, the workflow, the responsibilities, and your team's culture. We will prepare the best action plan to get the person that matches your needs. You will also get actionable advice on the recruitment process and remote workflow.</p>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
            <div class="row align-items-center bg-color-grey">
                <div class="col-lg-6 order-2 order-lg-1 p-0">
                    <section class="section section-no-border h-100 m-0">
                        <div class="row justify-content-end m-0">
                            <div class="col-half-section col-half-section-right custom-text-align-right">
                                <div class="overflow-hidden">
                                    <h4 class="mb-0appear-animation" data-appear-animation="maskUp"><a href="#" class="text-4 font-weight-bold pt-2 d-block text-dark text-decoration-none pb-1">Talent Sourcing</a></h4>
                                </div>
                                <div class="overflow-hidden mb-2">
                                    <p class="mb-0 lead text-4 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="200">The found and management talents is not easy.</p>
                                </div>
                                <p class="text-2 mb-0 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="400">Thanks to our experience and extensive network of connections we know exactly where to look for talents and how to approach them. We will become an extension of your team and let candidates feel what it’s like to be a part of it.</p>
                            </div>
                        </div>
                    </section>
                </div>
                <div class="col-lg-6 order-1 order-lg-2 p-0">
                    <section class="parallax section section-parallax h-100 m-0" data-plugin-parallax data-plugin-options="{'speed': 1.5, 'horizontalPosition': '100%'}" data-image-src="{{ asset('porto/img/talent-sourcing.png') }}" style="min-height: 315px;">
                    </section>
                </div>
            </div>
            <div class="row align-items-center bg-color-grey">
                <div class="col-lg-6 p-0">
                    <section class="parallax section section-parallax custom-parallax-bg-pos-left custom-sec-left h-100 m-0" data-plugin-parallax data-plugin-options="{'speed': 1.5, 'horizontalPosition': '100%'}" data-image-src="{{ asset('porto/img/application-screening.jpg') }}" style="min-height: 315px;">
                    </section>
                </div>
                <div class="col-lg-6 p-0">
                    <section class="section section-no-border h-100 m-0">
                        <div class="row m-0">
                            <div class="col-half-section col-half-section-left">
                                <div class="overflow-hidden">
                                    <h4 class="mb-0 appear-animation" data-appear-animation="maskUp"><a href="#" class="text-4 font-weight-bold pt-2 d-block text-dark text-decoration-none pb-1">Application Screening</a></h4>
                                </div>
                                <div class="overflow-hidden mb-2">
                                    <p class="mb-0 lead text-4 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="200">CVs are a thing of the past.</p>
                                </div>
                                <p class="text-2 mb-0 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="400">We use a carefully prepared form to receive applications. The candidates fall directly into our pipeline. We guarantee at least 50 candidates interested in working with you at the end of this step.</p>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
            <div class="row align-items-center bg-color-grey">
                <div class="col-lg-6 order-2 order-lg-1 p-0">
                    <section class="section section-no-border h-100 m-0">
                        <div class="row justify-content-end m-0">
                            <div class="col-half-section col-half-section-right custom-text-align-right">
                                <div class="overflow-hidden">
                                    <h4 class="mb-0appear-animation" data-appear-animation="maskUp"><a href="#" class="text-4 font-weight-bold pt-2 d-block text-dark text-decoration-none pb-1">Tech Assessment</a></h4>
                                </div>
                                <div class="overflow-hidden mb-2">
                                    <p class="mb-0 lead text-4 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="200">We are a senior developers and we can check tech skills.</p>
                                </div>
                                <p class="text-2 mb-0 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="400">The candidates receive a carefully prepared tech assignment which checks the skills required for the specific position.</p>
                            </div>
                        </div>
                    </section>
                </div>
                <div class="col-lg-6 order-1 order-lg-2 p-0">
                    <section class="parallax section section-parallax h-100 m-0" data-plugin-parallax data-plugin-options="{'speed': 1.5, 'horizontalPosition': '100%'}" data-image-src="{{ asset('porto/img/tech-assessment.jpg') }}" style="min-height: 315px;">
                    </section>
                </div>
            </div>
            <div class="row align-items-center bg-color-grey">
                <div class="col-lg-6 p-0">
                    <section class="parallax section section-parallax custom-parallax-bg-pos-left custom-sec-left h-100 m-0" data-plugin-parallax data-plugin-options="{'speed': 1.5, 'horizontalPosition': '100%'}" data-image-src="{{ asset('porto/img/internal-interview.jpg') }}" style="min-height: 315px;">
                    </section>
                </div>
                <div class="col-lg-6 p-0">
                    <section class="section section-no-border h-100 m-0">
                        <div class="row m-0">
                            <div class="col-half-section col-half-section-left">
                                <div class="overflow-hidden">
                                    <h4 class="mb-0 appear-animation" data-appear-animation="maskUp"><a href="#" class="text-4 font-weight-bold pt-2 d-block text-dark text-decoration-none pb-1">Internal Interview</a></h4>
                                </div>
                                <p class="text-2 mb-0 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="400">We want to check how the candidates approach problem-solving as well as whether their communication and organization skills will fit your culture and the team they will be working with.</p>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
            <div class="row align-items-center bg-color-grey">
                <div class="col-lg-6 order-2 order-lg-1 p-0">
                    <section class="section section-no-border h-100 m-0">
                        <div class="row justify-content-end m-0">
                            <div class="col-half-section col-half-section-right custom-text-align-right">
                                <div class="overflow-hidden">
                                    <h4 class="mb-0appear-animation" data-appear-animation="maskUp"><a href="#" class="text-4 font-weight-bold pt-2 d-block text-dark text-decoration-none pb-1">Client Interviews</a></h4>
                                </div>
                                <p class="text-2 mb-0 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="400">After a thorough process, we introduce you to 3 – 5 carefully chosen candidates who perfectly match your needs and requirements. You will have insight into their performance with 1 – 2 sessions to go over test results and interview notes. It’s time for final interviews with your team.</p>
                            </div>
                        </div>
                    </section>
                </div>
                <div class="col-lg-6 order-1 order-lg-2 p-0">
                    <section class="parallax section section-parallax h-100 m-0" data-plugin-parallax data-plugin-options="{'speed': 1.5, 'horizontalPosition': '100%'}" data-image-src="{{ asset('porto/img/client-interviews.jpg') }}" style="min-height: 315px;">
                    </section>
                </div>
            </div>
        </div>
    </div>

        <footer id="footer">
            <div class="container">
                <div class="footer-ribbon">
                    <span>Get In Touch</span>
                </div>

            </div>
            <div class="footer-copyright">
                <div class="container py-2">
                    <div class="row py-4">
                        <div class="col-lg-1 d-flex align-items-center justify-content-center justify-content-lg-start mb-2 mb-lg-0">
                            <a href="/" class="logo pr-0 pr-lg-3">
                                <img alt="Porto Website Template" src="img/logo-ciemne.png" class="opacity-5" height="33">
                            </a>
                        </div>
                        <div class="col-lg-7 d-flex align-items-center justify-content-center justify-content-lg-start mb-4 mb-lg-0">
                            <p>© Copyright 2019. All Rights Reserved.</p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>

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
