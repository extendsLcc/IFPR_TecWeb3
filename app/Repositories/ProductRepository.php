<?php

namespace App\Repositories;

use App\Models\Product;
use Illuminate\Pagination\AbstractPaginator;

class ProductRepository
{

    public function fetch(int $perPage, string $order, string $sort): AbstractPaginator
    {
        return Product::orderBy($order, $sort)->paginate($perPage);
    }

}
