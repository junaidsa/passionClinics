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
                    <h1 class="text-anime-style-3" data-cursor="-opaque">About us</h1>
                    <nav class="wow fadeInUp">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="about.html">home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">about us</li>
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
                        <h3 class="wow fadeInUp">our approach</h3>
                        <h2 class="text-anime-style-3" data-cursor="-opaque">Transforming beauty with precision and care</h2>
                        <p class="wow fadeInUp" data-wow-delay="0.2s">At Glowix, we believe that beauty is a blend of art and science. Our approach is centered on personalized care, advanced techniques.</p>
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
                                <h3>our mission</h3>
                                <p>Our Comprehensive Consultation is a thorough meeting with one of our specialists to understand your goals.</p>
                            </div>
                        </div>
                        <!-- Mission Vision Item End -->

                        <!-- Mission Vision Item Start -->
                        <div class="mission-vison-item">
                            <div class="icon-box">
                                <img src="{{ asset('public') }}/images/icon-vision.svg" alt="">
                            </div>
                            <div class="mission-vison-content">
                                <h3>our vision</h3>
                                <p>Our Comprehensive Consultation is a thorough meeting with one of our specialists to understand your goals.</p>
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

<!-- What We Do section Start -->
<div class="what-we-do">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-4">
                <!-- What We Image Start -->
                <div class="what-we-image-2">
                    <figure class="image-anime">
                        <img src="{{ asset('public') }}/images/" alt="">
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
                        <a href="{{url('/contact')}}" class="btn-default">learn more</a>
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
<!-- Our Testimonials Section Start -->
<div class="our-testimonials bg-section dark-section">
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
                            <h3><span class="counter">34</span></h3>
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
                            <h3><span class="counter">500</span>+</h3>
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
</main>
@endsection
