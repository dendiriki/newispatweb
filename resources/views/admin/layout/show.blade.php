@extends('admin.tools.main')

@section('content')

<p>data di sini</p>

    <!-- Blog Page Title & Breadcrumbs -->

              <h1>{{ $post->title }}</h1>


    <!-- Blog Section - Blog Page -->


               <div>{!! $post->content !!}</div>

@endsection
