@extends('layout.main', [
    'current_menu_item' => 'homepage',
])

@section('content')
    <h1>Welcome to our page about Books</h1>
    <p>We are the best online bookstore ever, haha you are the worst</p>
    <div id='partners'></div>
    @viteReactRefresh
    @vite('resources/js/partners.jsx')
@endsection
