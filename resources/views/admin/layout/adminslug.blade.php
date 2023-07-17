@extends('admin.tools.main')


@section('content')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">My Post</h1>
    </div>

    @if (session()->has('success'))
        <div class="alert alert-success " role="alert">
            {{ session('success') }}
        </div>
    @endif

    <div class="table-responsive col-lg-8">
        <a href="/admin/slug/create" class="btn btn-primary mb-3"> Create New Menu</a>
        <table class="table table-striped table-sm">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Name</th>
                    <th scope="col">Link</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($slugs as $slug)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $slug->name }}</td>
                        <td>{{ $slug->value }}</td>
                        <td>
                            <a href="/admin/slug/{{ $slug->value }}" class="btn btn-info">view

                            </a>
                            <a href="/admin/slug/{{ $slug->value }}/edit" class="btn btn-warning">edit

                            </a>
                            <form action="/admin/slug/{{ $slug->value }}" method="post" class="d-inline">
                                @method('delete')
                                @csrf
                                <button class="border-0 btn btn-danger" onclick="return confirm('yakin mau hapus')">hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach

            </tbody>
        </table>
    </div>
@endsection
