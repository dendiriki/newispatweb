@extends('admin.tools.main')

@section('content')

    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Create New Post</h1>

    </div>
    <div class="col-lg-8">
        <form method="POST" action="/admin/posts/{{$post->slug_id}}" class="mb-5" enctype="multipart/form-data">
            @method('put')
            @csrf
            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control @error('title') is-invalid @enderror" id="title"
                    name="title" value="{{ $post->title }}" required autofocus>

            </div>
            <div class="mb-3">
                <label for="name" class="form-label">name created</label>
                <input type="text" class="form-control form-select @error('name') is-invalid @enderror" id="name" name="name"
                    value="{{ $post->name }}" required autofocus >
            </div>

            <div class="mb-3">
                <label for="slug_id" class="form-label">Category</label>
                <select class="form-select" name="slug_id">
                    @foreach ($slugs as $slug)
                        @if (old('slug_id', $post->slug_id) == $slug->id)
                            <option value="{{ $slug->id }}" selected>{{ $slug->name }}</option>
                        @else
                            <option value="{{ $slug->id }}">{{ $slug->name }}</option>
                        @endif
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="summernote" class="form-label">Content</label>
                <textarea id="summernote" class="form-control" name="content"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Create Post</button>
        </form>
    </div>

@endsection
