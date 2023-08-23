@extends('layout.tools.main')

@section('content')
    <!-- ====== Content dari customer center -->

    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/carousel/">

    <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">


    <div class="timpanav">

    </div>



    <section class="expert_section layout_padding">
        <div class="container">
            <div class="heading_container ">
                    <div class="container">
                        <div class="row">
                            <div class="col-10">
                                <h3 class="hider-font">Customer Center</h3>
                                <br>
                                <form method="POST" action="/customer-post">
                                    @csrf
                                    <div class="mt-3">
                                        <div class="row">
                                            <div class="col-4">
                                                <h6>Option</h6>
                                                <select class="form-control" name="option">
                                                    <option selected disabled>Select an option</option>
                                                    <option value="Complain">Complain</option>
                                                    <option value="Feedback">Feedback</option>
                                                    <option value="Suggestion">Suggestion</option>
                                                    <option value="Enquiry">Enquiry</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="mt-3">
                                        <h6>About</h6>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="about" id="about" value="Product"
                                                checked>
                                            <label class="form-check-label" for="leftRadio">Product</label>
                                        </div>
                                        <div class="form-check form-check-inline ml-2">
                                            <input class="form-check-input" type="radio" name="about" id="about"
                                                value="Service">
                                            <label class="form-check-label" for="rightRadio">Service</label>
                                        </div>
                                    </div>

                                    <div class="mt-3">
                                        <div class="row">
                                            <div class="col-10">
                                                <h6>Name</h6>
                                                <div class="input-group flex-nowrap">
                                                    <input type="text" name="name" class="form-control" placeholder="name"
                                                        aria-describedby="addon-wrapping">
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="mt-3">
                                        <div class="row">
                                            <div class="col-10">
                                                <h6>Company</h6>
                                                <div class="input-group flex-nowrap">
                                                    <input type="text" name="company" class="form-control" placeholder="Company"
                                                        aria-describedby="addon-wrapping">
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="mt-3">
                                        <div class="row">
                                            <div class="col-10">
                                                <h6>Email</h6>
                                                <div class="input-group flex-nowrap">
                                                    <input type="text" name="email" class="form-control" placeholder="Email"
                                                        aria-describedby="addon-wrapping">
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="mt-3">
                                        <div class="row">
                                            <div class="col-6">
                                                <h6>Telephone</h6>
                                                <div class="input-group flex-nowrap">
                                                    <input type="text" name="telphone" class="form-control" placeholder="Telephone"
                                                        aria-describedby="addon-wrapping">
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="mt-3">
                                        <div class="row">
                                            <div class="col-4">
                                                <h6>Country</h6>
                                                <select class="form-control" name="country">
                                                    <option selected disabled>Select Country</option>
                                                    <option value="Complain">Complain</option>
                                                    <option value="Feedback">Feedback</option>
                                                    <option value="Suggestion">Suggestion</option>
                                                    <option value="Enquiry">Enquiry</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="mt-3">
                                        <div class="row">
                                            <div class="col-6">
                                                <h6>Location</h6>
                                                <div class="input-group flex-nowrap">
                                                    <input type="text" name="location" class="form-control" placeholder="Location"
                                                        aria-describedby="addon-wrapping">
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="mt-3">
                                        <h6>Grade</h6>
                                        <div class="d-flex flex-row">
                                            <select class="form-select mr-2" name="grade">
                                                @foreach ($grades as $grade)
                                                    @if (old('grade') == $grade->id)
                                                        <option value="{{ $grade->id }}" selected>{{ $grade->name }}</option>
                                                    @else
                                                        <option value="{{ $grade->id }}">{{ $grade->name }}</option>
                                                    @endif
                                                @endforeach
                                            </select>

                                            <select class="form-control mr-2" name="grade2">
                                                @foreach ($grades as $grade)
                                                    @if (old('grade') == $grade->id)
                                                        <option value="{{ $grade->id }}" selected>{{ $grade->name }}</option>
                                                    @else
                                                        <option value="{{ $grade->id }}">{{ $grade->name }}</option>
                                                    @endif
                                                @endforeach
                                            </select>

                                            <select class="form-control mr-2" name="grade3">
                                                @foreach ($grades as $grade)
                                                    @if (old('grade') == $grade->id)
                                                        <option value="{{ $grade->id }}" selected>{{ $grade->name }}</option>
                                                    @else
                                                        <option value="{{ $grade->id }}">{{ $grade->name }}</option>
                                                    @endif
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>

                                    <div class="mt-3">
                                        <div class="row">
                                            <div class="col-10">
                                                <h6>Size</h6>
                                                <div class="input-group flex-nowrap">
                                                    <input type="text" name="size" class="form-control" placeholder="Size"
                                                        aria-describedby="addon-wrapping">
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="mt-3">
                                        <div class="row">
                                            <div class="col-10">
                                                <h6>End Application</h6>
                                                <div class="input-group flex-nowrap">
                                                    <input type="text" name="end" class="form-control"
                                                        placeholder="End Application" aria-describedby="addon-wrapping">
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="mt-3">
                                        <div class="row">
                                            <div class="col-10">
                                                <h6>Issue</h6>
                                                <div class="input-group flex-nowrap">
                                                    <input type="text" name="issue" class="form-control" placeholder="Issue"
                                                        aria-describedby="addon-wrapping">
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="mt-3">
                                        <div class="row">
                                            <div class="col-10">
                                                <h6>Message</h6>
                                                <div class="input-group flex-nowrap">
                                                    <textarea name="massage" class="form-control" placeholder="End Application" aria-describedby="addon-wrapping"
                                                        id="" cols="30" rows="10"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="mt-4">
                                        <button type="submit" class="btn btn-primary "> Button </button>
                                    </div>

                                </form>
                            </div>
                        </div>
                    </div>




            </div>
    </section>

@endsection
