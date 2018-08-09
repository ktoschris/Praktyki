<?php

session_start();

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

Route::get('', 'PagesController@index');

Route::get('main', 'PagesController@main');

Route::get('parts', 'PagesController@parts');

Route::get('accessories', 'PagesController@accessories');

Route::get('detailing', 'PagesController@detailing');

Route::post('logmein', 'PagesController@logmein');

Route::get('register', 'PagesController@register');

Route::post('registerme', 'PagesController@registerme');

Route::get('item', 'PagesController@item');

Route::get('cart', 'PagesController@cart');

Route::get('finalcart', 'PagesController@finalcart');

Route::get('cashout', 'PagesController@cashout');

Route::get('cashmeout', 'PagesController@cashmeout');


Route::get('logout', 'PagesController@logout');



Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
