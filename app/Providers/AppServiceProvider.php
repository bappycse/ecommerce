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
            'App\BusinessObjects\IProduct',
            'App\BusinessObjects\Product'
        );

        $this->app->bind(
            'App\BusinessObjects\ICategory',
            'App\BusinessObjects\Category'
        );

        $this->app->bind(
            'App\Repositories\ICategoryRepository',
            'App\Repositories\CategoryRepository'
        );

        $this->app->bind(
            'App\Repositories\IProductRepository',
            'App\Repositories\ProductRepository'
        );

        $this->app->bind(
            'App\Services\IProductService',
            'App\Services\ProductService'
        );

        $this->app->bind(
            'App\Services\ICategoryService',
            'App\Services\CategoryService'
        );

        $this->app->bind(
            'App\Repositories\IAddressRepository',
            'App\Repositories\AddressRepository'
        );

        $this->app->bind(
            'App\Services\IAddressService',
            'App\Services\AddressService'
        );

        $this->app->bind(
            'App\ViewModels\ICreateBookModel',
            'App\ViewModels\CreateBookModel'
        );

        $this->app->bind(
            'App\ViewModels\IProductModel',
            'App\ViewModels\ProductModel'
        );

        $this->app->bind(
            'App\ViewModels\ICategoryModel',
            'App\ViewModels\CategoryModel'
        );

        $this->app->bind(
            'App\Repositories\IBookRepository',
            'App\Repositories\BookRepository'
        );

        $this->app->bind(
            'App\Services\IBookService',
            'App\Services\BookService'
        );
        $this->app->bind(
            'App\ViewModel\CreateBookModel'
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
