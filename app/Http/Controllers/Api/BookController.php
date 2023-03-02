<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Book;
use App\Models\Review;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function latest()
    {
        $books = Book::query()
            ->orderBy('publication_date', 'desc')
            ->limit(10)
            ->with('authors')
            ->get();

        return $books;
    }

    public function show($book_id)
    {
        $book = Book::findOrFail($book_id);


        return view('detail.detail', compact('book'));
    }

    public function review(Request $request, $book_id)
    {
        $this->validate($request, [
            'review' => 'required|max:255'
        ]);

        $review = new Review();
        $review->book_id = $book_id;
        $review->user_id = $request->user()->id;
        $review->text = $request->post('review');
        $review->save();

        session()->flash('success_message', 'Review successfully submited');

        return redirect()->route('book.detail', $book_id);
    }

    public function search(Request $request)
    {
        $search = $request->query('search');
        $books = Book::query()
            ->where('title', 'like', "%{$search}%")
            ->limit(5)
            ->get();

        return $books;
    }

    public function deleteReview($review_id)
    {
        $review = Review::findOrFail($review_id);
        $review->delete();

        session()->flash('success_message', 'Review successfully deleted');

        return redirect()->route('book.detail', $review->book_id);
    }
}
