@extends('layouts.front-app')
@section('main-front')
@include('layouts.hero')
<main>

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
                            <h2 class="text-anime-style-3" data-cursor="-opaque">Your journey to radiant confidence</h2>
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
                        <h3 class="wow fadeInUp">Services</h3>
                        <p class="wow fadeInUp" data-wow-delay="0.2s">
                            Feel beautiful, be beautiful</p>
                        <h2 class="text-anime-style-3" data-cursor="-opaque">Again Discover yourself</h2>
                        <p class="wow fadeInUp" data-wow-delay="0.2s">With over 18 years of experience in the field, Passion Clinics offer the Kingdom and the Middle East a unique luxury experience by adopting the latest and most advanced technologies in cosmetic surgery and non-cosmetic cosmetic procedures</p>
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
                            <h3 class="wow fadeInUp">what we do</h3>
                            <h2 class="text-anime-style-3" data-cursor="-opaque">Experience the transformation</h2>
                            <p class="wow fadeInUp" data-wow-delay="0.2s">Our services are there in order to create a more attractive figure and help you feel more attractive and proud of your body</p>
                        </div>
                        <!-- Section Title End -->

                        <!-- About Experience List Start -->
                        <div class="about-experience-list wow fadeInUp" data-wow-delay="0.4s">
                            <ul>
                                <li>Restore Firmness and Shape</li>
                                <li>Minimize and Improve Scars</li>
                                <li>Incredible possibilities</li>
                            </ul>
                        </div>
                        <!-- About Experience List End -->

                        <!-- What We Button Start -->
                        <div class="what-we-btn wow fadeInUp" data-wow-delay="0.6s">
                            <a href="contact.html" class="btn-default">learn more</a>
                        </div>
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
                            <p>Years of Experirnce</p>
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
                            <video autoplay="" muted="" loop="" id="introVideo"><source src="{{ url('file/video/' . (@$sett->video ?? 'avatar.jpg')) }}" type="video/mp4"></video>
                            <!-- Selfhosted Video End -->
                        </div>
                        <!-- Video Play Button Start -->

                        <!-- Video Play Button Start -->
                        <div class="video-play-button">
                            <a href="{{$sett->youtube_url}}" class="popup-video" data-cursor-text="Play">Play</a>
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
                            <h3 class="wow fadeInUp">Our Facility</h3>
                            <h2 class="text-anime-style-3" data-cursor="-opaque">Results now & forever</h2>
                            <p class="wow fadeInUp" data-wow-delay="0.2s">The state of-the-art facility Boasts a luxurious 7 star visitor experience with our 15 dedicated high and clinical procedure rooms, 4 cutting-edge smart operating theaters 6 lavish suits and dedicated ample spaces and amenities to address the patient's needs and requirements. Passion Clinics also created a dedicated studio room for digitally produced before and after imagery with high tech medical 3D simulation mirroring the end result of your procedure with accuracy rate 90%.</p>
                        </div>
                        <!-- Section Title End -->

                        <!-- Case Study Button Start -->
                        <div class="case-study-btn wow fadeInUp" data-wow-delay="0.4s">
                            <a href="{{url('/contact')}}" class="btn-default">Contact Us</a>
                        </div>
                        <!-- Case Study Button End -->
                    </div>
                    <!-- Case Study Content End -->
                </div>

                <div class="col-lg-8">
                    {{-- <div class="row">
                        <div class="col-md-6">
                            <!-- Case Study Item Start -->
                            <div class="case-study-item wow fadeInUp">
                                <!-- Case Study Image Start -->
                                <div class="case-study-image">
                                    <a href="case-study-single.html" data-cursor-text="View">
                                        <figure class="image-anime">
                                            <img src="{{ asset('public') }}/images/case-study-image-1.jpg" alt="">
                                        </figure>
                                    </a>
                                </div>
                                <!-- Case Study Image End -->

                                <!-- Case Study Body Start -->
                                <div class="case-study-body">
                                    <!-- Case Study Content Start -->
                                    <div class="case-study-item-content">
                                        <h3><a href="case-study-single.html">Restoring Youthful Radiance</a></h3>
                                    </div>
                                    <!-- Case Study Content End -->

                                    <!-- Case Study Button Start -->
                                    <div class="case-study-readmore-btn">
                                        <a href="case-study-single.html" class="readmore-btn"><img src="{{ asset('public') }}/images/arrow-white.svg" alt=""></a>
                                    </div>
                                    <!-- Case Study Button End -->
                                </div>
                                <!-- Case Study Body End -->
                            </div>
                            <!-- Case Study Item End -->
                        </div>

                        <div class="col-md-6">
                            <!-- Case Study Item Start -->
                            <div class="case-study-item wow fadeInUp" data-wow-delay="0.2s">
                                <!-- Case Study Image Start -->
                                <div class="case-study-image">
                                    <a href="case-study-single.html" data-cursor-text="View">
                                        <figure class="image-anime">
                                            <img src="{{ asset('public') }}/images/case-study-image-2.jpg" alt="">
                                        </figure>
                                    </a>
                                </div>
                                <!-- Case Study Image End -->

                                <!-- Case Study Body Start -->
                                <div class="case-study-body">
                                    <!-- Case Study Content Start -->
                                    <div class="case-study-item-content">
                                        <h3><a href="case-study-single.html">Natural & Beautiful Results</a></h3>
                                    </div>
                                    <!-- Case Study Content End -->

                                    <!-- Case Study Button Start -->
                                    <div class="case-study-readmore-btn">
                                        <a href="case-study-single.html" class="readmore-btn"><img src="{{ asset('public') }}/images/arrow-white.svg" alt=""></a>
                                    </div>
                                    <!-- Case Study Button End -->
                                </div>
                                <!-- Case Study Body End -->
                            </div>
                            <!-- Case Study Item End -->
                        </div>

                        <div class="col-md-6">
                            <!-- Case Study Item Start -->
                            <div class="case-study-item wow fadeInUp" data-wow-delay="0.4s">
                                <!-- Case Study Image Start -->
                                <div class="case-study-image">
                                    <a href="case-study-single.html" data-cursor-text="View">
                                        <figure class="image-anime">
                                            <img src="{{ asset('public') }}/images/case-study-image-3.jpg" alt="">
                                        </figure>
                                    </a>
                                </div>
                                <!-- Case Study Image End -->

                                <!-- Case Study Body Start -->
                                <div class="case-study-body">
                                    <!-- Case Study Content Start -->
                                    <div class="case-study-item-content">
                                        <h3><a href="case-study-single.html">Restoring Post-Pregnancy Beauty</a></h3>
                                    </div>
                                    <!-- Case Study Content End -->

                                    <!-- Case Study Button Start -->
                                    <div class="case-study-readmore-btn">
                                        <a href="case-study-single.html" class="readmore-btn"><img src="{{ asset('public') }}/images/arrow-white.svg" alt=""></a>
                                    </div>
                                    <!-- Case Study Button End -->
                                </div>
                                <!-- Case Study Body End -->
                            </div>
                            <!-- Case Study Item End -->
                        </div>

                        <div class="col-md-6">
                            <!-- Case Study Item Start -->
                            <div class="case-study-item wow fadeInUp" data-wow-delay="0.6s">
                                <!-- Case Study Image Start -->
                                <div class="case-study-image">
                                    <a href="case-study-single.html" data-cursor-text="View">
                                        <figure class="image-anime">
                                            <img src="{{ asset('public') }}/images/case-study-image-4.jpg" alt="">
                                        </figure>
                                    </a>
                                </div>
                                <!-- Case Study Image End -->

                                <!-- Case Study Body Start -->
                                <div class="case-study-body">
                                    <!-- Case Study Content Start -->
                                    <div class="case-study-item-content">
                                        <h3><a href="case-study-single.html">A Smoother, Glowing Complexion</a></h3>
                                    </div>
                                    <!-- Case Study Content End -->

                                    <!-- Case Study Button Start -->
                                    <div class="case-study-readmore-btn">
                                        <a href="case-study-single.html" class="readmore-btn"><img src="{{ asset('public') }}/images/arrow-white.svg" alt=""></a>
                                    </div>
                                    <!-- Case Study Button End -->
                                </div>
                                <!-- Case Study Body End -->
                            </div>
                            <!-- Case Study Item End -->
                        </div>
                    </div> --}}
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
                            <p>18 years experience</p>
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
                            <h3 class="wow fadeInUp">why choose us</h3>
                            <h2 class="text-anime-style-3" data-cursor="-opaque">Experience the art of beauty with expert hands</h2>
                            <p class="wow fadeInUp" data-wow-delay="0.2s">Experience personalized care and transformative results with our expert team, dedicated to enhancing your techniques and exceptional service.</p>
                        </div>
                        <!-- Section Title End -->

                        <!-- Why Choose Contact Box Start -->
                        <div class="why-choose-contact-box">
                            <h3 class="wow fadeInUp" data-wow-delay="0.4s">"Delivering Exceptional Care Expert Treatments, Solutions Your Beauty, Boost Confidence, and Ensure Outstanding Results with Support Every Step of Your Journey."</h3>
                            <div class="why-choose-contact-item wow fadeInUp" data-wow-delay="0.6s">
                                <div class="icon-box">
                                    <img src="{{ asset('public') }}/images/author-2.jpg" alt="">
                                    <i class="fa-solid fa-phone"></i>
                                </div>
                                <div class="why-choose-contact-item-content">
                                    <p>Contact Us: <a href="tel:{{$sett->phone_number}}">{{$sett->phone_number}}</a></p>
                                </div>
                            </div>
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
                            <h3 class="wow fadeInUp">how it work</h3>
                            <h2 class="text-anime-style-3" data-cursor="-opaque">Simple steps to stunning transformations</h2>
                            <p class="wow fadeInUp" data-wow-delay="0.2s">Discover a seamless process designed to enhance your beauty personalized consultations to expert procedures and dedicated aftercare, we guide you every step of the way toward achieving stunning.</p>
                        </div>
                        <!-- Section Title End -->

                        <!-- How Work Button Start -->
                        <div class="how-work-btn wow fadeInUp" data-wow-delay="0.4s">
                            <a href="contact.html" class="btn-default">contact us</a>
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
                                <h3>01. Comprehensive Consultation</h3>
                                <p>Our Comprehensive Consultation is a thorough meeting with one of our specialists to understand your goals.</p>
                            </div>
                        </div>
                        <!-- How Work Step Item End -->

                        <!-- How Work Step Item Start -->
                        <div class="how-work-step-item wow fadeInUp" data-wow-delay="0.2s">
                            <div class="icon-box">
                                <img src="{{ asset('public') }}/images/icon-how-work-step-2.svg" alt="">
                            </div>
                            <div class="how-work-step-content">
                                <h3>02. Personalized Treatment Plan</h3>
                                <p>Our Comprehensive Consultation is a thorough meeting with one of our specialists to understand your goals.</p>
                            </div>
                        </div>
                        <!-- How Work Step Item End -->

                        <!-- How Work Step Item Start -->
                        <div class="how-work-step-item wow fadeInUp" data-wow-delay="0.4s">
                            <div class="icon-box">
                                <img src="{{ asset('public') }}/images/icon-how-work-step-3.svg" alt="">
                            </div>
                            <div class="how-work-step-content">
                                <h3>03. Expert Procedures</h3>
                                <p>Our Comprehensive Consultation is a thorough meeting with one of our specialists to understand your goals.</p>
                            </div>
                        </div>
                        <!-- How Work Step Item End -->

                        <!-- How Work Step Item Start -->
                        <div class="how-work-step-item wow fadeInUp" data-wow-delay="0.6s">
                            <div class="icon-box">
                                <img src="{{ asset('public') }}/images/icon-how-work-step-4.svg" alt="">
                            </div>
                            <div class="how-work-step-content">
                                <h3>04. Ongoing Support & Follow-Up</h3>
                                <p>Our Comprehensive Consultation is a thorough meeting with one of our specialists to understand your goals.</p>
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
                        <h3 class="wow fadeInUp">See the Difference</h3>
                        <h2 class="text-anime-style-3" data-cursor="-opaque">Our real patient transformation & stunning results</h2>
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
                                <p>Years Of Experience</p>
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
                                <p>Staff members</p>
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
                                <p>Awards</p>
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
                                <p>Happy clients</p>
                            </div>
                        </div>
                        <!-- Facts Counter Item End -->
                    </div>
                    <!-- Facts Counter Box End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Our Result Section End -->

    <!-- Our Appointment Section Start -->
    <div class="our-appointment bg-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 order-lg-1 order-2">
                    <!-- Our Appointment Image Start -->
                    <div class="our-appointment-image">
                        <figure>
                            <img src="{{ asset('public') }}/images/appointment-image.png" alt="">
                        </figure>
                    </div>
                    <!-- Our Appointment Image End -->
                </div>

                <div class="col-lg-6 order-lg-2 order-1">
                    <!-- Appointment Form Start -->
                    <div class="appointment-form">
                        <!-- Section Title Start -->
                        <div class="section-title">
                            <h3 class="wow fadeInUp">Say Hello to a Perfect shape</h3>
                            <h2 class="text-anime-style-3" data-cursor="-opaque">If you're not sure what you'd like to do, click on the button and book a gernal appointment</h2>
                        </div>
                        <!-- Section Title End -->

                        <!-- Contact Us Form Start -->
                        <form id="appointmentForm" action="#" method="POST" data-toggle="validator" class="wow fadeInUp" data-wow-delay="0.2s">
                            <div class="row">
                                <div class="form-group col-md-6 mb-4">
                                    <input type="text" name="fname" class="form-control" id="fname" placeholder="First Name" required="">
                                    <div class="help-block with-errors"></div>
                                </div>

                                <div class="form-group col-md-6 mb-4">
                                    <input type="text" name="lname" class="form-control" id="lname" placeholder="Last Name" required="">
                                    <div class="help-block with-errors"></div>
                                </div>

                                <div class="form-group col-md-6 mb-4">
                                    <input type="email" name="email" class="form-control" id="email" placeholder="Email Address" required="">
                                    <div class="help-block with-errors"></div>
                                </div>

                                <div class="form-group col-md-6 mb-4">
                                    <input type="text" name="phone" class="form-control" id="phone" placeholder="Phone Number" required="">
                                    <div class="help-block with-errors"></div>
                                </div>

                                <div class="form-group col-md-6 mb-4">
                                    <input type="date" name="date" class="form-control" id="date" required="">
                                    <div class="help-block with-errors"></div>
                                </div>

                                <div class="form-group col-md-6 mb-4">
                                    <select name="doctor" class="form-control form-select" id="doctor" required="">
                                        <option value="" disabled="" selected="">Choose Doctor</option>
                                        <option value="beginner_yoga_classes">Dr. Neha Verma</option>
                                        <option value="stress_relief_sessions">Cameron Williamson</option>
                                        <option value="mindful_meditation">Dr. Ayesha Kapoor</option>
                                        <option value="relaxation_techniques">Dr. Karan Gohel</option>
                                        <option value="group_yoga_workshops">Dr. Aryan Malhotra</option>
                                        <option value="restorative_yoga">Dr. Aisha Kapoor</option>
                                        <option value="mental_clarity_meditation">Dr. Rahul Mehta</option>
                                        <option value="personalized_yoga_sessions">Dr. Emily Verma</option>
                                    </select>
                                    <div class="help-block with-errors"></div>
                                </div>

                                <div class="col-lg-12">
                                    <div class="contact-form-btn">
                                        <button type="submit" class="btn-default">get appointment</button>
                                        <div id="msgSubmit" class="h3 hidden"></div>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <!-- Contact Us Form End -->
                    </div>
                    <!-- Appointment Form Start -->
                </div>
            </div>
        </div>
    </div>
    <!-- Our Appointment Section End -->

    <!-- Our Blog Section Start -->
 <!-- Our Blog Section Start -->
 @include('front-web.component.blogs')
 <!-- Our Blog Section End -->
    <!-- Our Blog Section End -->

</main>
@endsection
