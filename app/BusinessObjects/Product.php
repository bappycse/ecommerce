<?php

namespace App\BusinessObjects;


class Product implements IProduct
{
    private $id;
    private $brandId;
    private $name;
    private $sku;
    private $image;
    private $price;
    private $salePrice;
    private $status;
    private $category;
    private $subcategory;
    private $discount;
    private $information;

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        return $this->id = $id;
    }

    public function getBrandId()
    {
        return $this->brandId;
    }

    public function setBrandId($id)
    {
        return $this->brandId = $id;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        return $this->name = $name;
    }

    public function getSku()
    {
        return $this->sku;
    }

    public function setSku($sku)
    {
        return $this->sku = $sku;
    }
    public function getImage()
    {
        return $this->image;
    }
    public function setImage($images)
    {
        return $this->image = $images;
    }


    public function getPrice()
    {
        return $this->price;
    }

    public function setPrice($price)
    {
        return $this->price = $price;
    }

    public function getSalePrice()
    {
        return $this->salePrice;
    }

    public function setSalePrice($price)
    {
        return $this->salePrice = $price;
    }

    public function getStatus()
    {
        return $this->status;
    }

    public function setStatus($status)
    {
        return $this->status = $status;
    }

    public function getCategory()
    {
        return $this->category;
    }

    public function setCategory($category)
    {
        return $this->category = $category;
    }

    public function getSubCategory()
    {
        return $this->subcategory;
    }

    public function setSubCategory($subcategory)
    {
        return $this->subcategory = $subcategory;
    }

    public function getDiscount()
    {
        return $this->discount;
    }

    public function setDiscount($discount)
    {
        return $this->discount = $discount;
    }

    public function getInfo()
    {
        return $this->information;
    }

    public function setInfo($info)
    {
        return $this->information = $info;
    }
}
