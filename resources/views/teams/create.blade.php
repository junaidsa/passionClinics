@extends('layouts.app')
@section('main')
@section('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Trumbowyg/2.27.3/ui/trumbowyg.min.css"
        integrity="sha512-Fm8kRNVGCBZn0sPmwJbVXlqfJmPC13zRsMElZenX6v721g/H7OukJd8XzDEBRQ2FSATK8xNF9UYvzsCtUpfeJg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
@endsection
<div class="container-xxl flex-grow-1 container-p-y">
    <div class="d-flex align-items-center justify-content-between">
        <h4 class="fw-bold py-3 mb-4">
            <span class="text-muted fw-light">Teams /</span> Create
        </h4>
        <button type="button" id="saveBtn" class="btn btn-primary mb-3">
            <i class="fas fa-save me-2"></i> Save
        </button>
    </div>
    <div class="row">
        <div class="col-md-12">
            <ul class="nav nav-tabs custom-tabs justify-content-center mb-3 border-0" id="blogTabs" role="tablist">
                <li class="nav-item col-md-6" role="presentation">
                    <button class="nav-link active border-0 p-3" id="details-tab" data-bs-toggle="tab"
                        data-bs-target="#details" type="button" role="tab" aria-controls="details"
                        aria-selected="true">
                        Create Team
                    </button>
                </li>
                <li class="nav-item col-md-6" role="presentation">
                    <button class="nav-link border-0 p-3" id="seo-tab" data-bs-toggle="tab" data-bs-target="#seo"
                        type="button" role="tab" aria-controls="seo" aria-selected="false">
                        SEO
                    </button>
                </li>
            </ul>
            <!-- Tabs Content -->
            <div class="tab-content" id="blogTabsContent">
                <div class="tab-pane fade show active" id="details" role="tabpanel" aria-labelledby="details-tab">

                    <div class="row">
                        <form action="" method="POST" id="adminForum" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <h5 class="mb-4 mt-4">Create Team</h5>
                                <hr>
                                <h5 class="mb-4 mt-4 fw-bold">English</h5>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="name" class="form-label">Full Name <span
                                                class="text-danger">*</span> </label>
                                        <input type="text" class="form-control @error('name') is-invalid @enderror"
                                            id="name" name="name"
                                            placeholder="Enter Full Name"value="{{ old('name') }}" />
                                        @error('name')
                                            <div class=" invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="email" class="form-label">Email <span
                                                class="text-danger">*</span></label>
                                        <input class="form-control @error('email') is-invalid @enderror" type="email"
                                            id="email" name="email" placeholder="Enter Email"
                                            value="{{ old('email') }}" required />
                                        @error('email')
                                            <div class=" invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3 form-password-toggle">
                                        <label class="form-label" for="basic-default-password">Password <span
                                                class="text-danger">*</span></label>
                                        <div class="input-group input-group-merge">
                                            <input type="password" name="password" id="password"
                                                class="form-control @error('password') is-invalid @enderror"
                                                placeholder="············" aria-describedby="basic-default-password3"
                                                autocomplete="new-password" required="">
                                            <span class="input-group-text cursor-pointer" id="password"><i
                                                    class="ti ti-eye-off"></i></span>
                                            @error('password')
                                                <div class=" invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="exampleFormControlReadOnlyInput1" class="form-label">Experience
                                            <span class="text-danger">*</span></label>
                                        <input class="form-control @error('experience') is-invalid @enderror"
                                            type="number" id="experience" name="experience"
                                            placeholder="Enter Experience" />
                                        @error('experience')
                                            <div class=" invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="exampleFormControlReadOnlyInput1" class="form-label">Catetory
                                            <span class="text-danger">*</span></label>
                                        <input class="form-control @error('category') is-invalid @enderror"
                                            type="text" id="category" name="category"
                                            placeholder="Enter Category" />
                                        @error('category')
                                            <div class=" invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="exampleFormControlSelect1" class="form-label">Service Assignment
                                            <span class="text-danger">*</span></label>
                                        <select class="form-select  @error('service_id') is-invalid @enderror"
                                            id="service_id" name="service_id">
                                            <option value="">Select Service</option>
                                            @foreach ($service as $s)
                                                <option value="{{ $s->id }}"
                                                    {{ old('service_id') == $s->id ? 'selected' : '' }}>
                                                    {{ $s->title_en }}
                                                    <small>
                                                        {{ $s->title_ar }}
                                                    </small>
                                                </option>
                                            @endforeach
                                        </select>
                                        @error('service_id')
                                            <div class=" invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-12 mb-2">
                                    <label class="form-label">Image/Avatar</label>
                                    <input type="file" name="image" class="form-control" />
                                </div>
                                <div class="col-md-12">
                                    <div class="mb-3 form-password-toggle">
                                        <label class="form-label" for="about">About <span
                                                class="text-danger">*</span></label>
                                        <div class="input-group input-group-merge">
                                            <textarea class="form-control textarea" name="about" id="about"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="mb-3 form-password-toggle">
                                        <label class="form-label" for="basic-default-password">Personals Info <span
                                                class="text-danger">*</span></label>
                                        <div class="input-group input-group-merge">
                                            <textarea class="form-control textarea" id="personals_info"></textarea>

                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="mb-3 form-password-toggle">
                                        <label class="form-label" for="basic-default-password">X url</label>
                                        <div class="input-group input-group-merge">
                                            <input type="text" name="x_url" id="password" class="form-control"
                                                placeholder="············">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="mb-3 form-password-toggle">
                                        <label class="form-label" for="basic-default-password">Facebook url</label>
                                        <div class="input-group input-group-merge">
                                            <input type="text" name="fb_url" id="fb_url" class="form-control"
                                                placeholder="············">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="mb-3 form-password-toggle">
                                        <label class="form-label" for="basic-default-password">instagram url</label>
                                        <div class="input-group input-group-merge">
                                            <input type="text" name="ins_url" id="ins_url" class="form-control"
                                                placeholder="············">
                                        </div>
                                    </div>
                                </div>
                                <hr class="mt-4">
                                <h5 class="mb-4 fw-bold d-flex justify-content-end">عربي</h5>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="name" class="form-label float-end"><span
                                                class="text-danger">*</span> الاسم الكامل </label>
                                        <input type="text"
                                            class="form-control @error('name_ar') is-invalid @enderror" id="name_ar"
                                            name="name_ar" placeholder="أدخل الاسم الكامل"
                                            value="{{ old('name_ar') }}" dir="rtl" />
                                        @error('name')
                                            <div class=" invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="exampleFormControlReadOnlyInput1"
                                            class="form-label float-end">الفئة</label>
                                        <input class="form-control @error('category_ar') is-invalid @enderror"
                                            type="text" id="category_ar" name="category_ar"
                                            placeholder="أدخل الفئة" dir="rtl" />
                                        @error('category_ar')
                                            <div class=" invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="mb-3 form-password-toggle">
                                        <label class="form-label float-end" for="basic-default-password"><span
                                                class="text-danger">*</span> عن</label>
                                        <div class="input-group input-group-merge">
                                            <textarea class="form-control textarea" name="about_ar" id="about_ar" dir="rtl"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="mb-3 form-password-toggle">
                                        <label class="form-label float-end" for="basic-default-password"><span
                                                class="text-danger">*</span> معلومات شخصية</label>
                                        <div class="input-group input-group-merge">
                                            <textarea class="form-control textarea" name="personals_info_ar" id="personals_info_ar" dir="rtl"></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="tab-pane fade" id="seo" role="tabpanel" aria-labelledby="seo-tab">
                    <div class="row">
                        <h5 class="mb-4 mt-4 fw-bold">English</h5>
                        <hr>
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Meta Title</label>
                            <input type="text" class="form-control" id="meta_title_en" name="meta_title_en"
                                placeholder="Enter meta title">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Keywords</label>
                            <input type="text" class="form-control" placeholder="Enter keywords" id="keywords_en" name="keywords_en"
                                name="keyword">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Robots</label>
                            <input type="text" class="form-control" id="robots" name="robots" placeholder="Enter robots rule">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Type</label>
                            <input type="text" class="form-control" id="type" name="type" placeholder="Enter type">
                        </div>
                        <div class="col-12 mb-3">
                            <label class="form-label">Description</label>
                            <textarea class="form-control" id="description_en" name="description_en" rows="3" placeholder="Enter description"></textarea>
                        </div>
                        <hr class="mt-5">
                        <h5 class="mb-4 mt-4 fw-bold  d-flex justify-content-end">عربي</h5>
                        <div class="col-md-6 mb-3">
                            <label class="form-label float-end">الكلمات الرئيسية</label>
                            <input type="text" class="form-control" id="keywords_ar"
                                name="keywords_ar">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label float-end">عنوان ميتا</label>
                            <input type="text" class="form-control" id="meta_title_ar" name="meta_title_ar">
                        </div>
                        <div class="col-12 mb-3">
                            <label class="form-label float-end">وصف</label>
                            <textarea class="form-control" rows="3" id="description_ar" name="description_ar" placeholder=""></textarea>
                        </div>
                    </div>
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
    var input = document.querySelector('#keywords_en'); // match new id
    var tagify = new Tagify(input);
    var input = document.querySelector('#keywords_ar'); // match new id
    var tagify = new Tagify(input);

    // $('.textarea').trumbowyg();
    $(document).ready(function() {
        $('.textarea').trumbowyg({
            btns: [
                ['viewHTML'],
                ['formatting'],
                ['strong', 'em', 'del'],
                ['superscript', 'subscript'],
                ['link'],
                ['insertImage'],
                ['unorderedList', 'orderedList'],
                ['removeformat'],
                ['fullscreen']
            ],
            autogrow: true
        });

        // Form Insert
        $("#saveBtn").on("click", function(e) {
            e.preventDefault();
            let formData = new FormData($("#adminForum")[0]);
            $.ajax({
                url: "{{ route('teams.store') }}",
                type: "POST",
                data: formData,
                contentType: false,
                processData: false,
                headers: {
                    "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr('content')
                },
                beforeSend: function() {
                    $("#saveBtn").prop("disabled", true).html(
                        '<i class="fas fa-spinner fa-spin me-2"></i> Saving...'
                    );
                },
                success: function(response) {
                    console.log(response);
                    $("#saveBtn").prop("disabled", false).html(
                        '<i class="fas fa-save me-2"></i> Save'
                    );
                    Swal.fire({
                        icon: "success",
                        title: "Saved",
                        text: "Account created successfully!"
                    });
                    $("#adminForum")[0].reset();
                },
                error: function(xhr) {
                    $("#saveBtn").prop("disabled", false).html(
                        '<i class="fas fa-save me-2"></i> Save'
                    );

                    if (xhr.status === 422) {
                        let errors = xhr.responseJSON.errors;
                        $(".invalid-feedback").remove();
                        $(".is-invalid").removeClass("is-invalid");

                        $.each(errors, function(key, value) {
                            let input = $(`[name="${key}"]`);
                            input.addClass("is-invalid");
                            input.after(
                                `<div class="invalid-feedback">${value[0]}</div>`
                            );
                        });
                    } else {
                        Swal.fire({
                            icon: "error",
                            title: "Server Error",
                            text: "Something went wrong!"
                        });
                    }
                }
            });
        });


    });
</script>
@endsection
