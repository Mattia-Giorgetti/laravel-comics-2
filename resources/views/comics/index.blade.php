@extends('layouts.app')

@section('content')
    <section id="comic_list" class="py-5">
        <div class="container">
            <div class="row px-4">
                @foreach ($comics as $comic)
                    <div class="col-lg-2 col-md-4 col-sm-6 mb-5">
                        <div class="img_wrapper"><img class="img-fluid" src="{{ $comic['thumb'] }}" alt="{{ $comic['title'] }}">
                        </div>
                        <h4>
                            <a href="{{ route('comics.show', $comic->id) }}">{{ $comic['series'] }}</a>
                        </h4>
                    </div>
                @endforeach
            </div>
            <button>
                <a class="text-white text-decoration-none fs-5" href="{{ route('comics.create') }}">Add a New Comic!</a>
            </button>
        </div>
    </section>
    <section id="icons_section">
        <div class="container d-flex align-items-center justify-content-around">
            <div class="icon_item">
                <img src="{{ Vite::asset('resources/img/buy-comics-digital-comics.png') }}" alt="digital">
                <a class="d-none d-md-block" href="#">Digital Comics</a>
            </div>
            <div class="icon_item">
                <img src="{{ Vite::asset('resources/img/buy-comics-merchandise.png') }}" alt="merch">
                <a class="d-none d-md-block" href="#">Digital Comics</a>
            </div>
            <div class="icon_item">
                <img src="{{ Vite::asset('resources/img/buy-comics-subscriptions.png') }}" alt="subs">
                <a class="d-none d-md-block" href="#">Digital Comics</a>
            </div>
            <div class="icon_item">
                <img src="{{ Vite::asset('resources/img/buy-comics-shop-locator.png') }}" alt="locator">
                <a class="d-none d-md-block" href="#">Digital Comics</a>
            </div>
            <div class="icon_item">
                <img src="{{ Vite::asset('resources/img/buy-dc-power-visa.svg') }}" alt="power-visa">
                <a class="d-none d-md-block" href="#">Digital Comics</a>
            </div>
        </div>

    </section>
@endsection
