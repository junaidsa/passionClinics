@extends('layouts.app')
@section('main')
    <div class="container-xxl flex-grow-1 container-p-y">
        <!-- Responsive Datatable -->
        <div class="card">
            <div class="card-header d-flex justify-content-between">
                <h5>Service List</h5>
                <div class="btn-container"><a href="{{ url('admin/service/create') }}" class="btn btn-success">Create Service</a>
                </div>
            </div>

            <div class="card-body">
                <div class="card-datatable table-responsive">
                    <table class="dt-responsive table" id="myTable">
                        <thead>
                            <tr>
                                <th>Sr</th>
                                <th>Title</th>
                                <th>Sub Title</th>
                                <th>Short Discripation</th>
                                <th>Image</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($services as $s)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ @$s->title}}</td>
                                    <td>{{ @$s->sub_title }}</td>
                                    <td>{{ @$s->short_description }}</td>
                                    <td><img src="{{ url('file/service/' . (@$s->main_image ?? 'noimage.jpeg')) }}" height="80" width="80" class="rounded-circle"></td>
                                    <td>
                                        <a href="{{url('admin/service/faq/'.$s->id)}}" class="faq-btn ">Faq</a> |
                                        <a href="{{url('admin/service/featured/'.$s->id)}}" class="edit-btn ">Featured</a>
                                        <br>
                                        <a href="{{url('admin/service/edit/'.$s->id)}}" class="edit-btn ">Edit</a> | <a href="javascript:void(0) " class="delete-btn" name="{{ $s->title }}"
                                            id="{{ $s->id }}">Delete</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <!--/ Responsive Datatable -->
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
                    // Make DELETE request via AJAX
                    $.ajax({
                        url: "{{ url('/admin/service/delete') }}/" + id,
                        type: 'DELETE',
                        data: {
                            "_token": "{{ csrf_token() }}", // Ensure you pass the CSRF token
                        },
                        success: function(response) {
                            Swal.fire({
                                icon: 'success',
                                title: 'Deleted!',
                                text: 'Service has been deleted.',
                                timer: 1500
                            }).then(function() {
                                location.reload();
                            });
                        },
                        error: function(response) {
                            Swal.fire({
                                icon: 'error',
                                title: 'Error',
                                text: 'An error occurred while deleting the Service.',
                            });
                        }
                    });
                }
            });
        });
    </script>
@endsection
