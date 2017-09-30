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

use App\Http\Controllers\LevelController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', 'HomeController@index')->name('home');

Route::get('test', function() {
    return view('test.ckfinder', ['id' => 1, 'name' => 'upload']);
});

Route::prefix('/admin')->group(function() {

    Auth::routes();

    Route::resource('levels', 'LevelController');

    Route::resource('accounts', 'AdminController');
});