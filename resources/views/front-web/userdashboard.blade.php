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
            </div>
            <!-- E-Clinic Section Start -->
            <div class="e-clinic bg-section">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4 mb-5">
                            @include('layouts.front-sidebar')
                        </div>
                        <div class="col-md-8" style="height: 100vh;">
                            <div class="d-flex justify-content-center align-items-center h-100">
                                <h1 class="text-center">Dashboard</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    @endsection
