<?php

use App\Http\Controllers\ViewsControllers\CategoryController;
use App\Http\Controllers\ViewsControllers\HomeController;
use App\Http\Controllers\ViewsControllers\ProductController;
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
    return view('welcome');
});


Route::prefix('/')
    ->middleware('auth')
    ->group(function () {

        Route::get('/home', [HomeController::class, 'index'])
            ->name('dashboard');

        Route::resource('/produtos', ProductController::class)
            ->except(['delete']);


        Route::resource('/categorias', CategoryController::class)
            ->only(['create', 'index', 'show']);

    });


require __DIR__ . '/auth.php';
