<?php

namespace Market;

class MarketStall
{
    public $products;
    private $stallNumber;

    public function __construct($stallNumber)
    {
        $this->stallNumber = $stallNumber;
        $this->products = [];
    }

    public function setStallNumebr($stallNumber)
    {
        $this->stallNumber = $stallNumber;

        return $this;
    }

    public function getStallNumber()
    {
        return $this->stallNumber;
    }

    public function getProducts()
    {
        return $this->products;
    }

    public function addProduct(Product $product_to_add)
    {
        if ($product_to_add instanceof Product) {
            $this->products[$product_to_add->getName()] = $product_to_add;
        } else {
            echo "ERROR!";
        }
    }

    public function total()
    {
        $total = 0;
        foreach ($this->products as $product) {
            $total = $total + $product->total();
        }
        return $total;
    }
}
