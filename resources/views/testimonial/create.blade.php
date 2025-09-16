@extends('layouts.app')
@section('main')
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Categories / </span>Create</h4>
        <div class="row">
            <!-- Form controls -->
            <div class="col-md-12">
                <div class="card mb-4">
                    <h5 class="card-header">Create Testimonials</h5>
                    <div class="card-body">
                        <hr>
                        <h5 class="mb-4 mt-4 fw-bold">English</h5>
                        <form action="{{ url('admin/testimonials/store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row">

                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="subject_name" class="form-label">Name</label>
                                        <input type="text" class="form-control @error('name') is-invalid @enderror"
                                            id="name" name="name" placeholder="Enter  Name" />
                                        @error('name')
                                            <div class=" invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="designation" class="form-label">Designation</label>
                                        <input type="text"
                                            class="form-control @error('designation') is-invalid @enderror" id="designation"
                                            name="designation" placeholder="Enter  Designation" />
                                        @error('designation')
                                            <div class=" invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                 <div class="col-md-12">
                                    <div class="mb-3">
                                        <label for="message" class="form-label">Message</label>
                                        <textarea class="form-control @error('message') is-invalid @enderror" id="message" name="message" rows="5"
                                            placeholder="Message"></textarea>
                                        @error('message')
                                            <div class=" invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="mb-3">
                                        <label for="avatar" class="form-label">Image</label>
                                        <input type="file"
                                            class="form-control valid-image @error('avatar') is-invalid @enderror"
                                            id="avatar" name="avatar" />
                                        @error('avatar')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <hr class="mt-5">
                                <h5 class="mb-4 mt-4 fw-bold d-flex justify-content-end">عربي</h5>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="designation" class="form-label float-end">تعيين</label>
                                        <input type="text"
                                            class="form-control @error('designation_ar') is-invalid @enderror"
                                            id="designation_ar" name="designation_ar" placeholder="أدخل التعيين"
                                            dir="rtl" />
                                        @error('designation_ar')
                                            <div class=" invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="subject_name" class="form-label float-end">اسم</label>
                                        <input type="text" class="form-control @error('name') is-invalid @enderror"
                                            id="name_ar" name="name_ar" placeholder="أدخل الاسم" dir="rtl" />
                                        @error('name_ar')
                                            <div class=" invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="mb-3">
                                        <label for="message" class="form-label float-end">رسالة</label>
                                        <textarea class="form-control @error('message_ar') is-invalid @enderror" id="message" name="message_ar" rows="5"
                                            placeholder="رسالة" dir="rtl"></textarea>
                                        @error('message_ar')
                                            <div class=" invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>


                            </div>
                            <div class="row">
                                <div class="col-md-4 mt-3"><button class="btn btn-primary d-grid w-50">Submit</button></div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
