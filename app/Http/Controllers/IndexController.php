<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        $crime_books = Book::where('category_2_id', 12)
            ->orderBy('publication_date', 'desc')
            ->limit(10)
            // this runs extra query to select all the related for all the book in single query
            // and its prepared for later use, so it doesnt make another query when called with 
            // $crime_books->authors
            ->with(['authors', 'publishers'])
            ->get();

        // this does the same thing as with inside of the query
        // $crime_books->load('authors)

        // loads relationships that werent loaded already
        // $crime_missing->loadMissing('authors')

        return view('index.index', compact('crime_books'));
    }
}
