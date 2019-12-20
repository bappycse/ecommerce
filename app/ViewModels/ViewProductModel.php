<?php
namespace App\ViewModels;

use Illuminate\Http\Request;
use App\Services\IProductService;

class ViewProductModel {
    private $_productService;

    public function __construct(IProductService $productService)
    {
        $this->_productService = $productService;
    }

    public function getAll($id){
        return $this->_productService->getAll();
    }

    public function get($id){
        $product = resolve('App\BusinessObjects\IProduct');
        $product->setId($id);
    }

    public function getProductsJsonData(DataTablesModel $dataTablesModel){
        $total = 0;
        $totalFiltered = 0;
        $records = $this->_productService->getProducts(
          $dataTablesModel->getSearchText(),
          $dataTablesModel->getPageIndex(),
          $dataTablesModel->getPageSize()
        );

        $total = $records->total;
        $totalFiltered  = 0;
        return [
            "recordsTotal" => $total,
            "recordsFiltered" => $totalFiltered,
            "data"          => $this->getProductFieldValue($records->data)
        ];
    }

    public function getProductFieldValue($productData)
    {
        $products = [];
        for ($i = 0; $i < count($productData); $i++)
        {
            $products[] = [
                $productData[$i]->getId(),
                $productData[$i]->getName(),
                $productData[$i]->getImage(),
                $productData[$i]->getPrice(),
                $productData[$i]->getDiscount(),
            ];
        }
        return $products;
    }
}
