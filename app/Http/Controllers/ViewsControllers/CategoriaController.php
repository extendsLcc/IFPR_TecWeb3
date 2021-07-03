<?php

namespace App\Http\Controllers\ViewsControllers;

use App\Http\Controllers\Controller;

class CategoriaController extends Controller
{

    public function create()
    {

        return view( 'pages.categorias.create.index' );

    }

    public function index()
    {

        return view( 'pages.categorias.index.index' );

    }

    public function show( $category )
    {

        return view( 'pages.categorias.show.index', [
            'category' => $category,
        ] );

    }

}
