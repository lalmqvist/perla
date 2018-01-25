<link rel="stylesheet" href="/css/navbar.css">

{{--  Navbar second - start  --}}
  <nav class="navbar navbar-expand-lg navbar-light bg-light rounded" id="navbar-second">

      <div class="collapse navbar-collapse justify-content-md-center" id="navbarsExample10">
        <ul class="navbar-nav">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="/ads" id="dropdown10" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">KATEGORIER</a>
                <div class="dropdown-menu" aria-labelledby="dropdown10">
                  <a class="dropdown-item" href="/ads">Alla Kategorier</a>
                  <a class="dropdown-item" href="/categories/1">Kläder & Accessoarer</a>
                  <a class="dropdown-item" href="/categories/2">Hem & Design</a>
                  <a class="dropdown-item" href="/categories/3">Hobbysaker</a>
                  <a class="dropdown-item" href="/categories/4">Elektronik</a>
                </div>
              </li>

            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="/ads" id="dropdown10" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">VÄLGÖRENHET</a>
                <div class="dropdown-menu" aria-labelledby="dropdown10">
                  <a class="dropdown-item" href="/ads">Alla</a>
                  <a class="dropdown-item" href="/charities/1">Miljö & Natur</a>
                <a class="dropdown-item" href="/charities/3">Barn & Unga</a>
                <a class="dropdown-item" href="/charities/5">Forskning</a>
                <a class="dropdown-item" href="/charities/2">Mänskliga rättigheter</a>
                <a class="dropdown-item" href="/charities/4">Djur</a>
                <a class="dropdown-item" href="/charities/6">Vård & Hälsa</a>
                </div>
            </li>

                @auth
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="{{ url('/home') }}" id="dropdown-mypages" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">MINA SIDOR</a>
                  <div class="dropdown-menu" aria-labelledby="dropdown-mypages">
                      <a class="dropdown-item" href="/home">Mina sidor</a>
                      <a class="dropdown-item" href="/mypages/ads">Mina annonser</a>
                      <a class="dropdown-item" href="/mypages/newad">Skapa en annons</a>
                      <a class="dropdown-item" href="/mypages/orders">Mina ordrar</a>
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
{{--  
            @guest
                            <li><a href="{{ route('login') }}">Login</a></li>
                            <li><a href="{{ route('register') }}">Register</a></li>
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">
                                    {{ Auth::user()->fname }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endguest  --}}
                
            

        </ul>
      </div>
    </nav>
    {{--  Navbar second - end  --}}