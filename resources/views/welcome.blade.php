  @extends('layouts.app')
  @section('content')
  
<!-- ======= Hero Section ======= -->
<section id="hero">
  <div class="hero-container" data-aos="fade-up">
    <h2 style="text-transform: none;">India’s 1st IRDAI approved CROP Surveyors PVT LTD firm.</h2>
      <h2> S & S Insurance Surveyors and Loss Assessors Pvt. Ltd</h2>

      <a href="#about" class="btn-get-started scrollto"><i class="bx bx-chevrons-down"></i></a>

    </div>

  </section><!-- End Hero -->

  <div class="email-send-btn">

    <span data-toggle="modal" data-target="#exampleModal">Appoint Us</span>

  </div>

  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">

  <div class="modal-dialog" role="document">

    <div class="modal-content">

      <div class="modal-header">

        <h5 class="modal-title" id="exampleModalLabel">SS Surveyors</h5>

        <button type="button" class="close" data-dismiss="modal" aria-label="Close">

          <span aria-hidden="true">&times;</span>

        </button>

      </div>

      <div class="modal-body">

        <form autocomplete="off" action="{{route('apointus')}}" method="post" enctype="multipart/form-data">
          @csrf
          <div class="form-group">
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter your name" name="name" title="Enter your name">
          </div>
          <div class="form-group">
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter your email" name="email" title="enter valid email">
          </div>
          <div class="form-group">

            <input type="text" name="number" class="form-control" placeholder="Enter your Phone number">
            
           </div>
          <div class="form-group">
            <textarea class="form-control" name="message" placeholder="How can i help you?"></textarea>

          </div>


      </div>

      <div class="modal-footer">

        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

        <button type="submit" class="btn btn-primary">Send Mail</button>

      </div>

        </form>

    </div>

  </div>

</div>

  <main id="main">

<div class="row">

  <!-- <button class="btn btn-success float-right fixed" type="submit">Submit</button> -->

</div>

<!-- ======= About Section ======= -->

<section id="about" class="about">

      <div class="container">

        

        <div class="row no-gutters">

          <div class="content col-xl-5 d-flex align-items-stretch" data-aos="fade-up">

            <div class="content">

              <h3>S & S SURVEYORS</h3>

              <p>

                We have IRDAI approved Licensed in FIRE,MARINECARGO,ENGINEERING,MISCELLANEOUS MOTOR and CROP Surveyor Department. We work in all Pan India bases.

              </p>

              <!-- <a href="#" class="about-btn"><i class="bx bx-chevron-right"></i></a> -->

            </div>

          </div>

          <div class="col-xl-7 d-flex align-items-stretch">

            <div class="icon-boxes d-flex flex-column justify-content-center">

              <div class="row container">

                <h1>Our Primary Focus On</h1>

                <ul>

                  <li class="liHover"><strong>At</strong> SS we have Govt approved Valuer who have mastered the art of  VALUATION services with an in-depth experience in different techniques and strategies.</li>
                  <li class="liHover"><strong>Spot Survey</strong> will be attanded in around <strong>12 Hrs</strong>.</li>

                  <li class="liHover">Make <strong>ILA</strong> within <strong>24 hrs</strong> after attending survey.</li>

                  <li class="liHover"><strong>Spot LOR</strong> on regular claims will be provided to insured.</li>

                  <li class="liHover">FSR <strong>TAT</strong> 14 days.</li>

                  <li class="liHover">Regular <strong>MARINE</strong> claims <strong>FSR</strong> & <strong>Assessment</strong> will be provided in around <strong>48-78 hrs</strong>.</li>

                  <li class="liHover">We provide Pre Dispatch inspection <strong>(PDI)</strong>/Pre Shipment Inspection <strong>(PSI) in 24 hrs</strong>.</li>

                </ul>

              </div>

            </div><!-- End .content-->

          </div>

        </div>



      </div>

    </section><!-- End About Section -->

<style type="text/css">

  .liHover:hover{

    cursor: pointer;

    color: #4a99bc;

  }

