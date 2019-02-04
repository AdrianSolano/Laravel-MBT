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
Route::get('/contact', 'PagesController@contact')->name('contact');
Route::get('/about', 'PagesController@about')->name('about');
Route::get('/faq', 'PagesController@faq')->name('faq');;
Route::get('/privacypolicy', 'PagesController@privacypolicy')->name('privacypolicy');


Route::resource('/tanks','TanksController');
