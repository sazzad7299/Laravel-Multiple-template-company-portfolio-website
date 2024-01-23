<div id="gallery" class="section-padding" data-scroll-index="7">
    <div class="container">
        <div class="row">
            <div class="col-md-12 mb-15">
                <div class="section-title">Portfolio</div>
            </div>
        </div>
        <div class="row savoye-photos">
            <div class="col-12 col-md-4 masonry-items">
                @foreach($portfolios as $portfolio)
                <div class="portfolio-item-wrapp">
                    <div class="portfolio-item">
                        <div class="gallery-masonry-wrapper">
                            <a class="gallery-masonry-item-img-link d-block savoye-photo-item" data-fancybox="images"
                                href="{{asset($portfolio->feature_image)}}" data-caption="Alvar Alto Museum">
                                <img class="img-fluid" src="{{ asset($portfolio->feature_image)}}" alt="">
                                <div class="gallery-masonry-item-img"></div>
                                <div class="gallery-masonry-item-content">
                                    <h4 class="gallery-masonry-item-title">{{ $portfolio->title }}</h4>
                                    <div class="gallery-masonry-item-category">{{ $portfolio->description }}</div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>