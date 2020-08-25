<?php

/*
|--------------------------------------------------------------------------
| Profilr  Routes
|--------------------------------------------------------------------------
|
| Here is where you can register Profile routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Auth::routes();


Route::group(['namespace' => 'profile'], function(){

Route::get('/profile/{user}', 'profilecontroller@index')->name('home');

Route::get('profile/{user}/edit', 'profilecontroller@edit')->name('profile.edit');

Route::patch('/profile/{user}', 'profilecontroller@update');

Route::get('logout', 'profilecontroller@logout');
});