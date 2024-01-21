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
                                <h6>{{ $slider->title }}</h6>
                                <h1>{{ $slider->title }}</h1>
                                <p>{{ $slider->description }}</p>
                                <a href="project-page.html" class="btn float-btn flat-btn">Discover</a>
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
                    <a href="architectural-design.html">
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
<!-- Parallax Section -->
<div id="parallax-section" class="parallax-header parallax-slider-fade" data-scroll-index="3">
    <div class="owl-carousel owl-theme">
        <!-- The opacity on the image is made with "data-overlay-dark="number". You can change it using the numbers 0-9. -->
        <div class="text-left item bg-img" data-overlay-dark="3"
            data-background="{{asset('frontend/img/slider/1.jpg')}}">
            <div class="v-middle caption">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8">
                            <div class="o-hidden">
                                <h6>Discover</h6>
                                <h2>Blackspace House</h2>
                                <p><a href="project-page.html"><i class="ti-location-pin"></i> North Branch, NY,
                                        United States</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="text-left item bg-img" data-overlay-dark="3"
            data-background="{{asset('frontend/img/slider/2.jpg')}}">
            <div class="v-middle caption">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8">
                            <div class="o-hidden">
                                <h6>Discover</h6>
                                <h2>One Stone House</h2>
                                <p><a href="project-page.html"><i class="ti-location-pin"></i> Princeton, NJ, United
                                        States</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="text-left item bg-img" data-overlay-dark="4"
            data-background="{{asset('frontend/img/slider/1.jpg')}}">
            <div class="v-middle caption">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8">
                            <div class="o-hidden">
                                <h6>Discover</h6>
                                <h2>Collin Bea House</h2>
                                <p><a href="project-page.html"><i class="ti-location-pin"></i> Ashburn, VA, United
                                        States</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Services -->
<div id="services" class="services-feat section-padding" data-scroll-index="4">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <div class="section-title">Our Services</div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="owl-carousel owl-theme">
                    @for($i =0; $i < 10 ; $i++) <div class="square-flip">
                        <div class="square bg-img" data-background="{{asset('frontend/img/services/1.jpg')}}">
                            <div class="square-container d-flex align-items-end justify-content-end">
                                <div class="box-title text-vertical">
                                    <h4>Architectural Design</h4>
                                </div>
                            </div>
                            <div class="flip-overlay"></div>
                        </div>
                        <div class="square2">
                            <div class="square-container2">
                                <h4>Architectural Design</h4>
                                <p>Architecture viverra tristique ustoni missten vitae diam neque nivamus aestan the
                                    atene artines arinianu ateli ine finibus viverra nec lacus. Nedana theme sea no
                                    curabit.</p>
                                <div class="btn-line"><a href="architectural-design.html">Read more</a></div>
                            </div>
                        </div>
                </div>
                @endfor
            </div>
        </div>
    </div>
