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

Route::resource('/posts','PostController')->only([
<<<<<<< HEAD
'index','store', 'create']);

=======
    'index','store', 'create']);
//Route::get ('/request-form','PostController@show');
>>>>>>> 51aa44137809d5783f12480f6bbf8475b2b34319







    Route::resource('/moders/complains', 'Moders\ComplainsController')->only([
        'index','edit','update','show'
    ]);











Route::resource('/admin','AdminController')->only([
    'index']);

