<?php

namespace App\Library;

use App\ViewModels\EditProductModel;
use Illuminate\Support\Facades\Log;
class Helper
{

    public static function allData($productArr)
    {
        $products = [];

        foreach ($productArr as $productItem) {
            $product = resolve('App\BusinessObjects\IProduct');

            $product->setId($productItem['id']);
            $product->setName($productItem['name']);
            $product->setSku($productItem['image']);
            $product->setCategory($productItem['category']);
            $product->setPrice($productItem['price']);
            $product->setDiscount($productItem['discount']);


            $products[] = $product;
        }

        return $products;
    }

    public static function convertProductFromModel(EditProductModel $model)
    {

        $product = resolve('App\BusinessObjects\IProduct');
        $product->setName($model->name);
        $product->setImage($model->image);
        $product->setSku($model->sku);
        $product->setPrice($model->price);
        $product->setCategory($model->category);
        $product->setDiscount($model->discount);
        return $product;
    }

    public static function catAllData($catArr)
    {
        $categories = [];
        foreach($catArr as $catItem){
            $category = resolve('App\BusinessObjects\ICategory');

            $category->setId($catItem['id']);
            $category->setName($catItem['name']);

            $categories[]= $category;
        }

        return $categories;

    }
}
