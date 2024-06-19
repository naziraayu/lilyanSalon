@extends('landing_page.index')

@section('landing_page.main')
@if(session('success'))
    <script type="text/javascript">
        Swal.fire({
        // position: "top-end",
        icon: "success",
        title: "{{ session('success') }}",
        showConfirmButton: false,
        timer: 2000
        });
    </script>
@endif
{{-- <main id="main"> --}}

    <!-- Modal Search Start -->
    {{-- <div class="modal fade" id="searchModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-fullscreen">
            <div class="modal-content rounded-0">
                <div class="modal-header">
                    <h4 class="modal-title mb-0" id="exampleModalLabel">Search by keyword</h4>
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
    </div> --}}
    <!-- Modal Search End -->

    <!-- Carousel Start -->
    <div class="container-fluid carousel-header px-0">
        <div id="carouselId" class="carousel slide" data-bs-ride="carousel">
            <ol class="carousel-indicators">
                <li data-bs-target="#carouselId" data-bs-slide-to="0" class="active"></li>
                <li data-bs-target="#carouselId" data-bs-slide-to="1"></li>
                <li data-bs-target="#carouselId" data-bs-slide-to="2"></li>
            </ol>
            <div class="carousel-inner" role="listbox">
                <div class="carousel-item active">
                    <img src="img/salon.jpg" class="img-fluid" alt="Image">
                    <div class="carousel-caption">
                        <div class="p-3" style="max-width: 900px;">
                            <h4 class="text-primary text-uppercase mb-3" style="letter-spacing: 3px;">Hair & Beauty Center</h4>
                            <h1 class="display-1 text-capitalize text-dark mb-3">Hair Treatment</h1>
                            <p class="mx-md-5 fs-4 px-4 mb-5 text-dark">Rambut yang sehat dan indah adalah aset berharga bagi penampilan Anda. Di Lily Ann Salon, menawarkan berbagai jenis perawatan rambut yang dirancang khusus untuk memenuhi kebutuhan Anda.</p>                           
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="img/carousel-1.jpg" class="img-fluid" alt="Image">
                    <div class="carousel-caption">
                        <div class="p-3" style="max-width: 900px;">
                            <h4 class="text-primary text-uppercase mb-3" style="letter-spacing: 3px;">Hair & Beauty Center</h4>
                            <h1 class="display-1 text-capitalize text-dark mb-3">Beauty Treatment</h1>
                            <p class="mx-md-5 fs-4 px-5 mb-5 text-dark">Di Lily Ann Salon juga menawarkan berbagai perawatan kecantikan untuk merawat kulit dan tubuh Anda. Mulai dari Facial hingga lash lift dengan Teknik terbaik untuk memberikan hasil terbaik bagi Anda.</p>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="img/carousel-3.jpg" class="img-fluid" alt="Image">
                    <div class="carousel-caption">
                        <div class="p-3" style="max-width: 900px;">
                            <h4 class="text-primary text-uppercase mb-3" style="letter-spacing: 3px;">Hair & Beauty Center</h4>
                            <h1 class="display-1 text-capitalize text-dark">Mask/Spa Treatment</h1>
                            <p class="mx-md-5 fs-4 px-5 mb-5 text-dark">Kami menggunakan produk berkualitas tinggi dan Teknik perawatan terbaik untuk memastikan rambut Anda tetap sehat dan indah, melalui layanan hair spa dan dan hair mask.</p>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselId" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselId" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <!-- Carousel End -->

    <!-- Services Start -->
    <div class="container-fluid services py-5">
        <div class="container py-5">
            <div class="mx-auto text-center mb-5" style="max-width: 800px;">
                <p class="fs-4 text-uppercase text-center text-primary">Our Service</p>
                <h1 class="display-3">Menu Treatment</h1>
            </div>
            <div class="row g-4">
                <div class="col-lg-6">
                    <div class="services-item bg-light border-4 border-end border-primary rounded p-4">
                        <div class="row align-items-center">
                            <div class="col-8">
                                <div class="services-content text-end">
                                    <h3>Potong</h3>
                                    <p>Merupakan perawatan rambut yang mencakup pemotongan rambut sesuai dengan model yang diinginkan oleh pelanggan.</p>
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
                                    <h3>Hairmask</h3>
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
                                    <h3>Facial</h3>
                                    <p>Perawatan wajah dengan menggunakan produk perawatan dari brand Sari Ayu yang terkenal akan kualitasnya. Facial Sari Ayu bertujuan untuk membersihkan, merawat, dan menjaga kelembutan kulit wajah.</p>
                                    {{-- <a href="#" class="btn btn-primary btn-primary-outline-0 rounded-pill py-2 px-4">Make Order</a> --}}
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="services-img d-flex align-items-center justify-content-center rounded">
                                    <img src="img/gallery-6.jpg" class="img-fluid rounded" alt="" style="width: 100%; height: 200px; object-fit: cover;">
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
                                    <img src="img/lashlift.jpg" class="img-fluid rounded" alt="" style="width: 100%; height: 200px; object-fit: cover;">
                                </div>
                            </div>
                            <div class="col-8">
                                <div class="services-content text-start">
                                    <h3>Lashlift</h3>
                                    <p>Perawatan untuk melentikkan bulu mata secara alami tanpa perlu menggunakan bulu mata palsu. Memberikan efek mata yang lebih menawan.
                                    </p>
                                    {{-- <a href="#" class="btn btn-primary btn-primary-outline-0 rounded-pill py-2 px-4">Make Order</a> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="services-btn text-center">
                        <a href="{{ url('service') }}" class="btn btn-primary btn-primary-outline-0 rounded-pill py-3 px-5">Service More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Services End -->

    <!-- About Start -->
    {{-- <div class="container-fluid about py-5">
        <div class="container py-5">
            <div class="row g-5 align-items-center">
                <div class="col-lg-5">
                    <div class="video">
                        <img src="img/about-1.jpg" class="img-fluid rounded" alt="">
                        <div class="position-absolute rounded border-5 border-top border-start border-white" style="bottom: 0; right: 0;;">
                            <img src="img/about-2.jpg" class="img-fluid rounded" alt="">
                        </div>
                        <button type="button" class="btn btn-play" data-bs-toggle="modal" data-src="https://www.youtube.com/embed/DWRcNpR6Kdc" data-bs-target="#videoModal">
                            <span></span>
                        </button>
                    </div>
                </div>
                <div class="col-lg-7">
                    <p class="fs-4 text-uppercase text-primary">About Us</p>
                    <h1 class="display-4 mb-4">Your Best Spa, Beauty & Skin Care Center</h1>
                    <p class="mb-4">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled
                    </p>
                    <div class="row g-4">
                        <div class="col-md-6">
                            <div class="d-flex align-items-center">
                                <i class="fab fa-gitkraken fa-3x text-primary"></i>
                                <div class="ms-4">
                                    <h5 class="mb-2">Special Offers</h5>
                                    <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="d-flex align-items-center">
                                <i class="fas fa-gift fa-3x text-primary"></i>
                                <div class="ms-4">
                                    <h5 class="mb-2">Special Offers</h5>
                                    <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <p class="my-4">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                    </p>
                    <p class="mb-4">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                    </p>
                    <a href="#" class="btn btn-primary btn-primary-outline-0 rounded-pill py-3 px-5">Explore More</a>
                </div> 
            </div>
        </div>
    </div> --}}
    <!-- Modal Video -->
    {{-- <div class="modal fade" id="videoModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content rounded-0">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Youtube Video</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- 16:9 aspect ratio -->
                    <div class="ratio ratio-16x9">
                        <iframe class="embed-responsive-item" src="" id="video" allowfullscreen allowscriptaccess="always"
                            allow="autoplay"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <!-- About End -->

    <!-- Appointment Start -->
    <div class="container-fluid appointment py-5">
        <div class="container py-5">
            <div class="row g-5 align-items-center">
                {{-- <div class="col-lg-6">
                    <div class="appointment-form p-5">
                        <p class="fs-4 text-uppercase text-primary">Get In Touch</p>
                        <h1 class="display-4 mb-4 text-white">Get Appointment</h1>
                        <form>
                            <div class="row gy-3 gx-4">
                                <div class="col-lg-6">
                                    <input type="text" class="form-control py-3 border-white bg-transparent text-white" placeholder="First Name">
                                </div>
                                <div class="col-lg-6">
                                    <input type="email" class="form-control py-3 border-white bg-transparent text-white" placeholder="Email">
                                </div>
                                <div class="col-lg-6">
                                    <select class="form-select py-3 border-white bg-transparent" aria-label="Default select example">
                                        <option selected>Open this select menu</option>
                                        <option value="1">One</option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>
                                    </select>
                                </div>
                                <div class="col-lg-6">
                                    <input type="date" class="form-control py-3 border-white bg-transparent">
                                </div>
                                <div class="col-lg-12">
                                    <textarea class="form-control border-white bg-transparent text-white" name="text" id="area-text" cols="30" rows="5" placeholder="Write Comments"></textarea>
                                </div>
                                <div class="col-lg-12">
                                    <button type="button" class="btn btn-primary btn-primary-outline-0 w-100 py-3 px-5">SUBMIT NOW</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div> --}}
                <div class="col-lg-12">
                    <div class="appointment-time p-5">
                        <h1 class="display-5 mb-4">Opening Hours</h1>
                        <div class="d-flex justify-content-between fs-5 text-white">
                            <p>Senin:</p>
                            <p>07:00 am – 18:00 pm</p>
                        </div>
                        <div class="d-flex justify-content-between fs-5 text-white">
                            <p>Selasa:</p>
                            <p>07:00 am – 18:00 pm</p>
                        </div>
                        <div class="d-flex justify-content-between fs-5 text-white">
                            <p>Rabu:</p>
                            <p>07:00 am – 18:00 pm</p>
                        </div>
                        <div class="d-flex justify-content-between fs-5 text-white">
                            <p>Kamis:</p>
                            <p>07:00 am – 18:00 pm</p>
                        </div>
                        <div class="d-flex justify-content-between fs-5 text-white">
                            <p>Jumat:</p>
                            <p>07:00 am – 18:00 pm</p>
                        </div>
                        {{-- <div class="d-flex justify-content-between fs-5 text-white mb-4">
                            <p>Sabtu:</p>
                            <p>09:00 am – 05:00 pm</p>
                        </div> --}}
                        <div class="d-flex justify-content-between fs-5 text-white mb-4">
                            <p>Sabtu - Minggu:</p>
                            <p>CLOSED</p>
                        </div>
                        {{-- <p class="text-dark">Check out seasonal discounts for best offers.</p> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Appointment End -->

    <!-- Gallery Start -->
    <div class="container-fluid gallery py-5">
        <div class="container py-5">
            <div class="text-center mx-auto mb-5" style="max-width: 800px;">
                <p class="fs-4 text-uppercase text-primary">Our Gallery</p>
                <h1 class="display-4 mb-4">Let's See Our Gallery</h1>
            </div>
            <div class="tab-class text-center">
                <ul class="nav nav-pills d-inline-flex justify-content-center mb-5">
                    <li class="nav-item">
                        <a class="d-flex mx-3 py-2 border border-primary bg-light rounded-pill active" data-bs-toggle="pill" href="#tab-1">
                            <span class="text-dark" style="width: 150px;">All Gallery</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="d-flex py-2 mx-3 border border-primary bg-light rounded-pill" data-bs-toggle="pill" href="#tab-2">
                            <span class="text-dark" style="width: 150px;">Hair Treatment</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="d-flex mx-3 py-2 border border-primary bg-light rounded-pill" data-bs-toggle="pill" href="#tab-3">
                            <span class="text-dark" style="width: 150px;">Beauty Treatment</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="d-flex mx-3 py-2 border border-primary bg-light rounded-pill" data-bs-toggle="pill" href="#tab-4">
                            <span class="text-dark" style="width: 150px;">Hair Mask</span>
                        </a>
                    </li>
                </ul>
                <div class="tab-content">
                    <div id="tab-1" class="tab-pane fade show p-0 active">
                        <div class="row g-4">
                            <div class="col-lg-12">
                                <div class="row g-4">
                                    <div class="col-lg-3">
                                        <div class="gallery-img">
                                            <img class="img-fluid rounded w-100" src="img/hairmaskmedium.jpg" alt="" style="width: 100%; height: 200px; object-fit: cover;">
                                            <div class="gallery-overlay p-4">
                                                <h4 class="text-secondary">Hair Mask Medium</h4>
                                            </div>
                                            <div class="search-icon">
                                                <a href="img/hairmaskmedium.jpg" data-lightbox="Gallery-4" class="my-auto"><i class="fas fa-search-plus btn-primary btn-primary-outline-0 rounded-circle p-3"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="gallery-img">
                                            <img class="img-fluid rounded w-100" src="img/creambath.jpg" alt="" style="width: 100%; height: 200px; object-fit: cover;">
                                            <div class="gallery-overlay p-4">
                                                <h4 class="text-secondary">Creambath</h4>
                                            </div>
                                            <div class="search-icon">
                                                <a href="img/creambath.jpg" data-lightbox="Gallery-1" class="my-auto"><i class="fas fa-search-plus btn-primary btn-primary-outline-0 rounded-circle p-3"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="gallery-img">
                                            <img class="img-fluid rounded w-100" src="img/facial_sari ayu.jpg" alt="" style="width: 100%; height: 200px; object-fit: cover;">
                                            <div class="gallery-overlay p-4">
                                                <h4 class="text-secondary">Facial Sari Ayu</h4>
                                            </div>
                                            <div class="search-icon">
                                                <a href="img/facial_sari ayu.jpg" data-lightbox="Gallery-2" class="my-auto"><i class="fas fa-search-plus btn-primary btn-primary-outline-0 rounded-circle p-3"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="gallery-img">
                                            <img class="img-fluid rounded w-100" src="img/hairmaskpanjang.jpg" alt="" style="width: 100%; height: 200px; object-fit: cover;">
                                            <div class="gallery-overlay p-4">
                                                <h4 class="text-secondary">Hair Mask Panjang</h4>
                                            </div>
                                            <div class="search-icon">
                                                <a href="img/hairmaskpanjang.jpg" data-lightbox="Gallery-3" class="my-auto"><i class="fas fa-search-plus btn-primary btn-primary-outline-0 rounded-circle p-3"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="gallery-img">
                                            <img class="img-fluid rounded w-100" src="img/potongblow.jpg" alt="" style="width: 100%; height: 200px; object-fit: cover;">
                                            <div class="gallery-overlay p-4">
                                                <h4 class="text-secondary">Potong Blow</h4>
                                            </div>
                                            <div class="search-icon">
                                                <a href="img/potongblow.jpg" data-lightbox="Gallery-5" class="my-auto"><i class="fas fa-search-plus btn-primary btn-primary-outline-0 rounded-circle p-3"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="gallery-img">
                                            <img class="img-fluid rounded w-100" src="img/lashlift.jpg" alt="" style="width: 100%; height: 200px; object-fit: cover;">
                                            <div class="gallery-overlay p-4">
                                                <h4 class="text-secondary">Lashlift</h4>
                                            </div>
                                            <div class="search-icon">
                                                <a href="img/lashlift.jpg" data-lightbox="Gallery-6" class="my-auto"><i class="fas fa-search-plus btn-primary btn-primary-outline-0 rounded-circle p-3"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="gallery-img">
                                            <img class="img-fluid rounded w-100" src="img/smoothing.jpg" alt="" style="width: 100%; height: 200px; object-fit: cover;">
                                            <div class="gallery-overlay p-4">
                                                <h4 class="text-secondary">Smoothing</h4>
                                            </div>
                                            <div class="search-icon">
                                                <a href="img/smoothing.jpg" data-lightbox="Gallery-7" class="my-auto"><i class="fas fa-search-plus btn-primary btn-primary-outline-0 rounded-circle p-3"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="gallery-img">
                                            <img class="img-fluid rounded w-100" src="img/cucicurly.jpg" alt="" style="width: 100%; height: 200px; object-fit: cover;">
                                            <div class="gallery-overlay p-4">
                                                <h4 class="text-secondary">Cuci Curly</h4>
                                            </div>
                                            <div class="search-icon">
                                                <a href="img/cucicurly.jpg" data-lightbox="Gallery-8" class="my-auto"><i class="fas fa-search-plus btn-primary btn-primary-outline-0 rounded-circle p-3"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="tab-2" class="tab-pane fade show p-0">
                        <div class="row g-4">
                            <div class="col-lg-12">
                                <div class="row g-4">
                                    <div class="col-lg-3">
                                        <div class="gallery-img">
                                            <img class="img-fluid rounded w-100" src="img/salon.jpg" alt="">
                                            <div class="gallery-overlay p-4">
                                                <h4 class="text-secondary">Potong</h4>
                                            </div>
                                            <div class="search-icon">
                                                <a href="img/salon.jpg" data-lightbox="Gallery-9" class="my-auto"><i class="fas fa-search-plus btn-primary btn-primary-outline-0 rounded-circle p-3"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="gallery-img">
                                            <img class="img-fluid rounded w-100" src="img/potongblow.jpg" alt="">
                                            <div class="gallery-overlay p-4">
                                                <h4 class="text-secondary">Potong Blow</h4>
                                            </div>
                                            <div class="search-icon">
                                                <a href="img/potongblow.jpg" data-lightbox="Gallery-10" class="my-auto"><i class="fas fa-search-plus btn-primary btn-primary-outline-0 rounded-circle p-3"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="gallery-img">
                                            <img class="img-fluid rounded w-100" src="img/cucicatok.png" alt="">
                                            <div class="gallery-overlay p-4">
                                                <h4 class="text-secondary">Cuci Catok</h4>
                                            </div>
                                            <div class="search-icon">
                                                <a href="img/cucicatok.png" data-lightbox="Gallery-11" class="my-auto"><i class="fas fa-search-plus btn-primary btn-primary-outline-0 rounded-circle p-3"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="gallery-img">
                                            <img class="img-fluid rounded w-100" src="img/cuciblow.jpeg" alt="">
                                            <div class="gallery-overlay p-4">
                                                <h4 class="text-secondary">Potong Cuci Blow</h4>
                                            </div>
                                            <div class="search-icon">
                                                <a href="img/cuciblow.jpeg" data-lightbox="Gallery-12" class="my-auto"><i class="fas fa-search-plus btn-primary btn-primary-outline-0 rounded-circle p-3"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="gallery-img">
                                            <img class="img-fluid rounded w-100" src="img/cucicurly.jpg" alt="">
                                            <div class="gallery-overlay p-4">
                                                <h4 class="text-secondary">Cuci Curly</h4>
                                            </div>
                                            <div class="search-icon">
                                                <a href="img/cucicurly.jpg" data-lightbox="Gallery-12" class="my-auto"><i class="fas fa-search-plus btn-primary btn-primary-outline-0 rounded-circle p-3"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="gallery-img">
                                            <img class="img-fluid rounded w-100" src="img/smoothing.jpg" alt="">
                                            <div class="gallery-overlay p-4">
                                                <h4 class="text-secondary">Smoothing</h4>
                                            </div>
                                            <div class="search-icon">
                                                <a href="img/smoothing.jpg" data-lightbox="Gallery-12" class="my-auto"><i class="fas fa-search-plus btn-primary btn-primary-outline-0 rounded-circle p-3"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="gallery-img">
                                            <img class="img-fluid rounded w-100" src="img/potongcucitonic.jpg" alt="">
                                            <div class="gallery-overlay p-4">
                                                <h4 class="text-secondary">Potong Cuci Tonic</h4>
                                            </div>
                                            <div class="search-icon">
                                                <a href="img/potongcucitonic.jpg" data-lightbox="Gallery-12" class="my-auto"><i class="fas fa-search-plus btn-primary btn-primary-outline-0 rounded-circle p-3"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="tab-3" class="tab-pane fade show p-0">
                        <div class="row g-4">
                            <div class="col-lg-12">
                                <div class="row g-4">
                                    <div class="col-lg-3">
                                        <div class="gallery-img">
                                            <img class="img-fluid rounded w-100" src="img/facial_sari ayu.jpg" alt="">
                                            <div class="gallery-overlay p-4">
                                                <h4 class="text-secondary">Facial Sari Ayu</h4>
                                            </div>
                                            <div class="search-icon">
                                                <a href="img/facial_sari ayu.jpg" data-lightbox="Gallery-13" class="my-auto"><i class="fas fa-search-plus btn-primary btn-primary-outline-0 rounded-circle p-3"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="gallery-img">
                                            <img class="img-fluid rounded w-100" src="img/messagewajah.jpg" alt="">
                                            <div class="gallery-overlay p-4">
                                                <h4 class="text-secondary">Message Wajah</h4>
                                            </div>
                                            <div class="search-icon">
                                                <a href="img/messagewajah.jpg" data-lightbox="Gallery-14" class="my-auto"><i class="fas fa-search-plus btn-primary btn-primary-outline-0 rounded-circle p-3"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="gallery-img">
                                            <img class="img-fluid rounded w-100" src="img/lashlift.jpg" alt="">
                                            <div class="gallery-overlay p-4">
                                                <h4 class="text-secondary">Lashlift</h4>
                                            </div>
                                            <div class="search-icon">
                                                <a href="img/lashlift.jpg" data-lightbox="Gallery-15" class="my-auto"><i class="fas fa-search-plus btn-primary btn-primary-outline-0 rounded-circle p-3"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="gallery-img">
                                            <img class="img-fluid rounded w-100" src="img/facial_viva.jpg" alt="">
                                            <div class="gallery-overlay p-4">
                                                <h4 class="text-secondary">Facial Viva</h4>
                                            </div>
                                            <div class="search-icon">
                                                <a href="img/facial_viva.jpg" data-lightbox="Gallery-16" class="my-auto"><i class="fas fa-search-plus btn-primary btn-primary-outline-0 rounded-circle p-3"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="tab-4" class="tab-pane fade show p-0">
                        <div class="row g-4">
                            <div class="col-lg-12">
                                <div class="row g-4">
                                    <div class="col-lg-3">
                                        <div class="gallery-img">
                                            <img class="img-fluid rounded w-100" src="img/creambath.jpg" alt="">
                                            <div class="gallery-overlay p-4">
                                                <h4 class="text-secondary">Creambath</h4>
                                            </div>
                                            <div class="search-icon">
                                                <a href="img/creambath.jpg" data-lightbox="Gallery-17" class="my-auto"><i class="fas fa-search-plus btn-primary btn-primary-outline-0 rounded-circle p-3"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="gallery-img">
                                            <img class="img-fluid rounded w-100" src="img/hairmaskpanjang.jpg" alt="">
                                            <div class="gallery-overlay p-4">
                                                <h4 class="text-secondary">Hair Mask Panjang</h4>
                                            </div>
                                            <div class="search-icon">
                                                <a href="img/hairmaskpanjang.jpg" data-lightbox="Gallery-18" class="my-auto"><i class="fas fa-search-plus btn-primary btn-primary-outline-0 rounded-circle p-3"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="gallery-img">
                                            <img class="img-fluid rounded w-100" src="img/hairmaskmedium.jpg" alt="">
                                            <div class="gallery-overlay p-4">
                                                <h4 class="text-secondary">Hair Mask Medium</h4>
                                            </div>
                                            <div class="search-icon">
                                                <a href="img/hairmaskmedium.jpg" data-lightbox="Gallery-19" class="my-auto"><i class="fas fa-search-plus btn-primary btn-primary-outline-0 rounded-circle p-3"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="gallery-img">
                                            <img class="img-fluid rounded w-100" src="img/hairmaskpendek.jpg" alt="">
                                            <div class="gallery-overlay p-4">
                                                <h4 class="text-secondary">Hair Mask Pendek</h4>
                                            </div>
                                            <div class="search-icon">
                                                <a href="img/hairmaskpendek.jpg" data-lightbox="Gallery-20" class="my-auto"><i class="fas fa-search-plus btn-primary btn-primary-outline-0 rounded-circle p-3"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="tab-5" class="tab-pane fade show p-0">
                        <div class="row g-4">
                            <div class="col-lg-12">
                                <div class="row g-4">
                                    <div class="col-lg-3">
                                        <div class="gallery-img">
                                            <img class="img-fluid rounded w-100" src="img/facial_sari ayu.jpg" alt="">
                                            <div class="gallery-overlay p-4">
                                                <h4 class="text-secondary">Facial Sari Ayu</h4>
                                            </div>
                                            <div class="search-icon">
                                                <a href="img/facial_sari ayu.jpg" data-lightbox="Gallery-21" class="my-auto"><i class="fas fa-search-plus btn-primary btn-primary-outline-0 rounded-circle p-3"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="gallery-img">
                                            <img class="img-fluid rounded w-100" src="img/messagewajah.jpg" alt="">
                                            <div class="gallery-overlay p-4">
                                                <h4 class="text-secondary">Message Wajah</h4>
                                            </div>
                                            <div class="search-icon">
                                                <a href="img/messagewajah.jpg" data-lightbox="Gallery-22" class="my-auto"><i class="fas fa-search-plus btn-primary btn-primary-outline-0 rounded-circle p-3"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="gallery-img">
                                            <img class="img-fluid rounded w-100" src="img/lashlift.jpg" alt="">
                                            <div class="gallery-overlay p-4">
                                                <h4 class="text-secondary">Lashlift</h4>
                                            </div>
                                            <div class="search-icon">
                                                <a href="img/lashlift.jpg" data-lightbox="Gallery-23" class="my-auto"><i class="fas fa-search-plus btn-primary btn-primary-outline-0 rounded-circle p-3"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="gallery-img">
                                            <img class="img-fluid rounded w-100" src="img/gallery-14.jpg" alt="">
                                            <div class="gallery-overlay p-4">
                                                <h4 class="text-secondary">Face Massage</h4>
                                            </div>
                                            <div class="search-icon">
                                                <a href="img/gallery-14.jpg" data-lightbox="Gallery-24" class="my-auto"><i class="fas fa-search-plus btn-primary btn-primary-outline-0 rounded-circle p-3"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="gallery-img">
                                            <img class="img-fluid rounded w-100" src="img/gallery-4.jpg" alt="">
                                            <div class="gallery-overlay p-4">
                                                <h4 class="text-secondary">Face Massage</h4>
                                            </div>
                                            <div class="search-icon">
                                                <a href="img/gallery-4.jpg" data-lightbox="Gallery-25" class="my-auto"><i class="fas fa-search-plus btn-primary btn-primary-outline-0 rounded-circle p-3"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="gallery-img">
                                            <img class="img-fluid rounded w-100" src="img/gallery-8.jpg" alt="">
                                            <div class="gallery-overlay p-4">
                                                <h4 class="text-secondary">Face Massage</h4>
                                            </div>
                                            <div class="search-icon">
                                                <a href="img/gallery-8.jpg" data-lightbox="Gallery-26" class="my-auto"><i class="fas fa-search-plus btn-primary btn-primary-outline-0 rounded-circle p-3"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- gallery End -->

    <!-- Pricing Start -->
    <div class="container-fluid pricing py-5">
        <div class="container py-5">
            <div class="owl-carousel pricing-carousel">
                <div class="pricing-item">
                    <div class="pricing-content rounded">
                        <div class="d-flex align-items-center justify-content-between bg-light rounded-top border-3 border-bottom border-primary p-4">
                            <h3 class="text-primary text-uppercase m-0">Cuci Blow
                                <br>
                                <small class="text-muted" style="font-size: 17px; line-height: 40px;">Rp 20.000</small>
                            </h3>
                        </div>
                        <div class="p-4">
                            <img src="img/cuciblow.jpeg" class="img-fluid rounded mb-4" alt="Service Image" style="width: 100%; height: 200px; object-fit: cover;">
                        </div>
                    </div>
                </div>
                <div class="pricing-item">
                    <div class="pricing-content rounded">
                        <div class="d-flex align-items-center justify-content-between bg-light rounded-top border-3 border-bottom border-primary p-4">
                            <h3 class="text-primary text-uppercase m-0">Cuci Curly
                                <br>
                                <small class="text-muted" style="font-size: 17px; line-height: 40px;">Rp 20.000</small>
                            </h3>
                        </div>
                        <div class="p-4">
                            <img src="img/cucicurly.jpg" class="img-fluid rounded mb-4" alt="Service Image" style="width: 100%; height: 200px; object-fit: cover;">
                        </div>
                    </div>
                </div>
                <div class="pricing-item">
                    <div class="pricing-content rounded">
                        <div class="d-flex align-items-center justify-content-between bg-light rounded-top border-3 border-bottom border-primary p-4">
                            <h3 class="text-primary text-uppercase m-0">Potong
                                <br>
                                <small class="text-muted" style="font-size: 17px; line-height: 40px;">Rp 15.000</small>
                            </h3>
                        </div>
                        <div class="p-4">
                            <img src="img/potong.jpg" class="img-fluid rounded mb-4" alt="Service Image" style="width: 100%; height: 200px; object-fit: cover;">
                        </div>
                    </div>
                </div>
                <div class="pricing-item">
                    <div class="pricing-content rounded">
                        <div class="d-flex align-items-center justify-content-between bg-light rounded-top border-3 border-bottom border-primary p-4">
                            <h3 class="text-primary text-uppercase m-0">Smoothing
                                <br>
                                <small class="text-muted" style="font-size: 17px; line-height: 40px;">Rp 200.000</small>
                            </h3>
                        </div>
                        <div class="p-4">
                            <img src="img/smoothing.jpg" class="img-fluid rounded mb-4" alt="Service Image" style="width: 100%; height: 200px; object-fit: cover;">
                        </div>
                    </div>
                </div>
                <div class="pricing-item">
                    <div class="pricing-content rounded">
                        <div class="d-flex align-items-center justify-content-between bg-light rounded-top border-3 border-bottom border-primary p-4">
                            <h3 class="text-primary text-uppercase m-0">Lashlift
                                <br>
                                <small class="text-muted" style="font-size: 17px; line-height: 40px;">Rp 40.000</small>
                            </h3>
                        </div>
                        <div class="p-4">
                            <img src="img/lashlift.jpg" class="img-fluid rounded mb-4" alt="Service Image" style="width: 100%; height: 200px; object-fit: cover;">
                        </div>
                    </div>
                </div>
                <div class="pricing-item">
                    <div class="pricing-content rounded">
                        <div class="d-flex align-items-center justify-content-between bg-light rounded-top border-3 border-bottom border-primary p-4">
                            <h3 class="text-primary text-uppercase m-0">Creambath
                                <br>
                                <small class="text-muted" style="font-size: 17px; line-height: 40px;">Rp 50.000</small>
                            </h3>
                        </div>
                        <div class="p-4">
                            <img src="img/creambath.jpg" class="img-fluid rounded mb-4" alt="Service Image" style="width: 100%; height: 200px; object-fit: cover;">
                        </div>
                    </div>
                </div>
                <div class="pricing-item">
                    <div class="pricing-content rounded">
                        <div class="d-flex align-items-center justify-content-between bg-light rounded-top border-3 border-bottom border-primary p-4">
                            <h3 class="text-primary text-uppercase m-0">Facial Viva
                                <br>
                                <small class="text-muted" style="font-size: 17px; line-height: 40px;">Rp 30.000</small>
                            </h3>
                        </div>
                        <div class="p-4">
                            <img src="img/facial_viva.jpg" class="img-fluid rounded mb-4" alt="Service Image" style="width: 100%; height: 200px; object-fit: cover;">
                        </div>
                    </div>
                </div>
                <div class="pricing-item">
                    <div class="pricing-content rounded">
                        <div class="d-flex align-items-center justify-content-between bg-light rounded-top border-3 border-bottom border-primary p-4">
                            <h4 class="text-primary text-uppercase m-0">Facial Sari Ayu
                                <br>
                                <small class="text-muted" style="font-size: 17px; line-height: 40px;">Rp 35.000</small>
                            </h4>
                        </div>
                        <div class="p-4">
                            <img src="img/facial_sari ayu.jpg" class="img-fluid rounded mb-4" alt="Service Image" style="width: 100%; height: 200px; object-fit: cover;">
                        </div>
                    </div>
                </div>
                <div class="pricing-item">
                    <div class="pricing-content rounded">
                        <div class="d-flex align-items-center justify-content-between bg-light rounded-top border-3 border-bottom border-primary p-4">
                            <h4 class="text-primary text-uppercase m-0">Message Wajah
                                <br>
                                <small class="text-muted" style="font-size: 17px; line-height: 40px;">Rp 25.000</small>
                            </h4>
                        </div>
                        <div class="p-4">
                            <img src="img/messagewajah.jpg" class="img-fluid rounded mb-4" alt="Service Image" style="width: 100%; height: 200px; object-fit: cover;">
                        </div>
                    </div>
                </div>
                <div class="pricing-item">
                    <div class="pricing-content rounded">
                        <div class="d-flex align-items-center justify-content-between bg-light rounded-top border-3 border-bottom border-primary p-4">
                            <h4 class="text-primary text-uppercase m-0">Hair Mask Panjang
                                <br>
                                <small class="text-muted" style="font-size: 17px; line-height: 40px;">Rp 45.000</small>
                            </h4>
                        </div>
                        <div class="p-4">
                            <img src="img/hairmaskpanjang.jpg" class="img-fluid rounded mb-4" alt="Service Image" style="width: 100%; height: 200px; object-fit: cover;">
                        </div>
                    </div>
                </div>
                <div class="pricing-item">
                    <div class="pricing-content rounded">
                        <div class="d-flex align-items-center justify-content-between bg-light rounded-top border-3 border-bottom border-primary p-4">
                            <h4 class="text-primary text-uppercase m-0">Hair Mask Medium
                                <br>
                                <small class="text-muted" style="font-size: 17px; line-height: 40px;">Rp 40.000</small>
                            </h4>
                        </div>
                        <div class="p-4">
                            <img src="img/hairmaskmedium.jpg" class="img-fluid rounded mb-4" alt="Service Image" style="width: 100%; height: 200px; object-fit: cover;">
                        </div>
                    </div>
                </div>
                <div class="pricing-item">
                    <div class="pricing-content rounded">
                        <div class="d-flex align-items-center justify-content-between bg-light rounded-top border-3 border-bottom border-primary p-4">
                            <h4 class="text-primary text-uppercase m-0">Hair Mask Pendek
                                <br>
                                <small class="text-muted" style="font-size: 17px; line-height: 40px;">Rp 35.000</small>
                            </h4>
                        </div>
                        <div class="p-4">
                            <img src="img/hairmaskpendek.jpg" class="img-fluid rounded mb-4" alt="Service Image" style="width: 100%; height: 200px; object-fit: cover;">
                        </div>
                    </div>
                </div>
                <div class="pricing-item">
                    <div class="pricing-content rounded">
                        <div class="d-flex align-items-center justify-content-between bg-light rounded-top border-3 border-bottom border-primary p-4">
                            <h4 class="text-primary text-uppercase m-0">Potong Cuci Tonic
                                <br>
                                <small class="text-muted" style="font-size: 17px; line-height: 40px;">Rp 15.000</small>
                            </h4>
                        </div>
                        <div class="p-4">
                            <img src="img/potongcucitonic.jpg" class="img-fluid rounded mb-4" alt="Service Image" style="width: 100%; height: 200px; object-fit: cover;">
                        </div>
                    </div>
                </div>
                <div class="pricing-item">
                    <div class="pricing-content rounded">
                        <div class="d-flex align-items-center justify-content-between bg-light rounded-top border-3 border-bottom border-primary p-4">
                            <h4 class="text-primary text-uppercase m-0">Potong Cuci Blow
                                <br>
                                <small class="text-muted" style="font-size: 17px; line-height: 40px;">Rp 15.000</small>
                            </h4>
                        </div>
                        <div class="p-4">
                            <img src="img/potongblow.jpg" class="img-fluid rounded mb-4" alt="Service Image" style="width: 100%; height: 200px; object-fit: cover;">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Pricing End -->

    <!-- Team Start -->
    {{-- <div class="container-fluid team py-5">
        <div class="container py-5">
            <div class="text-center mx-auto mb-5" style="max-width: 800px;">
                <p class="fs-4 text-uppercase text-primary">Spa Specialist</p>
                <h1 class="display-4 mb-4">Spa & Beauty Specialist</h1>
            </div>
            <div class="row g-4">
                <div class="col-md-6 col-lg-6 col-xl-3">
                    <div class="team-item">
                        <div class="team-img rounded-top">
                            <img src="img/team-1.png" class="img-fluid w-100 rounded-top bg-light" alt="">
                        </div>
                        <div class="team-text rounded-bottom text-center p-4">
                            <h3 class="text-white">Oliva Mia</h3>
                            <p class="mb-0 text-white">Spa & Beauty Expert</p>
                        </div>
                        <div class="team-social">
                            <a class="btn btn-light btn-light-outline-0 btn-square rounded-circle mb-2" href="#"><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-light btn-light-outline-0 btn-square rounded-circle mb-2" href="#"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-light btn-light-outline-0 btn-square rounded-circle mb-2" href="#"><i class="fab fa-linkedin-in"></i></a>
                            <a class="btn btn-light btn-light-outline-0 btn-square rounded-circle" href="#"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-3">
                    <div class="team-item">
                        <div class="team-img rounded-top">
                            <img src="img/team-2.png" class="img-fluid w-100 rounded-top bg-light" alt="">
                        </div>
                        <div class="team-text rounded-bottom text-center p-4">
                            <h3 class="text-white">Charlotte Ross</h3>
                            <p class="mb-0 text-white">Spa & Beauty Expert</p>
                        </div>
                        <div class="team-social">
                            <a class="btn btn-light btn-light-outline-0 btn-square rounded-circle mb-2" href="#"><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-light btn-light-outline-0 btn-square rounded-circle mb-2" href="#"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-light btn-light-outline-0 btn-square rounded-circle mb-2" href="#"><i class="fab fa-linkedin-in"></i></a>
                            <a class="btn btn-light btn-light-outline-0 btn-square rounded-circle" href="#"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-3">
                    <div class="team-item">
                        <div class="team-img rounded-top">
                            <img src="img/team-3.png" class="img-fluid w-100 rounded-top bg-light" alt="">
                        </div>
                        <div class="team-text rounded-bottom text-center p-4">
                            <h3 class="text-white">Amelia Luna</h3>
                            <p class="mb-0 text-white">Spa & Beauty Expert</p>
                        </div>
                        <div class="team-social">
                            <a class="btn btn-light btn-light-outline-0 btn-square rounded-circle mb-2" href="#"><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-light btn-light-outline-0 btn-square rounded-circle mb-2" href="#"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-light btn-light-outline-0 btn-square rounded-circle mb-2" href="#"><i class="fab fa-linkedin-in"></i></a>
                            <a class="btn btn-light btn-light-outline-0 btn-square rounded-circle" href="#"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-3">
                    <div class="team-item">
                        <div class="team-img rounded-top">
                            <img src="img/team-4.png" class="img-fluid w-100 rounded-top bg-light" alt="">
                        </div>
                        <div class="team-text rounded-bottom text-center p-4">
                            <h3 class="text-white">Isabella Evelyn</h3>
                            <p class="mb-0 text-white">Spa & Beauty Expert</p>
                        </div>
                        <div class="team-social">
                            <a class="btn btn-light btn-light-outline-0 btn-square rounded-circle mb-2" href="#"><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-light btn-light-outline-0 btn-square rounded-circle mb-2" href="#"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-light btn-light-outline-0 btn-square rounded-circle mb-2" href="#"><i class="fab fa-linkedin-in"></i></a>
                            <a class="btn btn-light btn-light-outline-0 btn-square rounded-circle" href="#"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <!-- Team End -->

    <!-- Testimonial Start -->
    {{-- <div class="container-fluid testimonial py-5">
        <div class="container py-5">
            <div class="text-center mx-auto mb-5" style="max-width: 800px;">
                <p class="fs-4 text-uppercase text-primary">Testimonial</p>
                <h1 class="display-4 mb-4 text-white">What Our Clients Say!</h1>
            </div>
            <div class="owl-carousel testimonial-carousel">
                <div class="testimonial-item rounded p-4">
                    <div class="row">
                        <div class="col-4">
                            <div class="d-flex flex-column mx-auto">
                                <div class="rounded-circle mb-4" style="border: dashed; border-color: var(--bs-white);">
                                    <img src="img/testimonial-1.jpg" class="img-fluid rounded-circle" alt="">
                                </div>
                                <div class="text-center">
                                    <h4 class="mb-2 text-primary">Person Name</h4>
                                    <p class="m-0 text-white">Profession</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-8">
                            <div class="position-absolute" style="top: 20px; right: 25px;">
                                <i class="fa fa-quote-right fa-2x text-secondary"></i>
                            </div>
                            <div class="testimonial-content">
                                <div class="d-flex mb-4">
                                    <i class="fas fa-star text-primary"></i>
                                    <i class="fas fa-star text-primary"></i>
                                    <i class="fas fa-star text-primary"></i>
                                    <i class="fas fa-star text-primary"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                                <p class="fs-5 mb-0 text-white">Lorem ipsum dolor sit amet elit, sed do eiusmod tempor ut labore et dolore magna aliqua is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="testimonial-item rounded p-4">
                    <div class="row">
                        <div class="col-4">
                            <div class="d-flex flex-column mx-auto">
                                <div class="rounded-circle mb-4" style="border: dashed; border-color: var(--bs-white);">
                                    <img src="img/testimonial-2.jpg" class="img-fluid rounded-circle" alt="">
                                </div>
                                <div class="text-center">
                                    <h4 class="mb-2 text-primary">Person Name</h4>
                                    <p class="m-0 text-white">Profession</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-8">
                            <div class="position-absolute" style="top: 20px; right: 25px;">
                                <i class="fa fa-quote-right fa-2x text-secondary"></i>
                            </div>
                            <div class="testimonial-content">
                                <div class="d-flex mb-4">
                                    <i class="fas fa-star text-primary"></i>
                                    <i class="fas fa-star text-primary"></i>
                                    <i class="fas fa-star text-primary"></i>
                                    <i class="fas fa-star text-primary"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                                <p class="fs-5 mb-0 text-white">Lorem ipsum dolor sit amet elit, sed do eiusmod tempor ut labore et dolore magna aliqua is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="testimonial-item rounded p-4">
                    <div class="row">
                        <div class="col-4">
                            <div class="d-flex flex-column mx-auto">
                                <div class="rounded-circle mb-4" style="border: dashed; border-color: var(--bs-white);">
                                    <img src="img/testimonial-3.jpg" class="img-fluid rounded-circle" alt="">
                                </div>
                                <div class="text-center">
                                    <h4 class="mb-2 text-primary">Person Name</h4>
                                    <p class="m-0 text-white">Profession</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-8">
                            <div class="position-absolute" style="top: 20px; right: 25px;">
                                <i class="fa fa-quote-right fa-2x text-secondary"></i>
                            </div>
                            <div class="testimonial-content">
                                <div class="d-flex mb-4">
                                    <i class="fas fa-star text-primary"></i>
                                    <i class="fas fa-star text-primary"></i>
                                    <i class="fas fa-star text-primary"></i>
                                    <i class="fas fa-star text-primary"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                                <p class="fs-5 mb-0 text-white">Lorem ipsum dolor sit amet elit, sed do eiusmod tempor ut labore et dolore magna aliqua is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <!-- Testimonial End -->

    <!-- Contact Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="row g-4 align-items-center">
                <div class="col-12">
                    <div class="row g-4">
                        <div class="col-lg-4">
                            <div class="d-inline-flex bg-light w-100 border border-primary p-4 rounded">
                                <i class="fas fa-map-marker-alt fa-2x text-primary me-4"></i>
                                <div>
                                    <h4>Alamat</h4>
                                    <p class="mb-0">Jl. New Puri Cempaka. No.b7</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="d-inline-flex bg-light w-100 border border-primary p-4 rounded">
                                <i class="fas fa-envelope fa-2x text-primary me-4"></i>
                                <div>
                                    <h4>Email</h4>
                                    <p class="mb-0">aylanazefanya@gmail.com</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="d-inline-flex bg-light w-100 border border-primary p-4 rounded">
                                <i class="fa fa-phone-alt fa-2x text-primary me-4"></i>
                                <div>
                                    <h4>Telephone</h4>
                                    <p class="mb-0">+62 821-3939-1288</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="rounded">
                        <iframe class="rounded-top w-100" 
                        style="height: 450px; margin-bottom: -6px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d415.1339657912099!2d113.68232679570548!3d-8.158131259752304!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd6946e79d18017%3A0xc573149f43de6f76!2sJl.%20New%20Puri%20Cemp.%20No.b7%2C%20Kedawung%20Kidul%2C%20Gebang%2C%20Kec.%20Patrang%2C%20Kabupaten%20Jember%2C%20Jawa%20Timur%2068117!5e0!3m2!1sid!2sid!4v1716053299849!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"
                        loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                    <div class=" text-center p-4 rounded-bottom bg-primary">
                        <h4 class="text-white fw-bold">Follow Us</h4>
                        <div class="d-flex align-items-center justify-content-center">
                            {{-- <a href="#" class="btn btn-light btn-light-outline-0 btn-square rounded-circle me-3"><i class="fab fa-facebook-f"></i></a> --}}
                            {{-- <a href="#" class="btn btn-light btn-light-outline-0 btn-square rounded-circle me-3"><i class="fab fa-twitter"></i></a> --}}
                            <a href="https://www.instagram.com/_lilyansalon?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw==" class="btn btn-light btn-light-outline-0 btn-square rounded-circle me-3"><i class="fab fa-instagram"></i></a>
                            {{-- <a href="#" class="btn btn-light btn-light-outline-0 btn-square rounded-circle"><i class="fab fa-linkedin-in"></i></a> --}}
                        </div>   
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->
{{-- </main> --}}
@endsection