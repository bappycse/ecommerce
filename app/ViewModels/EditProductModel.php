<?php

namespace App\ViewModels;

use App\Services\IProductService;
use Illuminate\Http\Request;

class EditProductModel
{
    private $_editModel;
    private $_product;
    private $_productService;
    private $_id;
    private $_name;
    private $_sku;
    private $_price;
    private $_diccount;
    private $_category;

    public function __construct(IProductService $productService, Request $request)
    {
        $this->_productService = $productService;
        $this->_id = $request->input('id');
        $this->_name = $request->input('name');
        $this->_sku = $request->input('sku');
        $this->_price = $request->input('price');
        $this->_discount = $request->input('discount');
        $this->_category = $request->input('category');
    }

    public function store($request)
    {
        $this->_product = resolve('App\BusinessObjects\IProduct');
        $this->_product->setName( $this->_name);
        $this->_product->setSku($this->_sku);
        $this->_product->setPrice($this->_price);
        $this->_product->setDiscount($this->_discount);
        $this->_product->setCategory($this->_category);  
        dd($this->_product);
        $this->_productService->store($this->_product);
    }

    public function updateProduct($id)
    {
        $_product = resolve('App\BusinessObjects\IProduct');
        $_product->setName($this->_name);
        $_product->setSku($this->_sku);
        $_product->setPrice($this->_price);
        $_product->setDiscount($this->_discount);
        $_product->setCategory($this->_category);

        $this->_productService->updateProduct($_product, $id);
        return redirect('/products');
    }

      public function delete($id){
        $_product = resolve('App\BusinessObjects\Product');
        $_product->setId($this->_id);
        $this->_productService->delete($id);
     }
}
