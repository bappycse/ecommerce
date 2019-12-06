<?php

namespace App\ViewModels;
use App\Services\IProductService;
use Illuminate\Support\Facades\Log;

class ProductModel implements IProductModel
{
    private $_productService;

    public function __construct(IProductService $productService)
    {
        $this->_productService =  $productService;
    }

    public function get($id)
    {
        return $this->_productService->get($id);
    }

    public function getAll()
    {
        return $this->_productService->getAll();
    }

    public function getProductsJsonData(DataTablesModel $dataTablesModel)
    {
       
        $records = $this->_productService->getProducts(
            $dataTablesModel->getSearchText(),
            $dataTablesModel->getPageIndex(),
            $dataTablesModel->getPageSize()
        );
    
        $total = $records->total;
        $totalFiltered = $records->totalDisplay;

        Log::debug("total:" . $total);
        return
            [
                "recordsTotal" => $total,
                "recordsFiltered" => $totalFiltered,
                "data" => $this->getProductFieldValues($records->data)
            ];


        
    }



    private function getProductFieldValues($productData)
    {
        $products = [];
        for ($i = 0; $i < count($productData); $i++) {
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
