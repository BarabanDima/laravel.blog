<?php

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

Route::get('/', 'PostController@index')->name('home');
<<<<<<< HEAD
<<<<<<< HEAD
Route::get('/article', 'PostController@show')->name('posts.single');
=======
Route::get('/article/{slug}', 'PostController@show')->name('posts.single');
Route::get('/category/{slug}', 'CategoryController@show')->name('categories.single');
Route::get('/tag/{slug}', 'TagController@show')->name('tags.single');
>>>>>>> 05fc1cb (Added show posts)
=======
Route::get('/article/{slug}', 'PostController@show')->name('posts.single');
Route::get('/category/{slug}', 'CategoryController@show')->name('categories.single');
>>>>>>> 728963c (Добавил вывод статей на главной странице)

Route::prefix('admin')->group(function() {
    Route::get('/', 'Admin\MainController@index')->name('admin.index')->middleware('admin');
    Route::resource('/categories', 'Admin\CategoryController')->middleware('admin');
    Route::resource('/tags', 'Admin\TagController')->middleware('admin');
    Route::resource('/posts', 'Admin\PostController')->middleware('admin');
});

Route::group(['middleware' => 'guest'], function () {
    Route::get('/register', 'UserController@create')->name('register.create');
    Route::post('/register', 'UserController@store')->name('register.store');
    Route::get('/login', 'UserController@loginForm')->name('login.create');
    Route::post('/login', 'UserController@login')->name('login');
});

Route::get('/logout', 'UserController@logout')->name('logout')->middleware('auth');