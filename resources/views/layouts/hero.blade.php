

    <!-- Hero Section Start -->
    <div class="hero hero-bg-image hero-video bg-section dark-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <!-- Hero Content Start -->
                    <div class="hero-content">
                        <!-- Section Title Start -->
                        <div class="section-title">
                            <h3 class="wow fadeInUp">@lang('app.welcome_to_passion_clinic')</h3>
                            <h1 class="text-anime-style-3" data-cursor="-opaque">{{$sett->title}}</h1>
                            <p class="wow fadeInUp" data-wow-delay="0.2s" >{{$sett->description}}</p>
                        </div>
                        <div class="hero-body wow fadeInUp" data-wow-delay="0.4s">
                            <!-- Hero Button Start -->
                            <div class="hero-btn">
                                <a href="#" class="btn-default btn-highlighted">@lang('app.book_an_appointment')</a>
                            </div>
                            <div class="video-play-button">
                                <p>@lang('app.watch_video')</p>
                                <a href="{{$sett->youtube_url}}" class="popup-video" data-cursor-text="Play">
                                    <i class="fa-solid fa-play"></i>
                                </a>
                            </div>
                            <!-- Video Play Button End -->
                        </div>
                        <!-- Hero Content Body End -->
                    </div>
                    <!-- Hero Content End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Hero Section End -->
