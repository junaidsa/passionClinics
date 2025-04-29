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
                                    <div class="col-md-12">
                                        <label class="form-label" for="fullname">Title</label>
                                        <input type="text" id="project_name"
                                            class="form-control @error('title') is-invalid @enderror"
                                            placeholder="Title" name="title" value="{{ old('title') }}" />
                                        @error('title')
                                            <div class=" invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="col-md-12">
                                        <label class="form-label" for="phone">Sub Title</label>
                                        <input type="text" id="title" name="sub_title"
                                            class="form-control @error('sub_title') is-invalid @enderror"
                                            placeholder="Sub Title" value="{{ old('sub_title') }}" />
                                        @error('sub_title')
                                            <div class=" invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="col-12">
                                        <label class="form-label">Short Discripation</label>
                                        <textarea name="short_discripation" class="form-control @error('short_discripation') is-invalid @enderror"
                                            id="short_discripation" rows="2" placeholder="Short Discripation"></textarea>
                                        @error('short_discripation')
                                            <div class=" invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="col-12">
                                        <label class="form-label" for="Discripation">Discripation</label>
                                        <textarea class="form-control @error('discripation') is-invalid @enderror textarea" id="discripation"
                                            name="discripation" rows="2" placeholder="Discripation"></textarea>
                                        @error('discripation')
                                            <div class=" invalid-feedback">{{ $message }}</div>
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
