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
						<h1  >{{$service->title}}</h1>
						<nav class="wow fadeInUp">
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="{{url('/')}}">home</a></li>
								<li class="breadcrumb-item"><a href="{{url('services')}}">services</a></li>
								<li class="breadcrumb-item active" aria-current="page">{{$service->title}}</li>
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
                    <!-- Page Single Sidebar Start -->
            @include('front-web.component.silder')
                    <!-- Page Single Sidebar End -->
                </div>

                <div class="col-lg-8">
                    <!-- Service Single Content Start -->
                    <div class="service-single-content">
                        <!-- Page Single image Start -->
                        <div class="page-single-image">
                            <figure class="image-anime reveal">
                                <img src="{{ url('file/service/' . (@$service->main_image ?? 'noimage.jpeg')) }}" alt="">
                            </figure>
                        </div>
                        <!-- Page Single image End -->

                        <!-- Service Entry Start -->
                        <div class="service-entry">

                            <p class="wow fadeInUp" data-wow-delay="0.2s">{{$service->short_description}}.</p>

                            <!-- Service Expert Box Start -->
                                    @php
                                    $features = DB::table('service_features')->where('service_id',$service->id)->get();
                                    @endphp
 @if ($features->count() > 0)
                            <div class="service-enhance-box">
                                <!-- Service Expert Item List Start -->
                                <div class="service-enhance-item-list">


                                    <!-- Service Expert Item Start -->

                                    @foreach ($features as $f)
                                    <div class="service-enhance-item wow fadeInUp" data-wow-delay="0.4s">
                                        <div class="icon-box">
                                            <img src="{{ url('file/features/' . (@$f->icon ?? 'noimage.jpeg')) }}" alt="">
                                        </div>
                                        <div class="service-enhance-item-content">
                                            <h3>{{$f->title}}</h3>
                                            <p>{{$f->description}}.</p>
                                        </div>
                                    </div>
                                    @endforeach
                                    <!-- Service Expert Item End -->
                                </div>
                                <!-- Service Expert Item List End -->

                                <!-- Service Entry Image Video Start -->
                                <div class="servie-entry-video-image intro-video-box">
                                    <div class="servie-entry-image">
                                        <figure class="image-anime reveal">
                                            <img src="{{ url('file/video/' . (@$service->video_thumbnail ?? 'noimage.jpeg')) }}" alt="">
                                        </figure>
                                    </div>
                                    <div class="video-play-button">
                                        <a href="{{$service->video_url}}" class="popup-video" data-cursor-text="Play">Play</a>
                                    </div>
                                </div>
                                <!-- Service Entry Image Video End -->
                            </div>
                            @endif
                            <!-- Service Expert Box End -->

                            <!-- Service Archive Box Start -->
                            <div class="service-achieve-box">

                                {!!$service->description!!}

                                    {{-- {! $service->description !} --}}

                            <!-- Service Archive Box End -->
                        </div>
                        <!-- Service Entry End -->

                        <!-- Page Single FAQs start -->
                        <div class="page-single-faqs">
                            <!-- Section Title Start -->
                            <div class="section-title">
                                <h2  >Got questions? we've got answers!</h2>
                            </div>
                            <!-- Section Title End -->

                            <!-- FAQ Accordion Start -->
                            @php
                            $faq = DB::table('faqs')->where('service_id', $service->id)->get();
                        @endphp

                        @if ($faq->count() > 0)
                            <div class="faq-accordion" id="accordion-{{ $service->id }}">
                                @foreach ($faq as $fq)
                                    @php
                                        $headingId = 'heading' . $loop->iteration . '-' . $service->id;
                                        $collapseId = 'collapse' . $loop->iteration . '-' . $service->id;
                                    @endphp
                                    <!-- FAQ Item Start -->
                                    <div class="accordion-item wow fadeInUp" data-wow-delay="0.2s">
                                        <h2 class="accordion-header" id="{{ $headingId }}">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse"
                                                data-bs-target="#{{ $collapseId }}"
                                                aria-expanded="false"
                                                aria-controls="{{ $collapseId }}">
                                                {{ $loop->iteration }}. {{ $fq->question }}
                                            </button>
                                        </h2>
                                        <div id="{{ $collapseId }}" class="accordion-collapse collapse"
                                            aria-labelledby="{{ $headingId }}"
                                            data-bs-parent="#accordion-{{ $service->id }}">
                                            <div class="accordion-body">
                                                <p>{{ $fq->answer }}</p>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- FAQ Item End -->
                                @endforeach
                            </div>
                        @endif

                        </div>
                        <!-- Page Single FAQs End -->
                    </div>
                    <!-- Service Single Content End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Page Service Single End -->
    </main>
    @endsection
