<?php

use Illuminate\Support\Facades\Route;

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
    return view('admin.pages.home.index');
});


Route::prefix('series')->name('series.')->group(function () {
    Route::get('/', 'SeriesController@renderIndex')->name('list');
    Route::get('/create', 'SeriesController@renderCreate')->name('form.new');
    Route::post('/create', 'SeriesController@store')->name('store');
    Route::delete('/{id}', 'SeriesController@delete')->name('delete');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
