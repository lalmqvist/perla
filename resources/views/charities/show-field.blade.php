<link rel="stylesheet" href="/css/charities.css">
@extends ('layouts.master')
@section('title', $fieldName)

@section('content')

<div class="charity-card card bg-dark text-white">
    <img class="card-img" src="../img/{{ $fieldImg }}" alt="{{ $fieldName }}">
    <div class="card-img-overlay">
        <h3 class="card-title">Välgörenhetsorganisationer för {{ $fieldName }}</h3>
    </div>
</div>

<div id="accordion" role="tablist">
    @foreach ($charities as $key => $charity)
        <div class="card charity-card">
            <div class="card-header" role="tab" id="heading{{ $charity->id }}">
                <h5 class="mb-0">
                    <a data-toggle="collapse" href="#collapse{{ $charity->id }}" role="button" aria-expanded="true" aria-controls="collapse{{ $charity->id }}">
                        {{ $charity->name }}
                    </a>
                </h5>
            </div>
      
            <div id="collapse{{ $charity->id }}" class="collapse" role="tabpanel" aria-labelledby="heading{{ $charity->id }}" data-parent="#accordion">
                <div class="card-body">
                    <p>{{ $charity->description }}</p>
                    <a href="/charities/ads/{{ $charity->id }}">Se annonser</a>
                </div>
            </div>
        </div>
    @endforeach
</div>

@endsection