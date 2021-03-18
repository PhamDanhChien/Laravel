<?php

use Illuminate\Support\Facades\Route;

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

Route::get('test/{name}/{age}', 'App\Http\Controllers\CustomerController@test')->middleware('check_age');

/*
//Read
Route::get('customer', '\App\Http\Controllers\CustomerController@get');

//Create
Route::get('customer/create', '\App\Http\Controllers\CustomerController@create');
Route::post('customer/create', '\App\Http\Controllers\CustomerController@store');

//Edit
Route::get('customer/{id}/edit', '\App\Http\Controllers\CustomerController@edit');
Route::post('customer/{id}/edit', '\App\Http\Controllers\CustomerController@update');

//Delete
Route::get('customer/{id}/delete', '\App\Http\Controllers\CustomerController@delete');
*/

Route::resource('customer', '\App\Http\Controllers\CustomerController');
Route::get('test', '\App\Http\Controllers\CustomerController@test');

// Admin
/*
Route::match(['get', 'post'], 'admin/login', '\App\Http\Controllers\Admin\Auth\LoginController@login')->name('admin.login');
Route::middleware('auth:admin')->prefix('/admin')->group(function (){
    Route::get('/', '\App\Http\Controllers\Admin\HomeController@index')->name('dashboard');
});*/

Route::match(['get', 'post'], 'admin/login', '\App\Http\Controllers\Admin\Auth\LoginController@login')->name('admin.login');
Route::get('/admin', '\App\Http\Controllers\Admin\HomeController@index')->middleware('auth:admin')->name('dashboard');

// User
Route::match(['get', 'post'], '/login', '\App\Http\Controllers\User\Auth\LoginController@login')->name('login');
Route::middleware('auth')->group(function (){
    Route::get('/', '\App\Http\Controllers\User\HomeController@index')->name('home');
});