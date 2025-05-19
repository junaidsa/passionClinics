@extends('layouts.app')
@section('main')
    <div class="container-xxl flex-grow-1 container-p-y">
        <!-- Sticky Actions -->
        <div class="row">
            <div class="col-12">
                <div class="card mb-3">
                    <div class="card-body">
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <div class="row">
                            <div class="col-lg-12">
                                <h5 class="mb-4 mt-4">Create Featured Section</h5>
                                <div class="row g-3">
                                    <form action="{{ url('admin/service/featured/store')}}" enctype="multipart/form-data" method="POST">
                                        @csrf
                                        <input type="hidden" name="id" value="{{ $id }}">

                                        <div class="col-md-12">
                                            <label class="form-label" for="title">Title</label>
                                            <input type="text" name="title" id="title" class="form-control"
                                                value="{{ old('title') }}" />
                                        </div>

                                        <div class="col-12">
                                            <label class="form-label" for="discripation">Content</label>
                                            <textarea name="description" class="form-control textarea @error('discripation') is-invalid @enderror" id="description"
                                                rows="2" placeholder="Content">{{ old('description') }}</textarea>
                                            @error('description')
                                                <div class=" invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>

                                            <div class="col-md-12">
                                                <label class="form-label" for="image">Image/icon</label>
                                                <input type="file" id="icon" name="icon"
                                                    class="form-control @error('icon') is-invalid @enderror" />
                                                @error('icon')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>

                                        <div class="action-btns mt-3">
                                            <button class="btn btn-primary" type="submit">Save Change</button>
                                        </div>
                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <h5 class="mt-4">Facility</h5>
                        <div class="row">
                            @foreach ($featured as $f)
                                <div class="col-md-3 mb-3 amenity-card" data-id="{{ $f->id }}">
                                    <div class="card">
                                        <img src="{{ url('file/features/' . (@$f->icon ?? '')) }}"
                                            class="card-img-top img-thumbnail">
                                        <div class="card-body text-center">
                                            <h6>{{ $f->title}}</h6>
                                            <p>{{ $f->description }}</p>
                                            <button class="btn btn-danger btn-sm delete-amenity"
                                                data-id="{{ $f->id }}">Delete</button>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
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
          document.querySelectorAll('.delete-amenity').forEach(button => {
            button.addEventListener('click', function() {
                const id = this.dataset.id;

                fetch(`{{ url('admin/feature/delete') }}/${id}`, {
                    method: "DELETE",
                    headers: {
                        'X-CSRF-TOKEN': '{{ csrf_token() }}'
                    }
                }).then(res => res.json()).then(data => {
                    if (data.success) document.querySelector(`.amenity-card[data-id="${id}"]`)
                        .remove();
                });
            });
        });

        </script>
    @endsection
