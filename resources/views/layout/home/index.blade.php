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

    <section class="about_section layout_padding ">
        <div class="container p-bottom-80">
            <div class="row">
                <div class="col-md-6 order-md-2">
                    <div class="detail-box">
                        <div class="heading_container">
                            <h2>
                                About Us
                            </h2>
                        </div>
                        <p>
                            Normal distribution of letters, as opposed to using 'Content here, content here', making it look
                            like
                            readable English. Many desktop publishing packages and web page editors has a more-or-less
                            normal
                            distribution of letters, as opposed to using 'Content here, content here', making it look like
                            readable
                            English. Many desktop publishing packages and web page editors
                        </p>
                        <a href="">
                            Read More
                        </a>
                    </div>
                </div>
                <div class="col-md-6 order-md-1">
                    <div class="img-box">
                        <img src="assets/img/about-img.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>

        <br><br><br>

        <div class="container p-bottom-80">
            <div class="row">
                <div class="col-md-6 order-md-1">
                    <div class="detail-box">
                        <div class="heading_container">
                            <h2>
                                About Us
                            </h2>
                        </div>
                        <p>
                            Normal distribution of letters, as opposed to using 'Content here, content here', making it look
                            like
                            readable English. Many desktop publishing packages and web page editors has a more-or-less
                            normal
                            distribution of letters, as opposed to using 'Content here, content here', making it look like
                            readable
                            English. Many desktop publishing packages and web page editors
                        </p>
                        <a href="">
                            Read More
                        </a>
                    </div>
                </div>
                <div class="col-md-6 order-md-2">
                    <div class="img-box">
                        <img src="assets/img/about-img.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>


        <br><br><br>

        <div class="container p-bottom-80">
            <div class="row">
                <div class="col-md-6 order-md-2">
                    <div class="detail-box">
                        <div class="heading_container">
                            <h2>
                                About Us
                            </h2>
                        </div>
                        <p>
                            Normal distribution of letters, as opposed to using 'Content here, content here', making it look
                            like
                            readable English. Many desktop publishing packages and web page editors has a more-or-less
                            normal
                            distribution of letters, as opposed to using 'Content here, content here', making it look like
                            readable
                            English. Many desktop publishing packages and web page editors
                        </p>
                        <a href="">
                            Read More
                        </a>
                    </div>
                </div>
                <div class="col-md-6 order-md-1">
                    <div class="img-box">
                        <img src="assets/img/about-img.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>



    </section>

    <!-- end about section -->



    <!-- Start client -->
    <!-- Start client -->
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
                        <a href="">
                            <img class="img-responsive" src="assets/img/SVG.png" alt="">
                            <h5>High Carbon Steel</h5>
                        </a>
                    </div>

                    <!-- === Client 2 === -->
                    <div class="client-item text-center">
                        <a href="">
                            <img class="img-responsive" src="assets/img/SVG-1.png" alt="">
                            <h5>Low Carbon Steel</h5>
                        </a>
                    </div>

                    <!-- === Client 3 === -->
                    <div class="client-item text-center">
                        <a href="">
                            <img class="img-responsive" src="assets/img/SVG-2.png" alt="">
                            <h5>GH Quality Steel</h5>
                        </a>
                    </div>

                    <!-- === Client 4 === -->
                    <div class="client-item text-center">
                        <a href="">
                            <img class="img-responsive" src="assets/img/SVG-3.png" alt="">
                            <h5>General Purpose WR</h5>
                        </a>
                    </div>

                    <!-- === Client 5 === -->
                    <div class="client-item text-center">
                        <a href="">
                            <img class="img-responsive" src="assets/img/SVG-4.png" alt="">
                            <h5>Welding Electrode</h5>
                        </a>
                    </div>

                    <!-- === Client 6 === -->
                    <div class="client-item text-center">
                        <a href="">
                            <img class="img-responsive" src="assets/img/SVG-5.png" alt="">
                            <h5>Plain / Deform Bar</h5>
                        </a>
                    </div>

                    <!-- === Client 7 === -->
                    <div class="client-item text-center">
                        <a href="">
                            <img class="img-responsive" src="assets/img/SVG-6.png" alt="">
                            <h5>Structural Steel</h5>
                        </a>
                    </div>

                    <!-- === Client 8 === -->
                    <div class="client-item text-center">
                        <a href="">
                            <img class="img-responsive" src="assets/img/SVG-7.png" alt="">
                            <h5>Nail & Nail Wire</h5>
                        </a>
                    </div>


                    <!-- === Pagination dengan kelas custom-owl-dots === -->
                    <!-- <div class="owl-dots custom-owl-dots"></div> -->

                </div><!-- /#owl-testimonials -->

            </div> <!-- /.row -->
        </div> <!-- /.container -->

    </section>





    <!-- job section -->
    <section class="job_section layout_padding">
        <div class="container">
            <div class="heading_container heading_center">
                <h2>
                    RECENT & FEATURED JOBS
                </h2>
            </div>
            <div class="job_container">
                <h4 class="job_heading">
                    Featured Jobs
                </h4>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="box">
                            <div class="job_content-box">
                                <div class="img-box">
                                    <img src="assets/img/job_logo1.png" alt="">
                                </div>
                                <div class="detail-box">
                                    <h5>
                                        Development Team Lead
                                    </h5>
                                    <div class="detail-info">
                                        <h6>
                                            <i class="fa fa-map-marker" aria-hidden="true"></i>
                                            <span>
                                                Washington. D.C.
                                            </span>
                                        </h6>
                                        <h6>
                                            <i class="fa fa-money" aria-hidden="true"></i>
                                            <span>
                                                $1200 - $1300
                                            </span>
                                        </h6>
                                    </div>
                                </div>
                            </div>
                            <div class="option-box">
                                <button class="fav-btn">
                                    <i class="fa fa-heart-o" aria-hidden="true"></i>
                                </button>
                                <a href="" class="apply-btn">
                                    Apply Now
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="box">
                            <div class="job_content-box">
                                <div class="img-box">
                                    <img src="assets/img/job_logo2.png" alt="">
                                </div>
                                <div class="detail-box">
                                    <h5>
                                        Make my website responsive device compatible
                                    </h5>
                                    <div class="detail-info">
                                        <h6>
                                            <i class="fa fa-map-marker" aria-hidden="true"></i>
                                            <span>
                                                New York
                                            </span>
                                        </h6>
                                        <h6>
                                            <i class="fa fa-money" aria-hidden="true"></i>
                                            <span>
                                                $200 - $340
                                            </span>
                                        </h6>
                                    </div>
                                </div>
                            </div>
                            <div class="option-box">
                                <button class="fav-btn">
                                    <i class="fa fa-heart-o" aria-hidden="true"></i>
                                </button>
                                <a href="" class="apply-btn">
                                    Apply Now
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="job_container">
                <h4 class="job_heading">
                    Recent Jobs
                </h4>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="box">
                            <div class="job_content-box">
                                <div class="img-box">
                                    <img src="assets/img/job_logo3.png" alt="">
                                </div>
                                <div class="detail-box">
                                    <h5>
                                        Looking Graphic Designer (Logo + UI)
                                    </h5>
                                    <div class="detail-info">
                                        <h6>
                                            <i class="fa fa-map-marker" aria-hidden="true"></i>
                                            <span>
                                                Washington. D.C.
                                            </span>
                                        </h6>
                                        <h6>
                                            <i class="fa fa-money" aria-hidden="true"></i>
                                            <span>
                                                $1200/mo
                                            </span>
                                        </h6>
                                    </div>
                                </div>
                            </div>
                            <div class="option-box">
                                <button class="fav-btn">
                                    <i class="fa fa-heart-o" aria-hidden="true"></i>
                                </button>
                                <a href="" class="apply-btn">
                                    Apply Now
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="box">
                            <div class="job_content-box">
                                <div class="img-box">
                                    <img src="assets/img/job_logo6.png" alt="">
                                </div>
                                <div class="detail-box">
                                    <h5>
                                        Are you Typography Expert?
                                    </h5>
                                    <div class="detail-info">
                                        <h6>
                                            <i class="fa fa-map-marker" aria-hidden="true"></i>
                                            <span>
                                                New York
                                            </span>
                                        </h6>
                                        <h6>
                                            <i class="fa fa-money" aria-hidden="true"></i>
                                            <span>
                                                $56 - $90
                                            </span>
                                        </h6>
                                    </div>
                                </div>
                            </div>
                            <div class="option-box">
                                <button class="fav-btn">
                                    <i class="fa fa-heart-o" aria-hidden="true"></i>
                                </button>
                                <a href="" class="apply-btn">
                                    Apply Now
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="box">
                            <div class="job_content-box">
                                <div class="img-box">
                                    <img src="assets/img/job_logo5.png" alt="">
                                </div>
                                <div class="detail-box">
                                    <h5>
                                        Looking WordPress Developer for ThemeForest
                                    </h5>
                                    <div class="detail-info">
                                        <h6>
                                            <i class="fa fa-map-marker" aria-hidden="true"></i>
                                            <span>
                                                Washington. D.C.
                                            </span>
                                        </h6>
                                        <h6>
                                            <i class="fa fa-money" aria-hidden="true"></i>
                                            <span>
                                                $400 - $540
                                            </span>
                                        </h6>
                                    </div>
                                </div>
                            </div>
                            <div class="option-box">
                                <button class="fav-btn">
                                    <i class="fa fa-heart-o" aria-hidden="true"></i>
                                </button>
                                <a href="" class="apply-btn">
                                    Apply Now
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="box">
                            <div class="job_content-box">
                                <div class="img-box">
                                    <img src="assets/img/job_logo4.png" alt="">
                                </div>
                                <div class="detail-box">
                                    <h5>
                                        Hiring Web Designer for Project
                                    </h5>
                                    <div class="detail-info">
                                        <h6>
                                            <i class="fa fa-map-marker" aria-hidden="true"></i>
                                            <span>
                                                Washington. D.C.
                                            </span>
                                        </h6>
                                        <h6>
                                            <i class="fa fa-money" aria-hidden="true"></i>
                                            <span>
                                                $350 - $450
                                            </span>
                                        </h6>
                                    </div>
                                </div>
                            </div>
                            <div class="option-box">
                                <button class="fav-btn">
                                    <i class="fa fa-heart-o" aria-hidden="true"></i>
                                </button>
                                <a href="" class="apply-btn">
                                    Apply Now
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="btn-box">
                <a href="">
                    View All
                </a>
            </div>
        </div>
    </section>
    <!-- end job section -->











    <!-- expert section -->

    <section class="expert_section layout_padding">
        <div class="container">
            <div class="heading_container heading_center">
                <h2>
                    LOOKING FOR EXPERTS?
                </h2>
                <p>
                    Lorem ipsum dolor sit amet, non odio tincidunt ut ante, lorem a euismod suspendisse vel, sed quam nulla
                    mauris
                    iaculis. Erat eget vitae malesuada, tortor tincidunt porta lorem lectus.
                </p>
            </div>
            <div class="row">
                <div class="col-md-6 col-lg-4 mx-auto">
                    <div class="box">
                        <div class="img-box">
                            <img src="assets/img/e1.jpg" alt="">
                        </div>
                        <div class="detail-box">
                            <a href="">
                                Martin Anderson
                            </a>
                            <h6 class="expert_position">
                                <span>
                                    Web Anaylzer
                                </span>
                                <span>
                                    41 Jobs Done
                                </span>
                            </h6>
                            <span class="expert_rating">
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                            </span>
                            <p>
                                Lorem ipsum dolor sit amet, non odio tincidunt ut ante, lorem a euismod suspendisse vel, sed
                                quam
                                nulla
                                mauris iaculis.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mx-auto">
                    <div class="box">
                        <div class="img-box">
                            <img src="assets/img/e2.jpg" alt="">
                        </div>
                        <div class="detail-box">
                            <a href="">
                                Semanta Klores
                            </a>
                            <h6 class="expert_position">
                                <span>
                                    Graphic Designer
                                </span>
                                <span>
                                    32 Jobs Done
                                </span>
                            </h6>
                            <span class="expert_rating">
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                            </span>
                            <p>
                                Lorem ipsum dolor sit amet, non odio tincidunt ut ante, lorem a euismod suspendisse vel, sed
                                quam
                                nulla
                                mauris iaculis.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mx-auto">
                    <div class="box">
                        <div class="img-box">
                            <img src="images/e3.jpg" alt="">
                        </div>
                        <div class="detail-box">
                            <a href="">
                                Ryan Martines
                            </a>
                            <h6 class="expert_position">
                                <span>
                                    SEO Expert
                                </span>
                                <span>
                                    27 Jobs Done
                                </span>
                            </h6>
                            <span class="expert_rating">
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                            </span>
                            <p>
                                Lorem ipsum dolor sit amet, non odio tincidunt ut ante, lorem a euismod suspendisse vel, sed
                                quam
                                nulla
                                mauris iaculis.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="btn-box">
                <a href="">
                    View All Freelancers
                </a>
            </div>
        </div>
    </section>
@endsection
