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
            <li>Catastrophic  Details</li>
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
                <img src="{{asset('assets/img/services/CAT.jpg')}}" alt="CAT.jpg">
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
              <h2>Catastrophic  Safty</h2>
              <p>
                Superintend manages a catastrophe operation. Getting the affected area running is our priority. The set-up and running of a temporary location or multiple locations, requires a lot of expertise and skill, which our team has developed from practical experience. To facilitate the response, we provide a single point of contact in our Catastrophe Director, who is responsible for managing and coordinating catastrophe operations.Our communication and IT system gives us real-time status and details of the extent of damage at ground zero, through our CAT bulletins and up-to-date data collection.
              </p>
              
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Portfolio Details Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
@endsection