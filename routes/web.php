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

Route::get('/page', 'PageController@index')->name('pages');

Route::get('get-city', 'PageController@getCity');
Route::get('get-district', 'PageController@getDistrict');
Route::get('province', 'PageController@province');
Route::get('city', 'PageController@city');
Route::get('district', 'PageController@district');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

