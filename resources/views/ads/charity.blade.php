@extends ('layouts.master')
<link rel="stylesheet" href="/css/ads.css">

@if (isset($category))
@section('title', $category->name)
@else
@section('title', 'Annonser')
@endif

@section('content')

<div class="container-fluid">
    @if (isset($charityName))
    <h1>Annonser med gåva till  "{{ $charityName }}"</h1>
    @endif

    <div class="card-group" id="search-cards">

        @foreach ($ads as $ad)
        <div class="card text-center">
            <a href="/ads/{{ $ad->id }}">
                <img class="card-img-top" src="/img/products/{{ $ad->thumb }}" alt="{{ $ad->title }}">
            </a>
            <div class="card-body">
                <h5 class="card-title">{{ $ad->title }}</h5>
                <h5 class="card-title">{{ $ad->price }} kr</h5>
                <p class="card-text">{{ $ad->brand }}<br></p>
                <a href="/addtocart/{{ $ad->id }}" class="btn btn-primary">Lägg i kundvagn</a>
                <a href="/addtowishlist/{{ $ad->id }}">
                    <button class="wish-button-index btn btn-outline-primary">
                        <span class="icons">e</span>
                        Spara som favorit
                    </button>
                </a>
            </div>
        </div>
        @endforeach

    </div>
</div>

@endsection