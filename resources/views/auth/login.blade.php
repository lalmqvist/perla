@extends('layouts.master')
<link rel="stylesheet" href="/css/register-login.css">
@section('content')

<div class="form-row">
	<div class="col-md-3"></div>
	<div class="col-md-6 form-cont col-md-offset-2">
		<div class="panel panel-default"></div>
		<div class="panel-heading"><h2>Logga in</h2></div>
		<p>eller <a class="" href="{{ route('register') }}">Registera ett nytt Perla-konto</a></p>
	</div>
	<div class="col-md-3"></div>
</div>

<div class="panel-body">
	<form class="form-horizontal" method="POST" action="{{ route('login') }}">
		{{ csrf_field() }}
		
		<div class="form-row">
			<div class="col-md-3"></div>
			<div class="form-group{{ $errors->has('email') ? ' has-error' : '' }} col-md-6">
				<label for="email" class="control-label">E-postadress</label>
				<input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>
				
				@if ($errors->has('email'))
					<span class="help-block">
						<strong>{{ $errors->first('email') }}</strong>
					</span>
				@endif
			</div>
			<div class="col-md-3"></div>
		</div>
		
		<div class="form-row">
			<div class="col-md-3"></div>
			<div class="form-group{{ $errors->has('password') ? ' has-error' : '' }} col-md-6">
				<label for="password" class="control-label">Lösenord</label>
				<input id="password" type="password" class="form-control" name="password" required>
				
				@if ($errors->has('password'))
					<span class="help-block">
						<strong>{{ $errors->first('password') }}</strong>
					</span>
				@endif
			</div>
			<div class="col-md-3"></div>
		</div>

		<div class="form-row">
			<div class="col-md-3"></div>
			<div class="form-group col-md-6">
				<div class="checkbox">
					<label>
						<input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Kom ihåg mig
					</label>
				</div>
			</div>
			<div class="col-md-3"></div>
		</div>

		<div class="form-row">
			<div class="col-md-3"></div>
			<div class="form-group col-md-6 ">
				<div class="form-button-login col-md-offset-4">
					<button type="submit" class="btn btn-primary btn-lg btn-block">Logga in</button>
					
					<a class="btn btn-link" href="{{ route('password.request') }}">Glömt lösenordet?</a>
				</div>
			</div>
			<div class="col-md-3"></div>
		</div>
	</form>
</div>

@endsection
