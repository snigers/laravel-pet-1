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
});

Route::get('/page', 'MyPageController@index');

Route::get('/blog', 'MyBlogController@index');

Route::get('/news', 'MyNewsController@index');

Route::get('/contacts', 'MyContactsController@index');

Route::get('/projects', 'MyProjectsController@index');

Route::get('/career', 'MyCareerController@index');

Route::get('/app', 'MyAppController@index');

Route::get('/activity', 'MyActivityController@index');

Route::get('/articles', 'MyArticlesController@index');








