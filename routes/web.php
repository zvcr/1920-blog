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
Route::get('/posts/{post}/edit', 'PostController@edit')->name('post.edit')->middleware('can:update,post');
Route::put('/posts/{post}', 'PostController@update')->name('post.update')->middleware('can:update,post');
Route::delete('/posts/{post}', 'PostController@destroy')->name('post.destroy')->middleware('can:delete,post');
Route::post('/posts/{id}/publish', 'PostController@publish')->name('post.publish')->middleware('can:publish,post');
Route::post('/posts/{postid}/comment', 'CommentController@store')->name('comment.store')->middleware('auth');
Route::delete('/comment/{comment}', 'CommentController@destroy')->name('comment.destroy')->middleware('can:delete,comment');