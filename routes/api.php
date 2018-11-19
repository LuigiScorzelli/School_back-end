<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
// studenti
Route::get('/studenti', 'StudentController@index');
Route::get('/studenti/{id}', 'StudentController@detail');
Route::post('/studenti', 'StudentController@create');
Route::delete('/studenti/{id}', 'StudentController@delete');
// Route::put('/studenti/{id}', 'StudentController@edit');

// insegnanti
Route::get('/insegnanti', 'TeacherController@index');
Route::get('/insegnanti/{id}', 'TeacherController@detail');
Route::post('/insegnanti', 'TeacherController@create');
Route::delete('/insegnanti/{id}', 'TeacherController@delete');


// corsi
Route::get('/corsi', 'CourseController@index');
Route::get('/corsi/{id}', 'CourseController@detail');
