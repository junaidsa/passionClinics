@extends('layouts.app')
@section('main')
@section('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Trumbowyg/2.27.3/ui/trumbowyg.min.css"
        integrity="sha512-Fm8kRNVGCBZn0sPmwJbVXlqfJmPC13zRsMElZenX6v721g/H7OukJd8XzDEBRQ2FSATK8xNF9UYvzsCtUpfeJg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
@endsection
<!-- Content -->
<div class="container-xxl flex-grow-1 container-p-y">
    <!-- Sticky Actions -->
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <form action="{{ url('admin/service/store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="col-lg-12">
                                <!-- 1. Delivery Address -->
                                <h5 class="mb-4 mt-4">Create Service</h5>
                                <div class="row g-3">
                                    <!-- English Title -->
<div class="col-md-12">
    <label class="form-label" for="title_en">Title (English)</label>
    <input type="text" id="title_en"
        class="form-control @error('title_en') is-invalid @enderror"
        placeholder="Title in English" name="title_en" value="{{ old('title_en') }}"
        dir="ltr" />
    @error('title_en')
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>

<!-- Arabic Title -->
<div class="col-md-12">
    <label class="form-label" for="title_ar">العنوان (Arabic)</label>
    <input type="text" id="title_ar"
        class="form-control @error('title_ar') is-invalid @enderror"
        placeholder="اكتب العنوان بالعربية" name="title_ar" value="{{ old('title_ar') }}"
        dir="rtl" />
    @error('title_ar')
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>

<!-- Short Description (English) -->
<div class="col-12">
    <label class="form-label" for="short_description_en">Short Description (English)</label>
    <textarea name="short_description_en" class="form-control @error('short_description_en') is-invalid @enderror"
        id="short_description_en" rows="2" placeholder="Short Description in English"
        dir="ltr">{{ old('short_description_en') }}</textarea>
    @error('short_description_en')
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>

<!-- Short Description (Arabic) -->
<div class="col-12">
    <label class="form-label" for="short_description_ar">الوصف المختصر (Arabic)</label>
    <textarea name="short_description_ar" class="form-control @error('short_description_ar') is-invalid @enderror"
        id="short_description_ar" rows="2" placeholder="اكتب الوصف المختصر بالعربية"
        dir="rtl">{{ old('short_description_ar') }}</textarea>
    @error('short_description_ar')
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>

<!-- Description (English) -->
<!-- English Description -->
<div class="col-12">
    <label class="form-label" for="description_en">Description (English)</label>
    <textarea class="form-control  @error('description_en') is-invalid @enderror" id="description_en"
        name="description_en" rows="5" placeholder="Description in English"
        dir="ltr">{{ old('description_en') }}</textarea>
    @error('description_en')
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>
<div class="col-12">
    <label class="form-label" for="description_ar">Description (Arabic)</label>
    <textarea class="form-control textarea  @error('description_ar') is-invalid @enderror" id="description_ar"
        name="description_ar" rows="5" placeholder="الوصف باللغة العربية"
        dir="rtl">{{ old('description_ar') }}</textarea>
    @error('description_ar')
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>

                                    <div class="col-md-12">
                                        <label class="form-label" for="landmark">Main Image</label>
                                        <input type="file" id="main_image" name="main_image"
                                            class="form-control @error('main_image') is-invalid @enderror" />
                                        @error('main_image')
                                            <div class=" invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <hr>
                                    <div class="col-md-6">
                                        <label class="form-label" for="pincode">Video link</label>
                                        <input type="url" name="video_url" id="video_url"
                                            value="{{ old('video_url') }}" class="form-control" />
                                    </div>
                                    <div class="col-md-6">
                                        <label class="form-label" for="landmark">Video Thumbnail</label>
                                        <input type="file" id="video_thumbnail" name="video_thumbnail"
                                            class="form-control @error('video_thumbnail') is-invalid @enderror" />
                                        @error('video_thumbnail')
                                            <div class=" invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="action-btns">
                                        <button class="btn btn-label-primary me-3">
                                            <span class="align-middle"> Back</span>
                                        </button>
                                        <button class="btn btn-primary">Create Service</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Sticky Actions -->
</div>
<!-- / Content -->
@endsection
