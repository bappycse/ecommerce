<?php


namespace App\ViewModels;

use Illuminate\Http\Request;

use App\Services\IProductService;

class ProductModel implements IProductModel
{
    private $_productService;

    private $_product;

    public function __construct(IProductService $productService)
    {
        $this->_productService =  $productService;
    }

    public function store($request)
    {
        $this->_product = resolve('App\BusinessObjects\IProduct');
        $this->_product->setName($request->input('name'));
        $this->_product->setPrice($request->input('price'));
        $this->_product->setCategory($request->input('category'));
        $this->_product->setDiscount($request->input('discount'));
        $this->_productService->store($this->_product);
    }
}
