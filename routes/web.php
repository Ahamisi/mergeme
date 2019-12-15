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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/jobs','JobPostController@index')->name('job');
Route::get('/jobs/{id}','JobPostController@show')->name('show_job');

Route::get('/post_job','JobPostController@create')->name('savejob');
Route::post('JobPostController', 'JobPostController@store');

Route::post('/apply','JobApplicationsController@store');
Route::get('/applicants','JobApplicationsController@index');


Route::resource('ticket', 'TicketController');
Route::resource('ticket-entry', 'TicketEntryController');
Route::post('ckeditor/image_upload', 'CKEditorController@upload')->name('upload');
