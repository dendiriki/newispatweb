@extends('layout.tools.main_indo')

@section('content')
    <section class="job_section layout_padding">
        <div class="container">
            <div class="heading_container col-md-12">
                <div class="col row sub-heading">
                    <h2 class="text-left">
                        <!-- AVAILABLE POSITIONS -->
                        careers
                    </h2>
                </div>
            </div>

            <div class="job_container">
                <h4 class="job_heading">
                    Jobs for you
                </h4>
                <br><br><br>
                <div class="row">


                    @foreach ($jobs as $job)
                        <div class="col-lg-6">
                            <div class="box">
                                <div class="job_content-box">
                                    <div class="detail-box">
                                        <h5>
                                            {{ $job->name }}
                                        </h5>
                                        <div class="detail-info">
                                            <div class="col">
                                                <div class="row">
                                                    <i class="fa-solid fa-dollar-sign"></i>
                                                    <h6>
                                                        <span>
                                                            {{ $job->salary }}
                                                        </span>
                                                    </h6>
                                                </div>
                                                <div class="row">
                                                    <i class="fa fa-solid fa-graduation-cap"></i>
                                                    <h6>
                                                        <span>
                                                            {{ $job->tertiaryeducation }}
                                                        </span>
                                                    </h6>
                                                </div>
                                                <div class="row">
                                                    <i class="fa fa-solid fa-briefcase"></i>
                                                    <h6>
                                                        <span>
                                                            {{ $job->description }}
                                                        </span>
                                                    </h6>
                                                </div>
                                                <br>
                                                <div class="row">
                                                    <i class="fa fa-solid fa-calendar-days"></i>
                                                    <h6 class="text-muted">
                                                        <span>
                                                            updated 5 days ago
                                                        </span>
                                                    </h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <div class="option-box">
                                    <a href="{{ $job->runninghour }}" class="apply-btn">
                                        Apply Now
                                    </a>
                                </div>
                            </div>
                        </div>
                    @endforeach



                </div>
            </div>

    </section>
    <!-- end job section -->
@endsection
