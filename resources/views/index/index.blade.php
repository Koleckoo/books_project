@extends('layout.main', [
    'current_menu_item' => 'homepage',
])

@section('content')
    <h1>Welcome to our page about Books</h1>
    <p>We are the best online bookstore ever, haha you are the worst</p>
    <div id='partners'></div>
    @viteReactRefresh
    @vite('resources/js/partners.jsx')

    {{-- using JS from our API --}}
    <h2>Latest Books</h2>
    <img id="image" class='rotate' src="https://www.transparentpng.com/thumb/book/wTMv3m-book-cut-out.png"
        alt="book cut out @transparentpng.com">
    <div id="latest-books"></div>
    @vite('resources/js/latest-book.js')


    <h2>Crime books</h2>
    @foreach ($crime_books as $book)
        <div class="crime-books_book">
            <h3>{{ $book->title }} </h3>
            <p>Authors: {{ $book->authors->pluck('name')->join(', ') }}</p>
            <p>Publised by : {{ $book->publishers->pluck('name')->join(', ') }}</p>
        </div>
    @endforeach
@endsection
