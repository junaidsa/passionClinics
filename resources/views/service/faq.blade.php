@extends('layouts.app')
@section('main')
    <div class="container-xxl flex-grow-1 container-p-y">
        <!-- Sticky Actions -->
        <div class="row">
            <div class="col-12">
                <div class="card mb-3">
                    <div class="card-body">
                        <div class="row g-3">
                            <form action="{{ url('admin/service/faq/store') }}" method="POST">
                                @csrf
                                <input type="hidden" name="id" value="{{ $id }}">

                                <div class="col-md-12">
                                    <label class="form-label" for="title">Question</label>
                                    <input type="text" name="question" id="question" class="form-control"
                                        value="{{ old('question') }}" />
                                </div>

                                <div class="col-12">
                                    <label class="form-label" for="answer">Answer</label>
                                    <textarea name="answer" class="form-control  @error('answer') is-invalid @enderror" id="answer" rows="2"
                                        placeholder="Answer">{{ old('answer') }}</textarea>
                                    @error('answer')
                                        <div class=" invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="action-btns mt-3">
                                    <button class="btn btn-primary" type="submit">Save Change</button>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
                <div class="card shadow-sm rounded-4">
                    <div class="card-header bg-primary text-white text-center rounded-top-4 mb-2">
                        <h2 class="my-1">Service Asked Questions</h2>
                    </div>
                    <div class="card-body">
                        @foreach ($faq as $index => $f)
                            <div class="mb-4 p-3 border rounded-3 bg-light position-relative">
                                <h5 class="fw-bold text-primary">
                                    Q{{ $index + 1 }}: {{ $f->question }}
                                </h5>
                                <p class="mt-2 text-muted">
                                    {{ $f->answer }}
                                </p>

                                <!-- Delete Button -->
                                <form action="{{ route('faq.destroy', $f->id) }}" method="POST" class="position-absolute top-0 end-0 m-2">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this FAQ?')">
                                        Delete
                                    </button>
                                </form>
                            </div>
                        @endforeach
                </div>

            </div>
        </div>
        <!-- /Sticky Actions -->
    </div>
    <!-- / Content -->
@endsection
@section('javascript')
    <script>
        document.querySelectorAll('.delete-image').forEach(button => {
            button.addEventListener('click', function() {
                const id = this.dataset.id;

                fetch(`{{ url('admin/project/gallery/delete') }}/${id}`, {
                    method: "DELETE",
                    headers: {
                        'X-CSRF-TOKEN': '{{ csrf_token() }}'
                    }
                }).then(res => res.json()).then(data => {
                    if (data.success) document.querySelector(`.gallery-image[data-id="${id}"]`)
                        .remove();
                });
            });
        });
    </script>
@endsection
