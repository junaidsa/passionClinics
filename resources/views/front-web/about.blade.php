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
                            <p><a href="tel:0112880840">0112880840</a></p>
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
                        <img src="{{ asset('public') }}/images/img1.avif" alt="">
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

<!-- Our Journey Section Start -->
<div class="our-journey dark-section bg-section">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <!-- Our Journey Image Start -->
                <div class="our-journey-image">
                    <!-- Journey Image Start -->
                    <div class="journey-img">
                        <figure class="image-anime reveal">
                            <img src="{{ asset('public') }}/images/journey-img-1.jpg" alt="">
                        </figure>
                    </div>
                    <!-- Journey Image End -->

                    <!-- Journey Image Start -->
                    <div class="journey-img">
                        <figure class="image-anime reveal">
                            <img src="{{ asset('public') }}/images/journey-img-2.jpg" alt="">
                        </figure>
                    </div>
                    <!-- Journey Image End -->

                    <!-- Journey Image Box Start -->
                    <div class="journey-image-box">
                        <!-- Journey Image Start -->
                        <div class="journey-img">
                            <figure class="image-anime reveal">
                                <img src="{{ asset('public') }}/images/journey-img-3.jpg" alt="">
                            </figure>
                        </div>
                        <!-- Journey Image End -->

                    </div>
                </div>
                <!-- Our Journey Image End -->
            </div>

            <div class="col-lg-6">
                <!-- Our Journey Content Start -->
                <div class="our-journey-content">
                    <!-- Section Title Start -->
                    <div class="section-title">
                        <h3 class="wow fadeInUp">our journey</h3>
                        <h2 class="wow fadeInUp" data-wow-delay="0.2s" data-cursor="-opaque">Your journey to radiant confidence</h2>
                    </div>
                    <!-- Section Title End -->

                    <!-- Our Journey List Start -->
                    <div class="our-journey-list wow fadeInUp" data-wow-delay="0.4s">
                        <ul>
                            <li>Decades of Trust, Timeless</li>
                            <li>The Art & Science of Beauty</li>
                            <li>From Vision to Transformation</li>
                            <li>Milestones in Excellence</li>
                        </ul>
                    </div>
                    <!-- Our Journey List End -->

                    <!-- Our Journey Body Start -->
                    <div class="our-journey-body wow fadeInUp" data-wow-delay="0.6s">
                        <!-- Journey Item Start -->
                        <div class="journey-item">
                            <div class="icon-box">
                                <img src="{{ asset('public') }}/images/icon-journey-1.svg" alt="">
                            </div>
                            <div class="journey-item-content">
                                <h3>Shaping the Future of Aesthetics</h3>
                            </div>
                        </div>
                        <!-- Journey Item End -->

                        <!-- Journey Item Start -->
                        <div class="journey-item">
                            <div class="icon-box">
                                <img src="{{ asset('public') }}/images/icon-journey-2.svg" alt="">
                            </div>
                            <div class="journey-item-content">
                                <h3>Where Passion Meets Perfection</h3>
                            </div>
                        </div>
                        <!-- Journey Item End -->
                    </div>
                    <!-- Our Journey Body End -->

                    <!-- Our Journey Button Start -->
                    <div class="our-journey-btn wow fadeInUp" data-wow-delay="0.8s">
                        <a href="contact.html" class="btn-default btn-highlighted">contact us</a>
                    </div>
                    <!-- Our Journey Button End -->
                </div>
                <!-- Our Journey Content End -->
            </div>
        </div>
    </div>
</div>
<!-- Our Journey Section End -->

