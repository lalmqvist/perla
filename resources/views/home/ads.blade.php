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
          <a class="nav-link" href="/mypages/orders">Mina ordrar</a>
        </li>
        <li class="nav-item">
            <a class="nav-link active" href="/mypages/ads">Mina annonser</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/mypages/newad">Skapa ny annons</a>
        </li>
</ul>
<div class="row justify-content-center">
    <div class="col-md-8">    
            

        <br><h3 class="text-center">Mina annonser</h3>

          <div class="table-responsive">
            <table class="table table-striped table-sm">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Titel</th>
                  <th>Datum</th>
                  <th>Gåva</th>
                  <th>Välgörenhet</th>
                  <th>Pris</th>
                  <th>Status</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($ads as $ad)
                <tr>
                  <td>{{ $ad->id }}</td>
                  <td>{{ $ad->title }}</td>
                  <td>{{ date($ad->created_at) }}</td>
                  <td>{{ $charitySum[$ad->id] }}</td>
                  <td>{{ $charityName[$ad->id] }}</td>
                  <td>{{ $ad->price }}</td>
                  <td>{{ $ad->active }}</td>
                </tr>
                @endforeach
                
              </tbody>
            </table>
          </div>


    </div>
</div>
</div>

@endsection