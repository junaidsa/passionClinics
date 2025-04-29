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
                                            <label class="form-label " for="short_description">Title</label>
                                            <textarea class="form-control @error('short_description') is-invalid @enderror" id="short_description"
                                                name="short_description" rows="5" placeholder="Title"></textarea>
                                            @error('short_description')
                                                <div class=" invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <div class="col-md-12">
                                            <label class="form-label " for="description">Description</label>
                                            <textarea class="form-control textarea @error('bolg_description') is-invalid @enderror" id="bolg_description"
                                                name="bolg_description" rows="5" placeholder="Description"></textarea>
                                            @error('bolg_description')
                                                <div class=" invalid-feedback">{{ $message }}</div>
                                            @enderror
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
@section('javascript')
    <script src="https://cdn.ckeditor.com/ckeditor5/36.0.1/classic/ckeditor.js"></script>
    <script src="{{ asset('public') }}/assets/filepond/dist/filepond.min.js"></script>
    <script src="{{ asset('public') }}/assets/filepond/dist/filepond.jquery.js"></script>
    <script src="{{ asset('public') }}/assets/filepond/dist/filepond-plugin-image-preview.js"></script>
    <script src="{{ asset('public') }}/assets/filepond/dist/filepond-plugin-image-exif-orientation.js"></script>
    <script src="{{ asset('public') }}/assets/filepond/dist/filepond-plugin-file-validate-size.js"></script>
    <script src="{{ asset('public') }}/assets/filepond/dist/filepond-plugin-image-edit.js"></script>
    <script src="{{ asset('public') }}/assets/filepond/dist/filepond-plugin-file-validate-type.js"></script>
    <script>
        var gallery_files = []
        FilePond.registerPlugin(
            FilePondPluginImagePreview,
            FilePondPluginImageExifOrientation,
            FilePondPluginFileValidateSize,
            FilePondPluginImageEdit,
            FilePondPluginFileValidateType
        );
        // create a FilePond instance at the input element location
        FilePond.create(
            document.querySelector('#galleries'), {
                name: 'attachment',
                allowMultiple: true,
                allowImagePreview: true,
                imagePreviewFilterItem: false,
                imagePreviewMarkupFilter: false,
                dataMaxFileSize: "20MB",
                acceptedFileTypes: ['image/*'],
                // server
                server: {
                    process: {
                        url: '{{ url('dashboard/document/file/upload') }}',
                        method: 'POST',
                        headers: {
                            'x-customheader': 'Processing File'
                        },
                        onload: (response) => {
                            response = response;
                            gallery_files.push(response);
                            return response;

                        },
                        onerror: (response) => {
                            return response
                        },
                        ondata: (formData) => {
                            //console.log(formData)
                            window.h = formData;

                            return formData;
                        }
                    },
                    revert: (uniqueFileId, load, error) => {
                        const formData = new FormData();
                        formData.append("key", uniqueFileId);
                        gallery_files = gallery_files.filter(function(ele) {
                            return ele != uniqueFileId;
                        });

                        fetch(`{{ url('dashboard/document/file/revert') }}?key=${uniqueFileId}`, {
                                method: "DELETE",
                                body: formData,
                            }).then(res => res.json())
                            .then(json => {
                                // Should call the load method when done, no parameters required
                                load();
                            })
                            .catch(err => {
                                // Can call the error method if something is wrong, should exit after
                                error(err.message);
                            })
                    },

                    load: (uniqueFileId, load, error, progress, abort, headers) => {
                        // implement logic to load file from server here
                        // https://pqina.nl/filepond/docs/patterns/api/server/#load-1

                        let controller = new AbortController();
                        let signal = controller.signal;
                        var XMLHttpRequest1 = new XMLHttpRequest();
                        fetch(`{{ url('dashboard/document/file/load') }}?key=${uniqueFileId}&path=cars/`, {
                                method: "GET",
                                signal,
                            })
                            .then(res => {

                                window.c = res
                                console.log(res)
                                return res.blob();
                            })
                            .then(blob => {


                                const imageFileObj = new File([blob], `${uniqueFileId}`, {
                                    type: blob.type
                                })
                                //console.log(imageFileObj)
                                progress(true, 0, blob.size);

                                load(imageFileObj)


                            })
                            .catch(err => {



                            })

                        return {
                            abort: () => {
                                // User tapped cancel, abort our ongoing actions here
                                controller.abort();
                                // Let FilePond know the request has been cancelled
                                abort();
                            }
                        };
                    },

                    remove: (uniqueFileId, load, error) => {
                        // Should somehow send `source` to server so server can remove the file with this source
                        gallery_files = gallery_files.filter(function(ele) {
                            return ele != uniqueFileId;
                        });


                        // Should call the load method when done, no parameters required
                        load();
                    },

                },
                onactivatefile: function(file) {
                    var filePath = file.serverId.replace(/"/g, "");
                    var win = window.open("{{ asset('uploads/temp_files') }}/" + filePath, '_blank');
                    win.focus();
                }
            }
        );
        ClassicEditor
            .create(document.querySelector('#description'), {
                height: '15rem'
            })
            .catch(error => {
                console.error(error);
            });
    </script>
@endsection
