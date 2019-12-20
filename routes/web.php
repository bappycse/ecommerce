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


Route::get('/admin', function () {
    return view('admin.admin');
});

Route::get('/test', function () {
    return view('admin.test');
});

Route::get('/product', function () {

    return view('frontend.home');

    return view('frontend.layout.master');

});

Route::get('/single', function () {
    return view('frontend.single');
});

Route::get('/category', 'HomeController@category')->name('category');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/discount', 'HomeController@totalDiscount')->name('discount');
Route::get('/admin', 'AdminController@adminDashboard')->name('admin');


Route::get('/admin', 'AdminController@adminDashboard')->name('admin');


Route::get('/product/single', function () {
    return view('frontend.layout.single');
});

Route::get('/', function () {
    return view('welcome');

});

Route::get('/create','BookController@create');
Route::POST('/create','BookController@store');
Route::get('products/getProductsJson', 'ProductController@getProductsJson');
Route::resource('products', 'ProductController');
Route::resource('categories', 'CategoryController');
Route::resource('addresses', 'AddressController');



