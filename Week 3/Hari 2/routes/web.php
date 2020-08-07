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

//Route::get('/', 'HomeController@index');
//Route::get('/register','AuthController@register');
//Route::post('/welcome','AuthController@welcome');

Route::get('/', 'TemplateController@index');
Route::get('/data-tables', 'TemplateController@dataTable');

Route::get('/posts', 'PostController@index');
Route::get('/posts/create', 'PostController@create');
Route::post('/posts/store', 'PostController@store');
Route::get('/posts/{id}', 'PostController@show');
Route::get('/posts/{id}/edit', 'PostController@edit');
Route::put('/posts/{id}/update', 'PostController@update');
Route::delete('/posts/{id}/delete', 'PostController@destroy');
