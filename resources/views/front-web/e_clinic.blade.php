    <!-- Page Header Start -->
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
                                <h1 data-cursor="-opaque">{{ __('lang.E_CLINIC') }}</h1>
                                <nav class="wow fadeInUp">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="{{ url('/') }}">{{ __('lang.HOME') }}</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">{{ __('lang.E_CLINIC') }}</li>
                                    </ol>
                                </nav>
                            </div>
                            <!-- Page Header Box End -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- Page Header End -->

            <!-- E-Clinic Section Start -->
            <div class="e-clinic bg-section">
                <div class="container">
                    <!-- Section Title Start -->
                    <center>
                        <br><br><br>
                        <div class="section-title">
                            <h3 class="wow fadeInUp">{{ __('lang.E_CLINIC') }}</h3>
                            <h2 data-cursor="-opaque">{{ __('lang.MEET_OUR_EXPERT_DOCTORS') }}</h2>
                        </div>
                    </center>

                    <!-- Section Title End -->

                    <div class="row">
                        <div class="col-lg-12">
                            @foreach ($teams as $te)
                                <div class="doctor-card wow fadeInUp" data-wow-delay="0.2s">
                                    <div class="doctor-info">
                                        <img src="{{ url('file/dr/' . (@$te->image ?? 'avatar.jpg')) }}"
                                            alt="{{ $te->name }}" class="doctor-photo">
                                        <div class="doctor-details">
                                            <h2>{{ App::isLocale('ar') ? $te->name_ar : $te->name }} &nbsp;&nbsp;<span
                                                    class="badge">{{ App::isLocale('ar') ? $te->category_ar : $te->category }}</span>
                                            </h2>
                                            <p>{{ App::isLocale('ar') ? $te->service->title_ar : $te->service->title }} </p>
                                            {{-- <p>{{$te->about}}</p> --}}
                                            <p>{{ App::isLocale('ar') ? $te->about_ar : $te->about }} </p>
                                            <div class="doctor-stats">
                                                <div><strong>15 - 30 Min</strong><br>{{ __('lang.WAIT_TIME') }}</div>
                                                <div><strong>{{ $te->experience }}</strong><br>{{ __('lang.EXPERIENCE') }}</div>
                                                <div><strong>98% (559)</strong><br>{{ __('lang.SATISFIED_PATIENTS') }}</div>
                                            </div>
                                        </div>
                                        <div class="doctor-actions">
                                            <a href="#" class="btn-outline">Video
                                                Consultation</a>
                                            <a href="{{ url('clinic/appointment/' . $te->id ) }}" class="btn-primary" >Book
                                                Appointment</a>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="modal fade" id="appointment" tabindex="-1" aria-labelledby="loginModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content contact-info-item w-100">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="loginModalLabel">Appointment</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body w-100">
                                    <!-- Login Form -->

                                    {{-- <form id="login_form" method="POST">
                                        @csrf
                                        <div class="mb-3">
                                            <label for="email" class="form-label">Email</label>
                                            <input type="email" class="form-control" id="email" name="email"
                                                placeholder="Enter Email">
                                            <div class="invalid-feedback" id="email_error"></div>
                                        </div>
                                        <div class="mb-3">
                                            <label for="password" class="form-label">Password</label>
                                            <input type="password" class="form-control" id="password" name="password"
                                                placeholder="Enter Password">
                                            <div class="invalid-feedback" id="password_error"></div>
                                        </div>
                                        <div class="text-danger mb-2" id="login_error"></div>
                                        <button type="submit" class="btn-default w-100 p-3 rounded">Login</button>
                                    </form> --}}
                                    <form>
                                        <div class="mb-3">
                                            <label for="name">Name:</label>
                                            <input type="text" class="form-control" id="name" name="name"
                                                placeholder="Enter your name">
                                        </div>

                                        <div class="mb-3">
                                            <label for="email">Email:</label>
                                            <input type="email" class="form-control" id="email" name="email"
                                                placeholder="Enter your email">
                                        </div>

                                        <div class="mb-3">
                                            <label for="phone">Phone:</label>
                                            <input type="tel" class="form-control" id="phone" name="phone"
                                                placeholder="Enter your phone number">
                                        </div>

                                        <div class="mb-3">
                                            <label for="date">Preferred Date:</label>
                                            <input type="date" class="form-control" id="date" name="date">
                                        </div>

                                        <div class="mb-3">
                                            <label for="time">Preferred Time:</label>
                                            <input type="time" class="form-control" id="time" name="time">
                                        </div>

                                        <div class="mb-3">
                                            <label for="message">Note:</label>
                                            <textarea class="form-control" id="message" name="message" rows="3"
                                                placeholder="Briefly describe the reason for your appointment"></textarea>
                                        </div>

                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    @endsection
