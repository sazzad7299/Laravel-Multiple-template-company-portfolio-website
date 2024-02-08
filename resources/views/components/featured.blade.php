<div id="parallax-section" class="parallax-header parallax-slider-fade" data-scroll-index="3">
    <div class="owl-carousel owl-theme">
       @foreach ($featureds as $featured)
       <div class="text-left item bg-img" data-overlay-dark="3"
       data-background="{{asset($featured->feature_image)}}">
       <div class="v-middle caption">
           <div class="container">
               <div class="row">
                   <div class="col-md-8">
                       <div class="o-hidden">
                           <h6>{{ getCategoryTitleFromPostMeta(optional($featured->category)->meta_value) }}</h6>
                           <h2>{{ $featured->title }}</h2>
                           <p><a href="#"><i class="ti-location-pin"></i> {{ $featured->description }}</a></p>
                       </div>
                   </div>
               </div>
           </div>
       </div>
   </div>
       @endforeach

    </div>
</div>