<!-- Our Team Section Start -->
<div class="our-team">
    <div class="container">
        <div class="row section-row align-items-center">
            <div class="col-lg-12">
                <!-- Section Title Start -->
                <div class="section-title section-title-center">
                    <h3 class="wow fadeInUp">Our team</h3>
                    <h2 class="text-anime-style-3" data-cursor="-opaque">Meet the experts behind your transformation</h2>
                </div>
                <!-- Section Title End -->
            </div>
        </div>

        <div class="row">
            <div class="col-lg-3 col-md-6">
                <!-- Team Item Start -->
                <div class="team-item wow fadeInUp">
                    <!-- Team Image Start -->
                    <div class="team-image">
                        <a href="team-single.html" data-cursor-text="View">
                            <figure class="image-anime">
                                <img src="{{ asset('public') }}/images/team-1.jpg" alt="">
                            </figure>
                        </a>
                    </div>
                    <!-- Team Image End -->

                    <!-- Team Body Start -->
                    <div class="team-body">
                        <!-- Team Content Start -->
                        <div class="team-content">
                            <h3><a href="team-single.html">Dr. neha verma</a></h3>
                        </div>
                        <!-- Team Content End -->

                        <!-- Team Social Icons Start -->
                        <div class="team-social-icons">
                            <ul>
                                <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                                <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fa-brands fa-dribbble"></i></a></li>
                            </ul>
                        </div>
                        <!-- Team Social Icons End -->
                    </div>
                    <!-- Team Body End -->
                </div>
                <!-- Team Item End -->
            </div>

            <div class="col-lg-3 col-md-6">
                <!-- Team Item Start -->
                <div class="team-item wow fadeInUp" data-wow-delay="0.2s">
                    <!-- Team Image Start -->
                    <div class="team-image">
                        <a href="team-single.html" data-cursor-text="View">
                            <figure class="image-anime">
                                <img src="{{ asset('public') }}/images/team-2.jpg" alt="">
                            </figure>
                        </a>
                    </div>
                    <!-- Team Image End -->

                    <!-- Team Body Start -->
                    <div class="team-body">
                        <!-- Team Content Start -->
                        <div class="team-content">
                            <h3><a href="team-single.html">Cameron williamson</a></h3>
                        </div>
                        <!-- Team Content End -->

                        <!-- Team Social Icons Start -->
                        <div class="team-social-icons">
                            <ul>
                                <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                                <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fa-brands fa-dribbble"></i></a></li>
                            </ul>
                        </div>
                        <!-- Team Social Icons End -->
                    </div>
                    <!-- Team Body End -->
                </div>
                <!-- Team Item End -->
            </div>

            <div class="col-lg-3 col-md-6">
                <!-- Team Item Start -->
                <div class="team-item wow fadeInUp" data-wow-delay="0.4s">
                    <!-- Team Image Start -->
                    <div class="team-image">
                        <a href="team-single.html" data-cursor-text="View">
                            <figure class="image-anime">
                                <img src="{{ asset('public') }}/images/team-3.jpg" alt="">
                            </figure>
                        </a>
                    </div>
                    <!-- Team Image End -->

                    <!-- Team Body Start -->
                    <div class="team-body">
                        <!-- Team Content Start -->
                        <div class="team-content">
                            <h3><a href="team-single.html">Dr. ayesha kapoor</a></h3>
                        </div>
                        <!-- Team Content End -->

                        <!-- Team Social Icons Start -->
                        <div class="team-social-icons">
                            <ul>
                                <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                                <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fa-brands fa-dribbble"></i></a></li>
                            </ul>
                        </div>
                        <!-- Team Social Icons End -->
                    </div>
                    <!-- Team Body End -->
                </div>
                <!-- Team Item End -->
            </div>

            <div class="col-lg-3 col-md-6">
                <!-- Team Item Start -->
                <div class="team-item wow fadeInUp" data-wow-delay="0.6s">
                    <!-- Team Image Start -->
                    <div class="team-image">
                        <a href="team-single.html" data-cursor-text="View">
                            <figure class="image-anime">
                                <img src="{{ asset('public') }}/images/team-4.jpg" alt="">
                            </figure>
                        </a>
                    </div>
                    <!-- Team Image End -->

                    <!-- Team Body Start -->
                    <div class="team-body">
                        <!-- Team Content Start -->
                        <div class="team-content">
                            <h3><a href="team-single.html">Dr. rahul mehta</a></h3>
                        </div>
                        <!-- Team Content End -->

                        <!-- Team Social Icons Start -->
                        <div class="team-social-icons">
                            <ul>
                                <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                                <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fa-brands fa-dribbble"></i></a></li>
                            </ul>
                        </div>
                        <!-- Team Social Icons End -->
                    </div>
                    <!-- Team Body End -->
                </div>
                <!-- Team Item End -->
            </div>
        </div>
    </div>
</div>
<!-- Our Team Section End -->

