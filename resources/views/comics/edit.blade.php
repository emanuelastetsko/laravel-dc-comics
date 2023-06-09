
@extends('layouts.app')


@section('content')

    <div class="section-cards my-bg-dark">
        <div class="container">
            <div class="row">
                <div class="col">
                    <h1 class="text-center my-5">Laravel DC Comics - ID comic #{{ $comic->id }}</h1>
                    <a href="{{ route('comics.index')}}" class="my-btn btn btn-primary">Back</a>
                    @if ($errors->any())
                         <div class="alert alert-danger">
                             <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                             </ul>
                         </div>
                    @endif
                    <form action="{{ route('comics.update', $comic->id)}}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="mb-3">
                            <label for="title" class="form-label">Title *</label>
                            <input value="{{ old('title', $comic->title) }}" type="text" class="form-control" id="title" name="title" required>
                        </div>
                        <div class="mb-3">
                            <div>
                                <label for="description" class="form-label">Description</label>
                            </div>
                            <textarea class="form-control" id="description" name="description">{{ $comic->description }}</textarea>
                        </div>
                        <div class="mb-3">
                            <label for="url" class="form-label">Url image</label>
                            <input value="{{ old('url', $comic->thumb) }}" type="text" class="form-control" id="url" name="url">
                        </div>
                        <div class="mb-3">
                            <label for="price" class="form-label">Price</label>
                            <input value="{{ old('price', $comic->price) }}" type="text" class="form-control" id="price" name="price" required>
                        </div>
                        <div class="mb-3">
                            <label for="series" class="form-label">Series</label>
                            <input value="{{ old('series', $comic->series) }}" type="text" class="form-control" id="series" name="series" required>
                        </div>
                        <div class="mb-3">
                            <label for="date" class="form-label">Sale Date</label>
                            <input value="{{ old('date', $comic->sale_date) }}" type="date" class="form-control" id="date" name="date" required>
                        </div>
                        <div class="mb-3">
                            <label for="type" class="form-label">Type</label>
                            <input value="{{ old('type', $comic->type) }}" type="text" class="form-control" id="type" name="type" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Update</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection