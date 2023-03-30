@extends('layouts.app')


@section('content')

    <div class="section-cards my-bg-dark">
        <div class="container">
            <div class="row">
                <div class="col">
                    <h1 class="text-center my-5">Laravel DC Comics - New comic</h1>
                    <a href="{{ route('comics.index')}}" class="my-btn btn btn-primary">Back</a>
                    {{-- In caso di errore --}}
                    @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif
                    <form action="{{ route('comics.store')}}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="title" class="form-label">Title</label>
                            <input type="text" class="form-control" id="title" name="title" required maxlength="255" value="{{ old('title') }}">
                        </div>
                        <div class="mb-3">
                            <label for="description" class="form-label">Description</label>
                            <textarea class="form-control" placeholder="Write a brief description here..." id="description" name="description" required value="{{ old('description') }}"></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="url" class="form-label">Url image</label>
                            <input type="text" class="form-control" id="url" name="url" required value="{{ old('url') }}">
                        </div>
                        <div class="mb-3">
                            <label for="price" class="form-label">Price</label>
                            <input type="text" class="form-control" id="price" name="price" required value="{{ old('price') }}">
                        </div>
                        <div class="mb-3">
                            <label for="series" class="form-label">Series</label>
                            <input type="text" class="form-control" id="series" name="series" required value="{{ old('series') }}">
                        </div>
                        <div class="mb-3">
                            <label for="date" class="form-label">Sale Date</label>
                            <input type="date" class="form-control" id="date" name="date" required value="{{ old('date') }}">
                        </div>
                        <div class="mb-3">
                            <label for="type" class="form-label">Type</label>
                            <input type="text" class="form-control" id="type" name="type" required value="{{ old('type') }}">
                        </div>
                        <button type="submit" class="btn btn-primary mb-4">Add</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection