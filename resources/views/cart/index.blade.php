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
                {{--  <form method="POST" action="{{ route('register') }}">
                    {{ csrf_field() }}  --}}
<ul class="list-group list-group-flush">
        
    @foreach ($cartItems as $item)
    <li class="list-group-item"><img class="p-3" width="80px" src="../img/products/thumb/{{ $item->thumb }}">{{$item->name}}</li>
    @endforeach
        
      </ul>


      {{--  </form>  --}}</div></div></div>
@endsection