<?php

namespace App\Repositories;

class DiscountRepository extends Repository implements IDiscountRepository
{
    public function discountAmount()
    {
        echo  "200 Tk";
    }
}
