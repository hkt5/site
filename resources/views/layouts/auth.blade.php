<!doctype html>
<html class="fixed" lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>

    <!-- Basic -->
    <meta charset="UTF-8">

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <meta name="keywords" content="HTML5 backend Template" />
    <meta name="description" content="Porto backend - Responsive HTML5 Template">
    <meta name="author" content="okler.net">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

    <!-- Web Fonts  -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800|Shadows+Into+Light" rel="stylesheet" type="text/css">

    <!-- Vendor CSS -->
    <link rel="stylesheet" href="{{ asset('backend/vendor/bootstrap/css/bootstrap.css') }}" />
    <link rel="stylesheet" href="{{ asset('backend/vendor/animate/animate.css') }}">

    <link rel="stylesheet" href="{{ asset('backend/vendor/font-awesome/css/all.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('backend/vendor/magnific-popup/magnific-popup.css') }}" />
    <link rel="stylesheet" href="{{ asset('backend/vendor/bootstrap-datepicker/css/bootstrap-datepicker3.css') }}" />

    <!-- Theme CSS -->
    <link rel="stylesheet" href="{{ asset('backend/css/theme.css') }}" />

    <!-- Skin CSS -->
    <link rel="stylesheet" href="{{ asset('backend/css/skins/default.css') }}" />

    <!-- Theme Custom CSS -->
    <link rel="stylesheet" href="{{ asset('backend/css/custom.css') }}">

    <!-- Head Libs -->
    <script src="{{ asset('backend/vendor/modernizr/modernizr.js') }}"></script>

</head>
<body>
<!-- start: page -->
<section class="body-sign">
    <div class="center-sign">
        <a href="/" class="logo float-left">
            <img src="{{ asset('porto/img/logo.png') }}" height="54" alt="SilenceOntheWire" />
        </a>

        @yield('content')

        <p class="text-center text-muted mt-3 mb-3">&copy; Copyright 2019. All Rights Reserved.</p>
    </div>
</section>
<!-- end: page -->

<!-- Vendor -->
<script src="{{ asset('backend/vendor/jquery/jquery.js') }}"></script>
<script src="{{ asset('backend/vendor/jquery-browser-mobile/jquery.browser.mobile.js') }}"></script>
<script src="{{ asset('backend/vendor/popper/umd/popper.min.js') }}"></script>
<script src="{{ asset('backend/vendor/bootstrap/js/bootstrap.js') }}"></script>
<script src="{{ asset('backend/vendor/bootstrap-datepicker/js/bootstrap-datepicker.js') }}"></script>
<script src="{{ asset('backend/vendor/common/common.js') }}"></script>
<script src="{{ asset('backend/vendor/nanoscroller/nanoscroller.js') }}"></script>
<script src="{{ asset('backend/vendor/magnific-popup/jquery.magnific-popup.js') }}"></script>
<script src="{{ asset('backend/vendor/jquery-placeholder/jquery.placeholder.js') }}"></script>

<!-- Theme Base, Components and Settings -->
<script src="{{ asset('backend/js/theme.js') }}"></script>

<!-- Theme Custom -->
<script src="{{ asset('backend/js/custom.js') }}"></script>

<!-- Theme Initialization Files -->
<script src="{{ asset('backend/js/theme.init.js') }}"></script>

</body>
</html>
