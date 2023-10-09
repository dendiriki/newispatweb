@extends('layout.tools.main_indo')

@section('content')
<section class="about_section layout_padding">
    <div class="container">
      <div class="row">
        <div class="col-12">

          <div class="heading_container heading_center p-bottom-0">
            <h2>
              NEWS
            </h2>
            <p>
              We're here to help and answer any question you might have. We look forward to hearing from you.
            </p>
            <br>
          </div>



          <div class="form-row">

              @foreach($news as $post)
            <div class="col-md-4 mb-3">
              <div class="card" style="margin: 5px; background: #f7f7f7;">
                <iframe allowfullscreen style="width :20rem; height: 11rem; margin: auto; border-radius: 7px; border: transparent;" src="https://www.youtube.com/embed/{{ $post->link }}"></iframe>
                <div class="card-body">
                  <h5 class="card-title">{{ substr(strip_tags($post->title), 0, 20) }}
                    @if (strlen(strip_tags($post->title)) > 20)
                        ...
                    @endif</h5>
                  <p class="card-text">{{ substr(strip_tags($post->description), 0, 120) }}
                    @if (strlen(strip_tags($post->description)) > 120)
                        ...
                    @endif

                  <a href="#" style="position: relative; bottom: 1px;">Read More</a>
                </div>
                <div class="card-footer bg-transparent ">
                  <small class="text-muted">{{ $post->created_at }}</small>
                  <small class="text-muted warp-right">By <a href="{{ $post->link }}">{{ $post->penulist }}</a></small>
                </div>
              </div>
            </div>
            @endforeach

        </div>
      </div>
    </div>
  </section>
@endsection
