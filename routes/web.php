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
    return view('index');
});

Route::get('/consultation-and-self-study-chamber','ContentController@selfStudyChamber');
Route::get('/study-group-chamber','ContentController@studyGroupChamber');
Route::get('/lesehan','ContentController@lesehan');
Route::get('/hall','ContentController@hall');
Route::get('/reading-room','ContentController@readingRoom');
Route::get('/refreshment-corner','ContentController@refreshmentCorner');
