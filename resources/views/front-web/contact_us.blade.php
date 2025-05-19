    <!-- Page Header Start -->
    @extends('layouts.front-app')
    @section('main-front')
        <main>
            <div class="page-header bg-section dark-section">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <!-- Page Header Box Start -->
                            <div class="page-header-box">
                                <h1 data-cursor="-opaque">@lang('app.contact_us')</h1>
                                <nav class="wow fadeInUp">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="{{url('/')}}">@lang('app.home')</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">@lang('app.contact_us')</li>
                                    </ol>
                                </nav>
                            </div>
                            <!-- Page Header Box End -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- Page Header End -->

            <!-- Page Contact Us Start -->
            <div class="page-contact-us">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4">
                            <!-- Contact Us Content Start -->
                            <div class="contact-us-content">
                                <!-- Section Title Start -->
                                <div class="section-title">
                                    <h2 class=" " data-cursor="-opaque"> @lang('app.reach-out')
                                    </h2>
                                    <p class="wow fadeInUp" data-wow-delay="0.2s">@lang('app.reach-out-care')</p>
                                </div>
                                <!-- Section Title End -->
                            </div>
                            <!-- Contact Us Content End -->
                        </div>

                        <div class="col-lg-8">
                            <!-- Contact Info List Start -->
                            <div class="contact-info-list">
                                <!-- Contact Info Item Start -->
                                <div class="contact-info-item wow fadeInUp" data-wow-delay="0.4s">
                                    <div class="icon-box">
                                        <img src="{{ asset('public') }}/images/icon-location.svg" alt="">
                                    </div>
                                    <div class="contact-info-content">
                                        <h3>@lang('location')</h3>
                                        <p>Al Olaya, Riyadh 12214, Saudi Arabia</p>
                                    </div>
                                </div>
                                <!-- Contact Info Item End -->

                                <!-- Contact Info Item Start -->
                                <div class="contact-info-item wow fadeInUp" data-wow-delay="0.6s">
                                    <div class="icon-box">
                                        <img src="{{ asset('public') }}/images/icon-phone.svg" alt="">
                                    </div>
                                    <div class="contact-info-content">
                                        <h3>@lang('app.contact_us')</h3>
                                        <p><a href="tel:+22123456789">{{@$sett->phone_number}}</a></p>
                                    </div>
                                </div>
                                <!-- Contact Info Item End -->

                                <!-- Contact Info Item Start -->
                                <div class="contact-info-item wow fadeInUp" data-wow-delay="0.8s">
                                    <div class="icon-box">
                                        <img src="{{ asset('public') }}/images/icon-mail.svg" alt="">
                                    </div>
                                    <div class="contact-info-content">
                                        <h3>@lang('app.email')</h3>
                                        <p><a href="mailto:{{@$sett->email}}">{{@$sett->email}}</a></p>

                                    </div>
                                </div>
                                <!-- Contact Info Item End -->
                            </div>
                            <!-- Contact Info List End -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- Page Contact Us End -->

            <!-- Contact Form Start -->
            <div class="conatct-us-form">
                <div class="container">
                    <div class="row no-gutters">
                        <div class="col-lg-6">
                            <!-- Contact Form Start -->
                            <div class="contact-form">
                                <!-- Section Title Start -->
                                <div class="section-title">
                                    <h2 class=" " data-cursor="-opaque">@lang('app.questions')</h2>
                                </div>
                                <!-- Section Title End -->

                                @if (session('success'))
                                    <div id="flash-alert" class="alert-box">
                                        {{ session('success') }}
                                    </div>
                                @endif


                                <!-- Contact Form Start -->
                                <form action="{{ url('contact_form/insert') }}" method="POST">
                                    @csrf
                                    <div class="row">
                                        <div class="form-group col-md-6 mb-4">
                                            <input type="text" name="fname"
                                                class="form-control @error('fname') is-invalid @enderror" id="fname"
                                                placeholder="@lang('app.f_name')" required="">
                                            @error('fname')
                                                <div class=" invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <div class="form-group col-md-6 mb-4">
                                            <input type="text" name="lname"
                                                class="form-control @error('lname') is-invalid @enderror" id="lname"
                                                placeholder="@lang('app.l_name')" required="">
                                            @error('lname')
                                                <div class=" invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <div class="form-group col-md-6 mb-4">
                                            <input type="text" name="phone"
                                                class="form-control @error('phone') is-invalid @enderror" id="phone"
                                                placeholder="@lang('app.phone_no')" required="">
                                            @error('phone')
                                                <div class=" invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <div class="form-group col-md-6 mb-4">
                                            <input type="email" name="email"
                                                class="form-control @error('email') is-invalid @enderror" id="email" placeholder="@lang('app.email')"
                                              required="">
                                            @error('email')
                                                <div class=" invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <div class="form-group col-md-12 mb-5">
                                            <textarea name="message" class="form-control @error('message') is-invalid @enderror" id="message" rows="4"
                                                placeholder="@lang('app.message')"></textarea>
                                            @error('message')
                                                <div class=" invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <div class="col-lg-12">
                                            <div class="contact-form-btn">
                                                {{-- <button type="submit" class="btn-default"><span>submit now</span></button> --}}
                                                <input type="submit" value="submit now" class="btn-default">

                                            </div>
                                        </div>
                                    </div>
                                </form>
                                <!-- Contact Form End -->
                            </div>
                            <!-- Contact Form End -->
                        </div>

                        <!-- Google Map Start -->
                        <div class="col-lg-6">
                            <!-- Google Map Iframe Start -->
                            <div class="google-map-iframe">
                                <iframe
                                    src="https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d3445.987651336342!2d46.729262475365104!3d24.679879178047607!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zMjTCsDQwJzQ3LjYiTiA0NsKwNDMnNTQuNiJF!5e1!3m2!1sen!2s!4v1745401576345!5m2!1sen!2s"
                                    width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                                    referrerpolicy="no-referrer-when-downgrade"></iframe>
                            </div>
                            <!-- Google Map Iframe End -->
                        </div>
                        <!-- Google Map End -->
                    </div>
                </div>
            </div>
        </main>
        <!-- Contact Form End -->
    @endsection

    @section('javascript')
        <script>
            setTimeout(function() {
                let alert = document.getElementById('flash-alert');
                if (alert) {
                    alert.style.display = 'none';
                }
            }, 4000);
        </script>
    @endsection
