@extends('frontend.themes.maintheme.layouts.app')
@section('title',$gallery->title)
@section('frontend')
<!-- Header Banner -->
<div class="section-padding">
    <div class="container">
        <h4><strong>Project Name:</strong>{{ $gallery->title }}</h4>
        <button class="btn mb-2">Download Here</button>
        @if (!empty($gallery->gallery))
        <div class="row savoye-photos">
            @foreach ($gallery->gallery as $index => $gallerys)
            <div class="col-12 @if($index % 4 == 0 || $index % 4 == 3) col-md-8 @else col-md-4 @endif masonry-items">
                <div class="portfolio-item-wrapp">
                    <div class="portfolio-item">
                        <div class="gallery-masonry-wrapper">
                            <a class="gallery-masonry-item-img-link d-block savoye-photo-item" data-fancybox="images"
                                href="{{asset($gallerys)}}" data-caption="Alvar Alto Museum">
                                <img class="img-fluid" src="{{ asset($gallerys)}}" alt="" style="max-height: 310px">
                                <div class="gallery-masonry-item-img"></div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        @endif
        <div class="row">
            <div class="col-md-12">
                <h4>Description</h4>
                <p>{!! $gallery->description !!}</p>
            </div>
        </div>
    </div>

</div>
@endsection
