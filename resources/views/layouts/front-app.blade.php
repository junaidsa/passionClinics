<!DOCTYPE html>
<html lang="zxx">
<head>
	<!-- Meta -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1">
	<meta name="description" content="">
	<meta name="keywords" content="">
	<meta name="author" content="Awaiken">
	<!-- Page Title -->
    <title>Passion Clinics</title>
	<!-- Favicon Icon -->
	<link rel="shortcut icon" type="image/x-icon" href="{{ asset('public') }}/images/logo11.png">
	<!-- Google Fonts Css-->
	<link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
    <link href="../css2?family=Marcellus&family=Sora:wght@100..800&display=swap" rel="stylesheet">
	<!-- Bootstrap Css -->
	<link href="{{ asset('public') }}/css/bootstrap.min.css" rel="stylesheet" media="screen">
	<!-- SlickNav Css -->
	<link href="{{ asset('public') }}/css/slicknav.min.css" rel="stylesheet">
	<!-- Swiper Css -->
	<link rel="stylesheet" href="{{ asset('public') }}/css/swiper-bundle.min.css">
	<!-- Font Awesome Icon Css-->
	<link href="{{ asset('public') }}/css/all.min.css" rel="stylesheet" media="screen">
	<!-- Animated Css -->
	<link href="{{ asset('public') }}/css/animate.css" rel="stylesheet">
    <!-- Magnific Popup Core Css File -->
	<link rel="stylesheet" href="{{ asset('public') }}/css/magnific-popup.css">
	<!-- Mouse Cursor Css File -->
	<link rel="stylesheet" href="{{ asset('public') }}/css/mousecursor.css">
	<!-- Main Custom Css -->
	<link href="{{ asset('public') }}/css/custom.css" rel="stylesheet" media="screen">
</head>
<body>

    <!-- Preloader Start -->
	<div class="preloader">
		<div class="loading-container">
			<div class="loading"></div>
			<div id="loading-icon"><img src="{{ asset('public') }}/images/loader.svg" alt=""></div>
		</div>
	</div>
	<!-- Preloader End -->
    @include('layouts.front-header')