</div>
</div>
<!-- Testiominals -->
<div id="testimonials" class="testimonials section-padding bg-img bg-fixed" data-overlay-dark="5"
    data-background="{{asset('frontend/img/slider/2.jpg')}}">
    <div class="container">
        <div class="row">
            <div class="owl-carousel owl-theme col-md-12">
                <div class="item-box"><span class="quote"><img src="{{ asset('frontend/img/quot.png')}}" alt=""></span>
                    <p>"Sovaye tristique usto duision vitae diamen neque nivamus aesta atene artines arinianu ateli
                        finibus viverra nec lacus. Nedana dinoz setlie suscipe none misster cuvvan tristique.
                        Developer inila duman aten elit finibus viveracus themone the dru."</p>
                    <div class="info">
                        <div class="author-img"> <img src="{{ asset('frontend/img/team/2.jpg')}}" alt=""> </div>
                        <div class="cont">
                            <h6>Olivia Brown</h6> <span>Manager at HMM Arch.</span>
                        </div>
                    </div>
                </div>
                <div class="item-box"> <span class="quote"><img src="{{ asset('frontend/img/quot.png')}}" alt=""></span>
                    <p>"Sovaye tristique usto duision vitae diamen neque nivamus aesta atene artines arinianu ateli
                        finibus viverra nec lacus. Nedana dinoz setlie suscipe none misster cuvvan tristique.
                        Developer inila duman aten elit finibus viveracus themone the dru."</p>
                    <div class="info">
                        <div class="author-img"> <img src="{{ asset('frontend/img/team/1.jpg')}}" alt=""> </div>
                        <div class="cont">
                            <h6>Tammy White</h6> <span>Director at NoArch</span>
                        </div>
                    </div>
                </div>
                <div class="item-box"> <span class="quote"><img src="{{ asset('frontend/img/quot.png')}}" alt=""></span>
                    <p>"Sovaye tristique usto duision vitae diamen neque nivamus aesta atene artines arinianu ateli
                        finibus viverra nec lacus. Nedana dinoz setlie suscipe none misster cuvvan tristique.
                        Developer inila duman aten elit finibus viveracus themone the dru."</p>
                    <div class="info">
                        <div class="author-img"> <img src="{{ asset('frontend/img/team/3.jpg')}}" alt=""> </div>
                        <div class="cont">
                            <h6>Martin Brown</h6> <span>Architect at Baeun Arch.</span>
                        </div>
                    </div>
                </div>
                <div class="item-box"> <span class="quote"><img src="{{ asset('frontend/img/quot.png')}}" alt=""></span>
                    <p>"Sovaye tristique usto duision vitae diamen neque nivamus aesta atene artines arinianu ateli
                        finibus viverra nec lacus. Nedana dinoz setlie suscipe none misster cuvvan tristique.
                        Developer inila duman aten elit finibus viveracus themone the dru."</p>
                    <div class="info">
                        <div class="author-img"> <img src="{{ asset('frontend/img/team/6.jpg')}}" alt=""> </div>
                        <div class="cont">
                            <h6>Betty Dan</h6> <span>Director at Titanic Firm</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Team -->
<div id="team" class="team section-padding" data-scroll-index="6">
    <div class="container">
        <div class="row">
            <div class="col-md-12 mb-15">
                <div class="section-title">Creative Team</div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="item toright mb-30">
                    <div class="img"> <img src="{{ asset('frontend/img/team/1.jpg')}}" alt=""> </div>
                    <div class="info valign">
                        <div class="full-width">
                            <h6>Robert Brown</h6> / <span>dipl. Arch ETH/SIA</span>
                            <p>Viverra tristique usto duis vitae diam neque sivamus aesta vazio artines aten.</p>
                            <div class="social">
                                <div class="full-width">
                                    <a href="#0" class="icon"> <i class="ti-facebook"></i> </a>
                                    <a href="#0" class="icon"> <i class="ti-twitter"></i> </a>
                                    <a href="#0" class="icon"> <i class="ti-linkedin"></i> </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="item mb-30">
                    <div class="img"> <img src="{{ asset('frontend/img/team/2.jpg')}}" alt=""> </div>
                    <div class="info valign">
                        <div class="full-width">
                            <h6>Emily Emma</h6> / <span>dipl. Arch ETH/SIA</span>
                            <p>Viverra tristique usto duis vitae diam neque sivamus aesta vazio artines aten.</p>
                            <div class="social">
                                <div class="full-width">
                                    <a href="#0" class="icon"> <i class="ti-facebook"></i> </a>
                                    <a href="#0" class="icon"> <i class="ti-twitter"></i> </a>
                                    <a href="#0" class="icon"> <i class="ti-linkedin"></i> </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="item toright mb-30">
                    <div class="img"> <img src="{{ asset('frontend/img/team/3.jpg')}}" alt=""> </div>
                    <div class="info valign">
                        <div class="full-width">
                            <h6>Benjamin Ava</h6> / <span>dipl. Arch ETH/SIA</span>
                            <p>Viverra tristique usto duis vitae diam neque sivamus aesta vazio artines aten.</p>
                            <div class="social">
                                <div class="full-width">
                                    <a href="#0" class="icon"> <i class="ti-facebook"></i> </a>
                                    <a href="#0" class="icon"> <i class="ti-twitter"></i> </a>
                                    <a href="#0" class="icon"> <i class="ti-linkedin"></i> </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="item mb-30">
                    <div class="img"> <img src="{{ asset('frontend/img/team/4.jpg')}}" alt=""> </div>
                    <div class="info valign">
                        <div class="full-width">
                            <h6>Sophia Miane</h6> / <span>dipl. Arch ETH/SIA</span>
                            <p>Viverra tristique usto duis vitae diam neque sivamus aesta vazio artines aten.</p>
                            <div class="social">
                                <div class="full-width">
                                    <a href="#0" class="icon"> <i class="ti-facebook"></i> </a>
                                    <a href="#0" class="icon"> <i class="ti-twitter"></i> </a>
                                    <a href="#0" class="icon"> <i class="ti-linkedin"></i> </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Image Gallery -->
