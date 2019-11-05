<?php

namespace App\Services;

use App\Repositories\IDiscountRepository;
use App\Repositories\DiscountRepository;

class DiscountService implements IDiscountService
{
    private $totalDissount;
    public function __construct(IDiscountRepository $discount)
    {
        $this->totalDissount = $discount;
    }

    public function discount()
    {
        $this->totalDissount->discountAmount();
     }
}
