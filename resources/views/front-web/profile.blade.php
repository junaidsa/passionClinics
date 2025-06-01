@extends('layouts.front-app')
@section('main-front')
    <main>
        <div class="conatct-us-form contact-form">
            <div class="container">
                <div class="row no-gutters">
                    <div class="col-md-4">
                        @include('layouts.front-sidebar')
                    </div>
                    <div class="col-md-8 ">
                        <div class="contact-form rounded">
                            <div class="section-title">
                                <h2 data-cursor="-opaque">@lang('app.Update_profile')</h2>
                            </div>

                            @if (session('profile_success'))
                                <div id="flash-alert" class="alert-box alert-success">
                                    {{ session('profile_success') }}
                                </div>
                            @endif

                            <form action="{{ url('/update/profile/' . Auth::user()->id) }}" method="POST">
                                @csrf
                                <div class="row">
                                    <div class="form-group col-md-6 mb-4">
                                        <input type="text" name="name"
                                            class="form-control rounded @error('name') is-invalid @enderror"
                                            value="{{ old('name', Auth::user()->name) }}" placeholder="@lang('app.name')"
                                            required>
                                        @error('name')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="form-group col-md-6 mb-4">
                                        <input type="text" name="name_ar" class="form-control rounded" dir="rtl"
                                            value="{{ old('name_ar', Auth::user()->name_ar) }}" placeholder="اسم (Arabic)">
                                    </div>

                                    <div class="form-group col-md-12 mb-4">
                                        <input type="email" name="email" class="form-control rounded"
                                            value="{{ old('email', Auth::user()->email) }}" placeholder="@lang('app.email')">
                                    </div>

                                    <div class="form-group col-md-12 mb-4">
                                        <input type="text" name="phone" class="form-control rounded"
                                            value="{{ old('phone', Auth::user()->phone) }}" placeholder="@lang('app.phone_no')">
                                    </div>

                                    <div class="form-group col-md-12 mb-4">
                                        <select name="gender" class="form-control rounded form-select">
                                            <option value="Male" {{ Auth::user()->gender == 'Male' ? 'selected' : '' }}>
                                                Male</option>
                                            <option value="Female" {{ Auth::user()->gender == 'Female' ? 'selected' : '' }}>
                                                Female</option>
                                        </select>
                                    </div>

                                    <div class="col-md-3">
                                        <div class="contact-form-btn">
                                            <button type="submit" class="btn-default rounded">@lang('app.save_change')</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                    {{-- Password Change --}}
                    <div class="col-md-4"></div>
                    <div class="col-md-8">
                        <div class="contact-form rounded">
                            <div class="section-title">
                                <h2 data-cursor="-opaque">@lang('app.Update_password')</h2>
                            </div>

                            @if (session('password_success'))
                                <div id="flash-alert" class="alert-box alert-success">
                                    {{ session('password_success') }}
                                </div>
                            @endif

                            <form action="{{ url('/profile/update-password/' . Auth::user()->id) }}" method="POST">
                                @csrf
                                <div class="form-group col-md-12 mb-4">
                                    <input type="password" name="old_password"
                                        class="form-control rounded @error('old_password') is-invalid @enderror"
                                        placeholder="@lang('app.old_password')" required>
                                    @error('old_password')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="form-group col-md-12 mb-4">
                                    <input type="password" name="new_password"
                                        class="form-control rounded @error('new_password') is-invalid @enderror"
                                        placeholder="@lang('app.new_password')" required>
                                    @error('new_password')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="col-md-3">
                                    <div class="contact-form-btn">
                                        <button type="submit" class="btn-default rounded">@lang('app.save_change')</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </main>
@endsection

@section('javascript')
    <script>
        setTimeout(function() {
            let alert = document.getElementById('flash-alert');
            if (alert) {
                alert.style.display = 'none';
            }
        }, 4000);
    </script>
@endsection
