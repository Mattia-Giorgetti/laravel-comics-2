@extends('layouts.app')
@section('content')
    <section class="bg-black" id="form_comics">
        <div class="container py-4">
            <form action="{{ route('comics.store') }}" method="POST">
                @csrf

                <label for="title">Title</label>
                <input type="text" name="title" id="title">

                <label for="description">Descrizione</label>
                <input type="text" name="description" id="description">

                <label for="thumb">Thumb</label>
                <input type="text" name="thumb" id="thumb">

                <label for="price">Price</label>
                <input type="text" name="price" id="price">

                <label for="series">Series</label>
                <input type="text" name="series" id="series">

                <label for="sale_date">Sale Date</label>
                <input type="text" name="sale_date" id="sale_date">

                <label for="type">Type</label>
                <input type="text" name="type" id="type">

                <input class="form-btn" type="submit" value="Send">
            </form>
        </div>
    </section>
@endsection
