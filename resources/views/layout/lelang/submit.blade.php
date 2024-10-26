@extends('layout.tools.main')

@section('content')
<div class="container mt-5">
    <br><br><br><br>
    <h2 class="text-center">Form Pendaftaran Lelang</h2>

    <!-- Menampilkan pesan sukses -->
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <!-- Menampilkan pesan error -->
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('pelelang.store', ['lelang' => $lelang->id]) }}" method="POST">
        @csrf

        <div class="form-group">
            <label for="nama">Nama</label>
            <input type="text" class="form-control" id="nama" name="nama" value="{{ old('nama') }}" required>
        </div>

        <div class="form-group">
            <label for="email">Email</label>
            <input type="text" class="form-control" id="email" name="email" value="{{ old('email') }}" required>
        </div>

        <div class="form-group">
            <label for="alamat">Alamat</label>
            <input type="text" class="form-control" id="alamat" name="alamat" value="{{ old('alamat') }}" required>
        </div>

        <div class="form-group">
            <label for="nomor_telepon">No. Telepon</label>
            <input type="text" class="form-control" id="nomor_telepon" name="nomor_telepon" value="{{ old('nomor_telepon') }}" required>
        </div>

        <div class="form-group">
            <label for="npwp">No. NPWP</label>
            <input type="text" class="form-control" id="npwp" name="npwp" value="{{ old('npwp') }}" required>
        </div>

        <div class="form-group">
            <label for="penawaran">Harga Penawaran (Rp/Kg, termasuk pajak)</label>
            <input type="number" class="form-control" id="penawaran" name="penawaran" value="{{ old('penawaran') }}" required>
            <small class="form-text text-muted">
                UoM akan disesuaikan sesuai pilihan yang diunggah di situs.
            </small>
        </div>

        <p class="text-muted">
            Sebelum “save”, pastikan Anda memiliki rekening bank dengan nama yang sesuai dengan nama yang Anda daftarkan di lelang ini.
        </p>

        <button type="submit" class="btn btn-primary">Save</button>
    </form>
</div>
@endsection
