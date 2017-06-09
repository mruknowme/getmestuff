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
    return view('index');
})->middleware('guest');

Route::get('/about', function () {
    return view('about');
})->middleware('guest');

Route::get('/home', 'HomeController@index');
Route::patch('/home/update', 'UserSettingsController@update');
Route::get('/home/confirm/{token}', 'UserSettingsController@verify');

Route::post('/topup', 'PurchasesController@store');

Route::get('/wishes', 'WishesController@index');
Route::post('/wishes/refresh', 'WishesController@show');
Route::post('/wishes', 'WishesController@store');
Route::patch('/wish/{wish}/donate', 'WishesController@update');

Auth::routes();
Route::get('/register/confirm/{token}', 'Auth\RegisterController@confirmEmail');