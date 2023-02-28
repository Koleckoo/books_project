@extends('layout.admin')

@section('content')
    <div class="form_container">
        <div class="form_container-inner">
            <div class="form_heading">
                <h1>Create a new author: </h1>
            </div>
            <div class="form_field">
                <form action="{{ route('authors.save') }}" method="post">
                    @csrf
                    Enter your name: <br>
                    <input type="text" name="name"><br>
                    Enter slug: <br>
                    <input type="text" name="slug"> <br>
                    <button type="submit">Save</button>
                </form>
            </div>
        </div>
    </div>
@endsection
