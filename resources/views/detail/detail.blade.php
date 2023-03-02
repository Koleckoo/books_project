@extends('layout.main')

@section('content')
    <img src="{{ $book->image }}" alt="">
    <h1>Title: {{ $book->title }} </h1>
    <p>Description: {{ $book->description }} </p>
    <p>Number of pages: {{ $book->pages }}</p>

    @auth
        <form action="{{ route('book.review', $book->id) }}" method="post">
            @csrf
            Post the review here:
            <textarea name="review" id="review" cols="30" rows="10"></textarea>

            <button type="submit">Submit review</button>
        </form>
    @endauth
    <h2>Reviews:</h2>
    <ul>
        @foreach ($book->reviews as $review)
            <li>
                User: {{ $review->user_id }}
                Review: {{ $review->text }}
                @auth
                    @can('admin')
                        <form action="{{ route('delete.review', $review->id) }}" method="post">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Delete review</button>
                        </form>
                    @endcan
                @endauth
            </li>
        @endforeach
    </ul>
@endsection
