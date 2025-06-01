@extends('layouts.front-app')
@section('main-front')

    <main>
        <style>
            .post-item {
    border-radius: 12px;
    box-shadow: 0 8px 24px rgba(0, 0, 0, 0.08);
    overflow: hidden;
    transition: transform 0.3s ease, box-shadow 0.3s ease;
    background-color: #fff;
    display: flex;
    flex-direction: column;
    height: 100%;
}

.post-item:hover {
    transform: translateY(-5px);
    box-shadow: 0 12px 28px rgba(0, 0, 0, 0.15);
}
.post-featured-image img {
    width: 100%;
    height: auto;
    object-fit: cover;
    border-top-left-radius: 12px;
    border-top-right-radius: 12px;
}
.post-item-content h2 {
    font-size: 1.2rem;
    font-weight: 600;
    margin-top: 15px;
    margin-bottom: 10px;
    color: #333;
    min-height: 50px;
}

.post-item-content p {
    text-align: center;
    font-size: 0.95rem;
    color: #555;
    margin-bottom: 20px;
}

.blog-btn {
    text-align: center;
    display: inline-block;
    padding: 10px 24px;
    background-color: #CD5F37;
    color: #fff;
    font-weight: 500;
    text-decoration: none;
    border-radius: 8px;
    transition: all 0.3s ease;
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
}

.blog-btn:hover {
    /* background-color: #cf5a5a; */
    transform: translateY(-2px);
    box-shadow: 0 8px 20px rgba(0, 0, 0, 0.15);
}
            </style>
@php
$blogs = DB::table('blogs')->get();
@endphp
<div class="our-blog bg-section">
    <div class="container">
        <div class="row section-row align-items-center">
            <div class="col-lg-12">
                <!-- Section Title Start -->
                <div class="section-title section-title-center">
                    <h3 class="wow fadeInUp">@lang('app.latest-blog')</h3>
                    <h2   data-cursor="-opaque">@lang('app.blog-dis')</h2>
                </div>
                <!-- Section Title End -->
            </div>
        </div>

        <div class="row">
            @foreach ($blogs as $b)
            <div class="col-lg-4 col-md-6">
                <!-- Post Item Start -->
                <div class="post-item wow fadeInUp" data-wow-delay="0.2s">
                    <!-- Post Featured Image Start-->
                    <div class="post-featured-image">
                        <a href="#" data-cursor-text="View">
                            <figure class="image-anime">
                                <img src="{{ url('file/blog/' . (@$b->image ?? 'avatar.jpg')) }}" alt="">
                            </figure>
                        </a>
                    </div>
                    <!-- Post Featured Image End -->

                    <!-- Post Item Body Start -->
                    <div class="post-item-body">
                        <!-- Post Item Content Start -->
                        <div class="post-item-content">
                            <h2><a href="#">{{ App::isLocale('ar') ? @$b->title_ar : @$b->title_en}}</a></h2>
                            <p>{{ App::isLocale('ar') ? @$b->description_ar : @$b->description}}</p>
                        </div>
                        <!-- Post Item Content End -->

                        <!-- Post Item Readmore Button Start-->
                            {{-- <div class="mt-auto text-center"> --}}
                    <a href="#" class="blog-btn w-100">
                        {{ __('More info') }}
                    </a>
                {{-- </div> --}}
                        <!-- Post Item Readmore Button End-->
                    </div>
                    <!-- Post Item Body End -->
                </div>
                <!-- Post Item End -->
            </div>
            @endforeach
        </div>
    </div>
</div>

    </main>
@endsection
