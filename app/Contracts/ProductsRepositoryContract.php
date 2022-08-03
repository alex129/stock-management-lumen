<?php 

namespace App\Contracts;

interface ProductsRepositoryContract {
    public function list() :array;
    public function show($id) :object;
}