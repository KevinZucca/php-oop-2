<?php


class CatToy extends CatProduct
{
    public $specificName;
    public $storeQuantity;
    public $material;

    function __construct($category, $type, $price, $picture, $specificName, $storeQuantity, $material)
    {
        parent::__construct($category, $type, $price, $picture);
        $this->specificName = $specificName;
        $this->storeQuantity = $storeQuantity;
        $this->material = $material;
    }
}
