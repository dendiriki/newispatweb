@extends('admin.tools.main')

@section('content')

    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Create New Grade</h1>

    </div>
    <div class="col-lg-8">
        <form method="POST" action="/admin/grade/{{$grade->id}}" class="mb-5" enctype="multipart/form-data">
            @method('put')
            @csrf

            <div class="mb-3">
                <label for="name" class="form-label">name created</label>
                <input type="text" class="form-control form-select @error('name') is-invalid @enderror" id="name" name="name"
                    value="{{ $grade->name }}" required autofocus >
                    @error('name')
                    <div class="invalid-feedback">
                        {{ messages }}
                    </div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="description" class="form-label">Title</label>
                <input type="text" class="form-control @error('description') is-invalid @enderror" id="description"
                    name="description" value="{{ $grade->description }}" required autofocus>
                    @error('description')
                    <div class="invalid-feedback">
                        {{ messages }}
                    </div>
                @enderror

            </div>
            <button type="submit" class="btn btn-primary">Upadate Grade</button>
        </form>
    </div>

@endsection
