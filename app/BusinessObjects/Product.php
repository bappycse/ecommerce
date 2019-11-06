<?php

namespace App\Businessobeject;

use App\Businessobeject\ProductImage;
use App\Businessobeject\Category;
use App\Businessobeject\SubCategory;
use App\Businessobeject\Price;
use App\Businessobeject\Discount;

class Product implements IProduct
{
    private $name;
    private $sku;
    private $images;
    private $category;
    private $subcategory;
    private $price;
    private $discount;
    private $information;

    public function listProduct(){

    }

    public function Categories(ICartRepository $category){

    }

    public function searchProduct(){
        
    }





}
