@extends('layouts.app')


@section('content')

    <div class="section-cards my-bg-dark">
        <div class="container">
            <div class="row">
                <div class="col">
                    <h1 class="text-center my-5">Laravel DC COMICS - All comics</h1>
                    <a href="/" class="my-btn btn btn-primary">Back to homepage</a>
                    <div class="cards d-flex justify-content-start flex-wrap my-5">
                        @foreach ($comics as $comic)
                            <div class="card col-4 mb-3 g-3">
                                <div>
                                    <img src="{{ $comic->thumb }}" class="my-img" alt="card"/>
                                </div>
                                <div class="my-text my-3">{{ $comic->title }}</div>
                                <a href="{{ route('comics.show', $comic->id)}}" class="my-btn btn btn-primary">Read details</a>
                            </div>
                        @endforeach
                    </div>
                    <a href="{{ route('comics.create')}}" class="my-btn btn btn-primary my-5">Add new comic</a>
                </div>
            </div>
        </div>
    </div>

@endsection