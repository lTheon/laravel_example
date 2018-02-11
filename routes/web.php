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

/*
Route::get('/hello', function () {
    return view('Custom_pages.hello');      PODMIENIONE W CONTROLLERZE
});
*/
Route::get('/hello', 'PagesController@hello');
Route::get('/about', 'PagesController@about');
Route::get('/blog', 'PagesController@blog');

Route::resource('posts', 'PostsController');


/*
Route::get('/hello/{dude_name}', function ($dude_name) {
    return view('Custom_pages.hello_dude', ['name' => $dude_name]);
});
*/

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
