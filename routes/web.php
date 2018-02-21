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

Route::post('/showSearch', 'AdsController@showSearch');
Route::get('/showSearch/{phrase}', 'AdsController@showSearchWord');

Route::get('/categories/{categories}', 'CategoriesController@show');

Route::get('/charities', 'CharitiesController@index');
Route::get('/charities/{field}', 'CharitiesController@showField');
Route::get('/charities/ads/{charities}', 'CharitiesController@showAdsInCharity');
// Route::get('/charities/charity/{charities}', 'CharitiesController@showCharity');

Route::get('/categories/{categories}', 'CategoriesController@show');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/cart', 'CartController@showCart');
Route::get('/addtocart/{ad}', 'CartController@addToCart');
Route::get('/removefromcart/{item}', 'CartController@removeFromCart');
Route::get('/emptycart', 'CartController@emptyCart');

//Sparar en order
Route::post('/order', 'OrderController@store');

//My pages - Kontakt
// Visar formulär med kontaktuppgifter
Route::get('/mypages/contacts', 'UserController@edit')->middleware('auth');
//Sparar ändringar gjorda i kontakten
Route::post('/mypages/contacts', 'UserController@update')->middleware('auth');

//My pages - annonser
//Visar en users annonser
Route::get('/mypages/ads', 'AdsController@showUser')->middleware('auth');
//Visar formulär för att uppdatera annons
Route::get('/mypages/ads/{ad}', 'AdsController@edit')->middleware('auth');
//Sparar ändringar gjorda i annons
Route::post('/mypages/ads/{ad}', 'AdsController@update')->middleware('auth');

//My pages - skapa ny annons
Route::get('/mypages/newad', 'AdsController@create')->middleware('auth');
Route::post('/mypages/newad', 'AdsController@store')->middleware('auth');

// My pages - visa ordrar
Route::get('/mypages/orders', 'OrderController@index')->middleware('auth');

Route::get('/mypages/wishlist', 'WishlistController@index')->middleware('auth');


