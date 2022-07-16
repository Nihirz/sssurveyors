@extends('layouts.app')
@section('content')
  <!-- ======= Header ======= -->
  
  <main id="main">

    <!-- ======= Breadcrumbs Section ======= -->
    <section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Portfolio Details</h2>
          <ol>
            <li><a href="/">Home</a></li>
            <!-- <li><a href="portfolio.html">Portfolio</a></li> -->
            <li>Crop Details</li>
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
                <img src="{{asset('assets/img/services/Crop.jpeg')}}" alt="Crop.jpeg">
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
              <h2>Crop Safty</h2>
              <p>We provides customized services to banks, insurance, re- insurance companies, agro based companies, farmers producers organizations, government, farmers organizations, MFIs, NGOs, SHGs on Crop Insurance, Micro-insurance, Microfinance, Government schemes for rural and agriculture sector. Data punching and data management relating to insurance schemes like PMFBY for Crop Insurance, PMJJY, and PM Jan Dhan Bima. Monitoring/supervision/audit of Crop Cutting Experiments, Automated Weather Stations and carry out loss monitoring/assessment. Arrange risk assessment; follow up with insurers for legitimate claims of farmers </p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Portfolio Details Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  @endsection