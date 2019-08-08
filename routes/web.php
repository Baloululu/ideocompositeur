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
    return view('menu');
})->name("home");

Route::get('studio', function (){
    return view('studio');
})->name("studio");

Route::get('compo', function (){
    return view('compo');
})->name("compo");