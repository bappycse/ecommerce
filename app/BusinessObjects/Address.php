<?php 

class Address {
    private $flatNo;
    private $houseNo;
    private $street;
    private $zip;
    private $city;
    private $country;

    public function formattedFullAddress(){
        return "$this->flatNo,$this->houseNo,$this->street,$this->zip,$this->city,$this->country";
    }
}