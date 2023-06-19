@extends('layout.main')

@section('title')
    Cards
@endsection

@section('content')


<main>
    <div class="series">
        <h2>current series</h2>
    </div>

    <div class="container">


        @foreach ($cards as $card)

        <div class="cards">
            <a href= "{{ route('card_detail' , ['slug' => $card['slug']]) }}" >
                        <img src="{{ $card['thumb'] }}" alt="{{ $card['title'] }}">
            </a>

            <h4>{{ $card['title']}} </h4>
        </div>

        @endforeach

    </div>

    <button>
        LOAD MORE
    </button>
</main>

@endsection
