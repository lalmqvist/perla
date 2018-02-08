@extends ('layouts.master')
<link rel="stylesheet" href="/css/charities.css">
@section('title', 'Välgörenhet')
@section('content')

<h1>Hejsan</h1>
<div class="card-columns">
@foreach ($fields as $field)

    <div class="card w-30 text-white bg-success">
      <img class="card-img-top" src="../img/symbols/{{ $field->icon }}" alt="Card image cap">
      <div class="card-body">
        <h4 class="card-title">{{ $field->name }}</h4>
        <a href="/charities/{{ $field->id }}" class="card-link">Se välgörenhetsorganisationer</a>
        <a href="/charities/{{ $field->id }}/ads" class="card-link">Visa annonser</a>
      </div>
    </div>
    

  @endforeach
</div>


@endsection

