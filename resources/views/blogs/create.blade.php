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
                            Blog Project
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
                            <form action="{{ url('blog/store') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="row g-3">
                                    <h5 class="mb-4 mt-4">Blog project</h5>
                                    <hr>
                                    <h5 class="mb-4 mt-4 fw-bold">English</h5>
                                    <div class="col-md-12">
                                        <label class="form-label " for="title_en">Title</label>
                                        <input type="text" class="form-control @error('title_en') is-invalid @enderror"
                                            id="title_en" name="title_en" rows="5" placeholder="Title">
                                        @error('title_en')
                                            <div class=" invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                     <div class="col-md-12">
                                        <label class="form-label " for="description">Description</label>
                                        <textarea class="form-control textarea" name="description" rows="5" placeholder="Description"></textarea>
                                    </div>
                                    <div class="col-md-12">
                                        <label class="form-label" for="image"> Image</label>
                                        <input type="file" id="image" name="image"
                                            class="form-control @error('image') is-invalid @enderror" />
                                        @error('image')
                                            <div class=" invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                <hr class="mt-5">
                                <h5 class="mb-4 mt-4 fw-bold d-flex justify-content-end">عربي</h5>

                                    <div class="col-md-12">
                                        <label class="form-label float-end" for="title_en">عنوان</label>
                                        <input type="text" dir="rtl"
                                            class="form-control @error('title_ar') is-invalid @enderror" id="title_ar"
                                            name="title_ar" rows="5" placeholder="عنوان">
                                        @error('title_ar')
                                            <div class=" invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>


                                    <div class="col-md-12">
                                        <label class="form-label float-end" for="description_ar">وصف</label>
                                        <textarea class="form-control textarea" name="description_ar" rows="5" placeholder="وصف" dir="rtl"></textarea>
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
                                <textarea class="form-control textarea" rows="3" placeholder="Enter description"></textarea>
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
@section('link-js')
<script src="https://cdnjs.cloudflare.com/ajax/libs/Trumbowyg/2.27.3/trumbowyg.min.js"
    integrity="sha512-YJgZG+6o3xSc0k5wv774GS+W1gx0vuSI/kr0E0UylL/Qg/noNspPtYwHPN9q6n59CTR/uhgXfjDXLTRI+uIryg=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
@endsection
@section('javascript')
<script>
    // Rich Editor
    $(document).ready(function() {
        $('.textarea').trumbowyg({
            btns: [
                ['viewHTML'],
                ['formatting'],
                ['strong', 'em', 'del'],
                ['superscript', 'subscript'],
                ['link'],
                ['insertImage'],
                ['unorderedList', 'orderedList'],
                ['removeformat'],
                ['fullscreen']
            ],
            autogrow: true
        });
    });
    // End Editor
</script>
@endsection
