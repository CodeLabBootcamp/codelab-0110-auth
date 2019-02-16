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


Route::get('/admin/login', 'Admin\LoginController@showLoginForm')->name("login");
Route::get('/admin/logout', 'Admin\LoginController@logout');
Route::post('/admin/login', 'Admin\LoginController@login');


Route::group(["middleware" => ["auth:admin", "admin.super"]], function () {

    Route::view('/admin', 'admin.pages.home');

});