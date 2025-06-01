@extends('layouts.app')
@section('main')
    <div class="container-xxl flex-grow-1 container-p-y">
        <!-- Sticky Actions -->
        <div class="row">
            <div class="col-12">
                <div class="card mb-3">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-12">
                                <h5 class="mb-4 mt-4">Create Difference</h5>
                                <div class="row g-3">
                                    <form id="amenityForm" enctype="multipart/form-data">
                                        @csrf
                                        <div class="col-md-12 mb-2">
                                            <label class="form-label" for="name">Title</label>
                                            <input type="text" name="title" id="title" class="form-control" />
                                        </div>
                                        <div class="col-md-12 mb-2">
                                            <label class="form-label float-end" for="name_ar">اسم (Arabic)</label>
                                            <input type="text" name="name_ar" id="name_ar" dir="rtl"
                                                class="form-control" placeholder="اسم" />
                                        </div>
                                        <div class="col-md-12 col-sm-6 col-6 mb-2">
                                            <label class="form-label">Image/Avatar</label>
                                            <input type="file" name="avatar" class="form-control" />
                                        </div>
                                        <div class="action-btns mt-3">
                                            <button class="btn btn-primary" type="submit">Create Difference</button>
                                        </div>
                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <h5 class="mt-4">Difference</h5>
                        <div class="row">
                            @foreach ($difference as $d)
                                <div class="col-md-3 mb-3 amenity-card" data-id="{{ $d->id }}">
                                    <div class="card">
                                        <img src="{{ url('file/difference/' . (@$d->avatar ?? '')) }}"
                                            class="card-img-top img-thumbnail">
                                        <div class="card-body text-center">
                                            <h6>
                                                {{ $d->title }}
                                                <div dir="rtl">{{ $d->name_ar }}</div>

                                            </h6>
                                            <button class="btn btn-danger btn-sm delete-amenity"
                                                data-id="{{ $d->id }}">Delete</button>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
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
    <script>
        document.getElementById('amenityForm').addEventListener('submit', function(e) {
            e.preventDefault();

            let formData = new FormData(this);
            // alert(formData)
            console.log("{{ route('admin.difference.upload') }}");
            fetch("{{ route('admin.difference.upload') }}", {
                method: "POST",
                body: formData,
                headers: {
                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                }
            }).then(res => res.json()).then(data => {
                if (data.success) location.reload();
            });
            // fetch("{{ route('admin.difference.upload') }}", {
            //         method: "POST",
            //         body: formData,
            //         headers: {
            //             'X-CSRF-TOKEN': '{{ csrf_token() }}'
            //         }
            //     })
            //     .then(res => res.text())
            //     .then(data => {
            //         console.log('Response:', data);
            //     });
        });

        document.querySelectorAll('.delete-amenity').forEach(button => {
            button.addEventListener('click', function() {
                const id = this.dataset.id;

                fetch(`{{ url('admin/difference/delete') }}/${id}`, {
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
