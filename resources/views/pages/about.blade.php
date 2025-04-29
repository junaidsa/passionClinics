@extends('layouts.app')
@section('main')
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">About / </span>Update</h4>
        <div class="row">
            <!-- Form controls -->
            <div class="col-md-12">
                <div class="card mb-4">
                    <h5 class="card-header">About</h5>
                    <div class="card-body">
                        <form id="jquery-val-form"  action="{{url('about/update')}}"  method="post" enctype="multipart/form-data">
                         @csrf
                             <div class="row mt-1">
                                 <div class="col-md-12">
                                     <h4>Update About</h4>

                                     <div class="col-md-12 mb-4">
                                        <label class="form-label" for="title">Title</label>
                                        <input type="text" value="{{ $ab->about_title }}" name="about_title" id="about_title" class="form-control" />
                                    </div>

                                     <textarea class="textarea" name="about" id="about-update" cols="5" rows="5"
                                     placeholder="Write About">{{$ab->about ?? ''}}</textarea>
                                     @error('about')
                                     <div class="text text-danger">{{ $message }}</div>
                                     @enderror

                                     <div class="col-md-12 col-sm-6 col-6 mt-4 mb-4">
                                        <label class="form-label">Image</label>
                                        <input type="file" name="about_attachment" class="form-control" />
                                    </div>
                                     <div class="col-md-12 text-right float-right mt-2">
                                         <button type="submit" class="btn btn-primary mb-1 mb-sm-0 mr-0 mr-sm-1 waves-effect waves-float waves-light">Submit </button>
                                         <a class="btn btn-primary" href="{{ url('/') }}">Cancel</a>

                                     </div>
                                 </div>
                                 <div class="col-3"></div>
                             </div>
                             <div class="row mt-5">
                                <div class="col-md-12">
                                    <h4 class="">About</h4>
                                    <div class="border-bottom mb-3"></div>
                                    <div class="row">
                                        <div class="col-md-8">
                                            <h5>{{ $ab->about_title }}</h5>
                                            <div class="table-responsive">
                                                {!! $ab->about !!}
                                                {{-- {!! nl2br($ab->about) !!} --}}
                                            </div>
                                        </div>
                                        <div class="col-md-4"><img src="{{ asset('public/files/' . $ab->about_attachment) }}" alt="Image" class="rounded" width="300" height="250" ></div>
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
