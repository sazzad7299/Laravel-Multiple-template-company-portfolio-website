<div id="testimonials" class="testimonials section-padding bg-img bg-fixed" data-overlay-dark="5"
        data-background="{{asset('frontend/img/slider/2.jpg')}}">
        <div class="container">
            <div class="row">
                <div class="owl-carousel owl-theme col-md-12">
                    @foreach($testiominals as $testiominal)
                                    @php 
                                    $memberReview = $testiominal->postmeta->where('meta_key','details')->first();
                                    $department = $testiominal->postmeta->where('meta_key','category_id')->first();@endphp
                    <div class="item-box"><span class="quote"><img src="{{ asset('frontend/img/quot.png')}}" alt=""></span>
                        <p>"@if(!empty($memberReview)) {{ $memberReview->meta_value }} @endif"</p>
                        <div class="info">
                            <div class="author-img"> <img src="{{ asset($testiominal->feature_image)}}" alt=""> </div>
                            <div class="cont">
                                <h6>{{ $testiominal->title }}</h6> <span>{{ $testiominal->description }}</span> <br>
                                <span>@if(!empty($department)){{ getCategoryTitleFromPostMeta($department->meta_value) }} @endif</span>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>