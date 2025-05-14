@php
$services = DB::table('services')->select('id', 'title_en')->get();
@endphp
<div class="page-single-sidebar">
    <!-- Page Single Category List Start -->
    <div class="page-single-category-list wow fadeInUp">
        <h3>Professional Services</h3>
        <ul>
            @foreach ($services as $s)

            <li><a href="{{url('service/'.$s->id)}}">{{$s->title_en}}</a></li>
            @endforeach
        </ul>
    </div>
    <!-- Page Single Category List End -->

    <!-- Sidebar CTA Box Start -->
    {{-- <div class="sidebar-cta-box wow fadeInUp" data-wow-delay="0.25s">
        <!-- Sidebar CTA Image Start -->
        <div class="sidebar-cta-image">
            <figure>
                <img src="{{ asset('public') }}/images/sidebar-cta-bg.jpg" alt="">
            </figure>
        </div>
        <!-- Sidebar CTA Image End -->

        <!-- Sidebar CTA Item Start -->
        <div class="sidebar-cta-item">
            <!-- Icon Box Start -->
            <div class="icon-box">
                <img src="{{ asset('public') }}/images/icon-open-hour.svg" alt="">
            </div>
            <!-- Icon Box End -->

            <!-- Sidebar Cta Content Start -->
            <div class="sidebar-cta-content">
                <h3>Opening Hours:</h3>
                <p>Mon - Sat : 10.00 AM - 4.00PM</p>
                <p>Sunday : Closed</p>
            </div>
            <!-- Sidebar Cta Content End -->
        </div>
        <!-- Sidebar CTA Item End -->
    </div> --}}
    <!-- Sidebar CTA Box End -->
</div>
