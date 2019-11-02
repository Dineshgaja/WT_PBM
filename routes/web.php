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

Route::get('/', function () {
    return view('Home');
});
Route::get('/admin', 'PagesController@index');
Route::get('/admin/registrations', 'PagesController@adminreg');
Route::get('/admin/facultyview', 'PagesController@adminfac');
Route::get('/admin/studentview', 'PagesController@adminstu');
Route::get('/admin/eventview', 'PagesController@adminevent');
Route::get('/adminloggedin', 'PagesController@adminindex');
Route::get('/register', 'PagesController@regindex');
Route::get('/events', 'PagesController@eventindex');
Route::post('/registercontrol','registercontrol@store');
