<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'StaticPagesController@index');
Route::get('about', 'StaticPagesController@about');
Route::get('help', 'StaticPagesController@help');
Route::get('contact', 'StaticPagesController@contact');
