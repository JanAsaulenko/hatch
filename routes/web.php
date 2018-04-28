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

Route::get('/', 'HomeController@show');

Route::resource('/request-form','RequestFormController')->only([
'index']);
//Route::get ('/request-form','RequestFormController@show');

Route::resource('moders','ModeratorFormController')->only([
        'index','show','edit']
);
Route::resource('complains','ComplainsController')->only([
'index','show']
);

Route::resource('/view_all','ViewAllController')->only([
    'index']);

Route::resource('/admin','AdminController')->only([
    'index']);

