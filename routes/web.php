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

// bottom navigation bar
Route::get('/services', 'PagesController@services');
Route::get('/scan', 'PagesController@scan');
Route::get('/favorites', 'PagesController@favorites');
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


// Route::get('/staff', 'StaffController@staff');
//Route::resource('posts', 'PostsController');  //this has been deleted
Route::resource('pages', 'PagesController');
// Route::resource('service', 'BookingController');
Route::resource('bookings', 'BookingController');
Route::resource('categories', 'CategoryController');
Route::resource('reviews', 'ReviewController');
Route::resource('users', 'UserController');
Route::resource('service', 'ServiceController');
Route::resource('staff', 'StaffController');
// Route::resource('service', 'ServiceController');
// Route::resource('stores', 'StoresController');


// dynamic routes
// profile id pages
Route::get('/profile{id}', function ($id, $username) {
    //return $id;
    //return view('profile');
});

Route::get('/category{id}', function ($id, $category_name) {
});

// store id search
Route::get('/store{id}', function ($id, $store_name) {
    //return $id;
    //return view('profile');
});

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
// ->name('home');
