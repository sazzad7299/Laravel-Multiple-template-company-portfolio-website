<nav class="navbar navbar-expand-lg">
    <div class="container">
        <!-- Logo -->
        <div class="logo-wrapper">
            <a class="logo" href="index.html"> <img
                    src="{{ asset(app('settings')['site_light_logo'] ?? 'frontend/img/logo-light.png')}}" alt="">
            </a>
        </div>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"> <span
                class="icon-bar"><i class="ti-menu"></i></span> </button>
        <!-- Navbar links -->
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item"><a class="nav-link active" href="#" data-scroll-nav="0">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="{{route('landing')}}#home" data-scroll-nav="1">About</a>
                </li>
                <li class="nav-item"><a class="nav-link" href="{{route('landing')}}#projects"
                        data-scroll-nav="2">Projects</a></li>
                <li class="nav-item"><a class="nav-link" href="{{route('landing')}}#services"
                        data-scroll-nav="4">Services</a></li>
                <li class="nav-item"><a class="nav-link" href="{{route('landing')}}#team" data-scroll-nav="6">Team</a>
                </li>
                <li class="nav-item"><a class="nav-link" href="{{route('landing')}}#gallery"
                        data-scroll-nav="7">Gallery</a></li>
                <li class="nav-item"><a class="nav-link" href="{{route('landing')}}#blog" data-scroll-nav="8">Blog</a>
                </li>
                <li class="nav-item"><a class="nav-link" href="{{route('landing')}}#contact"
                        data-scroll-nav="9">Contact</a></li>
            </ul>
        </div>
    </div>
</nav>