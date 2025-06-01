@extends('layouts.app')
@section('main')
    <div class="container-xxl flex-grow-1 container-p-y">
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <div class="row g-4 mb-4">
            <div class="col-sm-6 col-xl-3">
                <div class="card">
                    @php
                        use Illuminate\Support\Facades\DB;
                        use Carbon\Carbon;
                        $totalAppointments = DB::table('appointments')->whereDate('date', Carbon::today())->count();
                        $totalstaff = DB::table('users')->where('role', 'doctor')->count();
                        $totalcustomer = DB::table('customers')->count();
                        $durationSetting = DB::table('settings')->where('id', 1)->value('slot_duration');
                    @endphp
                    <div class="card-body">
                        <div class="d-flex align-items-start justify-content-between">
                            <div class="content-left">
                                <span>Current Appointments</span>
                                <div class="d-flex align-items-center my-1">
                                    <h4 class="mb-0 me-2 text-center">{{ $totalAppointments }}</h4>
                                </div>
                            </div>
                            <span class="badge bg-label-primary rounded p-2">
                                <i class="ti ti-user ti-sm"></i>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-xl-3">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex align-items-start justify-content-between">
                            <div class="content-left">
                                <span>Total Staff</span>
                                <div class="d-flex align-items-center my-1">
                                    <h4 class="mb-0 me-2">{{ $totalstaff }}</h4>
                                </div>
                            </div>
                            <span class="badge bg-label-danger rounded p-2">
                                <i class="ti ti-user-plus ti-sm"></i>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-xl-3">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex align-items-start justify-content-between">
                            <div class="content-left">
                                <span>Total Customer</span>
                                <div class="d-flex align-items-center my-1">
                                    <h4 class="mb-0 me-2">{{ $totalcustomer }}</h4>
                                </div>
                            </div>
                            <span class="badge bg-label-success rounded p-2">
                                <i class="ti ti-user-check ti-sm"></i>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-xl-3">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex align-items-start justify-content-between">
                            <div class="content-left">
                                <span>Durations</span>
                                <div class="d-flex align-items-center my-1">
                                    <h4 class="mb-0 me-2">{{ $durationSetting }}</h4>
                                </div>
                            </div>
                            <span class="badge bg-label-warning rounded p-2">
                                <i class="ti ti-user-exclamation ti-sm"></i>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card app-calendar-wrapper">
            <div class="row g-0">



                <!-- Calendar & Modal -->
                <div id="calendar"></div>
            </div>
        </div>
        <!-- /Calendar & Modal -->
    </div>
    </div>
    </div>
@endsection
@section('javascript')
    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $("#appointmentsForm").submit(function(e) {
            e.preventDefault();

            $.ajax({
                url: '{{ route('appointment.store') }}', // Your Laravel route
                method: 'POST',
                dataType: 'json',
                data: $("#appointmentsForm").serialize(),
                success: function(response) {
                    if (response.status === true) {

                        $("#service").removeClass('is-invalid').siblings('div').removeClass(
                            'invalid-feedback').html('');
                        $("#staff").removeClass('is-invalid').siblings('div').removeClass(
                            'invalid-feedback').html('');
                        $("#appointment_date").removeClass('is-invalid').siblings('div').removeClass(
                            'invalid-feedback').html('');
                        $("#location").removeClass('is-invalid').siblings('div').removeClass(
                            'invalid-feedback').html('');
                        $("#customer").removeClass('is-invalid').siblings('div').removeClass(
                            'invalid-feedback').html('');
                        $("#slots").removeClass('is-invalid').siblings('div').removeClass(
                            'invalid-feedback').html('');
                        $("#appointment_status").removeClass('is-invalid').siblings('div').removeClass(
                            'invalid-feedback').html('');

                        Swal.fire({
                            title: 'Success',
                            text: response.message,
                            icon: 'success',
                            customClass: {
                                confirmButton: 'btn btn-success'
                            },
                            buttonsStyling: false
                        });
                        var sidebar = bootstrap.Offcanvas.getInstance(document.getElementById(
                            'addEventSidebar'));
                        sidebar.hide();
                        $('#appointmentsForm')[0].reset();
                    } else {
                        var errors = response.errors;
                        if (errors.location) {
                            $('#location').addClass('is-invalid').next('.invalid-feedback').text(errors
                                .location);
                        } else {
                            $('#location').removeClass('is-invalid').next('.invalid-feedback').text('');
                        }
                        if (errors.service) {
                            $('#service').addClass('is-invalid').next('.invalid-feedback').text(errors
                                .service);
                        } else {
                            $('#service').removeClass('is-invalid').next('.invalid-feedback').text('');
                        }
                        if (errors.staff) {
                            $('#staff').addClass('is-invalid').next('.invalid-feedback').text(errors
                                .staff);
                        } else {
                            $('#staff').removeClass('is-invalid').next('.invalid-feedback').text('');
                        }
                        if (errors.appointment_date) {
                            $('#appointment_date').addClass('is-invalid').next('.invalid-feedback')
                                .text(errors.appointment_date);
                        } else {
                            $('#appointment_date').removeClass('is-invalid').next('.invalid-feedback')
                                .text('');
                        }
                        if (errors.slots) {
                            $('#slots').addClass('is-invalid').next('.invalid-feedback').text(errors
                                .slots);
                        } else {
                            $('#slots').removeClass('is-invalid').next('.invalid-feedback').text('');
                        }
                        if (errors.customer) {
                            $('#customer').addClass('is-invalid').next('.invalid-feedback').text(errors
                                .customer);
                        } else {
                            $('#customer').removeClass('is-invalid').next('.invalid-feedback').text('');
                        }
                        if (errors.appointment_status) {
                            $('#appointment_status').addClass('is-invalid').next('.invalid-feedback')
                                .text(errors.appointment_status);
                        } else {
                            $('#appointment_status').removeClass('is-invalid').next('.invalid-feedback')
                                .text('');
                        }
                        if (errors.eventDescription) {
                            $('#eventDescription').addClass('is-invalid').next('.invalid-feedback')
                                .text(errors.eventDescription);
                        } else {
                            $('#eventDescription').removeClass('is-invalid').next('.invalid-feedback')
                                .text('');
                        }
                    }
                },
                error: function(xhr) {
                    console.error(xhr.responseText);
                }
            });
        });

        flatpickr("#appointment_date", {
            enableTime: false,
            dateFormat: "Y-m-d", // Example: 2025-05-02
        });

        $('#service').on('change', function() {
            var serviceId = $(this).val();

            if (serviceId) {
                $.ajax({
                    url: "{{ url('/get-staff-by-service/') }}/" + serviceId,
                    type: 'GET',
                    success: function(data) {
                        $('#staff').empty().append('<option value="">Select Staff</option>');
                        $.each(data, function(key, value) {
                            $('#staff').append('<option value="' + value.id + '">' + value
                                .name + '</option>');
                        });
                    },
                    error: function() {
                        alert('Failed to fetch staff.');
                    }
                });
            } else {
                $('#staff').empty().append('<option value="">Select Staff</option>');
            }
        });
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
    </script>
@endsection
