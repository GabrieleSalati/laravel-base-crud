@extends('layouts.app')

@section('page_name', 'Music library')

@section('navbar')
    nav
@endsection
@section('main-content')
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
                    <td><a href="{{ route('tracks.show', [$track]) }}">Details</a></td>
                </tr>
            @endforeach
        </tbody>
        </thead>
    </table>
@endsection
@section('footer')
    foot
@endsection