<!-- Our Testimonials Section Start -->
<div class="our-testimonials bg-section dark-section">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="our-testimonial-image">
                    <figure class="image-anime reveal">
                        <img src="{{ asset('public') }}/images/testimonial-image.jpg" alt="">
                    </figure>
                </div>
            </div>

            <div class="col-lg-6">
                <!-- Our Testimonial Content Start -->
                <div class="our-testimonial-content">
                    <!-- Section Title Start -->
                    <div class="section-title">
                        <h3 class="wow fadeInUp">testimonials</h3>
                        <h2 class="text-anime-style-3" data-cursor="-opaque">Life-Changing results from our clients</h2>
                        <p class="wow fadeInUp" data-wow-delay="0.2s">"The expertise and care I received here were outstanding. I couldn't be happier with my results Thanks to the team, I feel more confident than ever before. Highly recommend From consultation to aftercare, everything was perfect. My transformation exceeded my expectations.!"</p>
                    </div>
                    <!-- Section Title End -->

                    <!-- Testimonial Content Button Start -->
                    <div class="testimonial-author-details wow fadeInUp" data-wow-delay="0.4s">
                        <h3>Kristin Watson</h3>
                        <p>Co. founder</p>
                    </div>
                    <!-- Testimonial Content Button End -->
                </div>
                <!-- Our Testimonial Content End -->
            </div>

            <div class="col-lg-12">
                <!-- Testimonial Slider Start -->
                <div class="testimonial-slider">
                    <div class="swiper">
                        <div class="swiper-wrapper" data-cursor-text="Drag">
                            <!-- Testimonial Slide Start -->
                            <div class="swiper-slide">
                                <div class="testimonial-item">
                                    <div class="testimonial-item-content">
                                        <p>"From start to finish, they made the process so easy and stress-free. The results themselves I've never felt better about my appearance. The clinic truly understands beauty!"</p>
                                    </div>
                                    <div class="testimonial-author">
                                        <div class="author-image">
                                            <figure class="image-anime">
                                                <img src="{{ asset('public') }}/images/author-1.jpg" alt="">
                                            </figure>
                                        </div>
                                        <div class="author-content">
                                            <h3>Kristin Watson</h3>
                                            <p>Co. founder</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Testimonial Slide End -->

                            <!-- Testimonial Slide Start -->
                            <div class="swiper-slide">
                                <div class="testimonial-item">
                                    <div class="testimonial-item-content">
                                        <p>"From start to finish, they made the process so easy and stress-free. The results themselves I've never felt better about my appearance. The clinic truly understands beauty!"</p>
                                    </div>
                                    <div class="testimonial-author">
                                        <div class="author-image">
                                            <figure class="image-anime">
                                                <img src="{{ asset('public') }}/images/author-2.jpg" alt="">
                                            </figure>
                                        </div>
                                        <div class="author-content">
                                            <h3>Brooklyn Simmons</h3>
                                            <p>Skin Experts</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Testimonial Slide End -->

                            <!-- Testimonial Slide Start -->
                            <div class="swiper-slide">
                                <div class="testimonial-item">
                                    <div class="testimonial-item-content">
                                        <p>"From start to finish, they made the process so easy and stress-free. The results themselves I've never felt better about my appearance. The clinic truly understands beauty!"</p>
                                    </div>
                                    <div class="testimonial-author">
                                        <div class="author-image">
                                            <figure class="image-anime">
                                                <img src="{{ asset('public') }}/images/author-3.jpg" alt="">
                                            </figure>
                                        </div>
                                        <div class="author-content">
                                            <h3>Darlene Robertson</h3>
                                            <p>Mohs Surgeon</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Testimonial Slide End -->

                            <!-- Testimonial Slide Start -->
                            <div class="swiper-slide">
                                <div class="testimonial-item">
                                    <div class="testimonial-item-content">
                                        <p>"From start to finish, they made the process so easy and stress-free. The results themselves I've never felt better about my appearance. The clinic truly understands beauty!"</p>
                                    </div>
                                    <div class="testimonial-author">
                                        <div class="author-image">
                                            <figure class="image-anime">
                                                <img src="{{ asset('public') }}/images/author-4.jpg" alt="">
                                            </figure>
                                        </div>
                                        <div class="author-content">
                                            <h3>Arlene McCoy</h3>
                                            <p>Dermatopathologist</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Testimonial Slide End -->
                        </div>
                    </div>
                </div>
                <!-- Testimonial Slider End -->
            </div>
        </div>
    </div>
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
                            <h3><span class="counter">18</span>+</h3>
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
