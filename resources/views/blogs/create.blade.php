@extends('layouts.app')
@section('css')
    <link rel="stylesheet" href="{{ asset('public') }}/assets/filepond/dist/filepond.css">
    <link rel="stylesheet" href="{{ asset('public') }}/assets/filepond/dist/filepond-plugin-image-preview.css">
@endsection
@section('main')
    <!-- Content -->
    <div class="container-xxl flex-grow-1 container-p-y">
        <!-- Sticky Actions -->
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-12">
                                <!-- 1. Delivery Address -->
                                <h5 class="mb-4 mt-4">Blog Project</h5>
                                <form action="{{ url('blog/store') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="row g-3">
                                        <div class="col-md-12">
                                            <label class="form-label " for="title_en">Title (English)</label>
                                            <input type="text" class="form-control @error('title_en') is-invalid @enderror" id="title_en"
                                                name="title_en" rows="5" placeholder="Title">
                                            @error('title_en')
                                                <div class=" invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="col-md-12">
                                            <label class="form-label " for="title_en">عنوان (Arabic)</label>
                                            <input type="text" dir="rtl" class="form-control @error('title_ar') is-invalid @enderror" id="title_ar"
                                                name="title_ar" rows="5" placeholder="عنوان">
                                            @error('title_ar')
                                                <div class=" invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <div class="col-md-12">
                                            <label class="form-label " for="description">Description (English)</label>
                                            <textarea class="form-control"
                                                name="description" rows="5" placeholder="Description"></textarea>
                                        </div>
                                        <div class="col-md-12">
                                            <label class="form-label " for="description_ar">وصف (Arabic)</label>
                                            <textarea class="form-control"
                                                name="description_ar" rows="5" placeholder="وصف" dir="rtl"></textarea>
                                        </div>


                                        <div class="col-md-12">
                                            <label class="form-label" for="image"> Image</label>
                                            <input type="file" id="image" name="image"
                                                class="form-control @error('image') is-invalid @enderror" />
                                            @error('image')
                                                <div class=" invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>


                                        <div class="action-btns">
                                            <button class="btn btn-label-primary me-3">
                                                <span class="align-middle"> Back</span>
                                            </button>
                                            <button class="btn btn-primary">Create Blog</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Sticky Actions -->
    </div>
    <!-- / Content -->
@endsection
