@extends ('layouts.master')
@section('title', $ad->title)
@section('content')

    <div class="container product-container">
        
        <div class="row">
          <div class="col">
            
            <div class="container" id="img-container">
                <div class="row">
                    <div class="col"><img id="large-img" src="../img/products/{{$ad->images[0]->img}}"></div>
                </div>
                <div class="row">
                    @foreach ($ad->images as $key => $img)
                    <div class="col"><img class="small-img" id="small-img-{{$key}}" src="../img/products/{{$img->img}}"></div>
                    
                    @endforeach
                </div>
            
            </div>
          </div>
          
          <div class="col-4">
            <h2 class="ad-title">{{$ad->title}}</h2>
            <h2 class="ad-price">{{$ad->price}} kr</h2>
            <h5>{{$charitySum}}% av summan går till <a href="#">{{$charityName}}</a></h5>
            <p>Säljare: <a href="#">{{$ad->user->fname}} {{$ad->user->lname}}</a></p>
            
            @if (strlen($ad->brand) >= 1)
                <p class="ad-info"><b>Märke:</b> {{$ad->brand}}</p>
            @endif

            @if (strlen($ad->type) >= 1)
                <p class="ad-info"><b>Typ:</b> {{$ad->type}}</p>
            @endif
            @if (strlen($ad->size) >= 1)
                <p class="ad-info"><b>Storlek:</b> {{$ad->size}}</p>
            @endif
            @if (strlen($ad->color) >= 1)
                <p class="ad-info"><b>Färg:</b> {{$ad->color}}</p>
            @endif
            @if (strlen($ad->material) >= 1)
                <p class="ad-info"><b>Material:</b> {{$ad->material}}</p>
            @endif
            @if (strlen($ad->condition) >= 1)
                <p class="ad-info"><b>Skick:</b> {{$ad->condition}}</p>
            @endif
            @if (strlen($ad->other) >= 1)
                <p class="ad-info"><b>Övrigt:</b> {{$ad->other}}</p>
            @endif
            <a href="/addtocart/{{ $ad->id }}"><button class="btn btn-primary btn-lg btn-block btn-custom">Lägg i kundvagn</button></a>    
            <a href="/addtowishlist/{{ $ad->id }}"><button id="wish-button" class="btn btn-outline-primary btn-lg btn-block btn-custom"><span class="icons">e</span>  Spara som favorit</button></a>    
        </div>
        </div>
      </div>
      
      <div class="fullScreen">
      <div id="carouselControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <p class="icons" id="close-carousel">c</p>

            @foreach ($ad->images as $key => $img)
                @if ($key === 0)
              <div class="carousel-item active">
                @else
                <div class="carousel-item">
                @endif
                <img class="d-block w-70 align-baseline" src="../img/products/{{$img->img}}" alt="First slide">
              </div>
              @endforeach
              
              
            
            <p class="icons" id="close-carousel"></p>c</p>
            <a class="carousel-control-prev" href="#carouselControls" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselControls" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
          </div>
          </div>
      

@section('pagescript')
    <script src="../js/ad.show.js"></script>
@stop

@endsection