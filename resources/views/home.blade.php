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
                <div class="panel-heading"><h2 class="mp-h2">Mina sidor</h2></div>

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
<div class="marketing">
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
</div>

<div id="progress-container">
    <svg xmlns="http://www.w3.org/2000/svg" version="1.1" x="0px" y="0px" viewBox="0 0 100 100">
                    <path fill-opacity="0" stroke-width="1" stroke="#bbb" d="M81.495,13.923c-11.368-5.261-26.234-0.311-31.489,11.032C44.74,13.612,29.879,8.657,18.511,13.923  C6.402,19.539,0.613,33.883,10.175,50.804c6.792,12.04,18.826,21.111,39.831,37.379c20.993-16.268,33.033-25.344,39.819-37.379  C99.387,33.883,93.598,19.539,81.495,13.923z"/>
                    <path id="heart-path" fill-opacity="0" stroke-width="3" stroke="#ED6A5A" d="M81.495,13.923c-11.368-5.261-26.234-0.311-31.489,11.032C44.74,13.612,29.879,8.657,18.511,13.923  C6.402,19.539,0.613,33.883,10.175,50.804c6.792,12.04,18.826,21.111,39.831,37.379c20.993-16.268,33.033-25.344,39.819-37.379  C99.387,33.883,93.598,19.539,81.495,13.923z"/>
                </svg>
    <p>80 % av din försäljningar har gått till välgörenhet.</p>
  </div>
</div>
@endsection
@section('pagescript')
    <script src="../js/progressbar.js"></script>
    <script src="../js/progress.js"></script>
@stop