<?php

namespace Market;

class Raspberry extends Product
{
    private $price;

    public function __construct($name, $price, $sellingByKg)
    {
        parent::__construct($name, $price, $sellingByKg);
        $this->price = number_format($price, 2);
    }

    public function setPrice($price)
    {
        $this->price = number_format($price, 2);
    }

    public function getPrice()
    {
        return $this->price;
    }
}
