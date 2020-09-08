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
    return view('index');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/register', function () {
    return view('register');
});

Route::post('/register', 'UserController@create');

Route::get('/tasks', 'TasksController@show');

Route::post('/tasks', 'TasksController@create');

Route::post('/tasks/{id}', 'TasksController@delete');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
