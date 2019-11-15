<?php

namespace App\Services;

use App\Repositories\IAddressRepository;

class AddressService implements IAddressService {
    private $_addressRepository;
    public function __construct(IAddressRepository $addressRepository)
    {
        $this->_addressRepository = $addressRepository;
    }

    public function addAddress($presentAddress,$permanentAddress){
        $this->_addressRepository->addAddress($presentAddress,$permanentAddress);
    }
}