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

use Illuminate\Support\Facades\Route;

Route::get('/', 'UsersController@index')->middleware('auth')->name('index');

Route::get('signup', 'Auth\RegisterController@showRegistrationForm')->name('signup');
Route::post('signup', 'Auth\RegisterController@register')->name('signup.post');

Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login')->name('login.post');
Route::get('logout', 'Auth\LoginController@logout')->name('logout');

Route::get('users/{id}', 'UsersController@show')->middleware('auth')->name('users.show');
Route::get('users/{id}/edit', 'UsersController@edit')->name('users.edit');
Route::put('users/{id}', 'UsersController@update')->name('users.update');

Route::get('kartes/{id}', 'KartesController@show')->middleware('auth')->name('kartes.show');
Route::get('kartes/{id}/edit', 'KartesController@edit')->name('kartes.edit');
Route::put('kartes/{id}', 'KartesController@update')->name('kartes.update');

Route::get('reports', 'ReportsController@create')->name('reports.create');
Route::post('reports', 'ReportsController@store')->name('reports.store');
Route::get('reports/{id}', 'ReportsController@show')->middleware('auth')->name('reports.show');
Route::get('reports/{id}/edit', 'ReportsController@edit')->name('reports.edit');
Route::put('reports/{id}', 'ReportsController@update')->name('reports.update');