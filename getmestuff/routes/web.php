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

Route::namespace('Auth')->group(function () {
    $this->get('login', 'LoginController@showLoginForm');
    $this->post('login', 'LoginController@login')->name('login');
    $this->post('logout', 'LoginController@logout')->name('logout');

    $this->get('register', 'RegisterController@showRegistrationForm');
    $this->post('register', 'RegisterController@register')->name('register');

    $this->get('/register/confirm/{token}', 'RegisterController@confirmEmail');
    $this->get('/register/{ref}', 'RegisterController@showRegistrationFormWithRef');

    $this->post('password/email', 'ForgotPasswordController@sendResetLinkEmail')->name('password.email');
    $this->get('password/reset/{token}', 'ResetPasswordController@showResetForm')->name('password.reset');
    $this->post('password/reset', 'ResetPasswordController@reset')->name('password.reset.post');
});

Route::namespace('Admin\Auth')->prefix('admin')->group(function () {
    $this->get('/abc', 'LoginController@showLoginForm');

    $this->post('/login', 'LoginController@login');
    $this->post('/logout', 'LoginController@logout');

    $this->post('/password/email', 'ForgotPasswordController@sendResetLinkEmail');

    $this->get('password/reset/{token}','ResetPasswordController@showResetForm')->name('password.reset.admin');
    $this->post('password/reset', 'ResetPasswordController@reset');
});

Route::get('/home', 'HomeController@index');
Route::get('/home/confirm/{token}', 'UserSettingsController@verify');

Route::get('/wishes', 'WishesController@index');

Route::get('/notifications', function () {
    auth()->user()->unreadNotifications->markAsRead();

    return view('notifications');
})->middleware('auth');

Route::middleware(['auth', 'ajax'])->group(function () {
    Route::patch('/home/update', 'UserSettingsController@update');
    Route::post('/home/achievements', 'HomeController@prizes');

    Route::post('/topup', 'PurchasesController@store');
    Route::get('/braintree/token', 'PurchasesController@token');

    Route::post('/wishes/refresh', 'WishesController@show');
    Route::post('/wishes', 'WishesController@store')->middleware('donated');
    Route::patch('/wish/{wish}/donate', 'WishesController@update');
    Route::patch('/wish/{wish}/report', 'WishesController@report');

    Route::get('/unread', 'NotificationsController@show');
    Route::get('/donations', 'NotificationsController@index');
    Route::get('/payments', 'PurchasesController@index');
});

Route::middleware(['auth', 'admin'])->namespace('Admin')->prefix('admin')->group(function () {
    Route::get('/dashboard', 'AdminsController@index');
    Route::get('/settings', 'AdminsController@settings');
    Route::get('/payment', 'AdminsController@payment');

    Route::get('/wishes', 'WishesController@all');
    Route::get('/wishes/reported', 'WishesController@reported');
    Route::get('/wishes/settings', 'WishesController@settings');

    Route::get('/users', 'UsersController@all');
    Route::get('/users/active', 'UsersController@active');
    Route::get('/users/settings', 'UsersController@settings');

    Route::get('/achievements', 'AchievementsController@all');
    Route::get('/achievements/new', 'AchievementsController@new');
    Route::get('/achievements/settings', 'AchievementsController@settings');

    Route::get('/tickets', 'TicketsController@all');
    Route::get('/tickets/open', 'TicketsController@open');
    Route::get('/tickets/create', 'TicketsController@create');
});