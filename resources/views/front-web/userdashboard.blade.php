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
        <div class="page-header bg-section dark-section">
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
        <!-- Page Header End -->

        <!-- E-Clinic Section Start -->
        <div class="e-clinic bg-section">
            <div class="container">
             <div class="row">
             <div class="col-md-4">
                        <div class="card border-0 shadow p-4 text-center mt-4 rounded-3">
                            <!-- Profile image container (relative) -->
                            <div class="position-relative d-inline-block">
                                <!-- Profile Image -->
                                <img src="{{ asset('public/files/2025-05-04_11-10-53-image.jpg') }}" alt="Profile Image"
                                    class="rounded-circle img-fluid"
                                    style="width: 150px; height: 150px; object-fit: cover;">

                                <!-- Pencil Icon on top-right of image -->
                                <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal"
                                    class="position-absolute d-flex justify-content-center align-items-center bg-white rounded-circle shadow"
                                    style="top: 7rem; right: 7rem; width: 30px; height: 30px;">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="black"
                                        class="bi bi-pencil" viewBox="0 0 16 16">
                                        <path
                                            d="M12.146.854a.5.5 0 0 1 .708 0l2.292 2.292a.5.5 0 0 1 0 .708l-9.439 9.44a.5.5 0 0 1-.168.11l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .11-.168l9.44-9.44zM11.207 2 13 3.793 14.293 2.5 12.5.707 11.207 2zM10.5 2.707 2 11.207V13h1.793l8.5-8.5-1.793-1.793z" />
                                    </svg>
                                </a>
                            </div>

                            <!-- Name and Designation -->
                            <h5 class="mt-3 mb-0">{{ Auth::user()->name ?? 'User Name' }}</h5>
                            <p class="text-muted fs-6">{{ Auth::user()->designation ?? 'Designation' }}</p>
                        </div>


                        <!-- Sidebar Navigation -->
                        <div class="card account-nav border-0 shadow mt-4">
                            <div class="card-body p-0">
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item p-3">
                                        <a href="#" class="text-decoration-none text-dark">Account Settings</a>
                                    </li>
                                    <li class="list-group-item p-3">
                                        <a href="#" class="text-decoration-none text-dark">Post a Job</a>
                                    </li>
                                    <li class="list-group-item p-3">
                                        <a href="#" class="text-decoration-none text-dark">My Jobs</a>
                                    </li>
                                    <li class="list-group-item p-3">
                                        <a href="#" class="text-decoration-none text-dark">Jobs Applied</a>
                                    </li>
                                    <li class="list-group-item p-3">
                                        <a href="#" class="text-decoration-none text-dark">Saved Jobs</a>
                                    </li>
                                    <li class="list-group-item p-3">
                                        <a href="{{ route('logout') }}" class="text-decoration-none text-danger fw-bold"
                                            onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                            @csrf
                                        </form>
                                    </li>
                                </ul>
                            </div>
                        </div>
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
                                            <p>{{ App::isLocale('ar') ? $app->service->title_ar : $app->service->title }} </p>
                                            {{-- <p>{{$te->about}}</p> --}}
                                            <p>{{ App::isLocale('ar') ? $app->user->about_ar : $app->user->about }} </p>
                                            <div class="doctor-stats">
                                                <div><strong>60</strong><br>Meeting Time</div>
                                                <div><strong>{{ $app->date }}</strong><br>Date</div>
                                                <div><strong>{{ $app->slot }}</strong><br>Time Slot</div>
                                            </div>
                                        </div>
                                        <div class="doctor-actions">
                                            <a href="video-consultation.html?doctor=basem-elfeki" class="btn-outline">Connect Consultation</a>
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
