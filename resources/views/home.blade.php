@extends('layouts.master')
<link rel="stylesheet" href="/css/my-pages.css">
@section('title', 'Mina sidor')
@section('content')
<div class="container">
<ul class="nav nav-tabs">
        <li class="nav-item">
          <a class="nav-link active" href="/home">Hem</a>
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
            <a class="nav-link" href="/mypages/wishlist">Min wishlist</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/mypages/newad">Skapa ny annons</a>
        </li>
          
      </ul>

        
    <div class="row">
        <div class="col-md-12 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h2 class="mp-h2">Hej {{ Auth::user()->fname }}, välkommen till dina sidor!</h2>

                </div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                </div>
                </div>
                </div>
                </div>
                @include('partials.progress')
{{--  <div class="marketing">
        
<div class="row">
    
    <a href="/mypages/contacts">
        <div class="col-lg-3">
            <a href="/mypages/contacts">
                <img class="rounded-circle" src="../img/symbols/mp_contacts.png" alt="Generic placeholder image">
                <h5>Kontaktuppgifter</h5>
            </a>
        </div><!-- /.col-lg-4 -->
    
    
        <div class="col-lg-3">
            <a href="/mypages/ads">
                <img class="rounded-circle" src="../img/symbols/mp_ads.png" alt="Generic placeholder image">
                <h5>Annonser</h5>
            </a>
        </div><!-- /.col-lg-4 -->
    
       
        <div class="col-lg-3">
            <a href="/mypages/orders"> 
                <img class="rounded-circle" src="../img/symbols/mp_orders.png" alt="Generic placeholder image">
                <h5>Ordrar</h5>
            </a>
        </div><!-- /.col-lg-4 -->


    
        <div class="col-lg-3">
            <a href="/mypages/newad">
                <img class="rounded-circle" src="../img/symbols/mp_newad.png" alt="Generic placeholder image">
                <h5>Skapa annons</h5>
            </a>
              </div><!-- /.col-lg-4 -->
        
      </div><!-- /.row -->
</div>  --}}


</div>
@endsection
@section('pagescript')
    <script src="../js/progressbar.js"></script>
    <script src="../js/progress.js"></script>
@stop