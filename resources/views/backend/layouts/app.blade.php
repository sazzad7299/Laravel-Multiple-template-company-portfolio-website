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
            <!--breadcrumb-->
            <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
                <div class="breadcrumb-title pe-3">Pages</div>
                <div class="ps-3">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb mb-0 p-0">
                            <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">Blank Page</li>
                        </ol>
                    </nav>
                </div>
                <div class="ms-auto">
                    <div class="btn-group">
                        <button type="button" class="btn btn-primary">Settings</button>
                        <button type="button"
                            class="btn btn-primary split-bg-primary dropdown-toggle dropdown-toggle-split"
                            data-bs-toggle="dropdown"> <span class="visually-hidden">Toggle Dropdown</span>
                        </button>
                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg-end"> <a class="dropdown-item"
                                href="javascript:;">Action</a>
                            <a class="dropdown-item" href="javascript:;">Another action</a>
                            <a class="dropdown-item" href="javascript:;">Something else here</a>
                            <div class="dropdown-divider"></div> <a class="dropdown-item" href="javascript:;">Separated
                                link</a>
                        </div>
                    </div>
                </div>
            </div>
            <!--end breadcrumb-->

           

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