<!-- Spinner Start -->
<div id="spinner"
     class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
    <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
        <span class="sr-only">Loading...</span>
    </div>
</div>
<!-- Spinner End -->


<!-- Topbar Start -->
<div class="container-fluid bg-light d-none d-lg-block">
    <div class="row align-items-center top-bar">
        <div class="col-lg-3 col-md-12 text-center text-lg-start">
            <a href="{{ route('welcome') }}" class="navbar-brand m-0 p-0">
                <img src="{{ asset('logo.png') }}" alt="logo"/>
            </a>
        </div>
        <div class="col-lg-9 col-md-12 text-end">
            <div class="h-100 d-inline-flex align-items-center me-4">
                <x-icon-map-pin class="text-primary me-2"/>
                <p class="m-0">Pune, MH, IND, 411004</p>
            </div>
            <div class="h-100 d-inline-flex align-items-center me-4">
                <x-icon-mail class="text-primary me-2"/>
                <p class="m-0">info@nivaecotech.com</p>
            </div>
            <div class="h-100 d-inline-flex align-items-center">
                <a class="btn btn-sm-square bg-white text-primary me-1" href="">
                    <x-icon-brand-facebook />
                </a>
                <a class="btn btn-sm-square bg-white text-primary me-1" href="">
                    <x-icon-brand-linkedin />
                </a>
            </div>
        </div>
    </div>
</div>
<!-- Topbar End -->


<!-- Navbar Start -->
<div class="container-fluid nav-bar bg-light">
    <nav class="navbar navbar-expand-lg navbar-light bg-white p-3 py-lg-0 px-lg-4">
        <a href="" class="navbar-brand d-flex align-items-center m-0 p-0 d-lg-none">
            <img src="{{ asset('logo.png') }}" class=h-8/ alt="logo">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="fa fa-bars"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav me-auto">
                <div class="nav-item dropdown">
                    <a href="{{ route('services.index') }}" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Services</a>
                    <div class="dropdown-menu fade-up m-0">
                        <a href="{{ route('services.show.solar-park-development') }}" class="dropdown-item">Solar Park Development</a>
                        <a href="{{ route('services.show.rooftop-solar-epc') }}" class="dropdown-item">Rooftop Solar EPC</a>
                        <a href="{{ route('services.show.operations-and-maintenance') }}" class="dropdown-item">Operations and Maintenance</a>
                        <a href="{{ route('services.show.fund-raising') }}" class="dropdown-item">Fund Raising</a>
                        <a href="{{ route('services.show.project-consulting') }}" class="dropdown-item">Project Consulting</a>
                    </div>
                </div>
                <div class="nav-item dropdown">
                    <a href="{{ route('portfolio.index') }}" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Portfolio</a>
                    <div class="dropdown-menu fade-up m-0">
                        <a href="{{ route('portfolio.solar-parks.index') }}" class="dropdown-item">Solar Parks</a>
                        <a href="{{ route('portfolio.rooftops.index') }}" class="dropdown-item">Rooftop</a>
                    </div>
                </div>
                <a href="{{ route('contact') }}" class="nav-item nav-link">Contact</a>
            </div>
            <div class="mt-4 mt-lg-0 me-lg-n4 py-3 px-4 bg-primary d-flex align-items-center">
                <div class="d-flex flex-shrink-0 align-items-center justify-content-center bg-white"
                     style="width: 45px; height: 45px;">
                    <x-icon-brand-whatsapp class="text-primary" />
                </div>
                <div class="ms-3">
                    <p class="mb-1 text-white">Contact</p>
                    <h5 class="m-0 text-secondary">+91 989 099 3201</h5>
                </div>
            </div>
        </div>
    </nav>
</div>
<!-- Navbar End -->
