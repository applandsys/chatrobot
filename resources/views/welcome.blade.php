<!doctype html>
<html lang="en">
<head>

    <meta charset="utf-8" />
    <title>Chat | Auto Bot </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Responsive Bootstrap 4 Chat App" name="description" />
    <meta content="Themesbrand" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ asset('assets/images/favicon.ico') }}">

    <!-- magnific-popup css -->
    <link href="{{ asset('assets/libs/magnific-popup/magnific-popup.css" rel="stylesheet') }}" type="text/css" />

    <!-- owl.carousel css -->
    <link rel="stylesheet" href="{{ asset('assets/libs/owl.carousel/assets/owl.carousel.min.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/libs/owl.carousel/assets/owl.theme.default.min.css') }}">

    <!-- Bootstrap Css -->
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" id="bootstrap-style" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="{{ asset('assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="{{ asset('assets/css/app.min.css') }}" id="app-style" rel="stylesheet" type="text/css" />
    @vite(['resources/js/app.js'])

</head>

<body>
    <div class="root-wrapper">
        <div id="app">
            <app-component/>
        </div>
    </div>
    <!-- end  layout wrapper -->

    <!-- JAVASCRIPT -->
    <script src="{{ asset('assets/libs/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/libs/simplebar/simplebar.min.js') }}"></script>
    <script src="{{ asset('assets/libs/node-waves/waves.min.js') }}"></script>

    <!-- Magnific Popup-->
    <script src="{{ asset('assets/libs/magnific-popup/jquery.magnific-popup.min.js') }}"></script>

    <!-- owl.carousel js -->
    <script src="{{ asset('assets/libs/owl.carousel/owl.carousel.min.js') }}"></script>

    <!-- page init -->
    <script src="{{ asset('assets/js/pages/index.init.js') }}"></script>

    <script src="{{ asset('assets/js/app.js') }}"></script>


</body>

</html>
