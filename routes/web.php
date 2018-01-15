<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    
    
    

    
    return view('welcome', compact('tasks'));
});

Route::get('/users', function () {
    
    $users = App\User::all();
    

    
    return view('users', compact('users'));
});

Route::get('/ads', 'AdsController@index');
Route::get('/ads/{category}', 'AdsController@showCategory');
Route::get('/ads/{ad}', 'AdsController@show');

Route::get('/charities', 'CharitiesController@index');
Route::get('/charities/{field}', 'CharitiesController@showField');
Route::get('/charities/{field}/ads', 'CharitiesController@showAdsInField');
Route::get('/charities/{charities}', 'CharitiesController@showCharity');