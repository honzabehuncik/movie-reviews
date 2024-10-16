@extends('layouts.app')

@section('content')
    <div class="hero-section" style="background-image: url('{{ $randomMovie->background_url }}');">
        <div class="hero-content text-center">
            <h1>{{ $randomMovie->title }}</h1>
            <p>{{ $randomMovie->genre}}</p>
        </div>
    </div>

    <div class="container mt-4">
        <h2>Novinky</h2>
        <div class="row flex-nowrap overflow-auto">
            @foreach ($movies as $movie)
                <div class="col-12 col-lg-3">
                    <div class="card movie-card">
                        <a href="{{ route('movies.show', $movie->id) }}">
                            <img src="{{ $movie->background_url }}" class="card-img-top" alt="{{ $movie->title }}">
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="mb-5"></div>
    </div>
@endsection
