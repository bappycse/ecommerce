<?php

namespace App\Businessobeject;

use App\Businessobeject\Address;

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
