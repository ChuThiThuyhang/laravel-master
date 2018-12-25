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

Route::get('/', 'HomeController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['namespace' => 'Admin', 'prefix' => 'admin'], function() {
    Route::resource('users', 'UserController');
    Route::resource('articles', 'ArticleController')->names([
        'create' => 'admin.articles.create',
        'update' => 'admin.articles.update',
        'destroy' => 'admin.articles.destroy',
        'store' => 'admin.articles.store',
        'edit' => 'admin.articles.edit',
        'show' => 'admin.articles.show',
        'index' => 'admin.articles.index',
    ]);


    Route::post('/article/showArticle', 'ArticleController@showArticle')->name('admin.show-article');
    Route::post('/article/hideArticle', 'ArticleController@hideArticle')->name('admin.hide-article');
});

Route::group(['namespace' => 'Sites'], function() {
    Route::resource('articles', 'ArticleController');
    Route::resource('categories', 'CategoryController');
    Route::resource('comments', 'CommentController');

    Route::post('/articles/uploadImage', 'ArticleController@uploadImage');
    Route::post('/comment/ajax-create', 'CommentController@ajaxCreate');
    Route::post('/comment/getCommentFromLoadmore', 'CommentController@getCommentFromLoadmore');
});
