@extends('layouts.app')
@section('content')
    <section class="bg-black" id="form_comics">
        <div class="container py-4">
            <form action="{{ route('comics.store') }}" method="POST">
                @csrf

                <label for="title">Title</label>
                <input type="text" name="title" id="title" required>

                <label for="description">Description</label>
                <textarea type="text" name="description" id="description" required></textarea>

                <label for="thumb">Thumb</label>
                <input type="text" name="thumb" id="thumb" required>

                <label for="price">Price</label>
                <input type="text" name="price" id="price" required>

                <label for="series">Series</label>
                <input type="text" name="series" id="series" required>

                <label for="sale_date">Sale Date</label>
                <input type="text" name="sale_date" id="sale_date" required>

                <label for="type">Type</label>
                <select class="w-25" name="type" id="type" required>
                    <option value="comic book">Comic Book</option>
                    <option value="graphic novel">Graphic Novel</option>
                </select>

                <input class="form-btn mt-5" type="submit" value="Send">
            </form>
        </div>
    </section>
@endsection
