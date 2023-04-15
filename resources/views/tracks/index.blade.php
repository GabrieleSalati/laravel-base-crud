@extends('layouts.app')

@section('cdn')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">
@endsection

@section('page_name', 'Music library')

@section('navbar')

@endsection
@section('main-content')

    <form>
        <input class="form-control" type="text" name="term" placeholder="search">
        <button type="submit" class="btn btn-primary mb-3">search</button>
        <a href="{{ route('tracks.create') }}" type="button" class="btn btn-primary mb-3">Add track</a>
    </form>

    <table class="table table-dark table-striped">
        <thead>
            <tr>
                <th scope="col">id</th>
                <th scope="col">Title</th>
                <th scope="col">Album</th>
                <th scope="col">Author</th>
                <th scope="col">Editor</th>
                <th scope="col">Length</th>
                <th scope="col">Poster</th>
                <th scope="col">Actions</th>
            </tr>
        <tbody>
            @foreach ($tracks as $track)
                <tr>
                    <th scope="row">{{ $track->id }}</th>
                    <td>{{ $track->title }}</td>
                    <td>{{ $track->album }}</td>
                    <td>{{ $track->author }}</td>
                    <td>{{ $track->editor }}</td>
                    <td>{{ $track->length }}</td>
                    <td>{{ $track->poster }}</td>
                    <td><a href="{{ route('tracks.show', [$track]) }}"><i class="bi bi-fan"></i></a></td>
                </tr>
            @endforeach
        </tbody>
        </thead>
    </table>
    {{ $tracks->links('pagination::bootstrap-5') }}
@endsection
@section('footer')
    foot
@endsection
