<?php

require_once "./Traits/Measurable.php";

class Kennel extends Product
{
    use Measurable;

    public $specificName;
    public $size;

    function __construct($category, $type, $price, $picture, $specificName, $size)
    {
        parent::__construct($category, $type, $price, $picture);
        $this->specificName = $specificName;
        $this->size = $size;
        $this->setQuantity(2);
    }
}
