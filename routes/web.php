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
//登入路由
Route::auth();
//首頁路由
Route::get('/',['as'=>'index','uses'=>'HomeController@index']);
Route::get('home/',['as'=>'home','uses'=>'HomeController@home']);
Route::get('newest',['as'=>'newest','uses'=>'PostController@newest']);

 
//文章路由
Route::group(['prefix' => 'posts'], function() {
    Route::get('/{id}',['as'=>'posts.view','uses'=>'PostController@posts','where' => ['id' => '[0-9]+'],]);
    Route::get('/create',['as'=>'posts.create','uses'=>'PostController@create']);
    Route::post('/', ['as' => 'posts.store'  , 'uses' => 'PostController@store']);
    //留言路由
    Route::get('/comment/{id}', ['as' => 'posts.comment'  , 'uses' => 'PostController@comment']);
    Route::post('/{id}', ['as' => 'posts.comstore'  , 'uses' => 'PostController@comstore']);
});

//文章分類

Route::get('classfi/',['as'=>'class.index','uses'=>'ClassfiController@show']);

//後台路由
Route::group(['prefix' => 'backstage'], function() {
    //後台主頁
    Route::get('/',['as'=>'admin.index','uses'=>'AdminPostController@index']);
    
    //文章類別
    Route::get('/classfi',['as'=>'classfi.index','uses'=>'ClassfiController@index']);
    Route::get('/classadd',['as'=>'classfi.add','uses'=>'ClassfiController@classadd']);
    Route::post('/classfi', ['as' => 'classfi.store'  , 'uses' => 'ClassfiController@classstore']);
    Route::get('/classedit/{id}',['as'=>'classfi.edit','uses'=>'ClassfiController@classedit']);
    Route::patch('/classfi/{id}',['as'=>'classfi.update','uses'=>'ClassfiController@classupdate']);
    Route::get('/classfi/check/{id}',['as'=>'classfi.destroych','uses'=>'ClassfiController@delcheck']);
    Route::delete('/classfi/delet/{id}',['as'=>'classfi.destroy','uses'=>'ClassfiController@destroy']);
});
