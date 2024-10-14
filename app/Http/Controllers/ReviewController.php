<?php

namespace App\Http\Controllers;

use App\Models\Review;
use App\Models\Movie;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    public function store(Request $request, $movie_id)
    {
        $request->validate([
            'rating' => 'required|integer|min:1|max:5',
            'review_text' => 'nullable|string'
        ]);

        $movie = Movie::findOrFail($movie_id);

        $review = new Review();
        $review->movie_id = $movie->id;
        $review->rating = $request->rating;
        $review->review_text = $request->review_text;
        $review->save();

        return redirect()->route('movies.show', $movie_id);
    }
}
