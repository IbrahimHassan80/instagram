<?php 
/*
|--------------------------------------------------------------------------
| Posts Routes
|--------------------------------------------------------------------------
|
| Here is where you can register Post routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::namespace('posts')->group(function(){

//-- follow button -- //
Route::post('follow/{user}', 'postscontroller@read');
// --  -- --  --  -- // 

Route::get('/', 'postscontroller@index');

route::get('/p/create', 'postscontroller@create');

Route::post('/p', 'postscontroller@store');

Route::delete('p/{id}/delete', 'postscontroller@delete');

Route::get('/p/{post}', 'postscontroller@show');

Route::get('p/editcaption/{id}', 'postscontroller@editcapth');

Route::Post('saveedit/{id}', 'postscontroller@saveedit');
});