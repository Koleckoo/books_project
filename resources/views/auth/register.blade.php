@extends('layout.main')

@section('content')
    <div class="form_container">
        <div class="form_container-inner">
            <div class="form_heading">
                <h1>Register</h1>
            </div>
            <div class="form_field">
                <form action="{{ route('register') }}" method="post">

                    @csrf
                    Name: <br>
                    <input type="text" name="name" value="{{ old('name') }}"> <br>
                    Email: <br>
                    <input type="email" name="email" value="{{ old('email') }}"> <br>
                    Password: <br>
                    <input type="password" name="password" value=""> <br>
                    Confirm password: <br>
                    <input type="password" name="password_confirmation" value="">
                    <br>

                    <button>Register</button>

                </form>
            </div>
        </div>
    </div>
@endsection
