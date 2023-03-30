@extends('layouts.app')

@section('content')
<div class="container mt-3">
    <div class="row">
        <div class="col text-center">
            <h1 class="my-4">Comics</h1>
            <a href="/" class="btn btn-primary mb-3">Back to homepage</a>
            <br>
            <a href="{{ route('comics.create') }}" class="btn btn-success mb-3">Add comic</a>
        </div>
    </div>
    <div class="row">
        @foreach($comics as $comic)
        <div class="col-3">
            <div class="card">
                <div class="card-body">
                        <img src="{{ $comic->thumb }}" alt="Copertina" class="my-img">
                        <h6 class="pt-3">{{ $comic->title }}</h6>
                        <br>
                        <a href="{{ route('comics.show', $comic->id) }}" class="btn btn-primary mb-2">Show</a>
                        <br>
                        <a href="{{ route('comics.edit', $comic->id) }}" class="btn btn-warning my-2">Edit</a>
                        <br>
                        <form onsubmit="return confirm('Sei sicuro di voler eliminare questo Pkmn?');" action="{{ route('comics.destroy', $comic->id) }}" method="POST" class="my-2">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection