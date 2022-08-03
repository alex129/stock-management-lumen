<?php

namespace Tests;

use App\Models\Product;
use Laravel\Lumen\Testing\DatabaseMigrations;
use Laravel\Lumen\Testing\DatabaseTransactions;

class GetProductQuantityTest extends TestCase
{
    public function test_get_product()
    {
        $response = $this->get('/api/products/1')->seeJsonStructure([
            'id',
            'name',
            'quantity'
        ]);
    }

    public function test_get_product_movements_stock_quantity()
    {
        Product::find(1)->movements()->createMany([
            ['quantity' => 10],
            ['quantity' => -5],
        ]);

        $this->get('/api/products/1')->seeJsonContains([
            'quantity' => 5
        ]); 
    }

    public function test_get_product_quantity_equals_0()
    {
        Product::find(1)->movements()->delete();
        $this->get('/api/products/1')->seeJsonContains([
            'quantity' => 0
        ]);
    }
}