</style>

    

    <!-- ======= Services Section ======= -->

    <section id="services" class="services">

      <div class="container">

        

        <div class="section-title" data-aos="fade-in" data-aos-delay="100">

          <h2>Services</h2>

          <p>We have expertize in on our services some of here</p>

        </div>

        

        <div class="row">

          <div class="col-md-6 mt-3 col-lg-4 d-flex align-items-stretch mb-5 mb-lg-0">

            <div class="icon-box" data-aos="fade-up">
<a href="{{route('fire')}}">
              <div class="icon"><i class='bx bxs-hot' ></i></div>

              <h4 class="title text-dark">FIRE</h4>
</a>
              <p class="description">We have experienced assessors, with specialty in Fire and Allied Risks ...</p>

            </div>

          </div>



          <div class="col-md-6 mt-3 col-lg-4 d-flex align-items-stretch mb-5 mb-lg-0">

            <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
<a href="{{route('engineering')}}">
              <div class="icon"><i class="bx bx-buildings"></i></div>

              <h4 class="title text-dark">ENGINEERING</h4>
</a>
              <p class="description">We have expert engineering surveyors, with a strong background, capable of identifying ...</p>

            </div>

          </div>



          <div class="col-md-6 mt-3 col-lg-4 d-flex align-items-stretch mb-5 mb-lg-0">

            <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
<a href="{{route('marine')}}">
              <div class="icon"><i class='bx bxs-ship' ></i></div>

              <h4 class="title text-dark">MARINE CARGO</h4>
</a>
              <p class="description">Marine Cargo takes longer in transit, and ipso facto,it is subject to ...</p>

            </div>

          </div>

          <div class="col-md-6 mt-3 col-lg-4 d-flex align-items-stretch mb-5 mb-lg-0">

            <div class="icon-box" data-aos="fade-up">
<a href="{{route('motor')}}">
              <div class="icon"><i class="bx bx-car"></i></div>

              <h4 class="title text-dark">MOTOR</h4>
</a>
              <p class="description">Spot surveys are conducted within 6 Hours of intimation and the ...</p>

            </div>

          </div>



          <div class="col-md-6 mt-3 col-lg-4 d-flex align-items-stretch mb-5 mb-lg-0">

            <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
<a href="{{route('chrop')}}">
              <div class="icon"><i class="bx bx-expand-alt"></i></div>

              <h4 class="title text-dark">CROP</h4>
</a>
              <p class="description">We provides customized services to banks, insurance, re- insurance ...</p>

            </div>

          </div>



          <div class="col-md-6 mt-3 col-lg-4 d-flex align-items-stretch mb-5 mb-lg-0">

            <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
<a href="{{route('miscellaneous')}}">
              <div class="icon"><i class="bx bx-command"></i></div>

              <h4 class="title text-dark">MISCELLANEOUS</h4>
</a>
              <p class="description">We have specialists to handle this chunk of insurance claim survey ...</p>

            </div>

          </div>  

          

          <div class="col-md-6 mt-3 col-lg-4 d-flex align-items-stretch mb-5 mb-lg-0">

            <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
<a href="{{route('catastrophic')}}">
              <div class="icon"><i class='bx bx-rotate-left'></i></div>

              <h4 class="title">Catastrophic Loss</h4>
