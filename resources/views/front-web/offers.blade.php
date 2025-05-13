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
                            <h1  >@lang('app.offers')</h1>
                            <nav class="wow fadeInUp">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{url('/')}}">@lang('app.home')</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">@lang('app.offers')</li>
                                </ol>
                            </nav>
                        </div>
                        <!-- Page Header Box End -->
                    </div>
                </div>
            </div>
        </div>
        <!-- Page Header End -->
        <!-- Page Services Start -->
        <div class="our-services bg-section">
            <div class="container">
                <div class="row section-row align-items-center">
                    <div class="col-lg-12">
                        <!-- Section Title Start -->
                        <div class="section-title section-title-center">
                            <h3 class="wow fadeInUp">@lang('app.offers')</h3>
                            <p class="wow fadeInUp" data-wow-delay="0.2s">@lang('app.feel_beautiful_be_beautiful')</p>
                            <h2  >@lang('app.discover_yourself_exclusive_offers')</h2>
                            <p class="wow fadeInUp" data-wow-delay="0.2s">@lang('app.offers_description')</p>
                        </div>
                        <!-- Section Title End -->
                    </div>
                </div>
                @include('front-web.component.offer')
                <!-- Service Item End -->
            </div>
        </div>
        <!-- Page Services End -->

        <!-- Our Testimonials Section Start -->
        <div class="our-testimonials bg-section dark-section">
            <div class="container">
                @include('front-web.component.testimonials')
            </div>
        </div>
        <!-- Our Testimonials Section End -->


       <!-- Why Choose Us Section Start -->
    <div class="why-choose-us bg-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <!-- Why Choose Image Start -->
                    <div class="why-choose-images">
                        <div class="why-choose-image img-1">
                            <figure class="image-anime reveal">
                                <img src="{{ asset('public') }}/images/why-choose-image-1.jpg" alt="">
                            </figure>
                        </div>

                        <div class="why-choose-image img-2">
                            <figure class="image-anime reveal">
                                <img src="{{ asset('public') }}/images/IMG_9575.jpg" alt="">
                            </figure>
                        </div>

                        <!-- Years Experience Text Start -->
                        <div class="years-experience-text">
                            <p>18 @lang('app.years_of_experirnce')</p>
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
                            <h3 class="wow fadeInUp">@lang('app.why_choose_us')</h3>
                            <h2   data-cursor="-opaque">@lang('app.experience_the_art_of_beauty_with_expert_hands')</h2>
                            <p class="wow fadeInUp" data-wow-delay="0.2s">@lang('app.experience_personalized_care')</p>
                        </div>
                        <!-- Section Title End -->

                        <!-- Why Choose Contact Box Start -->
                        <div class="why-choose-contact-box">
                            <h3 class="wow fadeInUp" data-wow-delay="0.4s">@lang('app.delivering_exceptional_care')</h3>
                        </div>
                        <!-- Why Choose Contact Box End -->
                    </div>
                    <!-- Why Choose Content End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Why Choose Us Section End -->
    </main>
@endsection
