<div id="blog" class="blog section-padding" data-scroll-index="8">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-title">Latest News</div>
            </div>
        </div>
        <div class="row">
            @foreach ($blogs as $blog)
            <div class="col-md-4">
                <div class="item">
                    <div class="post-img">
                        <a href="post.html">
                            <div class="img"> <img src="{{ asset($blog->feature_image)}}" alt=""> </div>
                        </a>
                    </div>
                    <div class="cont">
                        <h4><a href="{{ url('/blog/' . $blog->slug) }}">{{$blog->title}}</a></h4>
                        <div class="info"> <a href="{{ url('/blog/' . $blog->slug) }}"><span>Event</span></a> <a href="{{ url('/blog/' . $blog->slug) }}">{{$blog->title}}">{{ formateDate($blog->date) }}</a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach


        </div>
    </div>
</div>