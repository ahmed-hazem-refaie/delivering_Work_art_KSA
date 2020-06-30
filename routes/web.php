<?php

use Facade\FlareClient\View;
use Illuminate\Support\Facades\Auth;
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

Auth::routes(['verify' => true]);

// Route::get('/home', 'HomeController@index')->middleware('verified')->name("home.index");
Route::get('/', 'HomeController@index');
Route::get('/admin', 'AdminController@index')->middleware('verified')->name("admin.index");


Route::resource('artists', 'ArtistController');

Route::resource('appliedartists', 'AppliedartistController');

Route::resource('reviews', 'ReviewController');

Route::resource('palettes', 'PaletteController');

Route::resource('paletteimages', 'PaletteimageController');
Route::get('addpaletteimages/{palette?}/create','PaletteimageController@create')->name("addimgpalette");

Route::resource('discounts', 'DiscountController');