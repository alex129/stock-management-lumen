<?php

namespace App\Http\Controllers\Product;

use App\Contracts\ProductsRepositoryContract;
use App\Http\Controllers\Controller;
use Exception;

class GetProductController extends Controller
{
    protected $productsRepository;

    public function __construct(ProductsRepositoryContract $productsRepository)
    {
        $this->productsRepository = $productsRepository;
    }

    public function __invoke($id)
    {
        try{
            return response()->json($this->productsRepository->show($id));
        }catch(Exception $ex){
            return response()->json([
                'message' => 'Error'
            ]);
        }
    }
}
