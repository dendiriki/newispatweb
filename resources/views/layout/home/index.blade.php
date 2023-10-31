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
                <p> {{ session('success') }}</p>
            </div>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif








    <!-- slider section -->
    <!-- slider section -->
    <div id="home-carousel" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
                <div class="carousel-fade">
                    <div class="carousel-item active" id="bg1">
                        <!-- <img src="assets/img/wire1.png" class=" w-100" alt="assets/img"> -->
                        <div class="item active">
                            <div class="carousel-caption ">
                                <div class="vertical-section">
                                    <div class="vertical-content">
                                        <div class="col-md-12">
                                            <h2 style="font-size: 77px; font-weight: 700;">Ispat Indo Group</h2>
                                            <h1 style="font-size: 35px;">From industry for Industries</h1>
                                            <!-- <h1 >Ispat Indo group</h1>
                                                                                                                                                                                                                                                                                                                <h2 >Indonesia's Leading Steel wire Manufacturing With 2 Subsidiaries And 8 Exceptional Products</h2> -->
                                            <a href="#">Discovery Our Company</a>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item" id="bg2">
                        <!-- <img src="assets/img/wire3.png" class="d-block w-100" alt="header"> -->
                        <div class="item active">
                            <div class="carousel-caption ">
                                <div class="vertical-section">
                                    <div class="vertical-content">
                                        <div class="col-md-12">
                                            <h2 style="font-size: 77px; font-weight: 700;">Ispat Indo Group</h2>
                                            <h1 style="font-size: 35px;">From industry for Industries</h1>
                                            <!-- <h1 >Ispat Indo group</h1>
                                                                                                                                                                                                                                                                                                              <h2 >Premier Steel wire Factory Sets New Standards for Excellence</h2> -->
                                            <a href="#">Discovery Our Company</a>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item" id="bg3">
                        <!-- <img src="assets/img/wire4.png" class="d-block w-100" alt="header"> -->
                        <div class="item active">
                            <div class="carousel-caption ">
                                <div class="vertical-section">
                                    <div class="vertical-content">
                                        <div class="col-md-12">
                                            <h2 style="font-size: 77px; font-weight: 700;">Ispat Indo Group</h2>
                                            <h1 style="font-size: 35px;">From industry for Industries</h1>
                                            <!-- <h1 >Ispat Indo group</h1>
                                                                                                                                                                                                                                                                                                              <h2 >sells 70% of  products to domestic market and 30% to export markets of Asia-Pacific region.</h2> -->
                                            <a href="#">Discovery Our Company</a>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>

    </div>


    <div class="timpahero"></div>
    <div>



        <section class="about_section layout_padding ">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-sm-6">

                        <div class="detail">
                            <div class="container">
                                <iframe allowfullscreen style="border-radius: 2px;"
                                    src="https://www.youtube.com/embed/f53DFw5KV14"></iframe>
                            </div>
                        </div>

                    </div>
                    <div class="col-md-4 col-sm-6">

                        <div class="detail-box">
                            <div class="heading_container">
                                <div class="col row" style="background-color: transparent;">
                                    <div class="sub-heading"></div>
                                    <h2>
                                        About Us
                                    </h2>
                                </div>
                            </div>
                            <p>
                                PT. Ispat Indo was established in Indonesia in 1976. the company was set up as a 60.000 tpa
                                Greenfield Project, for rolling. Today Ispat Indo has an annual Product capacity in excess
                                of 700.000 tons...
                            </p>
                            <a href="">
                                More on Our History
                            </a>
                        </div>

                    </div>
                </div>
            </div>
        </section>
        <div class="timpaau"> </div>

        <!-- end about section -->

        <section class="about_section layout_padding">
            <div class="container">
                <div class="row">
                    <div class="col-12">

                        <div class="heading_container heading_center p-bottom-40">
                            <h2>
                                OUR GRUP
                            </h2>
                            <br>
                        </div>

                        <div class="row no-gutters " style="border-bottom: 1px solid;">
                            <div class="col-md-6 mb-md-0 p-md-4">
                                <img src="{{ asset('assets/img/iwp_profle_images_02.png') }}" class="w-100" alt="images"
                                    style="max-width: 30rem;">
                            </div>
                            <div class="col-md-6 position-static p-4 pl-md-0">
                                <h5 class="mt-0">PT. Ispat Wire Products Company Profile</h5> <br>
                                <p>PT. Ispat Wire Products was established in 1991, which is the largest nail producer in
                                    Indonesia. Our working philosophy is guided towards continuous improvement in the
                                    quality of our
                                    products and services so as to surpass the best standards in the industry..</p>
                                <a href="#">Read more</a>
                            </div>
                        </div>
                        <div class="row no-gutters " style="border-bottom: 1px solid;">
                            <div class="col-md-6 mb-md-0 p-md-4 order-md-2">
                                <img src="{{ asset('assets/img/ibb_profle_images_03.png') }}" class="w-100" alt="images"
                                    style="max-width: 30rem;">
                            </div>
                            <div class="col-md-6 position-static p-4 pl-md-0 order-md-1">
                                <h5 class="mt-0">PT. Ispat Bukit Baja Company Profile</h5> <br>
                                <p>PT. Ispat Bukit Baja was established in 1994 to produce Steel Angles and Channels for
                                    domestic and export requirements. Our working philosophy is aimed at continuous
                                    improvement in the quality of products and services so as to surpass the best standards
                                    in the industry.</p>
                                <a href="#">Read more</a>
                            </div>
                        </div>

                        <!-- <div class="form-row">
                                                                                    <div class="col-md-6 mb-3">
                                                                                      <div class="card" style="margin: 5px; background: #f7f7f7;">
                                                                                        <img src="images/news.png" class="card-img-top" alt="img-box">
                                                                                        <div class="card-body">
                                                                                          <h5 class="card-title">Card title</h5>
                                                                                          <small class="text-muted">Last updated 3 mins ago</small>
                                                                                          <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                                                                          <a href="#">Read More</a>
                                                                                        </div>
                                                                                      </div>
                                                                                    </div>

                                                                                    <div class="col-md-6 mb-3">
                                                                                      <div class="card" style="margin: 5px; background: #f7f7f7;">
                                                                                        <img src="images/news.png" class="card-img-top" alt="img-box">
                                                                                        <div class="card-body">
                                                                                          <h5 class="card-title">Card title</h5>
                                                                                          <small class="text-muted">Last updated 3 mins ago</small>
                                                                                          <br>
                                                                                          <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                                                                          <a href="#">Read More</a>
                                                                                        </div>
                                                                                      </div>
                                                                                    </div>

                                                                                  </div> -->

                    </div>
                </div>
            </div>
        </section>

        {{-- <div class="row no-gutters " style="border-bottom: 1px solid;">
            <div class="col-md-6 mb-md-0 p-md-4">
                <img src="{{ asset('assets/img/iwp_profle_images_01.png') }}" class="w-100" alt="images"
                    style="max-width: 30rem;">
            </div>
            <div class="col-md-6 position-static p-4 pl-md-0">
                <h5 class="mt-0">PT. Ispat Wire Products was established in 1991, which is the largest nail producer
                    in
                    Indonesia. Our working philosophy is guided towards continuous improvement in the quality of our
                    products and services so as to surpass the best standards in the industry.</p>
                    <a href="#">Read more</a>
            </div>
        </div>
        <div class="row no-gutters " style="border-bottom: 1px solid;">
            <div class="col-md-6  order-md-2 mt-4 mb-4">
                <img src="{{ asset('assets/img/ibb_profle_images_01.png') }}" class="w-100" alt="images"
                    style="max-width: 30rem;">
            </div>
            <div class="col-md-6 mb-md-0 p-md-4 position-static order-md-1 p-4 pl-md-0">
                <h5 class="mt-0">PT. Ispat Bukit Baja Company Profile</h5> <br>
                <p>PT. Ispat Bukit Baja was established in 1994 to produce Steel Angles and Channels for domestic and
                    export requirements. Our working philosophy is aimed at continuous improvement in the quality of
                    products and services so as to surpass the best standards in the industry.</p>
                <a href="#">Read more</a>
            </div>
        </div>
        <br><br><br><br> --}}

        {{-- <!-- START THE FEATURETTES -->
        <div class="container marketing">

            <hr class="featurette-divider">

            <h1 class="featurette-heading text-center" style="font-size: 36px; font-weight: bold;">Our Group</h1>
            <br><br><br><br>

            <div class="row featurette">
                <div class="col-md-7">
                    <h2 class="featurette-heading">PT. Ispat Wire Products Company Profile</h2>
                    <p class="lead">PT. Ispat Wire Products was established in 1991, which is the largest nail producer in
                        Indonesia. Our working philosophy is guided towards continuous improvement in the quality of our
                        products and services so as to surpass the best standards in the industry.</p>
                </div>
                <div class="col-md-5">
                    <img src="{{ asset('assets/img/iwp_profle_images_01.png') }}" alt="Company Profile Image" width="450"
                        height="450">
                </div>
            </div>



            <hr class="featurette-divider">

            <div class="row featurette">
                <div class="col-md-7 order-md-2">
                    <h2 class="featurette-heading">PT. Ispat Bukit Baja Company Profile
                    </h2>
                    <p class="lead">PT. Ispat Bukit Baja was established in 1994 to produce Steel Angles and Channels for
                        domestic and export requirements. Our working philosophy is aimed at continuous improvement in the
                        quality of products and services so as to surpass the best standards in the industry.</p>
                </div>
                <div class="col-md-5 order-md-1">
                    <img src="{{ asset('assets/img/ibb_profle_images_01.png') }}" alt="Company Profile Image" width="450"
                        height="450">

                </div>
            </div>

            <hr class="featurette-divider"> --}}



        <!-- /END THE FEATURETTES -->

        <!-- Start client -->
        <section class="product_section layout_padding">
            <!-- Section Title -->
            <div class="detail-box">
                <div class="heading_container container">
                    <div class="col row">
                        <div class="sub-heading"></div>
                        <h2>
                            Our Product
                        </h2>
                    </div>
                </div>
            </div>

            <!-- === Clients === -->
            <br>
            <div class="container ">
                <div class="row">

                    <div id="owl-clients" class="owl-carousel owl-theme client text-center">

                        <!-- === Client 1 === -->
                        <div class="client-item text-center">
                            <a href="{{ route('highcarbon') }}">
                                <img class="img-responsive" src="assets/img/product1.png" alt="">
                                <br>
                                <h6>High Carbon Steel</h6>
                            </a>
                        </div>

                        <!-- === Client 2 === -->
                        <div class="client-item text-center">
                            <a href="{{ route('lowcarbon') }}">
                                <img class="img-responsive" src="assets/img/product2.png" alt="">
                                <br>
                                <h6>Low Carbon Steel</h6>
                            </a>
                        </div>

                        <!-- === Client 3 === -->
                        <div class="client-item text-center">
                            <a href="{{ route('clodheading') }}">
                                <img class="img-responsive" src="assets/img/product3.png" alt="">
                                <br>
                                <h6>CH Quality Steel</h6>
                            </a>
                        </div>

                        <!-- === Client 4 === -->
                        <div class="client-item text-center">
                            <a href="{{ route('generalpw') }}">
                                <img class="img-responsive" src="assets/img/product4.png" alt="">
                                <br>
                                <h6>General Purpose WR</h6>
                            </a>
                        </div>

                        <!-- === Client 5 === -->
                        <div class="client-item text-center">
                            <a href="{{ route('welding') }}">
                                <img class="img-responsive" src="assets/img/product5.png" alt="">
                                <br>
                                <h6>Welding Electrode</h6>
                            </a>
                        </div>

                        <!-- === Client 6 === -->
                        <div class="client-item text-center">
                            <a href="{{ route('pline') }}">
                                <img class="img-responsive" src="assets/img/product6.png" alt="">
                                <br>
                                <h6>Plain / Deform Bar</h6>
                            </a>
                        </div>

                        <!-- === Client 7 === -->
                        <div class="client-item text-center">
                            <a href="{{ route('structure') }}">
                                <img class="img-responsive" src="assets/img/product7.png" alt="">
                                <br>
                                <h6>Structural Steel</h6>
                            </a>
                        </div>

                        <!-- === Client 8 === -->
                        <div class="client-item text-center">
                            <a href="{{ route('nails') }}">
                                <img class="img-responsive" src="assets/img/product8.png" alt="">
                                <br>
                                <h6>Nail & Nail Wire</h6>
                            </a>
                        </div>



                    </div><!-- /#owl-testimonials -->

                </div> <!-- /.row -->
            </div> <!-- /.container -->


        </section>
        <!-- End client -->








        <!-- expert section -->

        <section class="expert_section layout_padding">
            <div class="container">
                <div class="row">
                    <div class="heading_container heading_center col-md-8">
                        <div class="col row sub-heading">
                            <h2>
                                Our Achivements
                            </h2>
                        </div>
                        <p class="text-left">
                            Our notable accomplishments and successes that we have attained over the years. These
                            accomplishments reflect our dedication to excellence, innovation, and a commitment to
                            delivering high-quality products and services.
                        </p>
                    </div>
                    <div class="col-4">
                        <div class="btn-box">
                            <a href="">
                                View All Achivements
                            </a>
                        </div>
                    </div>
                </div>
                <br>
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                    </ol>
                    <div class="carousel-inner">

                        <div class="carousel-item active">
                            <div class="row">
                                <div class="col-md-4 d-flex justify-content-center">
                                    <div class=" text-center">
                                        <div class="box">
                                            <div class="img-box">
                                                <img src="assets/img/logo/ISO_14001_NEW.png" alt="">
                                            </div>
                                            <div class="detail-box">
                                                <h6>ISO 4001 Approval Certificate</h6>
                                                <h6></h6>
                                                <a href="{{ route('isocertification') }}">
                                                    Read more
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 d-flex justify-content-center">
                                    <div class=" text-center">
                                        <div class="box">
                                            <div class="img-box">
                                                <img src="assets/img/logo/ISO_45001_NEW.png" alt="">
                                            </div>
                                            <div class="detail-box">
                                                <h6>ISO 45001 Approval Certificate</h6>
                                                <h6></h6>
                                                <a href="{{ route('isocertification') }}">
                                                    Read more
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 d-flex justify-content-center">
                                    <div class=" text-center">
                                        <div class="box">
                                            <div class="img-box">
                                                <img src="assets/img/logo/ISO_50001_NEW.png" alt="">
                                            </div>
                                            <div class="detail-box">
                                                <h6>ISO 50001 Approval Certificate</h6>
                                                <h6></h6>
                                                <a href="{{ route('isocertification') }}">
                                                    Read more
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="carousel-item">
                            <div class="row">
                                <div class="col-md-4 d-flex justify-content-center">
                                    <div class=" text-center">
                                        <div class="box">
                                            <div class="img-box">
                                                <img src="assets/img/logo/ISO_9001_NEW.png" alt="">
                                            </div>
                                            <div class="detail-box">
                                                <h6>ISO 9001 Approval Certificate</h6>
                                                <h6></h6>
                                                <a href="{{ route('isocertification') }}">
                                                    Read more
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 d-flex justify-content-center">
                                    <div class=" text-center">
                                        <div class="box">
                                            <div class="img-box">
                                                <img src="assets/img/logo/jis.png" alt="">
                                            </div>
                                            <div class="detail-box">
                                                <h6>JIS Approval Certificate</h6>
                                                <h6></h6>
                                                <a href="{{ route('jisapproval') }}">
                                                    Read more
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 d-flex justify-content-center">
                                    <div class=" text-center">
                                        <div class="box">
                                            <div class="img-box">
                                                <img src="assets/img/logo/SNI-07-2052-2017.png" alt="">
                                            </div>
                                            <div class="detail-box">
                                                <h6>Steel Bar for Reinforcement</h6>
                                                <h6></h6>
                                                <a href="{{ route('sni') }}">
                                                    Read more
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="carousel-item">
                            <div class="row">
                                <div class="col-md-4 d-flex justify-content-center">
                                    <div class=" text-center">
                                        <div class="box">
                                            <div class="img-box">
                                                <img src="assets/img/logo/SNI 07-0954-2005.jpeg" alt="">
                                            </div>
                                            <div class="detail-box">
                                                <h6>Steel Bar In Coil</h6>
                                                <h6></h6>
                                                <a href="{{ route('sni') }}">
                                                    Read more
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 d-flex justify-content-center">
                                    <div class=" text-center">
                                        <div class="box">
                                            <div class="img-box">
                                                <img src="assets/img/logo/kan.jpeg" alt="">
                                            </div>
                                            <div class="detail-box">
                                                <h6>LP - 455 – IDN Accreditation by KAN</h6>
                                                <h6></h6>
                                                <a href="{{ route('kan') }}">
                                                    Read more
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 d-flex justify-content-center">
                                    <div class=" text-center">
                                        <div class="box">
                                            <div class="img-box">
                                                <img src="assets/img/logo/SMK3 LOGO.jpeg" alt="">
                                            </div>
                                            <div class="detail-box">
                                                <h6>SMK3 Approval ertificate</h6>
                                                <h6></h6>

                                                <a href="{{ route('sirim') }}">
                                                    Read more
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="carousel-item">
                            <div class="row">
                                <div class="col-md-4 d-flex justify-content-center">
                                    <div class=" text-center">
                                        <div class="box">
                                            <div class="img-box">
                                                <img src="assets/img/logo/proper.png" alt="">
                                            </div>
                                            <div class="detail-box">
                                                <h6>Proper Approval Certificate</h6>
                                                <h6></h6>
                                                <a href="{{ route('tkdn') }}">
                                                    Read more
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 d-flex justify-content-center">
                                    <div class=" text-center">
                                        <div class="box">
                                            <div class="img-box">
                                                <img src="assets/img/logo/logo zero accident.jpg" alt="">
                                            </div>
                                            <div class="detail-box">
                                                <h6>Zero Accident Approval Certificate</h6>
                                                <h6></h6>
                                                <a href="{{ route('sni') }}">
                                                    Read more
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 d-flex justify-content-center">
                                    <div class=" text-center">
                                        <div class="box">
                                            <div class="img-box">
                                                <img src="assets/img/logo/sirim.png" alt="">
                                            </div>
                                            <div class="detail-box">
                                                <h6>SIRIM Approval</h6>
                                                <h6></h6>
                                                <a href="{{ route('sirim') }}">
                                                    Read more
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <br>
                    <br>
                    <br>
                    {{-- <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a> --}}
                </div>

        </section>

        <!-- end expert section -->










        <!-- Start news section -->

        <!-- <section class="news">
                                                                                                                                                                                                                                                                                            <div class="container">
                                                                                                                                                                                                                                                                                              <div class="heading_container col-md-12">
                                                                                                                                                                                                                                                                                                <div class="col row sub-heading">
                                                                                                                                                                                                                                                                                                  <h2 class="text-left">
                                                                                                                                                                                                                                                                                                    Instant Steel Wire Solutions at Your Fingertips!
                                                                                                                                                                                                                                                                                                  </h2>
                                                                                                                                                                                                                                                                                                </div>
                                                                                                                                                                                                                                                                                                <p class="col-md-7">
                                                                                                                                                                                                                                                                                                  Stay Connected and Informed with Our Quick Contact Feature on the
                                                                                                                                                                                                                                                                                                  Steel wire Factory Website. Reach Out to Us Anytime, Anywhere!"
                                                                                                                                                                                                                                                                                                </p>
                                                                                                                                                                                                                                                                                                <br>
                                                                                                                                                                                                                                                                                                <a href="">Contact us</a>
                                                                                                                                                                                                                                                                                              </div>
                                                                                                                                                                                                                                                                                            </div>
                                                                                                                                                                                                                                                                                          </section> -->

        <!-- end news section -->














        <!-- Start Stat -->
        <section id="stat" class="parallax-bg overlay-dark p-top-80 p-bottom-40 white-color"
            style="background-image:url(assets/img/backround.png); height: 600px" data-stellar-background-ratio="0.5">

            <div class="content-below"
                style="margin-top: 50px; text-align: center; padding-top: 40px; padding-bottom: 100px;">
                <h1 style="color: white; font-weight: bold;">Safety Performance Board</h1>
            </div>


            <div class="container">
                <div class="row">

                    <!-- === Stats Item 1 === -->
                    <div class="col-md-3 col-sm-6 p-bottom-40">
                        <div class="stat-item stat-item-type-2 wow zoomIn" data-wow-duration="1s" data-wow-delay="0.3s">
                            <div class="stat-item-icon">
                                <i class="fa-solid fa-person-falling"></i>
                            </div>
                            <div class="stat-item-number">
                                2
                            </div>
                            <div class="stat-item-text">
                                Near Miss
                            </div>
                        </div>
                    </div> <!-- /.col -->

                    <!-- === Stats Item 2 === -->
                    <div class="col-md-3 col-sm-6 p-bottom-40">
                        <div class="stat-item stat-item-type-2 wow zoomIn" data-wow-duration="1s" data-wow-delay="0.4s">
                            <div class="stat-item-icon">
                                <i class="fa-solid fa-kit-medical"></i>
                            </div>
                            <div class="stat-item-number">
                                1
                            </div>
                            <div class="stat-item-text">
                                First AID Cases
                            </div>
                        </div>
                    </div> <!-- /.col -->

                    <!-- === Stats Item 3 === -->
                    <div class="col-md-3 col-sm-6 p-bottom-40">
                        <div class="stat-item stat-item-type-2 wow zoomIn" data-wow-duration="1s" data-wow-delay="0.5s">
                            <div class="stat-item-icon">
                                <i class="fa-solid fa-person-falling-burst"></i>
                            </div>
                            <div class="stat-item-number">
                                2
                            </div>
                            <div class="stat-item-text">
                                Medical Treatment Cases
                            </div>
                        </div>
                    </div> <!-- /.col -->

                    <!-- === Stats Item 4 === -->
                    <div class="col-md-3 col-sm-6 p-bottom-40">
                        <div class="stat-item stat-item-type-2 wow zoomIn" data-wow-duration="1s" data-wow-delay="0.6s">
                            <div class="stat-item-icon">
                                <i class="fa-solid fa-skull"></i>
                            </div>
                            <div class="stat-item-number">
                                0
                            </div>
                            <div class="stat-item-text">
                                Lost Work Days Cases
                            </div>
                        </div>
                    </div> <!-- /.col -->



                </div> <!-- /.row -->
            </div> <!-- /.container -->
        </section>
        <!-- End Stat -->












        <section class="expert_section layout_padding">
            <div class="about_section">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col">
                            <div class="heading_container col-md-12">
                                <div class="col row sub-heading">
                                    <h2 class="text-left">
                                        Contact us
                                    </h2>
                                </div>
                                <p class="col-md-7">
                                    We're here to help and answer any question you might have. We look forward to
                                    hearing
                                    from you.
                                </p>
                                <br>
                            </div>


                            <div class="container_CS">

                                <div id="content1">
                                    <img src="assets/img/icon/Markicon.png" alt="icon"
                                        style="max-width: 6rem; padding: 15px;">
                                    <h1>Address</h1>
                                    <p>Desa Kedungturi, Taman, Sidoarjo
                                        PO BOX 1083, Indonesia - 60010</p>
                                </div>

                                <div id="content2">
                                    <img src="assets/img/icon/Phoneicon.png" alt="icon"
                                        style="max-width: 6rem; padding: 15px;">
                                    <h1>Call Us</h1>
                                    <p>Telp : (62) 31-7887000 <br>
                                        Fax : (62) 31-7887500 <br>
                                        WA : (62) 8155152222</p>
                                </div>

                                <div id="content3">
                                    <img src="assets/img/icon/Emailicon.png" alt="icon"
                                        style="max-width: 6rem; padding: 15px;">
                                    <h1>Email Us</h1>
                                    <p>marketing.indo@mittalsteel.com <br>custsupp.indo@mittalsteel.com</p>
                                </div>

                                <div id="content4">
                                    <img src="assets/img/icon/Clockicon.png" alt="icon"
                                        style="max-width: 6rem; padding: 15px;">
                                    <h1>Open Hours</h1>
                                    <p>Monday - Friday <br>9.00 - 18.00 WIB</p>
                                </div>

                                <div id="sidebar">
                                    <!-- <img src="assets/img/contactus.png"> -->
                                    <img alt="">
                                    <a href="">Contact Us</a>
                                </div>

                            </div>

                        </div>
                    </div>
                </div>
            </div>
    </div>
    </section>


    {{-- <section class="safety_section">
    <div class="container">
      <div class="row">
        <div class="col-md-6">

        </div>
        <div class="col-md-6">

        </div>
      </div>
    </div>
  </section> --}}
@endsection
