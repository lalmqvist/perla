@extends('layouts.master')
<link rel="stylesheet" href="/css/my-pages.css">
@section('title', 'Ny annons')
@section('content')
<div class="container">
<ul class="nav nav-tabs">
        <li class="nav-item">
          <a class="nav-link" href="/home">Hem</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/mypages/contacts">Mina uppgifter</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/mypages/orders">Mina ordrar</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/mypages/ads">Mina annonser</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/mypages/wishlist">Mina favoriter</a>
        </li>
        <li class="nav-item">
            <a class="nav-link active" href="/mypages/newad">Skapa ny annons</a>
        </li>
</ul>
<div class="row justify-content-center">
        <div class="col-md-8">    
            

<br><h3 class="text-center">Skapa ny annons</h3>

                <form method="POST" action="/mypages/newad" enctype="multipart/form-data">
                    {{ csrf_field() }}
{{--  INPUT FÖR Titel  --}}
                <div class="form-row">
                    <div class="form-group{{ $errors->has('title') ? ' has-error' : '' }} col-md-6">
                        <label for="title" class="control-label">Titel</label>

                        
                            <input id="title" type="text" class="form-control" name="title" value="" required autofocus>

                            @if ($errors->has('title'))
                                <span class="help-block">
                                        <div class="alert alert-danger" role="alert">
                                                {{ $errors->first('title') }}
                                              </div>
                                </span>
                            @endif
                        </div>
                    
                    
                    {{--  INPUT FÖR PRIS  --}}
                    <div class="form-group{{ $errors->has('price') ? ' has-error' : '' }} col-md-3">
                            <label for="price" class="control-label">Pris</label>

                            
                                <input id="price" type="text" class="form-control" name="price" value="" required>

                                @if ($errors->has('price'))
                                    <span class="help-block">
                                            <div class="alert alert-danger" role="alert">
                                                    {{ $errors->first('price') }}
                                                </div>
                                    </span>
                                @endif
                            </div>
{{--  INPUT FÖR TYPE  --}}
                    <div class="form-group{{ $errors->has('type') ? ' has-error' : '' }} col-md-3">
                            <label for="type" class="control-label">Produkttyp</label>
                             
                                <input id="type" type="text" class="form-control" name="type" value="" required>
                                 @if ($errors->has('type'))
                                    <span class="help-block">
                                            <div class="alert alert-danger" role="alert">
                                                    {{ $errors->first('type') }}
                                                </div>
                                    </span>
                                @endif
                            </div>
                        </div>
                    <div class="form-row">
                        <div class="form-group col-md-3">
                                <label for="brand">Märke</label>
                                <input id="brand" type="text" class="form-control" name="brand">
                                 @if ($errors->has('brand'))
                                    <span class="help-block">
                                            <div class="alert alert-danger" role="alert">
                                                    {{ $errors->first('brand') }}
                                                </div>
                                    </span>
                                @endif
                              </div>
                              <div class="form-group col-md-3">
                                    <label for="inputCondition">Skick</label>
                                    <select name="condition" id="inputCondition" class="form-control">
                                      <option selected>Välj...</option>
                                      <option>Nytt</option>
                                      <option>Fint</option>
                                      <option>Normalt</option>
                                      <option>Slitet</option>
                                    </select>
                                    @if ($errors->has('condition'))
                                    <span class="help-block">
                                            <div class="alert alert-danger" role="alert">
                                                    {{ $errors->first('condition') }}
                                                </div>
                                    </span>
                                @endif
                                  </div>

                                  <div class="form-group col-md-2">
                                        <label for="inputSize">Storlek</label>
                                        <select name="size" id="inputSize" class="form-control">
                                          <option selected>Välj...</option>
                                          <option value='{{ null }}'>Visa ej...</option>
                                          <option>XS</option>
                                          <option>S</option>
                                          <option>M</option>
                                          <option>L</option>
                                          <option>XL</option>
                                        </select>
                                        @if ($errors->has('size'))
                                    <span class="help-block">
                                            <div class="alert alert-danger" role="alert">
                                                    {{ $errors->first('size') }}
                                                </div>
                                    </span>
                                @endif
                                      </div>
                                      
                                      <div class="form-group col-md-2">
                                            <label for="inputColor">Färg</label>
                                            <select name="color" id="inputColor" class="form-control">
                                              <option selected>Välj...</option>
                                              <option value='{{ null }}'>Visa ej...</option>
                                              <option>Vit</option>
                                              <option>Svart</option>
                                              <option>Orange</option>
                                              <option>Lila</option>
                                              <option>Rosa</option>
                                              <option>Grön</option>
                                            </select>
                                            @if ($errors->has('color'))
                                    <span class="help-block">
                                            <div class="alert alert-danger" role="alert">
                                                    {{ $errors->first('color') }}
                                                </div>
                                    </span>
                                @endif
                                          </div>
                                          
                                          <div class="form-group col-md-2">
                                                <label for="inputMaterial">Material</label>
                                                <select name="material" id="inputMaterial" class="form-control">
                                                  <option selected>Välj...</option>
                                                  <option value='{{ null }}'>Visa ej...</option>
                                                  <option>Skinn</option>
                                                  <option>Ull</option>
                                                  <option>Bomull</option>
                                                  <option>Koppar</option>
                                                  <option>Mässing</option>
                                                  <option>Guld</option>
                                                  <option>Trä</option>
                                                </select>
                                                @if ($errors->has('material'))
                                                    <span class="help-block">
                                                        <div class="alert alert-danger" role="alert">
                                                            {{ $errors->first('material') }}
                                                        </div>
                                                    </span>
                                                @endif
                                              </div>
                    </div>
                    
                    {{--  INPUT FÖR OTHER --}}
                    <div class="form-row">
                    <div class="form-group{{ $errors->has('other') ? ' has-error' : '' }} col-md-6">
                            <label for="other" class="control-label">Övrig information</label>

                                <input id="Other" type="text" class="form-control" name="other" value="">

                                @if ($errors->has('other'))
                                    <span class="help-block">
                                        <div class="alert alert-danger" role="alert">
                                            {{ $errors->first('other') }}
                                        </div>
                                    </span>
                                @endif
                            </div>
                        
                    {{--  INPUT FÖR thumb  --}}
                    <div class="form-group{{ $errors->has('thumb') ? ' has-error' : '' }} col-md-6">
                            <label for="thumb" class="control-label">Bild 1 - förhandsvisning</label>

                            
                                <input id="thumb" type="file" class="form-control" name="thumb" value="" required>

                                @if ($errors->has('thumb'))
                                    <span class="help-block">
                                            <div class="alert alert-danger" role="alert">
                                                    {{ $errors->first('thumb') }}
                                                </div>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group{{ $errors->has('img3') ? ' has-error' : '' }} col-md-6">
                                    <label for="img3" class="control-label">Bild 2</label>
                                             
                                        <input id="img3" type="file" class="form-control" name="img3" required>
                                                 @if ($errors->has('img3'))
                                            <span class="help-block">
                                                    <div class="alert alert-danger" role="alert">
                                                            {{ $errors->first('img3') }}
                                                        </div>
                                            </span>
                                        @endif
                                    </div>
                                
                                <div class="form-group{{ $errors->has('img2') ? ' has-error' : '' }} col-md-6">
                                        <label for="img2" class="control-label">Bild 3</label>
            
                                        
                                            <input id="img2" type="file" class="form-control" name="img2" required>
            
                                            @if ($errors->has('img2'))
                                                <span class="help-block">
                                                        <div class="alert alert-danger" role="alert">
                                                                {{ $errors->first('img2') }}
                                                            </div>
                                                </span>
                                            @endif
                                        </div>
                                    </div>

                        <div class="form-row">
                                <div class="form-group col-md-6">
                                        <label for="inputCharity">Välgörenhetsorganisation</label>
                                        <select id="inputCharity" name="charity" class="form-control">
                                          <option selected>Välj...</option>
                                          @foreach ($charities as $charity)
                                          <option value="{{$charity->id}}">{{$charity->name}}</option>
                                          @endforeach
                                       
                                        </select>
                                        @if ($errors->has('charity'))
                                            <span class="help-block">
                                                <div class="alert alert-danger" role="alert">
                                                    {{ $errors->first('charity') }}
                                                </div>
                                            </span>
                                        @endif
                                      </div>
                                
                                    <div class="form-group col-md-6">
                                      <label for="inputCharitySum">Summa gåva</label>
                                      <select id="inputCharitySum" name="charitySum" class="form-control">
                                        <option selected value="10">10 %</option>
                                        <option value="20">20 %</option>
                                        <option value="30">30 %</option>
                                        <option value="40">40 %</option>
                                        <option value="50">50 %</option>
                                        <option value="60">60 %</option>
                                        <option value="70">70 %</option>
                                        <option value="80">80 %</option>
                                        <option value="90">90 %</option>
                                        <option value="100">100 %</option>
                                        
                                     
                                      </select>
                                    </div>
                        </div>
                        <div class="btn-group btn-group-toggle" data-toggle="buttons" id="cat-buttons">
                                
                            @foreach ($categories as $category)
                            <label class="btn btn-secondary">
                                  <input type="checkbox" name="category[{{$category->id}}]" id="cat_{{$category->id}}" autocomplete="off"> {{$category->name}}
                                </label>
                            @endforeach   
                        
                              </div>
                              @if ($errors->has('category'))
                                            <span class="help-block">
                                                <div class="alert alert-danger" role="alert">
                                                    {{ $errors->first('category') }}
                                                </div>
                                            </span>
                                        @endif
                        
                {{--  </div>  --}}
                <div class="row align-items-center">
                        <div class="col-md-3"></div>
                        <div class="col-md-6">
                            <button type="submit" class="btn btn-primary btn-lg btn-block btn-cart">
                                Publicera annons
                            </button>
                        </div>
                        <div class="col-md-3"></div>
                    </div>
    
    </form>
                </div>
                </div>

</div>               

@endsection