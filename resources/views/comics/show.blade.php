@extends('layouts.app')
@section('content')
    <section id="single_comic">
        <div class="show_line">
        </div>
        <div class="container py-4">
            <div class="row">
                <div class="col-lg-8">
                    <h2 class="text-uppercase py-3">{{ $comic->title }}</h2>
                    <div class="show_comic_pricing d-flex justify-content-between align-items-center">
                        <p class="green_text mb-0"> U.S.Price: <span class="text-white">{{ $comic->price }}</span></p>
                        <p class="green_text mb-0 text-uppercase">Available</p>
                    </div>
                    <div class="comic_description">
                        <p class="py-4">{{ $comic->description }}</p>
                        <div class="show_btn_section d-flex justify-content-flex-start gap-5">
                            <button>
                                <a class="text-decoration-none text-white d-block" href="{{ route('comics.index') }}">
                                    &lArr; Back
                                    to Comics</a>
                            </button>
                            <button>
                                <a class="text-decoration-none text-white d-block"
                                    href="{{ route('comics.edit', $comic->id) }}">Edit
                                    this
                                    Comic</a>
                            </button>

                            {{-- SERVE UN FORM PER FARE IL DELETE, ATTRAVERSO @METHOD('DELETE') --}}
                            <form action="{{ route('comics.destroy', $comic->id) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')

                                <button class="show_delete_btn" type="submit">Delete This Comic</button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div>
                        <img class="img-fluid" src="{{ $comic->thumb }}" alt="{{ $comic->series }}">
                    </div>
                </div>
            </div>

        </div>
        <div class="comic_specs pb-5">
            <div class="container">
                <div class="col-5">
                    <h3 class="py-4">Specs</h3>
                    <div class="d-flex py-3 justify-content-between">
                        <p>Series:</p>
                        <span class="text-uppercase">{{ $comic->series }}</span>
                    </div>
                    <div class="d-flex py-3 justify-content-between">
                        <p>U.S.Price:</p>
                        <span>{{ $comic->price }}</span>
                    </div>
                    <div class="d-flex py-3 justify-content-between">
                        <p>On Sale Date</p>
                        <span>{{ $comic->sale_date }}</span>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
