<nav>

    <img src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="logo">

    <ul>
        <li>
            <a href="{{ route('home') }}">Home</a>
        </li>
        <li>
            <a href="{{ route('comics') }}">Comics</a>
        </li>
        <li>
            <a href="#">Movies</a>
        </li>
        <li>
            <a href="#">Tv</a>
        </li>
        <li>
            <a href="#">Games</a>
        </li>
        <li>
            <a href="#">collectibles</a>
        </li>
        <li>
            <a href="#">videos</a>
        </li>
        <li>
            <a href="#">fans</a>
        </li>
        <li>
            <a href="#">news</a>
        </li>
        <li>
            <a href="#">shop</a>
        </li>
    </ul>

    <div id="header-input" class="input-group">
        <input id="search-input" type="text" placeholder="Search" class="form-control">
        <span for="search-input" class="input-group-text">
            &#x1F50E
        </span>
    </div>

</nav>
