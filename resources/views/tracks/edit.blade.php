@extends('layouts.app')

@section('page_name', 'Edit:' . $track->title)

@section('main-content')

    <form action="{{ route('tracks.update', $track) }}" method="POST">
        @method('PUT')
        @csrf

        <div class="input-group row">

            <div class="col-4">
                <label for="title">Title</label>
                <input type="text" class="form-control" id="title" name="title" placeholder="Edit Track Title"
                    value="{{ old('title') ?? $track->title }}">
            </div>
            <div class="col-4">
                <label for="album">Album</label>
                <input type="text" class="form-control" id="album" name="album" placeholder="Edit Track Album"
                    value="{{ old('album') ?? $track->album }}">
            </div>
            <div class="col-4">
                <label for="author">Author</label>
                <input type="text" class="form-control" id="author" name="author" placeholder="Edit Track Author"
                    value="{{ old('author') ?? $track->author }}">
            </div>
            <div class="col-4">
                <label for="editor">Editor</label>
                <input type="text" class="form-control" id="editor" name="editor" placeholder="Edit Track Editor"
                    value="{{ old('editor') ?? $track->editor }}">
            </div>
            <div class="col-4">
                <label for="length">Length</label>
                <input type="text" class="form-control" id="length" name="length" placeholder="Track Length"
                    value="{{ old('length') ?? $track->length }}">
            </div>
            <div class="col-4">
                <label for="poster">Poster</label>
                <input type="text" class="form-control" id="poster" name="poster" placeholder="Edit Track Poster"
                    value="{{ old('poster') ?? $track->poster }}">
            </div>
            <div class="col-6">
                <button type="submit" class="btn btn-primary my-3">Edit Track</button>
            </div>
        </div>

    </form>

@endsection
