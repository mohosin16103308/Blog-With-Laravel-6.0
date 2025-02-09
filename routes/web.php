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


/*
|--------------------------------------------------------------------------
| Home Routes
|--------------------------------------------------------------------------
*/
Route::get('/', 'HomeController@index')->name('home');


/*
|--------------------------------------------------------------------------
| ********************************     END ABOUT **************************
|--------------------------------------------------------------------------
*/



/*
|--------------------------------------------------------------------------
| AboutController Routes
|--------------------------------------------------------------------------
*/
Route::get('/about','AboutController@index')->name('about');


/*
|--------------------------------------------------------------------------
| ********************************     END ABOUT **************************
|--------------------------------------------------------------------------
*/

/*
|--------------------------------------------------------------------------
| BlogController Routes
|--------------------------------------------------------------------------
*/
Route::get('/blog','BlogController@index')->name('blog');



/*
|--------------------------------------------------------------------------
| ********************************     END ABOUT **************************
|--------------------------------------------------------------------------
*/

/*
|--------------------------------------------------------------------------
| ContactController Routes
|--------------------------------------------------------------------------
*/
Route::get('/contact','ContactController@index')->name('contact');


/*
|--------------------------------------------------------------------------
| ********************************     END ABOUT **************************
|--------------------------------------------------------------------------
*/




/*
|--------------------------------------------------------------------------
| AdminController Routes
|--------------------------------------------------------------------------
*/

Route::get('/admin','AdminController@index')->name('admin');


/*
|--------------------------------------------------------------------------
| ********************************     END ABOUT **************************
|--------------------------------------------------------------------------
*/



/*
|--------------------------------------------------------------------------
| AdmAdmin/BlogController  Routes
|--------------------------------------------------------------------------
*/

Route::get('admin/addPost','Admin\BlogController@create')->name('admin-post');

Route::post('admin/addPost/save','Admin\BlogController@store')->name('admin_save_Post');

Route::get('/blog/list','Admin\BlogController@index')->name('admin-post-list');

Route::get('/blog/editPost/{id}','Admin\BlogController@edit')->name('admin-post-edit');

Route::get('/blog/viewPost/{id}','Admin\BlogController@show')->name('admin-post-show');

Route::get('/blog/deletePost/{id}','Admin\BlogController@destroy')->name('admin-post-delete');


Route::post('/blog/updatePost','Admin\BlogController@update')->name('admin-post-update');




/*
|--------------------------------------------------------------------------
| ********************************     END ABOUT **************************
|--------------------------------------------------------------------------
*/


Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
