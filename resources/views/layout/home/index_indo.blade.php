@extends('layout.tools.main_indo')

@section('content')
    @if (session()->has('success'))
    <div class="alert alert-primary alert-dismissible fade show" role="alert">
        {{ session('success') }}
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
                            <h1>Steel Wire Rod Factory</h1>
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
                                    Tentang Kami
                                </h2>
                            </div>
                            <p>
                                PT. Ispat Indo adalah sebuah perusahaan pembuat baja yang bermarkas di Sidoarjo,
                                Jawa Timur, Indonesia. Perusahaan ini didirikan pada tahun 1976 oleh Lakshmi Mittal
                                dan merupakan perusahaan luar negeri pertama yang didirikannya. Berkat
                                keberhasilannya melalui perusahaan ini, Mittal kemudian mengembangkan bisnisnya
                                dan menjadi miliarder terkenal dari India. Didirikan dengan kapasitas produksi
                                sebesar 60.000 ton pertahunnya, saat ini kapasitas produksi Ispat Indo mencapai
                                600.000 ton...
                            </p>
                            <a href="profilindo_indo">
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
                    <h2>PRODUK KAMI</h2>
                    <div class="divider-center-small"></div>
                </div>

                <!-- === Clients === -->

                <div class="container ">
                    <div class="row">

                        <div id="owl-clients" class="owl-carousel owl-theme client text-center">

                            <!-- === Client 1 === -->
                            <div class="client-item text-center">
                                <a href="highcarbon">
                                    <img class="img-responsive" src="assets/img/SVG.png" alt="">
                                    <h1></h1>
                                    <h1></h1>
                                    <h6>High Carbon Steel</h6>
                                </a>
                            </div>

                            <!-- === Client 2 === -->
                            <div class="client-item text-center">
                                <a href="lowcarbon">
                                    <img class="img-responsive" src="assets/img/SVG-1.png" alt="">
                                    <h1></h1>
                                    <h1></h1>
                                    <h6>Low Carbon Steel</h6>
                                </a>
                            </div>

                            <!-- === Client 3 === -->
                            <div class="client-item text-center">
                                <a href="clodheading">
                                    <img class="img-responsive" src="assets/img/SVG-2.png" alt="">
                                    <h1></h1>
                                    <h1></h1>
                                    <h6>CH Quality Steel</h6>
                                </a>
                            </div>

                            <!-- === Client 4 === -->
                            <div class="client-item text-center">
                                <a href="generalpw">
                                    <img class="img-responsive" src="assets/img/SVG-3.png" alt="">
                                    <h1></h1>
                                    <h1></h1>
                                    <h6>General Purpose WR</h6>
                                </a>
                            </div>

                            <!-- === Client 5 === -->
                            <div class="client-item text-center">
                                <a href="welding">
                                    <img class="img-responsive" src="assets/img/SVG-4.png" alt="">
                                    <h1></h1>
                                    <h1></h1>
                                    <h6>Welding Electrode</h6>
                                </a>
                            </div>

                            <!-- === Client 6 === -->
                            <div class="client-item text-center">
                                <a href="pline">
                                    <img class="img-responsive" src="assets/img/SVG-5.png" alt="">
                                    <a></a>
                                    <h1></h1>
                                    <h6>Plain / Deform Bar</h6>
                                </a>
                            </div>

                            <!-- === Client 7 === -->
                            <div class="client-item text-center">
                                <a href="structure">
                                    <img class="img-responsive" src="assets/img/SVG-6.png" alt="">
                                    <h1></h1>
                                    <h1></h1>
                                    <h6>Structural Steel</h6>
                                </a>
                            </div>

                            <!-- === Client 8 === -->
                            <div class="client-item text-center">
                                <a href="nails">
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

        {{-- data expert yang baru --}}


  <section class="expert_section layout_padding">
    <div class="container">
      <div class="heading_container heading_center">
        <h2>
            Prestasi Kami di Ispat Indo
        </h2>
        <p>
            Di Ispat Indo, kami mengukir sejarah prestasi yang mencerminkan komitmen kami
            terhadap keunggulan, inovasi, dan kualitas tinggi:


        </p>
        <P>
            Dari pencapaian rekor produksi hingga pengakuan industri, kami terus
            membuktikan dedikasi kami dalam menghadirkan yang terbaik.

            Prestasi kami adalah bukti nyata dari kerja keras tim kami dan tekad
            kami untuk menjadi pemimpin di industri baja. Kami terus berinovasi
            untuk masa depan yang lebih sukses.
        </P>
      </div>
      <div class="row">
        <div class="col d-flex justify-content-center">
          <div class="card text-center">
            <div class="box">
              <div class="img-box">
                <img src="assets/img/logo/ISO_14001_NEW.png" alt="">
              </div>
              <div class="detail-box">
                <h6>ISO 4001 Approval Certificate</h6>
                <h6></h6>
                <a href="isocertification_indo">
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
              <a href="isocertification_indo">
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
              <a href="isocertification_indo">
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
              <a href="isocertification_indo">
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
              <a href="jisapproval_indo">
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
              <a href="sni_indo">
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
              <a href="sni_indo">
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
              <a href="kan_indo">
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

                <a href="sirim_indo">
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
              <a href="tkdn_indo">
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
              <a href="sni_indo">
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
              <a href="sirim_indo">
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


<!-- Start news section -->

<section class="news">
    <div class="container">
      <div class="row">
        <div class="col-md-8 col-sm-12 col-xs-12">
          <h1>Dirgahayu 78 Tahun Republik Indonesia</h1>
          <h6>This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</h6>
          <a href="">Read More</a>
        </div>
      </div>
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
                            <a href="customer-center_indo">
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
