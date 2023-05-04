<?php

class CatFood extends CatProduct
{
    public $specificName;
    public $storeQuantity;

    function __construct($category, $type, $price, $picture, $specificName, $storeQuantity)
    {
        parent::__construct($category, $type, $price, $picture);
        $this->specificName = $specificName;
        $this->storeQuantity = $storeQuantity;

        $this->setQuantity();
    }

    public function setQuantity()
    {
        if ($this->storeQuantity == 1) {
            return $this->storeQuantity .= " piece";
        } else {
            return $this->storeQuantity .= " pieces";
        }
    }
}
