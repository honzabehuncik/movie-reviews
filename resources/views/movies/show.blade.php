@extends('layouts.app')

@section('content')
    <h1>{{ $movie->title }}</h1>
    <p>{{ $movie->description }}</p>
    <p>Žánr: {{ $movie->genre }}</p>

    <h2>Hodnocení</h2>
    <ul>
        @foreach ($movie->reviews as $review)
            <li>Hodnocení: {{ $review->rating }} - {{ $review->review_text }}</li>
        @endforeach
    </ul>

    <h3>Přidat hodnocení</h3>
    <form action="{{ route('reviews.store', $movie->id) }}" method="POST">
        @csrf
        <label for="rating">Hodnocení (1-5):</label>
        <input type="number" name="rating" min="1" max="5" required>
        <label for="review_text">Recenze:</label>
        <textarea name="review_text"></textarea>
        <button type="submit">Odeslat</button>
    </form>
@endsection
