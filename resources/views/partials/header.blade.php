<div class="up_header">
    <div class="container d-flex gap-5 align-items-center p-1">
        <span>Dc Power Visa</span>
        <span>Additional Dc sites</span>
    </div>
</div>
<header class="container d-flex align-items-center justify-content-between">
    <div class="d-none d-lg-flex align-items-center justify-content-between">
        <img src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="logo">
        <ul class="list-unstyled d-flex mb-0">
            <li>
                <a href="">Characters</a>
            </li>
            <li>
                <a class="{{ Route::currentRouteName() == 'comics.index' ? 'active_li' : '' }}"
                    href="{{ route('comics.index') }}">Comics</a>
            </li>
            <li>
                <a href="">Movies</a>
            </li>
            <li>
                <a href="">Tv</a>
            </li>
            <li>
                <a href="">Games</a>
            </li>
            <li>
                <a href="">Collectables</a>
            </li>
            <li>
                <a href="">Videos</a>
            </li>
            <li>
                <a href="">Fans</a>
            </li>
            <li>
                <a href="">News</a>
            </li>
            <li>
                <a href="">Shop</a>
            </li>
        </ul>
        <input type="text" placeholder="Search">
    </div>
    <div class="d-flex align-items-center justify-content-between d-lg-none w-100">
        <div><img src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="logo"></div>
        <div class="fs-5 text-uppercase fw-bold">Menu</div>
    </div>
</header>
