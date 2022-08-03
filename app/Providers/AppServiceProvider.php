<?php

namespace App\Providers;

use App\Contracts\ProductsRepositoryContract;
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

        //ABILITIES
        $this->app->bind(ProductsRepositoryContract::class, ProductsRepository::class);
    }
}
