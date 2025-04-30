   <!-- Header Start -->
   <header class="main-header">
    <div class="header-sticky bg-section">
        <nav class="navbar navbar-expand-lg">
            <div class="container-fluid">
                <!-- Logo Start -->
                <a class="navbar-brand" href="index-video.html">
                    <img src="{{ asset('public') }}/images/headerlogo.png" alt="Logo">
                </a>
                <!-- Logo End -->

                <!-- Main Menu Start -->
                <div class="collapse navbar-collapse main-menu">
                    <div class="nav-menu-wrapper">
                        <ul class="navbar-nav mr-auto" id="menu">
                            <li class="nav-item"><a class="nav-link" href="{{url('/')}}">Home</a>
                            </li>
                            <li class="nav-item"><a class="nav-link" href="{{url('/about')}}">About Us</a>
                            <li class="nav-item"><a class="nav-link" href="{{url('/services')}}">Services</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{url('/teams')}}">Our Team</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{url('/contact')}}">Contact Us</a></li>
                            <li class="nav-item highlighted-menu"><a class="nav-link" href="book-appointment.html">Make an Appointment</a></li>
                        </ul>
                    </div>

                    <!-- Header Contact Btn Start -->
                    <div class="header-contact-btn">
                        <a href="tel:123456789" class="header-contact-now"><i class="fa-solid fa-phone"></i>0112880840</a>
                        <a href="book-appointment.html" class="btn-default">Make an Appointment</a>
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
