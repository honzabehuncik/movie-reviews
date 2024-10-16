@extends('layouts.app')

@section('content')
    <!-- Menší hero sekce pro detailní stránku -->
    <div class="hero-section-detail" style="background-image: url('{{ $movie->background_url }}');">
        <div class="hero-content">
            <h1>{{ $movie->title }}</h1>
            <p class="hero-genre">{{ $movie->genre }}</p> <!-- Žánr v hero sekci -->
        </div>
    </div>

    <!-- Detaily filmu a hodnocení -->
    <div class="container movie-details">
        <p>Žánr: {{ $movie->genre }}</p>
        <p>{{ $movie->description }}</p>

        <!-- Hodnocení -->
        <h2>Hodnocení</h2>
        <div class="reviews-list">
            <ul>
                @foreach ($movie->reviews as $review)
                    <li>Anonym: {{ $review->rating }} - {{ $review->review_text }}</li>
                @endforeach
            </ul>
        </div>

        <form action="{{ route('reviews.store', $movie->id) }}" method="POST">
            @csrf
            <label for="rating">Hodnocení (1-5):</label>
            <br></br>
            <input type="number" name="rating" min="1" max="5" required>
            <br></br>
            <label for="review_text">Recenze:</label>
            <br></br>
            <textarea name="review_text"></textarea>
            <br></br>
            <button type="submit" class="btn btn-primary">Odeslat</button>
        </form>
    </div>
@endsection
