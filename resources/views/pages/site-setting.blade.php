
@extends('layouts.app')
@section('main')
@section('css')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Trumbowyg/2.27.3/ui/trumbowyg.min.css" integrity="sha512-Fm8kRNVGCBZn0sPmwJbVXlqfJmPC13zRsMElZenX6v721g/H7OukJd8XzDEBRQ2FSATK8xNF9UYvzsCtUpfeJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
@endsection
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Setting  / </span>Update</h4>
        <div class="row">
            <!-- Form controls -->
            <div class="col-md-12">
                <div class="card mb-4">
                    <h5 class="card-header">Setting</h5>
                    <div class="card-body">
                        <form id="jquery-val-form"  action="{{url('')}}"  method="post" enctype="multipart/form-data">
                         @csrf
                             <div class="row mt-1">
                                 <div class="col-md-12">
                                     <div class="col-md-12 mb-4">
                                        <label class="form-label" for="title">Title</label>
                                        <input type="text" value="{{ @$s->title }}" name="title" id="phone_number" class="form-control" />
                                    </div>
                                    <div class="col-md-12">
                                        <div class="mb-3 form-password-toggle">
                                            <label class="form-label" for="basic-default-password">Description <span class="text-danger">*</span></label>
                                            <div class="input-group input-group-merge">
                                                <textarea class="form-control" name="description" id="description" >{{@$s->description}}</textarea>
                                            </div>
                                          </div>
                                      </div>
                                      <div class="row">
                                          <div class="col-md-6 mb-4">
                                            <label class="form-label" for="phone_number">Phone</label>
                                            <input type="text" value="{{ @$s->phone_number }}" name="phone_number" id="phone_number" class="form-control" />
                                        </div>
                                          <div class="col-md-6 mb-4">
                                            <label class="form-label" for="youtube_url">Youtube Url</label>
                                            <input type="text" value="{{ @$s->youtube_url }}" name="youtube_url" id="youtube_url" class="form-control" />
                                        </div>
                                      </div>
                                      <div class="row">
                                          <div class="col-md-6 mb-4">
                                            <label class="form-label" for="phone_number">Timeing</label>
                                            <input type="text" value="{{ @$s->timing }}" name="timing" id="timing" class="form-control" />
                                        </div>
                                          <div class="col-md-6 mb-4">
                                            <label class="form-label" for="durations">Durations</label>
                                            <input type="text" value="{{ @$s->durations }}" name="durations" id="youtube_url" class="form-control" />
                                        </div>
                                      </div>
                                    <div class="row">
                                        <div class="col-md-4 mb-4">
                                            <label class="form-label" for="awards">Awards</label>
                                            <input type="text" value="{{ @$s->awards }}" name="awards" id="awards" class="form-control" />
                                        </div>
                                         <div class="col-md-4 mb-4">
                                            <label class="form-label" for="year_experience">Years experience</label>
                                            <input type="text" value="{{ @$s->year_experience }}" name="year_experience" id="year_experience" class="form-control" />
                                        </div>
                                         <div class="col-md-4 mb-4">
                                            <label class="form-label" for="year_experience">Happy clints</label>
                                            <input type="text" value="{{ @$s->happy_clients }}" name="happy_clients" id="happy_clients" class="form-control" />
                                        </div>
                                       </div>
                              <div class="row">
                                <div class="col-md-12 col-sm-6 col-6 mt-4 mb-4">
                                    <label class="form-label">Video</label>
                                    <input type="file" name="video" class="form-control" />
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
