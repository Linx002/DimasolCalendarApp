<?php

use App\Http\Controllers\PhotosController;
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

Route::get('/areas', 'AlbumsController@Index');

Route::get('/album/admin', 'AlbumsController@Admin');

Route::post('/album/store', 'AlbumsController@Store');

Route::get('/album/{id}', 'AlbumsController@Show');

Route::post('/album/edit', 'AlbumsController@Update');

Route::get('/album/edit/{id}', 'AlbumsController@Edit');

Route::get('/album/delete/{id}', 'AlbumsController@Delete');

Route::delete('/album/delete', 'AlbumsController@Remove');



//Photos routes

Route::get('/photo/add/{id}', 'PhotosController@Add');

Route::post('/photo/store', 'PhotosController@Store');

Route::post('/photo/{id}', 'PhotosController@Show');

Route::delete('/photo/delete', 'PhotosController@Delete');
