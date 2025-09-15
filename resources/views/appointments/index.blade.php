@extends('layouts.app')
@section('main')
    <div class="container-xxl flex-grow-1 container-p-y">
        <!-- Responsive Datatable -->
        <div class="card">
            <div class="card-header d-flex justify-content-between">
                <h5>Appointment List</h5>
                <div class="btn-container @if (!Auth::check() || Auth::user()->role !== 'admin') d-none @endif"><button
                        class="dt-button add-new btn btn-primary" tabindex="0" aria-controls="DataTables_Table_0"
                        type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasAddAppointment"><span><i
                                class="ti ti-plus me-0 me-sm-1 ti-xs"></i><span class="d-none d-sm-inline-block">Add New
                                Appointment</span></span></button></div>
            </div>

            <div class="card-body">
                <div class="card-datatable table-responsive">
                    <table class="dt-responsive table" id="myTable">
                        <thead>
                            <tr>
                                <th>Date</th>
                                <th>Customer Name</th>
                                <th>Staff</th>
                                <th>Service</th>
                                <th>DURATION</th>
                                <th>CREATED AT</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($appointments as $app)
                                <tr>
                                    <td class="small text-black">
                                        {{ \Carbon\Carbon::parse($app->date)->format('d/m/Y') }} <br>
                                        {{ \Carbon\Carbon::parse($app->slot)->format('h:i A') }}
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <img src="{{ url('file/dr/' . (@$app->customer->image ?? 'avatar.jpg')) }}"
                                                height="40" width="40" class="rounded-circle me-2">
                                            <div class="d-flex flex-column">
                                                <div class="d-flex align-items-center">
                                                    <strong>{{ $app->customer->name }}</strong>
                                                    @if ($app->payment_status == 'paid' || $app->payment_status == 1)
                                                        <span class="alert alert-success rounded-pill ms-2">
                                                            <i class="ti ti-check me-1"></i>
                                                        </span>
                                                    @else
                                                        <span class="alert alert-danger rounded-pill ms-2">
                                                            <i class="ti ti-x me-1"></i>
                                                        </span>
                                                    @endif
                                                </div>
                                                <small>{{ $app->customer->email }}</small>
                                            </div>
                                        </div>
                                    </td>

                                    <td>
                                        <div class="d-flex align-items-center">
                                            <img src="{{ url('file/dr/' . (@$app->user->image ?? 'avatar.jpg')) }}"
                                                height="40" width="40" class="rounded-circle me-2">
                                            <div>
                                                <strong>{{ $app->user->name }} </strong>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="">{{ $app->service->title_en }}
                                        {{ $app->service->title_ar }}
                                    </td>
                                    <td class="text-center">{{ $durationSetting }}</td>
                                    <td>{{ \Carbon\Carbon::parse($app->created_at)->format('d/m/Y ') }} <br>
                                        {{ \Carbon\Carbon::parse($app->created_at)->format('h:i A') }}</td>
                                    <td>
                                        <div class="dropdown @if (!Auth::check() || Auth::user()->role !== 'admin') d-none @endif">
                                            <button class="btn " type="button" data-bs-toggle="dropdown"
                                                aria-expanded="false">
                                                <i class="ti ti-dots-vertical"></i>
                                            </button>
                                            <ul class="dropdown-menu">
                                                <li>
                                                    <a class="dropdown-item" href="{{ route('blog.edit', $app->id) }}">
                                                        <i class="ti ti-pencil me-1"></i> Edit
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)" class="dropdown-item delete-btn"
                                                        name="{{ $app->name }}" id="{{ $app->id }}">
                                                        <i class="ti ti-trash me-1"></i> Delete
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <button class="btn btn-primary send-link-btn" data-id="{{ $app->id }}">Send
                                            Link </button> <br>
                                        {{-- <a href="" target="_blank" class="d-none btn btn-sm btn-primary mt-2">Join Meeting</a> --}}
                                        <!-- Hidden Join Meeting Button -->
                                        <button id="join-meeting-btn-{{ $app->id }}"
                                            class="btn btn-primary mt-2 d-none join-meeting-btn" data-link=""
                                            data-bs-toggle="modal" data-bs-target="#meetingModal">
                                            Join Meeting
                                        </button>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="modal fade" id="meetingModal" tabindex="-1" aria-labelledby="meetingModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="meetingModalLabel">Meeting</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body p-0">
                        <iframe id="meeting-iframe" width="100%" height="600" frameborder="0"></iframe>
                    </div>
                </div>
            </div>
        </div>

        <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasAddAppointment"
            aria-labelledby="offcanvasAddUserLabel">
            <div class="offcanvas-header">
                <h5 id="offcanvasAddUserLabel" class="offcanvas-title">Create Appointment</h5>
                <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body mx-0 flex-grow-0 pt-0 h-100">
                @php
                    $location = DB::table('locations')->get();
                    $services = DB::table('services')->get();
                    $customer = DB::table('users')->where('role', 'customer')->get();
                @endphp
                <form class="add-new-user pt-0" id="appointmentsForm">
                    <div class="mb-3">
                        <label class="form-label" for="formValidationDob">Location </label>
                        <select name="location" id="location" class="form-control">
                            @foreach ($location as $loc)
                                <option value="{{ $loc->id }}">{{ $loc->name }}</option>
                            @endforeach
                        </select>
                        <div class="invalid-feedback"></div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="formValidationDob">Services </label>
                        <select name="service" id="service" class="form-control">
                            <option value="">Select Service</option>
                            @foreach ($services as $ser)
                                <option value="{{ $ser->id }}">{{ $ser->title_en }}</option>
                            @endforeach
                        </select>
                        <div class="invalid-feedback"></div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="formValidationDob">Staff </label>
                        <select name="staff" id="staff" class="form-control">
                        </select>
                        <div class="invalid-feedback"></div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="formValidationDob">Appointment Date</label>
                        <input type="text" class="form-control flatpickr-validation flatpickr-input"
                            name="appointment_date" id="appointment_date" readonly="readonly">
                        <div class="invalid-feedback"></div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="formValidationDob">Available Slots</label>
                        <select name="slots" id="slots" class="form-control">
                        </select>
                        <div class="invalid-feedback"></div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="formValidationDob">Customer </label>
                        <select name="customer" id="customer" class="form-control">
                            <option value="">Select Customer</option>
                            @foreach ($customer as $cus)
                                <option value="{{ $cus->id }}">
                                    {{ $cus->name }}</option>
                            @endforeach
                        </select>
                        <div class="invalid-feedback"></div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="formValidationDob">Appointment status </label>
                        <select name="appointment_status" id="appointment_status" class="form-control">
                            <option value="">Select</option>
                            <option value="approved">Approved</option>
                            <option value="pending">
                                Pending
                            </option>
                            <option value="rescheduled">
                                Rescheduled
                            </option>

                            <option value="completed">
                                Completed
                            </option>
                            <option value="cancel">
                                Cancel
                            </option>
                        </select>
                        <div class="invalid-feedback"></div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="note">Note</label>
                        <textarea class="form-control" name="note" id="note"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary me-sm-3 me-1 data-submit">Submit</button>
                    <button type="reset" class="btn btn-label-secondary" data-bs-dismiss="offcanvas">Cancel</button>
                </form>
            </div>
        </div>
    </div>
