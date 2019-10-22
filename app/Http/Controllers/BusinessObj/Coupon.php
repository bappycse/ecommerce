<?php

class Coupon
{
   
    public function __construct()
    { 
       
    }

    public function coupon($coupon)
    {
        if($coupon){
            $this->discountPrice = $this->discountPrice - $coupon;
        }
    }

    
}
