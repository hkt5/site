<!DOCTYPE html>
<html>
<head>

    <!-- Basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>SilenceOntheWire - Software House</title>

    <meta name="description" content="IT Outsourcing Without Limits - We provide our customers with IT services developed during many years of experience in the IT industry.">
    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('porto/img/favicon.ico') }}" type="image/x-icon" />
    <link rel="apple-touch-icon" href="{{ asset('porto/img/apple-touch-icon.png') }}">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, shrink-to-fit=no">

    <!-- Web Fonts  -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800%7CShadows+Into+Light" rel="stylesheet" type="text/css">

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

    <!-- Demo CSS -->


    <!-- Skin CSS -->
    <link rel="stylesheet" href="{{ asset('porto/css/skins/default.css') }}">

    <!-- Theme Custom CSS -->
    <link rel="stylesheet" href="{{ asset('porto/css/custom.css') }}">

    <!-- Head Libs -->
    <script src="{{ asset('porto/vendor/modernizr/modernizr.min.js') }}"></script>

</head>
<body>

<div class="body">
    <header id="header" class="header-effect-shrink" data-plugin-options="{'stickyEnabled': true, 'stickyEffect': 'shrink', 'stickyEnableOnBoxed': true, 'stickyEnableOnMobile': true, 'stickyChangeLogo': true, 'stickyStartAt': 30, 'stickyHeaderContainerHeight': 70}">
        <div class="header-body">
            <div class="header-container container">
                <div class="header-row">
                    <div class="header-column">
                        <div class="header-row">
                            <div class="header-logo">
                                <a href="index.html">
                                    <img alt="SilenceOntheWire" width="200" height="96" data-sticky-width="164" data-sticky-height="80" src="{{ asset('porto/img/logo-jasne.png') }}">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="header-column justify-content-end">
                        <div class="header-row">
                            <div class="header-nav header-nav-line header-nav-top-line header-nav-top-line-with-border order-2 order-lg-1">
                                <div class="header-nav-main header-nav-main-square header-nav-main-effect-2 header-nav-main-sub-effect-1">
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

        <section class="page-header page-header-modern page-header-background page-header-background-md parallax overlay overlay-color-dark overlay-show overlay-op-5 mt-0" data-plugin-parallax data-plugin-options="{'speed': 1.2}" data-image-src="{{ asset('porto/img/page-header/page-header-parallax.jpg') }}">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 order-2 order-md-1 align-self-center p-static">
                        <h1>IT Outsourcing Without <strong>Limits</strong></h1>
                        <span class="sub-title">We provide our customers with IT services developed during many years of experience in the IT industry.</span>
                    </div>
                    <div class="col-md-4 order-1 order-md-2 align-self-center">
                        <ul class="breadcrumb breadcrumb-light d-block text-md-right">
                            <li><a href="#">Home</a></li>
                            <li><a href="{{ route('services') }}">Services</a></li>
                            <li class="active">Outsourcing</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <div class="container py-2">
            <div class="row">
                <div class="col">
                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th>
                                Service
                            </th>
                            <th>
                                Price
                            </th>
                            <th>
                                Delivery time
                            </th>
                        </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    PHP Microservice (Symfony 3/4, Zend 3, Silex, Laravel)
                                </td>
                                <td>
                                    from 280 euros
                                </td>
                                <td>
                                    24-72 h
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Java Microservice (Play Framework, Spring Framework, Lagom Framework)
                                </td>
                                <td>
                                    from 400 euros
                                </td>
                                <td>
                                    24-72 h
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Scala Microservice (Play Framework, Lagom Framework)
                                </td>
                                <td>
                                    from 600 euros
                                </td>
                                <td>
                                    24-72 h
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Wordpress Functionality
                                </td>
                                <td>
                                    from 400 euros
                                </td>
                                <td>
                                    24-72 h
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Ecommerce Functionality (Magento 2, ShopWare)
                                </td>
                                <td>
                                    from 500 euros
                                </td>
                                <td>
                                    24-72 h
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Senior PHP Developer
                                </td>
                                <td>
                                    from 35 euros per hour
                                </td>
                                <td>
                                    24-72 h
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Senior Quality Assurance
                                </td>
                                <td>
                                    from 25 euros per hour
                                </td>
                                <td>
                                    24-72 h
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Senior Java Developer
                                </td>
                                <td>
                                    from 50 euros per hour
                                </td>
                                <td>
                                    24-72 h
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Senior Scala Developer
                                </td>
                                <td>
                                    from 50 euros per hour
                                </td>
                                <td>
                                    24-72 h
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Senior Frontend Developer (VueJs, Angular, React, React Native)
                                </td>
                                <td>
                                    from 50 euros per hour
                                </td>
                                <td>
                                    24-72 h
                                </td>
                            </tr>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <div class="container">

            <div class="row py-4">
                <div class="col-lg-7 appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="650">

                    <div class="offset-anchor" id="contact-sent"></div>


                    <form id="contactFormAdvanced" action="#contact-sent" method="POST" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" value="true" name="emailSent" id="emailSent">
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label class="required font-weight-bold text-dark text-2">Name</label>
                                <input name="name" type="text" value="" data-msg-required="Please enter your first name." maxlength="100" class="form-control" name="name" id="name" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label class="required font-weight-bold text-dark text-2">Surname</label>
                                <input name="surname" type="text" value="" data-msg-required="Please enter your last name." maxlength="100" class="form-control" name="name" id="name" required>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label class="required font-weight-bold text-dark text-2">Phone</label>
                                <input name="phone" type="text" value="" data-msg-required="Please enter your phone." maxlength="100" class="form-control" name="name" id="name" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label class="required font-weight-bold text-dark text-2">Email</label>
                                <input name="email" type="email" value="" data-msg-required="Please enter your last name." maxlength="100" class="form-control" name="name" id="name" required>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label class="required font-weight-bold text-dark text-2">LinkedIn Profile</label>
                                <input name="linked_in" type="url" value="" data-msg-required="Please enter your phone." maxlength="100" class="form-control" name="name" id="name" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label class="required font-weight-bold text-dark text-2">Github Profile</label>
                                <input name="github" type="url" value="" data-msg-required="Please enter your last name." maxlength="100" class="form-control" name="name" id="name" required>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label class="font-weight-bold text-dark text-2">I search experience</label>
                                <select data-msg-required="Please enter the experience." class="form-control" name="experience" id="eperience" required>
                                    <option value="">...</option>
                                    @foreach($data['development_languages'] as $language)
                                        <option value="{{ $language->id }}">{{ $language->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group col-md-6">
                                <label class="font-weight-bold text-dark text-2">I search skill</label>
                                <select data-msg-required="Please enter the skill." class="form-control" name="skill" id="skill" required>
                                    <option value="">...</option>
                                    @foreach($data['developer_skills'] as $skill)
                                        <option value="{{ $skill->id }}">{{ $skill->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-12">
                                <label class="font-weight-bold text-dark text-2">With salary</label>
                                <select data-msg-required="Please enter the salary." class="form-control" name="salary" id="salary" required>
                                    <option value="">...</option>
                                    @foreach($data['expected_salaries'] as $salary)
                                        <option value="{{ $salary->id }}">{{ $salary->value }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-12 mb-4">
                                <label class="required font-weight-bold text-dark text-2">Please tell me about you</label>
                                <textarea maxlength="5000" data-msg-required="Please enter your message." rows="6" class="form-control" name="message" id="message" required></textarea>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-12">
                                <hr>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-12 mb-5">
                                <input type="submit" id="contactFormSubmit" value="Send Message" class="btn btn-primary btn-modern pull-right" data-loading-text="Loading...">
                            </div>
                        </div>
                    </form>

                </div>
                <div class="col-lg-5">

                    <div class="overflow-hidden mb-1">
                        <h4 class="text-primary mb-0 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="200">IT Outsourcing Without <strong>Limits</strong></h4>
                    </div>
                    <div class="overflow-hidden mb-3">
                        <p class="lead text-4 mb-0 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="400">We provide our customers with IT services developed during many years of experience in the IT industry.</p>
                    </div>
                    <div class="overflow-hidden">
                        <p class="mb-0 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="600">For more than 10 years we have been involved in software development in various technologies and for Customers from different industries. We have gathered experience in the area of designing, developing, testing and maintaining products. We have the ability to select and effectively apply various methodologies of software development depending on the project specifics.</p>
                    </div>

                    <div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="800">
                        <h4 class="text-primary pt-5">Our <strong>Office</strong></h4>
                        <ul class="list list-icons list-icons-style-3 mt-2">
                            <li><i class="fas fa-phone top-6"></i> <strong>Phone:</strong> (+48) 517075702</li>
                            <li><i class="fas fa-envelope top-6"></i> <strong>Email:</strong> <a href="adrian.stolarski@gmail.com">adrian.stolarski@gmail.com</a></li>
                        </ul>

                        <h4 class="text-primary pt-5">Business <strong>Hours</strong></h4>
                        <ul class="list list-icons list-dark mt-2">
                            <li><i class="far fa-clock top-6"></i> Monday - Friday - 9am to 10pm</li>
                            <li><i class="far fa-clock top-6"></i> Saturday - 9am to 5pm</li>
                            <li><i class="far fa-clock top-6"></i> Sunday - Closed</li>
                        </ul>
                    </div>

                </div>

            </div>

        </div>

    </div>

    @include('site.footer')
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
<script src="{{ asset('porto/js/views/view.contact.js') }}"></script>

<!-- Theme Custom -->
<script src="{{ asset('porto/js/custom.js') }}"></script>

<!-- Theme Initialization Files -->
<script src="{{ asset('porto/js/theme.init.js') }}"></script>


</body>
</html>

