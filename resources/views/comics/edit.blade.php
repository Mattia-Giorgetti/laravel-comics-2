@extends('layouts.app')
@section('content')
    <section class="bg-black" id="form_comics">
        <div class="container py-4">
            <form action="{{ route('comics.update', $comic->id) }}" method="POST">
                @csrf
                @method('PUT')

                <label for="title">Title</label>
                <input type="text" name="title" id="title" value="{{ old('title', $comic->title) }}" required>

                <label for="description">Description</label>
                <textarea type="text" name="description" id="description" required>{{ old('description', $comic->description) }}</textarea>

                <label for="thumb">Thumb</label>
                <input type="text" name="thumb" id="thumb" value="{{ old('thumb', $comic->thumb) }}" required>

                <label for="price">Price</label>
                <input type="text" name="price" id="price" value="{{ old('price', $comic->price) }}" required>

                <label for="series">Series</label>
                <input type="text" name="series" id="series" value="{{ old('series', $comic->series) }}" required>

                <label for="sale_date">Sale Date</label>
                <input type="text" name="sale_date" id="sale_date" value="{{ old('sale_date', $comic->sale_date) }}"
                    required>

                <label for="type">Type</label>
                <select class="w-25" name="type" id="type" required>
                    <option value="comic book" {{ old('type', $comic->type == 'comic book' ? 'selected' : '') }}>Comic Book
                    </option>
                    <option value="graphic novel" {{ old('type', $comic->type == 'graphic novel' ? 'selected' : '') }}>
                        Graphic Novel</option>
                </select>
                <input class="form-btn mt-5" type="submit" value="Send">

            </form>
        </div>
    </section>
@endsection
