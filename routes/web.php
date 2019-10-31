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

Route::get('/', "WebController@Menu")->name("home");

Route::get('studio', "WebController@Studio")->name("studio");

Route::get('compo', "WebController@Compo")->name("compo");

Route::resource('admin', 'AdminController', ["except" => "show"]);
