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

Route::get ('comments', 'CommentController@index');

Route::get ('/comment/{comment}/like/', 'LikesController@upVote');
Route::get ('/comment/{comment}/dislike/', 'LikesController@downVote');
Route::get ('/comment/{comment}/', 'CommentController@show');