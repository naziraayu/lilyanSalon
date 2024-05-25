<!-- Navbar start -->
<link href="https://fonts.googleapis.com/css2?family=Allura&family=Oooh+Baby&family=Playfair+Display:ital,wght@0,400..900;1,400..900&family=Sacramento&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"/>
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
<div class="container-fluid sticky-top px-0">
    <div class="container-fluid bg-light">
        <div class="container px-0">
            <nav class="navbar navbar-light navbar-expand-xl">
                {{-- <a href="index.html" class="navbar-brand"> --}}
                    <h6 class="text-primary display-5" style="font-family: Sacramento, cursive: ">Lily Ann Salon</h6>
                {{-- </a> --}}
                <button class="navbar-toggler py-2 px-3" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="fa fa-bars text-primary"></span>
                </button>
                <div class="collapse navbar-collapse bg-light py-3" id="navbarCollapse">
                    <div class="navbar-nav mx-auto border-top">
                        <a href="{{ route('landing') }}" class="nav-item nav-link">Home</a>
                        <a href="{{ url('service') }}" class="nav-item nav-link">Services</a>
                        <a href="{{ url('price') }}" class="nav-item nav-link">Price</a>
                        <a href="{{ url('contact') }}" class="nav-item nav-link">Contact Us</a>
                    </div>
                    <div class="d-flex align-items-center flex-nowrap pt-xl-0">
                        {{-- <button class="btn-search btn btn-primary btn-primary-outline-0 rounded-circle btn-lg-square" data-bs-toggle="modal" data-bs-target="#searchModal"><i class="fas fa-search"></i></button> --}}
                        <a href="{{ route('login') }}" class="btn btn-primary btn-primary-outline-0 rounded-pill py-3 px-4 ms-4">Login</a>
                    </div>
                </div>
            </nav>
        </div>
    </div>
</div>
<!-- Navbar End -->