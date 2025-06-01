    <!-- Page Header Start -->
    @extends('layouts.front-app')
    @section('main-front')
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
        <main>
            <div class="page-header bg-section dark-section">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <!-- Page Header Box Start -->
                            <div class="page-header-box">
                                <h1 data-cursor="-opaque">@lang('app.appointment')</h1>
                                <nav class="wow fadeInUp">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="{{ url('/') }}">@lang('app.home')</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">@lang('app.appointment')</li>
                                    </ol>
                                </nav>
                            </div>
                            <!-- Page Header Box End -->
                        </div>
                    </div>
                </div>
            </div>

            <!-- Contact Form Start -->
            <div class="conatct-us-form">
                <div class="container">
                    <div class="row no-gutters">
                        <div class="col-md-10 mx-auto">
                            <!-- Contact Form Start -->
                            <div class="contact-form rounded">
                                <!-- Section Title Start -->
                                <div class="section-title">
                                    <h2 class=" " data-cursor="-opaque">@lang('app.appointment')</h2>
                                </div>
                                <!-- Section Title End -->

                                @if (session('success'))
                                    <div id="flash-alert" class="alert-box">
                                        {{ session('success') }}
                                    </div>
                                @endif
                                @php
                                    $location = DB::table('locations')->get();
                                    $service = DB::table('services')->get();
                                @endphp
                                {{-- {{ url('contact_form/insert') }} --}}

                                <form id="appointmentForm" action="{{ url('/appointment/store') }}" method="POST">
                                    @csrf
                                    <div class="row">
                                        <input type="hidden" id="staff" name="staff" value="{{ @$user->id }}">
                                        <div class="form-group col-md-6 mb-4">
                                              <label for="" class="form-label">Surgeon Name</label>
                                            <input type="text" name="name"
                                                class="form-control rounded @error('name') is-invalid @enderror"
                                                id="name" value="{{ @$user->name ?? '' }}" disabled>
                                            <div class="help-block with-errors"></div>
                                            @error('name')
                                                <div class=" invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>


                                        <div class="form-group col-md-6 mb-4">
                                            <label for="" class="form-label">Location</label>
                                            <select name="location" id="location" class="form-control rounded form-select"
                                                required="">
                                                @foreach ($location as $loc)
                                                    <option value="{{ $loc->id }}">{{ $loc->name }}</option>
                                                @endforeach
                                            </select>
                                            <div class="help-block with-errors"></div>
                                        </div>

                                        <div class="form-group col-md-6 mb-4">
                                             <label for="" class="form-label">Appointment Date</label>
                                            <input type="text" name="appointment_date"
                                                class="form-control rounded flatpickr-input" id="appointment_date"
                                                placeholder="Appointment Date">
                                            <div class="help-block with-errors"></div>
                                        </div>

                                        <div class="form-group col-md-6 mb-4">
                                        <label for="" class="form-label">Available Slot</label>
                                            <select class="form-control rounded" name="slots" id="slots"
                                                required="">
                                            </select>
                                            <div class="help-block with-errors"></div>
                                        </div>

                                        <div class="form-group col-md-12 mb-4">
                                            <textarea name="message" class="form-control rounded @error('message') is-invalid @enderror" id="message"
                                                rows="4" placeholder="@lang('app.note')"></textarea>
                                            <div class="help-block with-errors"></div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="contact-form-btn">
                                                <button type="submit"
                                                    class="btn-default rounded">@lang('app.create_an_appointmnt')</button>
                                                <div id="msgSubmit" class="h3 hidden"></div>
                                            </div>
                                        </div>
                                    </div>

                                </form>
                                <!-- Contact Form End -->
                            </div>
                            <!-- Contact Form End -->
                        </div>
                    </div>
                </div>
            </div>
        </main>
        <!-- Contact Form End -->
    @endsection

    @section('javascript')
        <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>


        <script>
            flatpickr("#appointment_date", {
                dateFormat: "Y-m-d", // You can change format as needed
                minDate: "today" // Disable past dates
            });


            setTimeout(function() {
                let alert = document.getElementById('flash-alert');
                if (alert) {
                    alert.style.display = 'none';
                }
            }, 4000);

            $('#appointment_date').on('change', function() {
                var staffId = $('#staff').val();
                var date = $('#appointment_date').val();

                if (staffId) {
                    $.ajax({
                        url: "{{ url('/get-slots-by-available') }}",
                        type: 'GET',
                        data: {
                            staff_id: staffId,
                            date: date
                        },
                        success: function(data) {
                            // console.log(data);
                            $('#slots').empty().append('<option value="">Select Slot</option>');
                            $.each(data, function(index, slot) {
                                $('#slots').append('<option value="' + slot + '">' + slot +
                                    '</option>');
                            });
                        },
                        error: function() {
                            alert('Failed to fetch slots.');
                        }
                    });
                } else {
                    $('#slots').empty().append('<option value="">Select Slot</option>');
                }
            });

            $('#appointmentForm').on('submit', function(e) {
        e.preventDefault();

        $.ajax({
            url: "{{ route('front.appointment.store') }}",
            type: "POST",
            data: $(this).serialize(),
            success: function(response) {
                if (response.status === 'success') {
                    Swal.fire({
                        icon: 'success',
                        title: 'Success!',
                        text: response.message,
                        confirmButtonColor: '#CD5F37',
                        confirmButtonText: 'OK'
                    }).then((result) => {
                        if (result.isConfirmed) {
                            window.location.href = "{{ url('/user/dashboard') }}";
                        }
                    });

                    $('#appointmentForm')[0].reset();
                }
            },
            error: function(xhr) {
                 if (xhr.status === 401) {
            Swal.fire({
                icon: 'warning',
                title: 'Not Logged In',
                text: 'Login Your Account.',
            });
        } else if (xhr.status === 422) {
            let errors = xhr.responseJSON.errors;
            let errorMessages = Object.values(errors).map(err => `• ${err[0]}`).join('\n');
            Swal.fire({
                icon: 'error',
                title: 'Validation Error',
                html: `<pre style="text-align:left;">${errorMessages}</pre>`,
            });
        } else {
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'Something went wrong!',
            });
        }
            }
        });
    });
        </script>
    @endsection
