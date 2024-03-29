<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="utf-8">
    <!-- <meta http-equiv="X-UA-Compatible" content="IE=edge" /> -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <title>@yield('title') -{{ config('app.name', 'Laravel') }}</title>
    <link rel="shortcut icon" href="{{asset(app('settings')['site_fav_icon'] ?? 'frontend/architect/img/favicon.png')}}" />
    <link rel="stylesheet" href="{{ asset('frontend/architect/css/plugins.css') }}" />
    <link rel="stylesheet" href="{{ asset('frontend/architect/css/style.css') }}" />
</head>

<body>
    <div id="app">
        <div class="preloader-bg"></div>
        <div id="preloader">
            <div id="preloader-status">
                <div class="preloader-position loader"> <span></span> </div>
            </div>
        </div>
        <!-- Progress scroll totop -->
        <div class="progress-wrap cursor-pointer">
            <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
                <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
            </svg>
        </div>
        <!-- Navbar -->
        @include('frontend.themes.maintheme.layouts.header')
        <!-- Navbar -->
        @yield('frontend')


        @include('frontend.themes.maintheme.layouts.footer')
    </div>
    <!-- jQuery -->
    <script src="{{asset('frontend/architect/js/jquery-3.6.0.min.js')}}"></script>
    <script src="{{asset('frontend/architect/js/jquery-migrate-3.0.0.min.js')}}"></script>
    <script src="{{asset('frontend/architect/js/modernizr-2.6.2.min.js')}}"></script>
    <script src="{{asset('frontend/architect/js/imagesloaded.pkgd.min.js')}}"></script>
    <script src="{{asset('frontend/architect/js/jquery.isotope.v3.0.2.js')}}"></script>
    <script src="{{asset('frontend/architect/js/popper.min.js')}}"></script>
    <script src="{{asset('frontend/architect/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('frontend/architect/js/scrollIt.min.js')}}"></script>
    <script src="{{asset('frontend/architect/js/jquery.waypoints.min.js')}}"></script>
    <script src="{{asset('frontend/architect/js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('frontend/architect/js/jquery.stellar.min.js')}}"></script>
    <script src="{{asset('frontend/architect/js/jquery.fancybox.min.js')}}"></script>
    <script src="{{asset('frontend/architect/js/YouTubePopUp.js')}}"></script>
    <script src="{{asset('frontend/architect/js/custom.js')}}"></script>
</body>

</html>
