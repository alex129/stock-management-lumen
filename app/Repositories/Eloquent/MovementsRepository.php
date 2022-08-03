<?php

namespace App\Repositories\Eloquent;

use App\Contracts\MovementsRepositoryContract;
use App\Exceptions\RepositoryException;
use App\Models\Movement;
use App\Models\Product;
use Exception;
use Throwable;

class MovementsRepository implements MovementsRepositoryContract
{
    public function store($product_id, $quantity): object
    {
        try {
            $product = Product::find($product_id);
            $movement = $product->movements()->create([
                'quantity' => $quantity
            ]);

            return $movement;
        } catch (Throwable $ex) {
            throw new RepositoryException('Error');
        }
    }
}
