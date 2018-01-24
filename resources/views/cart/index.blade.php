<link rel="stylesheet" href="/css/cart.css">
@extends ('layouts.master')


@section('content')

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
            
            <div class="col-md-3"><h6>Gåva</h6><p class="cart-info">{{ $item->charitysum }}% av summan går till {{$item->charity}}</p></div>
            <div class="col-md-2 icons text-right"><a href="/removefromcart/{{ $item->getHash() }}">t</a>    
            </div>
            <div class="col-md-2 text-right"><h6>Pris</h6>{{$item->price}} kr</div>
        </div>
    </li>

    @endforeach
        
    <li class="list-group-item">
        <div class="row align-items-center justify-content-between">
            <div class="col-md-6"></div>

                <div class="col-md-4">
                    <h5 class="text-right">Total: </h5>    
                </div>
                <div class="col-md-2 text-right">{{LaraCart::subTotal($format = false, $withDiscount = false)}} kr</div>
        </div>

            <div class="row align-items-center justify-content-between">
                <div class="col-md-6"></div>
                    
                    
                    <div class="col-md-4">
                        <h5 class="text-right">Varav gåva: </h5>    
                    </div>
                    <div class="col-md-2 text-right">{{App\Http\Controllers\CartController::giftSum()}} kr</div>
            </div>
        </li>
      </ul>
        <div class="row align-items-center">
            <div class="col-md-3"></div>
            <div class="col-md-6">    
                @auth
                    <button type="button" id="to-checkout" class="btn btn-primary btn-lg btn-block btn-cart" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">Fortsätt till checkout</button>
            </div>
            <div class="col-md-3"></div>
        </div>
    </div>
    </div>
</div>
    {{--  Checkout step 1  --}}
        <div class="collapse" id="collapseExample">
                <div class="row justify-content-center">
                        <div class="col-md-8">    
                            @include('checkout.step1')
                        </div>
                    </div>
                
                <div class="d-flex justify-content-center">
                    {{--  <div class="col-md-8">      --}}
                        @include('checkout.step2')
                    {{--  </div>  --}}
                </div>
                <div class="row align-items-center">
                        <div class="col-md-3"></div>
                        <div class="col-md-6">
                            <button type="submit" class="btn btn-primary btn-lg btn-block btn-cart">
                                Bekräfta order
                            </button>
                        </div>
                        <div class="col-md-3"></div>
                    </div>
                        </div>

                </form>
                
    @else 
    <a class="nav-link" href="{{ route('login') }}"><button type="button" class="btn btn-primary btn-lg btn-block btn-cart">Fortsätt till checkout</button></a>
    @endauth
   




@else
<br><br>
<h4 class="text-center align-middle">Kundvagnen är tom</h4>
<h4 class="text-center align-middle icons">g</h4>
@endif


<script src="../js/checkout.js"></script>
@endsection