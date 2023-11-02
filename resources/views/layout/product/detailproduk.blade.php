@extends('layout.tools.main')
@section('content')
    <section class="expert_section layout_padding">
        <div class="container">
            <div class="heading_container ">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 ms-sm-auto col-lg-12 px-md-4">
                            <h1>{{ $grade->name }}</h1>
                            <h5>Article Publication Date : {{ $grade->created_at }}</h5>
                            <br><br>
                            <div>{!! $grade->description !!}</div>
                        </div>
                    </div>
                </div>
            </div>
    </section>
@endsection
