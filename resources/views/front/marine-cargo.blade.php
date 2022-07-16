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
            <li>Marine Details</li>
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
                <img src="{{asset('assets/img/services/Marine.jpeg')}}" alt="Marine.jpeg">
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
              <h2>Marine Safty</h2>
              <p>Marine Cargo takes longer in transit, and ipso facto,it is subject to more risks. That's why; we have employed expert Marine surveyors, with a keen eye for cargo and hull/machinery surveys. Our
                surveyors are also well versed with loss prevention measures of cargo </p>
              <p>
                <p>In cases of damage or loss, we work diligently to protect our client within the limits of the cargo insurance policy, in adherence to the ethical standards, that we are respected in the industry for. Our Marine Insurance Surveys are in compliance With all the requisite standards to ensure your claim delivery process is smooth, swift and trouble free. Our area of expertise in Marine Cargo includes:
                  </p>
                <ul>
                  <li>Marine Cargo Risk and Liability</li>
                  <li>Services Loss Investigation</li>
                  <li>Loss due to Fire and accident in the transporting vehicles,</li>
                  <li>Loss due to Jerks and Jolts during transit</li>
                  <li>Loss due to Heavy Rain in transit</li>
                  <li>Loss due to Hijacking of vehicles during transit</li>
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