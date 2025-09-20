@extends('layouts.front-app')
@section('main-front')
<main>
<!-- Page Header Start -->
<div class="page-header bg-section dark-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <!-- Page Header Box Start -->
                <div class="page-header-box">
                    <h1   data-cursor="-opaque">{{ __('lang.ABOUT_US') }}</h1>
                    <nav class="wow fadeInUp">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{url('/')}}">{{ __('lang.HOME') }}</a></li>
                            <li class="breadcrumb-item active" aria-current="page">{{ __('lang.ABOUT_US') }} </li>
                        </ol>
                    </nav>
                </div>
                <!-- Page Header Box End -->
            </div>
        </div>
    </div>
</div>
<!-- Page Header End -->

<!-- About Us Section Start -->
<div class="about-us">
    <div class="container">
  @include('front-web.component.comp_about')
    </div>
</div>
<!-- About Us Section End -->

<!-- Our Approach Section Start -->
<div class="our-approach bg-section">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <!-- Our Approach Content Start -->
                <div class="our-approach-content">
                    <!-- Section Title Start -->
                    <div class="section-title">
                        <h3 class="wow fadeInUp">{{ __('lang.OUR_APPROACH') }}</h3>
                        <h2   data-cursor="-opaque">{{ __('lang.OUR_DETAILS') }}</h2>
                        <p class="wow fadeInUp" data-wow-delay="0.2s">{{ __('lang.OUR_DETAILS_2') }}</p>
                    </div>
                    <!-- Section Title End -->

                    <!-- Our Approach Body Start -->
                    <div class="our-approach-body wow fadeInUp" data-wow-delay="0.4s">
                        <!-- Mission Vision Item Start -->
                        <div class="mission-vison-item">
                            <div class="icon-box">
                                <img src="{{ asset('public') }}/images/icon-mission.svg" alt="">
                            </div>
                            <div class="mission-vison-content">
                                <h3>{{ __('lang.OUR_MISSION') }}</h3>
                                <p>{{ __('lang.OUR_COMPREHENSIVE') }}</p>
                            </div>
                        </div>
                        <!-- Mission Vision Item End -->

                        <!-- Mission Vision Item Start -->
                        <div class="mission-vison-item">
                            <div class="icon-box">
                                <img src="{{ asset('public') }}/images/icon-vision.svg" alt="">
                            </div>
                            <div class="mission-vison-content">
                                <h3>{{ __('lang.OUR_VISION') }}</h3>
                                <p>{{ __('lang.OUR_COMPREHENSIVE') }}</p>
                            </div>
                        </div>
                        <!-- Mission Vision Item End -->
                    </div>
                    <!-- Our Approach Body End -->
                </div>
                <!-- Our Approach Content End -->
            </div>
            <div class="col-lg-6">
                <!-- Approach Image Start -->
                <div class="approach-image">
                    <div class="approach-img-1">
                        <figure class="image-anime reveal">
                            <img src="{{ asset('public') }}/images/approach-image-1.jpg" alt="">
                        </figure>
                    </div>

                    <div class="approach-img-2">
                        <figure class="image-anime  ">
                            <img src="{{ asset('public') }}/images/approach-image-2.jpg" alt="">
                        </figure>
                    </div>

                    <!-- Approach Support Box Start -->
                    <div class="approach-support-box">
                        <div class="icon-box">
                            <img src="{{ asset('public') }}/images/icon-phone.svg" alt="">
                        </div>
                        <div class="approach-support-box-content">
                            <h3>24/7 Support</h3>
                            <p><a href="tel:{{$sett->phone_number}}">{{$sett->phone_number}}</a></p>
                        </div>
                    </div>
                    <!-- Approach Support Box End -->
                </div>
                <!-- Approach Image End -->
            </div>
        </div>
    </div>
</div>
<!-- Our Approach Section End -->

    <!-- How It Work Section Start -->
    <div class="how-it-work">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <!-- How Work Content Start -->
                    <div class="how-work-content">
                        <!-- Section Title Start -->
                        <div class="section-title">
                            <h3 class="wow fadeInUp">{{ __('lang.HOW_IT_WORK') }}</h3>
                            <h2   data-cursor="-opaque">{{ __('lang.SIMPLE_STEPS_TO') }}</h2>
                            <p class="wow fadeInUp" data-wow-delay="0.2s">{{ __('lang.DISCOVER_A_SEAMLESS') }}</p>
                        </div>
                        <!-- Section Title End -->

                        <!-- How Work Button Start -->
                        <div class="how-work-btn wow fadeInUp" data-wow-delay="0.4s">
                            <a href="{{url('/contact')}}" class="btn-default">{{ __('lang.CONTACT_US') }}</a>
                        </div>
                        <!-- How Work Button End -->
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
                                <h3>{{ __('lang.01_COMPREHENSIVE') }}</h3>
                                <p>{{ __('lang.01_COMPREHENSIVE_GOALS') }}</p>
                            </div>
                        </div>
                        <!-- How Work Step Item End -->

                        <!-- How Work Step Item Start -->
                        <div class="how-work-step-item wow fadeInUp" data-wow-delay="0.2s">
                            <div class="icon-box">
                                <img src="{{ asset('public') }}/images/icon-how-work-step-2.svg" alt="">
                            </div>
                            <div class="how-work-step-content">
                                <h3>{{ __('lang.02_PERSONALIZED') }}</h3>
                                <p>{{ __('lang.01_COMPREHENSIVE_GOALS') }}</p>
                            </div>
                        </div>
                        <!-- How Work Step Item End -->

                        <!-- How Work Step Item Start -->
                        <div class="how-work-step-item wow fadeInUp" data-wow-delay="0.4s">
                            <div class="icon-box">
                                <img src="{{ asset('public') }}/images/icon-how-work-step-3.svg" alt="">
                            </div>
                            <div class="how-work-step-content">
                                <h3>{{ __('lang.03_EXPERT') }}</h3>
                                <p>{{ __('lang.01_COMPREHENSIVE_GOALS') }}</p>
                            </div>
                        </div>
                        <!-- How Work Step Item End -->

                        <!-- How Work Step Item Start -->
                        <div class="how-work-step-item wow fadeInUp" data-wow-delay="0.6s">
                            <div class="icon-box">
                                <img src="{{ asset('public') }}/images/icon-how-work-step-4.svg" alt="">
                            </div>
                            <div class="how-work-step-content">
                                <h3>{{ __('lang.04_ONGOING') }}</h3>
                                <p>{{ __('lang.01_COMPREHENSIVE_GOALS') }}</p>
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
        @include('front-web.component.testimonials')
</div>
<!-- Our Testimonials Section End -->
</main>
@endsection
