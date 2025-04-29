@extends('layouts.app')
@section('main')
@section('css')
    <link rel="stylesheet" href="{{ asset('public') }}/assets/filepond/dist/filepond.css">
    <link rel="stylesheet" href="{{ asset('public') }}/assets/filepond/dist/filepond-plugin-image-preview.css">
@endsection
              <!-- Content -->
              <div class="container-xxl flex-grow-1 container-p-y">
                <!-- Sticky Actions -->
                <div class="row">
                  <div class="col-12">
                    <div class="card">
                      <div class="card-body">
                        <div class="row">
                            <form action="{{ route('project.update', $project->id) }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" name="id" value="{{ $project->id }}">
                          <div class="col-lg-12">
                            <!-- 1. Delivery Address -->
                            <h5 class="mb-4 mt-4">Create Project</h5>
                            <div class="row g-3">
                              <div class="col-md-12">
                                <label class="form-label" for="fullname">Name</label>
                                <input type="text" id="project_name" class="form-control @error('project_name') is-invalid @enderror" placeholder="Project name" name="project_name"  value="{{ old('project_name', $project->project_name ?? '') }}" />
                                @error('project_name')
                                <div class=" invalid-feedback">{{ $message }}</div>
                                 @enderror
                              </div>

                              <div class="col-md-12">
                                <label class="form-label" for="phone">Title</label>
                                <input type="text" id="title" name="title"  class="form-control @error('title') is-invalid @enderror" placeholder="Title" value="{{ old('title', $project->title ?? '') }}"/>
                                @error('title')
                                <div class=" invalid-feedback">{{ $message }}</div>
                                @enderror
                              </div>

                              <div class="col-12">
                                <label class="form-label" for="discripation">Discripation</label>
                                <textarea name="discripation"
                                          class="form-control @error('discripation') is-invalid @enderror"
                                          id="discripation"
                                          rows="6"
                                          placeholder="Discripation">{{ old('discripation', $project->discripation ?? '') }}</textarea>
                                @error('discripation')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                              <div class="col-md-12">
                                <label class="form-label" for="pincode">Video link</label>
                                <input type="url" name="video_url" id="video_url" value="{{ old('video_url', $project->video_url ?? '') }}" class="form-control" />
                            </div>
                            <div class="col-md-6">
                                  <label class="form-label" for="pincode">Image</label>
                                <input type="file" id="image" name="image" class="form-control @error('image') is-invalid @enderror"/>
                                @error('image')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                  <label class="form-label" for="image">&nbsp;&nbsp;&nbsp;</label>
                                  @if(!empty($project->image)) {{-- Change $project to your model variable like $testimonial if needed --}}
                                      <div class="mb-2">
                                          <img src="{{ asset('public/files/' . $project->image) }}" alt="Image" style="max-width: 150px; height: auto; border-radius: 4px;">
                                      </div>
                                  @endif
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
@section('link-js')
<script src="https://cdn.ckeditor.com/ckeditor5/36.0.1/classic/ckeditor.js"></script>
<script src="{{ asset('public') }}/assets/filepond/dist/filepond.min.js"></script>
<script src="{{ asset('public') }}/assets/filepond/dist/filepond.jquery.js"></script>
<script src="{{ asset('public') }}/assets/filepond/dist/filepond-plugin-image-preview.js"></script>
<script src="{{ asset('public') }}/assets/filepond/dist/filepond-plugin-image-exif-orientation.js"></script>
    <script src="{{ asset('public') }}/assets/filepond/dist/filepond-plugin-file-validate-size.js"></script>
    <script src="{{ asset('public') }}/assets/filepond/dist/filepond-plugin-image-edit.js"></script>
    <script src="{{ asset('public') }}/assets/filepond/dist/filepond-plugin-file-validate-type.js"></script>
    @endsection


