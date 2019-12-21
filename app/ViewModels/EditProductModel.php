<?php

namespace App\ViewModels;

use App\Services\IProductService;
use App\Library\Helper;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class EditProductModel
{
    private $_update;
    private $_product;
    private $_productService;
    private $_id;
    private $_name;
    private $_sku;
    private $_price;
    private $_discount;
    private $_category;

    public function __construct(IProductService $productService, Request $request)
    {
        $this->_productService = $productService;
        $this->loadFields($request);
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
        $product = Helper::convertProductFromModel($this);
        $this->_productService->store($product);
    }

    public function updateProduct($id)
    {
        $product = Helper::convertProductFromModel($this);
        $this->_productService->updateProduct($product, $id);
        return redirect('/products');
    }

      public function delete($id){
        $_product = resolve('App\BusinessObjects\Product');
        $_product->setId($this->_id);
        $this->_productService->delete($id);
     }

    private function loadFields(Request $request)
    {
        if( $request->hasFile('image')) {
            $storename = time() . '.' . $request->file('image')->getClientOriginalExtension();
            $request->file('image')->move(public_path('uploads'), $storename);
            $this->image = $storename;
        }
        $this->name = $request->input('name');

        $this->sku = $request->input('sku');
        $this->price = $request->input('price');
        $this->category = $request->input('category');
        $this->discount = $request->input('discount');
    }
}
