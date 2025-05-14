@php
$blogs = DB::table('blogs')->get();
@endphp
<div class="our-blog">
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
                        <a href="blog-single.html" data-cursor-text="View">
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
                            <div class="mt-auto text-center">
                    <a href="#" class="btn btn-primary w-100 py-2">
                        {{ __('More info') }}
                    </a>
                </div>
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
