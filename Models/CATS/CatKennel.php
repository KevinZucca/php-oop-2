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
    }
}
