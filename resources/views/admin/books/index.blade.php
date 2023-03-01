@extends('layout.admin')

@section('content')
    <h1>List of books</h1>
    @foreach ($books as $book)
        <p>{{ $book->title }} </p>
    @endforeach
@endsection
