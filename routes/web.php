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

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LevelController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', 'HomeController@index')->name('home');

Route::get('test', function() {
    return view('auth.passwords.reset2');
});

Route::prefix('/admin')->group(function() {

    Auth::routes();

    Route::get('dashboard', 'DashboardController@index')->name('dashboard');

    Route::resource('levels', 'LevelController');

    Route::resource('accounts', 'AdminController');

    Route::resource('years', 'YearController', [
        'except' => ['update']
    ]);
    Route::post('years/{year}', 'YearController@update')->name('years.update');

    Route::resource('faculties', 'FacultyController', [
        'except' => ['update', 'destroy']
    ]);

    Route::post('faculties/{faculty}', 'FacultyController@update')->name('faculties.update');

    Route::resource('classes', 'StudentClassController', [
        'except' => ['update', 'destroy']
    ]);

    Route::post('classes/{class}', 'StudentClassController@update')->name('classes.update');

    Route::resource('teachers', 'TeacherController', [
        'except' => ['update', 'destroy']
    ]);

    Route::post('teachers/{teacher}', 'TeacherController@update')->name('teachers.update');

    Route::resource('roles', 'RoleController', [
        'except' => ['update']
    ]);

    Route::post('roles/{role}', 'RoleController@update')->name('roles.update');

    Route::resource('students', 'StudentController', [
        'except' => ['update']
    ]);

    Route::post('students/{student}', 'StudentController@update')->name('students.update');
});
