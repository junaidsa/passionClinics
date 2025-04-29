
@php

  $about = DB::table('abouts')->where('id',1)->first();
@endphp
<style>
    li{
        margin: 10px 0 10px 0;
    }
    </style>
<div class="row align-items-center">
    <div class="col-lg-6">
        <!-- About Us Images Start -->
        <div class="about-us-images">
            <!-- About Image 1 Start -->
            <div class="about-img-1">
                <figure class="image-anime reveal">
                    <img src="{{ url('file/about/' . (@$about->about_attachment ?? 'avatar.jpg')) }}" alt="">
                </figure>


            </div>
            <!-- About Image 1 End -->

            <!-- About Image 2 Start -->
            <div class="about-img-2">
                <figure class="image-anime reveal">
                    <img src="{{ url('file/about/' . (@$about->about_attachment2 ?? 'avatar.jpg')) }}" alt="">
                </figure>
            </div>
            <!-- About Image 2 End -->
        </div>
        <!-- About Us Images End -->
    </div>

    <div class="col-lg-6">
        <!-- Hero Content Box Start -->
        <div class="about-us-content">
            <!-- Section Title Start -->
            <div class="section-title">
                <h3 class="wow fadeInUp">About us</h3>
                <h2 class="text-anime-style-3" data-cursor="-opaque">{{@$about->about_title}}</h2>
                {!! @$about->about!!}
            </div>
        </div>
        <!-- Hero Content Box End -->
    </div>
</div>
