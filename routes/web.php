<?php

use Illuminate\Support\Facades\Route;

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

Route::post('/app/create_tag', 'AdminController@addTag');
Route::get('/app/get_tags', 'AdminController@getTag');
Route::post('/app/edit_tag', 'AdminController@editTag');
Route::post('/app/delete_tag', 'AdminController@deleteTag');

Route::post('/app/create_category', 'AdminController@addCategory');
Route::get('/app/get_category', 'AdminController@getCategory');
Route::post('/app/edit_category', 'AdminController@editCategory');
Route::post('/app/delete_category', 'AdminController@deleteCategory');

Route::post('/app/create_country', 'AdminController@addCountry');
Route::post('/app/upload', 'AdminController@upload');
Route::post('/app/delete_image', 'AdminController@deleteImage');
Route::get('/app/get_country', 'AdminController@getCountry');
Route::post('/app/edit_country', 'AdminController@editCountry');
Route::post('/app/delete_country', 'AdminController@deleteCountry');

Route::post('/app/create_ltcategory', 'AdminController@addLtcategory');
Route::get('/app/get_ltcategory', 'AdminController@getLtcategory');
Route::post('/app/edit_ltcategory', 'AdminController@editLtcategory');
Route::post('/app/delete_ltcategory', 'AdminController@deleteLtcategory');

Route::post('/app/create_lcategory', 'AdminController@addLcategory');
Route::get('/app/get_lcategory', 'AdminController@getLcategory');
Route::post('/app/search_lcategory', 'AdminController@searchLcategory');
Route::post('/app/edit_lcategory', 'AdminController@editLcategory');
Route::post('/app/delete_lcategory', 'AdminController@deleteLcategory');
    

Route::get('/', function () {
     return view('welcome');
});

Route::get('/new', 'TestController@controllerMethod');

Route::any('{slug}', function(){
    return view ('welcome');
});