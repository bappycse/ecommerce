<?php

class Product
{
    public $title;
    public $regularPrice;
    private $discountPrice;
    public $image;
    public $sku;
    private $available;
    public $quantity;
    private $details;
    private $specification;
    private $rating;
    private $reviews;
    private $price;

    public function __construct()
    {
        
        $this->reviews = new reviews();
        $this->quantity = new quantity();
        $this->rating = new rating();
    }

    public function product($title, $sku)
    {
        $this->title = $title;
        $this->sku = $sku;
    }


    public function price(DiscountPrice $discountPrice)
    {
        $this->price = new discountPrice();
        if ($this->discount) {
           
        }
        if ($this->coupon) {
           
        }
    }



    public function available(Available $available)
    {
        $this->available = new available();
        $stock = $this->available->inStoke();
        if ($this->quantity <= $stock) {
            return true;
        }
    }

    public function details($details)
    {
        $this->details = $details;
    }

    public function specification($specification)
    {
        $this->spectification = [];
    }

    public function rating(Rating $rating)
    {
        $this->rating = new rating();
        $this->rating->ratingCalculate();
    }

    public function review($reviews)
    {
        $this->reviews = $reviews;
    }
}
