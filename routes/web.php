<?php

use Illuminate\Support\Facades\Route;
use App\Models\Post;
use App\Http\Controllers\PostsController;

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

// route for defalut/home screen
Route::get('/', function () {
    $post = Post::latest('id')-> get();
    return view('home-layout',['post'=>$post]);
})->name('main_page');

// route for single post
Route::get('/post/{id}','App\Http\Controllers\PostsController@getById')->name('single_post'); 