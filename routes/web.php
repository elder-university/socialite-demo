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

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/auth/github', 'GitHubAuthController@auth')->name('auth.social.github');
Route::get('/auth/github/callback', 'GitHubAuthController@callback')->name('auth.social.github.callback');

Route::get('/comments', 'CommentController@index')->name('comments.index');
Route::post('/comments', 'CommentController@store')->name('comments.store');
Route::delete('/comments/{comment}', 'CommentController@destroy')->name('comments.destroy');
