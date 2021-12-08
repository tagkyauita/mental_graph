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
use App\Http\Controllers\ReportsController;

Route::get('/', 'UsersController@index')->middleware('auth')->name('index');

Route::get('signup', 'Auth\RegisterController@showRegistrationForm')->name('signup');
Route::post('signup', 'Auth\RegisterController@register')->name('signup.post');

Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login')->name('login.post');
Route::get('logout', 'Auth\LoginController@logout')->name('logout');

Route::get('users/{id}', 'UsersController@show')->middleware('auth')->name('users.show');
Route::get('users/{id}/edit', 'UsersController@edit')->name('users.edit');
Route::put('users/{id}', 'UsersController@update')->name('users.update');

Route::get('karten/{id}', 'KartenController@show')->name('karten.show');
Route::get('karten/{id}/create', 'KartenController@create')->name('karten.create');
Route::post('karten/{id}', 'KartenController@store')->name('karten.store');
Route::get('karten/{id}/edit', 'KartenController@edit')->name('karten.edit');
Route::put('karten/{id}', 'KartenController@update')->name('karten.update');
Route::delete('karten/{id}', 'KartenController@destroy')->name('karten.destroy');

Route::get('discription/{id}', 'DiscriptionController@create')->name('discription.create');
Route::post('discription/{id}', 'DiscriptionController@store')->name('discription.store');
Route::get('discription/{id}/edit', 'DiscriptionController@edit')->name('discription.edit');
Route::put('discription/{id}', 'DiscriptionController@update')->name('discription.update');

Route::get('reports', 'ReportsController@create')->name('reports.create');
Route::post('reports', 'ReportsController@store')->name('reports.store');
Route::get('reports/{id}', 'ReportsController@show')->middleware('auth')->name('reports.show');
Route::get('reports/{id}/edit', 'ReportsController@edit')->name('reports.edit');
Route::put('reports/{id}', 'ReportsController@update')->name('reports.update');