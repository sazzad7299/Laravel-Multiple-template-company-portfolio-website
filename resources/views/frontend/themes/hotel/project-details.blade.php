@extends('frontend.themes.maintheme.layouts.app')
@section('title',$project->title)
@section('frontend')
    <!-- Header Banner -->
    <div class="banner-header section-padding valign bg-img bg-fixed" data-overlay-dark="4"
        data-background="{{ asset($project->feature_image) }}">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center caption mt-90">
                    <h1>{{ $project->title }}</h1>
                    <h5><a href="blog.html">Project</a> / {{ getCategoryTitleFromPostMeta($project->category_id) }}</h5>
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
                    <p>{{ $project->description }}</p>
                    <div class="row align-items-stretch savoye-photos">
                        @if(!empty($project->gallery) && is_array($project->gallery))
                            @foreach($project->gallery as $gallerys)
                            <div class="col-md-4 items mb-30">
                                <a href="{{ asset($gallerys) }}" class="d-block savoye-photo-item" data-caption="Project page"
                                    data-fancybox="gallery"> <img src="{{ asset($gallerys) }}" alt="" class="img-fluid"> </a>
                            </div>
                            @endforeach
                            @endif
                    </div>
                </div>
                <!-- text -->
                <div class="col-md-4">
                    <p><b>Client : </b> {{ $project->client_name }}</p>
                    <p><b>Number of Homes : </b> {{ $project->total_home }}</p>
                    <p><b>Tenure Mix : </b> {{ $project->tenure_mix }}</p>
                    <p><b>Site Size : </b> {{ $project->site_size }}</p>
                    <p><b>Planning Approved : </b> {{ formateDate($project->date) }}</p>
                </div>
            </div>
        </div>
    </div>

@endsection
