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
/*
Route::get('/', function () {
    return view('main');
});
*/
Route::get('foo', function () {
    return 'Hello World';
});
//Route::get('/', 'HomeController@index');
Route::get('/hello', 'HomeController@index');
Route::get('hello', 'HomeController@index');
Route::get('hello/', 'HomeController@index');
Route::get('/hello', function () {
    return 'hello world';
});
// ルート追加
//Route::get('/', 'PostController@index');
Route::resource('posts', 'PostController');
Route::get('/posts_card', 'PostController@posts_card');
Route::resource('images', 'ImageController');
Route::get('/show_img_card', 'ImageController@show_list');
//Route::delete('/', 'PostsController@destroy');
/*
Route::match(['get', 'post'], 'foo','HomeController@index');
Route::match(['get', 'post'], 'note','HomeController@index2');
Route::match(['get', 'post'], 'post','HomeController@index3');
*/
Auth::routes();
//Route::get('/', 'UltraVisionController@index');
Route::get('/', 'ViewerController@show_list');
Route::get('/home', 'HomeController@index')->name('home');
Route::post('/upload', 'ImageController@upload');
Route::post('/upload_img', 'ImageController@upload_img');
//Route::get('/Finence', 'FinanceController@index');
Route::resource('Finance', 'FinanceController');
Route::view('/logout', 'logout');
Route::view('/tabispot', 'tabispot');
Route::view('/posttabiclip', 'posttabiclip');
//Route::view('/', 'home');
