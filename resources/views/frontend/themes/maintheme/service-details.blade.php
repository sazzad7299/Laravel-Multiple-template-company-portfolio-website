@extends('frontend.themes.maintheme.layouts.app')
@section('title',$service->title)
@section('frontend')
    <!-- Header Banner -->
    <div class="banner-header section-padding valign bg-img bg-fixed" data-overlay-dark="4"
        data-background="{{ asset($service->feature_image) }}">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center caption mt-90">
                    <h1>{{ $service->title }}</h1>
                    <h5><a href="blog.html">service</a> / {{ getCategoryTitleFromPostMeta($service->category_id) }}</h5>
                </div>
            </div>
        </div>
    </div>
    <!-- hr -->
    <hr class="line-vr-section">
    <!-- Post -->
    <div class="section-padding">
        <div class="container">
            <div class="row">
                <!-- image -->
                <div class="col-md-8">
                    <p>{{ $service->description }}</p>
                    <div class="row align-items-stretch savoye-photos">
                        @if(!empty($service->gallery) && is_array($service->gallery))
                            @foreach($service->gallery as $gallerys)
                            <div class="col-md-4 items mb-30">
                                <a href="{{ asset($gallerys) }}" class="d-block savoye-photo-item" data-caption="service page"
                                    data-fancybox="gallery"> <img src="{{ asset($gallerys) }}" alt="" class="img-fluid"> </a>
                            </div>
                            @endforeach
                            @endif
                    </div>
                    <p><b>Planning Approved : </b> {{ formateDate($service->date) }}</p>
                </div>
                <!-- text -->
                <div class="col-md-4 sidebar-side">
                    <aside class="sidebar blog-sidebar">
                        <!-- <div class="sidebar-widget services">
                                <div class="widget-inner">
                                    <div class="sidebar-title">
                                        <h5>All Services</h5>
                                    </div>
                                    <ul>
                                        <li><a href="architectural-design.html">Architectural Design</a></li>
                                        <li><a href="interior-design.html">Interior Design</a></li>
                                        <li class="active"><a href="urban-design.html">Urban Design</a></li>
                                        <li><a href="3d-modelling.html">3D Modelling</a></li>
                                        <li><a href="decor-plan.html">Decor Plan</a></li>
                                        <li><a href="planning.html">Planning</a></li>
                                    </ul>
                                </div>
                                </div> -->
                        <div class="sidebar-widget help">
                            <div class="widget-inner">
                                <div class="sidebar-title">
                                    <h5>{{ app('settings')['lets_talk'] ?? 'Lets talsk' }}</h5>
                                </div>
                                <p>{{ app('settings')['lets_talk_description'] }}</p>
                                <div class="phone"><a href="tel:+{{ app('settings')['lets_talk_phone'] }}"><i class="icon ti-tablet"></i>{{ app('settings')['lets_talk_phone'] ?? '01786740107' }}</a></div>
                                <div class="phone"><a href="tel:+{{ app('settings')['lets_talk_phone'] }}"><i class="icon ti-email"></i>{{ app('settings')['lets_talk_email'] ?? 'exmple@gmail.com' }}</a></div>
                            </div>
                        </div>
                    </aside>
                </div>
            </div>
        </div>
    </div>
@endsection
