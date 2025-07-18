<header id="header" class="header sticky-top">

    <div class="topbar d-flex align-items-center">
        <div class="container d-flex justify-content-center justify-content-md-between">
            <div class="d-none d-md-flex align-items-center">
                <i class="bi bi-clock me-1"></i> Monday - Saturday, 8AM to 10PM
            </div>
            <div class="d-flex align-items-center">
                <i class="bi bi-phone me-1"></i> Call us now +1 5589 55488 55
            </div>
        </div>
    </div><!-- End Top Bar -->

    <div class="branding d-flex align-items-center">

        <div class="container position-relative d-flex align-items-center justify-content-end">
            <a href="index.html" class="logo d-flex align-items-center me-auto">
                <img src="{{ asset('assets/img/money_receipt/logo.png') }}" alt="">
                <!-- Uncomment the line below if you also wish to use a text logo -->
                <!-- <h1 class="sitename">Medicio</h1>  -->
            </a>

            <nav id="navmenu" class="navmenu">
                <ul>
                    <li><a href="#hero" class="active">Home</a></li>
                    <li><a href="#about">About</a></li>
                    <li><a href="#services">Services</a></li>
                    <li><a href="#departments">Departments</a></li>
                    <li><a href="#doctors">Doctors</a></li>
                    <li class="dropdown">
                        <a href="#">
                            <span>Patient Services</span>
                            <i class="bi bi-chevron-down toggle-dropdown"></i>
                        </a>
                        <ul>
                            <li><a href="#faq">FAQ</a></li>
                            <li><a href="#">Inpatient Services</a></li>
                            <li><a href="#">Outpatient Services</a></li>

                            <li class="dropdown">
                                <a href="#"><span>Admission & Discharge</span>
                                    <i class="bi bi-chevron-down toggle-dropdown"></i>
                                </a>
                                <ul>
                                    <li><a href="#">Admission Guidelines</a></li>
                                    <li><a href="#">Billing Process</a></li>
                                    <li><a href="#">Discharge Summary</a></li>
                                </ul>
                            </li>

                            <li><a href="#">Patient Portal</a></li>
                        </ul>
                    </li>

                    <li><a href="#contact">Contact</a></li>
                </ul>
                <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
            </nav>

            <a class="cta-btn" href="{{ route('login') }}">Login/Register</a>

        </div>

    </div>

</header>