<footer class="main-footer dark">
    <div class="container">
        <div class="row">
            <div class="col-md-3 mb-30">
                <div class="item abot">
                    <div class="logo mb-15"> <img src="{{ asset(app('settings')['site_light_logo'] ?? 'frontend/img/logo-light.png')}}" alt=""> </div>
                    <p>{{ app('settings')['site_meta_title'] }}</p>
                    <div class="social-icon">
                        @if(isset(app('settings')['facebook_url']))
                        <a href="{{ app('settings')['facebook_url'] }}" target="_blank"><i class="ti-facebook"></i></a>
                    @endif
                    @if(isset(app('settings')['twitter_url']))
                        <a href="{{ app('settings')['twitter_url']  }}" target="_blank"><i class="ti-twitter"></i></a>
                    @endif
                    @if(isset(app('settings')['linkedin_url']))
                        <a href="{{ app('settings')['linkedin_url']  }}" target="_blank"><i class="ti-linkedin"></i></a>
                    @endif
                    @if(isset(app('settings')['instagram_url']))
                        <a href="{{ app('settings')['instagram_url']  }}" target="_blank"><i class="ti-instagram"></i></a>
                    @endif

                    </div>
                </div>
            </div>
            <div class="col-md-4 offset-md-1 mb-30">
                <div class="item usful-links">
                    <div class="fothead">
                        <h6>Our Services</h6>
                    </div>
                    <ul>
                        @foreach(app('categories') as $category)
                        <li><a href="#">{{ $category->title }}</a></li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <div class="col-md-4 mb-30">
                <div class="item fotcont">
                    <div class="fothead">
                        <h6>{{ app('settings')['lets_talk'] ?? 'Lets talsk' }}</h6>
                    </div>
                    <p>{{ app('settings')['lets_talk_description'] }}</p>
                    <p>{{ app('settings')['lets_talk_phone'] }}</p>
                    <p>{{ app('settings')['lets_talk_email'] ?? 'hello@example.com' }}</p>
                </div>
            </div>
        </div>
    </div>
    <div class="sub-footer">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="text-left">
                        <p>© 2022, SAVOYE. All right reserved.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="text-right-left">
                        <p><a href="#">Terms of use</a> <span>|</span> <a href="#"> Privacy Environmental Policy
                            </a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
