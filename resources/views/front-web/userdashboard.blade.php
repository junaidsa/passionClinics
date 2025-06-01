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
                            {{-- <nav class="wow fadeInUp">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{url('/')}}">@lang('app.home')</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">@lang('app.e_clinic')</li>
                                </ol>
                            </nav> --}}
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

                </center>

                <!-- Section Title End -->

                <div class="row">
                    <div class="col-lg-12">

                    </div>
                </div>
            </div>
        </div>
    </main>
    @endsection
