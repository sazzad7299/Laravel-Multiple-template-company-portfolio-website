<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="utf-8">
    <!-- <meta http-equiv="X-UA-Compatible" content="IE=edge" /> -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <title>@yield('title') -{{ config('app.name', 'Laravel') }}</title>
    <link rel="shortcut icon" href="{{asset(app('settings')['site_fav_icon'] ?? 'frontend/hotel/img/favicon.ico')}}" />

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600;700&family=Montserrat:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <link href="{{('frontend/hotel/lib/animate/animate.min.css')}}" rel="stylesheet">
    <link href="{{('frontend/hotel/lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
    <link href="{{('frontend/hotel/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css')}}" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{('frontend/hotel/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{('frontend/hotel/css/style.css')}}" rel="stylesheet">
</head>

<body>
    <div id="app">
        <div class="container-xxl bg-white p-0">
            <!-- Spinner Start -->
            <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
                <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                    <span class="sr-only">Loading...</span>
                </div>
            </div>
            @include('frontend.themes.hotel.layouts.header')
            <!-- Navbar -->
            @yield('frontend')


            @include('frontend.themes.hotel.layouts.footer')
            <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
        </div>

    </div>
    <!-- jQuery -->
    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{asset('frontend/hotel/lib/wow/wow.min.js')}}"></script>
    <script src="{{asset('frontend/hotel/lib/easing/easing.min.js')}}"></script>
    <script src="{{asset('frontend/hotel/lib/waypoints/waypoints.min.js')}}"></script>
    <script src="{{asset('frontend/hotel/lib/counterup/counterup.min.js')}}"></script>
    <script src="{{asset('frontend/hotel/lib/owlcarousel/owl.carousel.min.js')}}"></script>
    <script src="{{asset('frontend/hotel/lib/tempusdominus/js/moment.min.js')}}"></script>
    <script src="{{asset('frontend/hotel/lib/tempusdominus/js/moment-timezone.min.js')}}"></script>
    <script src="{{asset('frontend/hotel/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js')}}"></script>

    <!-- Template Javascript -->
    <script src="{{asset('frontend/hotel/js/main.js')}}"></script>
</body>

</html>
