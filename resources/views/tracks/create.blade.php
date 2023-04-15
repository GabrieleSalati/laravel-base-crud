@extends('layouts.app')

@section('page_name', 'New Track')

@section('main-content')

    <form action="{{ route('tracks.store') }}" method="POST">
        @csrf

        <div class="input-group row">

            <div class="col-4">
                <label for="title">Title</label>
                <input type="text" class="form-control" id="title" name="title" placeholder="Track Title">
            </div>
            <div class="col-4">
                <label for="album">Album</label>
                <input type="text" class="form-control" id="album" name="album" placeholder="Track Album">
            </div>
            <div class="col-4">
                <label for="author">Author</label>
                <input type="text" class="form-control" id="author" name="author" placeholder="Track Author">
            </div>
            <div class="col-4">
                <label for="editor">Editor</label>
                <input type="text" class="form-control" id="editor" name="editor" placeholder="Track Editor">
            </div>
            <div class="col-4">
                <label for="length">Length</label>
                <input type="text" class="form-control" id="length" name="length" placeholder="Track Length">
            </div>
            <div class="col-4">
                <label for="poster">Poster</label>
                <input type="text" class="form-control" id="poster" name="poster" placeholder="Track Poster">
            </div>
            <div class="col-6">
                <button type="submit" class="btn btn-primary my-3">Add Track</button>
            </div>
        </div>

    </form>

@endsection
