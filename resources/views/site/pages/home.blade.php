@extends('site.layouts.main') @section('page')
    <main class="main">
        <!-- Hero Section -->
        <section id="hero" class="hero section">
            <div id="hero-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="5000">
                <div class="carousel-item active">
                    <img src="{{ asset('site/assets/img/hero-carousel/hero-carousel-1.jpg') }}" alt="" />
                    <div class="container">
                        <h2>Welcome to Health Care</h2>
                        <p>
                            We are dedicated to delivering compassionate,
                            high-quality healthcare services to every patient. Our
                            team of experienced professionals is here to support
                            your well-being through personalized care, modern
                            facilities, and trusted medical expertise.
                        </p>
                        <a href="#about" class="btn-get-started">Read More</a>
                    </div>
                </div>
                <!-- End Carousel Item -->

                <div class="carousel-item">
                    <img src="{{ asset('site/assets/img/hero-carousel/hero-carousel-2.jpg') }}" alt="" />
                    <div class="container">
                        <h2>Your Health, Our Priority.</h2>
                        <p>
                            From routine checkups to advanced treatments, we are
                            committed to delivering trusted, personalized care with
                            compassion. Our team of skilled professionals ensures
                            your comfort, safety, and wellness every step of the
                            way.
                        </p>
                        <a href="#about" class="btn-get-started">Read More</a>
                    </div>
                </div>
                <!-- End Carousel Item -->

                <div class="carousel-item">
                    <img src="{{ asset('site/assets/img/hero-carousel/hero-carousel-3.jpg') }}" alt="" />
                    <div class="container">
                        <h2>Compassionate Care. Advanced Medicine.</h2>
                        <p>
                            At our hospital, we are committed to providing
                            exceptional healthcare with empathy, integrity, and
                            innovation. Whether you're seeking expert treatment,
                            preventive care, or support through recovery, we're here
                            for you — every step of the way.
                        </p>
                        <a href="#about" class="btn-get-started">Read More</a>
                    </div>
                </div>
                <!-- End Carousel Item -->

                <a class="carousel-control-prev" href="#hero-carousel" role="button" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
                </a>

                <a class="carousel-control-next" href="#hero-carousel" role="button" data-bs-slide="next">
                    <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
                </a>

                <ol class="carousel-indicators"></ol>
            </div>
        </section>
        <!-- /Hero Section -->

        <!-- Featured Services Section -->
        <section id="featured-services" class="featured-services section">
            <div class="container">
                <div class="row gy-4">
                    <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="100">
                        <div class="service-item position-relative">
                            <div class="icon">
                                <i class="fas fa-heartbeat icon"></i>
                            </div>
                            <h4>
                                <a href="" class="stretched-link">Lorem Ipsum</a>
                            </h4>
                            <p>
                                Voluptatum deleniti atque corrupti quos dolores et
                                quas molestias excepturi
                            </p>
                        </div>
                    </div>
                    <!-- End Service Item -->

                    <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="200">
                        <div class="service-item position-relative">
                            <div class="icon">
                                <i class="fas fa-pills icon"></i>
                            </div>
                            <h4>
                                <a href="" class="stretched-link">Sed ut perspici</a>
                            </h4>
                            <p>
                                Duis aute irure dolor in reprehenderit in voluptate
                                velit esse cillum dolore
                            </p>
                        </div>
                    </div>
                    <!-- End Service Item -->

                    <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="300">
                        <div class="service-item position-relative">
                            <div class="icon">
                                <i class="fas fa-thermometer icon"></i>
                            </div>
                            <h4>
                                <a href="" class="stretched-link">Magni Dolores</a>
                            </h4>
                            <p>
                                Excepteur sint occaecat cupidatat non proident, sunt
                                in culpa qui officia
                            </p>
                        </div>
                    </div>
                    <!-- End Service Item -->

                    <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="400">
                        <div class="service-item position-relative">
                            <div class="icon"><i class="fas fa-dna icon"></i></div>
                            <h4><a href="" class="stretched-link">Nemo Enim</a></h4>
                            <p>
                                At vero eos et accusamus et iusto odio dignissimos
                                ducimus qui blanditiis
                            </p>
                        </div>
                    </div>
                    <!-- End Service Item -->
                </div>
            </div>
        </section>
        <!-- /Featured Services Section -->

        <!-- Call To Action Section -->
        <section id="call-to-action" class="call-to-action section accent-background">
            <div class="container">
                <div class="row justify-content-center" data-aos="zoom-in" data-aos-delay="100">
                    <div class="col-xl-10">
                        <div class="text-center">
                            <h3>In an emergency? Need help now?</h3>
                            <p>
                                Duis aute irure dolor in reprehenderit in voluptate
                                velit esse cillum dolore eu fugiat nulla pariatur.
                                Excepteur sint occaecat cupidatat non proident, sunt
                                in culpa qui officia deserunt mollit anim id est
                                laborum.
                            </p>
                            <a class="cta-btn" href="#appointment">Make an Appointment</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- /Call To Action Section -->

        <!-- About Section -->
        <section id="about" class="about section">
            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>About Us<br /></h2>
                <p>
                    Committed to Integrity, Compassion, and Trusted Medical
                    Excellence
                </p>
            </div>
            <!-- End Section Title -->

            <div class="container">
                <div class="row gy-4">
                    <div class="col-lg-6 position-relative align-self-start" data-aos="fade-up" data-aos-delay="100">
                        <img class="w-100" src="{{ asset('site/assets/img/about.jpg') }}" alt="" />
                        <a href="https://youtu.be/MWMcvNxuT4c?si=AKCMZl-DDs3uClPA" class="glightbox pulsating-play-btn"></a>
                    </div>
                    <div class="col-lg-6 content" data-aos="fade-up" data-aos-delay="200">
                        <h3>
                            Compassionate Care Rooted in Excellence and Dignity.
                            Trusted Care for Every Patient
                        </h3>
                        <p class="fst-italic">
                            At Health Care, we are dedicated to delivering
                            exceptional medical services with compassion, dignity,
                            and respect. Our mission is to enhance the health and
                            well-being of our community through advanced technology
                            and a committed team of healthcare professionals.
                        </p>
                        <ul>
                            <li>
                                <i class="bi bi-check2-all"></i>
                                <span>
                                    We prioritize your comfort and well-being,
                                    ensuring every service is tailored to meet your
                                    unique healthcare needs.
                                </span>
                            </li>
                            <li>
                                <i class="bi bi-check2-all"></i>
                                <span>
                                    Our dedicated medical professionals are
                                    committed to providing care with empathy,
                                    respect, and clinical excellence.
                                </span>
                            </li>
                            <li>
                                <i class="bi bi-check2-all"></i>
                                <span>
                                    From diagnosis to recovery, we offer a wide
                                    range of services supported by state-of-the-art
                                    technology to ensure the highest standard of
                                    care.
                                </span>
                            </li>
                        </ul>
                        <p>
                            Our team of skilled doctors, nurses, and support staff
                            work together to deliver the best possible outcomes for
                            our patients. We believe everyone deserves access to
                            quality care and proudly offer a wide range of services
                            to meet the diverse needs of individuals and families.
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <!-- /About Section -->

        <!-- Stats Section -->
        <section id="stats" class="stats section">
            <div class="container" data-aos="fade-up" data-aos-delay="100">
                <div class="row gy-4">
                    <div class="col-lg-3 col-md-6">
                        <div class="stats-item d-flex align-items-center w-100 h-100">
                            <i class="fas fa-user-md flex-shrink-0"></i>
                            <div>
                                <span data-purecounter-start="0" data-purecounter-end="{{ $doctors->count() }}"
                                    data-purecounter-duration="1" class="purecounter"></span>
                                <p>Doctors</p>
                            </div>
                        </div>
                    </div>
                    <!-- End Stats Item -->

                    <div class="col-lg-3 col-md-6">
                        <div class="stats-item d-flex align-items-center w-100 h-100">
                            <i class="far fa-hospital flex-shrink-0"></i>
                            <div>
                                <span data-purecounter-start="0" data-purecounter-end="{{ $departments->count() }}"
                                    data-purecounter-duration="1" class="purecounter"></span>
                                <p>Departments</p>
                            </div>
                        </div>
                    </div>
                    <!-- End Stats Item -->

                    <div class="col-lg-3 col-md-6">
                        <div class="stats-item d-flex align-items-center w-100 h-100">
                            <i class="fas fa-flask flex-shrink-0"></i>
                            <div>
                                <span data-purecounter-start="0" data-purecounter-end="8" data-purecounter-duration="1"
                                    class="purecounter"></span>
                                <p>Research Labs</p>
                            </div>
                        </div>
                    </div>
                    <!-- End Stats Item -->

                    <div class="col-lg-3 col-md-6">
                        <div class="stats-item d-flex align-items-center w-100 h-100">
                            <i class="fas fa-award flex-shrink-0"></i>
                            <div>
                                <span data-purecounter-start="0" data-purecounter-end="150" data-purecounter-duration="1"
                                    class="purecounter"></span>
                                <p>Awards</p>
                            </div>
                        </div>
                    </div>
                    <!-- End Stats Item -->
                </div>
            </div>
        </section>
        <!-- /Stats Section -->

        <!-- Features Section -->
        <section id="features" class="features section">
            <div class="container">
                <div class="row justify-content-around gy-4">
                    <div class="features-image col-lg-6" data-aos="fade-up" data-aos-delay="100">
                        <img src="{{ asset('site/assets/img/features.jpg') }}" alt="" />
                    </div>

                    <div class="col-lg-5 d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="200">
                        <h3>
                            Dedicated to Meeting Every Healthcare Need with
                            Excellence and Integrity
                        </h3>
                        <p>
                            We provide care with compassion and precision. Our team
                            is dedicated and trustworthy. No concern is too small,
                            and every patient deserves full attention. We strive to
                            deliver comfort, healing, and hope every step of the
                            way.
                        </p>

                        <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="300">
                            <i class="fa-solid fa-hand-holding-medical flex-shrink-0"></i>
                            <div>
                                <h4>
                                    <a href="" class="stretched-link">Lorem Ipsum</a>
                                </h4>
                                <p>
                                    Committed to alleviating pain and discomfort, we
                                    provide compassionate care while respecting
                                    every patient’s dignity and needs.
                                </p>
                            </div>
                        </div>
                        <!-- End Icon Box -->

                        <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="400">
                            <i class="fa-solid fa-suitcase-medical flex-shrink-0"></i>
                            <div>
                                <h4>
                                    <a href="" class="stretched-link">Nemo Enim</a>
                                </h4>
                                <p>
                                    We stand firm in our commitment to justice and
                                    dignity, delivering compassionate care without
                                    compromise.
                                </p>
                            </div>
                        </div>
                        <!-- End Icon Box -->

                        <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="500">
                            <i class="fa-solid fa-staff-snake flex-shrink-0"></i>
                            <div>
                                <h4>
                                    <a href="" class="stretched-link">Dine Pad</a>
                                </h4>
                                <p>
                                    We ensure exceptional care with honesty and
                                    integrity. Our team goes above and beyond to
                                    meet every patient’s needs.
                                </p>
                            </div>
                        </div>
                        <!-- End Icon Box -->

                        <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="600">
                            <i class="fa-solid fa-lungs flex-shrink-0"></i>
                            <div>
                                <h4>
                                    <a href="" class="stretched-link">Tride clov</a>
                                </h4>
                                <p>
                                    We take pride in delivering reliable care with
                                    dedication. Our team is committed to addressing
                                    all patient needs with respect and excellence.
                                </p>
                            </div>
                        </div>
                        <!-- End Icon Box -->
                    </div>
                </div>
            </div>
        </section>
        <!-- /Features Section -->

        <!-- Services Section -->
        <section id="services" class="services section">
            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>Services</h2>
                <p>
                    Necessitatibus eius consequatur ex aliquid fuga eum quidem sint
                    consectetur velit
                </p>
            </div>
            <!-- End Section Title -->

            <div class="container">
                <div class="row gy-4">
                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                        <div class="service-item position-relative">
                            <div class="icon">
                                <i class="fas fa-heartbeat"></i>
                            </div>
                            <a href="#" class="stretched-link">
                                <h3>Nesciunt Mete</h3>
                            </a>
                            <p>
                                Provident nihil minus qui consequatur non omnis
                                maiores. Eos accusantium minus dolores iure
                                perferendis tempore et consequatur.
                            </p>
                        </div>
                    </div>
                    <!-- End Service Item -->

                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                        <div class="service-item position-relative">
                            <div class="icon">
                                <i class="fas fa-pills"></i>
                            </div>
                            <a href="#" class="stretched-link">
                                <h3>Eosle Commodi</h3>
                            </a>
                            <p>
                                Ut autem aut autem non a. Sint sint sit facilis nam
                                iusto sint. Libero corrupti neque eum hic non ut
                                nesciunt dolorem.
                            </p>
                        </div>
                    </div>
                    <!-- End Service Item -->

                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                        <div class="service-item position-relative">
                            <div class="icon">
                                <i class="fas fa-hospital-user"></i>
                            </div>
                            <a href="#" class="stretched-link">
                                <h3>Ledo Markt</h3>
                            </a>
                            <p>
                                Ut excepturi voluptatem nisi sed. Quidem fuga
                                consequatur. Minus ea aut. Vel qui id voluptas
                                adipisci eos earum corrupti.
                            </p>
                        </div>
                    </div>
                    <!-- End Service Item -->

                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
                        <div class="service-item position-relative">
                            <div class="icon">
                                <i class="fas fa-dna"></i>
                            </div>
                            <a href="#" class="stretched-link">
                                <h3>Asperiores Commodit</h3>
                            </a>
                            <p>
                                Non et temporibus minus omnis sed dolor esse
                                consequatur. Cupiditate sed error ea fuga sit
                                provident adipisci neque.
                            </p>
                            <a href="#" class="stretched-link"></a>
                        </div>
                    </div>
                    <!-- End Service Item -->

                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="500">
                        <div class="service-item position-relative">
                            <div class="icon">
                                <i class="fas fa-wheelchair"></i>
                            </div>
                            <a href="#" class="stretched-link">
                                <h3>Velit Doloremque</h3>
                            </a>
                            <p>
                                Cumque et suscipit saepe. Est maiores autem enim
                                facilis ut aut ipsam corporis aut. Sed animi at
                                autem alias eius labore.
                            </p>
                            <a href="#" class="stretched-link"></a>
                        </div>
                    </div>
                    <!-- End Service Item -->

                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="600">
                        <div class="service-item position-relative">
                            <div class="icon">
                                <i class="fas fa-notes-medical"></i>
                            </div>
                            <a href="#" class="stretched-link">
                                <h3>Dolori Architecto</h3>
                            </a>
                            <p>
                                Hic molestias ea quibusdam eos. Fugiat enim
                                doloremque aut neque non et debitis iure. Corrupti
                                recusandae ducimus enim.
                            </p>
                            <a href="#" class="stretched-link"></a>
                        </div>
                    </div>
                    <!-- End Service Item -->
                </div>
            </div>
        </section>
        <!-- /Services Section -->

        <!-- Appointment Section -->
        <section id="appointment" class="appointment section light-background">
            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>MAKE AN APPOINTMENT</h2>
                <p>
                    Necessitatibus eius consequatur ex aliquid fuga eum quidem sint
                    consectetur velit
                </p>
            </div>
            <!-- End Section Title -->

            <div class="container" data-aos="fade-up" data-aos-delay="100">
                <form action="{{ route('site.appointments.store') }}" method="POST">
                    <!-- CSRF token for Laravel -->
                    <input type="hidden" name="_token" value="{{ csrf_token() }}" />

                    <!-- PATIENT SECTION -->
                    <h5 class="mb-3 text-uppercase">Patient Information</h5>
                    <div class="row g-3 mb-4">
                        <div class="col-md-4">
                            <label class="form-label">Full Name</label>
                            <input id="name" type="text" name="name" class="form-control" placeholder="Your full name"
                                required />
                        </div>

                        <div class="col-md-4">
                            <label class="form-label">Mobile</label>
                            <input id="mobile" type="text" name="mobile" class="form-control" required
                                placeholder="+08815xxxxxxxx" />
                        </div>

                        <div class="col-md-4">
                            <label class="form-label">Mobile Ext (optional)</label>
                            <input id="mob_ext" type="number" name="mob_ext" class="form-control" placeholder="Optional" />
                        </div>

                        <div class="col-md-4">
                            <label class="form-label">Date of Birth</label>
                            <input id="dob" type="date" name="dob" class="form-control" required />
                        </div>

                        <div class="col-md-4">
                            <label class="form-label">Gender</label> <br />
                            <input type="radio" name="gender" value="0" /> Male
                            <input type="radio" name="gender" value="1" /> Female
                            <input type="radio" name="gender" value="2" /> Others
                        </div>

                        <div class="col-md-4">
                            <label class="form-label">Profession</label>
                            <input id="profession" type="text" name="profession" class="form-control"
                                placeholder="e.g., student, pilot" />
                        </div>
                    </div>

                    <!-- APPOINTMENT SECTION -->
                    <h5 class="text-uppercase mb-3 mt-5">
                        Appointment Information
                    </h5>
                    <div class="row g-3 mb-4">
                        <div class="col-md-6">
                            <label class="form-label">Doctor</label>
                            <select name="doctor_id" class="form-select" required>
                                <option value="">-- Select Doctor --</option>
                                @foreach ($doctors as $doctor)
                                    <option value="{{ $doctor->id }}">
                                        {{ $doctor->name }}
                                    </option>
                                @endforeach
                            </select>
                        </div>

                        <div class="col-md-6">
                            <label class="form-label">Appointment Date & Time</label>
                            <input type="datetime-local" name="appointment_at" class="form-control" required />
                        </div>

                        <div class="col-12">
                            <label class="form-label">Chief Complaint (CC)</label>
                            <textarea name="cc" class="form-control" rows="3"
                                placeholder="e.g., chest pain, fever"></textarea>
                        </div>
                    </div>

                    <!-- SUBMIT -->
                    <div class="d-flex align-items-center justify-content-center">
                        <button style="background: #3dbabf" type="submit" class="btn btn-info text-light w-25">
                            Save Appointment
                        </button>
                    </div>
                </form>
            </div>
        </section>
        <!-- /Appointment Section -->

        <!-- Tabs Section -->
        <section id="departments" id="tabs" class="tabs section">
            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>Departments</h2>
                <p>
                    Necessitatibus eius consequatur ex aliquid fuga eum quidem sint
                    consectetur velit
                </p>
            </div>
            <!-- End Section Title -->

            <div class="container" data-aos="fade-up" data-aos-delay="100">
                <div class="row">
                    <div class="col-lg-3">
                        <ul class="nav nav-tabs flex-column">
                            <li class="nav-item">
                                <a class="nav-link active show" data-bs-toggle="tab" href="#tabs-tab-1">Cardiology</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-bs-toggle="tab" href="#tabs-tab-2">Neurology</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-bs-toggle="tab" href="#tabs-tab-3">Hepatology</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-bs-toggle="tab" href="#tabs-tab-4">Pediatrics</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-bs-toggle="tab" href="#tabs-tab-5">Ophthalmologists</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-9 mt-4 mt-lg-0">
                        <div class="tab-content">
                            <div class="tab-pane active show" id="tabs-tab-1">
                                <div class="row">
                                    <div class="col-lg-7 details order-2 order-lg-1">
                                        <h3>Cardiology</h3>
                                        <p class="fst-italic">
                                            Cardiology care that listens, treats,
                                            and leads with precision—heart health is
                                            our highest mission at every step of
                                            your journey.
                                        </p>
                                        <p>
                                            Our cardiology team is dedicated to
                                            advanced heart care. We diagnose and
                                            treat a wide range of cardiovascular
                                            conditions with precision and
                                            compassion. From early detection to
                                            complex procedures, we tailor every step
                                            to your needs. We are committed to
                                            improving outcomes and helping you live
                                            a stronger, healthier life.
                                        </p>
                                    </div>
                                    <div class="col-lg-5 text-center order-1 order-lg-2">
                                        <img src="{{ asset('site/assets/img/departments-1.jpg') }}" alt=""
                                            class="img-fluid" />
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="tabs-tab-2">
                                <div class="row">
                                    <div class="col-lg-7 details order-2 order-lg-1">
                                        <h3>Neurology</h3>
                                        <p class="fst-italic">
                                            Neurology care that understands the mind
                                            and body—focused expertise for every
                                            condition, from migraines to complex
                                            neurological disorders. We guide every
                                            patient with clarity, precision, and
                                            compassion.
                                        </p>
                                        <p>
                                            We provide expert neurological care for
                                            a wide range of conditions, including
                                            epilepsy, stroke, Parkinson’s disease,
                                            and chronic migraines. Our team uses
                                            advanced diagnostics and treatment to
                                            improve quality of life. Personalized
                                            care plans, modern technology, and a
                                            patient-first approach define every step
                                            of your journey to better neurological
                                            health.
                                        </p>
                                    </div>
                                    <div class="col-lg-5 text-center order-1 order-lg-2">
                                        <img src="{{ asset('site/assets/img/departments-2.jpg') }}" alt=""
                                            class="img-fluid" />
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="tabs-tab-3">
                                <div class="row">
                                    <div class="col-lg-7 details order-2 order-lg-1">
                                        <h3>Hepatology</h3>
                                        <p class="fst-italic">
                                            Hepatology care that protects and
                                            restores liver health—expert solutions
                                            for conditions from hepatitis to
                                            advanced liver disease. We support every
                                            patient with knowledge, precision, and
                                            ongoing care.
                                        </p>
                                        <p>
                                            We diagnose and treat a wide range of
                                            liver conditions with advanced tools and
                                            a personalized approach. Our team works
                                            closely with patients to manage
                                            symptoms, slow disease progression, and
                                            improve quality of life. From early
                                            detection to long-term management, your
                                            liver health is in expert hands.
                                        </p>
                                    </div>
                                    <div class="col-lg-5 text-center order-1 order-lg-2">
                                        <img src="{{ asset('site/assets/img/departments-3.jpg') }}" alt=""
                                            class="img-fluid" />
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="tabs-tab-4">
                                <div class="row">
                                    <div class="col-lg-7 details order-2 order-lg-1">
                                        <h3>Pediatrics</h3>
                                        <p class="fst-italic">
                                            Pediatric care centered on growth,
                                            health, and compassion—expert support
                                            for children at every stage, from
                                            infancy through adolescence. We care for
                                            every child with empathy, precision, and
                                            a family-first approach.
                                        </p>
                                        <p>
                                            We offer a full range of pediatric
                                            services, from routine checkups and
                                            immunizations to managing chronic
                                            conditions and developmental concerns.
                                            Our team of specialists is dedicated to
                                            nurturing every child's health and
                                            well-being. With a focus on comfort and
                                            trust, we partner with families to
                                            provide expert care in every moment.
                                        </p>
                                    </div>
                                    <div class="col-lg-5 text-center order-1 order-lg-2">
                                        <img src="{{ asset('site/assets/img/departments-4.jpg') }}" alt=""
                                            class="img-fluid" />
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="tabs-tab-5">
                                <div class="row">
                                    <div class="col-lg-7 details order-2 order-lg-1">
                                        <h3>Ophthalmologists</h3>
                                        <p class="fst-italic">
                                            Ophthalmology care focused on vision,
                                            clarity, and precision—expert treatment
                                            for everything from routine eye exams to
                                            complex eye conditions. We help every
                                            patient see the world more clearly and
                                            confidently.
                                        </p>
                                        <p>
                                            We provide comprehensive eye care
                                            services, including diagnostics, vision
                                            correction, and surgical treatments for
                                            conditions like cataracts, glaucoma, and
                                            retinal disorders. Our specialists use
                                            advanced technology and a
                                            patient-centered approach to protect and
                                            improve your vision at every stage of
                                            life.
                                        </p>
                                    </div>
                                    <div class="col-lg-5 text-center order-1 order-lg-2">
                                        <img src="{{ asset('site/assets/img/departments-5.jpg') }}" alt=""
                                            class="img-fluid" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- /Tabs Section -->

        <!-- Testimonials Section -->
        <section id="testimonials" class="testimonials section">
            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>Testimonials</h2>
                <p>
                    Necessitatibus eius consequatur ex aliquid fuga eum quidem sint
                    consectetur velit
                </p>
            </div>
            <!-- End Section Title -->

            <div class="container" data-aos="fade-up" data-aos-delay="100">
                <div class="swiper init-swiper" data-speed="600" data-delay="5000"
                    data-breakpoints='{ "320": { "slidesPerView": 1, "spaceBetween": 40 }, "1200": { "slidesPerView": 3, "spaceBetween": 40 } }'>
                    <script type="application/json" class="swiper-config">
                            {
                                "loop": true,
                                "speed": 600,
                                "autoplay": {
                                    "delay": 5000
                                },
                                "slidesPerView": "auto",
                                "pagination": {
                                    "el": ".swiper-pagination",
                                    "type": "bullets",
                                    "clickable": true
                                },
                                "breakpoints": {
                                    "320": {
                                        "slidesPerView": 1,
                                        "spaceBetween": 40
                                    },
                                    "1200": {
                                        "slidesPerView": 3,
                                        "spaceBetween": 20
                                    }
                                }
                            }
                        </script>
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <p>
                                    <i class="bi bi-quote quote-icon-left"></i>
                                    <span>
                                        Proin iaculis purus consequat sem cure digni
                                        ssim donec porttitora entum suscipit
                                        rhoncus. Accusantium quam, ultricies eget
                                        id, aliquam eget nibh et. Maecen aliquam,
                                        risus at semper.
                                    </span>
                                    <i class="bi bi-quote quote-icon-right"></i>
                                </p>
                                <img src="{{ asset('site/assets/img/testimonials/testimonials-1.jpg') }}"
                                    class="testimonial-img" alt="" />
                                <h3>Saul Goodman</h3>
                                <h4>Ceo &amp; Founder</h4>
                            </div>
                        </div>
                        <!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <p>
                                    <i class="bi bi-quote quote-icon-left"></i>
                                    <span>Export tempor illum tamen malis malis eram
                                        quae irure esse labore quem cillum quid
                                        malis quorum velit fore eram velit sunt
                                        aliqua noster fugiat irure amet legam anim
                                        culpa.</span>
                                    <i class="bi bi-quote quote-icon-right"></i>
                                </p>
                                <img src="{{ asset('site/assets/img/testimonials/testimonials-2.jpg') }}"
                                    class="testimonial-img" alt="" />
                                <h3>Sara Wilsson</h3>
                                <h4>Designer</h4>
                            </div>
                        </div>
                        <!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <p>
                                    <i class="bi bi-quote quote-icon-left"></i>
                                    <span>Enim nisi quem export duis labore cillum
                                        quae magna enim sint quorum nulla quem
                                        veniam duis minim tempor labore quem eram
                                        duis noster aute amet eram fore quis sint
                                        minim.</span>
                                    <i class="bi bi-quote quote-icon-right"></i>
                                </p>
                                <img src="{{ asset('site/assets/img/testimonials/testimonials-3.jpg') }}"
                                    class="testimonial-img" alt="" />
                                <h3>Jena Karlis</h3>
                                <h4>Store Owner</h4>
                            </div>
                        </div>
                        <!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <p>
                                    <i class="bi bi-quote quote-icon-left"></i>
                                    <span>Fugiat enim eram quae cillum dolore dolor
                                        amet nulla culpa multos export minim fugiat
                                        dolor enim duis veniam ipsum anim magna sunt
                                        elit fore quem dolore labore illum
                                        veniam.</span>
                                    <i class="bi bi-quote quote-icon-right"></i>
                                </p>
                                <img src="{{ asset('site/assets/img/testimonials/testimonials-4.jpg') }}"
                                    class="testimonial-img" alt="" />
                                <h3>Matt Brandon</h3>
                                <h4>Freelancer</h4>
                            </div>
                        </div>
                        <!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <p>
                                    <i class="bi bi-quote quote-icon-left"></i>
                                    <span>Quis quorum aliqua sint quem legam fore
                                        sunt eram irure aliqua veniam tempor noster
                                        veniam sunt culpa nulla illum cillum fugiat
                                        legam esse veniam culpa fore nisi cillum
                                        quid.</span>
                                    <i class="bi bi-quote quote-icon-right"></i>
                                </p>
                                <img src="{{ asset('site/assets/img/testimonials/testimonials-5.jpg') }}"
                                    class="testimonial-img" alt="" />
                                <h3>John Larson</h3>
                                <h4>Entrepreneur</h4>
                            </div>
                        </div>
                        <!-- End testimonial item -->
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </section>
        <!-- /Testimonials Section -->

        {{-- dublicte doctor section --}}
        <section id="doctors" class="doctors section light-background">
            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>Doctors</h2>
                <p>
                    Necessitatibus eius consequatur ex aliquid fuga eum quidem sint
                    consectetur velit
                </p>
            </div>
            <!-- End Section Title -->

            <div class="container" data-aos="fade-up" data-aos-delay="100">
                <div class="swiper init-swiper" data-speed="600" data-delay="5000"
                    data-breakpoints='{ "320": { "slidesPerView": 1, "spaceBetween": 40 }, "1200": { "slidesPerView": 3, "spaceBetween": 40 } }'>
                    <script type="application/json" class="swiper-config">
                            {
                                "loop": true,
                                "speed": 600,
                                "autoplay": {
                                    "delay": 5000
                                },
                                "slidesPerView": "auto",

                                "breakpoints": {
                                    "320": {
                                        "slidesPerView": 1,
                                        "spaceBetween": 40
                                    },
                                    "1200": {
                                        "slidesPerView": 3,
                                        "spaceBetween": 20
                                    }
                                }
                            }
                        </script>
                    <div class="swiper-wrapper">
                        @foreach ($doctors as $item)
                            <div class="swiper-slide">
                                <div class="d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
                                    <div class="team-member">
                                        <div class="member-img">
                                            @if($item->photo)
                                                <img src="{{ asset('storage/' . $item->photo) }}" class="img-fluid"
                                                    alt="{{ $item->name }}" />
                                            @else
                                                <img src="{{ asset('site/assets/img/doctors/Image_not_available.png') }}"
                                                    class="img-fluid" alt="doctor" />
                                            @endif
                                            <div class="social">
                                                <a href=""><i class="bi bi-twitter-x"></i></a>
                                                <a href=""><i class="bi bi-facebook"></i></a>
                                                <a href=""><i class="bi bi-instagram"></i></a>
                                                <a href=""><i class="bi bi-linkedin"></i></a>
                                            </div>
                                        </div>
                                        <div class="member-info">
                                            <h4 class="text-capitalized">
                                                {{ $item->name }}
                                            </h4>
                                            <span>{{ $item->designation_name }}</span>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Team Member -->
                            </div>
                            <!-- End testimonial item -->
                        @endforeach
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </section>
        <!-- /dublicate doctor -->

        <!-- Doctors Section -->
        {{--
        <section id="doctors" class="doctors section light-background">
            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>Doctors</h2>
                <p>
                    Necessitatibus eius consequatur ex aliquid fuga eum quidem sint
                    consectetur velit
                </p>
            </div>
            <!-- End Section Title -->

            <div class="container">
                <div class="row gy-4">
                    @foreach ($doctors as $item)
                    <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
                        <div class="team-member">
                            <div class="member-img">
                                @if($item->photo)
                                <img src="{{ asset('storage/' . $item->photo) }}" class="img-fluid" alt="" />
                                @else
                                <img src="{{ asset('site/assets/img/doctors/doctors-1.jpg') }}" class="img-fluid" alt="" />
                                @endif
                                <div class="social">
                                    <a href=""><i class="bi bi-twitter-x"></i></a>
                                    <a href=""><i class="bi bi-facebook"></i></a>
                                    <a href=""><i class="bi bi-instagram"></i></a>
                                    <a href=""><i class="bi bi-linkedin"></i></a>
                                </div>
                            </div>
                            <div class="member-info">
                                <h4>Walter White</h4>
                                <span>Chief Medical Officer</span>
                            </div>
                        </div>
                    </div>
                    <!-- End Team Member -->
                    @endforeach
                </div>
            </div>
        </section>
        --}}
        <!-- /Doctors Section -->

        <!-- Gallery Section -->
        <section id="gallery" class="gallery section">
            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>Gallery</h2>
                <p>
                    Necessitatibus eius consequatur ex aliquid fuga eum quidem sint
                    consectetur velit
                </p>
            </div>
            <!-- End Section Title -->

            <div class="container" data-aos="fade-up" data-aos-delay="100">
                <div class="swiper init-swiper">
                    <script type="application/json" class="swiper-config">
                            {
                                "loop": true,
                                "speed": 600,
                                "autoplay": {
                                    "delay": 5000
                                },
                                "slidesPerView": "auto",
                                "centeredSlides": true,
                                "pagination": {
                                    "el": ".swiper-pagination",
                                    "type": "bullets",
                                    "clickable": true
                                },
                                "breakpoints": {
                                    "320": {
                                        "slidesPerView": 1,
                                        "spaceBetween": 0
                                    },
                                    "768": {
                                        "slidesPerView": 3,
                                        "spaceBetween": 20
                                    },
                                    "1200": {
                                        "slidesPerView": 5,
                                        "spaceBetween": 20
                                    }
                                }
                            }
                        </script>
                    <div class="swiper-wrapper align-items-center">
                        <div class="swiper-slide">
                            <a class="glightbox" data-gallery="images-gallery"
                                href="{{ asset('site/assets/img/gallery/gallery-1.jpg') }}">
                                <img src="{{ asset('site/assets/img/gallery/gallery-1.jpg') }}" class="img-fluid"
                                    alt="" /></a>
                        </div>
                        <div class="swiper-slide">
                            <a class="glightbox" data-gallery="images-gallery"
                                href="{{ asset('site/assets/img/gallery/gallery-2.jpg') }}">
                                <img src="{{ asset('site/assets/img/gallery/gallery-2.jpg') }}" class="img-fluid"
                                    alt="" /></a>
                        </div>
                        <div class="swiper-slide">
                            <a class="glightbox" data-gallery="images-gallery"
                                href="{{ asset('site/assets/img/gallery/gallery-3.jpg') }}">
                                <img src="{{ asset('site/assets/img/gallery/gallery-3.jpg') }}" class="img-fluid"
                                    alt="" /></a>
                        </div>
                        <div class="swiper-slide">
                            <a class="glightbox" data-gallery="images-gallery"
                                href="{{ asset('site/assets/img/gallery/gallery-4.jpg') }}">
                                <img src="{{ asset('site/assets/img/gallery/gallery-4.jpg') }}" class="img-fluid"
                                    alt="" /></a>
                        </div>
                        <div class="swiper-slide">
                            <a class="glightbox" data-gallery="images-gallery"
                                href="{{ asset('site/assets/img/gallery/gallery-5.jpg') }}">
                                <img src="{{ asset('site/assets/img/gallery/gallery-5.jpg') }}" class="img-fluid"
                                    alt="" /></a>
                        </div>
                        <div class="swiper-slide">
                            <a class="glightbox" data-gallery="images-gallery"
                                href="{{ asset('site/assets/img/gallery/gallery-6.jpg') }}">
                                <img src="{{ asset('site/assets/img/gallery/gallery-6.jpg') }}" class="img-fluid"
                                    alt="" /></a>
                        </div>
                        <div class="swiper-slide">
                            <a class="glightbox" data-gallery="images-gallery"
                                href="{{ asset('site/assets/img/gallery/gallery-7.jpg') }}">
                                <img src="{{ asset('site/assets/img/gallery/gallery-7.jpg') }}" class="img-fluid"
                                    alt="" /></a>
                        </div>
                        <div class="swiper-slide">
                            <a class="glightbox" data-gallery="images-gallery"
                                href="{{ asset('site/assets/img/gallery/gallery-8.jpg') }}">
                                <img src="{{ asset('site/assets/img/gallery/gallery-8.jpg') }}" class="img-fluid"
                                    alt="" /></a>
                        </div>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </section>
        <!-- /Gallery Section -->

        <!-- Pricing Section -->
        <section id="pricing" class="pricing section">
            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>Pricing</h2>
                <p>
                    Necessitatibus eius consequatur ex aliquid fuga eum quidem sint
                    consectetur velit
                </p>
            </div>
            <!-- End Section Title -->

            <div class="container">
                <div class="row gy-3">
                    <div class="col-xl-3 col-lg-6" data-aos="fade-up" data-aos-delay="100">
                        <div class="pricing-item">
                            <h3>Free</h3>
                            <h4><sup>$</sup>0<span> / month</span></h4>
                            <ul>
                                <li>Aida dere</li>
                                <li>Nec feugiat nisl</li>
                                <li>Nulla at volutpat dola</li>
                                <li class="na">Pharetra massa</li>
                                <li class="na">Massa ultricies mi</li>
                            </ul>
                            <div class="btn-wrap">
                                <a href="#" class="btn-buy">Buy Now</a>
                            </div>
                        </div>
                    </div>
                    <!-- End Pricing Item -->

                    <div class="col-xl-3 col-lg-6" data-aos="fade-up" data-aos-delay="200">
                        <div class="pricing-item featured">
                            <h3>Business</h3>
                            <h4><sup>$</sup>19<span> / month</span></h4>
                            <ul>
                                <li>Aida dere</li>
                                <li>Nec feugiat nisl</li>
                                <li>Nulla at volutpat dola</li>
                                <li>Pharetra massa</li>
                                <li class="na">Massa ultricies mi</li>
                            </ul>
                            <div class="btn-wrap">
                                <a href="#" class="btn-buy">Buy Now</a>
                            </div>
                        </div>
                    </div>
                    <!-- End Pricing Item -->

                    <div class="col-xl-3 col-lg-6" data-aos="fade-up" data-aos-delay="400">
                        <div class="pricing-item">
                            <h3>Developer</h3>
                            <h4><sup>$</sup>29<span> / month</span></h4>
                            <ul>
                                <li>Aida dere</li>
                                <li>Nec feugiat nisl</li>
                                <li>Nulla at volutpat dola</li>
                                <li>Pharetra massa</li>
                                <li>Massa ultricies mi</li>
                            </ul>
                            <div class="btn-wrap">
                                <a href="#" class="btn-buy">Buy Now</a>
                            </div>
                        </div>
                    </div>
                    <!-- End Pricing Item -->

                    <div class="col-xl-3 col-lg-6" data-aos="fade-up" data-aos-delay="400">
                        <div class="pricing-item">
                            <span class="advanced">Advanced</span>
                            <h3>Ultimate</h3>
                            <h4><sup>$</sup>49<span> / month</span></h4>
                            <ul>
                                <li>Aida dere</li>
                                <li>Nec feugiat nisl</li>
                                <li>Nulla at volutpat dola</li>
                                <li>Pharetra massa</li>
                                <li>Massa ultricies mi</li>
                            </ul>
                            <div class="btn-wrap">
                                <a href="#" class="btn-buy">Buy Now</a>
                            </div>
                        </div>
                    </div>
                    <!-- End Pricing Item -->
                </div>
            </div>
        </section>
        <!-- /Pricing Section -->

        <!-- Faq Section -->
        <section id="faq" class="faq section light-background">
            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>Frequently Asked Questions</h2>
                <p>
                    Necessitatibus eius consequatur ex aliquid fuga eum quidem sint
                    consectetur velit
                </p>
            </div>
            <!-- End Section Title -->

            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-10" data-aos="fade-up" data-aos-delay="100">
                        <div class="faq-container">
                            <div class="faq-item">
                                <h3>
                                    Do I need a referral to make an appointment?
                                </h3>
                                <div class="faq-content">
                                    <p>
                                        No. You can book an appointment directly
                                        with most of our specialists. However,
                                        certain departments may require a referral
                                        from a primary care physician. Please
                                        contact our front desk or check the
                                        department’s page for specific requirements.
                                    </p>
                                </div>
                                <i class="faq-toggle bi bi-chevron-right"></i>
                            </div>
                            <!-- End Faq item-->

                            <div class="faq-item">
                                <h3>What are the hospital's visiting hours?</h3>
                                <div class="faq-content">
                                    <p>
                                        Visiting hours are generally from 10:00 AM
                                        to 8:00 PM, but they may vary depending on
                                        the department or the patient's condition.
                                        Please check with the nursing staff for any
                                        restrictions, especially for ICU or
                                        maternity wards.
                                    </p>
                                </div>
                                <i class="faq-toggle bi bi-chevron-right"></i>
                            </div>
                            <!-- End Faq item-->
                            <div class="faq-item">
                                <h3>Who do I contact for general inquiries?</h3>
                                <div class="faq-content">
                                    <p>
                                        For general questions or to speak with a
                                        hospital representative, please call our
                                        main line at (+8801515648973) , or use the
                                        Contact Us form on our website.
                                    </p>
                                </div>
                                <i class="faq-toggle bi bi-chevron-right"></i>
                            </div>
                            <!-- End Faq item-->

                            <div class="faq-item">
                                <h3>How do I prepare for a scheduled surgery?</h3>
                                <div class="faq-content">
                                    <p>
                                        Once your surgery is scheduled, your
                                        healthcare provider will give you detailed
                                        pre-operative instructions. This may include
                                        fasting, medication adjustments, or lab
                                        tests. Follow all guidelines carefully and
                                        contact us if you have questions.
                                    </p>
                                </div>
                                <i class="faq-toggle bi bi-chevron-right"></i>
                            </div>
                            <!-- End Faq item-->
                            <div class="faq-item">
                                <h3>Do you offer multilingual support?</h3>
                                <div class="faq-content">
                                    <p>
                                        Yes. We provide interpretation services in
                                        multiple languages to ensure clear
                                        communication between patients and medical
                                        staff. Please inform us in advance if you
                                        require this service.
                                    </p>
                                </div>
                                <i class="faq-toggle bi bi-chevron-right"></i>
                            </div>
                            <!-- End Faq item-->

                            <div class="faq-item">
                                <h3>How can I pay my bill?</h3>
                                <div class="faq-content">
                                    <p>
                                        Bills can be paid online through our secure
                                        Patient Portal, in person at the hospital’s
                                        billing desk, or via phone. We also offer
                                        payment plans and financial assistance for
                                        eligible patients.
                                    </p>
                                </div>
                                <i class="faq-toggle bi bi-chevron-right"></i>
                            </div>
                            <!-- End Faq item-->
                            <div class="faq-item">
                                <h3>What should I bring for an inpatient stay?</h3>
                                <div class="faq-content">
                                    <p>
                                        Please bring a valid ID, insurance card, a
                                        list of current medications, and any comfort
                                        items you may need (e.g., pajamas,
                                        slippers). Leave valuables at home for
                                        safety.
                                    </p>
                                </div>
                                <i class="faq-toggle bi bi-chevron-right"></i>
                            </div>
                            <!-- End Faq item-->
                            <div class="faq-item">
                                <h3>What insurance plans do you accept?</h3>
                                <div class="faq-content">
                                    <p>
                                        We accept most major insurance providers.
                                        For a complete list or to verify your
                                        coverage, please contact our billing
                                        department or check the Insurance
                                        Information section on our website.
                                    </p>
                                </div>
                                <i class="faq-toggle bi bi-chevron-right"></i>
                            </div>
                            <!-- End Faq item-->

                            <div class="faq-item">
                                <h3>
                                    Where can I get a copy of my medical records?
                                </h3>
                                <div class="faq-content">
                                    <p>
                                        You can request your medical records by
                                        contacting our Health Information Management
                                        department. A written authorization may be
                                        required. Some records can also be accessed
                                        through our patient portal.
                                    </p>
                                </div>
                                <i class="faq-toggle bi bi-chevron-right"></i>
                            </div>
                            <!-- End Faq item-->

                            <div class="faq-item">
                                <h3>Is emergency care available 24/7?</h3>
                                <div class="faq-content">
                                    <p>
                                        Yes. Our Emergency Department is open 24
                                        hours a day, 7 days a week to provide
                                        immediate care for urgent medical needs.
                                    </p>
                                </div>
                                <i class="faq-toggle bi bi-chevron-right"></i>
                            </div>
                            <!-- End Faq item-->
                        </div>
                    </div>
                    <!-- End Faq Column-->
                </div>
            </div>
        </section>
        <!-- /Faq Section -->

        <!-- Contact Section -->
        <section id="contact" class="contact section">
            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>Contact</h2>
                <p>
                    Necessitatibus eius consequatur ex aliquid fuga eum quidem sint
                    consectetur velit
                </p>
            </div>
            <!-- End Section Title -->

            <div class="mb-5" data-aos="fade-up">
                <iframe style="border: 0; width: 100%; height: 370px"
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3650.0946452228184!2d90.36623311536445!3d23.768290284646342!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c12c391a6289%3A0x5603478832d15250!2sDhaka%20Health%20Care%20Hospital!5e0!3m2!1sen!2sbd!4v1721221223456!5m2!1sen!2sbd"
                    frameborder="0" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <!-- End Google Maps -->

            <div class="container" data-aos="fade-up">
                <div class="row gy-4">
                    <div class="col-lg-6">
                        <div class="row gy-4">
                            <div class="col-lg-12">
                                <div class="info-item d-flex flex-column justify-content-center align-items-center"
                                    data-aos="fade-up">
                                    <i class="bi bi-geo-alt"></i>
                                    <h3>Address</h3>
                                    <p>A108 Adam Street, New York, NY 535022</p>
                                </div>
                            </div>
                            <!-- End Info Item -->

                            <div class="col-md-6">
                                <div class="info-item d-flex flex-column justify-content-center align-items-center">
                                    <i class="bi bi-telephone"></i>
                                    <h3>Call Us</h3>
                                    <p>+1 5589 55488 55</p>
                                </div>
                            </div>
                            <!-- End Info Item -->

                            <div class="col-md-6">
                                <div class="info-item d-flex flex-column justify-content-center align-items-center">
                                    <i class="bi bi-envelope"></i>
                                    <h3>Email Us</h3>
                                    <p>info@example.com</p>
                                </div>
                            </div>
                            <!-- End Info Item -->
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <form action="forms/contact.php" method="post" class="php-email-form" data-aos="fade-up">
                            <div class="row gy-4">
                                <div class="col-md-6">
                                    <input type="text" name="name" class="form-control" placeholder="Your Name"
                                        required="" />
                                </div>

                                <div class="col-md-6">
                                    <input type="email" class="form-control" name="email" placeholder="Your Email"
                                        required="" />
                                </div>

                                <div class="col-md-12">
                                    <input type="text" class="form-control" name="subject" placeholder="Subject"
                                        required="" />
                                </div>

                                <div class="col-md-12">
                                    <textarea class="form-control" name="message" rows="4" placeholder="Message"
                                        required=""></textarea>
                                </div>

                                <div class="col-md-12 text-center">
                                    <div class="loading">Loading</div>
                                    <div class="error-message"></div>
                                    <div class="sent-message">
                                        Your message has been sent. Thank you!
                                    </div>

                                    <button type="submit">Send Message</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <!-- End Contact Form -->
                </div>
            </div>
        </section>
        <!-- /Contact Section -->

        <!-- Bootstrap 5 Toast Container -->
        <div aria-live="polite" aria-atomic="true" class="position-relative">
            <div class="toast-container position-fixed bottom-0 end-0 p-3" style="z-index: 1100">
                @if(session('message'))
                    <div class="toast align-items-center text-white bg-{{ session('alert-type', 'success') == 'danger' ? 'danger' : session('alert-type', 'success') }} border-0"
                        role="alert" aria-live="assertive" aria-atomic="true" id="liveToast">
                        <div class="d-flex">
                            <div class="toast-body">{{ session('message') }}</div>
                            <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast"
                                aria-label="Close"></button>
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </main>
@endsection