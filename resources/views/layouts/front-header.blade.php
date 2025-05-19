   <!-- Header Start -->
   <header class="main-header">
       <div class="header-sticky bg-section">
           <nav class="navbar navbar-expand-lg">
               <div class="container-fluid">
                   <!-- Logo Start -->
                   <a class="navbar-brand" href="{{url('/')}}">
                       <img src="{{ asset('public') }}/images/headerlogo.png" style="width: 150px; height: auto;">
                   </a>
                   <!-- Logo End -->

                   <!-- Main Menu Start -->
                   <div class="collapse navbar-collapse main-menu">
                       <div class="nav-menu-wrapper">
                           <ul class="navbar-nav mr-auto" id="menu">
                               <li class="nav-item"><a class="nav-link" href="{{ url('/') }}">@lang('app.home')</a>
                               </li>
                               <li class="nav-item"><a class="nav-link" href="{{ url('/about') }}">@lang('app.about_us')</a>
                               <li class="nav-item"><a class="nav-link" href="{{ url('/services') }}">@lang('app.services')</a></li>
                               <li class="nav-item"><a class="nav-link" href="{{ url('/teams') }}">@lang('app.our_team')</a></li>
                               <li class="nav-item"><a class="nav-link" href="{{ url('/offers') }}">@lang('app.offers')</a></li>
                               <li class="nav-item"><a class="nav-link" href="{{ url('/e-clinic') }}">@lang('app.e_clinic')</a></li>
                               <li class="nav-item"><a class="nav-link" href="{{ url('/blogs') }}">@lang('app.blog')</a></li>
                               <li class="nav-item"><a class="nav-link" href="{{ url('/contact') }}">@lang('app.contact_us')</a></li>
                               <li class="nav-item highlighted-menu"><a class="nav-link" href="book-appointment.html">@lang('app.make_an_appointment')</a></li>
                           </ul>
                       </div>

                       <!-- Header Contact Btn Start -->
                       <div class="header-contact-btn">
                           <a href="tel:{{ $sett->phone_number }}" class="header-contact-now"> <i class="fa-solid fa-phone me-2"></i>{{ $sett->phone_number }}</a>
                           <a href="book-appointment.html" class="btn-default">@lang('app.make_an_appointment')</a>
                           <li class="nav-item dropdown me-2 me-xl-0">
                               <a class="nav-link dropdown-toggle hide-arrow" href="#" id="languageDropdown"
                                   role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                   <i id="selected-language-flag"
                                       class="fi fi-us fis rounded-circle me-1 fs-2 {{ app()->getLocale() == 'ar' ? 'fi-sa' : 'fi-us' }}"></i>
                                   <span id="selected-language-text"></span>
                               </a>
                               <ul class="dropdown-menu dropdown-menu-end {{ app()->getLocale() == 'ar' ? 'lang-ar' : 'lang-en' }}"
                                   aria-labelledby="languageDropdown">
                                   <li>
                                       <a class="dropdown-item" href="#" data-language="en" data-flag="fi-us"
                                           data-text="English">
                                           <i class="fi fi-us fis rounded-circle me-1 fs-2"></i>
                                           <span class="align-middle">English</span>
                                       </a>
                                   </li>
                                   <li>
                                       <a class="dropdown-item" href="#" data-language="ar" data-flag="fi-sa"
                                           data-text="Arabic">
                                           <i class="fi fi-sa fis rounded-circle me-1 fs-2"></i>
                                           <span class="align-middle">Arabic</span>
                                       </a>
                                   </li>
                               </ul>
                           </li>

                       </div>
                       <!-- Header Contact Btn End -->
                   </div>
                   <!-- Main Menu End -->
                   <div class="navbar-toggle"></div>
               </div>
           </nav>
           <div class="responsive-menu"></div>
       </div>
   </header>
   <!-- Header End -->
   @section('javascript')
   @endsection
