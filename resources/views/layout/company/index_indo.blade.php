@extends('layout.tools.main_indo')

@section('content')

    <div class="container py-5">
    <div class="row">
      <div class="col-lg">
        <h1>{{ $post->title }}</h1>
        <br><br>
        <div>{!! $post->content !!}</div>

      </div>
    </div>

@endsection
