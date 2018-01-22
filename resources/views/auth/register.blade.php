@extends('layouts.master')
<link rel="stylesheet" href="/css/register-login.css">
@section('content')
        <div class="col-md-12 form-cont col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"><h2>Registrera ett Perla-konto</h2></div>

                <div class="panel-body">
                    <form method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}
{{--  INPUT FÖR FÖRNAMN  --}}
                    <div class="form-row">
                        <div class="form-group{{ $errors->has('fname') ? ' has-error' : '' }} col-md-6">
                            <label for="fname" class="control-label">Förnamn</label>

                            
                                <input id="fname" type="text" class="form-control" name="fname" value="{{ old('fname') }}" required autofocus>

                                @if ($errors->has('fname'))
                                    <span class="help-block">
                                            <div class="alert alert-danger" role="alert">
                                                    {{ $errors->first('fname') }}
                                                  </div>
                                                  <div class="alert alert-danger" role="alert">
                                                        {{ $errors->first('fname') }}
                                                    </div>
                                    </span>
                                @endif
                            </div>
                        
                        
                        {{--  INPUT FÖR EFTERNAMN  --}}
                        <div class="form-group{{ $errors->has('lname') ? ' has-error' : '' }} col-md-6">
                                <label for="lname" class="control-label">Efternamn</label>
    
                                
                                    <input id="lname" type="text" class="form-control" name="lname" value="{{ old('lname') }}" required>
    
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
    
                                    <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>
    
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
    
                                
                                    <input id="phone" type="number" class="form-control" name="phone" value="{{ old('phone') }}" required>
    
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
    
                                
                                    <input id="street1" type="text" class="form-control" name="street1" value="{{ old('street1') }}" required>
    
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
    
                                
                                    <input id="street2" type="text" class="form-control" name="street2" value="{{ old('street2') }}">
    
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
    
                                
                                    <input id="zip" type="number" class="form-control" name="zip" value="{{ old('zip') }}" required>
    
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
    
                                
                                    <input id="city" type="text" class="form-control" name="city" value="{{ old('city') }}" required>
    
                                    @if ($errors->has('city'))
                                        <span class="help-block">
                                                <div class="alert alert-danger" role="alert">
                                                        {{ $errors->first('city') }}
                                                    </div>
                                        </span>
                                    @endif
                                </div>
                            </div>
                        
                        
                            {{--  INPUT FÖR PASSWORD  --}}
                    <div class="form-row">
                        
                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }} col-md-6">
                            <label for="password" class="control-label">Lösenord</label>

                            
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                            <div class="alert alert-danger" role="alert">
                                                    {{ $errors->first('password') }}
                                                </div>
                                    </span>
                                @endif
                            </div>
                        

                        <div class="form-group col-md-6">
                            <label for="password-confirm" class="control-label">Bekräfta lösenord</label>

                            
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 form-button col-md-offset-4">
                                <button type="submit" class="btn btn-primary btn-lg btn-block">
                                    Skapa konto
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

@endsection
