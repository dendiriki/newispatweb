@extends('layout.tools.main')

{{-- @section('content')
    @if (session()->has('success'))
      <div class="alert alert-primary alert-dismissible fade show" role="alert">
        {{ session('success') }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

    @endif --}}

     <!-- end about section -->
     @section('content')
    @if (session()->has('success'))
  <div class="Message Message--green alert" role="alert">
    <div class="Message-icon">
      <i class="fa fa-check"></i>
    </div>
    <div class="Message-body">
      <h4>Success!</h4>
      <p>coba dulu</p>
      <p>  {{ session('success') }}</p>
    </div>
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>
  @endif








    <!-- slider section -->
    <div id="home-carousel" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="item active">
                <div class="carousel-caption container">
                    <div class="row">
                        <div class="col-md-6 col-sm-12 col-xs-12">
                            <h1>Steel Wire Factory</h1>
                            <h2>PT. ISPAT INDO</h2>
                            <p>Was Established in Indonesia in 1976</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </section>
        <!-- end slider section -->


    </div>

    </div>


    <div class="timpahero"></div>
    <div>


        <!-- about section -->

        <section class="about_section layout_padding">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="detail-box">
                            <div class="heading_container">
                                <h2>
                                    About Us
                                </h2>
                            </div>
                            <p>
                                PT. Ispat Indo was established in Indonesia in 1976. the company was set up as a 60.000 tpa
                                Greenfield Project, for rolling. Today Ispat Indo has an annual Product capacity in excess
                                of
                                700.000 tons...
                            </p>
                            <a href="profilindo">
                                Read More
                            </a>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="img-box">
                            <iframe width="420" height="315" src="https://www.youtube.com/embed/f53DFw5KV14">
                            </iframe>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <div class="timpaau">

        </div>
        <!-- end about section -->



        <!-- Start client -->
        <section class="job_section layout_padding">
            <section id="client" class="light-bg p-top-80 p-bottom-80">

                <!-- Section Title -->
                <div class="section-title text-center m-bottom-40">
                    <h2>OUR PRODUCTS</h2>
                    <div class="divider-center-small"></div>
                </div>

                <!-- === Clients === -->

                <div class="container ">
                    <div class="row">

                        <div id="owl-clients" class="owl-carousel owl-theme client text-center">

                            <!-- === Client 1 === -->
                            <div class="client-item text-center">
                                <a href="{{ route('highcarbon') }}">
                                    <img class="img-responsive" src="assets/img/SVG.png" alt="">
                                    <h1></h1>
                                    <h1></h1>
                                    <h6>High Carbon Steel</h6>
                                </a>
                            </div>

                            <!-- === Client 2 === -->
                            <div class="client-item text-center">
                                <a href="{{ route('lowcarbon') }}">
                                    <img class="img-responsive" src="assets/img/SVG-1.png" alt="">
                                    <h1></h1>
                                    <h1></h1>
                                    <h6>Low Carbon Steel</h6>
                                </a>
                            </div>

                            <!-- === Client 3 === -->
                            <div class="client-item text-center">
                                <a href="{{ route('clodheading') }}">
                                    <img class="img-responsive" src="assets/img/SVG-2.png" alt="">
                                    <h1></h1>
                                    <h1></h1>
                                    <h6>CH Quality Steel</h6>
                                </a>
                            </div>

                            <!-- === Client 4 === -->
                            <div class="client-item text-center">
                                <a href="{{ route('generalpw') }}">
                                    <img class="img-responsive" src="assets/img/SVG-3.png" alt="">
                                    <h1></h1>
                                    <h1></h1>
                                    <h6>General Purpose WR</h6>
                                </a>
                            </div>

                            <!-- === Client 5 === -->
                            <div class="client-item text-center">
                                <a href="{{ route('welding') }}">
                                    <img class="img-responsive" src="assets/img/SVG-4.png" alt="">
                                    <h1></h1>
                                    <h1></h1>
                                    <h6>Welding Electrode</h6>
                                </a>
                            </div>

                            <!-- === Client 6 === -->
                            <div class="client-item text-center">
                                <a href="{{ route('pline') }}">
                                    <img class="img-responsive" src="assets/img/SVG-5.png" alt="">
                                    <a></a>
                                    <h1></h1>
                                    <h6>Plain / Deform Bar</h6>
                                </a>
                            </div>

                            <!-- === Client 7 === -->
                            <div class="client-item text-center">
                                <a href="{{ route('structure') }}">
                                    <img class="img-responsive" src="assets/img/SVG-6.png" alt="">
                                    <h1></h1>
                                    <h1></h1>
                                    <h6>Structural Steel</h6>
                                </a>
                            </div>

                            <!-- === Client 8 === -->
                            <div class="client-item text-center">
                                <a href="{{ route('nails') }}">
                                    <img class="img-responsive" src="assets/img/SVG-7.png" alt="">
                                    <h1></h1>
                                    <h1></h1>
                                    <h6>Nail & Nail Wire</h6>
                                </a>
                            </div>



                        </div><!-- /#owl-testimonials -->

                    </div> <!-- /.row -->
                </div> <!-- /.container -->
            </section>

        </section>
        <!-- End client -->

        <!-- expert section -->


  <section class="expert_section layout_padding">
    <div class="container">
      <div class="heading_container heading_center">
        <h2>
          Our Achivements
        </h2>
        <p>
            "Our Achievements" at Ispat Indo showcase our notable accomplishments and successes that we have
            attained over the years.
            These accomplishments reflect our dedication to excellence, innovation, and a commitment to
            delivering
            high-quality
            products and services. From surpassing production milestones to achieving industry recognition, our
            achievements are
            a testament to our team's hard work, strategic vision, and unwavering pursuit of excellence in the
            steel
            industry.
        </p>
      </div>
      <div class="row">
        <div class="col d-flex justify-content-center">
          <div class="card text-center">
            <div class="box">
              <div class="img-box">
                <img src="assets/img/logo/ISO_14001_NEW.png" alt="">
              </div>
              <div class="detail-box">
                <h6>ISO 14001 Approval Certificate</h6>
                <h6></h6>
                <a href="{{ route('isocertification') }}">
                  <p class="pkebawah">Read More >></p>
                </a>
            </div>
          </div>
        </div>
      </div>
        <div class="col d-flex justify-content-center">
          <div class="card text-center">
          <div class="box">
            <div class="img-box">
              <img src="assets/img/logo/ISO_45001_NEW.png" alt="">
            </div>
            <div class="detail-box">
              <h6>ISO 45001 Approval Certificate</h6>
              <h6></h6>
              <a href="{{ route('isocertification') }}">
                <p class="pkebawah">Read More >></p>
              </a>
            </div>
          </div>
        </div>
        </div>
        <div class="col d-flex justify-content-center">
          <div class="card text-center">
          <div class="box">
            <div class="img-box">
              <img src="assets/img/logo/ISO_50001_NEW.png" alt="">
            </div>
            <div class="detail-box">
              <h6>ISO 50001 Approval Certificate</h6>
              <h6></h6>
              <a href="{{ route('isocertification') }}">
                <p class="pkebawah">Read More >></p>
              </a>
            </div>
          </div>
        </div>
        </div>
        <div class="col d-flex justify-content-center">
          <div class="card text-center">
          <div class="box">
            <div class="img-box">
              <img src="assets/img/logo/ISO_9001_NEW.png" alt="">
            </div>
            <div class="detail-box">
              <h6>ISO 9001 Approval Certificate</h6>
              <h6></h6>
              <a href="{{ route('isocertification') }}">
                <p class="pkebawah">Read More >></p>
              </a>
            </div>
          </div>
        </div>
        </div>
        <div class="col d-flex justify-content-center">
          <div class="card text-center">
          <div class="box">
            <div class="img-box">
              <img src="assets/img/logo/jis.png" alt="">
            </div>
            <div class="detail-box">
              <h6>JIS Approval Certificate</h6>
              <h6></h6>
              <a href="{{ route('jisapproval') }}">
                <p class="pkebawah">Read More >></p>
              </a>
            </div>
          </div>
        </div>
        </div>
        <div class="col d-flex justify-content-center">
          <div class="card text-center">
          <div class="box">
            <div class="img-box">
              <img src="assets/img/logo/SNI-07-2052-2017.png" alt="">
            </div>
            <div class="detail-box">
              <h6>Steel Bar for Reinforcement</h6>
              <h6></h6>
              <a href="{{ route('sni') }}">
                <p class="pkebawah">Read More >></p>
              </a>
            </div>
          </div>
        </div>
        </div>
        <div class="col d-flex justify-content-center">
          <div class="card text-center">
          <div class="box">
            <div class="img-box">
              <img src="assets/img/logo/SNI 07-0954-2005.jpeg" alt="">
            </div>
            <div class="detail-box">
              <h6>Steel Bar In Coil</h6>
              <h6></h6>
              <a href="{{ route('sni') }}">
                <p class="pkebawah">Read More >></p>
              </a>
            </div>
          </div>
        </div>
        </div>
        <div class="col d-flex justify-content-center">
          <div class="card text-center">
          <div class="box">
            <div class="img-box">
              <img src="assets/img/logo/kan.jpeg" alt="">
            </div>
            <div class="detail-box">
              <h6>LP - 455 – IDN Accreditation by KAN</h6>
              <h6></h6>
              <a href="{{ route('kan') }}">
                <p class="pkebawah">Read More >></p>
              </a>
            </div>
          </div>
        </div>
        </div>
        <div class="col d-flex justify-content-center">
          <div class="card text-center">
          <div class="box">
            <div class="img-box">
              <img src="assets/img/logo/SMK3 LOGO.jpeg" alt="">
            </div>
            <div class="detail-box">
              <h6>SMK3 Approval ertificate</h6>
              <h6></h6>

                <a href="{{ route('sirim') }}" >
                  <p class="pkebawah">Read More >></p>
                </a>

            </div>
          </div>
        </div>
        </div>
        <div class="col d-flex justify-content-center">
          <div class="card text-center">
          <div class="box">
            <div class="img-box">
              <img src="assets/img/logo/proper.png" alt="">
            </div>
            <div class="detail-box">
              <h6>Proper Approval Certificate</h6>
              <h6></h6>
              <a href="{{ route('tkdn') }}">
                <p class="pkebawah">Read More >></p>
              </a>
            </div>
          </div>
        </div>
        </div>
        <div class="col d-flex justify-content-center">
          <div class="card text-center">
          <div class="box">
            <div class="img-box">
              <img src="assets/img/logo/logo zero accident.jpg" alt="">
            </div>
            <div class="detail-box">
              <h6>Zero Accident Approval Certificate</h6>
              <h6></h6>
              <a href="{{ route('sni') }}">
                <p class="pkebawah">Read More >></p>
              </a>
            </div>
          </div>
        </div>
        </div>
        <div class="col d-flex justify-content-center">
          <div class="card text-center">
          <div class="box">
            <div class="img-box">
              <img src="assets/img/logo/sirim.png" alt="">
            </div>
            <div class="detail-box">
              <h6>SIRIM Approval</h6>
              <h6></h6>
              <a href="{{ route('sirim') }}">
                <p class="pkebawah">Read More >></p>
              </a>
            </div>
          </div>
        </div>
        </div>

        <!--
      </div>
      <div class="btn-box">
        <a href="">
          View All Achivements
        </a>
      </div>-->
    </div>
  </section>





  <!-- end news section -->

  <section class="expert_section layout_padding">
    <div class="about_section">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col">
            <div class="heading_container heading_center p-bottom-40">
              <h2>
                CONTACT
              </h2>
              <p>
                We're here to help and answer any question you might have. We look forward to hearing from you.
              </p>
              <br>
            </div>


                    <div class="container_CS">

                      <div id="sidebar">
                        <img>
                        <a href="{{ route('customer-center') }}">
                            <p>Customer Services</p>
                        </a>
                      </div>

                      <div id="content1">
                        <img src="assets/img/icon/Markicon.png" alt="icon" style="max-width: 6rem;" >
                        <h1>Address</h1>
                        <p>PV3+VC5, (Kec.)  Taman, <br>(Kab.) Sidoarjo : 61257</p>
                      </div>

                      <div id="content2">
                        <img src="assets/img/icon/Phoneicon.png" alt="icon" style="max-width: 6rem;" >
                          <h1>Call Us</h1>
                          <p>Telp : (62) 31-7887000 <br>Fax : (62) 31-7887500 (031)</p>
                      </div>

                      <div id="content3">
                        <img src="assets/img/icon/Emailicon.png" alt="icon" style="max-width: 6rem;" >
                          <h1>Email Us</h1>
                          <p>sales@ispatindo.com <br>ispatindo.com</p>
                      </div>

                      <div id="content4">
                        <img src="assets/img/icon/Clockicon.png" alt="icon" style="max-width: 6rem;" >
                          <h1>Open Hours</h1>
                          <p>Monday - Friday <br>9.00 - 18.00 WIB</p>
                      </div>


                    </div>

                  </div>
           </div>
        </div>
      </div>
    </div>
</section>

    @endsection
