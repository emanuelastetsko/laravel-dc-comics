@extends('layouts.app')


@section('content')

    <div class="section-cards my-bg-dark">
        <div class="container">
            <div class="row">
                <div class="col">
                    <img src="https://images8.alphacoders.com/974/thumb-1920-974682.jpg" alt="image" class="my-img mt-2">
                    <div class="cards my-5">
                        <h1 class="text-center">Laravel DC Comics</h1>
                    </div>
                    <a href="{{ route('comics.index')}}" class="my-btn btn btn-primary">Load comics</a>
                </div>
            </div>
        </div>
    </div>
    
@endsection