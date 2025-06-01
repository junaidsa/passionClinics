<!DOCTYPE html>
{{-- <html lang="zxx"> --}}
{{-- <html lang="{{ app()->getLocale() }}" dir="{{ app()->getLocale() == 'ar' ? 'rtl' : 'ltr' }}"> --}}
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="{{ app()->getLocale() === 'ar' ? 'rtl' : 'ltr' }}">


<head>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="Awaiken">
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <!-- Page Title -->
    <title>Passion Clinics</title>
    <!-- Favicon Icon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('public') }}/images/fav.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Naskh+Arabic&display=swap" rel="stylesheet">

    <h2 style="font-family: 'Noto Naskh Arabic', sans-serif;" data-cursor="-opaque">
        {{ App::isLocale('ar') ? @$about->about_title_ar : @$about->about_title }}
    </h2>



    <!-- Bootstrap Css -->

    @if (app()->getLocale() == 'ar')
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.rtl.min.css">
    @else
        <link href="{{ asset('public') }}/css/bootstrap.min.css" rel="stylesheet" media="screen">
    @endif
    <!-- SlickNav Css -->
    <link href="{{ asset('public') }}/css/slicknav.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('public') }}/css/swiper-bundle.min.css">
    <!-- Font Awesome Icon Css-->
    <!-- Swiper Css -->
    <link href="{{ asset('public') }}/css/all.min.css" rel="stylesheet" media="screen">
    <!-- Animated Css -->
    <link href="{{ asset('public') }}/css/animate.css" rel="stylesheet">
    <!-- Magnific Popup Core Css File -->
    <link rel="stylesheet" href="{{ asset('public') }}/css/magnific-popup.css">
    <!-- Mouse Cursor Css File -->
    <link rel="stylesheet" href="{{ asset('public') }}/css/mousecursor.css">
    <!-- Main Custom Css -->
    <link href="{{ asset('public') }}/css/custom.css" rel="stylesheet" media="screen">
    <link href="https://cdn.jsdelivr.net/npm/flag-icons/css/flag-icons.min.css" rel="stylesheet">
    <!-- In your layout <head> -->

    <style>
        li {
            list-style: none !important;
        }

        .alert-box {
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background-color: #d4edda;
            color: #155724;
            padding: 20px 30px;
            border: 1px solid #c3e6cb;
            border-radius: 5px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.2);
            z-index: 9999;
            font-size: 18px;
            animation: fadeInOut 3s forwards;
        }

        @keyframes fadeInOut {
            0% {
                opacity: 0;
            }

            10% {
                opacity: 1;
            }

            90% {
                opacity: 1;
            }

            100% {
                opacity: 0;
            }
        }

        .dropdown-menu-end[data-bs-popper] {
            right: 0;
            left: auto;
        }


        /* When Arabic is active */
        .dropdown-menu-end.lang-ar[data-bs-popper] {
            margin-top: 1rem;
            right: auto !important;
            left: 0 !important;
        }

        html[dir="rtl"] .footer-contact-item li {
            flex-direction: row-reverse;
            text-align: right;
        }

        html[dir="rtl"] .footer-contact-item li i {
            margin-left: 0.5rem;
            margin-right: 0;
        }
    </style>
</head>

