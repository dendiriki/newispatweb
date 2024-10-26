@extends('admin.tools.main')

@section('content')
<div class="container mt-4">
    <h1 class="mb-4">{{ $title }}</h1>

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif


    <table class="table table-striped">
        <thead>
            <tr>
                <th>No</th>
                <th>Judul</th>
                <th>Buyer</th>
                <th>Nomor Telepon</th>
                <th>Email</th>
                <th>Penawaran</th>
                {{-- <th>Aksi</th> --}}
            </tr>
        </thead>
        <tbody>
            @foreach ($pelelang as $key => $lelang)
                <tr>
                    <td>{{ $pelelang->firstItem() + $key }}</td>
                    <td>{{ $lelang->lelang->title }}</td>
                    <td>{{ $lelang->buyer->nama }}</td>
                    <td>{{ $lelang->buyer->nomor_telepon}}</td>
                    <td>{{ $lelang->buyer->email}}</td>
                    {{-- <td><img src="{{ asset($lelang->picture) }}" alt="{{ $lelang->title }}" class="img-thumbnail" style="width: 100px;"></td> --}}
                    <td>{{ $lelang->penawaran }}</td>
                    <td>
                        {{-- <a href="/admin/lelang/{{ $lelang->id }}" class="btn btn-info">Lihat</a>
                        <a href="/admin/lelang/{{ $lelang->id }}/edit" class="btn btn-warning">Edit</a>
                        <form action="/admin/lelang/{{ $lelang->id }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Anda yakin ingin menghapus?')">Hapus</button>
                        </form> --}}
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    {{ $pelelang->links() }} <!-- Pagination -->
</div>
@endsection
