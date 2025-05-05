@extends('layouts.app')
@section('main')
@section('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Trumbowyg/2.27.3/ui/trumbowyg.min.css"
        integrity="sha512-Fm8kRNVGCBZn0sPmwJbVXlqfJmPC13zRsMElZenX6v721g/H7OukJd8XzDEBRQ2FSATK8xNF9UYvzsCtUpfeJg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
@endsection
<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Customer / </span>Create</h4>
    <div class="row">
        <!-- Form controls -->
        <div class="col-md-12">
            <div class="card mb-4">
                <h5 class="card-header">Create Customer</h5>
                <div class="card-body">
                    <form action="{{ url('/admin/customer/store') }}" method="POST" id="adminForum"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="first_name" class="form-label">First Name <span
                                            class="text-danger">*</span> </label>
                                    <input type="text" class="form-control @error('first_name') is-invalid @enderror"
                                        id="first_name" name="first_name"
                                        placeholder="Enter First Name"value="{{ old('first_name') }}" />
                                    @error('first_name')
                                        <div class=" invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="email" class="form-label">Last Name <span
                                            class="text-danger">*</span></label>
                                    <input class="form-control @error('last_name') is-invalid @enderror" type="text"
                                        id="last_name" name="last_name" placeholder="Enter Last Name"
                                        value="{{ old('last_name') }}" required />
                                    @error('last_name')
                                        <div class=" invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="email" class="form-label">Email <span
                                            class="text-danger">*</span></label>
                                    <input class="form-control @error('email') is-invalid @enderror" type="email"
                                        id="email" name="email" placeholder="Enter Email"
                                        value="{{ old('email') }}" required />
                                    @error('email')
                                        <div class=" invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="exampleFormControlReadOnlyInput1" class="form-label">Date of birth<span
                                            class="text-danger">*</span></label>
                                    <input class="form-control @error('date_of_birth') is-invalid @enderror"
                                        type="date" id="date_of_birth" name="date_of_birth"
                                        placeholder="Enter Date" />
                                    @error('date_of_birth')
                                        <div class=" invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-6 col-sm-6 col-6 mb-2">
                                <label class="form-label">Phone <span class="text-danger">*</span></label>
                                <input type="tel" name="phone" class="form-control" />
                            </div>

                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="exampleFormControlSelect1" class="form-label">Service Gender <span
                                            class="text-danger">*</span></label>
                                    <select class="form-select  @error('gender') is-invalid @enderror" id="gender"
                                        name="gender">
                                        <option value="">Select Gender</option>
                                        <option value="male">Male</option>
                                        <option value="female">Female</option>
                                    </select>
                                    @error('gender')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="mb-3 form-password-toggle">
                                    <label class="form-label" for="basic-default-password">Note <span
                                            class="text-danger">*</span></label>
                                    <div class="input-group input-group-merge">
                                        <textarea class="form-control" name="note" id="note"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12 col-sm-6 col-6 mb-2">
                                <label class="form-label">Image/Avatar</label>
                                <input type="file" name="avatar" class="form-control" />
                            </div>
                            <div class="row">
                                <div class="col-md-4 mt-3"><button class="btn btn-primary d-grid w-50">Submit</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('link-js')
<script src="https://cdnjs.cloudflare.com/ajax/libs/Trumbowyg/2.27.3/trumbowyg.min.js"
    integrity="sha512-YJgZG+6o3xSc0k5wv774GS+W1gx0vuSI/kr0E0UylL/Qg/noNspPtYwHPN9q6n59CTR/uhgXfjDXLTRI+uIryg=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
@endsection
@section('javascript')
<script>
    $('.textarea').trumbowyg();
</script>
@endsection
