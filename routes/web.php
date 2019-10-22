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

Route::get('/','Shop\MainController@index')->name('home');

Route::get('/recommandation','Shop\MainController@recommande')->name('artiste_recommande');

Route::get('/voir/artiste/{id}','Shop\MainController@voirArtiste')->name('voir_artiste');

