<?php

namespace App\Repositories;

use App\Repositories\Repository;
use App\Models\Product;
use App\Library\Helper;

class ProductRepository extends Repository implements IProductRepository
{
    public $_product;
    public function __construct()
    {
        $this->_product = resolve('App\Models\Product');
        parent::setModel($this->_product);
    }

    public function add($product)
    {

        $product_arr = [
            'name' => $product->getName(),
            'sku'  => $product->getSku(),
            'price' => $product->getPrice(),
            'discount' => $product->getDiscount(),
            'category' => $product->getCategory()
        ];

        parent::add($product_arr);
    }

    public function get($id){
        $productSingle = parent::get($id);
        $productSingle = $productSingle->toArray();
        return $productItem[] = $productSingle;
    }

    public function getAll(){
       $productBo =  parent::getAll();
       return Helper::allData($productBo);

    }

    public function update($product,$id){
        $product_arr = [
            'name' => $product->getName(),
            'sku'  => $product->getSku(),
            'price'  => $product->getPrice(),
            'discount'  => $product->getDiscount(),
            'category'  => $product->getCategory()
        ];

        parent::update($product_arr,$id);

     }

     public function delete($id){
         parent::delete($id);
     }

     public function getPagedProducts($searchText, $pageIndex, $pageSize)
     {
         return $this->getAll();
     }

     public function getTotalProductCount(){
        return count($this->getAll());
     }

     public function getTotalDisplayableProducts()
     {
         return count($this->getAll());
     }



}
