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
