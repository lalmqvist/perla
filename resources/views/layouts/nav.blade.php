<link rel="stylesheet" href="/css/navbar.css">


{{--  Navbar first - start  --}}
<nav class="navbar navbar-light sticky-top bg-light" id="navbar-first" style="background-color: #F4F6F8;">
    
    <a class="navbar-brand" href="/"><img style="width: 130px" src="../img/logo/logo_grey.png" alt=""></a>
   


          {{--  Search field and toggler - start  --}}
          <button class="btn my-2 my-sm-0 icons navbar-toggler" type="button" data-toggle="collapse" data-target="#collapseSearchField" aria-expanded="false" aria-controls="collapseSearchField" id="dropdown-search">
            s
          </button>

        <div class="collapse" id="collapseSearchField">
          <div class="card card-body dropdown-search">
              <form class="form-inline mt-2 mt-md-0">
                  
                <input class="form-control mr-sm-2" type="text" placeholder="Sök..." aria-label="Search">
                <button class="btn my-2 my-sm-0 icons" type="submit">n</button>

              </form>          
            </div>
        </div>
        {{--  Search field and toggler - end   --}}

    
      <button class="navbar-toggler icons" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        m{{--  <span class="navbar-toggler-icon"></span>  --}}
      </button>
    
    <div class="collapse navbar-collapse justify-content-md-center" id="navbarCollapse">
      <ul class="navbar-nav mr-auto">

          <div class="dropdown-divider"></div>
          @auth
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="{{ url('/home') }}" id="dropdown-mypages" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">MINA SIDOR</a>
                  <div class="dropdown-menu" aria-labelledby="dropdown-mypages">
                      <a class="dropdown-item" href="#">Mina sidor</a>
                      <a class="dropdown-item" href="#">Mina annonser</a>
                      <a class="dropdown-item" href="#">Skapa en annons</a>
                      <a class="dropdown-item" href="#">Mina ordrar</a>
                      <a class="dropdown-item" href="{{ route('logout') }}"
                      onclick="event.preventDefault();
                               document.getElementById('logout-form').submit();">Logga ut {{ Auth::user()->fname }}</a>
                               <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                  {{ csrf_field() }}
                              </form>
                    </div>

                
                </li>
            @else
            <li class="nav-item">
                <a class="nav-link" href="{{ route('login') }}">LOGGA IN</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('register') }}">REGISTRERA DIG</a>
            </li>
            @endauth

          
        <div class="dropdown-divider"></div>
        <li class="nav-item">
              <a class="nav-link" href="#">KUNDVAGN</a>
          </li>

          <div class="dropdown-divider"></div>

        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="dropdown10" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">KATEGORIER</a>
            <div class="dropdown-menu" aria-labelledby="dropdown10">
              <a class="dropdown-item" href="#">Kläder & Accessoarer</a>
              <a class="dropdown-item" href="#">Hem & Design</a>
              <a class="dropdown-item" href="#">Hobbysaker</a>
              <a class="dropdown-item" href="#">Elektronik</a>
            </div>
          </li>

          <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="/charities" id="dropdown10" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">VÄLGÖRENHET</a>
              <div class="dropdown-menu" aria-labelledby="dropdown10">
                <a class="dropdown-item" href="/charities/1">Miljö & Natur</a>
                <a class="dropdown-item" href="/charities/3">Barn & Unga</a>
                <a class="dropdown-item" href="/charities/5">Forskning</a>
                <a class="dropdown-item" href="/charities/2">Mänskliga rättigheter</a>
                <a class="dropdown-item" href="/charities/4">Djur</a>
                <a class="dropdown-item" href="/charities/6">Vård & Hälsa</a>
              </div>
            </li>

        <li class="nav-item">
            <a class="nav-link" href="#">KONTAKT<span class="sr-only">(current)</span></a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="#">SÅ FUNKAR DET<span class="sr-only">(current)</span></a>
        </li>

      </ul>
      
    </div>
  </nav>
{{--  Navbar first - end  --}}
