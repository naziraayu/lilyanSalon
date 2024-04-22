{{-- navbar landing page --}}
<!-- ======= Header ======= -->
<header id="header" class="header fixed-top d-flex align-items-center">
    <div class="container-fluid d-flex align-items-center justify-content-between">

      <a href="{{ url('dashboard') }}" class="logo d-flex align-items-center me-auto me-xl-0">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        {{-- <img src="img/lily ann.png" alt=""> --}}
        <h1>Lilyan Salon</h1>
        <span>.</span>
      </a>

      <!-- Nav Menu -->
      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="#hero" class="active">Home</a></li>
          {{-- <li><a href="index.html#about">Tentang</a></li> --}}
          <li><a href="#features">Service</a></li>
          <li><a href="#pricing">Price List</a></li>
          {{-- <li><a href="index.html#team">Team</a></li> --}}
          <li><a href="https://www.instagram.com/_lilyansalon/">Social Media</a></li>
          {{-- <li class="dropdown has-dropdown"><a href="#"><span>Dropdown</span> <i class="bi bi-chevron-down"></i></a>
            <ul class="dd-box-shadow">
              <li><a href="#">Dropdown 1</a></li>
              <li class="dropdown has-dropdown"><a href="#"><span>Deep Dropdown</span> <i class="bi bi-chevron-down"></i></a>
                <ul class="dd-box-shadow">
                  <li><a href="#">Deep Dropdown 1</a></li>
                  <li><a href="#">Deep Dropdown 2</a></li>
                  <li><a href="#">Deep Dropdown 3</a></li>
                  <li><a href="#">Deep Dropdown 4</a></li>
                  <li><a href="#">Deep Dropdown 5</a></li>
                </ul>
              </li>
              <li><a href="#">Dropdown 2</a></li>
              <li><a href="#">Dropdown 3</a></li>
              <li><a href="#">Dropdown 4</a></li>
            </ul>
          </li> --}}
          <li><a href="#contact">Contact</a></li>
        </ul>

        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav><!-- End Nav Menu -->

      <a class="btn-getstarted" href="{{ route('login') }}">Owner Login</a>

    </div>
  </header><!-- End Header -->