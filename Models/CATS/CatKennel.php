<?php

class CatKennel extends CatProduct
{
    public $specificName;
    public $storeQuantity;
    public $size;

    function __construct($category, $type, $price, $picture, $specificName, $storeQuantity, $size)
    {
        parent::__construct($category, $type, $price, $picture);
        $this->specificName = $specificName;
        $this->storeQuantity = $storeQuantity;
        $this->size = $size;

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
