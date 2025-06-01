    <!-- Page Header Start -->
    @extends('layouts.front-app')
    @section('main-front')
        <main>
            <!-- Page Header Start -->
            <div class="container">
                @if (session('success'))
                    <div class="alert alert-success ">
                        {{ session('success') }}
                    </div>
                @endif
            </div>
            {{-- <div class="page-header bg-section dark-section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <!-- Page Header Box Start -->
                        <div class="page-header-box">
                            <h1 data-cursor="-opaque">WelCome </h1>
                        </div>
                        <!-- Page Header Box End -->
                    </div>
                </div>
            </div>
        </div>
        <!-- Page Header End --> --}}

            <!-- E-Clinic Section Start -->
            <div class="e-clinic bg-section">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4">
                             @include('layouts.front-sidebar')
                        </div>
                        <div class="col-md-8">
                            @foreach ($appointments as $app)
                                <div class="doctor-card wow fadeInUp" data-wow-delay="0.2s">
                                    <div class="doctor-info">
                                        <img src="{{ url('file/dr/' . (@$app->image ?? 'avatar.jpg')) }}"
                                            alt="{{ $app->name }}" class="doctor-photo">
                                        <div class="doctor-details">
                                            <h2>{{ App::isLocale('ar') ? $app->user->name_ar : $app->user->name }}
                                            </h2>
                                            <p>{{ App::isLocale('ar') ? $app->service->title_ar : $app->service->title }}
                                            </p>
                                            {{-- <p>{{$te->about}}</p> --}}
                                            <p>{{ App::isLocale('ar') ? $app->user->about_ar : $app->user->about }} </p>
                                            <div class="doctor-stats">
                                                <div><strong>60</strong><br>Meeting Time</div>
                                                <div><strong>{{ $app->date }}</strong><br>Date</div>
                                                <div><strong>{{ $app->slot }}</strong><br>Time Slot</div>
                                            </div>
                                        </div>
                                        <div class="doctor-actions">
                                            <a href="video-consultation.html?doctor=basem-elfeki"
                                                class="btn-outline">Connect Consultation</a>
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
