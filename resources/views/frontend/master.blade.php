<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="description" content="Orbitor,business,company,agency,modern,bootstrap4,tech,software">
    <meta name="author" content="themefisher.com">

    <title>
        @yield('title')
    </title>

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('/') }}assets/frontend/images/favicon.ico" />

    <!-- bootstrap.min css -->
    <link rel="stylesheet" href="{{ asset('/') }}assets/frontend/plugins/bootstrap/css/bootstrap.min.css">
    <!-- Icon Font Css -->
    <link rel="stylesheet" href="{{ asset('/') }}assets/frontend/plugins/icofont/icofont.min.css">
    <!-- Slick Slider  CSS -->
    <link rel="stylesheet" href="{{ asset('/') }}assets/frontend/plugins/slick-carousel/slick/slick.css">
    <link rel="stylesheet" href="{{ asset('/') }}assets/frontend/plugins/slick-carousel/slick/slick-theme.css">

    <!-- Main Stylesheet -->
    <link rel="stylesheet" href="{{ asset('/') }}assets/frontend/css/style.css">

</head>

<body id="top">

    @include('frontend.includes.header')


    @yield('content')

    
    <!-- footer Start -->
    @include('frontend.includes.footer')



    <!--
    Essential Scripts
    =====================================-->


    <!-- Main jQuery -->
    <script src="{{ asset('/') }}assets/frontend/plugins/jquery/jquery.js"></script>
    <!-- Bootstrap 4.3.2 -->
    <script src="{{ asset('/') }}assets/frontend/plugins/bootstrap/js/popper.js"></script>
    <script src="{{ asset('/') }}assets/frontend/plugins/bootstrap/js/bootstrap.min.js"></script>
    <script src="{{ asset('/') }}assets/frontend/plugins/counterup/jquery.easing.js"></script>
    <!-- Slick Slider -->
    <script src="{{ asset('/') }}assets/frontend/plugins/slick-carousel/slick/slick.min.js"></script>
    <!-- Counterup -->
    <script src="{{ asset('/') }}assets/frontend/plugins/counterup/jquery.waypoints.min.js"></script>

    <script src="{{ asset('/') }}assets/frontend/plugins/shuffle/shuffle.min.js"></script>
    <script src="{{ asset('/') }}assets/frontend/plugins/counterup/jquery.counterup.min.js"></script>
    <!-- Google Map -->
    <script src="{{ asset('/') }}assets/frontend/plugins/google-map/map.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAkeLMlsiwzp6b3Gnaxd86lvakimwGA6UA&callback=initMap">
    </script>

    <script src="{{ asset('/') }}assets/frontend/js/script.js"></script>
    <script src="{{ asset('/') }}assets/frontend/js/contact.js"></script>

</body>

</html>
