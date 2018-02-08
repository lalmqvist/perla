@extends ('layouts.master')
@section('title', $fieldName)
@section('content')

<h1>Välgörenhetsorganisationer för {{ $fieldName }}</h1>
<div id="accordion" role="tablist">
  @foreach ($charities as $key => $charity)
  <div class="card">
      <div class="card-header" role="tab" id="heading{{ $charity->id }}">
        <h5 class="mb-0">
          <a data-toggle="collapse" href="#collapse{{ $charity->id }}" role="button" aria-expanded="true" aria-controls="collapse{{ $charity->id }}">
              {{ $charity->name }}
          </a>
        </h5>
      </div>
  
      <div id="collapse{{ $charity->id }}" class="collapse show" role="tabpanel" aria-labelledby="heading{{ $charity->id }}" data-parent="#accordion">
        <div class="card-body">
            {{ $charity->description }}
        </div>
      </div>
    </div>
    @endforeach

  
  </div>
@endsection