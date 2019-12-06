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

    public function get($id){
        return $this->_productService->get($id);
    }

    public function getAll(){
        return $this->_productService->getAll();
    }
}
