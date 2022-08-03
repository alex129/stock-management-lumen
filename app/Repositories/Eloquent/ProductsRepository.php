<?php

namespace App\Repositories\Eloquent;

use App\Contracts\MovementsRepositoryContract;
use App\Contracts\ProductsRepositoryContract;
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
        $product = Product::find($id);
        return $product; 
    }
}
