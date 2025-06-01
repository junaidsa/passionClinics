
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
						<h1 class="text-anime-style-3" data-cursor="-opaque">{{$profile->name}}</h1>
						<nav class="wow fadeInUp">
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="#">home</a></li>
								<li class="breadcrumb-item"><a href="#">team</a></li>
								<li class="breadcrumb-item active" aria-current="page">Dr. neha verma</li>
							</ol>
						</nav>
					</div>
					<!-- Page Header Box End -->
				</div>
			</div>
		</div>
	</div>
	<!-- Page Header End -->

    <!-- Page Team Single Start -->
    <div class="page-team-single">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- Page Team Single Box Start -->
				    <div class="page-team-single-box">
                        <!-- Team Member Info Box Start -->
                        <div class="team-member-info-box">
                            <!-- Team Member Image Start -->
                            <div class="team-member-image">
                                <figure class="image-anime reveal">
                                    <img src="{{ url('file/dr/' . (@$profile->image ?? 'avatar.jpg')) }}" alt="">
                                </figure>
                            </div>
                            <!-- Team Member Image End -->

                            <!-- Team Member Content Start -->
                            <div class="team-member-content">
                                <!-- Member Content Header Start -->
                                <div class="section-title">
                                    <h3 class="wow fadeInUp">Expert {{@$profile->service->title}}</h3>
                                    <h2 class="text-anime-style-3" data-cursor="-opaque">About me</h2>
                                    <p class="wow fadeInUp" data-wow-delay="0.2s">{{@$profile->about}}</p>
                                </div>
                                <!-- Member Content Header End -->

                                <!-- Member Info List Start -->
                                <div class="member-info-list wow fadeInUp" data-wow-delay="0.4s">
                                    <ul>
                                        <li>Phone : <span>{{@$profile->phone}}</span></li>
                                        <li>Email : <span>{{$profile->email}}</span></li>
                                        <li>Experience : <span>{{@$profile->experience}}</span></li>
                                        <li>Position : <span>{{@$profile->service->title}}</span></li>
                                    </ul>
                                </div>
                                <!-- Member Info List End -->

                                <!-- Member Social List Start -->
                                <div class="member-social-list wow fadeInUp" data-wow-delay="0.6s">
                                    <ul>
                                        <li><a href="{{$profile->x_url}}"><i class="fa-brands fa-x-twitter"></i></a></li>
                                        <li><a href="{{$profile->fb_url}}"><i class="fa-brands fa-facebook-f"></i></a></li>
                                        <li><a href="{{$profile->ins_url}}"><i class="fa-brands fa-instagram"></i></a></li>
                                    </ul>
                                </div>
                                <!-- Member Social List End -->
                            </div>
                            <!-- Team Member Content End -->
                        </div>
                        <!-- Team Member Info Box End -->

                        <!-- Team Member About Start -->
                        <div class="team-member-about">
                            <!-- Section Title Start -->
                            <div class="section-title">
                                <h2 class="text-anime-style-3" data-cursor="-opaque">Personals info</h2>
{!! $profile->personals_info !!}
                            </div>
                            <!-- Section Title End -->


                        </div>
                        <!-- Team Member About End -->
                    </div>
                    <!-- Page Team Single Box End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Page Team Single End -->
</main>
@endsection
