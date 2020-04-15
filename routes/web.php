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

Route::get('/posts', 'PostController@index')->name('post.index');
Route::get('/post/{slug}', 'PostController@show')->name('post.show');
Route::get('/posts/create', 'PostController@create')->name('post.create')->middleware('auth');
Route::post('/posts', 'PostController@store')->name('post.store')->middleware('auth');
Route::get('/posts/{id}/edit', 'PostController@edit')->name('post.edit')->middleware('auth');
Route::put('/posts/{id}', 'PostController@update')->name('post.update')->middleware('auth');
Route::delete('/posts/{id}', 'PostController@destroy')->name('post.destroy')->middleware('auth');
Route::post('/posts/{id}/publish', 'PostController@publish')->name('post.publish')->middleware('auth');
Route::post('/posts/{postid}/comment', 'CommentController@store')->name('comment.store')->middleware('auth');
Route::delete('/comment/{id}', 'CommentController@destroy')->name('comment.destroy')->middleware('auth');