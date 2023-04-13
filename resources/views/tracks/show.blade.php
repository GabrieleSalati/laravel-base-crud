@extends('layouts.app')

@section('page_name', $track->title)

@section('main-content')
    <img src="{{ $track->poster }}" alt="poster">
    <ul>
        @foreach ($track->getAttributes() as $attr => $value)
            <li>{{ $attr }} : {{ $value }}</li>
        @endforeach
    </ul>
@endsection
