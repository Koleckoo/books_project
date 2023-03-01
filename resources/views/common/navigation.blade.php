<nav>
    @can('admin')
        <a href="#">Admin</a>
    @endcan



    <a href="{{ route('homepage') }}">

        @if ($current_menu_item === 'homepage')
            <strong>Home</strong>
        @else
            Home
        @endif
    </a>

    <a href="{{ route('about-us') }}">
        @if ($current_menu_item === 'about-us')
            <strong>About</strong>
        @else
            About
        @endif
    </a>

    @guest
        <a href="{{ route('register') }}">Register</a>
        <a href="{{ route('login') }}">Log In</a>

    @endguest
    @auth

        <a href="">
            <form action="{{ route('logout') }}" method="post">

                @csrf

                <button>Logout</button>

            </form>
        </a>
        Logged in as {{ auth()->user()->name }} &nbsp;
    @endauth
</nav>
