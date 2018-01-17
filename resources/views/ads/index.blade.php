@extends ('layouts.master')
{{--  <link rel="stylesheet" href="/css/ads.css">  --}}

@section('content')


    
@if (isset($categoryName))

<h1>{{ $categoryName }}</h1>

@endif

    


    
    <main role="main" class="container">
    <div class="card-columns">
    @foreach ($ads as $ad)
        <div class="card text-center">
          <a href="/ads/{{ $ad->id }}">
            <img class="card-img-top" src="../img/products/thumb/{{ $ad->thumb }}" alt="{{ $ad->title }}">
          </a>
            <div class="card-body">
            <h5 class="card-title">{{ $ad->title }}</h5>
            <h5 class="card-title">{{ $ad->price }} kr</h5>
            <p class="card-text">{{ $ad->brand }}<br></p>
            <a href="/addtocart/{{ $ad->id }}" class="btn btn-primary">Lägg i kundvagn</a>
            <a href="#"><button class="wish-button-index btn btn-outline-primary"><span class="icons">e</span>  Spara som favorit</button></a>    

        </div>
        </div>
    @endforeach

    <script src="../js/ad.index.js"></script>   
        
      </div>
      </main>
@endsection