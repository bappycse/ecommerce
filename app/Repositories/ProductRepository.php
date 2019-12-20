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

    public function getWithFilter($field, $fieldValue, $orderColumn, $orderDirection, $itemCount)
    {
        return $this->model->where($field, 'like', '%'.$fieldValue.'%')
            ->orderBy($orderColumn, $orderDirection)
            ->take($itemCount)
            ->get();
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

     public function getPagedProducts($searchText, $sortOrder, $pageIndex, $pageSize)
     {

         $productArr =  $this->getWithFilter('name', $searchText, $sortOrder->columnName, $sortOrder->columnDirection, $pageSize);
         return Helper::allData($productArr);
     }

     public function getTotalProductCount(){
        return count($this->getAll());
     }

     public function getTotalDisplayableProducts($searchText)
     {
         return count($this->getWithFilter('name', $searchText, 'name', 'asc', 6));
     }



}