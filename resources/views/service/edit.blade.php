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
                        <form action="{{ route('service.update', $service->id) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="col-lg-12">
                                <!-- 1. Delivery Address -->
                                <h5 class="mb-4 mt-4">Edit Service</h5>
                                <div class="row g-3">
                                    <input type="hidden" name="id" value="{{ $service->id }}">
                                    <div class="col-md-6">
                                        <label class="form-label" for="fullname">Title</label>
                                        <input type="text" id="title_en"
                                            class="form-control @error('title_en') is-invalid @enderror"
                                            placeholder="Title" name="title_en"
                                            value="{{ old('title_en', $service->title_en ?? '') }}" />
                                        @error('title_en')
                                            <div class=" invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="col-md-6">
                                        <label class="form-label float-end" for="title_ar">العنوان (Arabic)</label>
                                        <input type="text" id="title_ar"
                                            class="form-control @error('title_ar') is-invalid @enderror"
                                            placeholder="اكتب العنوان بالعربية" name="title_ar"
                                            value="{{ old('title_en', $service->title_ar ?? '') }}" dir="rtl" />
                                        @error('title_ar')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="col-12">
                                        <label class="form-label" for="short_description_en">Short Description
                                            (English)</label>
                                        <textarea name="short_description_en" class="form-control @error('short_description_en') is-invalid @enderror"
                                            id="short_description_en" rows="2" placeholder="Short Description in English" dir="ltr">{{ $service->short_description_en }}</textarea>
                                        @error('short_description_en')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="col-12">
                                        <label class="form-label float-end" for="short_description_ar">الوصف المختصر
                                            (Arabic)</label>
                                        <textarea name="short_description_ar" class="form-control @error('short_description_ar') is-invalid @enderror"
                                            id="short_description_ar" rows="2" placeholder="اكتب الوصف المختصر بالعربية" dir="rtl">{{ $service->short_description_ar }}</textarea>
                                        @error('short_description_ar')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="col-12">
                                        <label class="form-label" for="description_en">Description (English)</label>
                                        <textarea class="form-control  @error('description_en') is-invalid @enderror" id="description_en" name="description_en"
                                            rows="5" placeholder="Description in English" dir="ltr">{{ $service->description_en }}</textarea>
                                        @error('description_en')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="col-12">
                                        <label class="form-label float-end" for="description_ar">Description (Arabic)</label>
                                        <textarea class="form-control @error('description_ar') is-invalid @enderror" id="description_ar" name="description_ar"
                                            rows="5" placeholder="الوصف باللغة العربية" dir="rtl">{{ $service->description_ar }}</textarea>
                                        @error('description_ar')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="col-md-6">
                                        <label class="form-label" for="offer">Offer</label>
                                        <select name="offer_type" id="offer_type" class="form-select">
                                            <option value="">Select Offer</option>
                                            <option value="Lifetime"
                                                {{ $service->offer_type == 'Life Time' ? 'selected' : '' }}>Life Time
                                            </option>
                                            <option value="Limited days"
                                                {{ $service->offer_type == 'Limited days' ? 'selected' : '' }}>Limited
                                                days</option>
                                            <option value="Limited people"
                                                {{ $service->offer_type == 'Limited people' ? 'selected' : '' }}>
                                                Limited people</option>
                                        </select>
                                        @error('offer_type')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <!-- Show if any offer is selected -->
                                    <div class="col-md-6 mt-3">
                                        <label class="form-label" for="price">Price</label>
                                        <input type="text" name="price" id="price"
                                            value="{{ $service->price }}" class="form-control" placeholder="Price">
                                        @error('price')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <!-- Show only if "persons" is selected -->
                                    <div class="col-12 mt-3" id="days_input_wrapper" style="display: none;">
                                        <label class="form-label" for="persons_count">Number</label>
                                        <input type="number" name="persons_count" id="persons_count"
                                            class="form-control" min="1"
                                            value="{{ $service->persons_count }}" placeholder="Enter number">
                                        @error('persons_count')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="col-md-6 mt-3">
                                        <label class="form-label" for="start_date">Start Date</label>
                                        <input type="date" name="start_date" id="start_date" class="form-control"
                                            min="1" placeholder="Enter number"  value="{{ $service->start_date }}">
                                        @error('start_date')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="col-md-6 mt-3">
                                        <label class="form-label" for="end_date">End Date</label>
                                        <input type="date" name="end_date" id="end_date" class="form-control"
                                            min="1" placeholder="Enter number"  value="{{ $service->end_date }}">
                                        @error('end_date')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <!-- Show if any offer is selected -->
                                    <div class="col-12 mt-3" id="discount_input_wrapper" style="display: none;">
                                        <label class="form-label" for="discount">Discount (%)</label>
                                        <input type="text" name="discount" value="{{ $service->discount }}"
                                            id="discount" class="form-control" placeholder="e.g., 50%">
                                        @error('discount')
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
                                    <div class="col-md-6">
                                        <label class="form-label" for="pincode">Video link</label>
                                        <input type="url" name="video_url" id="video_url"
                                            value="{{ old('video_url', $service->video_url ?? '') }}"
                                            class="form-control" />
                                    </div>
                                    <div class="col-md-6">
                                        <label class="form-label" for="landmark">Video Thumbnail</label>
                                        <input type="file" id="video_thumbnail" name="video_thumbnail"
                                            class="form-control @error('video_thumbnail') is-invalid @enderror"
                                            value="{{ old('video_url', $service->video_thumbnail ?? '') }}" />
                                        @error('video_thumbnail')
                                            <div class=" invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="action-btns">
                                        <button class="btn btn-label-primary me-3">
                                            <span class="align-middle"> Back</span>
                                        </button>
                                        <button class="btn btn-primary">Save Change</button>
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
@section('javascript')
<script>
    document.getElementById('offer_type').addEventListener('change', function() {
        const selectedValue = this.value;
        const daysInputWrapper = document.getElementById('days_input_wrapper');
        const discountInputWrapper = document.getElementById('discount_input_wrapper');

        // Show persons count only if "persons" is selected
        if (selectedValue === 'Limited days') {
            daysInputWrapper.style.display = 'block';
        } else if (selectedValue === 'Limited people') {
            daysInputWrapper.style.display = 'block';
        } else {
            daysInputWrapper.style.display = 'none';
        }

        // Show discount input for any offer except empty
        if (selectedValue !== '') {
            discountInputWrapper.style.display = 'block';
        } else {
            discountInputWrapper.style.display = 'none';
        }
    });
</script>
@endsection
