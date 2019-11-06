<?php

namespace App\Services;

use App\Repositories\IProductRepository;
use App\Repositories\Repository;

class ProductService implements IProductService
{ 
    private $_productRepository;

    public function __construct(IProductRepository $productRepository)
    {
        $this->_productRepository = $productRepository;
    }

    public function Add(){
        $this->_productRepository->Add();
    }
}
