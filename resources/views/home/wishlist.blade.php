@extends('layouts.master')
<link rel="stylesheet" href="/css/my-pages.css">
<link rel="stylesheet" href="/css/ads.css">

@section('title', 'Mina favoriter')

@section('content')

<div class="container">
    <ul class="nav nav-tabs">
        <li class="nav-item">
            <a class="nav-link" href="/home">Hem</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/mypages/contacts">Mina uppgifter</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/mypages/orders">Mina ordrar</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/mypages/ads">Mina annonser</a>
        </li>
        <li class="nav-item">
            <a class="nav-link active" href="/mypages/wishlist">Mina favoriter</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/mypages/newad">Skapa ny annons</a>
        </li>
    </ul>

    <br><h3 class="text-center">Mina favoriter</h3>        
        <div class="card-deck ads">
                @foreach ($ads as $ad)
                <div class="card ad-card text-center">
                    <button class="wish-button-remove btn btn-outline-primary icons" data-ad-id="{{ $ad->id }}" data-user-id="{{ Auth::user()->id }}">c</button>
                        
                    <a href="/ads/{{ $ad->id }}">
                        <img class="card-img-top" src="../img/products/{{ $ad->thumb }}" alt="{{ $ad->title }}">
                    </a>
                    
                    <div class="card-body">
                        <h5 class="card-title">{{ $ad->title }}</h5>
                        <h5 class="card-title">{{ $ad->price }} kr</h5>
                        <p class="card-text">{{ $ad->brand }}<br></p>
                        <a href="/addtocart/{{ $ad->id }}" class="btn btn-outline-primary">Lägg i kundvagn</a>
                        <a href="/addtowishlist/{{ $ad->id }}">
                        </a>
                    </div>
                </div>
                @endforeach
    
            </div>

    </div>

@endsection

@section('pagescript')
<script src="../js/wishlist.home.js"></script>
@stop