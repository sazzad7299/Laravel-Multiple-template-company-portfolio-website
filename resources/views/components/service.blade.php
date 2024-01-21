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
                    @foreach($services as $service)
                    <div class="square-flip">
                        <div class="square bg-img" data-background="{{asset('frontend/img/services/1.jpg')}}">
                            <div class="square-container d-flex align-items-end justify-content-end">
                                <div class="box-title text-vertical">
                                    <h4>{{ getCategoryTitleFromPostMeta($service->category->meta_value) }}</h4>
                                </div>
                            </div>
                            <div class="flip-overlay"></div>
                        </div>
                        <div class="square2">
                            <div class="square-container2">
                                <h4>{{ getCategoryTitleFromPostMeta($service->category->meta_value) }}</h4>
                                <p>{{ $service->description }}</p>
                                <div class="btn-line"><a href="{{ route('serviceDetails',$service->slug) }}">Read more</a></div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>