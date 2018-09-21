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
    return view('index', [
        'title' => 'Home',
    ]);
})->name('home');

Route::get('/booking', 'ContentController@booking')->name('booking');
Route::get('/schedule', 'ContentController@schedule')->name('schedule');

Route::get('/consultation-and-self-study-chamber','ContentController@selfStudyChamber')->name('self-study-chamber');
Route::get('/study-group-chamber','ContentController@studyGroupChamber')->name('study-group-chamber');
Route::get('/lesehan','ContentController@lesehan')->name('lesehan');
Route::get('/hall','ContentController@hall')->name('hall');
Route::get('/reading-room','ContentController@readingRoom')->name('reading-room');
Route::get('/refreshment-corner','ContentController@refreshmentCorner')->name('refreshment-corner');