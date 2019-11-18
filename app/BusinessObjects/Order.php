<?php

namespace App\BusinessObjects;


class Order implements IOrder
{
    private $id;
    private $customerId;
    private $addressId;
    private $orderStatusId;
    private $payment;
    private $discounts;
    private $totalProducts;
    private $totalShipping;
    private $tax;
    private $total;
    private $invoice;
    private $trackingNumber;

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        return $this->id = $id;
    }

    public function setCustomerId($customerId)
    {
        return $this->customerId = $customerId;
    }

    public function getCustomerId()
    {
        return $this->customerId;
    }

    public function setaddressId($addressId)
    {
        return $this->addressId = $addressId;
    }

    public function getAddressId()
    {
        return $this->addressId;
    }

    public function setOrdrStatusId($orderStatusId)
    {
        return $this->orderStatusId = $orderStatusId;
    }

    public function getOrdrStatusId()
    {
        return $this->orderStatusId;
    }

    public function setPayment($payment)
    {
        return $this->payment = $payment;
    }

    public function getPayment()
    {
        return $this->payment;
    }

    public function getDiscount()
    {
        return $this->discount;
    }

    public function setDiscount($discount)
    {
        return $this->discount = $discount;
    }

    public function setTotalProducts($totalProducts)
    {
        return $this->totalProducts = $totalProducts;
    }

    public function getTotalProducts()
    {
        return $this->totalProducts;
    }

    public function setTotalShipping($totalShipping)
    {
        return $this->totalShipping = $totalShipping;
    }

    public function getTotalShipping()
    {
        return $this->totalProducts;
    }

    public function setTax($tax)
    {
        return $this->tax = $tax;
    }

    public function getTax()
    {
        return $this->tax;
    }

    public function setTotal($total)
    {
        return $this->total = $total;
    }

    public function getTotal()
    {
        return $this->total;
    }

    public function setInvoice($invoice)
    {
        return $this->invoice = $invoice;
    }

    public function getInvoice()
    {
        return $this->invoice;
    }

    public function setTrackingNumber($trackingNumber)
    {
        return $this->trackingNumber = $trackingNumber;
    }

    public function getTrackingNumber()
    {
        return $this->trackingNumber;
    }
}
