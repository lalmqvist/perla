@extends('layouts.master')
<link rel="stylesheet" href="/css/my-pages.css">
@section('content')
<div class="container">
<ul class="nav nav-tabs">
        <li class="nav-item">
          <a class="nav-link" href="/home">Hem</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="/mypages/contacts">Mina uppgifter</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/mypages/orders">Mina ordrar</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/mypages/ads">Mina annonser</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/mypages/newad">Skapa ny annons</a>
        </li>
</ul>
<div class="row justify-content-center">
        <div class="col-md-8">    
            

<br><h3 class="text-center">Mina kontaktuppgifter</h3>

                <form method="POST" action="/mypages/contacts">
                    {{ csrf_field() }}
{{--  INPUT FÖR FÖRNAMN  --}}
                <div class="form-row">
                    <div class="form-group{{ $errors->has('fname') ? ' has-error' : '' }} col-md-6">
                        <label for="fname" class="control-label">Förnamn</label>

                        
                            <input id="fname" type="text" class="form-control" name="fname" value="{{ Auth::user()->fname }}" required autofocus>

                            @if ($errors->has('fname'))
                                <span class="help-block">
                                        <div class="alert alert-danger" role="alert">
                                                {{ $errors->first('fname') }}
                                              </div>
                                </span>
                            @endif
                        </div>
                    
                    
                    {{--  INPUT FÖR EFTERNAMN  --}}
                    <div class="form-group{{ $errors->has('lname') ? ' has-error' : '' }} col-md-6">
                            <label for="lname" class="control-label">Efternamn</label>

                            
                                <input id="lname" type="text" class="form-control" name="lname" value="{{ Auth::user()->lname }}" required>

                                @if ($errors->has('lname'))
                                    <span class="help-block">
                                            <div class="alert alert-danger" role="alert">
                                                    {{ $errors->first('lname') }}
                                                </div>
                                    </span>
                                @endif
                            </div>
                        </div>
                    
                    {{--  INPUT FÖR EPOST  --}}
                    <div class="form-row">
                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }} col-md-8">
                            <label for="email" class="control-label">E-post</label>

                                <input id="email" type="email" class="form-control" name="email" value="{{ Auth::user()->email }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <div class="alert alert-danger" role="alert">
                                            {{ $errors->first('email') }}
                                        </div>
                                    </span>
                                @endif
                            </div>
                        
                    {{--  INPUT FÖR TELFONNUMMER  --}}
                    <div class="form-group{{ $errors->has('phone') ? ' has-error' : '' }} col-md-4">
                            <label for="phone" class="control-label">Telefon</label>

                            
                                <input id="phone" type="number" class="form-control" name="phone" value="{{ Auth::user()->phone }}" required>

                                @if ($errors->has('phone'))
                                    <span class="help-block">
                                            <div class="alert alert-danger" role="alert">
                                                    {{ $errors->first('phone') }}
                                                </div>
                                    </span>
                                @endif
                            </div>
                        </div>
                    {{--  INPUT FÖR STREET1  --}}
                    <div class="form-row">
                    <div class="form-group{{ $errors->has('street1') ? ' has-error' : '' }} col-md-12">
                            <label for="street1" class="control-label">Gatuadress</label>

                            
                                <input id="street1" type="text" class="form-control" name="street1" value="{{ Auth::user()->street1 }}" required>

                                @if ($errors->has('street1'))
                                    <span class="help-block">
                                            <div class="alert alert-danger" role="alert">
                                                    {{ $errors->first('street1') }}
                                                </div>
                                    </span>
                                @endif
                            </div>
                            </div>
                        
                    {{--  INPUT FÖR STREET2  --}}
                    <div class="form-row">
                    <div class="form-group{{ $errors->has('street2') ? ' has-error' : '' }} col-md-5">
                            <label for="street2" class="control-label">C/o-adress</label>

                            
                                <input id="street2" type="text" class="form-control" name="street2" value="{{ Auth::user()->street2 }}">

                                @if ($errors->has('street2'))
                                    <span class="help-block">
                                            <div class="alert alert-danger" role="alert">
                                                    {{ $errors->first('street2') }}
                                                </div>
                                    </span>
                                @endif
                            </div>
                        
                    {{--  INPUT FÖR ZIP  --}}
                    
                    <div class="form-group{{ $errors->has('zip') ? ' has-error' : '' }} col-md-3">
                            <label for="zip" class="control-label">Postnummer</label>

                            
                                <input id="zip" type="number" class="form-control" name="zip" value="{{ Auth::user()->zip }}" required>

                                @if ($errors->has('zip'))
                                    <span class="help-block">
                                            <div class="alert alert-danger" role="alert">
                                                    {{ $errors->first('zip') }}
                                                </div>
                                    </span>
                                @endif
                            </div>
                        
                    {{--  INPUT FÖR CITY  --}}
                    <div class="form-group{{ $errors->has('city') ? ' has-error' : '' }} col-md-4">
                            <label for="city" class="control-label">Stad</label>

                            
                                <input id="city" type="text" class="form-control" name="city" value="{{ Auth::user()->city }}" required>

                                @if ($errors->has('city'))
                                    <span class="help-block">
                                            <div class="alert alert-danger" role="alert">
                                                    {{ $errors->first('city') }}
                                                </div>
                                    </span>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row align-items-center">
                        <div class="col-md-3"></div>
                        <div class="col-md-6">
                            <button type="submit" class="btn btn-primary btn-lg btn-block btn-cart">
                                Spara ändringar
                            </button>
                        </div>
                        <div class="col-md-3"></div>
                    </div>
                        </div>

                </form>
</div>
@endsection