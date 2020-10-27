<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/aboutus', function () {
    return view('aboutus');
});

Route::get('/contactus', function () {
    return view('contactus');
});

Route::get('/areas', function () {
    return view('areas');
});
Route::get('/calendar', function () {
    return view('calendar');
});
Route::get('/calendar', 'CalendarController@Index');

Route::get('/calendar/create', 'CalendarController@Create');

Route::post('/calendar/create', 'CalendarController@Store');

Route::get('/calendar/delete/{id}', 'CalendarController@Delete');

Route::delete('/calendar/delete', 'CalendarController@Remove');

Route::get('/calendar/edit/{id}', 'CalendarController@Edit');

Route::post('/calendar/edit', 'CalendarController@Update');

Route::get('/calendar/{id}', 'CalendarController@DetailsMaster');


//Album routes

Route::get('/album', 'AlbumsController@Index');

Route::get('/album/create', 'AlbumsController@Create');

Route::post('/album/store', 'AlbumsController@Store');
