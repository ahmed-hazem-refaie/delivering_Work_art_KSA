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

Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->middleware('verified')->name("home.index");


Route::resource('artists', 'ArtistController');

Route::resource('appliedartists', 'AppliedartistController');

Route::resource('reviews', 'ReviewController');

Route::resource('palettes', 'PaletteController');

Route::resource('paletteimages', 'PaletteimageController');

Route::resource('discounts', 'DiscountController');