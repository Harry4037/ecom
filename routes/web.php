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
    return view('welcome');
});
Route::get('/test', 'TestController@test');

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
});
