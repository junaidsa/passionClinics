
@extends('layouts.app')
@section('main')
@section('css')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Trumbowyg/2.27.3/ui/trumbowyg.min.css" integrity="sha512-Fm8kRNVGCBZn0sPmwJbVXlqfJmPC13zRsMElZenX6v721g/H7OukJd8XzDEBRQ2FSATK8xNF9UYvzsCtUpfeJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
@endsection
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




                              <div class="row">
                                <div class="col-md-8 col-sm-6 col-6 mt-4 mb-4">
                                    <label class="form-label">Image Top</label>
                                    <input type="file" name="about_attachment" class="form-control" />
                                </div>
                                 <div class="col-md-4 col-sm-6 col-6 mt-4 mb-4">
                                    <img src="{{ url('file/about/' . (@$ab->about_attachment ?? 'avatar.jpg')) }}" alt="Blog Image" width="70" height="70" class="rounded-circle">
                                </div>
                              </div>
                              <div class="row">
                                <div class="col-md-8 col-sm-6 col-6 mt-4 mb-4">
                                    <label class="form-label">Image buttom</label>
                                    <input type="file" name="about_attachment2" class="form-control" />
                                </div>
                                 <div class="col-md-4 col-sm-6 col-6 mt-4 mb-4">
                                    <img src="{{ url('file/about/' . (@$ab->about_attachment2 ?? 'avatar.jpg')) }}" alt="Blog Image" width="70" height="70" class="rounded-circle">
                                </div>
                              </div>
                                     <div class="col-md-12 text-right float-right mt-2">
                                         <button type="submit" class="btn btn-primary mb-1 mb-sm-0 mr-0 mr-sm-1 waves-effect waves-float waves-light">Submit </button>
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
