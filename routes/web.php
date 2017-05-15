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


//Route::get('/about', function (){
//    return view('about',[
//        'name' => 'kaas'
//    ]);
//});

Route::get('/', 'PostsController@index');

Route::get('/posts/create', 'PostsController@create');

Route::post('/posts', 'PostsController@store');

Route::post('/posts/{post}/comments', 'CommentsController@store')->name('storecomment');

Route::get('/posts/{post}', 'PostsController@show')->name('showpost');


Route::get('/register', 'RegistrationController@create');

Route::get('/login', 'SessionsController@create');

// controller => PostController

// eloquent model => Post

// migration => create_post_table
Auth::routes();

Route::get('/home', 'HomeController@index');
