<div id="projects" class="savoye-project section-padding" data-scroll-index="2">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <div class="section-title">Our Projects</div>
            </div>
        </div>
        <div class="row savoye-project-items">
            @foreach($projects as $project)
            <div class="col-md-6 single-item interior">
                <div class="savoye-project-wrap">
                    <a href="{{ route('projectDetails',$project->slug) }}"><img src="{{ asset($project->feature_image)}}" alt=""></a>
                    <div class="savoye-project-content">
                        <p>{{ getCategoryTitleFromPostMeta($project->category->meta_value ? $project->category->meta_value : '0') }}</p>
                        <h3><a href="{{ route('projectDetails',$project->slug) }}">{{ $project->title }}</a></h3>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
