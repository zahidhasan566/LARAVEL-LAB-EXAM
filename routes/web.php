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

Route::get('/', function(){
    return view('welcome');
});

Route::get('/frontpage', "WebsiteController@index");

Route::get('/', 'GhomeController@index')->name('ghome.index');

Route::get('/login', 'LoginController@index')->name('login.index');
Route::post('/login', 'LoginController@verify');
Route::get('/logout', 'LogoutController@index')->name('logout.index');




    Route::get('/home', 'HomeController@index')->name('home.index');
    Route::get('/student/userlist', 'StudentController@index')->name('student.index');
    Route::get('/student/details/{id}', 'StudentController@show')->name('student.details');
    Route::get('/addcar', 'StudentController@addcar')->name('student.addcar');
    Route::post('/addcar', 'StudentController@cstore');
     Route::get('/student/carlist', 'StudentController@carlist')->name('student.carlist');


Route::get('/student/caredit/{id}', 'StudentController@caredit')->name('student.caredit');
Route::post('/student/caredit/{id}', 'StudentController@updatecar');
Route::get('/student/delete/{id}', 'StudentController@deletecar')->name('student.deletecar');


Route::get('/member/{id}/{mid}', 'MemberController@bookindex')->name('student.book');
Route::get('/member/{id}/{cname}/{cprice}', 'MemberController@confirm')->name('student.confirm');


    Route::get('/emp/add', 'StudentController@add')->name('student.add');
    Route::post('/emp/add', 'StudentController@store');
    Route::get('/emp/edit/{id}', 'StudentController@edit')->name('student.edit');
    Route::post('/emp/edit/{id}', 'StudentController@update');
    Route::get('/emp/delete/{id}', 'StudentController@delete')->name('student.delete');
    Route::post('/emp/delete/{id}', 'StudentController@destroy');



    Route::get('/emp', 'HomeController@index')->name('home.emp');
    Route::get('/job/joblist', 'JobController@index')->name('job.index');
    Route::get('/job/add', 'JobController@create')->name('job.add');
    Route::post('/job/add', 'JobController@store');
    Route::get('/job/edit/{id}', 'JobController@edit')->name('job.edit');
    Route::post('/job/edit/{id}', 'JobController@update');
    Route::get('/job/delete/{id}', 'JobController@destroy')->name('job.delete');
    Route::post('/job/delete/{id}', 'JobController@destroy');

Route::get('/live_search', 'LiveSearch@index')->name('livesearch.index');;
Route::get('/live_search/action', 'LiveSearch@action')->name('live_search.action');












