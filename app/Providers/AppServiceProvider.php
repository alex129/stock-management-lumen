<?php

namespace App\Providers;

use App\Contracts\MovementsRepositoryContract;
use App\Contracts\ProductsRepositoryContract;
use App\Repositories\Eloquent\MovementsRepository;
use App\Repositories\Eloquent\ProductsRepository;
use Closure;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {        
        //BIND INTERFACE IMPLEMENTATIONS

        //PRODUCTS
        $this->app->bind(ProductsRepositoryContract::class, ProductsRepository::class);
        //MOVEMENTS
        $this->app->bind(MovementsRepositoryContract::class, MovementsRepository::class);
    }
}
