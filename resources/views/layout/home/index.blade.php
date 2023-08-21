@extends('layout.tools.main')

@section('content')
    @if (session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show mb-0" role="alert">
            <br>
            {{ session('success') }}
            <button type="button" class="btn-close mb-0 mt-3 pt-4" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif


    <!-- slider section -->
    <section class="slider_section ">
        <div class="container ">
            <div class="row">
                <div class="col-lg-7 col-md-8 mx-auto">
                    <div class="detail-box">
                        <h1>
                            PT. ISPAT INDO <br>
                        </h1>
                        <p>
                            Was Established in Indonesia in 1976
                        </p>
                    </div>
                </div>
            </div>
    </section>
    <!-- end slider section -->
    </div>







    <!-- category section -->

    <!-- end category section -->


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
              PT. Ispat Indo was established in Indonesia in 1976. the company was set up as a 60.000 tpa Greenfield Project, for rolling. Today Ispat Indo has an annual Product capacity in excess of 700.000 tons...
            </p>
            <a href="">
              Read More
            </a>
          </div>
        </div>
        <div class="col-md-6">
          <div class="img-box">
            <iframe width="420" height="315"
              src="https://www.youtube.com/embed/f53DFw5KV14">
            </iframe>
          </div>
        </div>
      </div>
    </div>
  </section>

    <!-- end about section -->



    <!-- Start client -->



  <!-- expert section -->

  <section class="expert_section layout_padding">
    <div class="container">
      <div class="heading_container heading_center">
        <h2>
          Our Achivements
        </h2>
        <p>
          Lorem ipsum dolor sit amet, non odio tincidunt ut ante, lorem a euismod suspendisse vel, sed quam nulla mauris
          iaculis. Erat eget vitae malesuada, tortor tincidunt porta lorem lectus.
        </p>
      </div>
      <div class="row">
        <div class="col d-flex justify-content-center">
          <div class="box">
            <div class="img-box">
              <img src="assets/img/logo/ISO_14001_NEW.png" alt="">
            </div>
            <div class="detail-box">
              <h5>ISO 44001 Approval</h5>
              <h5> Certificate</h5>
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
              <h5>ISO 50001 Approval</h5>
              <h5> Certificate</h5>
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
              <h5>SMK3 Approval</h5>
              <h5> Certificate</h5>
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
              <h5>ISO 9001 Approval</h5>
              <h5> Certificate</h5>
              <a href="">
                <p>Read More >></p>
              </a>
            </div>
          </div>
        </div>

      </div>
      <div class="btn-box">
        <a href="">
          View All Achivements
        </a>
      </div>
    </div>
  </section>

  <!-- end expert section -->






@endsection
