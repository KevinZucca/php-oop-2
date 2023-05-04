<?php

class CatClean extends CatProduct
{
    public $specificName;
    public $storeQuantity;

    function __construct($category, $type, $price, $picture, $specificName, $storeQuantity)
    {
        parent::__construct($category, $type, $price, $picture);
        $this->specificName = $specificName;
        $this->storeQuantity = $storeQuantity;
    }
}
