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
                    <td class="action-cell">
                        <a href="{{ route('tracks.show', [$track]) }}"><i class="bi bi-fan"></i></a>
                        <a href="{{ route('tracks.edit', [$track]) }}"><i class="bi bi-wrench-adjustable"></i></a>
                        <button class="bi bi-trash text-danger" data-bs-toggle="modal"
                            data-bs-target="#delete-{{ $track->id }}"></button>
                    </td>
                </tr>
            @endforeach
        </tbody>
        </thead>
    </table>

@section('modals')
    @foreach ($tracks as $track)
        <div class="modal fade" id="delete-{{ $track->id }}" tabindex="-1" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">{{ $track->title }}</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        Do you want to delete this track?
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Back</button>
                        <form action="{{ route('tracks.destroy', $track) }}" method="POST">
                            @csrf
                            @method('delete')
                            <button type="submit" class="btn btn-primary">Confirm</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
@endsection

{{ $tracks->links('pagination::bootstrap-5') }}
@endsection
@section('footer')

@endsection
