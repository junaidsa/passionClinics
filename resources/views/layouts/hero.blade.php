
     @php
         $sectionHero = @$sett->hero_section ?? '';
         $isVideo = Str::endsWith($sectionHero, ['.mp4', '.webm', '.ogg']);
     @endphp
    <div class="hero {{ $isVideo ? 'hero-bg-image hero-video bg-section dark-section' : 'avatar.jpg' }}"      @if(!$isVideo && $sectionHero)
        style="background: url('{{ url('file/video/' . $sectionHero) }}') no-repeat center center; background-size: cover;"
     @endif>
        <!-- Video Start -->
  @if($isVideo)
    <!-- Video Start -->
    <div class="hero-bg-video">
        <video autoplay muted loop id="myvideo">
            <source src="{{ url('file/video/' . $sectionHero) }}" type="video/mp4">
        </video>
    </div>
    <!-- Video End -->
    @endif

        <!-- Video End -->
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <!-- Hero Content Start -->
                    <div class="hero-content">
                        <!-- Section Title Start -->
                        <div class="section-title">
                            <h3 class="wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">{{ __('lang.WELCOME_TO_PASSION_CLINIC') }}</h3>
                            <h1  data-cursor="-opaque" style="perspective: 400px;">{{ App::isLocale('ar') ? $sett->title_ar : $sett->title }}</h1>
                            <p class="wow fadeInUp" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">{{ App::isLocale('ar') ? $sett->description_ar : $sett->description }}</p>
                        </div>
                        <!-- Section Title End -->

                        <!-- Hero Content Body Start -->
                        <div class="hero-body wow fadeInUp" data-wow-delay="0.4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInUp;">
                            <!-- Hero Button Start -->
                            <div class="hero-btn">
                                <a href="#" class="btn-default btn-highlighted">{{ __('lang.BOOK_AN_APPOINTMENT') }}</a>
                            </div>
                            <!-- Hero Button End -->

                            <!-- Video Play Button Start -->
                            <div class="video-play-button">
                                <p>Watch Video</p>
                                <a href="{{$sett->youtube_url}}}}" class="popup-video" data-cursor-text="Play">
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
