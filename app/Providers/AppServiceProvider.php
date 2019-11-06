<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

use Illuminate\Support\Facades\Schema;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(
            'App\Repositories\IProductRepository',
            'App\Repositories\ProductRepository'
        );

        $this->app->bind(
            'App\Services\IProductService',
            'App\Services\ProductService'
        );

        $this->app->bind(
            'App\Repositories\ICategoryRepository',
            'App\Repositories\CategoryRepository'
        );

        $this->app->bind(
            'App\Services\ICategoryService',
            'App\Services\CategoryService'
        );

        $this->app->bind(
            'App\Repositories\IDiscountRepository',
            'App\Repositories\DiscountRepository'
        );

        $this->app->bind(
            'App\Services\IDiscountService',
            'App\Services\DiscountService'
        );
       
        
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {

        Schema::defaultStringLength(191);

    }
}