@yield('main-front')

 <!-- Footer Main Start -->
 <footer class="main-footer bg-section dark-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <!-- Footer Header Start -->
                <div class="footer-header">
                    <!-- Section Title Start -->
                    <div class="section-title footer-newsletter-title">
                        <h2 class="text-anime-style-3" data-cursor="-opaque">Our latest insights on plastic surgery & skincare</h2>
                    </div>
                    <!-- Section Title End -->

                    <!-- Footer Newsletter Form Start -->
                    <div class="footer-newsletter-form">
                        <form id="newslettersForm" action="#" method="POST">
                            <div class="form-group">
                                <input type="email" name="mail" class="form-control" id="mail" placeholder="Enter your email" required="">
                                <button type="submit" class="readmore-btn"><img src="images/arrow-white.svg" alt=""></button>
                            </div>
                        </form>
                    </div>
                    <!-- Footer Newsletter Form End -->
                </div>
                <!-- Footer Header End -->
            </div>

            <div class="col-lg-4 col-md-12">
                <!-- About Footer start -->
                <div class="about-footer">
                    <!-- Footer Logo Start -->
                    <div class="footer-logo">
                        <img src="images/logo11.png" alt="">
                    </div>
                    <!-- Footer Logo End -->

                    <!-- About Footer Content Start -->
                    <div class="about-footer-content">
                        <p>Passion Clinics was founded in 2022 with a vision to create a leading cosmetic center offering plastic surgery and other specialized cosmetic procedures.</p>
                    </div>
                    <!-- About Footer Content End -->

                    <!-- Footer Social Link Start -->
                    <div class="footer-social-links">
                        <ul>
                            <li><a href="#"><i class="fa-brands fa-pinterest-p"></i></a></li>
                            <li><a href="#"><i class="fa-brands fa-x-twitter"></i></a></li>
                            <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                            <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                        </ul>
                    </div>
                    <!-- Footer Social Link End -->
                </div>
                <!-- About Footer End -->
            </div>

            <div class="col-lg-8">
                <div class="footer-links-box">
                    <!-- Footer Links Start -->
                    <div class="footer-links quick-links">
                        <h3>quick link</h3>
                        <ul>
                            <li><a href="index.html">Home</a></li>
                            <li><a href="about.html">About us</a></li>
                            <li><a href="services.html">services</a></li>
                            <li><a href="contact.html">Contact us</a></li>
                        </ul>
                    </div>
                    <!-- Footer Links End -->

                    <!-- Footer Links Start -->
                    <div class="footer-links">
                        <h3>Working hours:</h3>
                        <ul>
                            <li>SAT - THU 09:00 AM - 07:00 PM</li>
                            <li>Fri Closed</li>
                        </ul>
                    </div>
                    <!-- Footer Links End -->
                </div>

                <!-- Footer Contact Box Start -->
                <div class="footer-contact-box">
                    <!-- Footer Contact Item Start -->
                    <div class="footer-links footer-contact-item">
                        <h3>Contact:</h3>
                        <ul>
                            <li><i class="fa-solid fa-phone"></i><a href="tel:123456789">0112880840</a></li>
                        </ul>
                    </div>
                    <!-- Footer Contact Item End -->

                    <!-- Footer Contact Item Start -->
                    <div class="footer-links footer-contact-item">
                        <h3>E-mail:</h3>
                        <ul>
                            <li><i class="fa-solid fa-envelope"></i><a href="mailto:domainname@gmail.com">info@passionclinics.com</a></li>
                        </ul>
                    </div>
                    <!-- Footer Contact Item End -->

                    <!-- Footer Contact Item Start -->
                    <div class="footer-links footer-contact-item">
                        <h3>Address:</h3>
                        <ul>
                            <li><i class="fa-solid fa-location-dot"></i>Al Olaya, Riyadh 12214, Saudi Arabia</li>
                        </ul>
                    </div>
                    <!-- Footer Contact Item End -->
                </div>
                <!-- Footer Contact Box End -->
            </div>

            <div class="col-lg-12">
                <!-- Footer Copyright Section Start -->
                <div class="footer-copyright">
                    <!-- Footer Copyright Text Start -->
                    <div class="footer-copyright-text">
                        <p>Copyright © 2025 All Rights Reserved.</p>
                    </div>
                    <!-- Footer Copyright Text End -->

                    <!-- Footer Privacy Policy Start -->
                    <div class="footer-privacy-policy">
                        <ul>
                            <li><a href="#">Privacy policy</a></li>
                            <li><a href="#">Term's & condition</a></li>
                            <li><a href="#">help</a></li>
                        </ul>
                    </div>
                    <!-- Footer Privacy Policy End -->
                </div>
                <!-- Footer Copyright Section End -->
            </div>
        </div>
    </div>
</footer>
<!-- Footer Main End -->

<!-- Jquery Library File -->
<script src="{{ asset('public') }}/js/jquery-3.7.1.min.js"></script>
<!-- Bootstrap js file -->
<script src="{{ asset('public') }}/js/bootstrap.min.js"></script>
<!-- Validator js file -->
<script src="{{ asset('public') }}/js/validator.min.js"></script>
<!-- SlickNav js file -->
<script src="{{ asset('public') }}/js/jquery.slicknav.js"></script>
<!-- Swiper js file -->
<script src="{{ asset('public') }}/js/swiper-bundle.min.js"></script>
<!-- Counter js file -->
<script src="{{ asset('public') }}/js/jquery.waypoints.min.js"></script>
<script src="{{ asset('public') }}/js/jquery.counterup.min.js"></script>
<!-- Magnific js file -->
<script src="{{ asset('public') }}/js/jquery.magnific-popup.min.js"></script>
<!-- SmoothScroll -->
<script src="{{ asset('public') }}/js/SmoothScroll.js"></script>
<!-- Parallax js -->
<script src="{{ asset('public') }}/js/parallaxie.js"></script>
<!-- MagicCursor js file -->
<script src="{{ asset('public') }}/js/gsap.min.js"></script>
<script src="{{ asset('public') }}/js/magiccursor.js"></script>
<!-- Text Effect js file -->
<script src="{{ asset('public') }}/js/SplitText.js"></script>
<script src="{{ asset('public') }}/js/ScrollTrigger.min.js"></script>
<!-- YTPlayer js File -->
<script src="{{ asset('public') }}/js/jquery.mb.YTPlayer.min.js"></script>
<!-- Wow js file -->
<script src="{{ asset('public') }}/js/wow.min.js"></script>
<!-- Main Custom js file -->
<script src="{{ asset('public') }}/js/function.js"></script>
</body>
</html>
