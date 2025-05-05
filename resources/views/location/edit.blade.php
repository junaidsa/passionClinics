@extends('layouts.app')
@section('main')
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Locations/</span> Edit</h4>
        <div class="row">
            <!-- Form controls -->
            <div class="col-md-12">
                <div class="card mb-4">
                    <h5 class="card-header">Edit Location</h5>
                    <div class="card-body">
                        <form action="{{ url('admin/location/update/' . $location->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="row">
                                <input type="hidden" name="id" value="{{ $location->id }}">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="subject_name" class="form-label">Name</label>
                                        <input type="text" class="form-control @error('name') is-invalid @enderror"
                                            id="name" name="name" placeholder="Enter Name" value="{{ old('name', $location->name ?? '') }}"/>
                                        @error('name')
                                            <div class=" invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="phone" class="form-label">Phone</label>
                                        <input type="text" class="form-control @error('phone') is-invalid @enderror"
                                            id="phone" name="phone" placeholder="Enter Phone" value="{{ old('name', $location->phone ?? '') }}"/>
                                        @error('phone')
                                            <div class=" invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="mb-3">
                                        <label for="address" class="form-label">Address</label>
                                            <textarea class="form-control @error('address') is-invalid @enderror" id="address"
                                            name="address" rows="2" placeholder="Address">{{ old('name', $location->address ?? '') }}</textarea>
                                        @error('address')
                                            <div class=" invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="mb-3">
                                        <label for="description" class="form-label">Description</label>
                                            <textarea class="form-control" id="description"
                                            name="description" rows="5" placeholder="Description">{{ old('name', $location->description ?? '') }}</textarea>

                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="mb-3">
                                        <label for="avatar" class="form-label">Image</label>
                                        <input type="file" class="form-control @error('avatar') is-invalid @enderror"
                                            id="avatar" name="avatar" />
                                        @error('avatar')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4 mt-3"><button class="btn btn-primary d-grid w-50">Submit</button></div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
