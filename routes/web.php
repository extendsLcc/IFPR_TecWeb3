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


Route::get( '/', [HomeController::class, 'index'] );

Route::name( 'produtos.' )
    ->prefix( '/produtos' )
    ->group( function () {

        Route::resource( '', ProductController::class )
            ->only( ['create', 'index', 'show'] );

    } );


Route::resource( '/categorias', CategoryController::class )
    ->only( ['create', 'index', 'show'] );
