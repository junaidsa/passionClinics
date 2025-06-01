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
            <!-- E-Clinic Section Start -->
            <div class="e-clinic bg-section">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4">
                            @include('layouts.front-sidebar')
                        </div>
                        <div class="col-md-8" style="height: 100vh;">
                            <div class="d-flex justify-content-center align-items-center h-100">
                                <h1 class="text-center">No Notification Found</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    @endsection
