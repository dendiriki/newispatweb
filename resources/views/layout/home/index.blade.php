@extends('layout.tools.main')

@section('content')
<link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/carousel/">

<link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">
    @if (session()->has('success'))
    <div class="alert alert-success alert-dismissible fade show mb-0" role="alert">
        <br>
        {{ session('success') }}
        <button type="button" class="btn-close mb-0 mt-3 pt-4" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif

<section id="hero" class="hero">

    <img src="assets/img/product3.png" alt="" data-aos="fade-in">

    <div class="container">
      <div class="row">
        <div class="col-lg-10">
          <h2 class="text-white" data-aos="fade-up" data-aos-delay="100">PT. ISPAT INDO</h2>
          <p data-aos="fade-up" data-aos-delay="200">international steel company since 1976</p>
        </div>
        <div class="col-lg-5">
        </div>
      </div>
    </div>

  </section>


    <!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->



    <div class="container marketing">

      <!-- Three columns of text below the carousel -->
        <br><br>
      <h1 class="text-center fw-normal">About Us</h1>
      <br><br>

      <div class="row">
        <div class="col-lg-4">
          <h2 class="fw-normal">Products</h2>
          <p>High Carbon Steel Wire Rod, Low Carbon Steel Wire Rod, Cold Heading Quality Steel Wire Rod...</p>
          <p><a class="btn btn-secondary" href="#">View details &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <h2 class="fw-normal">Our Achievements</h2>
          <p>ISO Certificatr, JIS Certificatr, Steel Bar in Coil, KAN, Zero Accident, SMK3 Approval Certificatr, SIRIM...</p>
          <p><a class="btn btn-secondary" href="#">View details &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <h2 class="fw-normal">Industrial Process</h2>
          <p>Electric Arc Furnace, Ladle Refining Furnace, Continuous Casting Machine with...</p>
          <p><a class="btn btn-secondary" href="#">View details &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
      </div><!-- /.row -->


      <!-- START THE FEATURETTES -->

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7 order-md-2">
          <h2 class="featurette-heading fw-normal lh-1">PT. ISPAT INDO</h2>
          <p class="font-content">PT. Ispat Indo was established in Indonesia in 1976. The Company was set up as a 60,000 tpa Greenfield project, for rolling. Today, Ispat Indo has an annual Production capacity in excess of 700,000 tons...</p>

          <div class="row font-content">
            <div class="col-6 ">
                <h5 class="font-content">Product</h5>
                <ul>
                    <li>High Carbon Steel Wire Rod</li>
                    <li>Low Carbon Steel Wire Rod</li>
                    <li>Cold Heading Quality Steel Wire Rod</li>
                    <li>Welding Electrode Grades Steel Wire Rod</li>
                    <li>Bar in Coil for Concrete Reinforcement</li>
                  </ul>
            </div>
            <div class="col-6 ">
                <h5 class="font-content">Industrial Process</h5>
                <ul>
                    <li>Electric Arc Furnace</li>
                    <li>Ladle Refining Furnace</li>
                    <li>Continuous Casting Machine with (M-Electro Magnetic Stire)</li>
                    <li>Wire Rod Mill</li>
                  </ul>
            </div>
            <div class="bottomright">
                <a class="btn btn-primary" href="profilindo" role="button">More Details</a>
          </div>
          </div>
        </div>
        <div class="col-md-5 order-md-1">
            <img src="assets/img/Ispat_Front.jpg" class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500px" height="500px" alt="">
        </div>
      </div>

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7">
          <h2 class="featurette-heading fw-normal lh-1">PT. Ispat Wire Products</h2>
          <p class="font-content">PT. Ispat Wire Products was established in 1991 which is the largest nail producer in Indonesia. Our working philosophy is guided towards continuous improvement in the quality of our products and services so as to surpass the best standards in the industry...</p>

          <div class="row font-content">
            <div class="col-6 ">
                <h5 class="font-content">Product</h5>
                <ul>
                    <li>Nails for Local</li>
                    <li>Nails for Export</li>
                    <li>Straight Bars</li>
                    <li>Steel wire / nail wire</li>
                  </ul>
            </div>
            <div class="col-6 ">
                <h5 class="font-content">Industrial Process</h5>
                <ul>
                    <li>Wire Drawing</li>
                    <li>Nail Making</li>
                    <li>Cutting & Straightening</li>
                  </ul>
            </div>
            <div class="bottomright">
                <a class="btn btn-primary" href="#" role="button">More Details</a>
          </div>
          </div>
        </div>
        <div class="col-md-5 order-md-1">
            <img src="assets/img/iwp_profle_images_01.png" class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500px" height="500px" alt="">
        </div>
      </div>


      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7 order-md-2">
          <h2 class="featurette-heading fw-normal lh-1">PT. Ispat Panca Putera</h2>
          <p class="font-content">PT. Ispat Panca Putera is located in the Gresik Industrial Estate on East Java...</p>

          <div class="row font-content">
            <div class="col-6 ">
                <h5 class="font-content">Product</h5>
                <ul>
                    <li>Round Bar 06 mm - 32 mm</li>
                    <li>Deformed Bar 06 mm - 32 mm</li>
                    <li>Shafting Bar 06 mm - 32 mm</li>
                  </ul>
            </div>
            <div class="bottomright">
                <a class="btn btn-primary" href="#" role="button">More Details</a>
          </div>
          </div>
        </div>
        <div class="col-md-5 order-md-1">
            <img src="assets/img/ipp_profle_images_01.png" class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500px" height="500px" alt="">
        </div>
      </div>

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7">
          <h2 class="featurette-heading fw-normal lh-1">PT. Ispat Bukit Baja</h2>
          <p class="font-content">PT. Ispat Bukit Baja was established in 1994, as a steel manufacturer that produces steel long products i.e. Steel Angle Bars, Steel Channel, Round Bars and Steel Strips...</p>

          <div class="row font-content">
            <div class="col-10 ">
                <h5 class="font-content">Product</h5>
                <ul>
                    <li>Equal Angle Bars (SNI 07-2054-2006 Equivalent to JIS G 3101 and JIS G 3192)</li>
                    <li>Flat Bars (JIS G 3101 for structural steel)</li>
                    <li>U-Channel (SNI 07-0052-2006 Equivalent to JIS G 3101 and JIS G 3192)</li>
                    <li>Steel Strips</li>
                  </ul>
            </div>
            <div class="bottomright">
                <a class="btn btn-primary" href="#" role="button">More Details</a>
          </div>
          </div>
        </div>
        <div class="col-md-5 order-md-1">
            <img src="assets/img/ibb_profle_images_01.png" class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500px" height="500px" alt="">
        </div>
      </div>

      <hr class="featurette-divider">

      <!-- /END THE FEATURETTES -->

    </div

@endsection

