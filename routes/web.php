<?php

use App\Http\Controllers\ViewsControllers\CategoriaController;
use App\Http\Controllers\ViewsControllers\HomeController;
use App\Http\Controllers\ViewsControllers\ProdutoController;
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

        Route::resource( '', ProdutoController::class )
            ->only( ['create', 'index', 'show'] );

        Route::get( '/{name}/{quantity}/{price}', [ProdutoController::class, 'show'] );

    } );


Route::resource( '/categorias', CategoriaController::class )
    ->only( ['create', 'index', 'show'] );
