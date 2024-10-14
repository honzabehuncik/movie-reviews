@extends('layouts.app')

@section('content')
    <h1>Seznam filmů</h1>
    <ul>
        @foreach ($movies as $movie)
            <li><a href="{{ route('movies.show', $movie->id) }}">{{ $movie->title }}</a></li>
        @endforeach
    </ul>
@endsection
