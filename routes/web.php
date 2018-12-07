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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['namespace' => 'Admin', 'prefix' => 'admin'], function() {
    Route::resource('users', 'UserController');
});

Route::group(['namespace' => 'Sites'], function() {
    Route::resource('articles', 'ArticleController');
    Route::resource('comments', 'CommentController');

    Route::post('/articles/uploadImage', 'ArticleController@uploadImage');
    Route::post('/comment/ajax-create', 'CommentController@ajaxCreate');
    Route::post('/comment/getCommentFromLoadmore', 'CommentController@getCommentFromLoadmore');
});
