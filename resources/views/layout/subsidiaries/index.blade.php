@extends('layout.tools.main')

@section('content')
    <div class="timpanav">

    </div>



    <section class="expert_section layout_padding">
        <div class="container">
            <div class="heading_container ">

                <div class="container">
                    <div class="row">
                        <div class="col-lg">
                            <h1>{{ $english->title }}</h1>
                            <br><br>
                            <div>{!! $english->content !!}</div>

                        </div>
                    </div>
                </div>
            </div>
    </section>


    {{-- <script>
        const classname = document.querySelector('.img-responsive')
        classname.setAttribute('class', 'img-fluid');
    </script> --}}



    {{--
    <div class="container py-5">
    <div class="row">
      <div class="col-lg">
        <h1>{{ $english->title }}</h1>
        <br><br>
        <div>{!! $english->content !!}</div>

      </div>
    </div> --}}
@endsection




{{-- <script>
            const classname = document.querySelector('.img-responsive')
            classname.setAttribute('class', 'img-fluid');
    </script> --}}
