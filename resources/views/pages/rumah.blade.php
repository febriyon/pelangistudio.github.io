@extends('layouts.app')

@section('title', 'Rumah tinggal pribadi')

@section('content')

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <ol>
          <li><a href="{{ route('home') }}">Home</a></li>
          <li>Rumah tinggal pribadi</li>
        </ol>

      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio section-bg">
      <div class="container">

        <div class="row portfolio-container" data-aos="fade-up">

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="frontend/assets/img/portfolio/rumah/1.png" class="img-fluid" alt="">
              <div class="portfolio-info">
                <div class="portfolio-links">
                  <a href="frontend/assets/img/portfolio/rumah/1.png" data-gall="portfolioGallery" class="venobox" title="Hotel"><i class="bx bx-zoom-in"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-wrap">
              <img src="frontend/assets/img/portfolio/rumah/2.png" class="img-fluid" alt="">
              <div class="portfolio-info">
                <div class="portfolio-links">
                  <a href="frontend/assets/img/portfolio/rumah/2.png" data-gall="portfolioGallery" class="venobox" title="Cafe"><i class="bx bx-zoom-in"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="frontend/assets/img/portfolio/rumah/3.png" class="img-fluid" alt="">
              <div class="portfolio-info">
                <div class="portfolio-links">
                  <a href="frontend/assets/img/portfolio/rumah/3.png" data-gall="portfolioGallery" class="venobox" title="Poli Gigi"><i class="bx bx-zoom-in"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <img src="frontend/assets/img/portfolio/rumah/5.png" class="img-fluid" alt="">
              <div class="portfolio-info">
                <div class="portfolio-links">
                  <a href="frontend/assets/img/portfolio/rumah/5.png" data-gall="portfolioGallery" class="venobox" title="Koperasi Simpan Pinjam"><i class="bx bx-zoom-in"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-wrap">
              <img src="frontend/assets/img/portfolio/rumah/6.png" class="img-fluid" alt="">
              <div class="portfolio-info">
                <div class="portfolio-links">
                  <a href="frontend/assets/img/portfolio/rumah/6.png" data-gall="portfolioGallery" class="venobox" title="Hotel"><i class="bx bx-zoom-in"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="frontend/assets/img/portfolio/rumah/7.png" class="img-fluid" alt="">
              <div class="portfolio-info">
                <div class="portfolio-links">
                  <a href="frontend/assets/img/portfolio/rumah/7.png" data-gall="portfolioGallery" class="venobox" title="Residence"><i class="bx bx-zoom-in"></i></a>
                </div>
              </div>
            </div>
          </div>

    
        </div>

      </div>
    </section><!-- End Portfolio Section -->

  </main><!-- End #main -->

  @endsection