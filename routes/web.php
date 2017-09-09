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
Route::resource('/Categorie', 'CategorieController');
Route::resource('/Post', 'PostController');
Route::resource('/Comment', 'CommentController');
Route::resource('/User', 'UserController');

//factory(App\Post::class,10)->create();