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

 // group multi language //
 Route::group(
[
	'prefix' => LaravelLocalization::setLocale(),
	'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]
], function(){ 
		
		Route::get('/', 'postscontroller@index');

        Route::get('/p/create', 'postscontroller@create');
        
        Route::get('/p/{post}', 'postscontroller@show');

        Route::get('p/editcaption/{id}', 'postscontroller@editcapth');

    	Route::post('/p', 'postscontroller@store')->name('storeimg');    

      Route::delete('p/{id}/delete', 'postscontroller@delete')->name('deletepost');
});
   // end group // 

// -----------------------------//

   //-- follow button -- //
Route::post('follow/{user}', 'postscontroller@read');
// --  -- --  --  -- // 



Route::Post('saveedit/{id}', 'postscontroller@saveedit');
});