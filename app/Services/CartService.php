<?php
namespace App\Services;

use App\Repositories\ICartRepository;
use App\Repositories\CartRepository;

class CartService implements ICartService {
    private $_cartTotal;

    public function __construct(ICartRepository $tt)
    {
        $this->_cartTotal = $tt;
    }

    public function getTotal(){
        $this->_cartTotal->getTotal();
    }
}




?>