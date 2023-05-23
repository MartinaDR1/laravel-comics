
<header>
    <div class="top_header bg-primary">
        <div class="container d-flex justify-content-end text-white">
            <ul class="d-flex list-unstyled">
                <li class="me-5">
                    DC POWER VISA
                </li>
                <li>
                    ADDITIONAL DC SITES
                </li>
            </ul>
        </div>
    </div>
    <div class="bottom_header d-flex py-3">
        <div class="container">
            <div class="d-flex justify-content-between align-items-center h-100">
                <div class="logo">
                    <img src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="">
                </div>
                <nav class="nav text-uppercase text-black">
                    <a class="nav-link {{ Route::currentRouteName() === 'home' ? 'active' : '' }}" href="{{ route('home') }}">Characters</a>
                    <a class="nav-link {{ Route::currentRouteName() === 'comics' ? 'active' : '' }}" href="{{ route('comics') }}">Comics</a>
                    <a class="nav-link {{ Route::currentRouteName() === 'movies' ? 'active' : '' }}" href="{{ route('movies') }}">Movies</a>
                    <a class="nav-link {{ Route::currentRouteName() === 'tv' ? 'active' : '' }}" href="{{ route('tv') }}">Tv</a>
                    <a class="nav-link {{ Route::currentRouteName() === 'games' ? 'active' : '' }}" href="{{ route('games') }}">games</a>
                    <a class="nav-link {{ Route::currentRouteName() === 'collectibles' ? 'active' : '' }}" href="{{ route('collectibles') }}">Collectibles</a>
                    <a class="nav-link {{ Route::currentRouteName() === 'video' ? 'active' : '' }}" href="{{ route('video') }}">video</a>
                    <a class="nav-link {{ Route::currentRouteName() === 'fans' ? 'active' : '' }}" href="{{ route('fans') }}">Fans</a>
                    <a class="nav-link {{ Route::currentRouteName() === 'news' ? 'active' : '' }}" href="{{ route('news') }}">News</a>
                    <a class="nav-link {{ Route::currentRouteName() === 'shop' ? 'active' : '' }}" href="{{ route('shop') }}">Shop</a>
            
                    <div class="input-group mb-3 searchBar">
                        <input type="text" class="form-control rounded-0 border-0" placeholder="Search" aria-label="Search" >
                        <button class="btn btn-outline-secondary rounded-0 border-0" type="button"><i class="fa-solid fa-magnifying-glass"></i></button>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</header>