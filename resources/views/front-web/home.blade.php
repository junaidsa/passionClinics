@extends('layouts.front-app')
@section('main-front')
    @include('layouts.hero')
    <main>
        <style>
            .ar {
                /* --arabic-font: 'Cairo', sans-serif; */
                font-family: 'Cairo', sans-serif;
            }
        </style>
        <!-- About Us Section Start -->
        <div class="about-us">
            <div class="container">
                @include('front-web.component.comp_about')
                {{-- <div class="row align-items-center">
                <div class="col-lg-6">
                    <!-- About Us Images Start -->
                    <div class="about-us-images">
                        <!-- About Image 1 Start -->
                        <div class="about-img-1">
                            <figure class="image-anime reveal">
                                <img src="{{ asset('public') }}/images/about-img-1.jpg" alt="">
                            </figure>

                        </div>
                        <!-- About Image 1 End -->

                        <!-- About Image 2 Start -->
                        <div class="about-img-2">
                            <figure class="image-anime reveal">
                                <img src="{{ asset('public') }}/images/about-img-2.jpg" alt="">
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
                            <h3 class="wow fadeInUp">About us</h3>
                            <h2   data-cursor="-opaque">Your journey to radiant confidence</h2>
                            <p class="wow fadeInUp" data-wow-delay="0.2s">Discover personalized care & expertise at our clinic, where we blend artistry and precision to enhance your natural beauty and boost your confidence.</p>
                        </div>
                        <!-- Section Title End -->

                        <!-- About Experience Box Start -->
                        <div class="about-experience-box">
                            <!-- About Experience List Start -->
                            <div class="about-experience-list wow fadeInUp" data-wow-delay="0.4s">
                                <ul>
                                    <li>Your Beauty, Our Expertise</li>
                                    <li>Where Science Meets Beauty</li>
                                    <li>Cutting-Edge Techniques</li>
                                </ul>
                            </div>
                            <!-- About Experience List End -->

                            <!-- About Experience Image Start -->
                            <div class="about-experience-image">
                                <figure class="image-anime reveal">
                                    <img src="{{ asset('public') }}/images/IMG_1184 (1).jpg" alt="">
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
                                    <p>Need Help!</p>
                                    <h3><a href="tel:123456789">0112880840</a></h3>
                                </div>
                            </div>
                            <!-- About Contact Box End -->

                            <!-- About Contact Button Start -->
                            <div class="about-us-btn">
                                <a href="about.html" class="btn-default">more about</a>
                            </div>
                            <!-- About Contact Button End -->
                        </div>
                        <!-- About Us Body End -->
                    </div>
                    <!-- Hero Content Box End -->
                </div>
            </div> --}}
            </div>
        </div>
        <!-- About Us Section End -->

        <!-- Our Services Section Start -->
        <div class="our-services bg-section">
            <div class="container">
                <div class="row section-row align-items-center">
                    <div class="col-lg-12">
                        <!-- Section Title Start -->
                        <div class="section-title section-title-center">
                            <h3 class="wow fadeInUp">{{ __('lang.SERVICES') }}</h3>
                            <p class="wow fadeInUp" data-wow-delay="0.2s">{{ __('lang.FEEL_BEAUTIFUL_BE_BEAUTIFUL') }}</p>
                            <h2 data-cursor="-opaque">{{ __('lang.AGAIN_DISCOVER_YOURSELF') }}</h2>
                            <p class="wow fadeInUp" data-wow-delay="0.2s">{{ __('lang.SERVICES_DESCRIPTION') }}</p>
                        </div>
                        <!-- Section Title End -->
                    </div>
                </div>

                <!-- Service Item start -->
                @include('front-web.component.services')
            </div>
        </div>
        </div>
        </div>
        <!-- Our Services Section End -->

        <!-- What We Do section Start -->
        <div class="what-we-do">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-4">
                        <!-- What We Image Start -->
                        <div class="what-we-image-2">
                            <figure class="image-anime">
                                <img src="{{ url('file/video/' . (@$sett->experience_1 ?? '')) }}" alt="">
                            </figure>
                        </div>
                        <!-- What We Image Start -->
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <!-- What We Content Start -->
                        <div class="what-we-content">
                            <!-- Section Title Start -->
                            <div class="section-title">
                                <h3 class="wow fadeInUp">{{ __('lang.WHAT_WE_DO') }}</h3>
                                <h2 data-cursor="-opaque">{{ __('lang.EXPERIENCE_THE_TRANSFORMATION') }}</h2>
                                <p class="wow fadeInUp" data-wow-delay="0.2s">{{ __('lang.OUR_SERVICES_ARE_THERE') }}</p>
                            </div>
                            <!-- Section Title End -->

                            <!-- About Experience List Start -->
                            <div class="about-experience-list wow fadeInUp" data-wow-delay="0.4s">
                                <ul>
                                    <li>{{ __('lang.RESTORE_FIRMNESS_AND_SHAPE') }}</li>
                                    <li>{{ __('lang.MINIMIZE_AND_IMPROVE_SCARS') }}</li>
                                    <li>{{ __('lang.INCREDIBLE_POSSIBILITIES') }}</li>
                                </ul>
                            </div>
                            <!-- About Experience List End -->

                            <!-- What We Button Start -->

                            <!-- What We Button End -->
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <!-- What We Image Start -->
                        <div class="what-we-image-2">
                            <figure class="image-anime">
                                <img src="{{ url('file/video/' . (@$sett->experience_2 ?? '')) }}" alt="">
                            </figure>

                            <!-- Experirnce Box Start -->
                            <div class="experirnce-box">
                                <h2><span class="counter">18</span>+</h2>
                                <p>{{ __('lang.YEARS_OF_EXPERIENCE') }} </p>
                            </div>
                            <!-- Experirnce Box End -->
                        </div>
                        <!-- What We Image Start -->
                    </div>
                </div>
            </div>
        </div>
        <!-- What We Do section End -->

        <!-- Intro Video Section Start -->
        <div class="intro-video bg-section">
            <div class="container-fluid">
                <div class="row no-gutters">
                    <div class="col-lg-12">
                        <!-- Intro Video Box Start -->
                        <div class="intro-video-box">
                            <div class="intro-bg-video">
                                <video autoplay="" muted="" loop="" id="introVideo">
                                    <source src="{{ url('file/video/' . (@$sett->video ?? '')) }}" type="video/mp4">
                                </video>
                                <!-- Selfhosted Video End -->
                            </div>
                            <!-- Video Play Button Start -->

                            <!-- Video Play Button Start -->
                            <div class="video-play-button">
                                <a href="{{ $sett->youtube_url }}" class="popup-video"
                                    data-cursor-text="@lang('play')">@lang('play')</a>
                            </div>
                            <!-- Video Play Button End -->
                        </div>
                        <!-- Intro Video Box End -->
                    </div>
                </div>
            </div>
        </div>
        <!-- Intro Video Section End -->

        <!-- Case Study Section Start -->
        <div class="case-study">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4">
                        <!-- Case Study Content Start -->
                        <div class="case-study-content">
                            <!-- Section Title Start -->
                            <div class="section-title">
                                <h3 class="wow fadeInUp">{{ __('lang.OUR_FACILITY') }}</h3>
                                <h2 data-cursor="-opaque">{{ __('lang.RN_SF') }}</h2>
                                <p class="wow fadeInUp" data-wow-delay="0.2s">{{ __('lang.FACILITY_DIS') }}</p>
                            </div>
                            <!-- Section Title End -->

                            <!-- Case Study Button Start -->
                            <div class="case-study-btn">
                                <a href="{{ url('/contact') }}" class="btn-default">{{ __('lang.CONTACT_US') }}</a>
                            </div>
                            <!-- Case Study Button End -->
                        </div>
                        <!-- Case Study Content End -->
                    </div>

                    <div class="col-lg-8">
                        @include('front-web.component.Facility')
                    </div>
                </div>
            </div>
        </div>
        <!-- Case Study Section End -->

        <!-- Why Choose Us Section Start -->
        <div class="why-choose-us bg-section">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <!-- Why Choose Image Start -->
                        <div class="why-choose-images">
                            <div class="why-choose-image img-1">
                                <figure class="image-anime reveal">
                                    <img src="{{ url('file/video/' . (@$sett->choose_1 ?? '')) }}" alt="">
                                </figure>
                            </div>

                            <div class="why-choose-image img-2">
                                <figure class="image-anime reveal">
                                    <img src="{{ url('file/video/' . (@$sett->choose_2 ?? '')) }}" alt="">
                                </figure>
                            </div>

                            <!-- Years Experience Text Start -->
                            <div class="years-experience-text">
                                <p>18 {{ __('lang.YEARS_OF_EXPERIENCE') }}</p>
                            </div>
                            <!-- Years Experience Text End -->
                        </div>
                        <!-- Why Choose Image End -->
                    </div>

                    <div class="col-lg-6">
                        <!-- Why Choose Content Start -->
                        <div class="why-choose-content">
                            <!-- Section Title Start -->
                            <div class="section-title">
                                <h3 class="wow fadeInUp">{{ __('lang.WHY_CHOOSE_US') }}</h3>
                                <h2 data-cursor="-opaque">{{ __('lang.EXPERIENCE_THE_ART_OF_BEAUTY_WITH_EXPERT_HANDS') }}
                                </h2>
                                <p class="wow fadeInUp" data-wow-delay="0.2s">{{ __('lang.EXPERIENCE_PERSONALIZED_CARE') }}
                                </p>
                            </div>
                            <!-- Section Title End -->

                            <!-- Why Choose Contact Box Start -->
                            <div class="why-choose-contact-box">
                                <h3 class="wow fadeInUp" data-wow-delay="0.4s">{{ __('lang.DELIVERING_EXCEPTIONAL_CARE') }}
                                </h3>
                            </div>
                            <!-- Why Choose Contact Box End -->
                        </div>
                        <!-- Why Choose Content End -->
                    </div>
                </div>
            </div>
        </div>
        <!-- Why Choose Us Section End -->

        <!-- How It Work Section Start -->
        <div class="how-it-work">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <!-- How Work Content Start -->
                        <div class="how-work-content">
                            <!-- Section Title Start -->
                            <div class="section-title">
                                <h3 class="wow fadeInUp">{{ __('lang.HOW_IT_WORK') }}</h3>
                                <h2 data-cursor="-opaque">{{ __('lang.SIMPLE_STEPS_TO') }}</h2>
                                <p class="wow fadeInUp" data-wow-delay="0.2s">{{ __('lang.DISCOVER_A_SEAMLESS') }}</p>
                            </div>
                            <!-- Section Title End -->

                            <!-- How Work Button Start -->
                        </div>
                        <!-- How Work Content End -->
                    </div>

                    <div class="col-lg-6">
                        <!-- How Work Steps Start -->
                        <div class="how-work-steps">
                            <!-- How Work Step Item Start -->
                            <div class="how-work-step-item wow fadeInUp">
                                <div class="icon-box">
                                    <img src="{{ asset('public') }}/images/icon-how-work-step-1.svg" alt="">
                                </div>
                                <div class="how-work-step-content">
                                    <h3>{{ __('lang.01_COMPREHENSIVE') }}</h3>
                                    <p>{{ __('lang.01_COMPREHENSIVE_GOALS') }}</p>
                                </div>
                            </div>
                            <!-- How Work Step Item End -->

                            <!-- How Work Step Item Start -->
                            <div class="how-work-step-item wow fadeInUp" data-wow-delay="0.2s">
                                <div class="icon-box">
                                    <img src="{{ asset('public') }}/images/icon-how-work-step-2.svg" alt="">
                                </div>
                                <div class="how-work-step-content">
                                    <h3>{{ __('lang.02_PERSONALIZED') }}</h3>
                                    <p>{{ __('lang.01_COMPREHENSIVE_GOALS') }}</p>
                                </div>
                            </div>
                            <!-- How Work Step Item End -->

                            <!-- How Work Step Item Start -->
                            <div class="how-work-step-item wow fadeInUp" data-wow-delay="0.4s">
                                <div class="icon-box">
                                    <img src="{{ asset('public') }}/images/icon-how-work-step-3.svg" alt="">
                                </div>
                                <div class="how-work-step-content">
                                    <h3>{{ __('lang.03_EXPERT') }}</h3>
                                    <p>{{ __('lang.01_COMPREHENSIVE_GOALS') }}</p>
                                </div>
                            </div>
                            <!-- How Work Step Item End -->

                            <!-- How Work Step Item Start -->
                            <div class="how-work-step-item wow fadeInUp" data-wow-delay="0.6s">
                                <div class="icon-box">
                                    <img src="{{ asset('public') }}/images/icon-how-work-step-4.svg" alt="">
                                </div>
                                <div class="how-work-step-content">
                                    <h3>{{ __('lang.04_ONGOING') }}</h3>
                                    <p>{{ __('lang.01_COMPREHENSIVE_GOALS') }}</p>
                                </div>
                            </div>
                            <!-- How Work Step Item End -->
                        </div>
                        <!-- How Work Steps End -->
                    </div>
                </div>
            </div>
        </div>
        <!-- How It Work Section End -->
        <!-- Our Testimonials Section Start -->
        <div class="our-testimonials bg-section dark-section">
            {{--  --}}
            @include('front-web.component.testimonials')
        </div>
        <!-- Our Testimonials Section End -->

        <!-- Our Result Section Start -->
        <div class="our-results">
            <div class="container">
                <div class="row section-row align-items-center">
                    <div class="col-lg-12">
                        <!-- Section Title Start -->
                        <div class="section-title section-title-center">
                            <h3 class="wow fadeInUp">{{ __('lang.SEE_THE_DIFFERENCE') }}</h3>
                            <h2 data-cursor="-opaque">{{ __('lang.OUR_REAL_PATIENT_TRANSFORMATION') }}</h2>
                        </div>
                        <!-- Section Title End -->
                    </div>
                </div>
                @php
                    $diff = DB::table('differences')->get();
                @endphp

                <div class="row">
                    <!-- First 2 Images -->
                    <div class="col-md-6">
                        <div class="transformation-image wow fadeInUp" data-wow-delay="0.2s">
                            @foreach ($diff->take(2) as $d)
                                <figure class="transform-img-1">
                                    <img src="{{ url('file/difference/' . ($d->difference ?? 'avatar.jpg')) }}"
                                        alt="">
                                </figure>
                            @endforeach
                        </div>
                    </div>

                    <!-- Next 2 Images -->
                    <div class="col-md-6">
                        <div class="transformation-image wow fadeInUp" data-wow-delay="0.4s">
                            @foreach ($diff->slice(2, 2) as $d)
                                <figure class="transform-img-1">
                                    <img src="{{ url('file/difference/' . ($d->difference ?? 'avatar.jpg')) }}"
                                        alt="">
                                </figure>
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <!-- Facts Counter Box Start -->
                    <div class="facts-counter-box">
                        <!-- Facts Counter Item Start -->
                        <div class="facts-counter-item">
                            <div class="icon-box">
                                <img src="{{ asset('public') }}/images/icon-facts-counter-1.svg" alt="">
                            </div>
                            <div class="facts-counter-content">
                                <h3><span class="counter">{{ $sett->year_experience }}</span>+</h3>
                                <p>{{ __('lang.YEARS_OF_EXPERIENCE') }}</p>
                            </div>
                        </div>
                        <!-- Facts Counter Item End -->

                        <!-- Facts Counter Item Start -->
                        <div class="facts-counter-item">
                            <div class="icon-box">
                                <img src="{{ asset('public') }}/images/icon-facts-counter-2.svg" alt="">
                            </div>
                            <div class="facts-counter-content">
                                <h3><span class="counter">30</span></h3>
                                <p>{{ __('lang.STAFF_MEMBERS') }}</p>
                            </div>
                        </div>
                        <!-- Facts Counter Item End -->

                        <!-- Facts Counter Item Start -->
                        <div class="facts-counter-item">
                            <div class="icon-box">
                                <img src="{{ asset('public') }}/images/icon-facts-counter-3.svg" alt="">
                            </div>
                            <div class="facts-counter-content">
                                <h3><span class="counter">{{ $sett->awards }}</span></h3>
                                <p>{{ __('lang.AWARDS') }}</p>
                            </div>
                        </div>
                        <!-- Facts Counter Item End -->

                        <!-- Facts Counter Item Start -->
                        <div class="facts-counter-item">
                            <div class="icon-box">
                                <img src="{{ asset('public') }}/images/icon-facts-counter-4.svg" alt="">
                            </div>
                            <div class="facts-counter-content">
                                <h3><span class="counter">{{ $sett->happy_clients }}</span>+</h3>
                                <p>{{ __('lang.HAPPY_CLIENTS') }}</p>
                            </div>
                        </div>
                        <!-- Facts Counter Item End -->
                    </div>
                    <!-- Facts Counter Box End -->
                </div>

                <div class="our-blog">
                    <div class="container">
                        <div class="row section-row align-items-center">
                            <div class="col-lg-12">
                                <!-- Section Title Start -->
                                <div class="section-title section-title-center">
                                    <h3 class="wow fadeInUp">Latest Blog</h3>
                                    <h2 class="text-anime-style-3" data-cursor="-opaque">Our Latest Insights on Plastic
                                        Surgery & Skincare</h2>
                                </div>
                                <!-- Section Title End -->
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-4 col-md-6">
                                <!-- Post Item Start -->
                                <div class="post-item wow fadeInUp" data-wow-delay="0.2s">
                                    <!-- Post Featured Image Start -->
                                    <div class="post-featured-image">
                                        <a href="blog-single.html" data-cursor-text="View">
                                            <figure class="image-anime">
                                                <img src="{{ asset('public') }}/images/post-1.jpg" alt="">
                                            </figure>
                                        </a>
                                    </div>
                                    <!-- Post Featured Image End -->

                                    <!-- Post Item Body Start -->
                                    <div class="post-item-body">
                                        <!-- Post Item Content Start -->
                                        <div class="post-item-content">
                                            <h2><a href="blog-single.html">Top Tips for Preparing for Plastic Surgery</a>
                                            </h2>
                                        </div>
                                        <!-- Post Item Content End -->

                                        <!-- Post Item Readmore Button Start -->
                                        <div class="post-item-btn">
                                            <a href="blog-single.html" class="readmore-btn"><img
                                                    src="{{ asset('public') }}/images/arrow-white.svg" alt=""></a>
                                        </div>
                                        <!-- Post Item Readmore Button End -->
                                    </div>
                                    <!-- Post Item Body End -->
                                </div>
                                <!-- Post Item End -->
                            </div>

                            <div class="col-lg-4 col-md-6">
                                <!-- Post Item Start -->
                                <div class="post-item wow fadeInUp" data-wow-delay="0.4s">
                                    <!-- Post Featured Image Start -->
                                    <div class="post-featured-image">
                                        <a href="blog-single.html" data-cursor-text="View">
                                            <figure class="image-anime">
                                                <img src="{{ asset('public') }}/images/post-2.jpg" alt="">
                                            </figure>
                                        </a>
                                    </div>
                                    <!-- Post Featured Image End -->

                                    <!-- Post Item Body Start -->
                                    <div class="post-item-body">
                                        <!-- Post Item Content Start -->
                                        <div class="post-item-content">
                                            <h2><a href="blog-single.html">Myths and Facts About Plastic Surgery</a></h2>
                                        </div>
                                        <!-- Post Item Content End -->

                                        <!-- Post Item Readmore Button Start -->
                                        <div class="post-item-btn">
                                            <a href="blog-single.html" class="readmore-btn"><img
                                                    src="{{ asset('public') }}/images/arrow-white.svg" alt=""></a>
                                        </div>
                                        <!-- Post Item Readmore Button End -->
                                    </div>
                                    <!-- Post Item Body End -->
                                </div>
                                <!-- Post Item End -->
                            </div>

                            <div class="col-lg-4 col-md-6">
                                <!-- Post Item Start -->
                                <div class="post-item wow fadeInUp" data-wow-delay="0.6s">
                                    <!-- Post Featured Image Start -->
                                    <div class="post-featured-image">
                                        <a href="blog-single.html" data-cursor-text="View">
                                            <figure class="image-anime">
                                                <img src="{{ asset('public') }}/images/post-3.jpg" alt="">
                                            </figure>
                                        </a>
                                    </div>
                                    <!-- Post Featured Image End -->

                                    <!-- Post Item Body Start -->
                                    <div class="post-item-body">
                                        <!-- Post Item Content Start -->
                                        <div class="post-item-content">
                                            <h2><a href="blog-single.html">What to Expect During Your First
                                                    Consultation</a></h2>
                                        </div>
                                        <!-- Post Item Content End -->

                                        <!-- Post Item Readmore Button Start -->
                                        <div class="post-item-btn">
                                            <a href="blog-single.html" class="readmore-btn"><img
                                                    src="{{ asset('public') }}/images/arrow-white.svg" alt=""></a>
                                        </div>
                                        <!-- Post Item Readmore Button End -->
                                    </div>
                                    <!-- Post Item Body End -->
                                </div>
                                <!-- Post Item End -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        </div>
    </main>
@endsection
