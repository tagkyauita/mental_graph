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

Route::get('medical/{id}', 'MedicalController@show')->middleware('auth')->name('medical.show');
Route::get('medical/{id}/edit', 'MedicalController@edit')->name('medical.edit');
Route::put('medical/{id}', 'MedicalController@update')->name('medical.update');

Route::get('records/{id}', 'RecordsController@show')->middleware('auth')->name('records.show');
Route::get('records/{id}/edit', 'RecordsController@edit')->name('records.edit');
Route::put('records/{id}', 'RecordsController@update')->name('records.update');