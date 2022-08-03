<?php

namespace Tests;

use App\Models\Product;
use Laravel\Lumen\Testing\DatabaseMigrations;
use Laravel\Lumen\Testing\DatabaseTransactions;

class ListProductsTest extends TestCase
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

    public function test_list_products()
    {
        $this->get('/api/products')->seeJsonStructure([
            [
                'id',
                'name',
                'quantity'
            ]
        ]);
    }
}
