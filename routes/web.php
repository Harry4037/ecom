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

//Route::get('/multistep', 'TestController@demomultistep');

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

    Route::match(['get', 'post'], '/vendor-registration', 'VendorController@register')->name('site.vendor.register');
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

    Route::prefix('vendor')->group(function() {
        Route::get('/index', 'VendorController@userIndex')->name('admin.vendor.index');
        Route::get('/vendors-list', 'VendorController@usersList')->name('admin.vendor.list');
        Route::post('/vendor-delete', 'VendorController@userDelete')->name('admin.vendor.delete');
    });

    Route::prefix('category')->group(function() {
        Route::get('/index', 'CategoryController@categoryIndex')->name('admin.category.index');
        Route::get('/list', 'CategoryController@categoryList')->name('admin.category.list');
        Route::match(['post', 'get'], '/create', 'CategoryController@categoryCreate')->name('admin.category.create');
        Route::match(['post', 'get'], '/edit/{category}', 'CategoryController@categoryEdit')->name('admin.category.edit');
        Route::post('/delete', 'CategoryController@categoryDelete')->name('admin.category.delete');
        Route::match(['get', 'post'], '/status', 'CategoryController@categoryStatus')->name('admin.category.status');
    });

    Route::prefix('sub-category')->group(function() {
        Route::get('/index', 'SubCategoryController@subcategoryIndex')->name('admin.sub-category.index');
        Route::get('/list', 'SubCategoryController@subcategoryList')->name('admin.sub-category.list');
        Route::match(['post', 'get'], '/create', 'SubCategoryController@subcategoryCreate')->name('admin.sub-category.create');
        Route::match(['post', 'get'], '/edit/{subcategory}', 'SubCategoryController@subcategoryEdit')->name('admin.sub-category.edit');
        Route::post('/delete', 'SubCategoryController@subcategoryDelete')->name('admin.sub-category.delete');
        Route::match(['get', 'post'], '/status', 'SubCategoryController@subcategoryStatus')->name('admin.sub-category.status');
    });

    Route::prefix('banner')->group(function() {
        Route::get('/', 'BannerController@index')->name('admin.banner.index');
        Route::get('/list', 'BannerController@bannerList')->name('admin.banner.list');
        Route::match(['get', 'post'], '/create', 'BannerController@bannerCreate')->name('admin.banner.create');
        Route::match(['get', 'post'], '/edit/{banner}', 'BannerController@bannerEdit')->name('admin.banner.edit');
        Route::match(['get', 'post'], '/status', 'BannerController@bannerStatus')->name('admin.banner.status');
        Route::post('/delete', 'BannerController@bannerDelete')->name('admin.banner.delete');
    });
});
