<div id="blog" class="blog section-padding" data-scroll-index="8">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-title">Our Project Gallery</div>
            </div>
        </div>
        <div class="row">
            @foreach ($gallerys as $gallery)
            <div class="col-md-4">
                <div class="item">
                    <div class="post-img">
                        <a href="{{ route('galleryDetails', $gallery->slug) }}">
                            <div class="img"> <img src="{{ asset($gallery->feature_image)}}" alt=""> </div>
                        </a>
                    </div>
                    <div class="cont">
                        <h4><a href="{{ route('galleryDetails', $gallery->slug) }}">{{$gallery->title}}</a></h4>
                        <div class="info"> <a
                                href="{{ route('galleryDetails', $gallery->slug) }}"><span>{{ getCategoryTitleFromPostMeta(optional($gallery->category)->meta_value) }}</span></a> <a href="
                                {{ route('galleryDetails', $gallery->slug) }}">{{ formateDate($gallery->date) }}</a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach


        </div>
    </div>
</div>
