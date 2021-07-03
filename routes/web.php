<?php

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

Route::resource( 'produtos', ProdutoController::class )
    ->only( ['create', 'index', 'show'] );

