    <!-- Page Header Start -->
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
                        <h1 class="text-anime-style-3" data-cursor="-opaque">E-Clinic</h1>
                        <nav class="wow fadeInUp">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">E-Clinic</li>
                            </ol>
                        </nav>
                    </div>
                    <!-- Page Header Box End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header End -->

    <!-- E-Clinic Section Start -->
    <div class="e-clinic bg-section">
        <div class="container">
            <!-- Section Title Start -->
             <center>
                <br><br><br>
                <div class="section-title">
                    <h3 class="wow fadeInUp">E-Clinic</h3>
                    <h2 class="text-anime-style-3" data-cursor="-opaque">Meet Our Expert Doctors</h2>
                </div>
             </center>

            <!-- Section Title End -->

            <div class="row">
                <div class="col-lg-12">
                    <div class="doctor-card wow fadeInUp" data-wow-delay="0.2s">
                        <div class="doctor-info">
                            <img src="{{ asset('public') }}/images/dr1.png" alt="Dr. Basem Elfeki" class="doctor-photo">
                            <div class="doctor-details">
                                <h2>Dr. Basem Elfeki <span class="badge">PLATINUM DOCTOR</span></h2>
                                <p>Plastic Surgery Doctor</p>
                                <p>MD Plastic Surgery South Korea. Fellow of Seoul University, South Korea. Instructor of the Egyptian Fellowship of Plastic Surgery. Senior Vice President of Plastic Surgery at the Saudi Commission for Health Specialties.</p>
                                <div class="doctor-stats">
                                    <div><strong>15 - 30 Min</strong><br>Wait Time</div>
                                    <div><strong>15 Years</strong><br>Experience</div>
                                    <div><strong>98% (559)</strong><br>Satisfied Patients</div>
                                </div>
                            </div>
                            <div class="doctor-actions">
                                <a href="video-consultation.html?doctor=basem-elfeki" class="btn-outline">Video Consultation</a>
                                <a href="book-appointment-dr-basem-elfeki.html" class="btn-primary">Book Appointment</a>
                            </div>
                        </div>
                    </div>

                    <div class="doctor-card wow fadeInUp" data-wow-delay="0.4s">
                        <div class="doctor-info">
                            <img src="{{ asset('public') }}/images/dr2.png" alt="Dr. Bisher Alshanawani" class="doctor-photo">
                            <div class="doctor-details">
                                <h2>Dr. Bisher Alshanawani <span class="badge">PLATINUM DOCTOR</span></h2>
                                <p>Plastic Surgery and Body Contouring Consultant</p>
                                <p>Consultant of plastic surgery and body sculpting in the Kingdom of Saudi Arabia – Riyadh, Saudi Arabia. Fellow of the University of Toronto, Canada. Fellow of the American College of Surgeons. Saudi & Jordanian fellowship. Member of the American Aesthetic Society, and a founding member of the Saudi Society of Aesthetic Surgical Care.</p>
                                <div class="doctor-stats">
                                    <div><strong>15 - 30 Min</strong><br>Wait Time</div>
                                    <div><strong>12 Years</strong><br>Experience</div>
                                    <div><strong>97% (512)</strong><br>Satisfied Patients</div>
                                </div>
                            </div>
                            <div class="doctor-actions">
                                <a href="video-consultation.html?doctor=bisher-alshanawani" class="btn-outline">Video Consultation</a>
                                <a href="book-appointment-dr-bisher-alshanawani.html" class="btn-primary">Book Appointment</a>
                            </div>
                        </div>
                    </div>

                    <div class="doctor-card wow fadeInUp" data-wow-delay="0.6s">
                        <div class="doctor-info">
                            <img src="{{ asset('public') }}/images/dr3.png" alt="Dr. Mona Alkhotani" class="doctor-photo">
                            <div class="doctor-details">
                                <h2>Dr. Mona Alkhotani <span class="badge">PLATINUM DOCTOR</span></h2>
                                <p>Plastic and Reconstructive Surgery Consultant</p>
                                <p>Saudi and Jordanian boards. French fellowship in breast plastic surgery, burn surgery, and microsurgery.</p>
                                <div class="doctor-stats">
                                    <div><strong>15 - 30 Min</strong><br>Wait Time</div>
                                    <div><strong>10 Years</strong><br>Experience</div>
                                    <div><strong>96% (487)</strong><br>Satisfied Patients</div>
                                </div>
                            </div>
                            <div class="doctor-actions">
                                <a href="video-consultation.html?doctor=mona-alkhotani" class="btn-outline">Video Consultation</a>
                                <a href="book-appointment-dr-mona-alkhotani.html" class="btn-primary">Book Appointment</a>
                            </div>
                        </div>
                    </div>

                    <div class="doctor-card wow fadeInUp" data-wow-delay="0.8s">
                        <div class="doctor-info">
                            <img src="{{ asset('public') }}/images/dr4.png" alt="Dr. Rawad Satli" class="doctor-photo">
                            <div class="doctor-details">
                                <h2>Dr. Rawad Satli <span class="badge">PLATINUM DOCTOR</span></h2>
                                <p>Consultant in Plastic Surgery and Contouring</p>
                                <p>Member of the British Fellowship. Specializes in autologous fat grafting, liposuction, and gynecomastia surgery.</p>
                                <div class="doctor-stats">
                                    <div><strong>15 - 30 Min</strong><br>Wait Time</div>
                                    <div><strong>8 Years</strong><br>Experience</div>
                                    <div><strong>95% (463)</strong><br>Satisfied Patients</div>
                                </div>
                            </div>
                            <div class="doctor-actions">
                                <a href="video-consultation.html?doctor=rawad-satli" class="btn-outline">Video Consultation</a>
                                <a href="book-appointment-dr-rawad-satli.html" class="btn-primary">Book Appointment</a>
                            </div>
                        </div>
                    </div>

                    <div class="doctor-card wow fadeInUp" data-wow-delay="1.0s">
                        <div class="doctor-info">
                            <img src="{{ asset('public') }}/images/dr5.png" alt="Dr. Saud Al-Qubaa" class="doctor-photo">
                            <div class="doctor-details">
                                <h2>Dr. Saud Al-Qubaa <span class="badge">PLATINUM DOCTOR</span></h2>
                                <p>Plastic and Reconstructive Surgery Consultant</p>
                                <p>Certified by the Saudi Board in Plastic and Reconstructive Surgery. American fellowship in plastic surgery, hand surgery, and microsurgery.</p>
                                <div class="doctor-stats">
                                    <div><strong>15 - 30 Min</strong><br>Wait Time</div>
                                    <div><strong>10 Years</strong><br>Experience</div>
                                    <div><strong>96% (490)</strong><br>Satisfied Patients</div>
                                </div>
                            </div>
                            <div class="doctor-actions">
                                <a href="video-consultation.html?doctor=saud-al-qubaa" class="btn-outline">Video Consultation</a>
                                <a href="book-appointment-dr-saud-al-qubaa.html" class="btn-primary">Book Appointment</a>
                            </div>
                        </div>
                    </div>

                    <div class="doctor-card wow fadeInUp" data-wow-delay="1.2s">
                        <div class="doctor-info">
                            <img src="{{ asset('public') }}/images/dr6.png" alt="Dr. Sarah Al-Aboud" class="doctor-photo">
                            <div class="doctor-details">
                                <h2>Dr. Sarah Al-Aboud <span class="badge">PLATINUM DOCTOR</span></h2>
                                <p>Dermatologist, Laser, and Cosmetic Injection Specialist</p>
                                <p>Specializes in dermatology, laser treatments, and cosmetic injections for skin rejuvenation and enhancement.</p>
                                <div class="doctor-stats">
                                    <div><strong>15 - 30 Min</strong><br>Wait Time</div>
                                    <div><strong>7 Years</strong><br>Experience</div>
                                    <div><strong>94% (432)</strong><br>Satisfied Patients</div>
                                </div>
                            </div>
                            <div class="doctor-actions">
                                <a href="video-consultation.html?doctor=sarah-al-aboud" class="btn-outline">Video Consultation</a>
                                <a href="book-appointment-dr-sarah-al-aboud.html" class="btn-primary">Book Appointment</a>
                            </div>
                        </div>
                    </div>

                    <div class="doctor-card wow fadeInUp" data-wow-delay="1.4s">
                        <div class="doctor-info">
                            <img src="{{ asset('public') }}/images/dr7.png" alt="Dr. Ahmed Kharoub" class="doctor-photo">
                            <div class="doctor-details">
                                <h2>Dr. Ahmed Kharoub <span class="badge">PLATINUM DOCTOR</span></h2>
                                <p>Head and Neck Surgery Consultant</p>
                                <p>Specializes in rhinoplasty, face and neck lifts, cosmetic injections (filler, Botox), thread lifts, jaw surgery, ear beautification, and neck contouring with Vaser.</p>
                                <div class="doctor-stats">
                                    <div><strong>15 - 30 Min</strong><br>Wait Time</div>
                                    <div><strong>9 Years</strong><br>Experience</div>
                                    <div><strong>95% (475)</strong><br>Satisfied Patients</div>
                                </div>
                            </div>
                            <div class="doctor-actions">
                                <a href="video-consultation.html?doctor=ahmed-kharoub" class="btn-outline">Video Consultation</a>
                                <a href="book-appointment-dr-ahmed-kharoub.html" class="btn-primary">Book Appointment</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </main>
    @endsection
