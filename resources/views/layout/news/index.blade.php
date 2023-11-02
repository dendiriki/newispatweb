@extends('layout.tools.main')

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
                            Explore the Latest Ispat Indo News and Updates in Detail.
                        </p>
                        <br>
                    </div>



                    <div class="form-row">

                        @foreach ($news as $new)
                            <div class="col-md-6 col-xl-4 mb-3">
                                <div class="card" style="margin: 5px; background: #f7f7f7;">
                                    <iframe allowfullscreen
                                        style="width :20rem; height: 11rem; margin: auto; border-radius: 7px; border: transparent;"
                                        src="https://www.youtube.com/embed/{{ $new->link }}"></iframe>
                                    <div class="card-body">
                                        <h5 class="card-title">{{ substr(strip_tags($new->title), 0, 20) }}
                                            @if (strlen(strip_tags($new->title)) > 20)
                                                ...
                                            @endif
                                        </h5>
                                        <p class="card-text">{{ substr(strip_tags($new->description), 0, 120) }}
                                            @if (strlen(strip_tags($new->description)) > 120)
                                                ...
                                                link
                                            @endif

                                            <a href="{{ route('detailnews', $new->link) }}"
                                                style="position: relative; bottom: 1px;">Read More</a>
                                    </div>
                                    <div class="card-footer bg-transparent ">
                                        <small class="text-muted">{{ $new->created_at }}</small>
                                        <small class="text-muted warp-right">By <a
                                                href= "{{ route('detailnews', $new->link) }}">{{ $new->penulist }}</a></small>
                                    </div>
                                </div>
                            </div>
                        @endforeach

                    </div>
                </div>
            </div>
    </section>
@endsection
