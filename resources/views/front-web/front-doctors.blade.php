    <!-- Page Header Start -->
    @extends('layouts.front-app')
    @section('main-front')
        <main>
            <!-- Page Header Start -->
            <div class="container">
                @if (session('success'))
                    <div class="alert alert-success" id="success-alert">
                        {{ session('success') }}
                    </div>

                    {{-- <script>
                        setTimeout(function() {
                            let alertBox = document.getElementById('success-alert');
                            if (alertBox) {
                                alertBox.style.transition = "opacity 0.5s ease-out";
                                alertBox.style.opacity = '0';
                                setTimeout(() => alertBox.remove(), 500); // Fully remove from DOM after fade out
                            }
                        }, 3000);
                    </script> --}}
                @endif
                @php
                    $dr = DB::table('users')->where('role', 'doctor')->get();
                @endphp
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
                            <div class="row">
                            @foreach ($dr as $d)
                                <div class="col-md-3 col-md-6 mt-4">
                                    <!-- Team Item Start -->
                                    <div class="team-item wow fadeInUp" data-wow-delay="1s">
                                        <!-- Team Image Start -->
                                        <div class="team-image">
                                            <a href="{{ url('team/' . $d->id) }}" data-cursor-text="View">
                                                <figure class="image-anime">
                                                    <img src="{{ url('file/dr/' . (@$d->image ?? 'avatar.jpg')) }}"
                                                        height="350">
                                                </figure>
                                            </a>
                                        </div>
                                        <!-- Team Image End -->

                                        <!-- Team Body Start -->
                                        <div class="team-body">
                                            <!-- Team Content Start -->
                                            <div class="team-content">
                                                <h3><a
                                                        href="{{ url('team/' . $d->id) }}">{{ App::isLocale('ar') ? $d->name_ar : $d->name }}</a>
                                                </h3>
                                            </div>
                                            <!-- Team Content End -->

                                            <!-- Team Social Icons Start -->
                                            <div class="team-social-icons">
                                                {{-- <p> {{ App::isLocale('ar') ? @$d->about_ar : @$d->about }}</p> --}}
                                                <ul>
                                                    <li><a href="{{ $d->ins_url }}"><i
                                                                class="fa-brands fa-instagram"></i></a></li>
                                                    <li><a href="{{ $d->fb_url }}"><i
                                                                class="fa-brands fa-facebook-f"></i></a></li>
                                                    <li><a href="{{ $d->x_url }}"><i
                                                                class="fa-brands fa-x-twitter"></i></a></li>
                                                </ul>
                                            </div>
                                            <!-- Team Social Icons End -->
                                        </div>
                                        <!-- Team Body End -->
                                    </div>
                                    <!-- Team Item End -->
                                </div>
                            @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    @endsection
