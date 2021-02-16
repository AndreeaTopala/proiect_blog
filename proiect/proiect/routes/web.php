<?php

use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});
Route::get('/index', 'PaginiController@index');

Route::get('/ceva', function () {
    return view('pagini.ceva');
});

Route::get('/altceva', function () {
    return view('pagini.altceva');
});


 Route::resource('posts','PostsController');

Auth::routes();

Route::get('/home', 'HomeController@index');



Route::get('/home2', 'HomeController@index2');


Route::get('home2/{id}', 'HomeController@show');
Route::post('home2', 'HomeController@update');

Route::get('/home3', function () {
    return view('home3');
});

Route::resource('homeindex', 'HomeController');
Route::get('homeindex', 'HomeController@index3');


