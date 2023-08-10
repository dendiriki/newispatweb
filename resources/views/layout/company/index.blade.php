@extends('layout.tools.main')

@section('content')

    <div class="container py-5">
    <div class="row">
      <div class="col-lg">
        <h1>{{ $english->title }}</h1>
        <br><br>
        <div>{!! $english->content !!}</div>

      </div>
    </div>

@endsection
