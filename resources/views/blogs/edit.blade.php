@extends('layouts.app')
@section('main')
<style>
    .ck-editor__editable {
        min-height: 15rem;
    }
    </style>
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Product / </span>Edit</h4>
        <div class="row">
            <!-- Form controls -->
            <div class="col-md-12">
                <div class="card mb-4">
                    <h5 class="card-header">Edit Blog</h5>
                    <div class="card-body">
                        <form action="{{ route('blog.update', $blog->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('POST')
                            <div class="row g-3">
                                <input type="hidden" value="{{ $blog->id }}" name="id" id="id">
                                <div class="col-md-12">
                                    <label class="form-label " for="title_en">Title (English)</label>
                                    <input type="text" value="{{ $blog->title_en }}" class="form-control @error('title_en') is-invalid @enderror" id="title_en"
                                        name="title_en" placeholder="Title">
                                    @error('title_en')
                                        <div class=" invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-md-12">
                                    <label class="form-label " for="title_en">عنوان (Arabic)</label>
                                    <input type="text" dir="rtl" class="form-control @error('title_ar') is-invalid @enderror" id="title_ar"
                                        name="title_ar" value="{{ $blog->title_ar }}" placeholder="عنوان">
                                    @error('title_ar')
                                        <div class=" invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="col-md-12">
                                    <label class="form-label " for="description">Description</label>
                                    <textarea class="form-control"  name="description"
                                        placeholder="Description">{{ $blog->description }}</textarea>
                                        @error('description')
                                    <div class=" invalid-feedback">{{ $message }}</div>
                                @enderror
                                </div>
                                <div class="col-md-12">
                                    <label class="form-label " for="وصف">وصف (Arabic)</label>
                                    <textarea class="form-control" id="description_ar" name="description_ar"
                                        placeholder="وصف" dir="rtl">{{ $blog->description_ar }}</textarea>
                                </div>

                                <div class="col-md-12">
                                    <label class="form-label" for="image"> Image</label>
                                    <input type="file" value="{{ $blog->image }}" id="image" name="image" class="form-control @error('image') is-invalid @enderror" />
                                    @error('image')
                                    <div class=" invalid-feedback">{{ $message }}</div>
                                @enderror
                                </div>
                                <div class="action-btns">
                                    <button class="btn btn-label-primary me-3">
                                        <span class="align-middle"> Back</span>
                                    </button>
                                    <button class="btn btn-primary">Update Blog</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('javascript')
<script src="https://cdn.ckeditor.com/ckeditor5/36.0.1/classic/ckeditor.js"></script>

<script>
    ClassicEditor
    .create(document.querySelector('#description'), {
        height: '15rem'
    })
    .catch(error => {
        console.error(error);
    });
</script>
@endsection
