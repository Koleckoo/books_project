@extends('layout.main')

@section('content')
    <div class="form_container">
        <div class="form_container-inner">
            <div class="form_heading">
                <h1>Log In</h1>
            </div>

            <div class="form_field">
                <form action="{{ route('login') }}" method="post">

                    @csrf
                    Email: <br>
                    <input type="email" name="email" value="{{ old('email') }}"><br>
                    Password: <br>
                    <input type="password" name="password" value=""> <br>

                    <button type="submit">Login</button>

                </form>
            </div>
        </div>
    </div>
@endsection
