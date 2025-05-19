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
                            <h1  >@lang('app.our_services')</h1>
                            <nav class="wow fadeInUp">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{url('/')}}">@lang('app.home')</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">@lang('app.services')</li>
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
                            <h3 class="wow fadeInUp">@lang('app.services')</h3>
                            <p class="wow fadeInUp" data-wow-delay="0.2s">@lang('app.feel_beautiful_be_beautiful')</p>
                            <h2  >@lang('app.again_discover_yourself')</h2>
                            <p class="wow fadeInUp" data-wow-delay="0.2s">@lang('app.services_description')</p>
                        </div>
                        <!-- Section Title End -->
                    </div>
                </div>
                @include('front-web.component.services')
                <!-- Service Item End -->
            </div>
        </div>
        <!-- Page Services End -->
        <!-- Our Testimonials Section End -->
    </main>
@endsection
