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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::view('/admin/dashboard','admin.dashboard.index')->middleware('auth')->name('dashboard');


Route::resource('/admin/customers', 'CustomersController')->middleware('auth');

Route::resource('/admin/suppliers', 'SuppliersController')->middleware('auth');


Route::resource('/admin/products', 'ProductsController')->middleware('auth');

Route::resource('/admin/purchase', 'PurchaseController')->middleware('auth');

Route::resource('/admin/sales', 'SalesController')->middleware('auth');