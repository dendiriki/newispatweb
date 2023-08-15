@extends('layout.tools.main')

@section('content')

    <div class="container py-5">
    <div class="row">
      <div class="col-lg">
        <h1>{{ $english->title }}</h1>
        <br><br>
        <div id="rubah">{!! $english->content !!}</div>
      </div>
    </div>

    <script>
            const classname = document.querySelector('.img-responsive')
            classname.setAttribute('class', 'img-fluid');
    </script>

@endsection
