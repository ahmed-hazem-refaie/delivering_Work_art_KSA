<?php

use Facade\FlareClient\View;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\CheckAdmin;

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

Auth::routes();

Route::view('/','userLayout.home');
Route::group(['middleware' => 'isadmin'], function () {
    Route::get('/admin', 'AdminController@index')->middleware(['isadmin'])->name("admin.index");
    Route::resource('appliedartists', 'AppliedartistController');
    Route::resource('artists', 'ArtistController');
    Route::resource('reviews', 'ReviewController');
    Route::resource('palettes', 'PaletteController');
    Route::resource('paletteimages', 'PaletteimageController');
    Route::get('orders', 'Api\orderController@index');
    Route::get('addpaletteimages/{palette?}/create','PaletteimageController@create')->name("addimgpalette");
    Route::get('changeStatus', 'UserController@changeStatus');
    Route::get('users', 'UserController@index');
    Route::get('changeStatus', 'UserController@changeStatus');
    Route::resource('homeDatas', 'HomeDataController');

});
Route::get('/home', 'HomeController@index')->middleware('verified')->name("home.index");
Route::get('/', 'HomeController@index');




Route::post('like', 'ReviewController@like');
Route::post('dislike', 'ReviewController@dislike');



Route::resource('discounts', 'DiscountController');

Route::get('payment/{id?}', function ($id=null) {

})->name('payment');
Route::view('/{any}','userLayout.home');








