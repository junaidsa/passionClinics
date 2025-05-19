@php
    $services = DB::table('services')->where('offer_type', '!=', '0')->get();
@endphp
<div class="row g-4">
@foreach ($services as $s)
    @php
        $originalPrice = $s->price ?? 0;
        $discountPercent = $s->discount ?? 0;
        $offerPrice = $originalPrice - ($originalPrice * ($discountPercent / 100));
        $hasDiscount = $discountPercent > 0 && $originalPrice > $offerPrice;
        // $image = $s->main_image ? url('file/service/' . $s->main_image) : 'avatar.jpg';
        $title = App::isLocale('ar') ? $s->title_ar : $s->title_en;
   $currency = App::isLocale('ar') ? 'SAR' : 'SAR';
        $start = $s->start_date;
    @endphp

    <div class="col-12 col-md-6 col-lg-4 mb-4">
        <div class="card h-100 shadow-sm border-0 overflow-hidden position-relative">
            {{-- Discount badge --}}
@php
    $start = $s->start_date ? \Carbon\Carbon::parse($s->start_date) : null;
    $end = $s->end_date ? \Carbon\Carbon::parse($s->end_date) : null;
@endphp

@if ($start && $end)
    @if ($start->format('F') === $end->format('F'))
        <span class="fw-bold bg-light position-absolute top-0 z-1 shadow-sm fs-6 px-3 py-2 rounded-0 float-start">
            {{ $start->format('M j') }} to {{ $end->format('j') }}
        </span>
    @else
        <span class="fw-bold bg-light position-absolute top-0 z-1 shadow-sm fs-6 px-3 py-2 rounded-0 float-start">
            {{ $start->format('M j') }} to {{ $end->format('M j') }}
        </span>
    @endif
@endif
            @if($s->offer_type != 'Limited days')
                <span class="badge bg-light text-dark position-absolute top-0 end-0 z-1 shadow-sm fs-6 px-3 py-2 rounded-0 float-end">
                    {{ $s->offer_type}}
                </span>
                @endif

            {{-- Image --}}
            <a href="{{ route('front.service.single', $s->id) }}">
                <img src="{{ url('file/dr/' . (@$s->main_image ?? 'avatar.jpg')) }}" class="card-img-top p-2 mt-5 rounded-4" alt="Service Image" style="height: 220px; object-fit: cover;">
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
