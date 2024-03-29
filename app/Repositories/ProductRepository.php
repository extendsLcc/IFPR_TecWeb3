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

    public function find(int $id): Product
    {
        return Product::findOrFail($id);
    }

    public function store(array $attributes): Product
    {
        return Product::create($attributes);
    }

    public function update(array $attributes, int $id)
    {
        return Product::whereId($id)
            ->update($attributes);
    }

}
