<?php

class DiscountPrice
{
    private $discount;
    private $coupon;
    private $discountPrice;
    public function __construct(Coupon $coupon)
    { 
        $coupon = new Coupon;
    }

    public function discount($discount)
    {
        $this->discount = $discount;
        $this->discountPrice = $this->discountPrice - $discount;
    }

    public function coupon($coupon)
    {
        if($coupon){
            $this->discountPrice = $this->discountPrice - $coupon;
        }
    }

    
}
