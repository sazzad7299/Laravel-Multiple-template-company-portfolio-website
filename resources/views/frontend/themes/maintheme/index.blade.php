@extends('frontend.themes.maintheme.layouts.app')
@section('title', 'Home')
@section('frontend')
<!-- Slider -->
<header id="home" class="header slider-fade" data-scroll-index="0">
    <div class="owl-carousel owl-theme">
        <!-- The opacity on the image is made with "data-overlay-dark="number".You can change it using the numbers 0-9. -->
        @foreach ($sliders as $slider)
        <div class="text-left item bg-img" data-overlay-dark="3" data-background="{{asset($slider->feature_image)}}">
            <div class="v-middle caption">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 mt-30">
                            <div class="o-hidden">
                                <h6>{{ $slider->category->title }}</h6>
                                <h1>{{ $slider->title }}</h1>
                                <p>{{ $slider->description }}</p>
                                @if(!empty($slider->button_url))
                                <a href="{{ $slider->button_url }}" class="btn float-btn flat-btn">{{ $slider->button_text }}</a>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach

    </div>
</header>
<!-- Slider Services Box -->
<div class="slider-services-wrapper">
    <div class="slider-box-content box-up clearfix">
        <div class="row no-gutters">
            @foreach(app('categories') as $key=>$category)
            <div class="col-md-3  {{ $key == 0 ? 'offset-md-6' : '' }} ">
                <div class="slider-services-box b-right b-bottom">
                    <a href="#">
                        <div class="slider-services-box-info">
                            <img src="{{ asset($category->feature_image)}}" class="services-icon" alt="">
                            <h5>{{ $category->title }}</h5>
                        </div>
                    </a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
<!-- About -->
    <div id="about" class="about section-padding" data-scroll-index="1">
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                    <div class="section-title">{{ app('settings')['about_title'] ?? 'About Us'; }}</div>
                    <p>
                        {{ app('settings')['about_description'] ?? 'About Us'; }}
                    </p>
                </div>
                <div class="col-md-5">
                    <div class="about-img">
                        <div class="img"> <img src="{{ asset( app('settings')['about_image'] ?? 'frontend/img/about.png')}}"
                                class="img-fluid" alt=""> </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Projects -->
    <x-project :projects="$projects"></x-project>
    <x-featured :featureds="$featureds"></x-featured>
    <!-- Parallax Section -->

<!-- Services -->
   <x-service :services="$services"></x-service>
    <!-- Testiominals -->
    <x-testiominals :testiominals="$testiominals"></x-testiominals>
<!-- Team -->
    <x-team :teams="$teams"></x-team>
<!-- Image Gallery -->
    <x-portfolio :portfolios="$portfolios"></x-portfolio>

<!-- Blog -->
<x-blog :blogs="$blogs">
</x-blog>
<!-- hr -->
<hr class="line-vr-section">
<!-- Top Footer Banner -->
<div id="contact" class="topbanner-footer" data-scroll-index="9">
    <div class="section-padding banner-img valign bg-img bg-fixed" data-overlay-darkgray="1"
        data-background="{{asset('frontend/img/slider/2.jpg')}}">
        <div class="container">
            <div class="row">
                <div class="col-md-12 mb-30 text-left caption">
                    <div class="section-title">{{ app('settings')['contact_title'] }}</div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <h6>Phone</h6>
                    <h5 class="mb-30">{{ app('settings')['contact_phone'] }}</h5>

                </div>
                <div class="col-md-4">
                    <h6>Email</h6>
                    <h5 class="mb-30"> {{ app('settings')['contact_email'] }}</h5>
                    <p class="mb-30">{{ app('settings')['office_address'] }}</p>
                </div>
                <div class="col-md-3 offset-md-1">
                    <div class="vid-area">
                        <a class="play-button gallery-masonry-item-img-link d-block" data-type="iframe"
                            data-fancybox="iframe"
                            href="{{ app('settings')['g_map'] }}">
                                <circle cx="43" cy="43" r="39" stroke="#fff" stroke-width=".5"></circle>
                            </svg>
                            <svg class="circle-track">
                                <circle cx="43" cy="43" r="39" stroke="none" stroke-width="1" fill="none"></circle>
                            </svg> <span class="polygon"><i class="ti-location-pin"></i></span> </a>
                        <div class="cont mt-20 mb-30">
                            <h5>Our Location</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Footer -->

@endsection
