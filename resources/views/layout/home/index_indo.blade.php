@extends('layout.tools.main_indo')

@section('content')
    @if (session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show mb-0" role="alert">
            <br>
            {{ session('success') }}
            <button type="button" class="btn-close mb-0 mt-3 pt-4" data-bs-dismiss="alert" aria-label="Close"></button>
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

    <!-- expert section -->

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
                    <div class="box">
                        <div class="img-box">
                            <img src="assets/img/logo/ISO_14001_NEW.png" alt="">
                        </div>
                        <div class="detail-box">
                            <h6>ISO 44001 Approval</h6>
                            <h6>Certificate</h6>
                            <a href="">
                                <p>Read More >></p>
                            </a>

                        </div>
                    </div>
                </div>
                <div class="col d-flex justify-content-center">
                    <div class="box">
                        <div class="img-box">
                            <img src="assets/img/logo/ISO_45001_NEW.png" alt="">
                        </div>
                        <div class="detail-box">
                            <h6>ISO 50001 Approval</h6>
                            <h6>Certificate</h6>
                            <a href="">
                                <p>Read More >></p>
                            </a>

                        </div>
                    </div>
                </div>
                <div class="col d-flex justify-content-center">
                    <div class="box">
                        <div class="img-box">
                            <img src="assets/img/logo/ISO_50001_NEW.png" alt="">
                        </div>
                        <div class="detail-box">
                            <h6>SMK3 Approval</h6>
                            <h6>Certificate</h6>
                            <a href="">
                                <p>Read More >></p>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col d-flex justify-content-center">
                    <div class="box">
                        <div class="img-box">
                            <img src="assets/img/logo/ISO_9001_NEW.png" alt="">
                        </div>
                        <div class="detail-box">
                            <h6>ISO 9001 Approval</h6>
                            <h6>Certificate</h6>
                            <a href="">
                                <p>Read More >></p>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col d-flex justify-content-center">
                    <div class="box">
                        <div class="img-box">
                            <img src="assets/img/logo/jis.png" alt="">
                        </div>
                        <div class="detail-box">
                            <h6>JIS Approval</h6>
                            <h6>Certificate</h6>
                            <a href="">
                                <p>Read More >></p>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col d-flex justify-content-center">
                    <div class="box">
                        <div class="img-box">
                            <img src="assets/img/logo/SNI-07-2052-2017.png" alt="">
                        </div>
                        <div class="detail-box">
                            <h6>Steel Bar for</h6>
                            <h6>Reinforcement</h6>
                            <a href="">
                                <p>Read More >></p>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col d-flex justify-content-center">
                    <div class="box">
                        <div class="img-box">
                            <img src="assets/img/logo/SNI 07-0954-2005.jpeg" alt="">
                        </div>
                        <div class="detail-box">
                            <h6>Steel Bar In Coil</h6>
                            <h6></h6>
                            <a href="">
                                <p>Read More >></p>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col d-flex justify-content-center">
                    <div class="box">
                        <div class="img-box">
                            <img src="assets/img/logo/kan.jpeg" alt="">
                        </div>
                        <div class="detail-box">
                            <h6>LP - 455 – IDN</h6>
                            <h6>Accreditation by KAN</h6>
                            <a href="">
                                <p>Read More >></p>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col d-flex justify-content-center">
                    <div class="box">
                        <div class="img-box">
                            <img src="assets/img/logo/SMK3 LOGO.jpeg" alt="">
                        </div>
                        <div class="detail-box">
                            <h6>SMK3 Approval</h6>
                            <h6>Certificate</h6>
                            <a href="">
                                <p>Read More >></p>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col d-flex justify-content-center">
                    <div class="box">
                        <div class="img-box">
                            <img src="assets/img/logo/proper.png" alt="">
                        </div>
                        <div class="detail-box">
                            <h6>Proper Approval</h6>
                            <h6>Certificate</h6>
                            <a href="">
                                <p>Read More >></p>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col d-flex justify-content-center">
                    <div class="box">
                        <div class="img-box">
                            <img src="assets/img/logo/logo zero accident.jpg" alt="">
                        </div>
                        <div class="detail-box">
                            <h6>Zero Accident</h6>
                            <h6>Approval Certificate</h6>
                            <a href="">
                                <p>Read More >></p>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col d-flex justify-content-center">
                    <div class="box">
                        <div class="img-box">
                            <img src="assets/img/logo/sirim.png" alt="">
                        </div>
                        <div class="detail-box">
                            <h6>SIRIM Approval</h6>
                            <h6></h6>
                            <a href="">
                                <p>Read More >></p>
                            </a>
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

    <!-- end expert section -->
@endsection
