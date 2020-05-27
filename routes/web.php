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


Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::post('/login/custom',['uses' => 'LoginController@login', 'as' => 'login.custom']);
Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/user/list', 'UserController@index');
Route::get('/user/{user_id}/status/{status}', 'UserController@updateStatus');

Route::get('/user/profile', 'UserController@show');
Route::post('/user/profile/update', 'UserController@update');


Route::get('/', 'DirectoryController@index');
Route::get('/directory', function () {
    return view('directory');
});
Route::post('/directory', 'DirectoryController@create');

Route::get('/directory/{id}', 'DirectoryController@show');
Route::get('/delete/directory/{id}', 'DirectoryController@deleteDirectory');
Route::post('/file/{id}', 'DirectoryController@addFile');



