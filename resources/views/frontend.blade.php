@extends('layouts.master')

@section('title', 'Orbit - Home')

@section('content')
  <!-- Header Section -->
  <header id="header" class="header d-flex align-items-center sticky-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center justify-content-between">

      <a href="#" class="logo d-flex align-items-center text-decoration-none">
        <h1 class="sitename">Orbit</h1>
      </a>

      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="#" class="active">Home</a></li>
          <li><a href="#">About</a></li>
          <li><a href="#">Services</a></li>
          <li><a href="#">Portfolio</a></li>
          <li><a href="#">Team</a></li>
          <li class="dropdown"><a href="#"><span>Dropdown</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
            <ul>
              <li><a href="#">Dropdown 1</a></li>
              <li><a href="#">Dropdown 2</a></li>
            </ul>
          </li>
          <li><a href="#">Contact</a></li>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>

      <!-- Mengarahkan tombol pendaftaran awal menjadi pintu masuk halaman login sesuai alur instruksi -->
      <a class="btn-getstarted" href="{{ route('login') }}">Login</a>

    </div>
  </header>

  <main class="main">

    <!-- Hero Section -->
    <section id="hero" class="hero section">

      <div class="container">
        <div class="row gy-4">
          
          <!-- Bagian Teks & Tombol Utama (Sisi Kiri) -->
          <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center" data-aos="fade-up">
            <p class="text-uppercase fw-bold text-primary mb-2" style="letter-spacing: 1px; font-size: 13px;">• Premium Digital Solutions</p>
            <h1>Crafting Exceptional Digital Experiences</h1>
            <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae ultricies eget.</p>
            <div class="d-flex">
              <a href="#" class="btn-get-started">Explore Services</a>
              <a href="https://youtube.com" class="glightbox btn-watch-video d-flex align-items-center"><i class="bi bi-play-circle"></i><span>Watch Video</span></a>
            </div>
          </div>

          <!-- Bagian 4 Grid Kotak Statistik (Sisi Kanan) -->
          <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-out">
            <div class="row gy-4">

              <!-- Card 1: Projects Launched (Berwarna Biru Aktif) -->
              <div class="col-md-6">
                <div class="stats-item d-flex flex-column justify-content-center align-items-center text-white" style="background-color: #0099ff; border-radius: 10px; padding: 30px; min-height: 150px;">
                  <div class="d-flex align-items-center mb-2">
                    <i class="bi bi-rocket-takeoff fs-2 me-2"></i>
                    <span data-purecounter-start="0" data-purecounter-end="150" data-purecounter-duration="1" class="purecounter fs-2 fw-bold">150+</span>
                  </div>
                  <p class="mb-0 small" style="opacity: 0.85;">Projects Launched</p>
                </div>
              </div>

              <!-- Card 2: Client Satisfaction -->
              <div class="col-md-6">
                <div class="stats-item d-flex flex-column justify-content-center align-items-center bg-white shadow-sm" style="border-radius: 10px; padding: 30px; min-height: 150px; border: 1px solid #f1f5f9;">
                  <div class="d-flex align-items-center mb-2">
                    <i class="bi bi-heart fs-2 text-primary me-2"></i>
                    <span data-purecounter-start="0" data-purecounter-end="98" data-purecounter-duration="1" class="purecounter fs-2 fw-bold text-dark">98%</span>
                  </div>
                  <p class="mb-0 small text-muted">Client Satisfaction</p>
                </div>
              </div>

              <!-- Card 3: Years Experience -->
              <div class="col-md-6">
                <div class="stats-item d-flex flex-column justify-content-center align-items-center bg-white shadow-sm" style="border-radius: 10px; padding: 30px; min-height: 150px; border: 1px solid #f1f5f9;">
                  <div class="d-flex align-items-center mb-2">
                    <i class="bi bi-lightbulb fs-2 text-primary me-2"></i>
                    <span data-purecounter-start="0" data-purecounter-end="12" data-purecounter-duration="1" class="purecounter fs-2 fw-bold text-dark">12+</span>
                  </div>
                  <p class="mb-0 small text-muted">Years Experience</p>
                </div>
              </div>

              <!-- Card 4: Team Experts -->
              <div class="col-md-6">
                <div class="stats-item d-flex flex-column justify-content-center align-items-center bg-white shadow-sm" style="border-radius: 10px; padding: 30px; min-height: 150px; border: 1px solid #f1f5f9;">
                  <div class="d-flex align-items-center mb-2">
                    <i class="bi bi-briefcase fs-2 text-primary me-2"></i>
                    <span data-purecounter-start="0" data-purecounter-end="40" data-purecounter-duration="1" class="purecounter fs-2 fw-bold text-dark">40+</span>
                  </div>
                  <p class="mb-0 small text-muted">Team Experts</p>
                </div>
              </div>

            </div>
          </div>

        </div>
      </div>

    </section>

  </main>
@endsection
