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
                            <h3 class="m-3">My Appointments</h3>
                            @foreach ($appointments as $app)
                                <div class="card shadow-lg mb-4 border-0 rounded-4 doctor-card wow fadeInUp"
                                    data-wow-delay="0.2s">
                                    <div class="row g-0 align-items-center">
                                        <!-- Doctor Image -->
                                        <div class="col-md-4 text-center p-3">
                                            <img src="{{ url('file/dr/' . (@$app->image ?? 'avatar.jpg')) }}"
                                                alt="{{ $app->name }}"
                                                class="img-fluid rounded-circle border border-3 border-primary"
                                                style="width: 120px; height: 120px; object-fit: cover;">
                                        </div>

                                        <!-- Doctor Info -->
                                        <div class="col-md-8 p-3">
                                            <h4 class="mb-1 text-primary">
                                                {{ App::isLocale('ar') ? $app->user->name_ar : $app->user->name }}
                                            </h4>
                                            <p class="text-muted mb-1">
                                                {{ App::isLocale('ar') ? $app->service->title_ar : $app->service->title }}
                                            </p>
                                            <p class="small text-secondary">
                                                {{ App::isLocale('ar') ? $app->user->about_ar : $app->user->about }}
                                            </p>

                                            <!-- Appointment Stats -->
                                            <div class="d-flex justify-content-between mt-3">
                                                <div class="text-center">
                                                    <span class="d-block fw-bold text-dark">60</span>
                                                    <small class="text-muted">Meeting Time</small>
                                                </div>
                                                <div class="text-center">
                                                    <span class="d-block fw-bold text-dark">{{ $app->date }}</span>
                                                    <small class="text-muted">Date</small>
                                                </div>
                                                <div class="text-center">
                                                    <span class="d-block fw-bold text-dark">{{ $app->slot }}</span>
                                                    <small class="text-muted">Time Slot</small>
                                                </div>
                                            </div>

                                            <!-- Action Button -->
                                            <div class="mt-4 text-end">
                                                <a href="video-consultation.html?doctor=basem-elfeki"
                                                    class="btn btn-primary rounded-pill px-4 py-2">
                                                    Connect Consultation
                                                </a>
                                            </div>
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
