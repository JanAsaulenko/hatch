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
'index','store', 'create']);
//Route::get ('/request-form','PostController@show');

Route::resource('moders','ModeratorFormController')->only([
        'index','show','edit']
);
<<<<<<< HEAD

Route::resource('complains','ComplainsController')->only([
'index','show']
);

Route::resource('/view_all','ViewAllController')->only([
    'index']);

;


=======
Route::resource('/admin','AdminController')->only([
    'index']);
>>>>>>> 07982e1c858cde033f53b866152f2115a42d002c
