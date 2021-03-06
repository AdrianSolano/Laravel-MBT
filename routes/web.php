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

//Estaticas
Route::get('/', 'PagesController@index')->name('root');
Route::get('/contact', 'PagesController@contact')->name('contact')->middleware('auth');;
Route::get('/about', 'PagesController@about')->name('about');
Route::get('/faq', 'PagesController@faq')->name('faq');
Route::get('/privacypolicy', 'PagesController@privacypolicy')->name('privacypolicy');
Route::get('/ammo', 'PagesController@ammo')->name('ammo');
Route::get('/profile', 'PagesController@profile')->name('profile');


Route::resource('/tanks', 'TanksController');
Route::resource('/event', 'EventController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/users/{user}/tanks', 'UserTanksController@index')->name('usertanks.index');

//JS
Route::get('/miPerfil/{tab}', 'PagesController@miPerfil');
//Route::post('/register/validation', 'Auth\RegisterController@validacionAjax');
Route::post('/tanks/crearTanqueAjax', 'TanksController@crearTanqueAjax');
Route::delete('/tanks/eliminarTanqueAjax/{id}', 'TanksController@eliminarTanqueAjax');
Route::post('/tanks/buscarAjax', 'TanksController@obtenerTanquesAjax');
Route::put('/tanks/editAjax/{id}', 'TanksController@editarAjax');
Route::get('/tanks/showAjax/{id}', 'TanksController@showAjax');
Route::post('/tanks/searchAjax', 'TanksController@searchAjax');
Route::get('/tanks/paginateAjax/{num}', 'TanksController@paginateAjax');
Route::post('/event/validarAjax', 'EventController@validarAjax');
Route::post('/event/crearEventoAjax','EventController@crearEventoAjax');
