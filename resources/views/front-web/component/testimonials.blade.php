@php
$testimonial = DB::table('testimonials')->where('id',1)->first();
$testimonials = DB::table('testimonials')->get();
@endphp
<div class="container">
    <div class="row align-items-center">
        <div class="col-lg-6">
            <div class="our-testimonial-image">
                <figure class="image-anime reveal">
                    <img src="{{ url('file/testimonial/' . (@$testimonial->avatar ?? 'avatar.jpg')) }}" alt="">
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
                    <p class="wow fadeInUp" data-wow-delay="0.2s">{{$testimonial->message}}</p>
                </div>
                <!-- Section Title End -->

                <!-- Testimonial Content Button Start -->
                <div class="testimonial-author-details wow fadeInUp" data-wow-delay="0.4s">
                    <h3>{{$testimonial->name}}</h3>
                    <p>{{$testimonial->designation}}</p>
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
                                    <p>{{$t->message}}</p>
                                </div>
                                <div class="testimonial-author">
                                    <div class="author-image">
                                        <figure class="image-anime">
                                            <img src="{{ url('file/testimonial/' . (@$t->avatar ?? 'avatar.jpg')) }}" alt="">
                                        </figure>
                                    </div>
                                    <div class="author-content">
                                        <h3>{{$t->name}}</h3>
                                        <p>{{$t->designation}}</p>
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
