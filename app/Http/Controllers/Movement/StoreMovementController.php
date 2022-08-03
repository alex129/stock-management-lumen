<?php

namespace App\Http\Controllers\Movement;

use App\Contracts\MovementsRepositoryContract;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class StoreMovementController extends Controller
{
    protected $movementsRepository;

    public function __construct(MovementsRepositoryContract $movementsRepository)
    {
        $this->movementsRepository = $movementsRepository;
    }

    public function __invoke(Request $request)
    {
        $movement = $this->movementsRepository->store($request->product_id, $request->quantity);
        return response()->json($movement);
    }
}
