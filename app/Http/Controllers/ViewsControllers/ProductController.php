<?php

namespace App\Http\Controllers\ViewsControllers;

use App\Http\Controllers\Controller;
use App\Repositories\ProductRepository;
use Illuminate\Http\Request;

class ProductController extends Controller
{

    public function create()
    {

        return view('pages.produtos.create.view');

    }

    public function index(Request $request, ProductRepository $productRepository)
    {
        $page = $request->query('per_page', 10);
        $order = $request->query('order', 'id');
        $sort = $request->query('sort', 'asc');

        return view('pages.produtos.index.view', [
            'products' => $productRepository->fetch(
                perPage: $page,
                order: $order,
                sort: $sort
            )
        ]);

    }

    public function show($name, $quantity, $price)
    {

        return view('pages.produtos.show.view', [
            'name' => $name,
            'quantity' => $quantity,
            'price' => $price,
        ]);

    }

}