<div id="gallery" class="section-padding" data-scroll-index="7">
    <div class="container">
        <div class="row">
            <div class="col-md-12 mb-15">
                <div class="section-title">Portfolio</div>
            </div>
        </div>
        <div class="row savoye-photos">
            <div class="col-12 col-md-4 masonry-items">
                <div class="portfolio-item-wrapp">
                    <div class="portfolio-item">
                        <div class="gallery-masonry-wrapper">
                            <a class="gallery-masonry-item-img-link d-block savoye-photo-item" data-fancybox="images"
                                href="{{asset('frontend/img/projects/1.jpg')}}" data-caption="Alvar Alto Museum">
                                <img class="img-fluid" src="{{ asset('frontend/img/projects/1.jpg')}}" alt="">
                                <div class="gallery-masonry-item-img"></div>
                                <div class="gallery-masonry-item-content">
                                    <h4 class="gallery-masonry-item-title">Alvar Alto Museum</h4>
                                    <div class="gallery-masonry-item-category">Casablanca, Morocco</div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="portfolio-item-wrapp">
                    <div class="portfolio-item">
                        <div class="gallery-masonry-wrapper">
                            <a class="gallery-masonry-item-img-link d-block savoye-photo-item" data-fancybox="images"
                                href="{{asset('frontend/img/projects/4.jpg')}}" data-caption="European Lard Station">
                                <img class="img-fluid" src="{{ asset('frontend/img/projects/4.jpg')}}" alt="">
                                <div class="gallery-masonry-item-img"></div>
                                <div class="gallery-masonry-item-content">
                                    <h4 class="gallery-masonry-item-title">European Lard Station</h4>
                                    <div class="gallery-masonry-item-category">Strasbourg, France</div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="portfolio-item-wrapp">
                    <div class="portfolio-item">
                        <div class="gallery-masonry-wrapper">
                            <a class="gallery-masonry-item-img-link d-block savoye-photo-item" data-fancybox="images"
                                href="{{asset('frontend/img/projects/2.jpg')}}" data-caption="Yabroudi Villa"> <img
                                    class="img-fluid" src="{{ asset('frontend/img/projects/2.jpg')}}" alt="">
                                <div class="gallery-masonry-item-img"></div>
                                <div class="gallery-masonry-item-content">
                                    <h4 class="gallery-masonry-item-title">Yabroudi Villa</h4>
                                    <div class="gallery-masonry-item-category">Dubai, United Arab Emirates</div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-4 masonry-items">
                <div class="portfolio-item-wrapp">
                    <div class="portfolio-item">
                        <div class="gallery-masonry-wrapper">
                            <a class="gallery-masonry-item-img-link d-block savoye-photo-item" data-fancybox="images"
                                href="{{asset('frontend/img/projects/2.jpg')}}" data-caption="Cultural Complex Centre">
                                <img class="img-fluid" src="{{ asset('frontend/img/projects/2.jpg')}}" alt="">
                                <div class="gallery-masonry-item-img"></div>
                                <div class="gallery-masonry-item-content">
                                    <h4 class="gallery-masonry-item-title">Cultural Centre</h4>
                                    <div class="gallery-masonry-item-category">Muscat, Sultanate of Oman</div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="portfolio-item-wrapp">
                    <div class="portfolio-item">
                        <div class="gallery-masonry-wrapper">
                            <a class="gallery-masonry-item-img-link d-block savoye-photo-item" data-fancybox="images"
                                href="{{asset('frontend/img/projects/5.jpg')}}" data-caption="Dalbourne Villa">
                                <img class="img-fluid" src="{{ asset('frontend/img/projects/5.jpg')}}" alt="">
                                <div class="gallery-masonry-item-img"></div>
                                <div class="gallery-masonry-item-content">
                                    <h4 class="gallery-masonry-item-title">Dalbourne Villa</h4>
                                    <div class="gallery-masonry-item-category">Guangzhou, China</div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="portfolio-item-wrapp">
                    <div class="portfolio-item">
                        <div class="gallery-masonry-wrapper">
                            <a class="gallery-masonry-item-img-link d-block savoye-photo-item" data-fancybox="images"
                                href="{{asset('frontend/img/projects/8.jpg')}}" data-caption="Amman Rotana Hotel">
                                <img class="img-fluid" src="{{ asset('frontend/img/projects/8.jpg')}}" alt="">
                                <div class="gallery-masonry-item-img"></div>
                                <div class="gallery-masonry-item-content">
                                    <h4 class="gallery-masonry-item-title">Amman Rotana Hotel</h4>
                                    <div class="gallery-masonry-item-category">Amman, Jordan</div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-4 masonry-items">
                <div class="portfolio-item-wrapp">
                    <div class="portfolio-item">
                        <div class="gallery-masonry-wrapper">
                            <a class="gallery-masonry-item-img-link d-block savoye-photo-item" data-fancybox="images"
                                href="{{asset('frontend/img/projects/3.jpg')}}" data-caption="Alvar Alto Museum">
                                <img class="img-fluid" src="{{ asset('frontend/img/projects/3.jpg')}}" alt="">
                                <div class="gallery-masonry-item-img"></div>
                                <div class="gallery-masonry-item-content">
                                    <h4 class="gallery-masonry-item-title">Alvar Alto Museum</h4>
                                    <div class="gallery-masonry-item-category">Casablanca, Morocco</div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="portfolio-item-wrapp">
                    <div class="portfolio-item">
                        <div class="gallery-masonry-wrapper">
                            <a class="gallery-masonry-item-img-link d-block savoye-photo-item" data-fancybox="images"
                                href="{{asset('frontend/img/projects/6.jpg')}}" data-caption="Dance and Music Theatre">
                                <img class="img-fluid" src="{{ asset('frontend/img/projects/6.jpg')}}" alt="">
                                <div class="gallery-masonry-item-img"></div>
                                <div class="gallery-masonry-item-content">
                                    <h4 class="gallery-masonry-item-title">Dance The Theatre</h4>
                                    <div class="gallery-masonry-item-category">Perth, Australia</div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="portfolio-item-wrapp">
                    <div class="portfolio-item">
                        <div class="gallery-masonry-wrapper">
                            <a class="gallery-masonry-item-img-link d-block savoye-photo-item" data-fancybox="images"
                                href="{{asset('frontend/img/projects/7.jpg')}}" data-caption="French Embassy"> <img
                                    class="img-fluid" src="{{ asset('frontend/img/projects/7.jpg')}}" alt="">
                                <div class="gallery-masonry-item-img"></div>
                                <div class="gallery-masonry-item-content">
                                    <h4 class="gallery-masonry-item-title">French Embassy</h4>
                                    <div class="gallery-masonry-item-category">Casablanca, Morocco</div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Blog -->
