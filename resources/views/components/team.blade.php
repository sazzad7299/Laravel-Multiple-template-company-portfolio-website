<div id="team" class="team section-padding" data-scroll-index="6">
    <div class="container">
        <div class="row">
            <div class="col-md-12 mb-15">
                <div class="section-title">Creative Team</div>
            </div>
        </div>
        <div class="row">
            @foreach($teams as $index => $member)
                <div class="col-md-6">
                    <div class="item {{ $index % 2 == 0 ? 'toright' : '' }} mb-30">
                        <div class="img"> <img src="{{ asset($member->feature_image)}}" alt=""> </div>
                        <div class="info valign">
                            <div class="full-width">
                                <h6>{{ $member->title }}</h6> / <span>{{ $member->description }}</span>
                                <p>@php 
                                    $memberDescription = $member->postmeta->where('meta_key','details')->first();
                                    $department = $member->postmeta->where('meta_key','category_id')->first();@endphp
                                    @if(!empty($memberDescription)) {{ $memberDescription->meta_value }} @endif
                               
                                </p>
                                <p>@if(!empty($department)){{ getCategoryTitleFromPostMeta($department->meta_value) }} @endif</p>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>