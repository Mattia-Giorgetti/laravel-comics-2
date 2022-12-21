@extends('layouts.app')

@section('content')
    <section id="comic_list" class="py-5">
        <div class="container">
            <div class="row px-4">
                @foreach ($comics as $comic)
                    <div class="col-2 mb-5">
                        <div class="img_wrapper"><img class="img-fluid" src="{{ $comic['thumb'] }}" alt="{{ $comic['title'] }}">
                        </div>
                        <h4>
                            <a href="{{ route('comics.show', $comic->id) }}">{{ $comic['series'] }}</a>
                        </h4>
                    </div>
                @endforeach
            </div>
            <button>
                <a class="text-white" href="{{ route('comics.create') }}">Add a New Comic!</a>
            </button>
        </div>
    </section>
    <section id="icons_section">
        <div class="container d-flex align-items-center justify-content-around">
            <div class="icon_item">
                <img src="{{ Vite::asset('resources/img/buy-comics-digital-comics.png') }}" alt="digital">
                <a href="#">Digital Comics</a>
            </div>
            <div class="icon_item">
                <img src="{{ Vite::asset('resources/img/buy-comics-merchandise.png') }}" alt="merch">
                <a href="#">Digital Comics</a>
            </div>
            <div class="icon_item">
                <img src="{{ Vite::asset('resources/img/buy-comics-subscriptions.png') }}" alt="subs">
                <a href="#">Digital Comics</a>
            </div>
            <div class="icon_item">
                <img src="{{ Vite::asset('resources/img/buy-comics-shop-locator.png') }}" alt="locator">
                <a href="#">Digital Comics</a>
            </div>
            <div class="icon_item">
                <img src="{{ Vite::asset('resources/img/buy-dc-power-visa.svg') }}" alt="power-visa">
                <a href="#">Digital Comics</a>
            </div>
        </div>

    </section>
@endsection
