<!doctype html>
<html lang="en" class="minimal-theme">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="{{ asset('/') }}assets/backend/assets/images/favicon-32x32.png" type="image/png" />
    <!--plugins-->
    <link href="{{ asset('/') }}assets/backend/assets/plugins/simplebar/css/simplebar.css" rel="stylesheet" />
    <link href="{{ asset('/') }}assets/backend/assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css"
        rel="stylesheet" />
    <link href="{{ asset('/') }}assets/backend/assets/plugins/vectormap/jquery-jvectormap-2.0.2.css"
        rel="stylesheet" />
    <!-- Bootstrap CSS -->
    <link href="{{ asset('/') }}assets/backend/assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="{{ asset('/') }}assets/backend/assets/css/bootstrap-extended.css" rel="stylesheet" />
    <link href="{{ asset('/') }}assets/backend/assets/css/style.css" rel="stylesheet" />
    <link href="{{ asset('/') }}assets/backend/assets/css/icons.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&amp;display=swap" rel="stylesheet">
    <link rel="stylesheet"
        href="{{ asset('/') }}assets/backend/assets/npm/bootstrap-icons%401.5.0/font/bootstrap-icons.css">

    <!-- loader-->
    <link href="{{ asset('/') }}assets/backend/assets/css/pace.min.css" rel="stylesheet" />


    <!--Theme Styles-->
    <link href="{{ asset('/') }}assets/backend/assets/css/dark-theme.css" rel="stylesheet" />
    <link href="{{ asset('/') }}assets/backend/assets/css/light-theme.css" rel="stylesheet" />
    <link href="{{ asset('/') }}assets/backend/assets/css/semi-dark.css" rel="stylesheet" />
    <link href="{{ asset('/') }}assets/backend/assets/css/header-colors.css" rel="stylesheet" />

    <title>
      @yield('title')
    </title>
</head>

<body>


    <!--start wrapper-->
    <div class="wrapper">
        <!--start top header-->
        @include('backend.includes.header')
        <!--end top header-->

        <!--start sidebar -->
        @include('backend.includes.sidebar')
        <!--start sidebar -->

        @yield('content')

    </div>
    <!--end wrapper-->


    <!-- Bootstrap bundle JS -->
    <script src="{{ asset('/') }}assets/backend/assets/js/bootstrap.bundle.min.js"></script>
    <!--plugins-->
    <script src="{{ asset('/') }}assets/backend/assets/js/jquery.min.js"></script>
    <script src="{{ asset('/') }}assets/backend/assets/plugins/simplebar/js/simplebar.min.js"></script>
    <script src="{{ asset('/') }}assets/backend/assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js"></script>
    <script src="{{ asset('/') }}assets/backend/assets/js/pace.min.js"></script>
    <script src="{{ asset('/') }}assets/backend/assets/plugins/vectormap/jquery-jvectormap-2.0.2.min.js"></script>
    <script src="{{ asset('/') }}assets/backend/assets/plugins/vectormap/jquery-jvectormap-world-mill-en.js"></script>
    <script src="{{ asset('/') }}assets/backend/assets/plugins/apexcharts-bundle/js/apexcharts.min.js"></script>
    <!--app-->
    <script src="{{ asset('/') }}assets/backend/assets/js/app.js"></script>
    <script src="{{ asset('/') }}assets/backend/assets/js/index.js"></script>

    <script>
        new PerfectScrollbar(".best-product")
        new PerfectScrollbar(".top-sellers-list")
    </script>


</body>

</html>
