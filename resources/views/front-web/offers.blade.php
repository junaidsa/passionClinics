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
                            <h1>{{ __('lang.OFFERS') }}</h1>
                            <nav class="wow fadeInUp">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{url('/')}}">{{ __('lang.HOME') }}</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">{{ __('lang.OFFERS') }}</li>
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
                            <h3 class="wow fadeInUp">{{ __('lang.OFFERS') }}</h3>
                            <p class="wow fadeInUp" data-wow-delay="0.2s">{{ __('lang.FEEL_BEAUTIFUL_BE_BEAUTIFUL') }}</p>
                            <h2>{{ __('lang.DISCOVER_YOURSELF_EXCLUSIVE_OFFERS') }}</h2>
                            <p class="wow fadeInUp" data-wow-delay="0.2s">{{ __('lang.OFFERS_DESCRIPTION') }}</p>
                        </div>
                        <!-- Section Title End -->
                    </div>
                </div>
                @include('front-web.component.offer')
                <!-- Service Item End -->
            </div>
        </div>
        <!-- Page Services End -->
    </main>
@endsection
