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
Route::auth();

Route::get('/',['as'=>'index','uses'=>'HomeController@index']);
Route::get('home/',['as'=>'home','uses'=>'HomeController@home']);
Route::get('newest',['as'=>'newest','uses'=>'PostController@newest']);

 

Route::get('/{id}',['as'=>'posts.view','uses'=>'PostController@posts']);
Route::get('/create',['as'=>'posts.create','uses'=>'PostController@create']);
Route::post('posts', ['as' => 'posts.store'  , 'uses' => 'PostController@store']);