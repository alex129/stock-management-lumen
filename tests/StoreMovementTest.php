<?php

namespace Tests;

use App\Models\Product;
use Laravel\Lumen\Testing\DatabaseMigrations;
use Laravel\Lumen\Testing\DatabaseTransactions;

class StoreMovementTest extends TestCase
{
    public function test_store_movement()
    {
        $this->post('/api/movements', ['product_id' => 1, 'quantity' => 5])->seeJsonStructure(
            [
                'id',
                'product_id',
                'quantity'
            ]
        );
    }
}
