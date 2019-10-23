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
    return view('layouts.main_home');
});
Route::get('/', 'HomesController@index' )->name('AllPosts');


Route::get('/about', function () {
    return view('user.about');
});


Route::get('/contact', function () {
    return view('user.contact');
});

Route::get('/blog_post', 'postsController@index' )->name('AllPosts');
Route::get('/create_post', 'postsController@create' );
Route::post('/store_post', 'postsController@store' )->name('PostStore');
Route::get('/show_post/{id}', 'postsController@show' );
Route::get('/delete_post/{id}', 'postsController@destroy' );
Route::get('/edit_post/{id}', 'postsController@edit' );
Route::post('/update_post/{id}', 'postsController@update' )->name('PostUpdate');



Route::get('/category_post', 'CategoriesController@index' )->name('AllCategory');
Route::get('/create_category', 'CategoriesController@create' );
Route::post('/store_category', 'CategoriesController@store' )->name('categoryStore');
Route::get('/show_category/{id}', 'CategoriesController@show' );
Route::get('/delete_category/{id}', 'CategoriesController@destroy' );
Route::get('/edit_category/{id}', 'CategoriesController@edit' );
Route::post('/update_category/{id}', 'CategoriesController@update' )->name('categoryUpdate');
