<?php

/*
|--------------------------------------------------------------------------
| Web Routes Laravel 5.7
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

# FrontEnd Routes
Route::prefix('/')->group(function () {

    # Home
    Route::get('/', 'FrontEnd\HomeController@index')->name('home');

    # Category
    Route::resource('categories', 'FrontEnd\CategoryController');

    # Blog
    Route::resource('blogs', 'FrontEnd\BlogController');
});


# BackEnd Routes
Route::group(['prefix' => '/admin', 'as'=>'admin.'], function () {

    # Authentication
    Route::get('/', 'BackEnd\Auth\LoginController@showLoginForm');
    Route::get('login', 'BackEnd\Auth\LoginController@showLoginForm')->name('login');
    Route::post('login', 'BackEnd\Auth\LoginController@login')->name('login');
    Route::post('logout', 'BackEnd\Auth\LoginController@logout')->name('logout');
    Route::get('register', 'BackEnd\Auth\RegisterController@showRegistrationForm')->name('register');
    Route::post('register', 'BackEnd\Auth\RegisterController@register')->name('register');

    Route::middleware(['auth'])->prefix('/dashboard')->group(function () {

        # Dashboard
        Route::get('/home', 'BackEnd\HomeController@index')->name('home');

        # Category
        Route::resource('categories', 'BackEnd\CategoryController');

        # Blog
        Route::resource('blogs', 'BackEnd\BlogController');
    });
});

# Ajax
Route::group(['prefix' => '/ajax', 'as' => 'ajax.'], function () {

    # Category
    Route::get('category/by/id', 'Ajax\CategoryController@getCategoryById')->name('get.category.by.id');

    # DataTables
    Route::group(['prefix' => '/datatables', 'as' => 'datatables.'], function () {
        Route::get('categories', 'Ajax\DataTablesController@categoriesList')->name('categories.list');
        Route::get('blogs', 'Ajax\DataTablesController@blogsList')->name('blogs.list');
    });
});