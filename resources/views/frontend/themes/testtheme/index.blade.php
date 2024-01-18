@extends('frontend.themes.maintheme.layouts.app')
@section('title', 'Home')
@section('frontend')
    <!-- Header Banner -->
    <div class="banner-header section-padding valign bg-img bg-fixed" data-overlay-darkgray="4" data-background="img/slider/1.jpg">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center caption mt-90">
                    <h1>Decor Plan</h1>
                    <h5><a href="services.html">Services</a> / Decor Plan</h5>
                </div>
            </div>
        </div>
    </div>
    <!-- hr -->
    <hr class="line-vr-section">
    <!-- Services -->
    <div class="section-padding">
        <div class="container">
            <div class="row">
               <!-- Content -->
                <div class="col-md-8">
                    <p>Decor plan nulla facilisi sedeuter nunc volutpat molli sapien veconseyer turpeutionyer mase libero sempe. Fusceler mollis augue sit amet hendrerit vestibulum. Duisteyerionyer venenatis lacus. Web gravida eros utturpis interdum ornare. Interdum et malesu they adamale fames ache urabitur arcu.</p>
                    <p>Architectural nulla facilisi sedeuter nunc volutpat molli sapien veconseyer turpeutionyer mase libero sempe. Fusce mollis augue sit amet hendrerit vestibulum. Duisteyerionyer venenatis lacus.</p>
                    <br>
                    <div class="row align-items-stretch savoye-photos">
                        <div class="col-md-6 items mb-30">
                            <a href="img/services/1.jpg" class="d-block savoye-photo-item" data-caption="Savoye Architecture" data-fancybox="gallery"> <img src="img/services/1.jpg" alt="" class="img-fluid"> </a>
                        </div>
                        <div class="col-md-6 items mb-30">
                            <a href="img/services/2.jpg" class="d-block savoye-photo-item" data-caption="Savoye Architecture" data-fancybox="gallery"> <img src="img/services/2.jpg" alt="" class="img-fluid"> </a>
                        </div>
                        <div class="col-md-12 items mb-30">
                            <a href="img/slider/3.jpg" class="d-block savoye-photo-item" data-caption="Savoye Architecture" data-fancybox="gallery"> <img src="img/slider/3.jpg" alt="" class="img-fluid"> </a>
                        </div>
                    </div>
                </div>
                <!-- Sidebar -->
                <div class="col-md-4 sidebar-side">
                    <aside class="sidebar blog-sidebar">
                        <div class="sidebar-widget services">
                            <div class="widget-inner">
                                <div class="sidebar-title">
                                    <h5>All Services</h5>
                                </div>
                                <ul>
                                    <li><a href="architectural-design.html">Architectural Design</a></li>
                                    <li><a href="interior-design.html">Interior Design</a></li>
                                    <li><a href="urban-design.html">Urban Design</a></li>
                                    <li><a href="3d-modelling.html">3D Modelling</a></li>
                                    <li class="active"><a href="decor-plan.html">Decor Plan</a></li>
                                    <li><a href="planning.html">Planning</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="sidebar-widget help">
                            <div class="widget-inner">
                                <div class="sidebar-title">
                                    <h5>Need Savoye Help?</h5>
                                </div>
                                <p>Give us a call or drop by anytime, we endeavour to answer all enquiries within 24 hours on business days. We will be happy to answer your questions. info@savoye.com</p>
                                <div class="phone"><a href="tel:+11234560606"><i class="icon ti-tablet"></i>+1 123-456-0606</a></div>
                            </div>
                        </div>
                    </aside>
                </div>
            </div>
        </div>
    </div>
    <!-- hr -->
    <hr class="line-vr-section">
    <!-- Top Footer Banner -->
    <div class="topbanner-footer">
        <div class="section-padding banner-img valign bg-img bg-fixed" data-overlay-darkgray="1" data-background="img/slider/1.jpg">
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
                        <p class="mb-30">Monday - Friday: 8am - 6pm
                            <br>Saturday - Sunday: 9am - 3pm
                        </p>
                    </div>
                    <div class="col-md-4">
                        <h6>Email</h6>
                        <h5 class="mb-30">info@architecture.com</h5>
                        <p class="mb-30">24 King St, Charleston
                            <br>SC 29401 USA
                        </p>
                    </div>
                    <div class="col-md-3 offset-md-1">
                        <div class="vid-area">
                            <a class="play-button gallery-masonry-item-img-link d-block" data-type="iframe" data-fancybox="iframe" href="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3354.758017847153!2d-79.93420398486563!3d32.77215479154045!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x88fe7a1ae84ff639%3A0xe5c782f71924a526!2s24%20King%20St%2C%20Charleston%2C%20SC%2029401%2C%20USA!5e0!3m2!1sen!2str!4v1631170502143!5m2!1sen!2str">
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

@endsection