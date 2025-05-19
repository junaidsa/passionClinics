@extends('layouts.front-app')
@section('main-front')
@include('layouts.hero')
<main>
<style>
    .ar{
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
                        <h3 class="wow fadeInUp">@lang('app.services')</h3>
                        <p class="wow fadeInUp" data-wow-delay="0.2s">
                            @lang('app.feel_beautiful_be_beautiful')</p>
                        <h2  data-cursor="-opaque">@lang('app.again_discover_yourself')</h2>
                        <p class="wow fadeInUp" data-wow-delay="0.2s">@lang('app.services_description')</p>
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
                            <img src="{{ asset('public') }}/images/IMG_9568.jpg" alt="">
                        </figure>
                    </div>
                    <!-- What We Image Start -->
                </div>

                <div class="col-lg-4 col-md-6">
                    <!-- What We Content Start -->
                    <div class="what-we-content">
                        <!-- Section Title Start -->
                        <div class="section-title">
                            <h3 class="wow fadeInUp">@lang('app.what_we_do')</h3>
                            <h2   data-cursor="-opaque">@lang('app.experience_the_transformation')</h2>
                            <p class="wow fadeInUp" data-wow-delay="0.2s">@lang('app.our_services_are_there')</p>
                        </div>
                        <!-- Section Title End -->

                        <!-- About Experience List Start -->
                        <div class="about-experience-list wow fadeInUp" data-wow-delay="0.4s">
                            <ul>
                                <li>@lang('app.restore_firmness_and_shape')</li>
                                <li>@lang('app.minimize_and_improve_scars')</li>
                                <li>@lang('app.incredible_possibilities')</li>
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
                            <img src="{{ asset('public') }}/images/what-we-image-2.jpg" alt="">
                        </figure>

                        <!-- Experirnce Box Start -->
                        <div class="experirnce-box">
                            <h2><span class="counter">18</span>+</h2>
                            <p>@lang('app.years_of_experirnce')</p>
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
                            <video autoplay="" muted="" loop="" id="introVideo"><source src="{{ url('file/video/' . (@$sett->video ?? '')) }}" type="video/mp4"></video>
                            <!-- Selfhosted Video End -->
                        </div>
                        <!-- Video Play Button Start -->

                        <!-- Video Play Button Start -->
                        <div class="video-play-button">
                            <a href="{{$sett->youtube_url}}" class="popup-video" data-cursor-text="@lang('play')">@lang('play')</a>
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
                            <h3 class="wow fadeInUp">@lang('app.our_facility')</h3>
                            <h2   data-cursor="-opaque">@lang('app.rn_sf')</h2>
                            <p class="wow fadeInUp" data-wow-delay="0.2s">@lang('app.facility_dis')</p>
                        </div>
                        <!-- Section Title End -->

                        <!-- Case Study Button Start -->
                        <div class="case-study-btn">
                            <a href="{{url('/contact')}}" class="btn-default">@lang('app.contact_us')</a>
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

    <!-- How It Work Section Start -->
    <div class="how-it-work">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <!-- How Work Content Start -->
                    <div class="how-work-content">
                        <!-- Section Title Start -->
                        <div class="section-title">
                            <h3 class="wow fadeInUp">@lang('app.how_it_work')</h3>
                            <h2   data-cursor="-opaque">@lang('app.simple_steps_to')</h2>
                            <p class="wow fadeInUp" data-wow-delay="0.2s">@lang('app.discover_a_seamless')</p>
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
                                <h3>@lang('app.01_comprehensive')</h3>
                                <p>@lang('app.01_comprehensive_goals')</p>
                            </div>
                        </div>
                        <!-- How Work Step Item End -->

                        <!-- How Work Step Item Start -->
                        <div class="how-work-step-item wow fadeInUp" data-wow-delay="0.2s">
                            <div class="icon-box">
                                <img src="{{ asset('public') }}/images/icon-how-work-step-2.svg" alt="">
                            </div>
                            <div class="how-work-step-content">
                                <h3>@lang('app.02_personalized')</h3>
                                <p>@lang('app.01_comprehensive_goals')</p>
                            </div>
                        </div>
                        <!-- How Work Step Item End -->

                        <!-- How Work Step Item Start -->
                        <div class="how-work-step-item wow fadeInUp" data-wow-delay="0.4s">
                            <div class="icon-box">
                                <img src="{{ asset('public') }}/images/icon-how-work-step-3.svg" alt="">
                            </div>
                            <div class="how-work-step-content">
                                <h3>@lang('app.03_expert')</h3>
                                <p>@lang('app.01_comprehensive_goals')</p>
                            </div>
                        </div>
                        <!-- How Work Step Item End -->

                        <!-- How Work Step Item Start -->
                        <div class="how-work-step-item wow fadeInUp" data-wow-delay="0.6s">
                            <div class="icon-box">
                                <img src="{{ asset('public') }}/images/icon-how-work-step-4.svg" alt="">
                            </div>
                            <div class="how-work-step-content">
                                <h3>@lang('app.04_ongoing')</h3>
                                <p>@lang('app.01_comprehensive_goals')</p>
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
                        <h3 class="wow fadeInUp">@lang('app.see-the-difference')</h3>
                        <h2   data-cursor="-opaque">@lang('app.our-real-patient-transformation')</h2>
                    </div>
                    <!-- Section Title End -->
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <!-- Transformation Image Start -->
                    <div class="transformation-image wow fadeInUp" data-wow-delay="0.2s">
                        <figure class="transform-img-1">
                            <img src="{{ asset('public') }}/images/transformation-img-1.jpg" alt="">
                        </figure>
						<figure class="transform-img-2">
                            <img src="{{ asset('public') }}/images/transformation-img-2.jpg" alt="">
                        </figure>
                    </div>
                    <!-- Transformation Image End -->
                </div>

                <div class="col-md-6">
                    <!-- Transformation Image Start -->
                    <div class="transformation-image wow fadeInUp" data-wow-delay="0.4s">
                        <figure class="transform-img-1">
                            <img src="{{ asset('public') }}/images/transformation-img-3.jpg" alt="">
                        </figure>
						<figure class="transform-img-2">
                            <img src="{{ asset('public') }}/images/transformation-img-4.jpg" alt="">
                        </figure>
                    </div>
                    <!-- Transformation Image End -->
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
                                <h3><span class="counter">{{$sett->year_experience}}</span>+</h3>
                                <p>@lang('app.years-Of-experience')</p>
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
                                <p>@lang('app.staff-members')</p>
                            </div>
                        </div>
                        <!-- Facts Counter Item End -->

                        <!-- Facts Counter Item Start -->
                        <div class="facts-counter-item">
                            <div class="icon-box">
                                <img src="{{ asset('public') }}/images/icon-facts-counter-3.svg" alt="">
                            </div>
                            <div class="facts-counter-content">
                                <h3><span class="counter">{{$sett->awards}}</span></h3>
                                <p>@lang('app.awards')</p>
                            </div>
                        </div>
                        <!-- Facts Counter Item End -->

                        <!-- Facts Counter Item Start -->
                        <div class="facts-counter-item">
                            <div class="icon-box">
                                <img src="{{ asset('public') }}/images/icon-facts-counter-4.svg" alt="">
                            </div>
                            <div class="facts-counter-content">
                                <h3><span class="counter">{{$sett->happy_clients}}</span>+</h3>
                                <p>@lang('Happy-clients')</p>
                            </div>
                        </div>
                        <!-- Facts Counter Item End -->
                    </div>
                    <!-- Facts Counter Box End -->
                </div>
            </div>
        </div>
    </div>
</main>
@endsection
