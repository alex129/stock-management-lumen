<?php

namespace App\Http\Controllers\Product;

use App\Contracts\ProductsRepositoryContract;
use App\Http\Controllers\Controller;
use App\Repositories\Product\ListProductsRepository;
use Illuminate\Http\Request;

class ListProductsController extends Controller
{
    protected $productsRepository;

    public function __construct(ProductsRepositoryContract $productsRepository)
    {
        $this->productsRepository = $productsRepository;
    }

    public function __invoke()
    {
        return response()->json($this->productsRepository->list());
    }
}
