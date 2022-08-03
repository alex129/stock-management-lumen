<?php 

namespace App\Contracts;

interface MovementsRepositoryContract {
    public function store($product_id, $quantity) :object;
}