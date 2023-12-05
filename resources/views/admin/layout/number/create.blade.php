@extends('admin.tools.main')

@section('content')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Add Number</h1>

    </div>
    <div class="col-lg-8">
        <form method="POST" action="/admin/number" class="mb-5" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">name</label>
                <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name"
                    required autofocus>

            </div>
            <div class="mb-3">
                <label for="type" class="form-label">company</label>
                <select company="text" class="form-control @error('company') is-invalid @enderror" id="company"
                    name="company" required>
                    @error('company')
                        <div class="invalid-feedback">
                            {{ messages }}
                        </div>
                    @enderror
                    <option value="">---</option>
                    <option value="ISO">ISO</option>
                    <option value="JIS">JIS</option>
                    <option value="SNI">SNI</option>
                    <option value="KAN">KAN</option>
                    <option value="SIRIM">SIRIM</option>
                    <option value="ZEROACCIDENT">ZERO ACCIDENT</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">number</label>
                <input type="text" class="form-control @error('number') is-invalid @enderror" id="number"
                    name="number" autofocus>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">email</label>
                <input type="text" class="form-control @error('email') is-invalid @enderror" id="email"
                    name="email" autofocus>
            </div>
            <button type="submit" class="btn btn-primary">Create Post</button>
        </form>
    </div>
@endsection
