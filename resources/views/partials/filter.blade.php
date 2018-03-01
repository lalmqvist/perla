<div class="col-md-2"></div>
<div class="filter-container col-md-8">
    <form method="POST" action="/ads/filter">
        {{ csrf_field() }}
<div class="filter-flex">
        {{--  Dropdown för märke  --}}
        <div class="dropdown">
            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownBrand" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Märke
            </button>
            <div class="dropdown-menu" aria-labelledby="dropdownBrand">
                
                @foreach ($ads as $ad)
                @if (strlen($ad->brand) >= 1)

                <label class="btn btn-secondary">
                    <input type="checkbox" value="{{$ad->brand}}" name="brand[]" autocomplete="off"> 
                    {{$ad->brand}}
                </label>

                @endif
                @endforeach

            </div>
        </div>
        {{--  SLUT - Dropdown för märke  --}}

        {{--  Dropdown för Typ  --}}
        <div class="dropdown">
                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownType" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Produkttyp
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownType">
                    
                    @foreach ($ads as $ad)
                    @if (strlen($ad->type) >= 1)
    
                    <label class="btn btn-secondary">
                        <input type="checkbox" value="{{$ad->type}}" name="type[]" autocomplete="off"> 
                        {{$ad->type}}
                    </label>
    
                    @endif
                    @endforeach
    
                </div>
            </div>
            {{--  SLUT - Dropdown för Typ  --}}

        {{--  Dropdown för Storlek  --}}
        <div class="dropdown">
                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownSize" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Storlek
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownSize">
                    
                    @foreach ($ads as $ad)
                    @if (strlen($ad->size) >= 1)
    
                    <label class="btn btn-secondary">
                        <input type="checkbox" value="{{$ad->size}}" name="size[]" autocomplete="off"> 
                        {{$ad->size}}
                    </label>
    
                    @endif
                    @endforeach
    
                </div>
            </div>
            {{--  SLUT - Dropdown för Storlek  --}}

        {{--  Dropdown för Färg  --}}
        <div class="dropdown">
                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownColor" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Färg
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownColor">
                    
                    @foreach ($ads as $ad)
                    @if (strlen($ad->color) >= 1)
    
                    <label class="btn btn-secondary">
                        <input type="checkbox" value="{{$ad->color}}" name="color[]" autocomplete="off"> 
                        {{$ad->color}}
                    </label>
    
                    @endif
                    @endforeach
    
                </div>
            </div>
            {{--  SLUT - Dropdown för Storlek  --}}
            <button type="submit" class="btn btn-outline-primary btn-filter">
                    Filtrera
                </button>
        </div>

</form>
    </div>
    <div class="col-md-2"></div>