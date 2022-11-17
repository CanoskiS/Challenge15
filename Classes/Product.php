<?php

namespace Market;

class Product implements Total
{
    private $name;
    private $price;
    private $sellingByKg;

    public function __construct($name, $price, $sellingByKg)
    {
        $this->name = $name;
        $this->price = $price;
        // $this->sellingByKg = $sellingByKg;

        switch ($sellingByKg) {
            case 'Kg':
                $this->sellingInKg = true;
                break;
            case 'gunny sack':
                $this->sellingInSack = false;
                break;
            default:
                die("Error!!! Must set 'Kg' or 'gunny sack' for sellingByKg argument!");
                break;
        }
    }

    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    public function setPrice($price)
    {
        $this->price = $price;

        return $this;
    }

    public function setMesure($sellingByKg)
    {
        if ($sellingByKg == 'kg') {
            $this->sellingInKg = true;
            $this->sellingInSack = false;
        } else if ($sellingByKg == 'ganny sack') {
            $this->sellingInKg = false;
            $this->sellingInSack = true;
        } else {
            echo "Error!!! Must set 'Kg' or 'gunny sack' for sellingByKg argument!";
        }
    }

    public function getName()
    {
        return $this->name;
    }

    public function getPrice()
    {
        return $this->price;
    }

    public function getMeasure()
    {
        if ($this->sellingInKg) {
            return 'Kg';
        } else if ($this->sellingInSack) {
            return 'gunny sack';
        } else {
            return "Error!!! Must set 'Kg' or 'gunny sack' for sellingByKg argument!";
        }
    }
    public function isSellingInKg()
    {
        return $this->isSellingInKg;
    }

    public function isSellingInSack()
    {
        return $this->isSellingInSack;
    }

    public function total()
    {
    }
}
