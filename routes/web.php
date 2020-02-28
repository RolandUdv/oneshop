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


// top navigation bar
Route::get('/', 'PagesController@index');

Route::get('/login', 'PagesController@login');
Route::get('/register', 'PagesController@register');
Route::get('/about', 'PagesController@about');
Route::get('/contact', 'PagesController@contact');
Route::get('/admin', 'PagesController@admin');
Route::get('/generateqr', 'PagesController@generateqr');

// bottom navigation bar
Route::get('/services', 'PagesController@services');
Route::post('/services', 'PagesController@storereview'); // /services/create
// Route::get('/services', 'ReviewController@services');
Route::get('/scan', 'PagesController@scan');
Route::get('/history', 'PagesController@history');
Route::get('/profile', 'PagesController@profile');
Route::get('/store', 'PagesController@store');

// Route::get('/staff', 'Staff\Controllers\StaffController@staff');

// admin
// Route::get('/bookings', 'PagesController@bookings');
// Route::get('/bookings', 'PagesController@bookings');
// Route::get('/services/create', 'BookingController@create');
// Route::get('/services/storebooking', 'PagesController@storebooking');

Route::get('/categories', 'CategoryController@categories');
Route::get('/admin/staff', 'PagesController@staff');
Route::get('/users', 'UserController@users');

Route::get('/staff', 'StaffController@staff');
Route::get('/service', 'ServiceController@service');
Route::get('/bookings', 'BookingController@bookings');
Route::get('/store_information', 'StoresController@store_information');
Route::get('/store', 'StoresController@store');
Route::get('/opentime', 'OpentimesController@opentime');
// Route::get('/opening_times', 'OpentimesController@opening_times');

// Route::get('/staff', 'StaffController@staff');
//Route::resource('posts', 'PostsController');  //this has been deleted
Route::resource('pages', 'PagesController');
// Route::resource('service', 'BookingController');
Route::resource('bookings', 'BookingController');
Route::resource('categories', 'CategoryController');
Route::resource('reviews', 'ReviewController');
Route::resource('store_information', 'StoresController');
Route::resource('users', 'UserController');
Route::resource('service', 'ServiceController');
Route::resource('staff', 'StaffController');
Route::resource('opentime', 'OpentimesController');
// Route::resource('service', 'ServiceController');
// Route::resource('stores', 'StoresController');

// Route::get('/services{id}', function ($id, $username) {
//     return $id;
//     return view('services');
// });






// dynamic routes
// profile id pages
// Route::get('/profile{id}', function ($id, $username) {
//     return $id;
//     return view('profile');
// });

// Route::get('/favorites{id}', function ($id, $service_name) {
//     return $id;
//     return view('favorites');
// });

// store id search
// Route::get('/store{id}', function ($id, $store_name) {
//     return $id;
//     return view('profile');
// });

/*

// dynamic routes
// profile id pages
Route::get('/profile{id}', function ($id, $username) {
    //return $id;
    //return view('profile');
});

// store id search
Route::get('/store{id}', function ($id, $store_name) {
    //return $id;
    //return view('profile');
});
*/
Auth::routes();

Route::get('/', 'HomeController@index');

// Route::get('/', 'HomeController@index');
// Route::get('/admin', 'HomeController@admin');
Route::get('/isAdmin', function () {
    //
    })->middleware('1');
// ->name('home');
