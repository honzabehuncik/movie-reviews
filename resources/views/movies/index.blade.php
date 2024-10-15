@extends('layouts.app')

@section('content')
    <h1>Seznam filmů</h1>
    <ul>
        @foreach ($movies as $movie)
            <li><a href="{{ route('movies.show', $movie->id) }}">{{ $movie->title }}</a></li>
        @endforeach
    </ul>
    <button type="button" class="btn btn-primary">
  Notifications <span class="badge text-bg-secondary">4</span>
</button>
@endsection