</a>
              <p class="description">Catastrophe hazard is the risk of loss from a particularly destructive </p>

            </div>

          </div>

        </div>

        



      </div>

    </section><!-- End Services Section -->



    <!-- ======= Counts Section ======= -->

    {{-- <section id="counts" class="counts  section-bg">

      <div class="container">



        <div class="row no-gutters">

          <div class="col-lg-4 col-md-6 d-md-flex align-items-md-stretch">

            <div class="count-box">

              <i class="bi bi-journal-richtext"></i>

              <span data-purecounter-start="0" data-purecounter-end="25" data-purecounter-duration="1" class="purecounter"></span>

              <p><strong>SURVEYORS</strong></p>

            </div>

          </div>



          <div class="col-lg-4 col-md-6 d-md-flex align-items-md-stretch">

            <div class="count-box">

              <i class="bi bi-headset"></i>

              <span data-purecounter-start="0" data-purecounter-end="320" data-purecounter-duration="1" class="purecounter"></span>

              <p><strong>Hours Of Support</strong></p>

            </div>

          </div>



          <div class="col-lg-4 col-md-6 d-md-flex align-items-md-stretch">

            <div class="count-box">

              <i class="bi bi-people"></i>

              <span data-purecounter-start="0" data-purecounter-end="10" data-purecounter-duration="1" class="purecounter"></span>

              <p><strong>current employee</strong></p>

            </div>

          </div>



        </div>



      </div>

    </section> --}}
    <!-- End Counts Section -->



    <!-- ======= Cta Section ======= -->

    <section id="cta" class="cta">

      <div class="container" data-aos="zoom-in">



        <!-- <div class="text-center">

          <h3>Call To Action</h3>

          <p> Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

          <a class="cta-btn" href="#">Call To Action</a>

        </div> -->



      </div>

    </section><!-- End Cta Section -->



    <!-- ======= Portfolio Section ======= -->

    <!-- ======= Testimonials Section ======= -->

    <section id="testimonials" class="testimonials section-bg">

      <div class="container">



        <div class="section-title" data-aos="fade-in" data-aos-delay="100">

          <h2>Testimonials</h2>

        </div>



        <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">

          <div class="swiper-wrapper">



            <div class="swiper-slide">

              <div class="testimonial-item">

                <p>

                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>

                  The world is changing very fast.Big wil not beat small anymore.It will be the fast beating the slow. 

                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>

                </p>

                <h3>Rupert Murdoch</h3>

              </div>

            </div><!-- End testimonial item -->



            <div class="swiper-slide">

              <div class="testimonial-item">

                <p>

                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>

                  Train people well enough so they can leave, treat them well enough so they don't want to

                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>

                </p>

                <h3>Richard Branson</h3>

              </div>

            </div><!-- End testimonial item -->



            <div class="swiper-slide">

              <div class="testimonial-item">

                <p>

                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>

                    Progress is imposible without change,and those who cannot change their minds cannot change anything.

                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>

                </p>

                <h3>Jena Karlis</h3>

              </div>

            </div><!-- End testimonial item -->



          </div>

          <div class="swiper-pagination"></div>

        </div>



      </div>

    </section><!-- End Testimonials Section -->

    





    <!-- ======= Team Section ======= -->

    <section id="team" class="team">

      <div class="container">



        <div class="section-title" data-aos="fade-in" data-aos-delay="100">

          <h2>Team</h2>
<div class="container">
  <ul>
  <li>Equipped with mavericks of each field ranging from loss adjusting, Engineering, Insurance, Finance, Valuation, Legal and Information Technology, Marketing & Management to render the highest quality of professional services and ensuring that the benchmark is raised higher every time we are appointed.</li>
  <li>The team comprises of professionals with diverse backgrounds and have previously worked with the insurer, insured, broker, manufacturing industry and surveyor with a cumulative experience of more than 150 years in loss adjusting. We have 2 Chartered Accountants, 16 senior engineers, and 9 loss adjusters strategically located throughout our network to quickly reach a loss site. Loss teams for catastrophic events are pre-formed to facilitate rapid response.</li>
  <li>We also have a dedicated customer support manager to assure the best in class service and to create a separate active market feedback system for management.</li>
</ul>

</div>      
        </div>



        <div class="row">



          <div class="col-lg-4 col-md-6">

            <div class="member" data-aos="fade-up">

              <div class="pic"><img src="{{asset('assets/img/team/shivam.jpg')}}" class="img-fluid" alt=""></div>

              <div class="member-info">

                <h4>Mr. Shivam Monpara</h4>

                <span>CEO & Founder</span>

                <div class="social">

                  <span>Chemical Engineer</span>

                </div>

              </div>

            </div>

          </div>



          <div class="col-lg-4 col-md-6">

            <div class="member" data-aos="fade-up" data-aos-delay="150">

              <div class="pic"><img src="{{asset('assets/img/team/pradip.jpg')}}" class="img-fluid" alt=""></div>

              <div class="member-info">

                <h4>Mr. Pradip Chavda</h4>

                <span>COO</span>

                <div class="social">

                  <span>Mechanical Engineer</span>

                </div>

              </div>

            </div>

          </div>



          <div class="col-lg-4 col-md-6">

            <div class="member" data-aos="fade-up" data-aos-delay="300">

              <div class="pic"><img src="{{asset('assets/img/team/vishvas2.jpg')}}" class="img-fluid" alt=""></div>

              <div class="member-info">

                <h4>Mr. Vishvas Raiyani</h4>

                <span>CFO</span>

                <div class="social">

                  <span>Electrical Engineer</span>

                </div>

              </div>

            </div>

          </div>



        </div>



        <div class="row">



