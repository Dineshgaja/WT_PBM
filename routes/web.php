<?php
use App\faculty_bodies;
use App\student_bodies;
use App\events;

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
	$events=  events::all();
    return view('events')->with('events',$events);
});
Route::get('/admin', 'PagesController@index');
Route::get('/admin/registrations', 'PagesController@adminreg');
Route::get('/admin/facultyview/{bname}', 'PagesController@adminfac');
Route::get('/admin/map/{type}/{bname}/{id}', function($type,$bname,$id){
	if ($type=='faculty') {
		$row=faculty_bodies::where('fid',$id)->where('bodyname',$bname)->first();	
	}
	elseif ($type=='student') {
		$row=student_bodies::where('sid',$id)->where('bodyname',$bname)->first();
	}
	else
		return "some error occured";
	return view('admin.regedit',['type'=>$type,'bname'=>$bname,'id'=>$id])->with('row',$row);
});
Route::get('/admin/studentview/{bname}', 'PagesController@adminstu');
Route::get('/admin/eventview/{act}/{id}', 'PagesController@adminevent');
Route::post('/admin/{act}/{id}', 'PagesController@eventedit');
Route::get('/adminloggedin', 'PagesController@adminindex');
Route::get('/register/{type}', 'PagesController@regindex');
Route::get('/events', 'PagesController@eventindex');
Route::post('/registercontrol/{type}','registercontrol@store');
Route::post('/admin/reg/{act}/{type}/{bname}/{id}', 'PagesController@regmap');
Route::get('/admin/remove/{type}/{bname}/{id}', 'PagesController@regremove');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
