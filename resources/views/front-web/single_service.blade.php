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
                            <h1>   {{ App::isLocale('ar') ? @$service->title_ar : @$service->title_en }}</h1>
                            <nav class="wow fadeInUp">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{ url('/') }}">home</a></li>
                                    <li class="breadcrumb-item"><a href="{{ url('services') }}">services</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">{{ $service->title_en }}</li>
                                </ol>
                            </nav>
                        </div>
                        <!-- Page Header Box End -->
                    </div>
                </div>
            </div>
        </div>
        <!-- Page Header End -->

        <!-- Page Service Single Start -->
        <div class="page-service-single">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4">
                        @include('front-web.component.silder')
                    </div>

                    <div class="col-lg-8">
                        <!-- Service Single Content Start -->
                        <div class="service-single-content">
                            <!-- Page Single image Start -->
                            <div class="page-single-image">
                                <figure class="image-anime reveal">
                                    <img src="{{ url('file/service/' . (@$service->main_image ?? 'avatar.jpg')) }}"
                                        alt="">
                                </figure>
                            </div>
                            <!-- Page Single image End -->

                            <!-- Service Entry Start -->
                            <div class="service-entry">

                                <p class="wow fadeInUp" data-wow-delay="0.2s">{{ App::isLocale('ar') ? @$service->short_description_ar : @$service->short_description_en }}.</p>

                                <!-- Service Expert Box Start -->
                                @php
                                    $features = DB::table('service_features')->where('service_id', $service->id)->get();
                                @endphp
                                <br>
                                <div class="service-achieve-box">

                                {{ App::isLocale('ar') ? @$service->description_ar : @$service->description_en }}

                                    {{-- {! $service->description !} --}}

                                    <!-- Service Archive Box End -->
                                </div>
                                <!-- Service Entry End -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Page Service Single End -->
    </main>
@endsection
