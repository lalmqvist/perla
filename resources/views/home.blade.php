@extends('layouts.master')
<link rel="stylesheet" href="/css/my-pages.css">
@section('content')
<ul class="nav nav-tabs">
        <li class="nav-item">
          <a class="nav-link active" href="#">Hem</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Mina uppgifter</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Mina ordrar</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Mina annonser</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Skapa ny annons</a>
        </li>
        
      </ul>
<div class="container">
        
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"><h2>Mina sidor</h2></div>

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
<!-- Three columns of text below the carousel -->
<div class="marketing">
<div class="row">
        <div class="col-lg-3">
          <img class="rounded-circle" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image">
          <h5>Kontaktuppgifter</h5>
          {{--  <p><a class="btn btn-secondary" href="#" role="button">Ändra &raquo;</a></p>  --}}
        </div><!-- /.col-lg-4 -->
        
        <div class="col-lg-3">
          <img class="rounded-circle" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image">
          <h5>Annonser</h5>
          {{--  <p><a class="btn btn-secondary" href="#" role="button">Visa &raquo;</a></p>  --}}
        </div><!-- /.col-lg-4 -->
        
        <div class="col-lg-3">
          <img class="rounded-circle" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image">
          <h5>Ordrar</h5>
          {{--  <p><a class="btn btn-secondary" href="#" role="button">Visa &raquo;</a></p>  --}}
        </div><!-- /.col-lg-4 -->

        <div class="col-lg-3">
                <img class="rounded-circle" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image">
                <h5>Skapa annons</h5>
                {{--  <p><a class="btn btn-secondary" href="#" role="button">Skapa &raquo;</a></p>  --}}
              </div><!-- /.col-lg-4 -->

      </div><!-- /.row -->
</div>
                    
                {{--  </div>
            </div>
        </div>  --}}
    {{--  </div>  --}}
</div>
@endsection
