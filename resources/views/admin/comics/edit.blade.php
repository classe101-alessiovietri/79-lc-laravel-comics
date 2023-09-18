@extends('layouts.main')

@section('page-title', 'Modifica '.$comic->title)

@section('main-content')
<div class="container">
    <div class="row py-5">
        <div class="col bg-light">

            @if ($errors->any())
                <div class="alert alert-danger mb-4">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{ route('comics.update', ['comic' => $comic->id]) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label for="title" class="form-label">Title <span class="text-danger">*</span></label>
                    <input type="text" class="form-control @error('title') is-invalid @enderror" id="title"
                        name="title" placeholder="Write here..." required
                        value="{{ old('title', $comic->title) }}">
                    @error('title')
                        <div class="alert alert-danger my-2">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="thumb" class="form-label">Thumb</label>
                    <input type="text" class="form-control @error('thumb') is-invalid @enderror" id="thumb" name="thumb" placeholder="Write here..."
                        value="{{ old('thumb', $comic->thumb) }}">
                    @error('thumb')
                        <div class="alert alert-danger my-2">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="type" class="form-label">Type<span class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="type" name="type" placeholder="Write here..." required
                        value="{{ old('type', $comic->type) }}">
                </div>
                <div class="mb-3">
                    <label for="price" class="form-label">Price<span class="text-danger">*</span></label>
                    <input type="number" min="2" max="100" class="form-control" id="price" name="price" placeholder="Write here..." required
                        value="{{ old('price', $comic->price) }}">
                </div>
                <div class="mb-3">
                    <label for="series" class="form-label">Series</label>
                    <input type="text" class="form-control" id="series" name="series" placeholder="Write here..."
                        value="{{ old('series', $comic->series) }}">
                </div>
                <div class="mb-3">
                    <label for="sale_date" class="form-label">Sale date</label>
                    <input type="date" class="form-control" id="sale_date" name="sale_date" placeholder="Write here..."
                        value="{{ old('sale_date', $comic->sale_date) }}">
                </div>
                <div class="mb-3">
                    <label for="artists" class="form-label">Artists</label>
                    <input type="text" class="form-control" id="artists" name="artists" placeholder="Write here..."
                        value="{{ old('artists', $comic->artists) }}">
                </div>
                <div class="mb-3">
                    <label for="writers" class="form-label">Writers</label>
                    <input type="text" class="form-control" id="writers" name="writers" placeholder="Write here..."
                        value="{{ old('writers', $comic->writers) }}">
                </div>
                <div class="mb-3">
                    <label for="description" class="form-label">Description<span class="text-danger">*</span></label>
                    <textarea class="form-control" id="description" name="description" rows="3" required>{{ old('description', $comic->description) }}</textarea>
                </div>
                <div class="text-center">
                    <button type="submit" class="btn btn-warning w-25">
                        Update
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
