@extends('layouts.app')


@section('content')

<div class="container">
    <div class="row">
        <div class="col">
            <h1 class="text-center my-5">
                Detail: {{ $comic->title }}
            </h1>
            <a href="{{ route('comics.index') }}" class="my-btn btn btn-primary">
                Back to all products
            </a>
                <div class="card">
                    <div>
                        <img src="{{ $comic->thumb }}" class="my-img" alt="card"/>
                    </div>
                    
                    <div class="my-text my-3">
                        Description: {{ $comic->description }}
                    </div>

                    <div class="my-text my-3">
                        Price: $ {{ $comic->price }}
                    </div>

                    <div class="my-text my-3">
                        Series: {{ $comic->series }}
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

@endsection