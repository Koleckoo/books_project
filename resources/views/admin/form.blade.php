@extends('layout.admin')

@section('content')
    <h1>Create a new author: </h1>
    <form action="{{ route('authors.save') }}" method="post">
        @csrf
        Enter your name: <br>
        <input type="text" name="name"><br>
        Enter slug: <br>
        <input type="text" name="slug"> <br>
        <button type="submit">Save</button>
    </form>
@endsection
