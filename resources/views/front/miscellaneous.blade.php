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
            <li>Miscellaneous Details</li>
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
                <img src="{{asset('assets/img/services/Miscellaneous.jpeg')}}" alt="Miscellaneous.jpeg">
              </div>

            </div>
          </div>

          <div class="col-lg-4">
            <div class="portfolio-info">
              <h3>Miscellaneous information</h3>
              <ul>
                <!-- <li><strong>Category</strong>: Fire Services</li> -->
                <!-- <li><strong>Client</strong>: ASU Company</li> -->
                <!-- <li><strong>Project date</strong>: 01 March, 2020</li> -->
                <!-- <li><strong>Project URL</strong>: <a href="#">www.example.com</a></li> -->
              </ul>
            </div>
            <div class="portfolio-description">
              <h2>Miscellaneous Safty</h2>
              <p>We have specialists to handle this chunk of insurance claim survey across India. They begin by identifying, the nature of the loss, and subsequently move to assessing and providing the best possible monetary resolution to your claims. Our services and expertise in this segment include:</p>
              <p>
                <ul>
                  <li>Financial line coverage</li>
                  <li>Robbery / Burglary Claims</li>
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