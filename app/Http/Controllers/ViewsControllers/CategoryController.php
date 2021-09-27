<?php

namespace App\Http\Controllers\ViewsControllers;

use App\Http\Controllers\Controller;

class CategoryController extends Controller
{

    public function create()
    {

        return view( 'pages.categorias.create.view' );

    }

    public function index()
    {

        return view( 'pages.categorias.index.view' );

    }

    public function show( $category )
    {

        return view( 'pages.categorias.show.view', [
            'category' => $category,
        ] );

    }

}
