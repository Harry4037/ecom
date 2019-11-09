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



Route::get('/test', 'TestController@test');

Route::namespace("Site")->group(function() {
    Route::get('/', 'LoginController@showLoginForm')->name('site.user.login');
    Route::get('/login', 'LoginController@showLoginForm')->name('site.user.login');
    Route::post('/login', 'LoginController@login')->name('site.user.login');
    Route::get('/logout', 'LoginController@logout')->name('site.user.logout');
    Route::get('/', 'HomeController@index')->name('site.index');
    Route::post('/user-register', 'UserController@register')->name('site.user.register');
    Route::post('/verify-otp', 'UserController@verifyOTP')->name('site.user.verify-otp');
    Route::post('/forget-link', 'UserController@sendForgetPasswordLink')->name('site.user.forget-link');
    Route::match(['post', 'get'], '/reset-password/{passcode}', 'UserController@resetPassword')->name('site.user.reset-password');
});


Route::namespace("Admin")->prefix('admin')->group(function() {
    Route::get('/', 'LoginController@showLoginForm')->name('admin.login');
    Route::get('/login', 'LoginController@showLoginForm')->name('admin.login');
    Route::post('/login', 'LoginController@login')->name('admin.login');
    Route::get('/logout', 'LoginController@logout')->name('admin.logout');
    Route::post('password/email', 'ForgetController@sendResetLinkEmail')->name('admin.password.email');
    Route::post('password/reset', 'ResetPasswordController@resetPassword')->name('password.reset');
});

Route::namespace("Admin")->prefix('admin')->middleware(['auth'])->group(function() {
//Route::namespace("Admin")->prefix('admin')->middleware(['auth', 'role:ADMIN'])->group(function() {
    Route::match(['get', 'post'], '/test', 'LoginController@test')->name('admin.test');
    Route::match(['get', 'post'], '/default-resort', 'DashboardController@defaultResort')->name('admin.resort-list');
    Route::match(['get', 'post'], '/profile', 'LoginController@profile')->name('admin.profile');
    Route::match(['get', 'post'], '/change-password', 'LoginController@changePassword')->name('admin.change-password');

    Route::get('/dashboard', 'DashboardController@index')->name('admin.dashboard');

    Route::prefix('user')->group(function() {
        Route::get('/index', 'UserController@userIndex')->name('admin.user.index');
        Route::get('/users-list', 'UserController@usersList')->name('admin.user.list');
        Route::post('/user-delete', 'UserController@userDelete')->name('admin.user.delete');
    });
});
