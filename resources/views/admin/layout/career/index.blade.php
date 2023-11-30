@extends('admin.tools.main')


@section('content')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">{{ $title }}</h1>
        <h2>Username :{{$user}} </h2>
    </div>

    @if (session()->has('success'))
        <div class="alert alert-success " role="alert">
            {{ session('success') }}
        </div>
    @endif

    <div class="table-responsive col-lg-12">
        <a href="/admin/posts/create" class="btn btn-primary mb-3"> Create New Post</a>
        <table class="table table-striped table-sm">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Title</th>
                    <th scope="col">Name</th>
                    <th scope="col">Slug</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($careers as $career)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $career->name }}</td>
                        <td>{{ $career->salary }}</td>
                        <td>{{ $career->description}}</td>
                        <td>{{ $career->runninghour}}</td>
                        <td>{{ $career->tertiaryeducation}}</td>
                        <td>{{ $career->status}}</td>
                        <td>{{ $career->created_at}}</td>
                        <td>
                            {{-- <a href="/admin/careers/{{ $career->slug }}" class="btn btn-info">view
                                <span></span>
                            </a>
                            <a href="/admin/careers/{{ $career->slug}}/edit" class="btn btn-warning">edit
                                <span></span>
                            </a>
                            <form action="/admin/careers/{{ $career->slug}}" method="post" class="d-inline">
                                @method('delete')
                                @csrf
                                <button class="border-0 btn btn-danger" onclick="return confirm('yakin mau hapus')">hapus</button>
                            </form> --}}
                        </td>
                    </tr>
                @endforeach

            </tbody>
        </table>
    </div>
    {{ $posts->appends(request()->input())->links() }}
@endsection
