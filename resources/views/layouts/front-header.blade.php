   <style>
       .modal-backdrop.show {
           opacity: 0 !important;
           display: none !important;
           pointer-events: none !important;
       }

       .modal {
           pointer-events: auto !important;
           z-index: 9999 !important;
       }
   </style>
   <!-- Header Start -->
   <header class="main-header">
       <div class="header-sticky bg-section">
           <nav class="navbar navbar-expand-lg">
               <div class="container-fluid">
                   <!-- Logo Start -->
                   <a class="navbar-brand" href="{{ url('/') }}">
                       <img src="{{ asset('public') }}/images/headerlogo.png" style="width: 150px; height: auto;">
                   </a>
                   <!-- Logo End -->

                   <!-- Main Menu Start -->
                   <div class="collapse navbar-collapse main-menu">
                       <div class="nav-menu-wrapper">
                           <ul class="navbar-nav mr-auto" id="menu">
                               <li class="nav-item"><a class="nav-link" href="{{ url('/') }}">{{ __('lang.HOME') }}</a></li>
                               <li class="nav-item"><a class="nav-link" href="{{ url('/about-us') }}">{{ __('lang.ABOUT_US') }}</a></li>
                               <li class="nav-item"><a class="nav-link" href="{{ url('/services') }}">{{ __('lang.SERVICES') }}</a></li>
                               <li class="nav-item"><a class="nav-link" href="{{ url('/teams') }}">{{ __('lang.OUR_TEAM') }}</a></li>
                               <li class="nav-item"><a class="nav-link" href="{{ url('/offers') }}">{{ __('lang.OFFERS') }}</a></li>
                               <li class="nav-item"><a class="nav-link" href="{{ url('/e-clinic') }}">{{ __('lang.E_CLINIC') }}</a></li>
                               <li class="nav-item"><a class="nav-link" href="{{ url('/blogs') }}">{{ __('lang.BLOG') }}</a></li>
                               <li class="nav-item"><a class="nav-link" href="{{ url('/contact') }}">{{ __('lang.CONTACT_US') }}</a></li>
                               <li class="nav-item highlighted-menu"><a class="nav-link" href="book-appointment.html">{{ __('lang.MAKE_AN_APPOINTMENT') }}</a></li>
                           </ul>
                       </div>

                       <!-- Header Contact Btn Start -->
                       <div class="header-contact-btn">
                           <a href="tel:{{ $sett->phone_number }}" class="header-contact-now"> <i class="fa-solid fa-phone me-2"></i>{{ $sett->phone_number }}</a>


                           <!-- Trigger Button -->
                           <li class="nav-item dropdown me-2 me-xl-0">
                               <a class="nav-link dropdown-toggle hide-arrow" href="#" id="languageDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                   <i id="selected-language-flag" class="fi fi-us fis rounded-circle me-1 fs-2 {{ app()->getLocale() == 'ar' ? 'fi-sa' : 'fi-us' }}"></i>
                                   <span id="selected-language-text"></span>
                               </a>
                               <ul class="dropdown-menu dropdown-menu-end {{ app()->getLocale() == 'ar' ? 'lang-ar' : 'lang-en' }}"
                                   aria-labelledby="languageDropdown">
                                   <li>
                                       <a class="dropdown-item" href="#" data-language="en" data-flag="fi-us" data-text="English">
                                           <i class="fi fi-us fis rounded-circle me-1 fs-2"></i>
                                           <span class="align-middle">English</span>
                                       </a>
                                   </li>
                                   <li>
                                       <a class="dropdown-item" href="#" data-language="ar" data-flag="fi-sa" data-text="Arabic">
                                           <i class="fi fi-sa fis rounded-circle me-1 fs-2"></i>
                                           <span class="align-middle">Arabic</span>
                                       </a>
                                   </li>
                               </ul>
                           </li>
                           @auth
                               {{-- <li class="nav-item dropdown me-2 me-xl-0">
                                   <a class="nav-link dropdown-toggle hide-arrow" href="#" id="languageDropdown"
                                       role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                       <img src="{{ url('file/dr/' . (Auth::user()->image ?? 'avatar.jpg')) }}" width="50" height="50" class="rounded-circle">
                                   </a>
                                   <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="languageDropdown">
                                      <li class="p-1">
                                           <a class="" href="{{ url('/profile/update/' . Auth::id()) }}">
                                               <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                                   fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                                                   <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0" />
                                                   <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1" />
                                               </svg>
                                               <span class="align-middle ms-2">Profile</span>
                                           </a>
                                       </li>
                                       <li>
                                           <div class="dropdown-divider"></div>
                                       </li>
                                       <li class="p-1">
                                           <a class="" href="javascript:void(0);"
                                               onclick="document.getElementById('logoutForm').submit();">
                                               <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-box-arrow-right" viewBox="0 0 16 16">
                                                   <path fill-rule="evenodd" d="M10 12.5a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v2a.5.5 0 0 0 1 0v-2A1.5 1.5 0 0 0 9.5 2h-8A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-2a.5.5 0 0 0-1 0z" />
                                                   <path fill-rule="evenodd" d="M15.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 0 0-.708.708L14.293 7.5H5.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708z" />
                                               </svg>
                                               <span class="align-middle ms-2">Log Out</span>
                                           </a>
                                           <form id="logoutForm" method="POST" action="{{ url('/logout') }}">
                                               @csrf
                                           </form>
                                       </li>
                                   </ul>
                               </li> --}}
                           @else
                               {{-- <a href="#" class="btn-default" data-bs-toggle="modal" data-bs-target="#loginModal">{{ __('lang.SIGN_IN') }}</a> --}}
                           @endauth


                       </div>
                       <!-- Header Contact Btn End -->
                       <!-- Sign Up Modal -->
                       <div class="modal fade" id="signupModal" tabindex="-1" aria-labelledby="signupModalLabel"
                           aria-hidden="true">
                           <div class="modal-dialog">
                               <div class="modal-content contact-info-item w-100">
                                   <div class="modal-header">
                                       <h5 class="modal-title" id="signupModalLabel">Sign Up Your Account</h5>
                                       <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                   </div>
                                   <div class="modal-body w-100">
                                       <!-- Sign Up Form -->

                                       <form id="patient_form" name="patient_form">
                                           @csrf
                                           <div class="mb-3">
                                               <label for="name" class="form-label">Name</label>
                                               <input type="text" class="form-control" id="name" name="name" placeholder="Enter Name">
                                               <p></p>
                                           </div>
                                           {{-- <div class="mb-3">
                                               <label for="name" class="form-label">Patient Age</label>
                                               <input type="number" class="form-control" id="age"
                                                   name="age" placeholder="Enter Age">
                                               <p></p>
                                           </div> --}}
                                           <div class="mb-3">
                                               <label class="form-label" for="gender">Gender</label>
                                               <select name="gender" id="gender" class="form-select">
                                                   <option value="Male">Male</option>
                                                   <option value="Female">Female</option>
                                               </select>
                                               <p></p>
                                           </div>
                                           <div class="mb-3">
                                               <label for="phone" class="form-label">Phone Number</label>
                                               <input type="number" class="form-control" id="phone"
                                                   name="phone" placeholder="Enter Phone">
                                               <p></p>
                                           </div>
                                           <div class="mb-3">
                                               <label for="email_sign" class="form-label">Email</label>
                                               <input type="email" class="form-control" id="email_sign"
                                                   name="email" placeholder="Enter Email">
                                               <p></p>
                                           </div>
                                           <div class="mb-3">
                                               <label for="password" class="form-label">Password</label>
                                               <input type="password" class="form-control" id="password"
                                                   name="password" placeholder="Enter Password">
                                               <p></p>
                                           </div>
                                           <div class="mb-3">
                                               <label for="password" class="form-label">Confirm Password</label>
                                               <input type="password" class="form-control" id="confirm_password"
                                                   name="confirm_password" placeholder="Enter Confirm Password">
                                               <p></p>
                                           </div>
                                           <button type="submit" class="btn-default w-100 p-3 rounded">Sign
                                               Up</button>
                                       </form>
                                       <div class="text-center mt-3">
                                           <a href="#" id="openLogin" class="text-primary"><span class="text-black">Already have an account ?</span> Login</a>
                                       </div>
                                   </div>
                               </div>
                           </div>
                       </div>

                       <div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel"
                           aria-hidden="true">
                           <div class="modal-dialog">
                               <div class="modal-content contact-info-item w-100">
                                   <div class="modal-header">
                                       <h5 class="modal-title" id="loginModalLabel">Login Your Account</h5>
                                       <button type="button" class="btn-close" data-bs-dismiss="modal"
                                           aria-label="Close"></button>
                                   </div>
                                   <div class="modal-body w-100">
                                       <!-- Login Form -->

                                       <form id="login_form" method="POST">
                                           @csrf
                                           <div class="mb-3">
                                               <label for="email" class="form-label">Email</label>
                                               <input type="email" class="form-control" id="email"
                                                   name="email" placeholder="Enter Email">
                                               <div class="invalid-feedback" id="email_error"></div>
                                           </div>
                                           <div class="mb-3">
                                               <label for="password" class="form-label">Password</label>
                                               <input type="password" class="form-control" id="password"
                                                   name="password" placeholder="Enter Password">
                                               <div class="invalid-feedback" id="password_error"></div>
                                           </div>
                                           <div class="text-danger mb-2" id="login_error"></div>
                                           <button type="submit" class="btn-default w-100 p-3 rounded">Login</button>
                                       </form>


                                       <div class="text-center mt-3">
                                           <a href="#" id="openSignUp" class="text-primary"><span
                                                   class="text-black">Don't have an
                                                   account ?</span> Sign up</a>
                                       </div>
                                   </div>
                               </div>
                           </div>
                       </div>

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
       <script>
           $.ajaxSetup({
               headers: {
                   'X-CSRF-TOKEN': '{{ csrf_token() }}'
               }
           });
       </script>
       <script>
           $(document).ready(function() {
               $('#openSignUp').on('click', function(e) {
                   e.preventDefault();
                   $('#loginModal').modal('hide');
                   $('#signupModal').modal('show');
               });

               $('#openLogin').on('click', function(e) {
                   e.preventDefault();
                   $('#signupModal').modal('hide');
                   $('#loginModal').modal('show');
               });
               $('#login_form').on('submit', function(e) {
                   e.preventDefault();

                   // Clear previous errors
                   $('#email_error').text('');
                   $('#password_error').text('');
                   $('#login_error').text('');
                   $('#email').removeClass('is-invalid');
                   $('#password').removeClass('is-invalid');

                   $.ajax({
                       url: "{{ route('login.ajax') }}",
                       method: "POST",
                       data: $(this).serialize(),
                       success: function(response) {
                           if (response.status === true) {
                               window.location.href = response.redirect_url;
                           }
                       },
                       error: function(xhr) {
                           if (xhr.status === 422) {
                               let errors = xhr.responseJSON.errors;
                               if (errors.email) {
                                   $('#email_error').text(errors.email[0]);
                                   $('#email').addClass('is-invalid');
                               }
                               if (errors.password) {
                                   $('#password_error').text(errors.password[0]);
                                   $('#password').addClass('is-invalid');
                               }
                           } else if (xhr.status === 401) {
                               $('#login_error').text('Invalid credentials');
                           } else {
                               $('#login_error').text('Something went wrong. Please try again.');
                           }
                       }
                   });
               });

           });


           $('#patient_form').submit(function(e) {
               e.preventDefault();
               $.ajax({
                   url: '{{ route('account.processRegistration') }}',
                   method: 'POST',
                   data: $("#patient_form").serializeArray().concat({
                       name: '_token',
                       value: '{{ csrf_token() }}'
                   }), // Use #registrationForm here
                   dataType: 'json',
                   success: function(response) {
                       // Your success handling logic here
                       if (response.status == false) {
                           // Your error handling logic here
                           var errors = response.errors;
                           if (errors.name) {

                               $("#name").addClass('is-invalid').siblings('p').addClass(
                                   'invalid-feedback').html(errors.name)
                           } else {
                               $("#name").removeClass('is-invalid').siblings('p').removeClass(
                                   'invalid-feedback').html('')
                           }
                           if (errors.phone) {
                            $("#phone").addClass('is-invalid').siblings('p').addClass('invalid-feedback').html(errors.phone)
                           } else {
                               $("#phone").removeClass('is-invalid').siblings('p').removeClass('invalid-feedback').html('')
                           }

                           if (errors.gender) {

                               $("#gender").addClass('is-invalid').siblings('p').addClass(
                                   'invalid-feedback').html(errors.gender)
                           } else {
                               $("#gender").removeClass('is-invalid').siblings('p').removeClass(
                                   'invalid-feedback').html('')
                           }
                           if (errors.email) {

                               $("#email_sign").addClass('is-invalid').siblings('p').addClass(
                                   'invalid-feedback').html(errors.email)
                           } else {
                               $("#email_sign").removeClass('is-invalid').siblings('p').removeClass(
                                   'invalid-feedback').html('')
                           }

                           if (errors.password) {
                               $("#password").addClass('is-invalid').siblings('p').addClass(
                                   'invalid-feedback').html(errors.password)
                           } else {
                               $("#password").removeClass('is-invalid').siblings('p').removeClass(
                                   'invalid-feedback').html('')
                           }
                           if (errors.confirm_password) {
                               $("#confirm_password").addClass('is-invalid').siblings('p').addClass(
                                   'invalid-feedback').html(errors.confirm_password)
                           } else {
                               $("#confirm_password").removeClass('is-invalid').siblings('p')
                                   .removeClass('invalid-feedback').html('')
                           }

                       } else {
                           // Your success handling logic here
                           $("#name").removeClass('is-invalid').siblings('p').removeClass(
                               'invalid-feedback').html('');
                           $("#age").removeClass('is-invalid').siblings('p').removeClass(
                               'invalid-feedback').html('');
                           $("#email").removeClass('is-invalid').siblings('p').removeClass(
                               'invalid-feedback').html('');
                           $("#password").removeClass('is-invalid').siblings('p').removeClass(
                               'invalid-feedback').html('');
                           $("#confirm_password").removeClass('is-invalid').siblings('p').removeClass(
                               'invalid-feedback').html('');
                           window.location.href = "{{ url('/e-clinic') }}";
                       }
                   },
                   error: function(error) {
                       console.log(error);
                       // Handle AJAX errors here
                   }
               });
           });

           //    $(document).ready(function() {

           //    });
       </script>
   @endsection