<x-blog :blogs="$blogs">
</x-blog>
<!-- hr -->
<hr class="line-vr-section">
<!-- Top Footer Banner -->
<div id="contact" class="topbanner-footer" data-scroll-index="9">
    <div class="section-padding banner-img valign bg-img bg-fixed" data-overlay-darkgray="1"
        data-background="{{asset('frontend/img/slider/1.jpg')}}">
        <div class="container">
            <div class="row">
                <div class="col-md-12 mb-30 text-left caption">
                    <div class="section-title">Contact Us</div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <h6>Phone</h6>
                    <h5 class="mb-30">+1 123-456-0606</h5>
                    <p class="mb-30">Monday - Friday: 8am - 6pm<br>Saturday - Sunday: 9am - 3pm</p>
                </div>
                <div class="col-md-4">
                    <h6>Email</h6>
                    <h5 class="mb-30">info@architecture.com</h5>
                    <p class="mb-30">24 King St, Charleston<br>SC 29401 USA</p>
                </div>
                <div class="col-md-3 offset-md-1">
                    <div class="vid-area">
                        <a class="play-button gallery-masonry-item-img-link d-block" data-type="iframe"
                            data-fancybox="iframe"
                            href="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3354.758017847153!2d-79.93420398486563!3d32.77215479154045!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x88fe7a1ae84ff639%3A0xe5c782f71924a526!2s24%20King%20St%2C%20Charleston%2C%20SC%2029401%2C%20USA!5e0!3m2!1sen!2str!4v1631170502143!5m2!1sen!2str">
                            <svg class="circle-fill">
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