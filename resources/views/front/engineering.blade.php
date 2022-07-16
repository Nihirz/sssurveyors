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
            <li>Engineering Details</li>
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
                <img src="assets/img/services/Engineering.jpg" alt="Engineering.jpg" style="height: 500px !important;"> 
              </div>

            </div>
          </div>

          <div class="col-lg-4">
            <div class="portfolio-info">
              <h3>ENGINEERING information</h3>
              <!-- <ul>
                <li><strong>Category</strong>: Web design</li>
                <li><strong>Client</strong>: ASU Company</li>
                <li><strong>Project date</strong>: 01 March, 2020</li>
                <li><strong>Project URL</strong>: <a href="#">www.example.com</a></li>
              </ul> -->
            </div>
            <div class="portfolio-description">
              <h2>ENGINEERING</h2>
              <p>
                Engineering equipment & projects are subject to some of the harshest conditions. The resulting effect is breakdowns, leading to damages. We have expert 
                engineering surveyors, with a strong background, capable of identifying, assessing and valuing damages to the best possible extent. Over our 3 decades of
                experience, we have worked with almost every company in the country, and provided them with swift and best-in-the-market claims reports. Some highlights of our expertise in Engineering Surveys include:
              </p>
              <p>
                <ul>
                  <li>Civil Construction & Erection Risks Survey of equipment & plants/ Telecom / ATM</li>
                  <li> Cause and Effect investigation All major engineering losses</li>
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