<body>

    @php
        $sett = DB::table('settings')->where('id', 1)->first();
    @endphp
    <!-- Preloader Start -->
    <div class="preloader">
        <div class="loading-container">
            <div class="loading"></div>
            <div id="loading-icon"><img src="{{ asset('public') }}/images/fav.png" alt=""></div>
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
                            <h2 data-cursor="-opaque">@lang('app.footer-dis')</h2>
                        </div>
                        <!-- Section Title End -->

                        <!-- Footer Newsletter Form Start -->
                        <div class="footer-newsletter-form">
                            <form id="newslettersForm" action="#" method="POST">
                                <div class="form-group">
                                    <input type="email" name="mail" class="form-control" id="mail"
                                        placeholder="Enter your email" required="">
                                    <button type="submit" class="readmore-btn"><img src="images/arrow-white.svg"
                                            alt=""></button>
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
                            <p>@lang('app.footer-dis')</p>
                        </div>
                        <!-- About Footer Content End -->

                        <!-- Footer Social Link Start -->
                        <div class="footer-social-links">
                            <ul>
                                <li><a href="{{ $sett->x_url }}"><i class="fa-brands fa-x-twitter"></i></a></li>
                                <li><a href="{{ $sett->fb_url }}"><i class="fa-brands fa-facebook-f"></i></a></li>
                                <li><a href="{{ $sett->ins_url }}"><i class="fa-brands fa-instagram"></i></a></li>
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
                                <li><a href="{{ url('/') }}">@lang('app.home')</a></li>
                                <li><a href="{{ url('/about') }}">@lang('app.about_us')</a></li>
                                <li><a href="{{ url('/services') }}">@lang('app.services')</a></li>
                                <li><a href="{{ url('/e-clinic') }}">@lang('app.e_clinic')</a></li>
                                <li><a href="{{ url('/teams') }}">@lang('app.our_team')</a></li>
                                <li><a href="{{ url('/contact') }}">@lang('app.contact_us')</a></li>
                            </ul>
                        </div>
                        <!-- Footer Links End -->

                        <!-- Footer Links Start -->
                        <div class="footer-links">
                            <h3>@lang('app.working-hours'):</h3>
                            <ul>
                                <li>SAT - THU 09:00 AM - 07:00 PM</li>
                                <li>@lang('app.fri-closed')</li>
                            </ul>
                        </div>
                        <!-- Footer Links End -->
                    </div>

                    <!-- Footer Contact Box Start -->
                    <div class="footer-contact-box">
                        <!-- Footer Contact Item Start -->
                        <div class="footer-links footer-contact-item">
                            <h3>@lang('app.Contact'):</h3>
                            <ul>
                                <li><i class="fa-solid fa-phone"></i><a
                                        href="tel:123456789">{{ @$sett->phone_number }}</a></li>
                            </ul>
                        </div>
                        <!-- Footer Contact Item End -->

                        <!-- Footer Contact Item Start -->
                        <div class="footer-links footer-contact-item">
                            <h3>@lang('app.e-mail'):</h3>
                            <ul>
                                <li><i class="fa-solid fa-envelope"></i><a
                                        href="mailto:{{ @$sett->email }}">{{ @$sett->email }}</a></li>
                            </ul>
                        </div>
                        <!-- Footer Contact Item End -->

                        <!-- Footer Contact Item Start -->
                        <div class="footer-links footer-contact-item">
                            <h3>@lang('app.address'):</h3>
                            <ul>
                                <li><i class="fa-solid fa-location-dot"></i>{{ @$sett->address }}</li>
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
    @yield('javascript')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Hide alert after 3 seconds
        setTimeout(function() {
            let alertBox = document.getElementById('success-alert');
            if (alertBox) {
                alertBox.style.transition = "opacity 0.5s ease-out";
                alertBox.style.opacity = '0';
                setTimeout(() => alertBox.remove(), 500); // Fully remove from DOM after fade out
            }
        }, 3000);



        // Set the language and direction on page load
        const savedLang = localStorage.getItem('lang') || 'en';
        document.documentElement.lang = savedLang;
        document.documentElement.dir = savedLang === 'ar' ? 'rtl' : 'ltr';

        // Update flag icon
        const flagElement = document.getElementById('selected-language-flag');
        if (flagElement) {
            if (savedLang === 'en') {
                flagElement.className = "fi fi-us fis rounded-circle me-1 fs-2";
            } else if (savedLang === 'ar') {
                flagElement.className = "fi fi-sa fis rounded-circle me-1 fs-2";
            }
        }

        // Update dropdown class based on language
        const dropdownMenu = document.querySelector('.dropdown-menu-end');
        if (dropdownMenu) {
            dropdownMenu.classList.remove('lang-en', 'lang-ar');
            dropdownMenu.classList.add(savedLang === 'ar' ? 'lang-ar' : 'lang-en');
        }

        // Language change handler
        $(document).ready(function() {
            $('.dropdown-item').on('click', function(e) {
                e.preventDefault();

                const selectedLang = $(this).data('language');
                localStorage.setItem('lang', selectedLang);

                const csrfToken = $('meta[name="csrf-token"]').attr('content');

                $.ajax({
                    url: "{{ route('language.set') }}",
                    type: "POST",
                    data: {
                        language: selectedLang,
                        _token: csrfToken
                    },
                    success: function() {
                        // alert('Language changed successfully');
                        location.reload();
                    },
                    error: function(xhr, status, error) {
                        console.error("There was an error changing the language:", error);
                    }
                });
            });
        });
    </script>

</body>

</html>
