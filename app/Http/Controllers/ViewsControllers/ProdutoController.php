<?php

namespace App\Http\Controllers\ViewsControllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProdutoController extends Controller
{

    public function create()
    {

        return view( 'pages.produtos.create.index' );

    }

    public function index()
    {

        return view( 'pages.produtos.index.index' );

    }

    public function show( $name, $quantity, $price )
    {

        return view( 'pages.produtos.show.index', [
            'name' => $name,
            'quantity' => $quantity,
            'price' => $price,
        ] );

    }

}
