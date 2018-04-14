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

Route::get('/', 'HomePageController@index');

Route::get('/category/{id}','HomePageController@adsByCategory');

//Admin route
Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
