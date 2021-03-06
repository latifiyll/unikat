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




Route::get('/','ChartsController@getCharts');
// Route::get('/index','ChartsController@getBuyersBySum');

Route::resource('products', 'ProductsController');
Route::resource('buyers', 'BuyersController');
Route::resource('suppliers', 'SuppliersController');
Route::resource('users','UsersController');

Route::get('cart','CartController@cart');
Route::get('add-to-cart/{id}', 'CartController@addToCart');

Route::patch('update-cart','CartController@updateCart');
Route::delete('remove-from-cart','CartController@remove');

Route::post('save-buyer-products','CartController@store');

Route::get('sales','SalesController@index');
Route::get('sales/{id}','SalesController@show');

Route::put('settings/categories/{id}','CategoriesController@update');
Route::resource('settings/categories','CategoriesController');

Route::put('settings/types/{id}','TypesController@update');
Route::resource('settings/types','TypesController');

//General Settings
Route::resource('/settings/general','GeneralSettingsController');


Auth::routes([
    'register' => false
]);

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
