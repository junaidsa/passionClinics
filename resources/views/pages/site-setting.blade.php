@extends('layouts.app')
@section('main')
@section('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Trumbowyg/2.27.3/ui/trumbowyg.min.css"
        integrity="sha512-Fm8kRNVGCBZn0sPmwJbVXlqfJmPC13zRsMElZenX6v721g/H7OukJd8XzDEBRQ2FSATK8xNF9UYvzsCtUpfeJg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
@endsection
<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Setting / </span>Update</h4>
    <div class="row">
        <!-- Form controls -->
        <div class="col-md-12">
            <div class="card mb-4">
                <h5 class="card-header">Setting</h5>
                <div class="card-body">
                    <form id="jquery-val-form" action="{{ url('admin/setting/update/' . $s->id) }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="row mt-1">
                            <div class="col-md-12">
                                <!-- Title -->
                                <div class="mb-4">
                                    <label class="form-label" for="title">Title</label>
                                    <input type="text" value="{{ @$s->title }}" name="title" id="title"
                                        class="form-control" />
                                </div>
                            <div class="col-md-12">
                                <!-- Title -->
                                <div class="mb-4">
                                    <label class="form-label" for="عنوان">عنوان</label>
                                    <input type="text" value="{{ @$s->title_ar }}" name="title_ar" id="title_ar"
                                        class="form-control" dir="rtl" />
                                </div>

                                <!-- Description -->
                                <div class="mb-4">
                                    <label class="form-label" for="description">Description <span
                                            class="text-danger">*</span></label>
                                    <textarea class="form-control" name="description" id="description">{{ @$s->description }}</textarea>
                                </div>
                                <!-- Description -->
                                <div class="mb-4">
                                    <label class="form-label" for="description_ar">وصف <span
                                            class="text-danger">*</span></label>
                                    <textarea class="form-control" name="description_ar" dir="rtl" id="description_ar">{{ @$s->description_ar }}</textarea>
                                </div>

                                <!-- Phone and YouTube URL -->
                                <div class="row">
                                    <div class="col-md-6 mb-4">
                                        <label class="form-label" for="phone_number">Phone</label>
                                        <input type="text" value="{{ @$s->phone_number }}" name="phone_number"
                                            id="phone_number" class="form-control" />
                                    </div>
                                    <div class="col-md-6 mb-4">
                                        <label class="form-label" for="youtube_url">YouTube URL</label>
                                        <input type="text" value="{{ @$s->youtube_url }}" name="youtube_url"
                                            id="youtube_url" class="form-control" />
                                    </div>
                                </div>

                                <!-- Opening, Closing Time, Slot Duration -->
                                <div class="row">
                                    <div class="col-md-4 mb-4">
                                        <label class="form-label" for="opening_time">Opening Time</label>
                                        <input type="text" value="{{ @$s->opening_time }}" name="opening_time"
                                            id="opening_time" class="form-control" />
                                    </div>
                                    <div class="col-md-4 mb-4">
                                        <label class="form-label" for="closing_time">Closing Time</label>
                                        <input type="text" value="{{ @$s->closing_time }}" name="closing_time"
                                            id="closing_time" class="form-control" />
                                    </div>
                                    <div class="col-md-4 mb-4">
                                        <label class="form-label" for="slot_duration">Slot Duration</label>
                                        <input type="text" value="{{ @$s->slot_duration }}" name="slot_duration"
                                            id="slot_duration" class="form-control" />
                                    </div>
                                </div>

                                <!-- Awards, Experience, Clients -->
                                <div class="row">
                                    <div class="col-md-4 mb-4">
                                        <label class="form-label" for="awards">Awards</label>
                                        <input type="text" value="{{ @$s->awards }}" name="awards" id="awards"
                                            class="form-control" />
                                    </div>
                                    <div class="col-md-4 mb-4">
                                        <label class="form-label" for="year_experience">Years of Experience</label>
                                        <input type="text" value="{{ @$s->year_experience }}" name="year_experience"
                                            id="year_experience" class="form-control" />
                                    </div>
                                    <div class="col-md-4 mb-4">
                                        <label class="form-label" for="happy_clients">Happy Clients</label>
                                        <input type="text" value="{{ @$s->happy_clients }}" name="happy_clients"
                                            id="happy_clients" class="form-control" />
                                    </div>
                                </div>
                                <div class="row">
                                    <!-- Video Upload -->
                                    <div class="col-md-8 mb-4">
                                        <label class="form-label" for="video">Upload Video</label>
                                        <input type="file" name="video" id="video" class="form-control" />
                                        {{-- @if (!empty($s->video))
                                            <small class="d-block mt-2">Current: {{ $s->video }}</small>
                                        @endif --}}
                                    </div>

                                    <div class="col-md-4 ">
                                        @if (!empty($s->video))
                                            <video width="320" height="240" controls>
                                                <source
                                                    src="{{ url('file/video/' . (@$s->video ?? 'avatar.jpg')) }}"
                                                    type="video/mp4">
                                            </video>
                                        @endif

                                    </div>
                                </div>
                                <div class="row">
                                    <!-- Video Upload -->
                                    <div class="col-md-8 mb-4">
                                        <label class="form-label" for="video">Upload Video</label>
                                        <input type="file" name="video" id="video" class="form-control" />
                                        {{-- @if (!empty($s->video))
                                            <small class="d-block mt-2">Current: {{ $s->video }}</small>
                                        @endif --}}
                                    </div>

                                    <div class="col-md-4 ">
                                        @if (!empty($s->video))
                                            <video width="320" height="240" controls>
                                                <source
                                                    src="{{ url('file/video/' . (@$s->video ?? 'avatar.jpg')) }}"
                                                    type="video/mp4">
                                            </video>
                                        @endif

                                    </div>
                                </div>


                                <!-- Submit -->
                                <div class="text-right mt-2">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>

                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
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
