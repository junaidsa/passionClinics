@php
$testimonial = DB::table('testimonials')->where('status',1)->first();
$testimonials = DB::table('testimonials')->get();
@endphp
<div class="container">
    <div class="row align-items-center">
        <div class="col-lg-6">
            <div class="our-testimonial-image">
                <figure class="image-anime reveal">
                    <img src="{{ url('file/testimonial/' . (@$testimonial->avatar ?? '')) }}" alt="">
                </figure>
            </div>
        </div>

        <div class="col-lg-6">
            <!-- Our Testimonial Content Start -->
            <div class="our-testimonial-content">
                <!-- Section Title Start -->
                <div class="section-title">
                    <h3 class="wow fadeInUp">@lang('app.testimonials')</h3>
                    <h2   data-cursor="-opaque">@lang('app.life-changing')</h2>
                    <p class="wow fadeInUp" data-wow-delay="0.2s">{{ App::isLocale('ar') ? @$testimonial->message_ar : @$testimonial->message}}</p>
                </div>
                <!-- Section Title End -->

                <!-- Testimonial Content Button Start -->
                <div class="testimonial-author-details wow fadeInUp" data-wow-delay="0.4s">
                    <h3>{{ App::isLocale('ar') ? @$testimonial->name_ar : @$testimonial->name}}</h3>
                    <p>{{ App::isLocale('ar') ? @$testimonial->designation_ar : @$testimonial->designation}}</p>
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
                        @foreach ($testimonials as $t)
                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <div class="testimonial-item-content">
                                    <p>{{ App::isLocale('ar') ? @$t->message_ar : @$t->message}}</p>
                                </div>
                                <div class="testimonial-author">
                                    <div class="author-image">
                                        <figure class="image-anime">
                                            <img src="{{ url('file/testimonial/' . (@$t->avatar ?? '')) }}" alt="">
                                        </figure>
                                    </div>
                                    <div class="author-content">
                                        <h3>{{ App::isLocale('ar') ? @$t->name_ar : @$t->name}}</h3>
                                        <p>{{ App::isLocale('ar') ? @$t->designation_ar : @$t->designation}}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Testimonial Slide End -->
                        @endforeach


                    </div>
                </div>
            </div>
            <!-- Testimonial Slider End -->
        </div>
    </div>
</div>
