<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <title>Lily Ann Salon</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="" name="keywords">
        <meta content="" name="description">

        <!-- Google Web Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=PT+Serif:wght@400;700&display=swap" rel="stylesheet"> 

        <!-- Icon Font Stylesheet -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"/>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

        <!-- Libraries Stylesheet -->
        <link href="lib/animate/animate.min.css" rel="stylesheet">
        <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">
        <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">


        <!-- Customized Bootstrap Stylesheet -->
        <link href="css/bootstrap.min.css" rel="stylesheet">

        <!-- Template Stylesheet -->
        <link href="css/style.css" rel="stylesheet">
    </head>

    <body>

        <!-- Spinner Start -->
        <div id="spinner" class="show w-100 vh-100 bg-white position-fixed translate-middle top-50 start-50  d-flex align-items-center justify-content-center">
            <div class="spinner-grow text-primary" role="status"></div>
        </div>
        <!-- Spinner End -->


        <!-- Navbar start -->
        <div class="container-fluid sticky-top px-0">
            <div class="container-fluid bg-light">
                <div class="container px-0">
                    <nav class="navbar navbar-light navbar-expand-xl">
                        <a href="{{ route('landing') }}" class="navbar-brand">
                            <h1 class="text-primary display-4">Lily Ann Salon</h1>
                        </a>
                        <button class="navbar-toggler py-2 px-3" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                            <span class="fa fa-bars text-primary"></span>
                        </button>
                        <div class="collapse navbar-collapse bg-light py-3" id="navbarCollapse">
                            <div class="navbar-nav mx-auto border-top">
                                <a href="{{ route('landing') }}" class="nav-item nav-link active">Home</a>
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


        <!-- Modal Search Start -->
        <div class="modal fade" id="searchModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-fullscreen">
                <div class="modal-content rounded-0">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Search by keyword</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body d-flex align-items-center">
                        <div class="input-group w-75 mx-auto d-flex">
                            <input type="search" class="form-control p-3" placeholder="keywords" aria-describedby="search-icon-1">
                            <span id="search-icon-1" class="input-group-text p-3"><i class="fa fa-search"></i></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal Search End -->


        <!-- Header Start -->
        <div class="container-fluid bg-breadcrumb py-5">
            <div class="container text-center py-5">
                <h3 class="text-white display-3 mb-4">Our Services</h1>
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a href="{{ route('landing') }}">Home</a></li>
                    {{-- <li class="breadcrumb-item"><a href="#">Pages</a></li> --}}
                    <li class="breadcrumb-item active text-white">Service Page</li>
                </ol>    
            </div>
        </div>
        <!-- Header End -->

        
        <!-- Services Start Hair -->
        <div class="container-fluid services py-5">
            <div class="container py-5">
                <div class="mx-auto text-center mb-5" style="max-width: 800px;">
                    <p class="fs-4 text-uppercase text-center text-primary">Our Service</p>
                    <h1 class="display-3">Hair Treatment</h1>
                </div>
                <div class="row g-4">
                    <div class="col-lg-6">
                        <div class="services-item bg-light border-4 border-end border-primary rounded p-4">
                            <div class="row align-items-center">
                                <div class="col-8">
                                    <div class="services-content text-end">
                                        <h3>Cuci Blow</h3>
                                        <p>Merupakan perawatan rambut yang mencakup pencucian rambut dan pengeringan dengan menggunakan teknik blow dryer untuk memberikan tampilan yang lebih bervolume pada rambut.</p>
                                        {{-- <a href="#" class="btn btn-primary btn-primary-outline-0 rounded-pill py-2 px-4">Make Order</a> --}}
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="services-img d-flex align-items-center justify-content-center rounded">
                                        <img src="img/cuciblow.jpeg" class="img-fluid rounded" alt="" style="width: 100%; height: 200px; object-fit: cover;">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="services-item bg-light border-4 border-start border-primary rounded p-4">
                            <div class="row align-items-center">
                                <div class="col-4">
                                    <div class="services-img d-flex align-items-center justify-content-center rounded">
                                        <img src="img/cucicatok.png" class="img-fluid rounded" alt="" style="width: 100%; height: 200px; object-fit: cover;">
                                    </div>
                                </div>
                                <div class="col-8">
                                    <div class="services-content text-start">
                                        <h3>Cuci Catok</h3>
                                        <p>Merupakan perawatan rambut yang mencakup pencucian rambut dan pengeringan dengan menggunakan teknik catok untuk merapikan rambut dan memberikan tampilan yang lebih halus dan lurus.</p>
                                        {{-- <a href="#" class="btn btn-primary btn-primary-outline-0 rounded-pill py-2 px-4">Make Order</a> --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="services-item bg-light border-4 border-end border-primary rounded p-4">
                            <div class="row align-items-center">
                                <div class="col-8">
                                    <div class="services-content text-end">
                                        <h3>Potong Cuci Tonic</h3>
                                        <p>Merupakan perawatan rambut yang mencakup pencucian rambut, pemotongan rambut, dan aplikasi tonic untuk memperkuat akar rambut dan mencegah kerontokan.</p>
                                        {{-- <a href="#" class="btn btn-primary btn-primary-outline-0 rounded-pill py-2 px-4">Make Order</a> --}}
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="services-img d-flex align-items-center justify-content-center rounded">
                                        <img src="img/potongcucitonic.jpg" class="img-fluid rounded" alt="" style="width: 100%; height: 200px; object-fit: cover;">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="services-item bg-light border-4 border-start border-primary rounded p-4">
                            <div class="row align-items-center">
                                <div class="col-4">
                                    <div class="services-img d-flex align-items-center justify-content-center rounded">
                                        <img src="img/potongblow.jpg" class="img-fluid rounded" alt="" style="width: 100%; height: 200px; object-fit: cover;">
                                    </div>
                                </div>
                                <div class="col-8">
                                    <div class="services-content text-start">
                                        <h3>Potong Cuci Blow</h3>
                                        <p>Merupakan perawatan rambut yang mencakup pencucian rambut, pemotongan rambut, dan pengeringan dengan menggunakan teknik blow dryer untuk memberikan tampilan yang lebih bervolume pada rambut.</p>
                                        {{-- <a href="#" class="btn btn-primary btn-primary-outline-0 rounded-pill py-2 px-4">Make Order</a> --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="services-item bg-light border-4 border-end border-primary rounded p-4">
                            <div class="row align-items-center">
                                <div class="col-8">
                                    <div class="services-content text-end">
                                        <h3>Potong</h3>
                                        <p>Merupakan perawatan rambut yang mencakup pemotongan rambut sesuai dengan model yang diinginkan oleh pelanggan.
                                        </p>
                                        {{-- <a href="#" class="btn btn-primary btn-primary-outline-0 rounded-pill py-2 px-4">Make Order</a> --}}
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="services-img d-flex align-items-center justify-content-center rounded">
                                        <img src="img/salon2.jpg" class="img-fluid rounded" alt="" style="width: 100%; height: 200px; object-fit: cover;">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="services-item bg-light border-4 border-start border-primary rounded p-4">
                            <div class="row align-items-center">
                                <div class="col-4">
                                    <div class="services-img d-flex align-items-center justify-content-center rounded">
                                        <img src="img/cucicurly.jpg" class="img-fluid rounded" alt="" style="width: 100%; height: 200px; object-fit: cover;">
                                    </div>
                                </div>
                                <div class="col-8">
                                    <div class="services-content text-start">
                                        <h3>Cuci Curly</h3>
                                        <p>Merupakan perawatan rambut yang mencakup pencucian rambut dan rambut akan diatur kembali dengan teknik curly styling.</p>
                                        {{-- <a href="#" class="btn btn-primary btn-primary-outline-0 rounded-pill py-2 px-4">Make Order</a> --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="services-item bg-light border-4 border-end border-primary rounded p-4">
                            <div class="row align-items-center">
                                <div class="col-8">
                                    <div class="services-content text-end">
                                        <h3>Smoothing</h3>
                                        <p>Merupakan perawatan rambut yang bertujuan untuk meratakan dan meluruskan rambut yang keriting atau berombak, memberikan tampilan yang lebih halus dan mudah diatur.</p>
                                        {{-- <a href="#" class="btn btn-primary btn-primary-outline-0 rounded-pill py-2 px-4">Make Order</a> --}}
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="services-img d-flex align-items-center justify-content-center rounded">
                                        <img src="img/smoothing.jpg" class="img-fluid rounded" alt="" style="width: 100%; height: 200px; object-fit: cover;">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Services End -->


        <!-- Services Start Beauty -->
        <div class="container-fluid services py-5">
            <div class="container py-5">
                <div class="mx-auto text-center mb-5" style="max-width: 800px;">
                    {{-- <p class="fs-4 text-uppercase text-center text-primary">Our Service</p> --}}
                    <h1 class="display-3">Beauty Treatment</h1>
                </div>
                <div class="row g-4">
                    <div class="col-lg-6">
                        <div class="services-item bg-light border-4 border-end border-primary rounded p-4">
                            <div class="row align-items-center">
                                <div class="col-8">
                                    <div class="services-content text-end">
                                        <h3>Lashlift</h3>
                                        <p>Merupakan perawatan rambut yang bertujuan untuk meratakan dan meluruskan rambut yang keriting atau berombak, memberikan tampilan yang lebih halus dan mudah diatur.</p>
                                        {{-- <a href="#" class="btn btn-primary btn-primary-outline-0 rounded-pill py-2 px-4">Make Order</a> --}}
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="services-img d-flex align-items-center justify-content-center rounded">
                                        <img src="img/lashlift.jpg" class="img-fluid rounded" alt="" style="width: 100%; height: 200px; object-fit: cover;">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="services-item bg-light border-4 border-start border-primary rounded p-4">
                            <div class="row align-items-center">
                                <div class="col-4">
                                    <div class="services-img d-flex align-items-center justify-content-center rounded">
                                        <img src="img/messagewajah.jpg" class="img-fluid rounded" alt="" style="width: 100%; height: 200px; object-fit: cover;">
                                    </div>
                                </div>
                                <div class="col-8">
                                    <div class="services-content text-start">
                                        <h3>Message Wajah</h3>
                                        <p>Perawatan untuk wajah yang mencakup teknik pemijatan untuk meredakan ketegangan otot wajah, meningkatkan sirkulasi darah, dan memberikan efek rileks pada kulit wajah.</p>
                                        {{-- <a href="#" class="btn btn-primary btn-primary-outline-0 rounded-pill py-2 px-4">Make Order</a> --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="services-item bg-light border-4 border-end border-primary rounded p-4">
                            <div class="row align-items-center">
                                <div class="col-8">
                                    <div class="services-content text-end">
                                        <h3>Facial Sari Ayu</h3>
                                        <p>Perawatan wajah dengan menggunakan produk perawatan dari brand Sari Ayu yang terkenal akan kualitasnya. Facial Sari Ayu bertujuan untuk membersihkan, merawat, dan menjaga kelembutan kulit wajah.</p>
                                        {{-- <a href="#" class="btn btn-primary btn-primary-outline-0 rounded-pill py-2 px-4">Make Order</a> --}}
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="services-img d-flex align-items-center justify-content-center rounded">
                                        <img src="img/facial_sari ayu.jpg" class="img-fluid rounded" alt="" style="width: 100%; height: 200px; object-fit: cover;">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="services-item bg-light border-4 border-start border-primary rounded p-4">
                            <div class="row align-items-center">
                                <div class="col-4">
                                    <div class="services-img d-flex align-items-center justify-content-center rounded">
                                        <img src="img/facial_viva.jpg" class="img-fluid rounded" alt="" style="width: 100%; height: 200px; object-fit: cover;">
                                    </div>
                                </div>
                                <div class="col-8">
                                    <div class="services-content text-start">
                                        <h3>Facial Viva</h3>
                                        <p>Perawatan wajah yang menggunakan produk perawatan dari brand Viva. Facial Viva bertujuan untuk membersihkan kulit wajah dari kotoran dan minyak berlebih, serta memberikan nutrisi yang dibutuhkan oleh kulit.</p>
                                        {{-- <a href="#" class="btn btn-primary btn-primary-outline-0 rounded-pill py-2 px-4">Make Order</a> --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Services End -->

         <!-- Services Start Spa -->
         <div class="container-fluid services py-5">
            <div class="container py-5">
                <div class="mx-auto text-center mb-5" style="max-width: 800px;">
                    {{-- <p class="fs-4 text-uppercase text-center text-primary">Our Service</p> --}}
                    <h1 class="display-3">Hair Mask Treatment</h1>
                </div>
                <div class="row g-4">
                    <div class="col-lg-6">
                        <div class="services-item bg-light border-4 border-end border-primary rounded p-4">
                            <div class="row align-items-center">
                                <div class="col-8">
                                    <div class="services-content text-end">
                                        <h3>Hair Mask Panjang</h3>
                                        <p>Perawatan rambut dengan menggunakan hair mask khusus untuk rambut panjang. Membantu melembapkan, menguatkan, dan merawat rambut agar tetap sehat dan berkilau.</p>
                                        {{-- <a href="#" class="btn btn-primary btn-primary-outline-0 rounded-pill py-2 px-4">Make Order</a> --}}
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="services-img d-flex align-items-center justify-content-center rounded">
                                        <img src="img/hairmaskpanjang.jpg" class="img-fluid rounded" alt="" style="width: 100%; height: 200px; object-fit: cover;">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="services-item bg-light border-4 border-start border-primary rounded p-4">
                            <div class="row align-items-center">
                                <div class="col-4">
                                    <div class="services-img d-flex align-items-center justify-content-center rounded">
                                        <img src="img/hairmaskmedium.jpg" class="img-fluid rounded" alt="" style="width: 100%; height: 200px; object-fit: cover;">
                                    </div>
                                </div>
                                <div class="col-8">
                                    <div class="services-content text-start">
                                        <h3>Hair Mask Medium</h3>
                                        <p>Perawatan rambut dengan menggunakan hair mask khusus untuk rambut panjang. Membantu melembapkan, menguatkan, dan merawat rambut agar tetap sehat dan berkilau.</p>
                                        {{-- <a href="#" class="btn btn-primary btn-primary-outline-0 rounded-pill py-2 px-4">Make Order</a> --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="services-item bg-light border-4 border-end border-primary rounded p-4">
                            <div class="row align-items-center">
                                <div class="col-8">
                                    <div class="services-content text-end">
                                        <h3>Hair Mask Pendek</h3>
                                        <p>Perawatan rambut dengan menggunakan hair mask khusus untuk rambut pendek. Membantu merawat rambut pendek agar tetap sehat, lembut, dan mudah diatur.</p>
                                        {{-- <a href="#" class="btn btn-primary btn-primary-outline-0 rounded-pill py-2 px-4">Make Order</a> --}}
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="services-img d-flex align-items-center justify-content-center rounded">
                                        <img src="img/hairmaskpendek.jpg" class="img-fluid rounded" alt="" style="width: 100%; height: 200px; object-fit: cover;">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="services-item bg-light border-4 border-start border-primary rounded p-4">
                            <div class="row align-items-center">
                                <div class="col-4">
                                    <div class="services-img d-flex align-items-center justify-content-center rounded">
                                        <img src="img/creambath.jpg" class="img-fluid rounded" alt="" style="width: 100%; height: 200px; object-fit: cover;">
                                    </div>
                                </div>
                                <div class="col-8">
                                    <div class="services-content text-start">
                                        <h3>Creambath</h3>
                                        <p>Creambath bertujuan untuk melembapkan rambut, mengurangi ketombe, dan merilekskan kulit kepala.</p>
                                        {{-- <a href="#" class="btn btn-primary btn-primary-outline-0 rounded-pill py-2 px-4">Make Order</a> --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Services End -->

        <!-- Footer Start -->
        <div class="container-fluid footer py-5">
            <div class="container py-5">
                <div class="row g-5">
                    <div class="col-md-6 col-lg-6 col-xl-3">
                        <div class="footer-item">
                            <h4 class="mb-4 text-white">Lily Ann Salon</h4>
                            <p class="text-white">Dolor amet sit justo amet elitr clita ipsum elitr est.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam in tempor dui, non consectetur enim.</p>
                            {{-- <div class="position-relative mx-auto rounded-pill">
                                <input class="form-control rounded-pill border-0 w-100 py-3 ps-4 pe-5" type="text" placeholder="Enter your email">
                                <button type="button" class="btn btn-primary btn-primary-outline-0 rounded-pill position-absolute top-0 end-0 py-2 mt-2 me-2">SignUp</button>
                            </div> --}}
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-3">
                        <div class="footer-item d-flex flex-column">
                            <h4 class="mb-4 text-white">Schedule</h4>
                            <p class="text-muted mb-0">Monday - Saturday: <br> <span class="text-white"> 09:00 am – 06:00 pm</span></p>
                            {{-- <p class="text-muted mb-0">Saturday: <span class="text-white"> 09:00 am – 08:00 pm</span></p> --}}
                            {{-- <p class="text-muted mb-0">Sunday: <span class="text-white"> 09:00 am – 05:00 pm</span></p> --}}
                            <h4 class="my-4 text-white">Address</h4>
                            <p class="mb-0"><i class="fas fa-map-marker-alt text-secondary me-2"></i> Jl.New Puri Cempaka. No.b7</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-3">
                        <div class="footer-item d-flex flex-column">
                            <h4 class="mb-4 text-white">Follow Us</h4>
                            {{-- <a href=""><i class="fas fa-angle-right me-2"></i> Faceboock</a> --}}
                            <a href="https://www.instagram.com/_lilyansalon?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw=="><i class="fas fa-angle-right me-2"></i> Instagram</a>
                            {{-- <a href=""><i class="fas fa-angle-right me-2"></i> Twitter</a> --}}
                            <h4 class="my-4 text-white">Contact Us</h4>
                            <p class="mb-0"><i class="fas fa-envelope text-secondary me-2"></i> aylanazefanya2gmail.com</p>
                            <p class="mb-0"><i class="fas fa-phone text-secondary me-2"></i> +62 821-3939-1288</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End -->

        <!-- Copyright Start -->
        <div class="container-fluid copyright py-4">
            <div class="container">
                <div class="row g-4 align-items-center">
                    <div class="col-md-4 text-center text-md-start mb-md-0">
                        <span class="text-light"><a href="#"><i class="fas fa-copyright text-light me-2"></i>Lily Ann Salon</a>, Copyright.</span>
                    </div>
                </div>
            </div>
        </div>
        <!-- Copyright End -->

        <!-- Back to Top -->
        <a href="#" class="btn btn-primary btn-primary-outline-0 btn-md-square rounded-circle back-to-top"><i class="fa fa-arrow-up"></i></a>   

        
    <!-- JavaScript Libraries -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/lightbox/js/lightbox.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
    </body>

</html>