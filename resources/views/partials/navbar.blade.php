<div>
    <nav class="navbar">
        <ul class="nav-links">
            <li><a href="{{ route('home') }}">Home</a></li>
            <li><a href="{{ route('album') }}">Album</a></li>
            <li><a href="{{ route('MyGalery') }}">My Galery</a></li>
        </ul>
        <ul class="nav-links">
            @auth
                <form action="{{ route('logout') }}" method="POST" style="display: inline;">
                    @csrf
                    <li><button type="submit">Logout</button></li>

                </form>
            @else
                <li><a href="{{ route('login') }}">Login</a></li>
                <li><a href="{{ route('register') }}">Register</a></li>
            @endauth
        </ul>
    </nav>
</div>
