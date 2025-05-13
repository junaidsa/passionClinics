
@php
    use Illuminate\Support\Facades\DB;
    use Illuminate\Support\Facades\Request;

    $query = DB::table('services');

    if (Request::is('offer')) {
        // Only include services where offer_type is NOT 0
        $query->where('offer_type', '!=', 0);
    }

    $services = $query->get();
@endphp
<div class="row">
    @foreach ($services as $s)
    <div class="col-lg-4 col-md-6">
        <div class="service-item wow fadeInUp">
            <div class="service-content">
                <div class="service-content-title">
                    <h2><a href="service-single.html">{{ App::isLocale('ar') ? @$s->title_ar : @$s->title_en }}</a></h2>
                    <a href="{{ route('front.service.single', $s->id) }}" class="readmore-btn"><img src="{{ asset('public') }}/images/arrow-white.svg" alt=""></a>
                </div>
                {{-- <p>{{$s->short_description_en}}</p> --}}
                <p>{{ App::isLocale('ar') ? @$s->short_description_ar : @$s->short_description_en }}</p>
            </div>
            <div class="service-image">
                <a href="service-single.html" data-cursor-text="View">
                    <figure class="image-anime">
                        <img src="{{ url('file/service/' . (@$s->main_image ?? 'avatar.jpg')) }}" alt="">
                    </figure>
                </a>
            </div>
        </div>
    </div>
    @endforeach

</div>
