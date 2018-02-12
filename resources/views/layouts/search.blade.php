{{--  Search field and toggler - start  --}}
<button class="btn my-2 my-sm-0 icons navbar-toggler" type="button" data-toggle="collapse" data-target="#collapseSearchField" aria-expanded="false" aria-controls="collapseSearchField" id="dropdown-search">
      s
    </button>
  <div class="collapse" id="collapseSearchField">
    <div class="card card-body dropdown-search">
        <form class="form-inline mt-2 mt-md-0" method="POST" action="/showSearch">
          {{ csrf_field() }}
          <input class="form-control mr-sm-2" id="search-field" type="text" placeholder="Sök..." aria-label="Search" name="search" autocomplete="off">
{{--            
          <datalist id="huge_list" class="d-block">
          </datalist>  --}}
{{--  
          <div class="dropdown">
              <button id="dLabel" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Dropdown trigger
              </button>  --}}
              <div id="search-dropdown" class="dropdown-menu" aria-labelledby="dLabel">
                  
              </div>
            {{--  </div>  --}}
          
          
          <br>
          <button class="btn my-2 my-sm-0 icons" type="submit">n</button>
        </form>          
      </div>
      
  </div>
  

  @section('pagescript')
  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="../js/search.js"></script>
  @stop
 
  {{--  Search field and toggler - end   --}}