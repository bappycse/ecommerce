<?php

namespace App\Repositories;

use App\Models\Address;

class AddressRepository extends Repository implements IAddressRepository
{

    public function __construct()
    { }

    public function addAddress($present, $permanent)
    {
        $book = new Address;
        $book->present = $present;
        $book->permanent = $permanent;
        $book->save();
    }
}
