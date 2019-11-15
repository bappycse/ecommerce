<?php

namespace App\Repositories;


class CartRepository extends Repository implements ICartRepository
{
    public function getTotal()
    {
        echo "Get Total";
    }
}
