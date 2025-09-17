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
            <!-- Tabs -->
            <ul class="nav nav-tabs custom-tabs justify-content-center mb-3 border-0" id="blogTabs" role="tablist">
                <li class="nav-item col-md-6" role="presentation">
                    <button class="nav-link active border-0 p-3" id="details-tab" data-bs-toggle="tab"
                        data-bs-target="#details" type="button" role="tab" aria-controls="details"
                        aria-selected="true">
                        Blog Details
                    </button>
                </li>
                <li class="nav-item col-md-6" role="presentation">
                    <button class="nav-link border-0 p-3" id="seo-tab" data-bs-toggle="tab" data-bs-target="#seo"
                        type="button" role="tab" aria-controls="seo" aria-selected="false">
                        SEO
                    </button>
                </li>
            </ul>
            <!-- Tabs Content -->
            <div class="tab-content" id="blogTabsContent">
                <div class="tab-pane fade show active" id="details" role="tabpanel" aria-labelledby="details-tab">

                    <div class="row">
                        <form action="{{ url('admin/service/store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="col-lg-12">
                                <!-- 1. Delivery Address -->
                                <h5 class="mb-4 mt-4">Create Service</h5>
                                <hr>
                                <h5 class="mb-4 mt-4 fw-bold">English</h5>
                                <div class="row g-3">
                                    <!-- English Title -->
                                    <div class="col-md-6">
                                        <label class="form-label" for="title_en">Title</label>
                                        <input type="text" id="title_en"
                                            class="form-control @error('title_en') is-invalid @enderror"
                                            placeholder="Title in English" name="title_en" value="{{ old('title_en') }}"
                                            dir="ltr" />
                                        @error('title_en')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <!-- Show if any offer is selected -->
                                    <div class="col-md-6 mt-3">
                                        <label class="form-label" for="price">Price</label>
                                        <input type="text" name="price" id="price" class="form-control"
                                            placeholder="Price">
                                        @error('price')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <!-- Short Description (English) -->
                                    <div class="col-12">
                                        <label class="form-label" for="short_description_en">Short Description </label>
                                        <textarea name="short_description_en" class="form-control @error('short_description_en') is-invalid @enderror"
                                            id="short_description_en" rows="2" placeholder="Short Description in English" dir="ltr">{{ old('short_description_en') }}</textarea>
                                        @error('short_description_en')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>



                                    <!-- Description (English) -->
                                    <!-- English Description -->
                                    <div class="col-12">
                                        <label class="form-label" for="description_en">Description</label>
                                        <textarea class="form-control  @error('description_en') is-invalid @enderror" id="description_en" name="description_en"
                                            rows="5" placeholder="Description in English" dir="ltr">{{ old('description_en') }}</textarea>
                                        @error('description_en')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>


                                    <div class="col-md-6">
                                        <label class="form-label" for="offer_type">Offer</label>
                                        <select name="offer_type" id="offer_type" class="form-select">
                                            <option value="">Select Offer</option>
                                            <option value="Life time">Life Time</option>
                                            <option value="Limited days">Limited days</option>
                                            <option value="Limited people">Limited people</option>
                                        </select>
                                        @error('offer_type')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>



                                    <!-- Show only if "persons" is selected -->
                                    <div class="col-12 mt-3" id="days_input_wrapper" style="display: none;">
                                        <label class="form-label" for="persons_count">Number</label>
                                        <input type="number" name="persons_count" id="persons_count"
                                            class="form-control" min="1" placeholder="Enter number">
                                        @error('persons_count')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    {{-- <div class="row"> --}}

                                    <div class="col-md-6">
                                        <label class="form-label" for="video_url">Video link</label>
                                        <input type="url" name="video_url" id="video_url"
                                            value="{{ old('video_url') }}" class="form-control" />
                                    </div>
                                    <div class="col-md-6 mt-3">
                                        <label class="form-label" for="start_date">Start Date</label>
                                        <input type="date" name="start_date" id="start_date" class="form-control"
                                            min="1" placeholder="Enter number">
                                        @error('start_date')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="col-md-6 mt-3">
                                        <label class="form-label" for="end_date">End Date</label>
                                        <input type="date" name="end_date" id="end_date" class="form-control"
                                            min="1" placeholder="Enter number">
                                        @error('end_date')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    {{-- </div> --}}

                                    <!-- Show if any offer is selected -->
                                    <div class="col-12 mt-3" id="discount_input_wrapper" style="display: none;">
                                        <label class="form-label" for="discount">Discount (%)</label>
                                        <input type="text" name="discount" id="discount" class="form-control"
                                            placeholder="e.g., 50%">
                                        @error('discount')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>


                                    <div class="col-md-6">
                                        <label class="form-label" for="main_image">Main Image</label>
                                        <input type="file" id="main_image" name="main_image"
                                            class="form-control valid-image @error('main_image') is-invalid @enderror" />
                                        @error('main_image')
                                            <div class=" invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="col-md-6">
                                        <label class="form-label" for="video_thumbnail">Video Thumbnail</label>
                                        <input type="file" id="video_thumbnail" name="video_thumbnail"
                                            class="form-control @error('video_thumbnail') is-invalid @enderror" />
                                        @error('video_thumbnail')
                                            <div class=" invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <hr class="mt-5">
                                    <h5 class="mb-4 fw-bold d-flex justify-content-end">عربي</h5>
                                    <!-- Arabic Title -->
                                    <div class="col-md-12">
                                        <label class="form-label float-end" for="title_ar">العنوان</label>
                                        <input type="text" id="title_ar"
                                            class="form-control @error('title_ar') is-invalid @enderror"
                                            placeholder="اكتب العنوان بالعربية" name="title_ar"
                                            value="{{ old('title_ar') }}" dir="rtl" />
                                        @error('title_ar')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="col-12">
                                        <label class="form-label float-end" for="description_ar">وصف</label>
                                        <textarea class="form-control textarea  @error('description_ar') is-invalid @enderror" id="description_ar"
                                            name="description_ar" rows="5" placeholder="الوصف باللغة العربية" dir="rtl">{{ old('description_ar') }}</textarea>
                                        @error('description_ar')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <!-- Short Description (Arabic) -->
                                    <div class="col-12">
                                        <label class="form-label float-end" for="short_description_ar">الوصف المختصر
                                        </label>
                                        <textarea name="short_description_ar" class="form-control @error('short_description_ar') is-invalid @enderror"
                                            id="short_description_ar" rows="2" placeholder="اكتب الوصف المختصر بالعربية" dir="rtl">{{ old('short_description_ar') }}</textarea>
                                        @error('short_description_ar')
                                            <div class="invalid-feedback">{{ $message }}</div>
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
                <div class="tab-pane fade" id="seo" role="tabpanel" aria-labelledby="seo-tab">
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Meta Title</label>
                            <input type="text" class="form-control" placeholder="Enter meta title">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Keywords</label>
                            <input type="text" class="form-control" placeholder="Enter keywords">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Robots</label>
                            <input type="text" class="form-control" placeholder="Enter robots rule">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Type</label>
                            <input type="text" class="form-control" placeholder="Enter type">
                        </div>
                        <div class="col-12 mb-3">
                            <label class="form-label">Description</label>
                            <textarea class="form-control" rows="3" placeholder="Enter description"></textarea>
                        </div>
                        <div class="action-btns">
                            <button class="btn btn-label-primary me-3">
                                <span class="align-middle"> Back</span>
                            </button>
                            <button class="btn btn-primary">Create Tags</button>
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
@section('javascript')
<script>
    document.getElementById('offer_type').addEventListener('change', function() {
        const selectedValue = this.value;
        const daysWrapper = document.getElementById('days_input_wrapper');
        const daysInputWrapper = document.getElementById('days_wrapper');
        const discountInputWrapper = document.getElementById('discount_input_wrapper');

        // Show persons count only if "persons" is selected
        if (selectedValue === 'Limited days') {
            daysWrapper.style.display = 'block';
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
