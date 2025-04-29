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
                                    <label class="form-label" for="image"> Image</label>
                                    <input type="file" value="{{ $blog->image }}" id="image" name="image" class="form-control @error('image') is-invalid @enderror" />
                                    @error('image')
                                    <div class=" invalid-feedback">{{ $message }}</div>
                                @enderror
                                </div>

                                <div class="col-md-12">
                                    <label class="form-label " for="short_description">Short Discripation</label>
                                    <textarea class="form-control @error('short_description') is-invalid @enderror" id="short_description" name="short_description" rows="5"
                                        placeholder="Description">{{ $blog->short_description }}</textarea>
                                        @error('short_description')
                                    <div class=" invalid-feedback">{{ $message }}</div>
                                @enderror
                                </div>

                                <div class="col-md-12">
                                    <label class="form-label " for="description">Description</label>
                                    <textarea class="form-control textarea @error('bolg_description') is-invalid @enderror" id="bolg_description" name="bolg_description" rows="5"
                                        placeholder="Description">{!! $blog->description !!}</textarea>
                                        @error('bolg_description')
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

                        {{-- <form action="{{ route('products.update', $product->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="row">
                                <div class="col-md-6">
                                    <input type="hidden" value="{{ $product->id }}" name="id" id="id">
                                    <div class="mb-3">
                                        <label  class="form-label">Product Name</label>
                                        <input type="text" class="form-control @error('name') is-invalid @enderror"
                                            id="name" name="name" value="{{ $product->name }}" placeholder="Enter  Product Name" />
                                        @error('name')
                                            <div class=" invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="exampleFormControlSelect1" class="form-label">Buy Type</label>
                                        <select class="form-select" id="type" name="type"
                                            aria-label="Default select example">
                                            <option value="Free" {{ $product->status == 'Free' ? 'selected' : '' }}>Free
                                            <option value="Physical" {{ $product->status == 'Physical' ? 'selected' : '' }}>Physical
                                            <option value="Download" {{ $product->status == 'Paid' ? 'selected' : '' }}>Paid
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="mb-3">
                                        <label for="exampleFormControlSelect1" class="form-label">Select Category</label>
                                        <select class="form-select @error('category_id') is-invalid @enderror" id="category_id" name="category_id"
                                            aria-label="Default select example">
                                            <option value="">Select Category</option>
                                            @foreach ($categories as $c)
                                            <option value="{{ $c->id }}" @if ($c->id) selected @endif>{{ $c->name ?? 'N/A' }}</option>
                                        @endforeach
                                        </select>
                                        @error('category_id')
                                            <div class=" invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="exampleFormControlSelect1" class="form-label"> Price</label>
                                        <input type="number" class="form-control @error('price') is-invalid @enderror" id="price" name="price" value="{{ $product->price }}">
                                    </div>
                                    @error('price')
                                        <div class="invalid-feedback">{{$message}}</div>
                                    @enderror
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label" for="tage">Tags</label>
                                 <input type="text" name="tags" id="tags" class="form-control @error('tags') is-invalid @enderror" value="{{ $product->tags }}">
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label" >Image</label>
                                    <input type="file" class="form-control @error('image') is-invalid @enderror" id="image" name="image">
                                    @error('image')
                                    <div class=" invalid-feedback">{{ $message }}</div>
                                @enderror
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label class="form-label" for="pdf_file">Book pdf</label>
                                    <input type="file" class="form-control" id="pdf_file" name="pdf_file">
                                </div>
                                <div class="col-md-12 mb-3">
                                    <label class="form-label" for="tage">Short Description</label>
                                    <textarea name="short_description" id="short_description" cols="10" rows="3" class="form-control">{{ $product->short_description }}</textarea>
                                </div>
                                <div class="col-md-12">
                                    <label class="form-label" for="tage">Description</label>
                                    <textarea name="description" id="description" rows="10" class="form-control">{{ $product->description }}</textarea>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4 mt-3"><button class="btn btn-primary d-grid w-50">Submit</button></div>
                            </div>
                        </form> --}}
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
