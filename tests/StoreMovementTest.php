<?php

namespace Tests;

use App\Models\Product;
use Laravel\Lumen\Testing\DatabaseMigrations;
use Laravel\Lumen\Testing\DatabaseTransactions;

class StoreMovementTest extends TestCase
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

    public function test_store_negative_movements()
    {
        $this->post('/api/movements', ['product_id' => 1, 'quantity' => -5])->seeJsonContains([
            'quantity' => -5
        ])->seeJsonStructure(
            [
                'id',
                'product_id',
                'quantity'
            ]
        );
    }
}
