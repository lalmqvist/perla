@extends ('layouts.master')
<link rel="stylesheet" href="/css/cart.css">

@section('content')


{{--      
@if (isset($categoryName))

<h1>{{ $categoryName }}</h1>

@endif  --}}
<div class="col-md-12 form-cont col-md-offset-2">
        <div class="panel panel-default">
            <div class="panel-heading"><h2>Din kundvagn</h2></div>

            <div class="panel-body">

@if (count($cartItems) >= 1)
<ul class="list-group list-group-flush">
        
    @foreach ($cartItems as $item)
    <li class="list-group-item">
        <div class="row align-items-center justify-content-between">
            
            <div class="col-md-4">
                <a href="/ads/{{ $item->id }}">
                    <img class="p-3" width="80px" src="../img/products/thumb/{{ $item->thumb }}">
                    <h5 class="d-inline">{{$item->name}}</h5>
                </a>
            </div>
            
            <div class="col-md-3"><h6>Gåva</h6>30% till Rädda barnen</div>
            <div class="col-md-2"><a href="/removefromcart/{{ $item->getHash() }}"><button class="btn btn-primary btn-block">Ta bort</button></a>    
            </div>
            <div class="col-md-2 text-right"><h6>Pris</h6>{{$item->price}} kr</div>
        </div>
    </li>
    @endforeach
        
    <li class="list-group-item">
        <div class="row align-items-center justify-content-between">
            <div class="col-md-4"></div>
                
                <div class="col-md-3"></div>
                <div class="col-md-2">
                    <h4 class="text-right">Total: </h4>    
                </div>
                <div class="col-md-2 text-right">{{LaraCart::subTotal($format = false, $withDiscount = false)}} kr</div>
        </div>

            <div class="row align-items-center justify-content-between">
                <div class="col-md-4"></div>
                    
                    <div class="col-md-3"></div>
                    <div class="col-md-2">
                        <h4 class="text-right">Varav gåva: </h4>    
                    </div>
                    <div class="col-md-2 text-right">{{LaraCart::subTotal($format = false, $withDiscount = false)}} kr</div>
            </div>
        </li>
      </ul>

</div>




@else
<br><br>
<h4 class="text-center align-middle">Kundvagnen är tom</h4>
<h4 class="text-center align-middle icons">g</h4>
@endif

      {{--  </form>  --}}</div></div></div>
@endsection