<div class="sidebar" data-background-color="dark">
    <div class="sidebar-logo">
        <!-- Logo Header -->
        <div class="logo-header" style="background-color: #161b2c">
            <a href="{{ url('/') }}" class="logo">
                <img src="{{ asset('assets/img/kaiadmin/healthcare-logo.png') }}" alt="navbar brand"
                    class="navbar-brand" height="38" />
            </a>
            <div class="nav-toggle">
                <button class="btn btn-toggle toggle-sidebar">
                    <i class="gg-menu-right"></i>
                </button>
                <button class="btn btn-toggle sidenav-toggler">
                    <i class="gg-menu-left"></i>
                </button>
            </div>
            <button class="topbar-toggler more">
                <i class="gg-more-vertical-alt"></i>
            </button>
        </div>
        <!-- End Logo Header -->
    </div>
    <div class="sidebar-wrapper scrollbar scrollbar-inner">
        <div class="sidebar-content">
            <ul class="nav nav-secondary">
                <li class="nav-item active">
                    <a data-bs-toggle="collapse" href="#dashboard" class="collapsed" aria-expanded="false">
                        <i class="fas fa-home"></i>
                        <p>Dashboard</p>
                        <span class="caret"></span>
                    </a>
                    <div class="collapse" id="dashboard">
                        <ul class="nav nav-collapse">
                            <li>
                                <a href="../demo1/index.html">
                                    <span class="sub-item">Dashboard 1</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-section">
                    <span class="sidebar-mini-icon">
                        <i class="fa fa-ellipsis-h"></i>
                    </span>
                    <h4 class="text-section">Modules</h4>
                </li>
                <li class="nav-item">
                    <a data-bs-toggle="collapse" href="#appointments">
                        <i class="fas fa-calendar-check"></i>
                        <p>Appointments</p>
                        <span class="caret"></span>
                    </a>
                    <div class="collapse" id="appointments">
                        <ul class="nav nav-collapse">
                            <li>
                                <a href="{{ url('appointments') }}">
                                    <span class="sub-item">Manage Appointments</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ url('appointments/create') }}">
                                    <span class="sub-item">Create Appointment</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a data-bs-toggle="collapse" href="#patients">
                        <i class="fa-solid fa-hospital-user"></i>
                        <p>Patients</p>
                        <span class="caret"></span>
                    </a>
                    <div class="collapse" id="patients">
                        <ul class="nav nav-collapse">
                            <li>
                                <a href="{{ url('patients') }}">
                                    <span class="sub-item">Manage Patients</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ url('patients/create') }}">
                                    <span class="sub-item">Create Patient</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a data-bs-toggle="collapse" href="#departments">
                        <i class="fas fa-building"></i>
                        <p>Departments</p>
                        <span class="caret"></span>
                    </a>
                    <div class="collapse" id="departments">
                        <ul class="nav nav-collapse">
                            <li>
                                <a href="{{ url('departments') }}">
                                    <span class="sub-item">Manage Departments</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ url('departments/create') }}">
                                    <span class="sub-item">Create Departments</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a data-bs-toggle="collapse" href="#designations">
                        <i class="fas fa-building"></i>
                        <p>Designations</p>
                        <span class="caret"></span>
                    </a>
                    <div class="collapse" id="designations">
                        <ul class="nav nav-collapse">
                            <li>
                                <a href="{{ url('designations') }}">
                                    <span class="sub-item">Manage Designations</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ url('designations/create') }}">
                                    <span class="sub-item">Create Designations</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a data-bs-toggle="collapse" href="#doctors">
                        <i class="fas fa-user-md"></i>
                        <p>Doctors</p>
                        <span class="caret"></span>
                    </a>
                    <div class="collapse" id="doctors">
                        <ul class="nav nav-collapse">
                            <li>
                                <a href="{{ url('doctors') }}">
                                    <span class="sub-item">Manage Doctors</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ url('doctors/create') }}">
                                    <span class="sub-item">Create Doctor</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a data-bs-toggle="collapse" href="#prescriptions">
                        <i class="fas fa-prescription-bottle-alt"></i>
                        <p>Prescriptions</p>
                        <span class="caret"></span>
                    </a>
                    <div class="collapse" id="prescriptions">
                        <ul class="nav nav-collapse">
                            <li>
                                <a href="{{ url('prescriptions') }}">
                                    <span class="sub-item">Manage Prescriptions</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ url('prescriptions/create') }}">
                                    <span class="sub-item">Create Prescription</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a data-bs-toggle="collapse" href="#admissions">
                        <i class="fas fa-procedures"></i>
                        <p>Admissions</p>
                        <span class="caret"></span>
                    </a>
                    <div class="collapse" id="admissions">
                        <ul class="nav nav-collapse">
                            <li>
                                <a href="{{ url('admissions') }}">
                                    <span class="sub-item">Manage Admissions</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ url('admissions/create') }}">
                                    <span class="sub-item">Create Admission</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a data-bs-toggle="collapse" href="#hpServices">
                        <i class="fas fa-stethoscope"></i>
                        <p>HP Services</p>
                        <span class="caret"></span>
                    </a>
                    <div class="collapse" id="hpServices">
                        <ul class="nav nav-collapse">
                            <li>
                                <a href="{{ url('services') }}">
                                    <span class="sub-item">Manage HP Services</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ url('services/create') }}">
                                    <span class="sub-item">Create HP Service</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a data-bs-toggle="collapse" href="#pharmacies">
                        <i class="fas fa-pills"></i>
                        <p>Pharmacies</p>
                        <span class="caret"></span>
                    </a>
                    <div class="collapse" id="pharmacies">
                        <ul class="nav nav-collapse">
                            <li>
                                <a href="{{ url('medicines') }}">
                                    <span class="sub-item">Manage Medicines</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ url('medicines/create') }}">
                                    <span class="sub-item">Add Medicines</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ url('medicine_types') }}">
                                    <span class="sub-item">Manage Medi Types</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ url('medicine_types/create') }}">
                                    <span class="sub-item">Add Medi Type</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ url('medicine_categories/create') }}">
                                    <span class="sub-item">Manage Medi Categories</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ url('medicine_categories/create') }}">
                                    <span class="sub-item">Add Medi Category</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a data-bs-toggle="collapse" href="#accounts">
                        <i class="fas fa-file-invoice-dollar"></i>
                        <p>Accounts</p>
                        <span class="caret"></span>
                    </a>
                    <div class="collapse" id="accounts">
                        <ul class="nav nav-collapse">
                            <li>
                                <a href="{{ url('invoices') }}">
                                    <span class="sub-item">Manage Invoices</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ url('invoices/create') }}">
                                    <span class="sub-item">Create Invoices</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ url('moneyreceipts') }}">
                                    <span class="sub-item">Manage Money Receipts</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ url('moneyreceipts/create') }}">
                                    <span class="sub-item">Create Money Receipt</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a data-bs-toggle="collapse" href="#system">
                        <i class="fas fa-cogs"></i>
                        <p>System</p>
                        <span class="caret"></span>
                    </a>
                    <div class="collapse" id="system">
                        <ul class="nav nav-collapse">
                            <li>
                                <a href="{{ url('themes') }}">
                                    <span class="sub-item">Manage Themes</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ url('themes/create') }}">
                                    <span class="sub-item">Change Theme</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a data-bs-toggle="collapse" href="/logout">
                        <i class="fas fa-sign-out-alt"></i>
                        <p>Logout</p>
                    </a>
                </li>
                {{-- nested dropdown link --}}
                {{-- <li class="nav-item">
                    <a data-bs-toggle="collapse" href="#submenu">
                        <i class="fas fa-bars"></i>
                        <p>Menu Levels</p>
                        <span class="caret"></span>
                    </a>
                    <div class="collapse" id="submenu">
                        <ul class="nav nav-collapse">
                            <li>
                                <a data-bs-toggle="collapse" href="#subnav1">
                                    <span class="sub-item">Level 1</span>
                                    <span class="caret"></span>
                                </a>
                                <div class="collapse" id="subnav1">
                                    <ul class="nav nav-collapse subnav">
                                        <li>
                                            <a href="#">
                                                <span class="sub-item">Level 2</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <span class="sub-item">Level 2</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li>
                                <a data-bs-toggle="collapse" href="#subnav2">
                                    <span class="sub-item">Level 1</span>
                                    <span class="caret"></span>
                                </a>
                                <div class="collapse" id="subnav2">
                                    <ul class="nav nav-collapse subnav">
                                        <li>
                                            <a href="#">
                                                <span class="sub-item">Level 2</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="sub-item">Level 1</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li> --}}
            </ul>
        </div>
    </div>
</div>