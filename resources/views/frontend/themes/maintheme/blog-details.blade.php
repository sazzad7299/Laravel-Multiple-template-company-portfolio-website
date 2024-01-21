@extends('frontend.themes.maintheme.layouts.app')
@section('title','Title')
@section('frontend')
<!-- Header Banner -->
<div class="banner-header section-padding valign bg-img bg-fixed" data-overlay-dark="4"
    data-background="{{ asset('frontend/img/slider/2.jpg') }}">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center caption mt-90">
                <h1>{{ $blog->title }}</h1>
                <h5><a href="blog.html">Blog</a> / {{ getCategoryTitleFromPostMeta($blog->category_id) }}</h5>
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
            <div class="col-md-12">
                <p>{!! $blog->description !!}</p>
            </div>
        </div>
        @if (!empty($blog->gallery))
        <h2>Gallery</h2>

        <div class="row savoye-photos">
            @foreach ($blog->gallery as $gallerys)
            <div class="col-12 col-md-4 masonry-items">
                <div class="portfolio-item-wrapp">
                    <div class="portfolio-item">
                        <div class="gallery-masonry-wrapper">
                            <a class="gallery-masonry-item-img-link d-block savoye-photo-item" data-fancybox="images"
                                href="{{asset($gallerys)}}" data-caption="Alvar Alto Museum">
                                <img class="img-fluid" src="{{ asset($gallerys)}}" alt="">
                                <div class="gallery-masonry-item-img"></div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        @endif
    </div>
</div>
@endsection