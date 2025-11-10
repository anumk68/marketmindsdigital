<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    {{-- <title>@yield('title', 'Marketing Minds Digital | Top Digital Marketing Agency USA')</title>
    <meta name="description" content="@yield('meta_description', 'Marketing Minds Digital is a leading digital marketing agency in the USA, specializing in
    SEO, PPC, social media, content marketing, and web development.')" /> --}}
    <title>@yield('title', 'Marketing Minds Digital | Top Digital Marketing Agency USA')</title>
    <meta name="description" content="@yield('meta_description', 'Marketing Minds Digital is a leading digital marketing agency in the USA, specializing in
    SEO, PPC, social media, content marketing, and web development.')">
    <meta name="keywords"
        content="@yield('meta_keywords', 'IT services, printer help, troubleshooting, printer repair, IT support, tech solutions')">
    <meta name="robots" content="noindex" />
    <link rel="apple-touch-icon" sizes="180x180"
        href="{{ asset('public/frontend/assets/images/favicons/apple-touch-icon.png') }}" />
    <link rel="icon" type="image/png" sizes="32x32"
        href="{{ asset('public/frontend/assets/images/favicons/favicon-32x32.png') }}" />
    <link rel="icon" type="image/png" sizes="16x16"
        href="{{ asset('public/frontend/assets/images/favicons/favicon-16x16.png') }}" />
    <link rel="manifest" href="{{ asset('public/frontend/assets/images/favicons/site.webmanifest') }}" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('public/frontend/assets/vendors/bootstrap/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('public/frontend/assets/vendors/animate/animate.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('public/frontend/assets/vendors/animate/custom-animate.css') }}" />
    <link rel="stylesheet" href="{{ asset('public/frontend/assets/vendors/fontawesome/css/all.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('public/frontend/assets/vendors/jarallax/jarallax.css') }}" />
    <link rel="stylesheet"
        href="{{ asset('public/frontend/assets/vendors/jquery-magnific-popup/jquery.magnific-popup.css') }}" />
    <link rel="stylesheet" href="{{ asset('public/frontend/assets/vendors/odometer/odometer.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('public/frontend/assets/vendors/swiper/swiper.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('public/frontend/assets/vendors/zeena-icons/style.css') }}">
    <link rel="stylesheet" href="{{ asset('public/frontend/assets/vendors/reey-font/stylesheet.css') }}" />
    <link rel="stylesheet" href="{{ asset('public/frontend/assets/vendors/owl-carousel/owl.carousel.min.css') }}" />
    <link rel="stylesheet"
        href="{{ asset('public/frontend/assets/vendors/owl-carousel/owl.theme.default.min.css') }}" />
    <link rel="stylesheet"
        href="{{ asset('public/frontend/assets/vendors/bootstrap-select/css/bootstrap-select.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('public/frontend/assets/vendors/jquery-ui/jquery-ui.css') }}" />
    <link rel="stylesheet" href="{{ asset('public/frontend/assets/css/zeena.css') }}" />
    <link rel="stylesheet" href="{{ asset('public/frontend/assets/css/zeena-responsive.css') }}" />
</head>

<body class="custom-cursor">

    @include('frontend.layouts.header')

    @yield('content')

    @include('frontend.layouts.footer')

    <script src="{{ asset('public/frontend/assets/vendors/jquery/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('public/frontend/assets/vendors/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('public/frontend/assets/vendors/jarallax/jarallax.min.js') }}"></script>
    <script src="{{ asset('public/frontend/assets/vendors/jquery-ajaxchimp/jquery.ajaxchimp.min.js') }}"></script>
    <script src="{{ asset('public/frontend/assets/vendors/jquery-appear/jquery.appear.min.js') }}"></script>
    <script src="{{ asset('public/frontend/assets/vendors/jquery-circle-progress/jquery.circle-progress.min.js') }}">
    </script>
    <script src="{{ asset('public/frontend/assets/vendors/jquery-magnific-popup/jquery.magnific-popup.min.js') }}">
    </script>
    <script src="{{ asset('public/frontend/assets/vendors/jquery-validate/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('public/frontend/assets/vendors/odometer/odometer.min.js') }}"></script>
    <script src="{{ asset('public/frontend/assets/vendors/swiper/swiper.min.js') }}"></script>
    <script src="{{ asset('public/frontend/assets/vendors/wnumb/wNumb.min.js') }}"></script>
    <script src="{{ asset('public/frontend/assets/vendors/wow/wow.js') }}"></script>
    <script src="{{ asset('public/frontend/assets/vendors/isotope/isotope.js') }}"></script>
    <script src="{{ asset('public/frontend/assets/vendors/owl-carousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('public/frontend/assets/vendors/bootstrap-select/js/bootstrap-select.min.js') }}"></script>
    <script src="{{ asset('public/frontend/assets/vendors/jquery-ui/jquery-ui.js') }}"></script>
    <script src="{{ asset('public/frontend/assets/vendors/circleType/jquery.circleType.js') }}"></script>
    <script src="{{ asset('public/frontend/assets/vendors/circleType/jquery.lettering.min.js') }}"></script>
    <script src="{{ asset('public/frontend/assets/js/zeena.js') }}"></script>
</body>

</html>
