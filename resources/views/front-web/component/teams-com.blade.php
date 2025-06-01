@php
    $dr = DB::table('users')->where('role', 'doctor')->get();
@endphp

<div class="row">
    @foreach ($dr as $d)
        <div class="col-lg-3 col-md-6">
            <!-- Team Item Start -->
            <div class="team-item wow fadeInUp" data-wow-delay="1s">
                <!-- Team Image Start -->
                <div class="team-image">
                    <a href="{{ url('team/' . $d->id) }}" data-cursor-text="View">
                        <figure class="image-anime">
                            <img src="{{ url('file/dr/' . (@$d->image ?? 'avatar.jpg')) }}" alt="">
                        </figure>
                    </a>
                </div>
                <!-- Team Image End -->

                <!-- Team Body Start -->
                <div class="team-body">
                    <!-- Team Content Start -->
                    <div class="team-content">
                        <h3><a href="{{ url('team/' . $d->id) }}">{{ App::isLocale('ar') ? $d->name_ar : $d->name }}</a>
                        </h3>
                    </div>
                    <!-- Team Content End -->

                    <!-- Team Social Icons Start -->
                    <div class="team-social-icons">
                        <ul>
                            <li><a href="{{ $d->ins_url }}"><i class="fa-brands fa-instagram"></i></a></li>
                            <li><a href="{{ $d->fb_url }}"><i class="fa-brands fa-facebook-f"></i></a></li>
                            <li><a href="{{ $d->x_url }}"><i class="fa-brands fa-x-twitter"></i></a></li>
                        </ul>
                    </div>
                    <!-- Team Social Icons End -->
                </div>
                <!-- Team Body End -->
            </div>
            <!-- Team Item End -->
        </div>
    @endforeach
</div>
