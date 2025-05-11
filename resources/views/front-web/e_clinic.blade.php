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
                        <h1   data-cursor="-opaque">@lang('app.e_clinic')</h1>
                        <nav class="wow fadeInUp">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{url('/')}}">@lang('app.home')</a></li>
                                <li class="breadcrumb-item active" aria-current="page">@lang('app.e_clinic')</li>
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
                    <h3 class="wow fadeInUp">@lang('app.e_clinic')</h3>
                    <h2   data-cursor="-opaque">@lang('app.meet-our-expert-doctors')</h2>
                </div>
             </center>

            <!-- Section Title End -->

            <div class="row">
                <div class="col-lg-12">
                    @foreach ($teams as $te)
                    <div class="doctor-card wow fadeInUp" data-wow-delay="0.2s">
                        <div class="doctor-info">
                            <img src="{{ url('file/dr/' . (@$te->image ?? 'noimage.jpeg')) }}" alt="{{$te->name}}" class="doctor-photo">
                            <div class="doctor-details">
                                <h2>{{ App::isLocale('ar') ? $te->name_ar : $te->name }} &nbsp;&nbsp;<span class="badge">{{ App::isLocale('ar') ? $te->category_ar : $te->category }}</span></h2>
                                <p>{{ App::isLocale('ar') ? $te->service->title_ar : $te->service->title }} </p>
                                {{-- <p>{{$te->about}}</p> --}}
                                  <p>{{ App::isLocale('ar') ? $te->about_ar : $te->about }} </p>
                                <div class="doctor-stats">
                                    <div><strong>15 - 30 Min</strong><br>@lang('app.wait-time')</div>
                                    <div><strong>{{$te->experience}}</strong><br>@lang('app.experience')</div>
                                    <div><strong>98% (559)</strong><br>@lang('app.satisfied-patients')</div>
                                </div>
                            </div>
                            <div class="doctor-actions">
                                <a href="video-consultation.html?doctor=basem-elfeki" class="btn-outline">Video Consultation</a>
                                <a href="book-appointment-dr-basem-elfeki.html" class="btn-primary">Book Appointment</a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    </main>
    @endsection
