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

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', "WebController@Index")->name("index");
Route::get('infos-legales', "WebController@Legales")->name("legales");

Route::get('studio', "WebController@Studio")->name("studio");

Route::get('compo', "WebController@Compo")->name("compo");

Route::prefix("admin")->middleware('auth')->group(function (){
    Route::get('/', "Admin\AdminController@Index")->name("admin");
    Route::resource('articles', 'Admin\ArticleController', ["except" => "show"]);
    Route::get('link', "Admin\AdminController@Link")->name("link");

    Route::get("galerie", "Admin\GalerieController@Index")->name("galerie.index");
    Route::post("galerie", "Admin\GalerieController@Upload")->name("galerie.upload");
});

Auth::routes(['register' => false, "reset" => false]);
