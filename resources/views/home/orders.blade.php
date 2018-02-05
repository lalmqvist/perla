@extends('layouts.master')
<link rel="stylesheet" href="/css/my-pages.css">
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
          <a class="nav-link active" href="/mypages/orders">Mina ordrar</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/mypages/ads">Mina annonser</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/mypages/newad">Skapa ny annons</a>
        </li>
</ul>
<div class="row justify-content-center">
    <div class="col-md-8">    
            

        <br><h3 class="text-center">Mina ordrar</h3>

          <div class="table-responsive">
            <table class="table table-striped table-sm">
              <thead>
                <tr>
                  <th>#</th>
                  <th></th>
                  <th>Datum</th>
                  <th>Gåva</th>
                  <th>Totalt</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($orders as $order)
                <tr>
                  <td>{{ $order->id }}</td>
                  <td></td>
                  <td>{{ date($order->created_at) }}</td>
                  <td>{{ $giftSum[$order->id] }}</td>
                  <td>{{ $orderSum[$order->id] }}</td>
                </tr>
                @endforeach
                
              </tbody>
            </table>
          </div>


    </div>
</div>
</div>
@endsection