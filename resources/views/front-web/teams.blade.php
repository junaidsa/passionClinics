
@extends('layouts.front-app')
@section('main-front')
<main>
    <!-- Page Header Start -->
    <div class="page-header bg-section dark-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
					<!-- Page Header Box Start -->
					<div class="page-header-box">
						<h1   data-cursor="-opaque">{{ __('lang.OUR_TEAM') }}</h1>
						<nav class="wow fadeInUp">
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="{{url('/')}}">{{ __('lang.HOME') }}</a></li>
								<li class="breadcrumb-item active" aria-current="page">{{ __('lang.TEAM') }}</li>
							</ol>
						</nav>
					</div>
					<!-- Page Header Box End -->
				</div>
            </div>
        </div>
    </div>
    <!-- Page Header End -->

    <!-- Page Team Section Start -->
    <div class="page-team">
        <div class="container">
            @include('front-web.component.teams-com')
        </div>
    </div>
    <!-- Page Team Section End -->
</main>
@endsection
