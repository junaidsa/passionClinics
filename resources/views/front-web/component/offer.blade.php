@php
    $services = DB::table('services')->where('offer_type', '!=', '0')->get();
@endphp
<style>
    .price-badge {
        position: absolute;
        top: 0rem;
        left: 0rem;
        /* background-color: #0d6efd; */
        background-color: #1EAAE8;
        color: #fff;
        padding: 6px 12px;
        border-radius: 15px 0 0 0;
        font-weight: 600;
        font-size: 0.95rem;
        box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
        z-index: 2;
    }

    .price-discount {
        position: absolute;
        top: 0rem;
        right: 0rem;
        /* background-color: #0d6efd; */
        background-color: #AEABEA;
        color: #fff;
        padding: 6px 12px;
        border-radius: 0 15px 0 0;
        font-weight: 600;
        font-size: 0.95rem;
        box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
        z-index: 2;
    }
</style>

{{-- <div class="row">
    @foreach ($services as $s)
        <div class="col-lg-4 col-md-6">
            <div class="service-item wow fadeInUp position-relative">
                @if ($s->price)
                    <div class="price-badge">
                        {{ App::isLocale('ar') ? number_format($s->price, 2) . ' ر.س' : '$' . number_format($s->price, 2) }}
                    </div>
                @endif
                <div class="service-content">
                    <div class="service-content-title">
                        <h2><a href="service-single.html">{{ App::isLocale('ar') ? @$s->title_ar : @$s->title_en }}</a>
                        </h2>
                        <a href="{{ route('front.service.single', $s->id) }}" class="readmore-btn"><img
                                src="{{ asset('public') }}/images/arrow-white.svg" alt=""></a>
                    </div> --}}
{{-- @if ($s->price)
                        <p class="service-price fw-bold text-primary mt-2">
                            {{ App::isLocale('ar') ? number_format($s->price, 2) . ' ر.س' : '$' . number_format($s->price, 2) }}
                        </p>
                    @endif --}}
{{-- <p>{{$s->short_description_en}}</p> --}}
{{-- <p>{{ App::isLocale('ar') ? @$s->short_description_ar : @$s->short_description_en }}</p>
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

</div> --}}

<div class="row g-4">
    @foreach ($services as $s)
        <div class="col-12 col-md-6 col-lg-4">
            <div class="service-item position-relative shadow-sm rounded p-3 h-100 d-flex flex-column bg-white">

                <div class="service-image position-relative">
                    <a href="service-single.html" data-cursor-text="View">
                        <figure class="image-anime">
                            <img src="{{ url('file/service/' . (@$s->main_image ?? 'avatar.jpg')) }}" alt="Service Image"
                                class="img-fluid w-100">
                        </figure>
                    </a>
                    @if ($s->offer_type == 'Life Time')
                        <div class="price-badge">
                            {{ $s->offer_type }}
                        </div>
                    @else
                        <div class="price-badge">
                            {{ $s->offer_type }} {{ $s->persons_count }}
                        </div>
                    @endif

                    @if ($s->price)
                        <div class="price-discount">
                            {{ App::isLocale('ar') ? number_format($s->persons_count, '%') . ' ر.س' : '' . number_format($s->discount) . '%' }}
                        </div>
                    @endif
                </div>

                <div class="service-content d-flex flex-column flex-grow-1 mt-3">
                    <h5 class="fw-semibold mb-2">
                        <a href="{{ route('front.service.single', $s->id) }}" class="text-decoration-none text-dark">
                            {{ App::isLocale('ar') ? $s->title_ar : $s->title_en }}
                        </a>
                    </h5>
                    <p class="flex-grow-1 text-muted">
                        {{ App::isLocale('ar') ? $s->short_description_ar : $s->short_description_en }}
                    </p>
                    <div class="d-flex justify-content-between">
                        @php
                            $originalPrice = $s->price; // Original price
                            $discountPercent = $s->discount ?? 0; // DB se discount %, default 0 agar null ho

                            // Offer price calculate karna
                            $offerPrice = $originalPrice - $originalPrice * ($discountPercent / 100);
                        @endphp

                        @if ($discountPercent > 0 && $originalPrice > $offerPrice)
                            <div class="mt-3">
                                <span class="text-decoration-line-through text-muted me-1" style="opacity: 0.8;">
                                    {{ App::isLocale('ar') ? number_format($originalPrice, 2) . ' ر.س' : '$' . number_format($originalPrice, 2) }}
                                </span>
                                <span class="fw-bold text-dark">
                                    {{ App::isLocale('ar') ? number_format($offerPrice, 2) . ' ر.س' : '$' . number_format($offerPrice, 2) }}
                                </span>
                                {{-- <span class="badge bg-success ms-2">
                                    {{ $discountPercent }}% OFF
                                </span> --}}
                            </div>
                        @else
                            <div class="mt-3">
                                <span class="fw-bold text-dark">
                                    {{ App::isLocale('ar') ? number_format($originalPrice, 2) . ' ر.س' : '$' . number_format($originalPrice, 2) }}
                                </span>
                            </div>
                        @endif


                        <a href="{{ route('front.service.single', $s->id) }}" class="readmore-btn float-end"><img
                                src="{{ asset('public') }}/images/arrow-white.svg" alt=""></a>
                    </div>
                </div>

            </div>
        </div>
    @endforeach
</div>
