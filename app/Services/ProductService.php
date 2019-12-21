<?php

namespace App\Services;

use App\BusinessObjects\IProduct;

use App\Repositories\IProductRepository;
use App\ViewModels\PagedData;

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

    public function getProducts($searchText, $sortOrder, $pageIndex,$pageSize)
    {
        $products = $this->_productRepository->getPagedProducts($searchText, $sortOrder, $pageIndex,$pageSize);
        $totalCount = $this->_productRepository->getTotalProductCount();
        $totalDisplayCount = $this->_productRepository->getTotalDisplayableProducts($searchText, $sortOrder, $pageIndex,$pageSize);
        return new PagedData($products,$totalCount,$totalDisplayCount);
    }

    public function updateProduct($product,$id){
        $this->_productRepository->update($product,$id);
    }

    public function delete($id){
        $this->_productRepository->delete($id);
    }
}
