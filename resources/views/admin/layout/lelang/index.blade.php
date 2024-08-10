@extends('admin.tools.main')


@section('content')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">{{ $title }}</h1>
    </div>

    @if (session()->has('success'))
        <div class="alert alert-success " role="alert">
            {{ session('success') }}
        </div>
    @endif

    <div class="table-responsive col-lg-12">
        <a href="/admin/lelang/create" class="btn btn-primary mb-3"> Create new lelang</a>
        <table class="table table-striped table-sm">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Title</th>
                    <th scope="col">link</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($lelangs as $lelang)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $lelang->title }}</td>
                        <td>{{ $lelang->link }}</td>
                        <td>
                            <a href="/admin/lelang/{{ $lelang->link }}" class="btn btn-info">view
                                <span></span>
                            </a>
                            <a href="/admin/lelang/{{ $lelang->link }}/edit" class="btn btn-warning">edit
                                <span></span>
                            </a>
                            <form action="/admin/lelang/{{ $lelang->link }}" method="post" class="d-inline">
                                @method('delete')
                                @csrf
                                <button class="border-0 btn btn-danger"
                                    onclick="return confirm('yakin mau hapus')">hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach

            </tbody>
        </table>
    </div>
    {{ $lelangs->appends(request()->input())->links() }}
@endsection
