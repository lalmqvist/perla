<link rel="stylesheet" href="/css/slider.css">


<div class="slider_wrapper">

<h2 class="Senast tillagda annonser"></h2>

<div class="slide_arrow icons" id="left_arrow"><span class="icon">l</span></div>


<div class="slideblock" id="slideblock">

@foreach ($latestAds as $ad)
    <div class="slide_prod card text-center" id="slide_prod_{{$ad->id}}">
	<a href="/ads/{{ $ad->id }}">
        <img class="card-img-top" src="../img/products/thumb/{{ $ad->thumb }}" alt="{{ $ad->title }}">
    </a>
		<div class="card-body">
                <h5 class="card-title">{{ $ad->title }}</h5>
                <h5 class="card-title">{{ $ad->price }} kr</h5>
                {{--  <p class="card-text">{{ $ad->brand }}<br></p>  --}}
                <a href="/addtocart/{{ $ad->id }}" class="btn btn-primary btn-block">Lägg i kundvagn</a>
            </div>
        </div>
                @endforeach
	

</div>

<div class="slide_arrow icons" id="right_arrow_back"><span class="icon">l</span><span class="tooltiptext">Back to first product.</span></div>
<div class="slide_arrow icons" id="right_arrow"><span class="icon">r</span></div>
</div>

<script src="../js/slider.js"></script>

{{--  ////////////////  --}}

{{--  <div class="card-columns">
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
    

            
          </div>  --}}