@extends('layout.tools.main')

@section('content')

    <div class="container py-5">
    <div class="row">
      <div class="col-sm">
        <h1>{{ $english->title }}</h1>
        <br><br>
        <div>{!! $english->content !!}</div>

      </div>
    </div>

@endsection
