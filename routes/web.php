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

Route::get('/','Login\LoginController@loadd');
Route::post('reg/rego','Login\LoginController@rego');

Route::get('log/add','Login\LoginController@add');
Route::post('log/login','Login\LoginController@login');

Route::get('index','Index\IndexController@index');