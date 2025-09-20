
@php

  $about = DB::table('abouts')->where('id',1)->first();
@endphp
<style>
    li{
        margin: 10px 0 10px 0;
    }
    </style>
<div class="row align-items-center">
    <div class="col-lg-6">
        <!-- About Us Images Start -->
        <div class="about-us-images">
            <!-- About Image 1 Start -->
            <div class="about-img-1">
                <figure class="image-anime reveal">
                    <img src="{{ url('file/about/' . (@$about->about_attachment ?? 'avatar.jpg')) }}" alt="">
                </figure>


            </div>
            <!-- About Image 1 End -->

            <!-- About Image 2 Start -->
            <div class="about-img-2">
                <figure class="image-anime reveal">
                    <img src="{{ url('file/about/' . (@$about->about_attachment2 ?? 'avatar.jpg')) }}" alt="">
                </figure>
            </div>
            <!-- About Image 2 End -->
        </div>
        <!-- About Us Images End -->
    </div>
    <div class="col-lg-6">
        <!-- Hero Content Box Start -->
        <div class="about-us-content">
            <!-- Section Title Start -->
            <div class="section-title">
                <h3 class="wow fadeInUp">{{ __('lang.ABOUT_US') }}</h3>
          <h2>
          {{ App::isLocale('ar') ? @$about->about_title_ar : @$about->about_title }}
</h2>
                {{-- {!! @$about->about!!} --}}
                <p>
                    {{ App::isLocale('ar') ? @$about->about_ar : @$about->about }}
                </p>
            </div>
            <!-- Section Title End -->

            <!-- About Experience Box Start -->
            <div class="about-experience-box">
                <!-- About Experience List Start -->
                <div class="about-experience-list wow fadeInUp" data-wow-delay="0.4s">
                    <ul>
                        <li>{{ __('lang.YOUR_BEAUTY_OUR_EXPERTISE') }}</li>
                        <li>{{ __('lang.WHERE_SCIENCE_MEETS_BEAUTY') }}</li>
                        <li>{{ __('lang.CUTTING_EDGE_TECHNIQUES') }}</li>
                    </ul>
                </div>
                <!-- About Experience List End -->

                <!-- About Experience Image Start -->
                <div class="about-experience-image">
                    <figure class="image-anime reveal">
                        <img src="{{ url('file/about/' . (@$about->about_team ?? 'avatar.jpg')) }}" alt="">
                    </figure>
                </div>
                <!-- About Experience Image End -->
            </div>
            <!-- About Experience Box End -->

            <!-- About Us Body Start -->
            <div class="about-us-body wow fadeInUp" data-wow-delay="0.6s">
                <!-- About Contact Box Start -->
                <div class="about-contact-box">
                    <div class="icon-box">
                        <i class="fa-solid fa-phone"></i>
                    </div>
                    <div class="about-contact-box-content">
                        <p>{{ __('lang.NEED_HELP') }}</p>
                        <h3><a href="tel:{{$sett->phone_number}}">{{$sett->phone_number}}</a></h3>
                    </div>
                </div>
                <!-- About Contact Box End -->

                <!-- About Contact Button Start -->
                <div class="about-us-btn">
                    <a href="{{url('/about')}}" class="btn-default">{{ __('lang.ABOUT_US') }}</a>
                </div>
                <!-- About Contact Button End -->
            </div>
            <!-- About Us Body End -->
        </div>
        <!-- Hero Content Box End -->
    </div>
</div>
