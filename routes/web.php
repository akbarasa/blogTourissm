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
// Auth::routes();

// Route::get('/', function () {
//     return view('home');
// });

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
Route::get('/home', 'HomeController@home');


//user
Route::get('/user','UserController@viewUser');
Route::get('/delete_user/{id}','UserController@deleteUser');
Route::get('/profile/{id}','UserController@updateProfile');
Route::post('/update','UserController@update');

//blog
Route::get('/blog/{id}','BlogController@viewBlog');
Route::get('/delete_blog/{id}','BlogController@deleteBlog');

Route::get('/addBlog', 'BlogController@addBlog');
Route::post('/add', 'BlogController@add');

Route::get('/fullStory/{id}','BlogController@fullStory');

//category
Route::get('/category/{id}','CategoryController@viewCategory');