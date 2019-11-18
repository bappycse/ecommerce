<?php

namespace App\Services;

use App\BusinessObjects\IProduct;

use App\Repositories\IProductRepository;

class ProductService implements IProductService
{
    private $_productRepository;

    public function __construct(IProductRepository $productRepository)
    {
        $this->_productRepository = $productRepository;
    }

    public function store(IProduct $product)
    {
        $this->_productRepository->add($product);
    }

    public function get($id){
        return $this->_productRepository->get($id);
    }

    public function getAll(){
        return $this->_productRepository->getAll();
      
    }

    public function updateProduct($product,$id){
        $this->_productRepository->update($product,$id);
    }

    public function delete($id){
        $this->_productRepository->delete($id);
    }
}
