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

Route::group(['middleware' => 'auth'], function() {
    Route::view('/home', 'home')->name('home');

    Route::resource('articles', 'ArticleController');
    Route::resource('categories', 'CategoryController');
    Route::resource('comments', 'CommentController');
    Route::resource('users', 'UserController');

    Route::get('article_categories/{article}/edit', 'ArticleCategoryController@edit')->name('article_categories.edit');
    Route::put('article_categories/{article}', 'ArticleCategoryController@update')->name('article_categories.update');
    Route::get('category_articles/{category}/edit', 'CategoryArticleController@edit')->name('category_articles.edit');
    Route::put('category_articles/{category}', 'CategoryArticleController@update')->name('category_articles.update');
});
