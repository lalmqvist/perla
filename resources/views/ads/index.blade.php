@extends ('layouts.master')
<link rel="stylesheet" href="/css/ads.css">

@if (isset($category))
@section('title', $category->name)
@else
@section('title', 'Annonser')
@endif

@section('content')

<div class="container-fluid">


    @if (isset($pageHeading))
    <h1>{{ $pageHeading }}</h1>
    @endif

    <div class="row">
        
        @if (isset($subCategories))
        <nav class="col-md-2 d-none d-md-block bg-light bg-light-sidebar sidebar">
            <div class="sidebar-sticky">
                
                @if (isset($category))
                <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
                    <span>
                        
                        @foreach ($subCategories as $subCategory)

                        @if ($subCategory->id == $category->parent)
                        {{ $subCategory->name }}
                        @endif

                        @endforeach

                    </span>

                    <a class="d-flex align-items-center text-muted" href="#">
                        <span data-feather="plus-circle"></span>
                    </a>
                </h6>

                <div class="dropdown-divider"></div>
                @endif

                <ul class="nav flex-column mb-2">

                    @foreach ($subCategories as $subCategory)
                    <li class="nav-item">
                        <a class="nav-link" href="/categories/{{$subCategory->id}}">
                            <span data-feather="file-text"></span>
                            {{$subCategory->name}}
                        </a>
                    </li>
                    <div class="dropdown-divider"></div>
                    @endforeach
                </ul>

            </div>
        </nav>
        @endif

        <div class="card-deck ads col-md-10">
            @foreach ($ads as $ad)
            <div class="card ad-card text-center">
                @auth
                @if (in_array($ad->id, $wishlist)) 
                    <button class="wish-button-index full-heart btn btn-outline-primary icons" data-ad-id="{{ $ad->id }}" data-user-id="{{ Auth::user()->id }}">
                        f
                    </button>
                @else
                    <button class="wish-button-index empty-heart btn btn-outline-primary icons" data-ad-id="{{ $ad->id }}" data-user-id="{{ Auth::user()->id }}">
                        e
                    </button>
                @endif
                @endauth

                <a href="/ads/{{ $ad->id }}">
                    <img class="card-img-top" src="../img/products/{{ $ad->thumb }}" alt="{{ $ad->title }}">
                </a>
                
                <div class="card-body">
                    <h5 class="card-title">{{ $ad->title }}</h5>
                    <h5 class="card-title">{{ $ad->price }} kr</h5>
                    <p class="card-text">{{ $ad->brand }}<br></p>
                    <a href="/addtocart/{{ $ad->id }}" class="btn btn-outline-primary">Lägg i kundvagn</a>
                    <a href="/addtowishlist/{{ $ad->id }}">
                    </a>
                </div>
            </div>
            @endforeach

        </div>
    </div>
</div>

@section('pagescript')
<script src="../js/wishlist.index.js"></script>
@stop

@endsection