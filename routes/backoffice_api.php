<?php

/*
|--------------------------------------------------------------------------
| Backoffice API Routes
|--------------------------------------------------------------------------
|
| Here are where registered the Backoffice API routes. These routes are
| loaded by the RouteServiceProvider within a group which is assigned
| the "api" and "auth:api" middleware group.
|
*/

Route::get('courses', 'CoursesController@index');
Route::post('courses', 'CoursesController@store');
Route::get('courses/{course}', 'CoursesController@show');
Route::put('courses/{course}', 'CoursesController@update');
Route::delete('courses/{course}', 'CoursesController@destroy');

Route::put('courses/{course}/publish', 'PublishCourseController@publish');
Route::put('courses/{course}/unpublish', 'PublishCourseController@unpublish');

Route::get('courses/{course}/lessons', 'LessonsController@index');
Route::post('courses/{course}/lessons', 'LessonsController@store');

Route::post('enrollments', 'EnrollmentsController@store');
