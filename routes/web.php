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
Route::post('/services', 'PagesController@storereview');


// Route::post('/services{$id}', 'PagesController@createbooking'); // may not work !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!
Route::get('/services/{service_id}/{service_name}/{service_price}', 'PagesController@show');
Route::post('/services}', 'PagesController@storebooking'); 

// Route::get('/services', 'ReviewController@services');
Route::get('/scan', 'PagesController@scan');
Route::get('/history', 'PagesController@history');
Route::get('/profile', 'PagesController@profile');
Route::get('/store', 'PagesController@store');
Route::get('/support', 'PagesController@support');


Route::get('/categories', 'CategoryController@categories');
Route::get('/admin/staff', 'PagesController@staff');
Route::get('/users', 'UserController@users');

Route::get('/staff', 'StaffController@staff');
Route::get('/service', 'ServiceController@service');
Route::get('/bookings', 'BookingController@bookings');
Route::get('/store_information', 'StoresController@store_information');
Route::get('/store', 'StoresController@store');
Route::get('/opentime', 'OpentimesController@opentime');
Route::get('/reviews', 'ReviewController@reviews');
Route::get('/homepage', 'HomepageController@homepage');
// Route::get('index', 'HomepageController@index');

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
Route::resource('homepage', 'HomepageController');


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


Auth::routes();

Route::get('/', 'HomeController@index');

// Route::get('/', 'HomeController@index');
// Route::get('/admin', 'HomeController@admin');
Route::get('/isAdmin', function () {
    //
    })->middleware('1');
// ->name('home');
