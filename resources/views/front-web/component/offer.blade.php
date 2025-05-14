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
<div class="row g-4">
@foreach ($services as $s)
    @php
        $originalPrice = $s->price ?? 0;
        $discountPercent = $s->discount ?? 0;
        $offerPrice = $originalPrice - ($originalPrice * ($discountPercent / 100));
        $hasDiscount = $discountPercent > 0 && $originalPrice > $offerPrice;
        $image = $s->main_image ? url('file/service/' . $s->main_image) : url('file/service/avatar.jpg');
        $title = App::isLocale('ar') ? $s->title_ar : $s->title_en;
        $currency = App::isLocale('ar') ? ' ر.س' : '$';
    @endphp

    <div class="col-12 col-md-6 col-lg-4 mb-4">
        <div class="card h-100 shadow-sm border-0 overflow-hidden position-relative">
            {{-- Discount badge --}}
            @if ($hasDiscount)
                <span class="badge bg-danger position-absolute top-0 start-0 z-1 m-2 fs-6 px-3 py-2 rounded-end">
                    {{ __('-' . number_format($discountPercent) . '% OFF') }}
                </span>
            @endif

            {{-- Offer Type badge --}}
            @if ($s->offer_type)
                <span class="badge bg-warning text-dark position-absolute top-0 end-0 z-1 m-2 fs-6 px-3 py-2 rounded-start">
                    {{ $s->offer_type === 'Life Time' ? __('Lifetime Access') : __('Limited Offer:') . ' ' . $s->persons_count }}
                </span>
            @endif

            {{-- Image --}}
            <a href="{{ route('front.service.single', $s->id) }}">
                <img src="{{ $image }}" class="card-img-top" alt="Service Image" style="height: 220px; object-fit: cover;">
            </a>

            {{-- Content --}}
            <div class="card-body d-flex flex-column">
                <h5 class="card-title mb-2">
                    <a href="{{ route('front.service.single', $s->id) }}" class="text-dark text-decoration-none">
                        {{ $title }}
                    </a>
                </h5>

                {{-- Price Section --}}
                @if ($originalPrice > 0)
                    <div class="mb-3">
                        @if ($hasDiscount)
                            <span class="text-muted text-decoration-line-through me-2">
                                {{ App::isLocale('ar') ? number_format($originalPrice, 2) . $currency : $currency . number_format($originalPrice, 2) }}
                            </span>
                            <span class="fw-bold text-success fs-5">
                                {{ App::isLocale('ar') ? number_format($offerPrice, 2) . $currency : $currency . number_format($offerPrice, 2) }}
                            </span>
                        @else
                            <span class="fw-bold text-dark fs-5">
                                {{ App::isLocale('ar') ? number_format($originalPrice, 2) . $currency : $currency . number_format($originalPrice, 2) }}
                            </span>
                        @endif
                    </div>
                @endif

                {{-- Buy Now Button --}}
                <div class="mt-auto text-center">
                    <a href="{{ route('front.service.single', $s->id) }}" class="btn-default w-100 py-2">
                        {{ __('Buy Now') }}
                    </a>
                </div>
            </div>
        </div>
    </div>
@endforeach

</div>
