@extends('layout.main')

@section('content')
    <div>
        <p>Bookshop name: {{ $bookshop->name }}</p>
        <p>Location: {{ $bookshop->city }}</p>
        <p>Titles availble in the shop:</p>
        <ul>
            @foreach ($bookshop->books as $book)
                <li> {{ $book->title }}</li>
            @endforeach
        </ul>
    </div>
@endsection
