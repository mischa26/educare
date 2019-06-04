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
// Route::get('/', function(){
//     return view('admin');
// });

Route::get('/', 'MainController@index');
Route::post('/main/checkLogin', 'MainController@checkLogin');
Route::get('/division', 'MainController@successLogin');
// Route::get('/main/logout', 'MainController@logout');
// Route::get('/login', 'AuthController@authenticate');

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');


//view district
// Route::post('/district', function(){
//     return view('adminpanel');
// });
// Route::get('upload','DivisionController@showForm');
// Route::post('uploadFile', 'DivisionController@uploadFile');

//route for division
Route::get('upload', 'AdminController@listDivision');
Route::post('upload', 'AdminController@handleImportDivision');

//route for districts
Route::get('upload/district', 'AdminController@listDistrict');
Route::post('upload/district', 'AdminController@handleImportDistrict');

//list district
// Route::get('/view/district', 'DistrictController@listDistrict');
// Route::get('/district/display', 'DistrictController@displayDistrict');
// Route::post('/district/Save', 'DistrictController@saveDistrict');

//displaylistofdistricts
// Route::get('/district', 'DistrictController@listDistrict');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
