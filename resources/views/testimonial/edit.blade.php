@extends('layouts.app')
@section('main')
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">testimonial/</span>Edit</h4>
        <div class="row">
            <!-- Form controls -->
         <!-- Form controls -->
         <div class="col-md-12">
            <div class="card mb-4">
                <h5 class="card-header">Create Testimonials</h5>
                <div class="card-body">
                    <form action="{{ url('/admin/testimonial/update', $testimonial->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                        <div class="row">
                            <input type="hidden" value="{{ $testimonial->id }}" name="id">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="subject_name" class="form-label">Name</label>
                                    <input type="text" class="form-control @error('name') is-invalid @enderror"
                                        id="name" name="name" value="{{$testimonial->name}}" placeholder="Enter  Name" />
                                    @error('name')
                                        <div class=" invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="designation" class="form-label">Designation</label>
                                    <input type="text" class="form-control @error('designation') is-invalid @enderror"
                                        id="designation" name="designation" value="{{$testimonial->designation}}" placeholder="Enter  Designation" />
                                    @error('designation')
                                        <div class=" invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label for="message" class="form-label">Message</label>
                                        <textarea class="form-control @error('message') is-invalid @enderror" id="message"
                                        name="message" rows="5"  placeholder="Message">{{$testimonial->message}}</textarea>
                                    @error('message')
                                        <div class=" invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="avatar" class="form-label">Image</label>
                                    <input type="file" class="form-control @error('avatar') is-invalid @enderror"
                                    id="avatar" name="avatar"/>
                                    @error('avatar')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-4">
                                    <img  src="{{ url('file/testimonial/' . ($testimonial->avatar ?? 'noimage.jpeg')) }}" class="img-thumbnail rounded-circle" width="80" height="80">
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
