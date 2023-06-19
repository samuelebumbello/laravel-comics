@extends('layout.main')

@section('title')
    Dettaglio serie
@endsection

@section('content')

<main class=" py-5">
    <div class="series">
        <h2>current series</h2>
    </div>

    <div class="container">
        <div class="card sc-card d-flex flex-column align-items-center">
            <img src="{{ $card[ 'thumb' ] }}" class="card-img-top" alt="{{ $card[ 'title' ] }}">
            <div class="card-body">
            <h5 class="card-title">{{ $card[ 'title' ] }}</h5>
            <p class="card-text">{{ $card[ 'description' ] }}</p>
            <a href="#" class="btn btn-primary">{{ $card[ 'price' ] }}</a>
            </div>
        </div>
    </div>


</main>

@endsection
