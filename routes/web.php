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

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::resource('articles', 'ArticleController');
Route::put('article_categories/{article}', 'ArticleCategoryController@update')->name('article_categories.update');
Route::resource('categories', 'CategoryController');
Route::resource('comments', 'CommentController');
Route::resource('users', 'UserController');
