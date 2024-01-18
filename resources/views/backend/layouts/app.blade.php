<!doctype html>
<html lang="en" class="light-theme">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="{{ asset('backend/assets/images/favicon-32x32.png')}}" type="image/png" />
    <!--plugins-->
    <link href="{{ asset('backend/assets/plugins/simplebar/css/simplebar.css')}}" rel="stylesheet" />
    <link href="{{ asset('backend/assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css')}}" rel="stylesheet" />
    <link href="{{ asset('backend/assets/plugins/metismenu/css/metisMenu.min.css')}}" rel="stylesheet" />
    <!-- Bootstrap CSS -->
    <link href="{{ asset('backend/assets/css/bootstrap.min.css')}}" rel="stylesheet" />
    <link href="{{ asset('backend/assets/css/bootstrap-extended.css')}}" rel="stylesheet" />
    <link href="{{ asset('backend/assets/css/style.css')}}" rel="stylesheet" />
    <link href="{{ asset('backend/assets/css/icons.css')}}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

    <!-- loader-->
    <link href="{{ asset('backend/assets/css/pace.min.css')}}" rel="stylesheet" />


    <!--Theme Styles-->
    <link href="{{ asset('backend/assets/css/dark-theme.css')}}" rel="stylesheet" />
    <link href="{{ asset('backend/assets/css/light-theme.css')}}" rel="stylesheet" />
    <link href="{{ asset('backend/assets/css/semi-dark.css')}}" rel="stylesheet" />
    <link href="{{ asset('backend/assets/css/header-colors.css')}}" rel="stylesheet" />
    <title>{{ config('app.name', 'Laravel') }}</title>

</head>

<body>

    <!--start wrapper-->
    <div class="wrapper">
        <!--start top header-->
         @include('backend.layouts.navbar')
        <!--end top header-->

       
        <!--start sidebar -->
        @include('backend.layouts.sidebar')
        <!--end sidebar -->

        <!--start content-->
        <main class="page-content">
            @yield('admin')
        </main>
        <!--end page main-->


        <!--start overlay-->
        <div class="overlay nav-toggle-icon"></div>
        <!--end overlay-->

        <!--Start Back To Top Button-->
        <a href="javaScript:;" class="back-to-top"><i class='bx bxs-up-arrow-alt'></i></a>
        <!--End Back To Top Button-->

        <!--start switcher-->
        @include('backend.layouts.switcher')
        <!--end switcher-->

    </div>
    <!--end wrapper-->


    <!-- Bootstrap bundle JS -->
    <script src="{{ asset('backend/assets/js/bootstrap.bundle.min.js')}}"></script>
    <!--plugins-->
    <script src="{{ asset('backend/assets/js/jquery.min.js')}}"></script>
    <script src="{{ asset('backend/assets/plugins/simplebar/js/simplebar.min.js')}}"></script>
    <script src="{{ asset('backend/assets/plugins/metismenu/js/metisMenu.min.js')}}"></script>
    <script src="{{ asset('backend/assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js')}}"></script>
    <script src="{{ asset('backend/assets/js/pace.min.js')}}"></script>
    <!--app-->
    <script src="{{ asset('backend/assets/js/app.js')}}"></script>


</body>

</html>