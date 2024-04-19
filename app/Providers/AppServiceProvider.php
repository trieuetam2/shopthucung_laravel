<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

use App\Repositories\IProductRepository;
use App\Repositories\ProductRepository;

use App\Repositories\IDanhmucRepository;
use App\Repositories\DanhmucRepository;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
       $this->app->bind(IProductRepository::class, ProductRepository::class);
       $this->app->bind(IDanhmucRepository::class, DanhmucRepository::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