@endsection

@section('link-js')
    <!-- Flat Picker -->
    <script src="{{ asset('public') }}/assets/vendor/libs/moment/moment.js"></script>
    <script src="{{ asset('public') }}/assets/vendor/libs/flatpickr/flatpickr.js"></script>
    <!-- Page JS -->
    <script src="{{ asset('public') }}/assets/js/tables-datatables-advanced.js"></script>
    <script src="{{ asset('public') }}/assets/js/dataTables.min.js"></script>
@endsection
@section('javascript')
    <script>
        flatpickr("#appointment_date", {
            enableTime: false,
            dateFormat: "Y-m-d", // Example: 2025-05-02
        });
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });


        $('.send-link-btn').on('click', function() {
            let id = $(this).data('id');
            $.ajax({
                url: "{{ url('appointments/send-link') }}/" + id,
                method: 'GET',
                success: function(res) {
                    alert(res.message); // or use Toast
                    // Set link & show only the correct button
                    let joinBtn = $('#join-meeting-btn-' + id);
                    joinBtn.data('link', res.link).removeClass('d-none');
                },
                error: function() {
                    alert('Failed to send link');
                }
            });
        });
        $('.join-meeting-btn').on('click', function() {
            let link = $(this).data('link');
            $('#meeting-iframe').attr('src', link);
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
                            'offcanvasAddAppointment'));
                        sidebar.hide();
                        $('#appointmentsForm')[0].reset();
                        location.reload();
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

        let table = new DataTable('#myTable');
        $("body").on('click', '.delete-btn', function() {
            var id = $(this).attr('id');
            var name = $(this).attr('name');

            Swal.fire({
                html: `Are you really want to delete?`,
                icon: "info",
                buttonsStyling: false,
                showCancelButton: true,
                confirmButtonText: "Ok, got it!",
                cancelButtonText: 'Nope, cancel it',
                customClass: {
                    confirmButton: "btn btn-primary",
                    cancelButton: 'btn btn-danger'
                }
            }).then(function(result) {
                if (result.value) {
                    $.ajax({
                        url: "{{ url('/admin/appointments/delete/') }}/" + id,
                        type: 'DELETE',
                        data: {
                            "_token": "{{ csrf_token() }}",
                        },
                        success: function(response) {
                            Swal.fire({
                                icon: 'success',
                                title: 'Deleted!',
                                text: 'Appointment has been deleted.',
                                timer: 1500
                            }).then(function() {
                                location.reload();
                            });
                        },
                        error: function(response) {
                            Swal.fire({
                                icon: 'error',
                                title: 'Error',
                                text: 'An error occurred while deleting the product.',
                            });
                        }
                    });
                }
            });
        });
    </script>
@endsection
