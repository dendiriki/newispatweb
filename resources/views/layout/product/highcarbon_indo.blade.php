@extends('layout.tools.main_indo')
@section('content')
    <section class="expert_section layout_padding">
        <div class="container">
            <div class="heading_container ">
                <div class="container">
                    <div class="row">
                        <div class="col-md-9 ms-sm-auto col-lg-12 px-md-4">
                            <h1>{{ $post->title }}</h1>
                            <br><br>
                            <div>{!! $post->content !!}</div>
                        </div>
                    </div>
                </div>
            </div>
    </section>
    @foreach ($grade as $grades)
    <li class="list-group-item"><a href="certificate/JIS/Certificate_PT. ISPAT INDOüiJQID08008üj.pdf">{{ $grades->name }} ({{ $grades->category }}) </a></li>
    @endforeach
@endsection