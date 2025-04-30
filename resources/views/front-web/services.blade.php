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
						<h1 class="text-anime-style-3" data-cursor="-opaque">Our services</h1>
						<nav class="wow fadeInUp">
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="services.html">home</a></li>
								<li class="breadcrumb-item active" aria-current="page">services</li>
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
                        <h3 class="wow fadeInUp">Services</h3>
                        <p class="wow fadeInUp" data-wow-delay="0.2s">
                            Feel beautiful, be beautiful</p>
                        <h2 class="text-anime-style-3" data-cursor="-opaque">Again Discover yourself</h2>
                        <p class="wow fadeInUp" data-wow-delay="0.2s">With over 18 years of experience in the field, Passion Clinics offer the Kingdom and the Middle East a unique luxury experience by adopting the latest and most advanced technologies in cosmetic surgery and non-cosmetic cosmetic procedures</p>
                    </div>
                    <!-- Section Title End -->
                </div>
            </div>

  @include('front-web.component.services')

                    <!-- Service Item End -->
                </div>

                <div class="col-lg-12">
                    <!-- Section Footer Text Start -->
                    <div class="section-footer-text wow fadeInUp" data-wow-delay="1.2s">
                        <p><span>Free</span>Let's make something great work together. <a href="contact.html">Get Free Quote</a></p>
                    </div>
                    <!-- Section Footer Text End -->
                </div>
            </div>
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
                                <img src="{{ asset('public') }}/images/img.avif" alt="">
                            </figure>
                        </div>

                        <!-- Years Experience Text Start -->
                        <div class="years-experience-text">
                            <p>25years experience</p>
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
                                    <p>Contact Us: <a href="tel:123456789">(+22) 123 456 789</a></p>
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
    </main>
    @endsection
