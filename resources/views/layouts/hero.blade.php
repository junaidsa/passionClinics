
    <div class="hero hero-bg-image hero-video bg-section dark-section">
        <!-- Video Start -->
        <div class="hero-bg-video">
            <!-- Selfhosted Video Start -->
            <!-- <video autoplay muted loop id="myvideo"><source src="images/hero-bg-video.mp4" type="video/mp4"></video> -->
            <video autoplay="" muted="" loop="" id="myvideo"><source src="{{ url('file/video/' . (@$sett->video ?? 'avatar.jpg')) }}" type="video/mp4"></video>

            <!-- Selfhosted Video End -->

            <!-- Youtube Video Start -->
            <!-- <div id="herovideo" class="player" data-property="{videoURL:'74DWwSxsVSs',containment:'.hero-video', showControls:false, autoPlay:true, loop:true, vol:0, mute:false, startAt:0,  stopAt:296, opacity:1, addRaster:true, quality:'large', optimizeDisplay:true}"></div> -->
            <!-- Youtube Video End -->
        </div>
        <!-- Video End -->
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <!-- Hero Content Start -->
                    <div class="hero-content">
                        <!-- Section Title Start -->
                        <div class="section-title">
                            <h3 class="wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">@lang('app.welcome_to_passion_clinic')</h3>
                            <h1  data-cursor="-opaque" style="perspective: 400px;">{{ App::isLocale('ar') ? $sett->title_ar : $sett->title }}</h1>
                            <p class="wow fadeInUp" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">{{ App::isLocale('ar') ? $sett->description_ar : $sett->description }}</p>
                        </div>
                        <!-- Section Title End -->

                        <!-- Hero Content Body Start -->
                        <div class="hero-body wow fadeInUp" data-wow-delay="0.4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInUp;">
                            <!-- Hero Button Start -->
                            <div class="hero-btn">
                                <a href="#" class="btn-default btn-highlighted">@lang('app.book_an_appointment')</a>
                            </div>
                            <!-- Hero Button End -->

                            <!-- Video Play Button Start -->
                            <div class="video-play-button">
                                <p>Watch Video</p>
                                <a href="https://www.youtube.com/watch?v=Y-x0efG1seA" class="popup-video" data-cursor-text="Play">
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
