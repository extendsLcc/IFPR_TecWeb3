<?php

namespace App\Http\Controllers\ViewsControllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProdutoController extends Controller
{

    public function create()
    {

        return view( 'pages.produtos.create.view' );

    }

    public function index()
    {

        return view( 'pages.produtos.index.view' );

    }

    public function show( $name, $quantity, $price )
    {

        return view( 'pages.produtos.show.view', [
            'name' => $name,
            'quantity' => $quantity,
            'price' => $price,
        ] );

    }

}
