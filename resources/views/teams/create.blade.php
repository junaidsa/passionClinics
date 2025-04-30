@extends('layouts.app')
@section('main')
@section('css')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Trumbowyg/2.27.3/ui/trumbowyg.min.css" integrity="sha512-Fm8kRNVGCBZn0sPmwJbVXlqfJmPC13zRsMElZenX6v721g/H7OukJd8XzDEBRQ2FSATK8xNF9UYvzsCtUpfeJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
@endsection
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Teams /</span>Create</h4>
        <div class="row">
            <!-- Form controls -->
            <div class="col-md-12">
                <div class="card mb-4">
                    <h5 class="card-header">Create Team</h5>
                    <div class="card-body">
                        <form action="{{ url('/admin/teams/store') }}" method="POST" id="adminForum" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="name" class="form-label">Full Name <span class="text-danger">*</span> </label>
                                        <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name"
                                            placeholder="Enter Full Name"value="{{old('name')}}" />
                                            @error('name')
                                            <div class=" invalid-feedback">{{ $message }}</div>
                                                    @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="email" class="form-label">Email <span class="text-danger">*</span></label>
                                        <input class="form-control @error('email') is-invalid @enderror" type="email" id="email" name="email"
                                            placeholder="Enter Email" value="{{old('email')}}" required />
                                            @error('email')
                                            <div class=" invalid-feedback">{{ $message }}</div>
                                                    @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3 form-password-toggle">
                                        <label class="form-label" for="basic-default-password">Password <span class="text-danger">*</span></label>
                                        <div class="input-group input-group-merge">
                                          <input type="password" name="password" id="password" class="form-control @error('password') is-invalid @enderror" placeholder="············" aria-describedby="basic-default-password3" autocomplete="new-password" required="">
                                          <span class="input-group-text cursor-pointer" id="password"><i class="ti ti-eye-off"></i></span>
                                          @error('password')
                                          <div class=" invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                      </div>
                                  </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                      <label for="exampleFormControlReadOnlyInput1" class="form-label">Experience<span class="text-danger">*</span></label>
                                      <input class="form-control @error('experience') is-invalid @enderror" type="text" id="experience" name="experience"
                                        placeholder="Enter Experience" />
                                        @error('experience')
                                        <div class=" invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                  </div>

                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="exampleFormControlSelect1" class="form-label">Service Assignment <span class="text-danger">*</span></label>
                                        <select class="form-select  @error('service_id') is-invalid @enderror" id="service_id" name="service_id">
                                            <option value="">Select Service</option>
                                            @foreach ($service as $s)
                                            <option value="{{ $s->id }}" {{ old('service_id') == $s->id ? 'selected' : '' }}>
                                                {{ $s->title }}
                                            </option>
                                            @endforeach
                                        </select>
                                        @error('service_id')
                                        <div class=" invalid-feedback">{{ $message }}</div>
                                                @enderror
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6 col-6 mb-2">
                                    <label class="form-label">Image/Avatar</label>
                                    <input type="file" name="image" class="form-control" />
                                </div>

                                <div class="col-md-12">
                                    <div class="mb-3 form-password-toggle">
                                        <label class="form-label" for="basic-default-password">About <span class="text-danger">*</span></label>
                                        <div class="input-group input-group-merge">
                                            <textarea class="form-control @error('about') is-invalid @enderror" name="about" id="about" ></textarea>
                                          @error('about')
                                          <div class=" invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                      </div>
                                  </div>
                                <div class="col-md-12">
                                    <div class="mb-3 form-password-toggle">
                                        <label class="form-label" for="basic-default-password">Personals Info <span class="text-danger">*</span></label>
                                        <div class="input-group input-group-merge">
                                            <textarea class="form-control textarea @error('personals_info') is-invalid @enderror" name="personals_info" id="personals_info" ></textarea>
                                          @error('personals_info')
                                          <div class=" invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                      </div>
                                  </div>

                                  <div class="col-md-4">
                                    <div class="mb-3 form-password-toggle">
                                        <label class="form-label" for="basic-default-password">X url</label>
                                        <div class="input-group input-group-merge">
                                          <input type="text" name="x_url" id="password" class="form-control" placeholder="············" >
                                        </div>
                                      </div>
                                  </div>
                                  <div class="col-md-4">
                                    <div class="mb-3 form-password-toggle">
                                        <label class="form-label" for="basic-default-password">Facebook url</label>
                                        <div class="input-group input-group-merge">
                                          <input type="text" name="fb_url" id="fb_url" class="form-control" placeholder="············" >
                                        </div>
                                      </div>
                                  </div>
                                  <div class="col-md-4">
                                    <div class="mb-3 form-password-toggle">
                                        <label class="form-label" for="basic-default-password">instagram url</label>
                                        <div class="input-group input-group-merge">
                                          <input type="text" name="ins_url" id="ins_url" class="form-control" placeholder="············" >
                                        </div>
                                      </div>
                                  </div>
                                <div class="row">
                                    <div class="col-md-4 mt-3"><button class="btn btn-primary d-grid w-50">Submit</button>
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
<script src="https://cdnjs.cloudflare.com/ajax/libs/Trumbowyg/2.27.3/trumbowyg.min.js" integrity="sha512-YJgZG+6o3xSc0k5wv774GS+W1gx0vuSI/kr0E0UylL/Qg/noNspPtYwHPN9q6n59CTR/uhgXfjDXLTRI+uIryg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
@endsection
@section('javascript')

<script>
    $('.textarea').trumbowyg();
</script>
@endsection
