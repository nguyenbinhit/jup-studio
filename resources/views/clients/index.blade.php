<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <!-- Meta Tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Page Title -->
    <title>Jup - Creative Studio</title>
    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('../bootstrap-admin/images/favicon.ico') }}">
    <!-- Bundle -->
    <link rel="stylesheet" href="{{ asset('../bootstrapv2/css/bundle.min.css') }}">
    <!-- Plugin Css -->
    <link rel="stylesheet" href="{{ asset('../bootstrapv2/css/jquery.fancybox.min.css') }}">
    <link rel="stylesheet" href="{{ asset('../bootstrapv1/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('../bootstrapv1/css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('../bootstrapv2/css/swiper.min.css') }}">

    <link rel="stylesheet" href="{{ asset('../bootstrapv2/css/cubeportfolio.min.css') }}">
    <!-- Revolution Slider CSS Files -->
    <link rel="stylesheet" href="{{ asset('../bootstrapv1/css/navigation.css') }}">
    <link rel="stylesheet" href="{{ asset('../bootstrapv1/css/settings.css') }}">
    <!-- Slick CSS Files -->
    <link rel="stylesheet" href="{{ asset('../bootstrapv2/css/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('../bootstrapv2/css/slick-theme.css') }}">
    <!-- Style Sheet -->
    <link rel="stylesheet" href="{{ asset('../bootstrapv1/css/style.css') }}">
    <!-- Custom Style CSS File -->
    <link rel="stylesheet" href="{{ asset('../bootstrapv1/css/custom.css') }}">

    <!-- JavaScript -->
    <script src="{{ asset('../bootstrapv2/js/bundle.min.js') }}"></script>

    <!-- Plugin Js -->
    <script src="{{ asset('../bootstrapv2/js/jquery.fancybox.min.js') }}"></script>
    <script src="{{ asset('../bootstrapv2/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('../bootstrapv2/js/swiper.min.js') }}"></script>
    <script src="{{ asset('../bootstrapv2/js/jquery.cubeportfolio.min.js') }}"></script>
    <script src="{{ asset('../bootstrapv2/js/jquery.appear.js') }}"></script>
    <script src="{{ asset('../bootstrapv2/js/parallaxie.min.js') }}"></script>
    <script src="{{ asset('../bootstrapv2/js/wow.min.js') }}"></script>
    <!-- Owl Carousel JS File -->
    <script src="{{ asset('../bootstrapv1/js/owl.carousel.js') }}"></script>
    <!-- Slick JS File -->
    <script src="{{ asset('../bootstrapv2/js/slick.min.js') }}"></script>
    <!-- Tween Max Animation File -->
    <script src="{{ asset('../bootstrapv1/js/TweenMax.min.js') }}"></script>
    <!-- Morphtext File -->
    <script src="{{ asset('../bootstrapv1/js/morphext.min.js') }}"></script>
    <!-- REVOLUTION JS FILES -->
    <script src="{{ asset('../bootstrapv2/js/jquery.themepunch.tools.min.js') }}"></script>
    <script src="{{ asset('../bootstrapv2/js/jquery.themepunch.revolution.min.js') }}"></script>
    <!-- SLIDER REVOLUTION EXTENSIONS -->
    <script src="{{ asset('../bootstrapv2/js/extensions/revolution.extension.actions.min.js') }}"></script>
    <script src="{{ asset('../bootstrapv2/js/extensions/revolution.extension.carousel.min.js') }}"></script>
    <script src="{{ asset('../bootstrapv2/js/extensions/revolution.extension.kenburn.min.js') }}"></script>
    <script src="{{ asset('../bootstrapv2/js/extensions/revolution.extension.layeranimation.min.js') }}"></script>
    <script src="{{ asset('../bootstrapv2/js/extensions/revolution.extension.migration.min.js') }}"></script>
    <script src="{{ asset('../bootstrapv2/js/extensions/revolution.extension.navigation.min.js') }}"></script>
    <script src="{{ asset('../bootstrapv2/js/extensions/revolution.extension.parallax.min.js') }}"></script>
    <script src="{{ asset('../bootstrapv2/js/extensions/revolution.extension.slideanims.min.js') }}"></script>
    <script src="{{ asset('../bootstrapv2/js/extensions/revolution.extension.video.min.js') }}"></script>

    <!-- custom script -->
    <script src="{{ asset('../bootstrapv1/js/script.js') }}"></script>

    <!-- modal -->
    <!-- Custom box css -->
    <link href="{{ asset('../bootstrap-admin/libs/custombox/custombox.min.css') }}" rel="stylesheet" type="text/css">
    <!-- Modal-Effect -->
    <script src="{{ asset('../bootstrap-admin/libs/custombox/custombox.min.js') }}"></script>
    <!-- end modal -->
    <link rel="shortcut icon" href="assets\images\favicon.ico">

</head>

<body data-spy="scroll" data-target=".navbar-nav" data-offset="90">

    @include('clients.body.loader')

    @include('clients.body.header')

    @yield('client-main')

    @include('clients.body.about-start')

    @include('clients.body.about-boxes-start')

    @include('clients.body.team')

    @include('clients.body.quote')

    @include('clients.body.work-start')

    @include('clients.body.pricing')

    @include('clients.body.client-start')

    {{-- @include('clients.body.blog') --}}
    <!--TODO: remove page blog-->

    @include('clients.body.contact')

    @include('clients.body.footer')

    <!--Animated Cursor-->
    <div id="animated-cursor">
        <div id="cursor">
            <div id="cursor-loader"></div>
        </div>
    </div>
    <!--Animated Cursor End-->
    @stack('script')
</body>

</html>
