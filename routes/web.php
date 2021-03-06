<?php

use Illuminate\Support\Facades\Auth;
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
    return redirect()->route('post.index');
});
Route::prefix('post')->group(function () {
    Route::get('/', 'PostController@index')->name('post.index');
    Route::get('/{post}', 'PostController@detail')->name('post.detail');
    Route::post('/comment', 'CommentController@addComment')->name('comment.add');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
