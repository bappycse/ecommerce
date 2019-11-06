<?php
namespace App\BusinessObeject;

use App\BusinessObeject\CartItem;
use App\BusinessObeject\Coupon;

class Cart
{
    private $coupon;
    private $cartItem;
    private $totalAmount;

    public function __construct()
    {
        
    }
    public function applyCoupon(Coupon $coupon)
    {
        $this->coupon = $coupon;
    }

    public function getTotalAmount(){
        return $this->totalAmount;
    }
    public function addCartItem(CartItem $cartItem){
        $this->cartItem = $cartItem;

        
    }
}
