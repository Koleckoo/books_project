@extends('layout.admin')

@section('content')
    <h1>List of authors</h1>
    @foreach ($authors as $author)
        <p>{{ $author->name }} </p>
    @endforeach
@endsection
