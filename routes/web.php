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
    
    
    $latestAds = App\Ad::latest()->limit(8)->get();

    
    return view('welcome', compact('latestAds'));
});

Route::get('/users', function () {
    
    $users = App\User::all();
    

    
    return view('users', compact('users'));
});

Route::get('/ads', 'AdsController@index');
Route::get('/ads/{ad}', 'AdsController@show');

Route::get('/categories/{categories}', 'CategoriesController@show');

Route::get('/charities', 'CharitiesController@index');
Route::get('/charities/{field}', 'CharitiesController@showField');
Route::get('/charities/{field}/ads', 'CharitiesController@showAdsInField');
Route::get('/charities/charity/{charities}', 'CharitiesController@showCharity');

Route::get('/categories/{categories}', 'CategoriesController@show');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/cart', 'CartController@showCart');
Route::get('/addtocart/{ad}', 'CartController@addToCart');
Route::get('/removefromcart/{item}', 'CartController@removeFromCart');
Route::get('/emptycart', 'CartController@emptyCart');

