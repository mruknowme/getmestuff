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

Auth::routes();
Route::get('/register/confirm/{token}', 'Auth\RegisterController@confirmEmail');
Route::get('/register/{ref}', 'Auth\RegisterController@showRegistrationFormWithRef');

Route::get('/home', 'HomeController@index');
Route::patch('/home/update', 'UserSettingsController@update');
Route::post('/home/achievements', 'HomeController@prizes');
Route::get('/home/confirm/{token}', 'UserSettingsController@verify');

Route::post('/topup', 'PurchasesController@store');
Route::get('/braintree/token', 'PurchasesController@token');

Route::get('/wishes', 'WishesController@index');
Route::post('/wishes/refresh', 'WishesController@show');
Route::post('/wishes', 'WishesController@store')->middleware('donated');
Route::patch('/wish/{wish}/donate', 'WishesController@update');
Route::patch('/wish/{wish}/report', 'WishesController@report');

Route::get('/notifications', 'NotificationsController@index');

Route::get('/test', 'HomeController@test');