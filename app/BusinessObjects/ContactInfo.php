<?php

namespace App\BusinessObjects;

use App\BusinessObjects\Address;

class ContactInfo
{
    private $phone;
    private $email;
    private $address;

    public function setAddress(Address $address)
    {
        $this->address = $address;
    }
}
