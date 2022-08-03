<?php

namespace App\Repositories\Eloquent;

use App\Contracts\MovementsRepositoryContract;
use App\Contracts\ProductsRepositoryContract;
use App\Exceptions\RepositoryException;
use App\Models\Movement;
use App\Models\Product;

class ProductsRepository implements ProductsRepositoryContract
{
    public function list(): array
    {
        return Product::all()->toArray();
    }

    public function show($id): object
    {
        try {
            $product = Product::find($id);
            return $product;
        } catch (\Throwable $th) {
            throw new RepositoryException('Error');
        }
    }
}
