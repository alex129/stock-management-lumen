<?php

namespace Tests;

use App\Models\Product;
use Laravel\Lumen\Testing\DatabaseMigrations;
use Laravel\Lumen\Testing\DatabaseTransactions;

class ListProductsTest extends TestCase
{
    public function test_list_products()
    {
        $response = $this->get('/api/products')->seeJsonStructure([
            [
                'id',
                'name',
                'quantity'
            ]
        ]);
    }
}