<div class="col-lg-4 col-md-6">

            <div class="member" data-aos="fade-up" data-aos-delay="300">

              <div class="pic"><img src="assets/img/team/kirit.jfif" class="img-fluid" alt="Kirit"></div>

              <div class="member-info">

                <h4><a target="_blank" href="mailto:kirit@sssurveyors.com">Mr. Kirit Assar</a></h4>

                <span>Director</span>

                <div class="social">

                  <p class="custom-text">Dip - Mech. ‘ A ‘category in FIRE, MARINECARGO, ENGINEERING, MISCELLANEOUS <br> F/W/01950  SLA-1986 <br><a href="mailto:kirit@sssurveyors.com">kirit@sssurveyors.com</a></p>

                </div>

              </div>

            </div>

          </div>



          <div class="col-lg-4 col-md-6">

            <div class="member" data-aos="fade-up">

              <div class="pic"><img src="{{asset('assets/img/team/Hardik.jpg')}}" class="img-fluid" alt="Hardik"></div>

              <div class="member-info">

                <h4><a target="_blank" href="mailto:hardik@sssurveyors.com">Mr. Hardik Dobariya</a></h4>

                <span>Director</span>

                <div class="social">

                 <p class="custom-text">M Sc Agriculture Crop <br> L/W/11272 <br> SLA-122330 <br>

                  <a href="mailto:hardik@sssurveyors.com">hardik@sssurveyors.com</a></p>

                </div>

              </div>

            </div>

          </div>



          <div class="col-lg-4 col-md-6">

            <div class="member" data-aos="fade-up" data-aos-delay="150">

              <div class="pic"><img src="{{asset('assets/img/team/hiren.jpg')}}" class="img-fluid" alt="Hiren"></div>

              <div class="member-info">

                <h4><a target="_blank" href="mailto:hiren@sssurveyors.com">Mr. Hiren Devani</a></h4>

                <span>Director</span>

                <div class="social">

                  <p class="custom-text">Dip - Mech. Fire ,Marine-cargo, Engineering <br> L/W/10614 <br> SLA-121536

                    <br><a href="mailto:hiren@sssurveyors.com">hiren@sssurveyors.com</a>

                  </p>

                </div>

              </div>

            </div>

          </div>
        </div>
        </div>
      </div>
    </section>
    <!-- End Team Section -->
    <!-- career -->
    <section id="careers" class="testimonials section-bg">

      <div class="container">

        <div class="section-title" data-aos="fade-in" data-aos-delay="100">

          <h2>Careers</h2>

          <p>

            <h1>Job Description</h1>

          </p>

        </div>

          <div class="container">

            <p>

              <ul>

                <li>To carry out survey and assessment of losses under various departments (Fire, Marine Cargo, Engineering, Miscellaneous, Loss of Profit and crop etc.) for the general insurance industry.</li>

                <li>Visiting the site to collect evidence of loss, i.e. Photographs, Videos, Statements/ CCTV Footage, etc.</li>

                <li>Negotiation/Discussion with Insured’s officials for loss minimization/Salvage disposal, preparing inventory of safe & damaged material/stocks.</li>

                <li>Issuing of Immediate Loss Advice, Letter of Requirements and Scrutiny/Verification of supporting documents provided by the Insured.</li>

                <li>Preparation of preliminary/interim/final Survey Reports for losses.</li>

                <li>Leading/Managing team of Loss Adjusters etc., to ensure time bound release of Final Reports and hassle free closure.</li>

              </ul>

            </p>

          </div>

          <div class="section-title">

            <p class="">

              <h1>Position</h1>

            </p>

          </div>

            <div class="container">

              <p>

                <ul>

                  <li>Entry level, Mid-level and Senior positions (preferably with IRDAI license).</li>

                </ul>

              </p>

              <div class="row">

                <div class="col-lg-4">

                  <form class="form" method="POST" action="{{ route('carrer') }}" enctype="multipart/form-data">
                    @csrf
                    <input type="file" name="file" class="form-control">

                </div>

                <div class="col-sm-2">

                  <input type="submit" class="btn btn-pramary" style="background: rgba(55, 142, 181, 0.9); padding: 5px;" value="Upload">

                  </form>

                </div>

              </div>

            </div>

        <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">

          <div class="swiper-wrapper">



           

          </div>

          <div class="swiper-pagination"></div>

        </div>



      </div>

    </section>
    <!-- End Testimonials Section -->
    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact section-bg">
      <div class="container" data-aos="fade-up">
        <div class="section-title">
          <h2>Contact</h2>
          <p>Want to get in touch? We'd love to hear from you. <br> Here's how you can reach us...</p>
        </div>
        <div class="row">
          <div class="col-lg-6">
            <div class="info-box mb-4">
              <i class="bx bx-map"></i>
              <p>T.F. 324, Shayona Arcade,<br>
                Near Shyam Shikhar Complex,<br>
                L B Shastri Road,Bapunagar,<br>
                 Ahmedabad – 380024 <br><br></p>
            </div>
          </div>
          <div class="col-lg-3 col-md-6">
            <div class="info-box  mb-4">
              <i class="bx bx-envelope"></i>
              <h3>Email Us</h3>
              <p> <a href="mailto:director@sssurveyors.com">director@sssurveyors.com</a> </p>
              <p> <a href="mailto:backteam@sssurveyors.com">backteam@sssurveyors.com</a> </p>
            </div>
          </div>
          <div class="col-lg-3 col-md-6">
            <div class="info-box  mb-4">
              <i class="bx bx-phone-call"></i>
              <h3>Call Us</h3>
              <p><a href="callto:+918347918281">+91 83479 18281</a>,<a href="callto:+917777995541">+91 77779 95541</a></p>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-6 ">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3671.5695316220904!2d72.630431!3d23.039572599999996!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x395e869125995311%3A0xd146cd36ffb45cbc!2sShayona%20Arcade%2C%20Tolnaka%2C%20Bapunagar%2C%20Ahmedabad%2C%20Gujarat%20380024!5e0!3m2!1sen!2sin!4v1655911974071!5m2!1sen!2sin" style="border:0; width: 100%; height: 384px;" allowfullscreen="" loading="lazy" frameborder="0"  referrerpolicy="no-referrer-when-downgrade"></iframe>
          </div>
          <div class="col-lg-6">
            <form action="{{route('contact')}}" method="POST">
              @csrf
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                </div>
              </div>
              <div class="form-group mt-3">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
              </div>
              <div class="form-group mt-3">
                <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
              </div>
              <div class="text-center"><button type="submit" class="btn btn-primary">Send Message</button></div>
            </form>
          </div>
        </div>
      </div>
    </section><!-- End Contact Section -->
  </main><!-- End #main -->
  <script>
  @if(Session::has('message'))
  toastr.options =
  {
  	"closeButton" : true,
  	"progressBar" : true
  }
  		toastr.success("{{ session('message') }}");
  @endif
  @if(Session::has('success'))
  toastr.options =
  {
  	"closeButton" : true,
  	"progressBar" : true
  }
  		toastr.success("{{ session('success') }}");
  @endif

  @if(Session::has('error'))
  toastr.options =
  {
  	"closeButton" : true,
  	"progressBar" : true
  }
  		toastr.error("{{ session('error') }}");
  @endif

  @if(Session::has('info'))
  toastr.options =
  {
  	"closeButton" : true,
  	"progressBar" : true
  }
  		toastr.info("{{ session('info') }}");
  @endif

  @if(Session::has('warning'))
  toastr.options =
  {
  	"closeButton" : true,
  	"progressBar" : true
  }
  		toastr.warning("{{ session('warning') }}");
  @endif
  </script>
@endsection