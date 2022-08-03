<?php

namespace Tests;

use App\Models\Product;
use Laravel\Lumen\Testing\DatabaseMigrations;
use Laravel\Lumen\Testing\DatabaseTransactions;

class GetProductQuantityTest extends TestCase
{
    use DatabaseMigrations;


    public function setUp(): void
    {
        parent::setUp();

        // seed the database
        $this->artisan('db:seed --class=ProductSeeder');
        // alternatively you can call
        // $this->seed();
    }

    public function test_get_product()
    {
        $this->get('/api/products/1')->seeJsonStructure([
            'id',
            'name',
            'quantity'
        ]);
    }

    public function test_get_product_movements_stock_quantity()
    {
        Product::find(1)->movements()->delete();
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
