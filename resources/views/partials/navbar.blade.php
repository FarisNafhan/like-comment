<div>
    <nav class="navbar">
        <ul class="nav-links">
<<<<<<< HEAD
            @auth
                <li><a href="{{ route('home') }}">Home</a></li>
            @else
                <li><a href="{{ route('landing') }}">Landing</a></li>
            @endauth
            <li><a href="{{ route('album') }}">Album</a></li>
            <li><a href="{{ route('MyGalery') }}">Galery</a></li>
        </ul>
        <ul class="nav-links">
            @auth
                <li class="dropdown">
                    <button class="dropbtn">Profile</button>
                    <div class="dropdown-content">
                        <form action="{{ route('logout') }}" method="POST">
                            @csrf
                            <button type="submit">Logout</button>
                        </form>
                    </div>
                </li>
=======
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
>>>>>>> 21fed020a1d1a480896a1f9c099ffbbf0eb48d14
            @else
                <li><a href="{{ route('login') }}">Login</a></li>
                <li><a href="{{ route('register') }}">Register</a></li>
            @endauth
        </ul>
    </nav>
</div>
