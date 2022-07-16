@extends('layouts.app')
@section('content')

  <main id="main">

    <!-- ======= Breadcrumbs Section ======= -->
    <section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Portfolio Details</h2>
          <ol>
            <li><a href="/">Home</a></li>
            <!-- <li><a href="portfolio.html">Portfolio</a></li> -->
            <li>Fire Details</li>
          </ol>
        </div>

      </div>
    </section><!-- Breadcrumbs Section -->

    <!-- ======= Portfolio Details Section ======= -->
    <section id="portfolio-details" class="portfolio-details">
      <div class="container">

        <div class="row gy-4">

          <div class="col-lg-8">
            <div class="portfolio-details-slider swiper">
              
              <div class="swiper-slide">
                <img src="{{asset('assets/img/services/Fire.jpg')}}" alt="fire.jpg">
              </div>

            </div>
          </div>

          <div class="col-lg-4">
            <div class="portfolio-info">
              <h3>Project information</h3>
              <ul>
                <!-- <li><strong>Category</strong>: Fire Services</li> -->
                <!-- <li><strong>Client</strong>: ASU Company</li> -->
                <!-- <li><strong>Project date</strong>: 01 March, 2020</li> -->
                <!-- <li><strong>Project URL</strong>: <a href="#">www.example.com</a></li> -->
              </ul>
            </div>
            <div class="portfolio-description">
              <h2>Fire Safty</h2>
              <p>
                All immovable and movable property located is prone
                to risks like fire, earthquakes, lightning and damages
                through other means. We have experienced assessors,
                with specialty in Fire and Allied Risks assessment, to
                ensure that your claim is diligently handled, swiftly
                processed and adequately valued so as to minimize
                your loss. Some highlights of our areas of expertise
                include:                
              </p>
              <p>
                <ul>
                  <li>Fire</li>
                  <li>Earthquakes</li>
                  <li>Flood / Inundation/ Explosion / Implosion</li>
                  <li>Riot, Strike, Malicious Damage</li>
                </ul>
              </p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Portfolio Details Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  @endsection