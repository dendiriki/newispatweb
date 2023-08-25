@extends('layout.tools.main')

@section('content')
    <section class="expert_section layout_padding">
        <div class="container">
            <div class="heading_container ">
                <div class="container">
                    <div class="row">
                        <div class="col-md-9 ms-sm-auto col-lg-12 px-md-4">
                            <h1>{{ $english->title }}</h1>
                            <br><br>
                            <div>{!! $english->content !!}</div>
                        </div>
                    </div>
                </div>
            </div>
    </section>
@endsection
